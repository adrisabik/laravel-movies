@extends('layouts.main')

@section('main')

<div class="container-md mt-3 mb-4">
    <div class="offset-md-2 col-md-8 d-flex flex-column justify-content-center" id="title">
      <h2 class="text-center">Add Movie</h2>
      <div class="underline mb-3"></div>
    </div>  
</div>

<div class="container-lg" id="editMovie">
    <form method="POST" action="/" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="title">
        </div>
        <div class="mb-3">
          <label for="year" class="form-label">Year</label>
          <input type="number" class="form-control" id="year" name="year">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Movie Image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Add Movie</button>
        <a href="/" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection