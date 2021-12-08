@extends('layouts.main')

@section('main')

<div class="container-md mt-3 mb-4">
    <div class="offset-md-2 col-md-8 d-flex flex-column justify-content-center" id="title">
      <h2 class="text-center">Edit Movie</h2>
      <div class="underline mb-3"></div>
    </div>  
</div>

<div class="container-lg" id="editMovie">
    <form method="POST" action="/{{ $movie->id }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="title" value="{{ $movie->title }}">
        </div>
        <div class="mb-3">
          <label for="year" class="form-label">Year</label>
          <input type="number" class="form-control" id="year" name="year" value="{{ $movie->year }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Movie Image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection