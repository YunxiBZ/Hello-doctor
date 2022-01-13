@extends('layout.base')

@section('title', 'AllO\'Doc - Mes Rendez-vous')
<main class="flex-shrink-0 my-auto">
    <div class="container-fluid">
        <h1 class="mb-3">Mes rendez-vous</h1>
        <div class="row mb-4">
            <h2>Rendez-vous à venir</h2>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-2">
                @foreach ($futureAppointments as $futureAppointment)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rendez-vous avec Dr {{$futureAppointment->practitioner->lastname}}</h5>
                        <p class="card-text">
                            <span class="badge bg-primary">{{$futureAppointment->practitioner->specialty->name}}</span>
                            <ul class="list-unstyled">
                                <li>{{$futureAppointment->meet_at}}</li>
                                <li>{{$futureAppointment->practitioner->address}}</li>
                            </ul>
                        </p>
                        <form action="">
                            <button class="btn btn-warning">Annuler le rendez-vous</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <h2>Rendez-vous passés</h2>
            @foreach ($pastAppointments as $pastAppointment )           
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 text-black-50 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rendez-vous avec Dr {{$pastAppointment->practitioner->lastname}}</h5>
                        <p class="card-text">
                            <span class="badge bg-secondary">{{$pastAppointment->practitioner->specialty->name}}</span>
                            <ul class="list-unstyled">
                                <li>{{$pastAppointment->meet_at}}</li>
                                <li>{{$pastAppointment->practitioner->address}}</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</main>
@section('content')

@endSection