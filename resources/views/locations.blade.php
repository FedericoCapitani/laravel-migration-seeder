@extends('layouts.app')

@section('content')
<h1 class="text-center">Locations</h1>
<nav class="d-flex justify-content-center">
    <a href="{{route('home')}}">Home</a>
</nav>

<div class="container">
    <div class="row">
        @foreach($locations as $location)
        <div class="col-4 card_border">
            <h3> {{$location['name']}} </h3>
            <img src="{{$location['thumbnail']}}" alt="">
            <p>Paese: {{$location['country']}} </p>
            <p>Descrizione: {{$location['description']}} </p>
            <p>Prezzo: {{$location['price']}}€</p>
            <p>Indirizzo: {{$location['address']}} </p>
            @if ($location['is_available'])
                <p>Posti disponibili</p>
            @else
                <p>Nessun posto disponibile</p>
            @endif
            <p>Numero di telefono: {{$location['phone_number']}} </p>
        </div>
        @endforeach
    </div>
</div>

@endsection