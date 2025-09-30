@extends('layouts.app')

@section('title', 'Exam 1')
@section('subtitle', 'Pilot List')

@section('content')
<div class="row">
    @foreach ($viewData['pilots'] as $pilot)
        <div class="col-md-4 col-lg-3 mb-2">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">
                        Pilot # {{ $pilot->getId() }}
                        @if($pilot->getOrigin() === 'Tokyo')
                            {{ $pilot->getName() }} <span class="ms-2">(Reto Tokio)</span>
                        @else
                            <span class="text-primary">{{ $pilot->getName() }}</span>
                        @endif
                    </h5>

                    <p class="card-text">
                        Origin city: {{ $pilot->getOrigin() }}
                    </p>

                    <p class="card-text">
                        Nitro level: {{ $pilot->getNitro() }}
                    </p>

                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

