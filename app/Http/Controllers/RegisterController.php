<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function actionregister(Request $request)
    {

        //validasi form
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required|min:6',
            'phone' => 'required',
            'address' => 'required',
            'linktree' => 'required',
        ]);
        //check jika ada yang kosong
        if ($request->email == '' || $request->name == '' || $request->phone == '' || $request->password == '' || $request->address == '' || $request->linktree == '') {
            Session::flash('message', 'Register Gagal. Mohon isi semua form.');
            return redirect('register');
        }
        $image = 'default.jpg';
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'role' => 'mitra',
            'phone_number' => $request->phone,
            'address' => $request->address,
            'linktree' => $request->linktree,
            'image' => $image,

        ]);
        // dd($user);

        if ($user) {
            Session::flash('message', 'Register Berhasil');
            return redirect('register');
        } else {
            Session::flash('message', 'Register Gagal');
            return redirect('register');
        }
        return redirect('register');
    }
}
