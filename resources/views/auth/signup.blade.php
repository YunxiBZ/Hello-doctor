@extends('layout.base')

@section('title', 'AllO\'Doc - Home')

@section('content')
<main class="flex-shrink-0 my-auto">
    <div class="container-fluid my-3">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="img/authentication.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <h1>Inscription</h1>
                <form action="{{ route('auth.signup.action') }}" method="POST">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger"> {{ $error }} </div>
                    @endforeach
                    @csrf
                    <div class="form-outline mb-2">
                        <input type="text" id="firstname" name='firstname' value="{{ old('firstname') }}" required class="form-control form-control-lg"
                            placeholder="Prénom" />
                        <label class="form-label" for="firstname">Prénom</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="text" id="lastname" name='lastname' value="{{ old('lastname') }}" required class="form-control form-control-lg" placeholder="Nom" />
                        <label class="form-label" for="lastname">Nom</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="text" id="street" name='street' value="{{ old('street') }}" required class="form-control form-control-lg" placeholder="Rue" />
                        <label class="form-label" for="street">Rue</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="text" id="postCode" name='postCode' value="{{ old('postCode') }}" required class="form-control form-control-lg"
                            placeholder="Code Postal" />
                        <label class="form-label" for="postCode">Code Postal</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="text" id="city" name='city' value="{{ old('city') }}" required class="form-control form-control-lg" placeholder="Ville" />
                        <label class="form-label" for="city">Ville</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="email" id="email" name='email' value="{{ old('email') }}" required class="form-control form-control-lg" placeholder="Email" />
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="password" id="password" name='password' value="{{ old('password') }}" required class="form-control form-control-lg"
                            placeholder="Mot de passe" />
                        <label class="form-label" for="password">Mot de passe</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="password" id="passwordConfirm" name='passwordConfirm' value="{{ old('passwordConfirm') }}" required class="form-control form-control-lg"
                            placeholder="Confirmer le mot de passe" />
                        <label class="form-label" for="passwordConfirm">Confirmer le mot de passe</label>
                    </div>
                    <div class="text-center text-lg-start">
                        <button type="submit" class="btn btn-primary btn-lg">Inscription</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endSection