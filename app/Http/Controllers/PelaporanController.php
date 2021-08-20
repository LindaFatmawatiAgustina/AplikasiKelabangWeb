<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelaporan;
use App\User;
use App\TindakLanjut;
use Alert;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use PDF;

class PelaporanController extends Controller
{

  //

  public function maps_belum_perbaikan()
  {

    $pelaporan = Pelaporan::where('status', 'Laporan')->with('User')->get();
    $user = User::all();

    return view('index.maps_belum_perbaikan', compact('pelaporan', 'user'));
  }
  public function maps_selesai_perbaikan()
  {

    $pelaporan = Pelaporan::where('status', 'selesai')->get();

    return view('index.maps_selesai_perbaikan', compact('pelaporan'));
  }

  public function pelaporan(Request $request)
  {

    $tgl = Carbon::now();
    $periode = $request->periode;
    $periodeselesai = $request->periodeselesai;
    $status = $request->status;

    // $data = Pelaporan::all();


    // if ($request->periodeselesai != null && $status != null) {


    //   $data = DB::table('tindak_lanjuts')
    //     ->join('pelaporans', 'tindak_lanjuts.id_pelaporans', '=', 'pelaporans.id')
    //     ->join('users', 'pelaporans.user_id', '=', 'users.id')

    //     ->select(
    //       'pelaporans.*',
    //       'tindak_lanjuts.nilai_kedalaman',
    //       'tindak_lanjuts.tanggal',
    //       'users.nama',
    //       'pelaporans.tanggal_laporan'
    //     )
    //     ->orderBy('id', 'desc')->where('tindak_lanjuts.tanggal', $periodeselesai)->where('status', $status)
    //     ->get();



      // $data = Pelaporan::where('tanggal_laporan', $periode)->with('User')->where('status', $status)->orderBy('tanggal_laporan', 'DESC')->get();
      // foreach ($data as $value => $v) {
      //   $tindak_lanjut = TindakLanjut::where('id_pelaporans', $v->id)->first();
      //   $user = User::find($v->user_id);
      //   if ($tindak_lanjut) {
      //     $v['nilai_kedalaman'] = $tindak_lanjut->nilai_kedalaman;
      //     $v['tanggal'] = $tindak_lanjut->tanggal;
      //   } else {
      //     $v['nilai_kedalaman'] = '-';
      //     $v['tanggal'] = '-';
      //   }

      //   $v['nama'] = $user->nama;
      // }
    if ($request->periode != null && $status != null) {


      // $data = DB::table('tindak_lanjuts')
      // ->join('pelaporans', 'tindak_lanjuts.id_pelaporans', '=', 'pelaporans.id')
      // ->join('users', 'pelaporans.user_id', '=', 'users.id')

      // ->select(
      //   'pelaporans.*',
      //   'tindak_lanjuts.nilai_kedalaman',
      //   'tindak_lanjuts.tanggal',
      //   'users.nama',
      //   'pelaporans.tanggal_laporan'
      // )
      // ->orderBy('id', 'desc')->where('pelaporans.tanggal_laporan', $periode)->where('status', $status)
      // ->get();



      $data = Pelaporan::where('tanggal_laporan', $periode)->with('User')->where('status', $status)->orderBy('tanggal_laporan', 'DESC')->get();
      foreach ($data as $value => $v) {
        $tindak_lanjut = TindakLanjut::where('id_pelaporans', $v->id)->first();
        $user = User::find($v->user_id);
        if ($tindak_lanjut) {
          $v['nilai_kedalaman'] = $tindak_lanjut->nilai_kedalaman;
          $v['tanggal'] = $tindak_lanjut->tanggal;
        } else {
          $v['nilai_kedalaman'] = '-';
          $v['tanggal'] = '-';
        }

        $v['nama'] = $user->nama;
      }
    } else if ($periode != null) {
      $data = Pelaporan::where('tanggal_laporan', $periode)->with('User')->orWhere('status', $status)->orderBy('tanggal_laporan', 'DESC')->get();
      foreach ($data as $value => $v) {
        $tindak_lanjut = TindakLanjut::where('id_pelaporans', $v->id)->first();
        $user = User::find($v->user_id);
        if ($tindak_lanjut) {
          $v['nilai_kedalaman'] = $tindak_lanjut->nilai_kedalaman;
          $v['tanggal'] = $tindak_lanjut->tanggal;
        } else {
          $v['nilai_kedalaman'] = '-';
          $v['tanggal'] = '-';
        }

        $v['nama'] = $user->nama;
      }
      # code...
    } else if ($status != null) {


      $data = Pelaporan::where('tanggal_laporan', $periode)->with('User')->orWhere('status', $status)->orderBy('tanggal_laporan', 'DESC')->get();
      foreach ($data as $value => $v) {
        $tindak_lanjut = TindakLanjut::where('id_pelaporans', $v->id)->orderBy('tanggal', 'DESC')->first();
        $user = User::find($v->user_id);
        if ($tindak_lanjut) {
          $v['nilai_kedalaman'] = $tindak_lanjut->nilai_kedalaman;
          $v['tanggal'] = $tindak_lanjut->tanggal;
        } else {
          $v['nilai_kedalaman'] = '-';
          $v['tanggal'] = '-';
        }

        $v['nama'] = $user->nama;
      }
      # code...

    } else {
      $data = Pelaporan::orderBy('id', 'desc')->with('User')->orderBy('tanggal_laporan', 'DESC')->get();
      foreach ($data as $value => $v) {
        $tindak_lanjut = TindakLanjut::where('id_pelaporans', $v->id)->first();
        $user = User::find($v->user_id);
        if ($tindak_lanjut) {
          $v['nilai_kedalaman'] = $tindak_lanjut->nilai_kedalaman;
          $v['tanggal'] = $tindak_lanjut->tanggal;
        } else {
          $v['nilai_kedalaman'] = '-';
          $v['tanggal'] = '-';
        }

        $v['nama'] = $user->nama;
      }
    }
    //   if ($request->input('sendemail')) {

    //     // $laporan =Pelaporan::where('status','selesai')->with('User')->get();
    //     // $laporan = Pelaporan::with('User')->get();

    //     $laporan = DB::table('pelaporans')
    //     ->join('users', 'pelaporans.user_id', '=', 'users.id')
    //     ->select('users.*', 'pelaporans.nama_jalan')
    //     ->where('status', 'Selesai')
    //     ->get();


    //     // $laporan = Pelaporan::where();
    //     //return   $laporan;
    //     // $array=[];

    //     foreach ($laporan as $value => $v) {

    //      $link = getenv('APP_URL') . "/pelaporan";


    //      $name = $v->nama;
    //      $email = $v->email;
    //      // $email ="anam45188@gmail.com";

    //      $data = [
    //       'name' => $name,
    //       'body' => "Kepada Saudara/i " . $name . " " . "Memberitahukan bahwa  " . $v->nama_jalan . " Sudah diperbaiki. Untuk lihat data laporan bisa akses " . $link . " Terima Kasih",
    //     ];

    //     Mail::send('index.dinaspu.send_email', $data, function ($message) use ($name, $email) {

    //       $message->to($email, $name)->subject('Pemberitahuan Kelabang App');
    //       // $message->from('khanam9199@gmail.com', 'Admin Kelabang App');
    //     });

    //     alert()->success('Selamat Berhasil Memperbaharui Laporan', 'Siap');
    //     return redirect()->route('pelaporan');
    //   }
    //     // return $laporan;


    //     // if($laporan){

    //     //   $link = getenv('APP_URL') . "/pelaporan";


    //     //   // $name = $laporan->User->nama;
    //     //   // $email = $laporan->User->email;
    //     // // $email ="anam45188@gmail.com";

    //     //   $data = [
    //     //     'name' => $laporan->User->nama,
    //     //     'body' => "Kepada Saudara/i " . $name . " " . "Memberitahukan bahwa  " . $laporan->nama_jalan . " Sudah diperbaiki. Untuk lihat data laporan bisa akses " . $link . " Terima Kasih",
    //     //   ];

    //     //   Mail::send('index.dinaspu.send_email', $data, function ($message) use ($name, $email) {

    //     //     $message->to($email, $name)->subject('Pemberitahuan Kelabang App');
    //     //     $message->from('anam45188@gmail.com', 'Admin Kelabang App');
    //     //   });

    //     //   alert()->success('Selamat Berhasil Memperbaharui Laporan', 'Siap');
    //     //   return redirect()->route('pelaporan');

    //     // }
    // }



    if ($request->input('cetakPdf')) {

      if ($request->periode != null && $status != null) {

        $data = Pelaporan::where('tanggal_laporan', $periode)->with('User')->where('status', $status)->orderBy('tanggal_laporan', 'DESC')->get();

        foreach ($data as $value => $v) {
          $tindak_lanjut = TindakLanjut::where('id_pelaporans', $v->id)->first();
          $user = User::find($v->user_id);
          if ($tindak_lanjut) {
            $v['nilai_kedalaman'] = $tindak_lanjut->nilai_kedalaman;
            $v['tanggal'] = $tindak_lanjut->tanggal;
          } else {
            $v['nilai_kedalaman'] = '-';
            $v['tanggal'] = '-';
          }

          $v['nama'] = $user->nama;
        }
      } else if ($periode != null) {


        $data = Pelaporan::where('tanggal_laporan', $periode)->orderBy('tanggal_laporan', 'DESC')->get();

        foreach ($data as $value => $v) {
          $tindak_lanjut = TindakLanjut::where('id_pelaporans', $v->id)->first();
          $user = User::find($v->user_id);
          if ($tindak_lanjut) {
            $v['nilai_kedalaman'] = $tindak_lanjut->nilai_kedalaman;
            $v['tanggal'] = $tindak_lanjut->tanggal;
          } else {
            $v['nilai_kedalaman'] = '-';
            $v['tanggal'] = '-';
          }

          $v['nama'] = $user->nama;
        }


        # code...
      } else if ($status != null) {
        // $data = Pelaporan::where('tanggal_laporan', $periode)->with('User')->orWhere('status', $status)->get();

        // $data = DB::table('tindak_lanjuts')
        //     ->join('pelaporans', 'tindak_lanjuts.id_pelaporans', '=', 'pelaporans.id')
        //     ->join('users','pelaporans.user_id', '=' , 'users.id')

        //     ->select('pelaporans.*', 'tindak_lanjuts.nilai_kedalaman', 'tindak_lanjuts.tanggal',
        //       'users.nama','pelaporans.tanggal_laporan'
        //       )
        //     ->where('pelaporans.tanggal_laporan', $periode)->orWhere('status', $status)
        //     ->get();

        $data = Pelaporan::where('tanggal_laporan', $periode)->orWhere('status', $status)->orderBy('tanggal_laporan', 'DESC')->get();

        foreach ($data as $value => $v) {
          $tindak_lanjut = TindakLanjut::where('id_pelaporans', $v->id)->first();
          $user = User::find($v->user_id);
          if ($tindak_lanjut) {
            $v['nilai_kedalaman'] = $tindak_lanjut->nilai_kedalaman;
            $v['tanggal'] = $tindak_lanjut->tanggal;
          } else {
            $v['nilai_kedalaman'] = '-';
            $v['tanggal'] = '-';
          }

          $v['nama'] = $user->nama;
        }
      } else {
        // $data = Pelaporan::orderBy('id', 'desc')->with('User')->get();

        // $data = DB::table('tindak_lanjuts')
        //    ->join('pelaporans', 'tindak_lanjuts.id_pelaporans', '=', 'pelaporans.id')
        //    ->join('users','pelaporans.user_id', '=' , 'users.id')

        //    ->select('pelaporans.*', 'tindak_lanjuts.nilai_kedalaman', 'tindak_lanjuts.tanggal',
        //      'users.nama','pelaporans.tanggal_laporan'
        //      )
        //    ->orderBy('id', 'desc')
        //    ->get();

        $data = Pelaporan::orderBy('tanggal_laporan', 'DESC')->get();

        foreach ($data as $value => $v) {
          $tindak_lanjut = TindakLanjut::where('id_pelaporans', $v->id)->first();
          $user = User::find($v->user_id);
          if ($tindak_lanjut) {
            $v['nilai_kedalaman'] = $tindak_lanjut->nilai_kedalaman;
            $v['tanggal'] = $tindak_lanjut->tanggal;
          } else {
            $v['nilai_kedalaman'] = '-';
            $v['tanggal'] = '-';
          }

          $v['nama'] = $user->nama;
        }
      }

      return view('index.cetakpdflaporan', compact('data'));
      // return $data;
    }

    return view('index.laporan', compact('periode', 'tgl', 'data', 'status', 'periode'));
  }



  public function detail_laporan($id)
  {
    $tindak_lanjut = [];
    $update = Pelaporan::findOrFail($id);

    $tindak_lanjut = TindakLanjut::with('Pelaporans')->where('id_pelaporans', $update->id)->first();
    $data = Pelaporan::all();

    return view('index.detail_laporan', compact('update', 'tindak_lanjut', 'data'));
  }


  public function edit_laporan_tindak_lanjut($id)
  {
    $tindak_lanjut = [];
    $update = Pelaporan::findOrFail($id);

    $tindak_lanjut = TindakLanjut::with('Pelaporans')->where('id_pelaporans', $update->id)->first();
    $data = Pelaporan::all();

    return view('index.tambah_tindak_lanjut', compact('update', 'tindak_lanjut', 'data'));
  }

  public function update_laporan(Request $request, $id)
  {

    $laporan = Pelaporan::where('id', $id)->with('User')->first();

    $input2 = ([
      'status' => $request->status,
    ]);


    // $tindak_lanjut->create($input);
    $laporan->update($input2);


    alert()->success('Berhasil Memperbaharui ', 'Selesai');
    return redirect()->route('pelaporan');
  }


  public function update_laporan_tindak_lanjut(Request $request, $id)
  {

    $laporan = Pelaporan::where('id', $id)->with('User')->first();
    $tindak_lanjut = new TindakLanjut;

    $input = ([
      'id_pelaporans' => $id,
      'nilai_kedalaman' => $request->nilai_kedalaman,
      'tanggal' => $request->tanggal,
      'deskripsi' => $request->deskripsi,
    ]);

    $input2 = ([
      'id' => $id,
      'status' => $request->status,
    ]);


    // $tindak_lanjut->create($input);
    $laporan->update($input2);

    if ($tindak_lanjut->create($input)) {
      # code...

      $link = getenv('APP_URL') . "/pelaporan";


      $name = $laporan->User->nama;
      $email = $laporan->User->email;
      // $email ="anam45188@gmail.com";

      $data = [
        'name' => $laporan->User->nama,
        'body' => "Kepada Saudara/i " . $name . " " . "Memberitahukan bahwa  " . $laporan->nama_jalan . " Sudah diperbaiki. Untuk lihat data laporan bisa akses " . $link . " Terima Kasih",
      ];

      Mail::send('index.dinaspu.send_email', $data, function ($message) use ($name, $email) {

        $message->to($email, $name)->subject('Pemberitahuan Kelabang App');
        // $message->from('anam45188@gmail.com', 'Admin Kelabang App');
      });
    }
    alert()->success('Laporan dikirim ke email', 'Selesai');
    return redirect()->route('pelaporan');
  }


  public function hapus_laporan($id)
  {
    $tindak_lanjut = [];
    $update = Pelaporan::findOrFail($id);

    $tindak_lanjut = TindakLanjut::with('Pelaporans')->where('id_pelaporans', $update->id)->first();
    $update->delete();
    if ($tindak_lanjut != null) {
      # code...

      $tindak_lanjut->delete();
      File::delete('asset-template/img/' . $update->file_gambar);
      File::delete('asset-template/img/' . $update->file_gambar2);
      File::delete('asset-template/img/' . $update->file_gambar3);
    }


    alert()->success('Data Berhasil Dihapus');
    return redirect()->back();
  }


  public function cetakpdf()
  {



    $data = TindakLanjut::with('Pelaporans')->orderBy('tanggal', 'ASC')->get();
    $datas = Pelaporan::with('User')->get();



    // $pdf = PDF::loadview('index.cetakpdflaporan',['data'=>$data,'datas'=>$datas])->setOptions(['defaultFont' => 'arial']);
    $pdf = PDF::loadview('index.cetakpdflaporan', ['data' => $data, 'datas' => $datas]);
    // return $pdf->download('laporan-perbaikan-jalan-pdf');
    return $pdf->stream();
    return view('index.cetakpdflaporan', compact('data', 'datas'));
  }

  //


}
