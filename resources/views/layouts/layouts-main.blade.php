<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<style>
  body {

    background-color: #a9a9a9 
    background-color: #6777ef; 
    -webkit-animation: color 12s ease-in  0s infinite alternate running;
    -moz-animation: color 12s linear  0s infinite alternate running;
    animation: color 12s linear  0s infinite alternate running;
  }

  @-webkit-keyframes color {

    0% { background-color: #a9a9a9; }
    25% { background-color: #a9a9a9; }
    55% { background-color: #D6D2C4; }
    75% { background-color: #D6D2C4; } 
    100% { background-color: #a9a9a9; }

    0% { background-color: #6777ef; }
    25% { background-color: #67b7ef; }
    55% { background-color: #2855a7; }
    75% { background-color: #07a3ff; }
    100% { background-color: #2163f7f2; }
    
  }
}
</style>
<body>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 @include('sweet::alert')
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <div id="app">


  <main class="py-4">
    @yield('content')
  </main>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


</body>
</html>
