@extends('layouts.layouts-dinaspu')


@section('navbar')
@include('layouts.navbar')
@endsection

@section('sidebar')
@include('layouts.sidebar')
@endsection


@section('konten')

      <div class="container">

        <div class="section-header">
            <h2>Monitoring Laporan Jalan  Selesai Perbaikan</h2>
          </div>
        
        <div class="row content">
          <div class="col-md-12 col-xs-12 map">
            <div id="map" style="border-radius: 15px;" class="shadow"></div>

                <script>
      var array =[];
      var array2 = [];
    </script>

    @foreach ($pelaporan as $tempatsampahs)

    <script type="text/javascript">

        //Memasukkan data tabel tempat sampah ke array
        array.push(['<?php echo $tempatsampahs->nama?>','<?php echo $tempatsampahs->latitude?>','<?php echo $tempatsampahs->longitude?>','<?php echo $tempatsampahs->status?>','<?php echo $tempatsampahs->file_gambar ?>']);

    </script> 

    @endforeach

  
  
          </div>
        </div>



      </div>




@endsection

@section('footer')
@include('layouts.footer')
@endsection

