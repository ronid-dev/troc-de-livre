@extends('layout.app')

@section('title_prefix', 'Accueil')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Bienvenue sur votre site d'echange de livre</h1>
        <h2>Echangez vos livres contre des nouveaux !</h2>
        <p class="lead">
            Facile et économique, le troc de livres d'occasion vous permet de lire de nouveaux titres toute l'année.
            Inscrivez-vous gratuitement et ajoutez vos livres à notre catalogue composé de milliers d'ouvrages.
            Le bon plan pour lire moins cher toute l'année !

            Gagnez des points en envoyant les livres que les autres abonnés vous commandent.
            Avec ces points recevez gratuitement les livres d'occasion dont vous avez envie.
            Troquez autant de livres que vous voulez.
        </p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus</a>
        </p>
    </div>
@endsection