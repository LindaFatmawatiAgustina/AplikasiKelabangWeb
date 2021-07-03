@extends('layouts.layouts-dinaspu')
@section('navbar')
@include('layouts.navbar')
@endsection


@section('sidebar')
@include('layouts.sidebar')
@endsection


@section('konten')

<div class="kembali">
  <a href="{{ route('pelaporan')}} "><button class="btn btn-primary" >kembali</button></a>
</div>

<center><h2 class="card-title">Update Laporan Tindak Lanjut</h2></center>
<div class="row col-md-12 col-xs jarak ">


  <div class="card-body col-md-4 col-xs" >
    <img alt="image" src="{{asset('asset-template/img/'.$update->file_gambar)}}" height="350dp" width="350dp">
  </div>
  <div class="card-body col-md-4 col-xs" >
    <img alt="image" src="{{asset('asset-template/img/'.$update->file_gambar2)}}" height="350dp" width="350dp">
  </div>
  <div class="card-body col-md-4 col-xs" >
    <img alt="image" src="{{asset('asset-template/img/'.$update->file_gambar3)}}" height="350dp" width="350dp">
  </div>
</div>
<div class="card-body col-md-7 col-xs imgtindaklanjut">

  <form method="post" action="{{route('update_tindak_lanjut',$update->id)}}" enctype="multipart/form-data">
   
    {{csrf_field()}}

    <div class="col-xl-12 col-md-8 col-12 mb-1">
      


<!--  <div class="form-group">

<input type="text" class="form-control" id="id" name="id" placeholder="" disabled value="{{$update->id}}" required=""/>
</div> -->

<div class="form-group">
  <label for="nama">Nama Pelapor</label>
  <input type="text" class="form-control" id="nama" name="nama" placeholder="" disabled value="{{$update->User->nama}}" required=""/>
</div>
<div class="form-group">
  <label for="nama">Nama Jalan</label>
  <input type="text" class="form-control" id="nama" name="nama" placeholder="" disabled value="{{$update->nama_jalan}}" required=""/>
</div>
<div class="form-group">
  <label for="nama">Latitude</label>
  <input type="text" class="form-control" id="nama" name="nama" placeholder="" disabled="" value="{{$update->latitude}}" required=""/>
</div>
<div class="form-group">
  <label for="nama">Longitude</label>
  <input type="text" class="form-control" id="nama" name="nama" placeholder="" disabled="" value="{{$update->longitude}}" required=""/>
</div>


<div class="form-group">
  <label for="nilai">Nilai Kedalam</label>
  @if(!empty($tindak_lanjut))
  <input type="text" class="form-control" id="nilai_kedalaman" name="nilai_kedalaman" placeholder=""  required="" value="{{$tindak_lanjut->nilai_kedalaman}}" />
  @else
  <input type="text" class="form-control" id="nilai_kedalaman" name="nilai_kedalaman" placeholder=""  required=""/>
  @endif
</div>



<div class="form-group">
  <label for="deskripsi">Deskripsi</label>
  @if(!empty($tindak_lanjut))
  <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder=""  required="" value="{{$tindak_lanjut->deskripsi}}" />
  @else
  <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder=""  required="" value="" />
  @endif
</div>

<div class="form-group">
  <label for="deskripsi">Tanggal</label>
  @if(!empty($tindak_lanjut))
  <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder=""  required="" value="{{$tindak_lanjut->tanggal}}" />
  @else
  <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder=""  required="" value="" />
  @endif
</div>

<div class="form-group">

  @if($update->status=='Selesai')
  <label for="nama">Status</label>
  <input type="text" disabled value="{{$update->status}}" name="status" class="form-control"> 

  @elseif($update->status=='Laporan')

  @else
  <label for="nama">Status</label>
  <select   value="{{$update->status}}" name="status" class="form-control"> 
    <option disabled>Diperbaiki</option>
    <option>Selesai</option>
  </select>

  @endif

</div>
@if($update->status=='Diperbaiki')
<button class="btn btn-primary" type="Submit">Update Laporan</button>
@else
@endif




</div>  
</form> 

</div>


@endsection

@section('footer')
@include('layouts.footer')
@endsection
