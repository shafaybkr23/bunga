<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        //10 product terbaru
        $products = Product::latest()->take(20)->get();
        $mitras = User::where('role', 'mitra')->get();
        return view('index', compact('products', 'mitras'));
    }

    public function indexmitra()
    {
        $products = Product::where('user_id', auth()->user()->id)->get();
        return view('index-mitra', compact('products'));
    }

    public function toko()
    {
        //pagination
        $mitras = User::where('role', 'mitra')->paginate(10);
        return view('toko', compact('mitras'));
    }
}
