@extends('layout.base')

@section('title', 'AllO\'Doc - Résutat de la recherche')

@section('content')

    <main class="flex-shrink-0 my-auto">
        <div class="container-fluid p-3">
            <h1>Résultat de la recherche pour "<span>Médecin généraliste</span>" à <span>Paris</span></h1>
            <section>
                @foreach ($practitioners as $practitioner)
                    
                <article class="rounded d-flex flex-column flex-md-row p-3 bg-info bg-gradient mb-2">
                    <div class="data me-md-3">
                        <h3 class="fs-6"><a href="">{{"$practitioner->firstname $practitioner->lastname"}}</a></h3>
                        <p class="fw-bold mb-0">Médecin généraliste</p>
                        <p>{{"$practitioner->address $practitioner->zipcode $practitioner->city"}}</p>
                    </div>
                    <div class="appointments d-md-flex w-100">
                        <div class="day mb-2 me-3">
                            <time datetime="2022-01-10">Lundi 10/01</time>
                            <a href="" class="btn btn-primary mb-2 appointment">09:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">10:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">11:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">12:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">14:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">15:00</a>
                        </div>
                        <div class="day mb-2 me-3">
                            <time datetime="2022-01-11">Mardi 11/01</time>
                            <a href="" class="btn btn-primary mb-2 appointment">08:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">09:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">10:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">11:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">12:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">14:00</a>
                        </div>
                        <div class="day mb-2 me-3">
                            <time datetime="2022-01-12">Mercredi 12/01</time>
                            <a href="" class="btn btn-primary mb-2 appointment">09:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">11:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">12:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">14:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">15:00</a>
                        </div>
                        <div class="day mb-2 me-3">
                            <time datetime="2022-01-13">Jeudi 13/01</time>
                            <a href="" class="btn btn-primary mb-2 appointment">08:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">09:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">10:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">12:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">14:00</a>
                        </div>
                        <div class="day mb-2 me-3">
                            <time datetime="2022-01-14">Vendredi 14/01</time>
                            <a href="" class="btn btn-primary mb-2 appointment">08:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">09:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">10:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">11:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">12:00</a>
                            <a href="" class="btn btn-primary mb-2 appointment">14:00</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </section>
        </div>
    </main>

@endSection
