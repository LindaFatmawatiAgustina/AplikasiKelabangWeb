<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelaporan;
use App\User;
use App\TindakLanjut;
use Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use PDF;

class PelaporanController extends Controller
{
    //

    public function maps_belum_perbaikan(){

    	$pelaporan = Pelaporan::where('status','diperbaiki')->with('User')->get();
        $user=User::all();

    	return view('index.maps_belum_perbaikan',compact('pelaporan','user'));

    }
     public function maps_selesai_perbaikan(){

        $pelaporan = Pelaporan::where('status','selesai')->get();

        return view('index.maps_selesai_perbaikan',compact('pelaporan'));
    }

  


}
