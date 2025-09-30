@extends('layouts.app')
@section('title', 'Home Page - Online Store')
@section('content')

<div class="text-center">
    Welcome to the application
</div>
<br>
<div class="text-center">
    <h3 class="mb-4">Parcial 1 práctico - Pilotos</h3>

    <a href="{{ route('pilot.create') }}" class="btn btn-primary m-2">
        Create Pilot
    </a>

    <a href="{{ route('pilot.index') }}" class="btn btn-success m-2">
        Pilot list
    </a>

    <a href="{{ route('pilot.statistics') }}" class="btn btn-danger m-2">
        Pilot's statistics
    </a>
</div>

@endsection