<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <title>@yield('title_prefix') - TrocBOOk</title>

</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">TrocBOOk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('vitrine') }}">Vitrine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('troc') }}">Troc</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('compte') }}">Compte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('a-propos') }}">A-propos</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('connexion') }}">Connexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('inscription') }}">Inscription</a>
            </li>
          </ul>
        </div>
      </nav>

        <div class="container py-5">
            @yield('content')
        </div>

</body>
</html>