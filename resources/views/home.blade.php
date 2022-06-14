@extends('layouts.app')

@section('content')
<h1 class="text-center">Homepage</h1>
<nav class="d-flex justify-content-center">
    <a href="{{route('locations')}}">Locations</a>
</nav>
@endsection