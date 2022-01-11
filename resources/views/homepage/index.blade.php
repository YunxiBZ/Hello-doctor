@extends('layout.base')

@section('title', 'AllO\'Doc - Home')

@section('content')
<main class="flex-shrink-0 mb-auto">
    <div class="p-5" id="search-form">
        <h1 class="fw-bold text-light">Site de réservation de RDV médicaux</h1>
        <form class="row row-cols-auto row-cols-md-2 row-cols-lg-3 g-3">
            <div class="col-12 col-lg-4 col-xxl-3">
                <label class="visually-hidden" for="specialty">Spécialité du praticien recherché</label>
                <select name="specialty" id="specialty" class="form-select">
                    <option selected>Spécialité du praticien recherché</option>
                    <option>Chirurgien-dentiste</option>
                    <option>Médecin généraliste</option>
                    <option>Pédiatre</option>
                    <option>Gynécologue</option>
                    <option>Ophtalmologue</option>
                    <option>Dermatologue</option>
                    <option>Ostéopathe</option>
                    <option>Masseur-kinésithérapeute</option>
                    <option>Opticien</option>
                    <option>Pédicure-podologue</option>
                </select>
            </div>
            <div class="col-12 col-lg-4 col-xxl-3">
                <label class="visually-hidden" for="city">Ville du praticien recherché</label>
                <select name="city" id="city" class="form-select">
                    <option selected>Ville du praticien recherché</option>
                    <option>Paris</option>
                    <option>Lyon</option>
                    <option>Marseille</option>
                    <option>Toulouse</option>
                    <option>Bordeaux</option>
                    <option>Lille</option>
                    <option>Strasbourg</option>
                    <option>Nantes</option>
                    <option>Rennes</option>
                    <option>Grenoble</option>
                </select>
            </div>
            <div class="col-12">
                <button class="btn btn-outline-light">Rechercher</button>
            </div>
        </form>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 p-5 justify-content-center mx-auto">
        <div class="col" style="max-width: 300px;">
            <div class="card border-white h-100">
                <img src="{{ asset('img/doctor-1.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lorem, ipsum</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem
                        deleniti, sit cupiditate alias accusantium quidem. Molestiae harum temporibus at. Fugit,
                        laudantium inventore! Suscipit praesentium consectetur distinctio? Adipisci similique
                        laudantium excepturi.</p>
                </div>
            </div>
        </div>
        <div class="col" style="max-width: 300px;">
            <div class="card border-white h-100">
                <img src="{{ asset('img/doctor-2.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus dolorum
                        fugiat recusandae. Fuga veniam molestias iusto fugit asperiores ut praesentium. Dolorum
                        cumque velit ab ullam! Rem obcaecati tempore quas minus.</p>
                </div>
            </div>
        </div>
        <div class="col" style="max-width: 300px;">
            <div class="card border-white h-100">
                <img src="{{ asset('img/medical-care.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lorem, ipsum dolor</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore esse iusto
                        expedita sed molestias! Tempore porro velit accusantium fuga nihil ex explicabo omnis, totam
                        aliquam. Vel libero accusamus explicabo nobis?</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endSection