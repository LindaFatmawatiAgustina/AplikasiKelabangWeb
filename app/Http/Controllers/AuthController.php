<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\User;
use Auth;

class AuthController extends Controller
{
<<<<<<< HEAD
 
=======
   
>>>>>>> a4c47b3706486b4dda1f1ce28cf7b555433f8811
    public function login(){

    	return view('auth.login');
    }



    public function register (){

    	return view('auth.register');
    }
<<<<<<< HEAD
    

    public function postregister(Request $request)
    {
        $this->validate($request,[
=======

    public function postregister(Request $request)
    {
            $this->validate($request,[
>>>>>>> a4c47b3706486b4dda1f1ce28cf7b555433f8811
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
<<<<<<< HEAD
        return redirect()->route('login');
=======
            return redirect()->route('login');
>>>>>>> a4c47b3706486b4dda1f1ce28cf7b555433f8811
    }


    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            
            if(auth()->user()->role == 'dinaspu'){
<<<<<<< HEAD
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
=======
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
>>>>>>> a4c47b3706486b4dda1f1ce28cf7b555433f8811
        
        //jika logout maka akan diarahkan ke halaman login..
        auth()->logout();
        alert()->success('Terima Kasih', 'Berhasil Logout');
        return redirect()->route('login');
    }

}
