<html>

<head>
  <title>Laporan PDF Kelabang</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <style type="text/css">
    table tr td,
    table tr th {
      font-size: 6pt;


    }

    @media print {

      @page {
        size: A4 landscape;
      }
    }
  </style>
</head>

<body>



  <div class="col-md-12 col-xs-12">
    <div class="card">

      <div class="card-body">
        <div class="table-responsive">


          <center>
            <h2><label> Laporan Data Kelola Jalan Berlubang</label></h2>
          </center>



          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Nama Pelapor</th>
                <th class="text-center">Nama Jalan</th>
                <th class="text-center">Latitude</th>
                <th class="text-center">Longitude</th>
                <th class="text-center">Status</th>
                <th class="text-center">Nilai Kedalaman</th>
                 <th class="text-center">Tanggal Dilaporkan</th>
                <th class="text-center">Tanggal Perbaikan</th>

              </tr>
            </thead>

            <tbody>
              @php
              $no = 1;
              @endphp 
              @foreach($data as $key)
              <tr>
                <td class="text-center">{{$no++}} </td>
                <td class="text-center">{{$key->nama}}</td>
                <td class="text-center">{{$key->nama_jalan}}</td>
                <td class="text-center">{{$key->latitude}}</td>
                <td class="text-center">{{$key->longitude}}</td>
                <td class="text-center">{{$key->status}}</td>
                <td class="text-center">{{$key->nilai_kedalaman}}</td>
                <td class="text-center">{{date("d-m-Y", strtotime($key->tanggal_laporan))}}</td>
                <td class="text-center">{{($key->tanggal)}}</td>

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

  </tbody>
  </table>

  <script type="text/javascript">
    window.print();

    window.onafterprint = function() {
      alert("Prose Printing Selesai...");
    }
  </script>
</body>

</html>