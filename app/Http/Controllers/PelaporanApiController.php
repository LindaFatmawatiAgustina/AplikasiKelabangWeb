<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelaporan;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;
class PelaporanApiController extends Controller
{

	public function CreateLaporanJalan(Request $request,$id){


   
    // dd($file);
    // $nama_file = time() . ".jpeg";
   
    // $tujuan_upload = public_path() . '/pelaporan/';

    // if (file_put_contents($tujuan_upload . $nama_file, base64_decode($file))) {
    //   // code...
    //   $response['msg'] = "Sukses";
    //   echo "Sukses Photo" . $response['msg'];
    // } else {
    //   // code...
    //   $response['msg'] = "error";
    // }

    $user = User::where('id', $id)->first();
    // dd($user->id);

    $data=[
		// 'file_gambar' => $nama_file,
      'nama_jalan' => $request->input('nama_jalan'),
      'latitude' => $request->input('latitude'),
      'longitude' => $request->input('longitude'),
      'status' => 'Laporan',
      'tanggal_laporan'=> Carbon::now(),
      'user_id' =>  $user->id,

    ];

    if ($request->file_gambar) {
     $file = $request->file_gambar;
     $nama_file = "Pelaporan_" . time() . ".jpeg";
     $tujuan_upload = public_path() . '/asset-template/img/';
     if (file_put_contents($tujuan_upload . $nama_file, base64_decode($file))) {
      $data ['file_gambar'] = $nama_file;
    }
  }
  if ($request->file_gambar2) {
   $file = $request->file_gambar2;
   $nama_file = "Pelaporan_" . time() . ".jpeg";
   $tujuan_upload = public_path() . '/asset-template/img/';
   if (file_put_contents($tujuan_upload . $nama_file, base64_decode($file))) {
    $data ['file_gambar2'] = $nama_file;
  }
}
if ($request->file_gambar3) {
 $file = $request->file_gambar3;
 $nama_file = "Pelaporan_" . time() . ".jpeg";
 $tujuan_upload = public_path() . '/asset-template/img/';
 if (file_put_contents($tujuan_upload . $nama_file, base64_decode($file))) {
  $data ['file_gambar3'] = $nama_file;
}
}

if (Pelaporan::create($data)) {
  return response()->json([
    "message" => "success"
  ], Response::HTTP_CREATED);
} else {
  return response()->json([
    "message" => "failed",
  ], Response::HTTP_BAD_REQUEST);
}




    // return response()->json($response);

}
public function ReadLaporanJalan($id){
	
 $pelaporan = Pelaporan::where('user_id',$id)->orderBy('id','desc')->get();
    // $tindaklanjut = TindakLanjut::where('id_pelaporans',$pelaporan->id)->get();
 return response()->json([ 'data' =>$pelaporan]);

}

}
