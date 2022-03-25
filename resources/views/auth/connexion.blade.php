@extends('layout.app')

@section('title_prefix', 'Connectez-vous')

@section('content')
    <div class="row justify-content-center">
        <div class="col-5 p-5 bg-white rounded-2rem shadow my-5">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input class="form-control" type="email" id="email" />
                </div>

                <div class="form-group">
                    <label for="password">Adresse Email</label>
                    <input class="form-control" type="password" id="password" />
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember-me">
                        <label class="custom-control-label" for="remember-me">Se souvenir de moi</label>
                    </div>
                </div>

                <div class="form-group">
                    <a href="#">Mot de passe oublié ?</a>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary w-100 btn-lg">
                        Se connecter
                    </button>
                </div>

                <div class="form-group">
                    Vous n'etes pas incrit? <a href="#">s'incrire</a>
                </div>

            </form>
        </div>
    </div>
@endsection