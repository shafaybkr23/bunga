<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('my-account', compact('user'));
    }
    public function update(Request $request)
    {
        //validasi form
        $validasi =     $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'linktree' => 'required',
        ]);
        // dd($request->all());
        //jika ada yang kosong
        if ($request->email == '' || $request->name == '' || $request->phone == '' ||  $request->address == '' || $request->linktree == '') {
            Session::flash('message', 'Data tidak boleh kosong');
            return redirect()->back()->with('error', 'Data tidak boleh kosong');
        }
        $user = auth()->user();
        if ($request->current_password) {
            if (!Hash::check($request->current_password, auth()->user()->password)) {
                Session::flash('message', 'Password lama salah');
                return redirect()->back()->with('error', 'Password lama salah');
            }
            if($request->new_password == null || $request->confirm_password == null){
                Session::flash('message', 'Password baru tidak boleh kosong');
                return redirect()->back()->with('error', 'Password baru tidak boleh kosong');
            }
            if($request->new_password != $request->confirm_password){
                Session::flash('message', 'Password baru tidak sama');
                return redirect()->back()->with('error', 'Password baru tidak sama');
            }
            $user->password = Hash::make($request->new_password);
        }
        if($request->image){
            $image = $request->file('image');
            $image->storeAs('public/users', $image->hashName());
            $user->image = $image->hashName();
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone;
        $user->address = $request->address;
        $user->linktree = $request->linktree;
        $user->save();
        Session::flash('message', 'Data berhasil diupdate');
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }
}
