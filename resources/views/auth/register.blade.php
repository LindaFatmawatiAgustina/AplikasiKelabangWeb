
@extends('layouts.layouts-main')

@section('content')

<<<<<<< HEAD
@include('sweet::alert')

<div id="app">
  <section class="section">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">

          <div class="card card-primary">
            <div class="card-header"><h4>Register - Aplikasi Kelabang</h4></div>

            <div class="card-body">
              <form method="POST" action="postregister" class="needs-validation" novalidate="">
                {{csrf_field()}}

                
                
                <div class="form-group">
                  <div class="d-block">
                    <label for="nama" class="control-label">Nama</label>
                  </div>
                  <input id="nama" type="nama" class="form-control {{$errors->has('nama') ? 'is-invalid' : '' }}" name="nama" tabindex="1" required>
                  @if($errors->has('nama'))
                  <!--membuat class dengan menampilkan text harus di isi -->
                  <div class="invalid-feedback">
                   Nama Harus di Isi
                 </div>
                 @endif
               </div>
               
               
               <div class="form-group">
                <div class="d-block">
                  <label for="email" class="control-label">Email</label>
                </div>
                <input id="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : '' }}" name="email" tabindex="1" required>
                @if($errors->has('email'))
                <!--membuat class dengan menampilkan text harus di isi -->
                <div class="invalid-feedback">
                 Email Harus di Isi
               </div>
               @endif
             </div>
             

             <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Password</label>
              </div>
              <input id="password" type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : '' }}"  name="password" tabindex="1" required>

              @if($errors->has('password'))
              <!--membuat class dengan menampilkan text harus di isi -->
              <div class="invalid-feedback">
               Password Harus di Isi minimal 6 karakter
             </div>
             @endif
             
           </div>
           
           <div class="form-group">
            <center><button type="submit" class="btn btn-primary" tabindex="1" required>
              Register
            </button></center>
          </div>

        </form>
      </div>

      
      <div class="mt-3 text-muted text-center">
        Sudah memiliki akun ?  <a href="login">Login</a>
      </div>
    </div>


  </div> 
  
</div>
</div>
</div>
</section>
</div>


<!-- General JS Scripts -->

<!-- JS Libraies -->


<!-- Page Specific JS File -->
=======
 @include('sweet::alert')

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">

            <div class="card card-primary">
              <div class="card-header"><h4>Register - Aplikasi Kelabang</h4></div>

              <div class="card-body">
              <form method="POST" action="postregister" class="needs-validation" novalidate="">
                  {{csrf_field()}}

         
                
                  <div class="form-group">
                    <div class="d-block">
                        <label for="nama" class="control-label">Nama</label>
                    </div>
                    <input id="nama" type="nama" class="form-control {{$errors->has('nama') ? 'is-invalid' : '' }}" name="nama" tabindex="1" required>
                      @if($errors->has('nama'))
                      <!--membuat class dengan menampilkan text harus di isi -->
                      <div class="invalid-feedback">
                         Nama Harus di Isi
                      </div>
                       @endif
                    </div>
                     
                  <div class="form-group">
                    <div class="d-block">
                      <label for="email" class="control-label">Email</label>
                    </div>
                    <input id="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : '' }}" name="email" tabindex="1" required>
                      @if($errors->has('email'))
                    <!--membuat class dengan menampilkan text harus di isi -->
                    <div class="invalid-feedback">
                       Email Harus di Isi
                    </div>
                      @endif
                  </div>
                  

                 <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : '' }}"  name="password" tabindex="1" required>

                    @if($errors->has('password'))
                    <!--membuat class dengan menampilkan text harus di isi -->
                    <div class="invalid-feedback">
                       Password Harus di Isi minimal 6 karakter
                    </div>
                      @endif
                  
                  </div>
                
                 <div class="form-group">
                    <center><button type="submit" class="btn btn-primary" tabindex="1" required>
                      Register
                    </button></center>
                  </div>

                </form>
                   </div>

                   
                    <div class="mt-3 text-muted text-center">
                        Sudah memiliki akun ?  <a href="login">Login</a>
                    </div>
                </div>


        </div> 
            
          </div>
        </div>
      </div>
    </section>
  </div>
 

  <!-- General JS Scripts -->

  <!-- JS Libraies -->


  <!-- Page Specific JS File -->
>>>>>>> a4c47b3706486b4dda1f1ce28cf7b555433f8811
@endsection