<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Web Kelabang</title>


  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link href="{{asset('asset-template/css/sb-admin-2.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


  <!--maps-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <style>
    #map {
      height: 500px;

    }

    ;

    #mapkomunitas {
      height: 470px;
    }

    ;

    #calendar {
      max-width: 900px;
      margin: 0 auto;
    }

    #imgtindaklanjut {

      margin-top: 300px;
    }
    .kembali {
      margin-left: 20px;

    }
    .jarak {
      /*margin: 10px 10px 10px 10px;*/
      margin-left: : 8px;



    }

    table tr td,
    table tr th {
      font-size: 11pt;


    }
  </style>

</head>

<body id="page-top">



  <!-- Page Wrapper -->
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


      @yield('sidebar')
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          @include('layouts.navbar')
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        </div>

        <!-- Content Row -->
        <div class="row">
          @yield('konten')

        </div>




        <!-- Footer -->
        <footer class="sticky-footer bg-dark">
          @yield('footer')
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin Logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script src="{{asset('asset-template/vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('asset-template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('asset-template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="{{asset('asset-template/js/sb-admin-2.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- js maps-->


    <script>
      function initMap() {

        var bounds = new google.maps.LatLngBounds();

        var peta = new google.maps.Map(document.getElementById("map"), {
          center: {
            lat: -8.408698,
            lng: 114.2339090
          },
          zoom: 10
        });

        var infoWindow = new google.maps.InfoWindow(),
        marker, i;

        for (var i = 0; i < array.length; i++) {

          var position = new google.maps.LatLng(array[i][1], array[i][2]);

          bounds.extend(position);

          var marker = new google.maps.Marker({

            position: position,
            map: peta,
            icon: '{{asset('asset-template/img/marker_ts.png')}}',
            title: array[i][0]
          });

          google.maps.event.addListener(marker, 'click', (function(marker, i) {

            return function() {

              var infoWindowContent =
              '<div class="content"><p>' +
              '<h6>' + array[i][0] + '</h6>' +
              'Status : ' + array[i][3] + '<br/>' +
              'Titik Koordinat : ' + array[i][1] + ', ' + array[i][2] + '<br/>' +
              '<img height="130" style="margin:0 auto; display:block;" src="asset-template/img/' + array[i][6] + '"/><br/>' +
              '<img height="130" style="margin:0 auto; display:block;" src="asset-template/img/' + array[i][5] + '"/><br/>'+
              '<img height="130" style="margin:0 auto; display:block;" src="asset-template/img/' + array[i][4] + '"/><br/>' +


              '</p></div>';

              infoWindow.setContent(infoWindowContent);

              infoWindow.open(peta, marker);
            }

          })(marker, i));
        }
        //



      }
    </script>


    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv-h2II7DbFQkpL9pDxNRq3GWXqS5Epts&callback=initMap" type="text/javascript"></script>

    <script type="text/javascript">
      window.setInterval('refresh()', 300000); // Call a function every 300000 milliseconds (OR 300 seconds / 5 minutes).

      // Refresh or reload page.
      function refresh() {
        window.location.reload();
      }
    </script>



    @include('sweet::alert')
  </body>

  </html>