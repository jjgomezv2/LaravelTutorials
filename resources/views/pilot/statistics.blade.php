@extends('layouts.app')

@section("title", "Exam 1")
@section("subtitle", "Pilot statistics")

@section('content')
<div class="container">
    <h2>Pilot Statistics</h2>

    <h4>Pilots by City</h4>
    <ul>
        @foreach ($viewData['pilotsByCity'] as $city => $total)
            <li>{{ $city }}: {{ $total }}</li>
        @endforeach
    </ul>

    <h4>Average Nitro Level</h4>
    <p>{{ $viewData['avgNitro'] }}</p>
</div>
@endsection