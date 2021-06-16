@extends('layouts.layouts-dinaspu')
@section('navbar')
@include('layouts.navbar')
@endsection


@section('sidebar')
@include('layouts.sidebar')
@endsection


@section('konten')
 <div class="col-md-12 col-xs">
   <a href="{{ route('pelaporan')}} "><button class="btn btn-warning">kembali</button></a>
 
        <div class="row">

         
             
            <div class="card-body col-md-4 col-xs" >
            <img alt="image" src="{{asset('asset-template/img/'.$update->file_gambar)}}" height="350dp" width="350dp">
                </div>
               <div class="card-body col-md-7 col-xs imgtindaklanjut">
                
                     <form method="post" action="{{route('update_tindak_lanjut',$update->id)}}" enctype="multipart/form-data">
                    <div class="row">
                         
                            {{csrf_field()}}

                            <div class="col-xl-12 col-md-8 col-12 mb-1">
                            <h3><label> Detail Laporan Data Kelola Jalan Berlubang</label></h3>
                  
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
                              
                                 <div class="form-group">
                                    <label for="deskripsi">Tanggal</label>
                                      @if(!empty($tindak_lanjut))
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder=""  required="" disabled value="{{$tindak_lanjut->tanggal}}" />
                                      @else
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder=""  required="" value="" />
                                       @endif
                                </div>

                                 <div class="form-group">
                                    <label for="nama">Status</label>
                                     <input  disabled value="{{$update->status}}" name="status" class="form-control"> 
                                                   
                                  </div>
                                </div>

                            </div>

        
                    </div>  
                    </form> 

                </div>
            </div>
        </div>
  

@endsection

@section('footer')
@include('layouts.footer')
@endsection
