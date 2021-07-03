<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\User;
use Auth;

class AuthController extends Controller
{
 
    public function login(){

    	return view('auth.login');
    }



    public function register (){

    	return view('auth.register');
    }
    

    public function postregister(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|unique:users,nama',
            'email'    => 'required',
            'password' => 'required | min:6',
        ]);
        
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => 'dinaspu',
            'password' => bcrypt($request->password),
        ];

        User::create($data);
        alert()->success('Selamat Berhasil Membuat Akun', 'Silahkan Login disini');
        return redirect()->route('login');
    }


    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            
            if(auth()->user()->role == 'dinaspu'){
                alert()->success('Selamat Berhasil Login', 'Halo Selamat Datang');
                return redirect()->route('maps');
            } elseif (auth()->user()->role == 'admin') {
                alert()->success('Selamat Berhasil Login', 'Halo Selamat Datang');

                return redirect()->route('homes');
            }    
            
        }
        alert()->error('Akun tidak ditemukan','Gagal');
        return redirect('login');
    }

    public function logout(){
        
        //jika logout maka akan diarahkan ke halaman login..
        auth()->logout();
        alert()->success('Terima Kasih', 'Berhasil Logout');
        return redirect()->route('login');
    }

}
