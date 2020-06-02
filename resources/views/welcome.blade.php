<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container text-center">
    @if (Route::has('login'))
    <div class="top-right links">
      @auth
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ route('login') }}">Login</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}">Register</a>
      @endif
      @endauth
    </div>
    @endif

    <div class="content">
      <div class="title m-b-md">
        {{-- Laravel --}}
        <img src="{{asset('images/logo-truequea.png')}}" class="img-fluid w-50">
      </div>
      <div class="home-intro m-auto">
        <p>Somos una plataforma que conecta a personas que necesitan un producto o servicio, pero que no tienen cómo
          pagarlo debido a la crisis que vivimos hoy en día.
        </p>
        <p>
          Por eso, a través de un trueque solidario, unimos negocios y/o emprendimientos para que juntos puedan salir
          adelante. </p>
          <h1>¡Comienza a truequear!</h1>
      </div>
      <div class="home-links">
        <a href="https://laravel.com/docs">Publica un trueque<img src="{{asset('images/publica-trueque.png')}}" class="img-fluid "></a>
        <a href="https://laracasts.com">Busca un trueque<img src="{{asset('images/busca-trueque.png')}}" class="img-fluid "></a>
        <a href="https://laravel-news.com">Mi cuenta<img src="{{asset('images/cuenta-truequea.png')}}" class="img-fluid "></a>

      </div>
    </div>
  </div>

</body>

</html>