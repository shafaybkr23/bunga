<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }
    public function indexmitra()
    {
        return view('product-mitra');
    }
    public function katalogmitra()
    {
        $products = Product::where('user_id', auth()->user()->id)->get();
        $route = 'mitra.store';
        $product='';
        return view('katalog-mitra', compact('products', 'route', 'product'));
    }
    public function toko()
    {
        return view('toko');
    }
    public function edit($id)
    {
        $products = Product::where('user_id', auth()->user()->id)->get();
        $product = Product::find($id);
        $route = 'katalogmitra.update';
        return view('katalog-mitra', compact('product', 'route', 'products'));
    }
    public function update(Request $request, $id)
    {
        //validasi form
        $validasi = $request->validate([
            'product_title' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
        ]);
        // dd($request->all());
        //jika ada yang kosong
        if ($request->product_title == '' || $request->product_price == '' ||  $request->product_description == '' ) {
            Session::flash('message', 'Data tidak boleh kosong');
            return redirect()->back()->with('error', 'Data tidak boleh kosong');
        }

        $product = Product::find($id);
        $product->name = $request->product_title;
        $product->price = $request->product_price;
        $product->description = $request->product_description;
        //upload image
        if($request->product_image){
            $image = $request->file('product_image');
            $image->storeAs('public/products', $image->hashName());
            $product->image = $image->hashName();
        }
        $product->user_id = auth()->user()->id;
        $product->save();
        if ($product) {
            Session::flash('message', 'Produk Berhasil Diupdate');
            return redirect('katalogmitra');
        } else {
            Session::flash('message', 'Produk Gagal Diupdate');
            return redirect('katalogmitra');
        }
        return redirect('katalogmitra');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        if ($product) {
            Session::flash('message', 'Produk Berhasil Dihapus');
            return redirect('katalogmitra');
        } else {
            Session::flash('message', 'Produk Gagal Dihapus');
            return redirect('katalogmitra');
        }
        return redirect('katalogmitra');
    }
    //store
    public function store(Request $request)
    {
        //validasi form
        $validasi = $request->validate([
            'product_title' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'product_image' => 'required',
        ]);
        // dd($request->all());
        //jika ada yang kosong
        if ($request->product_title == '' || $request->product_price == '' ||  $request->product_description == '' || $request->product_image == '') {
            Session::flash('message', 'Data tidak boleh kosong');
            return redirect()->back()->with('error', 'Data tidak boleh kosong');
        }
        //upload image
        $image = $request->file('product_image');
        $image->storeAs('public/products', $image->hashName());
        $product = Product::create([
            'name' => $request->product_title,
            'price' => $request->product_price,
            'description' => $request->product_description,
            'image' => $image->hashName(),
            'user_id' => auth()->user()->id,
        ]);
        if ($product) {
            Session::flash('message', 'Produk Berhasil Ditambahkan');
            return redirect('katalogmitra');
        } else {
            Session::flash('message', 'Produk Gagal Ditambahkan');
            return redirect('katalogmitra');
        }
        return redirect('katalogmitra');
    }
    //detail
    public function detail($id)
    {
        $product = Product::find($id);
        return view('product', compact('product'));
    }
    public function allproduct($id)
    {
        $products = Product::where('user_id', $id)->paginate(10);
        $mitra = User::find($id);
        return view('all-product', compact('products', 'mitra'));
    }
}
