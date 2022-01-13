@extends('layout.base')

@section('title', 'AllO\'Doc - Home')

@section('content')
<main class="flex-shrink-0 mb-auto">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="{{ asset('img/authentication.svg') }}"
                    class="img-fluid" alt="">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <h1>Connexion</h1>
                <form action="{{ route('auth.login.action') }}" method="POST" >
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger"> {{ $error }} </div>
                    @endforeach
                    @csrf
                    <div class="form-outline mb-2">
                        <input type="email" id="email" name='email' value="{{ old('email') }}" required class="form-control form-control-lg"
                            placeholder="Email" />
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="password" id="password" name='password'" required class="form-control form-control-lg"
                            placeholder="Mot de passe" />
                        <label class="form-label" for="password">Mot de passe</label>
                    </div>
                    <div class="text-center text-lg-start">
                        <button type="submit" class="btn btn-primary btn-lg">Connexion</button>
                    </div>
                </form>
                    <p class="small fw-bold mt-2 pt-1 mb-0">
                        Pas encore de compte ? 
                        <a href={{route('auth.signup')}} class="link-primary">Inscrivez-vous</a>
                    </p>
            </div>
        </div>
    </div>
</main>
@endSection