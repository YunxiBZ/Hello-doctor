@extends('layout.base')

@section('title', 'AllO\'Doc - Résutat de la recherche')

@section('content')

    <main class="flex-shrink-0 my-auto">
        <div class="container-fluid p-3">
            <h1>Résultat de la recherche pour "<span>{{$specialty}}</span>" à <span>{{$city}}</span></h1>
            <p>{{$message}}</p>
            <section>
                @foreach ($practitioners as $practitioner)
                    
                <article class="rounded d-flex flex-column flex-md-row p-3 bg-info bg-gradient mb-2">
                    <div class="data me-md-3">
                        <h3 class="fs-6"><a href="">{{"$practitioner->firstname $practitioner->lastname"}}</a></h3>
                        <p class="fw-bold mb-0">Médecin généraliste</p>
                        <p>{{"$practitioner->address $practitioner->zipcode $practitioner->city"}}</p>
                    </div>
                    <div class="appointments d-md-flex w-100">
                        @foreach($weekdays as $weekday)

                        <div class="day mb-2 me-3">
                                <time datetime={{$weekday->isoFormat('YYYY-MM-DD')}}>{{$weekday->isoFormat('dddd D/MM')}}</time>
                                @for ($i = 9; $i <= 12 ; $i++) 
                                    <form action="{{ route('appointments.create')}}" ">
                                        @csrf
                                        <input type="hidden" name="date" value="{{ $weekday->isoFormat('YYYY-MM-DD') }}">
                                        <input type="hidden" name="time" value="{{ $i }}">
                                        <input type="hidden" name="practitioner" value="{{ $practitioner->id }}">
                                        <button type="submit" " class="btn btn-primary mb-2 appointment">{{$i}}:00</button>
                                    </form>
                                @endfor
                                @for ($i = 14; $i <= 18 ; $i++) 
                                    <form action="{{ route('appointments.create')}}" ">
                                        @csrf
                                        <input type="hidden" name="date" value="{{ $weekday->isoFormat('YYYY-MM-DD') }}">
                                        <input type="hidden" name="time" value="{{ $i }}">
                                        <input type="hidden" name="practitioner" value="{{ $practitioner->id }}">
                                        <button type="submit" " class="btn btn-primary mb-2 appointment">{{$i}}:00</button>
                                    </form>   
                                @endfor
                        </div>
                        @endforeach
                    </div>
                </article>
                @endforeach
            </section>
        </div>
    </main>

@endSection
