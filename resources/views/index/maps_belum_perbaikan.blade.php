@extends('layouts.layouts-dinaspu')


@section('navbar')
@include('layouts.navbar')
@endsection

@section('sidebar')
@include('layouts.sidebar')
@endsection


@section('konten')


<<<<<<< HEAD
<div class="container">

  <div class="section-header">
    <h2>Monitoring Laporan Jalan Belum Selesai Perbaikan </h2>
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
        array.push(['<?php echo $tempatsampahs->nama_jalan?>','<?php echo $tempatsampahs->latitude?>','<?php echo $tempatsampahs->longitude?>','<?php echo $tempatsampahs->status?>','<?php echo $tempatsampahs->file_gambar ?>','<?php echo $tempatsampahs->file_gambar2 ?>','<?php echo $tempatsampahs->file_gambar3 ?>']);

      </script> 

      @endforeach



    </div>
  </div>



</div>


<div class="col-md-12 col-xs-12">
  <div class="card">

    <div class="card-body">


      <div class="table-responsive"><br>
        <form action="" method="GET">
          <label> Laporan Data Kelola Jalan Berlubang</label>
          <div class="form-row">

          </div>
        </form>
        <br>
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">Nama Jalan</th> 
              <th class="text-center">Status</th>

            </tr>
          </thead>

          <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($pelaporan as $key => $lapor)
            <tr>
              <td class="text-center">{{$no++}} </td>
              <td class="text-center">{{$lapor->nama_jalan}}</td>
              <td class="text-center">{{$lapor->status}}</td>

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
=======
     <!--  <div class="container">

          <div class="section-header">
            <h2>Monitoring Laporan Jalan Belum Selesai Perbaikan </h2>
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


       <div class="col-md-12 col-xs-12">
    <div class="card">
 
        <div class="card-body">

        
        <div class="table-responsive"><br>
        <form action="" method="GET">
                    <label> Laporan Data Kelola Jalan Berlubang</label>
                    <div class="form-row">
                      
                    </div>
                </form>
                <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Jalan</th> 
                        <th class="text-center">Status</th>
                
                    </tr>
                </thead>

               <tbody>
                @php
                    $no = 1;
                @endphp
               @foreach($pelaporan as $key => $lapor)
                <tr>
                    <td class="text-center">{{$no++}} </td>
                    <td class="text-center">{{$lapor->nama}}</td>
                    <td class="text-center">{{$lapor->status}}</td>
                   
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
</div> -->
>>>>>>> a4c47b3706486b4dda1f1ce28cf7b555433f8811



@endsection

@section('footer')
@include('layouts.footer')
@endsection

