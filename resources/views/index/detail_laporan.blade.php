@extends('layouts.layouts-dinaspu')
@section('navbar')
@include('layouts.navbar')
@endsection


@section('sidebar')
@include('layouts.sidebar')
@endsection


@section('konten')

<div class="kembali">
 <!--  <a href="{{ route('pelaporan')}} "><button class="btn btn-warning">kembali</button></a> -->
</div>
<center>
  <h2 class="card-title">Detail Laporan Data Kelola Jalan Berlubang</h2>
</center>
<div class="row col-md-12 col-xs jarak ">

  <div class="card-body col-md-4 col-xs">
    <img alt="image" src="{{asset('asset-template/img/'.$update->file_gambar)}}" height="350dp" width="350dp">
  </div>
  <div class="card-body col-md-4 col-xs">
    <img alt="image" src="{{asset('asset-template/img/'.$update->file_gambar2)}}" height="350dp" width="350dp">
  </div>
  <div class="card-body col-md-4 col-xs">
    <img alt="image" src="{{asset('asset-template/img/'.$update->file_gambar3)}}" height="350dp" width="350dp">
  </div>
</div>
<div class="card-body col-md-7 col-xs imgtindaklanjut">

  <form method="post" action="{{route('update_laporan',$update->id)}}" enctype="multipart/form-data">


    {{csrf_field()}}

    <div class="col-xl-12 col-md-8 col-12 mb-1">
      <!--  <h3><label> Detail Laporan Data Kelola Jalan Berlubang</label></h3> -->

      <!--  <div class="form-group">

                                    <input type="text" class="form-control" id="id" name="id" placeholder="" disabled value="{{$update->id}}" required=""/>
                                  </div> -->

      <div class="form-group">
        <label for="nama">Nama Pelapor</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="" disabled value="{{$update->User->nama}}" required="" />
      </div>
      <div class="form-group">
        <label for="nama">Nama Jalan</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="" disabled value="{{$update->nama_jalan}}" required="" />
      </div>
      <div class="form-group">
        <label for="nama">Latitude</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="" disabled="" value="{{$update->latitude}}" required="" />
      </div>
      <div class="form-group">
        <label for="nama">Longitude</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="" disabled="" value="{{$update->longitude}}" required="" />
      </div>


      <!--  <div class="form-group">
                                    <label for="nilai">Nilai Kedalam</label>
                                      @if(!empty($tindak_lanjut))
                                    <input type="text" class="form-control" id="nilai_kedalaman" name="nilai_kedalaman" placeholder=""  required=""  disabled value="{{$tindak_lanjut->nilai_kedalaman}}" />
                                      @else
                                         <input type="text" class="form-control" id="nilai_kedalaman" name="nilai_kedalaman" placeholder=""  required=""/>
                                       @endif
                                </div>



                                  <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    @if(!empty($tindak_lanjut))
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder=""  required="" disabled value="{{$tindak_lanjut->deskripsi}}" />
                                       @else
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder=""  required="" value="" />
                                         @endif
                                </div>
                              -->
      <div class="form-group">
        <label for="deskripsi">Tanggal Laporan</label>
        @if(!empty($tindak_lanjut))
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="" required="" disabled value="{{$tindak_lanjut->tanggal}}" />
        @else
        <input type="date" class="form-control" id="tanggal" name="tanggal" disabled value="{{$update->tanggal_laporan}}" required="" value="" />
        @endif
      </div>

      <div class="form-group">
        <!--  <label for="nama">Status</label>
                                     <input  disabled value="{{$update->status}}" name="status" class="form-control"> -->
        <label for="nama">Status</label>
        @if($update->status=='Laporan')
        <select value="{{$update->status}}" name="status" class="form-control">
          <option disabled>Laporan</option>
          <option>Diperbaiki</option>

        </select>

        @else

        <input type="text" disabled value="{{$update->status}}" name="status" class="form-control">

        @endif

      </div>

      @if($update->status=='Laporan')
      <button class="btn btn-primary" type="Submit">Update Status Laporan</button>
      @else

      @endif


    </div>
  </form>

</div>





@endsection

@section('footer')
@include('layouts.footer')
@endsection