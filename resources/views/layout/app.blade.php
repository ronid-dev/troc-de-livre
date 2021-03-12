<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <title>@yield('title_prefix') - TrocBOOk</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">TrocBOOk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Vitrine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Troc</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Compte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A-propos</a>
            </li>
          </ul>
        </div>
      </nav>

        <div class="container py-5">
            @yield('content')
        </div>

</body>
</html>