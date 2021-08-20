 @extends('layouts.layouts-main')

 @section('content')

 @include('sweet::alert')
 <div id="app">
  <section class="section">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                 <div class="brand-logo">
                  <center><img src="{{ asset('asset-template/icon/logo_app.png')}}" style="width:50px" alt="logo"></center>
              </div>
              <center><div class="card-header">{{ __('LOGIN') }}</div></center>

              <div class="card-body">
                <form method="POST" action="postlogin">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>


                        </div>
                    </div>
                </form>
            </div>

            <div class="mt-3 text-muted text-center">
                Belum memiliki akun ?  <a href="register">Daftar</a>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>
@endsection

