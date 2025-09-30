@extends('layouts.app')

@section("title", "Exam 1")
@section("subtitle", "Create Pilot")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Pilot</div>

                <div class="card-body">
                    @if($errors->any())
                        <ul id="errors" class="alert alert-danger list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ route('pilot.save') }}">
                        @csrf

                        <input
                            type="text"
                            class="form-control mb-2"
                            placeholder="Enter pilot name"
                            name="name"
                            value="{{ old('name') }}"
                            required
                        />

                        <select name="origin" class="form-control mb-2" required>
                            <option value="" disabled {{ old('origin') ? '' : 'selected' }}>Select origin city</option>
                            <option value="LA" {{ old('origin') === 'LA' ? 'selected' : '' }}>LA</option>
                            <option value="Tokyo" {{ old('origin') === 'Tokyo' ? 'selected' : '' }}>Tokyo</option>
                        </select>

                        <input
                            type="number"
                            class="form-control mb-2"
                            placeholder="Enter pilot nitro level"
                            name="nitro"
                            value="{{ old('nitro') }}"
                            required
                        />

                        <input type="submit" class="btn btn-primary" value="Save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

