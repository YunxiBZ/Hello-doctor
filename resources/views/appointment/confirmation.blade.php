@extends('layout.base')

@section('title', 'AllO\'Doc - Confirmation du rendez-vous')

@section('content')
<main class="flex-shrink-0 my-auto">
    <div class="container-fluid p-3 d-flex flex-column align-items-center justify-content-between me-3">
        @if($messageError === '')
        <p>Confirmation du rendez-vous le <time>{{$date->locale('fr_FR')->isoFormat('ddd DD/MM/YYYY')}}</time> à <time>{{$time}}:00</time> avec Dr {{$practitioner->lastname}} ?</p>
        <form action="{{route('appointments.store')}}" method="post">
            @csrf
            <input type="hidden" name="date" value="{{ $date }}">
            <input type="hidden" name="practitioner" value="{{ $practitioner->id }}">
            <button type="submit" class="btn btn-primary">Confirmer</button>
            <a href="{{route('homepage.index')}}" class="btn btn-secondary">Annuler</a>
        @else
            <p>Désolés le rendez-vous du <time>{{$date->locale('fr_FR')->isoFormat('ddd DD/MM/YYYY')}}</time> à <time>{{$time}}:00</time> avec Dr {{$practitioner->lastname}}</p>
            <p>{{$messageError}}</p>
            <a href="{{route('homepage.index')}}" class="btn btn-secondary">Retour</a>
        @endif
        </form>
    </div>
</main>

@endSection