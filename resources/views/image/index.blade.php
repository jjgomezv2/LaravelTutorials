@extends('layouts.app')

@section("title", "Image Storage - DI")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload image</div>

                <div class="card-body">
                    <form action="{{ route('image.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="profile_image">Image:</label>
                            <input type="file" name="profile_image" id="profile_image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <div class="mt-3">
                        <img src="{{ asset('storage/test.png') }}" alt="Uploaded Image" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
