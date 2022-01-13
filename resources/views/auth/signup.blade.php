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
                <form>
                    <div class="form-outline mb-2">
                        <input type="text" id="firstname" class="form-control form-control-lg"
                            placeholder="Prénom" />
                        <label class="form-label" for="firstname">Prénom</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="text" id="lastname" class="form-control form-control-lg" placeholder="Nom" />
                        <label class="form-label" for="lastname">Nom</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="text" id="street" class="form-control form-control-lg" placeholder="Rue" />
                        <label class="form-label" for="street">Rue</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="text" id="postCode" class="form-control form-control-lg"
                            placeholder="Code Postal" />
                        <label class="form-label" for="postCode">Code Postal</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="text" id="city" class="form-control form-control-lg" placeholder="Ville" />
                        <label class="form-label" for="city">Ville</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Email" />
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="password" id="password" class="form-control form-control-lg"
                            placeholder="Mot de passe" />
                        <label class="form-label" for="password">Mot de passe</label>
                    </div>
                    <div class="form-outline mb-2">
                        <input type="password" id="passwordConfirm" class="form-control form-control-lg"
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