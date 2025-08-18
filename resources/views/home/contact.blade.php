@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container text-center my-4">
    <div class="row">
        <div class="col-lg-4 mb-3">
            <h5>Email</h5>
            <p class="lead">{{ $email }}</p>
        </div>
        <div class="col-lg-4 mb-3">
            <h5>Address</h5>
            <p class="lead">{{ $address }}</p>
        </div>
        <div class="col-lg-4 mb-3">
            <h5>Phone</h5>
            <p class="lead">{{ $phone }}</p>
        </div>
    </div>
</div>
@endsection
