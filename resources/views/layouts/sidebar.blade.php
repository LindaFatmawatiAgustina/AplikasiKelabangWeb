
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
  <div class="sidebar-brand-icon rotate-n-15">
   <!--  <i class="fas fa-laugh-wink"></i> -->
   <center><img src="{{ asset('asset-template/icon/logo_app.png')}}" style="width:50px" alt="logo"></center>
 </div>
 <div class="sidebar-brand-text mx-">Aplikasi KELABANG </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">

  <a class="nav-link" href="{{route('maps')}}">
   <i class="fa fa-home" aria-hidden="true"></i>


   <span>Beranda</span></a>
 </li>
 <li class="nav-item active">

  <a class="nav-link" href="{{route('pelaporan')}}">
   <i class="fa fa-print" aria-hidden="true"></i>



   <span>Laporan Perbaikan</span></a>
 </li>


<!-- 
 <li class="nav-item active">

  <a class="nav-link" href="{{route('maps_selesai')}}">
   <i class="fa fa-road" aria-hidden="true"></i>



   <span>Jalan Selesai Perbaikan</span></a>
 </li> -->
 
 <div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

