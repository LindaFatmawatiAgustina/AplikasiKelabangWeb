@extends('layouts.layouts-dinaspu')


@section('navbar')
@include('layouts.navbar')
@endsection


@section('sidebar')
@include('layouts.sidebar')
@endsection

@section('konten')


    <div class="col-md-12 col-xs-12">
    <div class="card">
 
        <div class="card-body">
        <div class="table-responsive">
    
            
                    <h2><label> Laporan Data Kelola Jalan Berlubang</label></h2>
                    <div class="form-row">
                        <div class="col-sm-12">
                         

                            <form action="{{route('pelaporan')}}" method="get">
                            <div class="form-group ml-1" style="display:inline-block">
                           
                                       <label>PILIH TANGGAL</label>
                            <input  value="hari" type="date" name="periode">
       
                              
                            </div>
                              <div class="form-group ml-1" style="display:inline-block">
                           
                                      
                      
                                 <select name="status" type="text" class="form-control">

                                    <option value="" selected disabled>Pilih Status Laporan</option>
                                    <option value="belumdiperbaiki" @if($status == 'belumdiperbaiki') {{'selected="selected"'}} @endif >Belum Perbaikan</option>
                                    <option value="diperbaiki" @if($status == 'diperbaiki') {{'selected="selected"'}} @endif >Diperbaiki</option>
                                    <option value="selesai" @if($status == 'selesai') {{'selected="selected"'}} @endif >Selesai</option>
                               
                                </select>
                              
                            </div>
                            <button type="submit" class="btn btn-primary" title="Filter"><i class="fas fa-filter"></i></button>

                            <button   type="submit" class="btn btn-primary" target="_blank" name="cetakPdf" href="#" value="cetakPdf" title="Print"><i class="fas fa-print"></i></i></button>
                       
                      
                          
                         </form>
                        </div>

           
                       
                        
                        
                    </div>
                
                <br>

       
            <table id="dataTable" class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                         <th class="text-center">Nama Pelapor</th> 
                        <th class="text-center">Nama Jalan</th> 
                        <th class="text-center">Status</th>
                        <th class="text-center">Tanggal Dilaporkan</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>

               <tbody>
                @php
                    $no = 1;
                @endphp
               @foreach($data as $key => $lapor)
                <tr>
                    <td class="text-center">{{$no++}} </td>
                    <td class="text-center">{{$lapor->User->nama}}</td>
                    <td class="text-center">{{$lapor->nama_jalan}}</td>
                    <td class="text-center">{{$lapor->status}}</td>
                       <td class="text-center">{{date("d-m-Y", strtotime($lapor->tanggal_laporan))}}</td>
                    <td align="center">
                          <a href="{{route('edit_tindak_lanjut',$lapor->id)}}">
                            <button class="btn btn-primary">Tindak Lanjut</button></a>

                        <a href="{{route('detail_laporan',$lapor->id)}}">
                          <button class="btn btn-warning">Detail</button></a>

                       <!--  <a href=""><button class="btn btn-success">Edit</button></a> -->
                    <a   href="" data-toggle="modal" data-target="#logoutModal" href="{{route('hapus_laporan',$lapor->id)}}">
                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>

                  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                          <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                   
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                      <a class="btn btn-primary" href="{{route('hapus_laporan',$lapor->id)}}">Hapus</a>
                    </div>
                  </div>
                </div>
              </div>          
                    </td>
                </tr>

            @endforeach
            </tbody>
                 
            </table>
         
              <br><br>
            <div class="left">
               
            <div class="right">
            
            </div>
        </div>
            </div>
        </div>
    </div>
</div>



    @endsection

@section('footer')
@include('layouts.footer')
@endsection

