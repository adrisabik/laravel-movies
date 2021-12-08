@extends('layouts.main')

@section('main')
    <!-- Carousel -->
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="carousel-img d-block w-100" alt="image">
            <div class="carousel-caption d-none d-sm-block text-sm-start">
              <img src="img/1_title.png" alt="" class="img-title img-fluid">
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" class="carousel-img d-block w-100" alt="image">
            <div class="carousel-caption d-none d-sm-block text-sm-start">  
              <img src="img/2_title.png" alt="" class="img-title img-fluid">
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" class="carousel-img d-block w-100" alt="image">
            <div class="carousel-caption d-none d-sm-block text-sm-start">
              <img src="img/3_title.png" alt="" class="img-title img-fluid">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-md mt-3 mb-4">
      <div class="offset-md-2 col-md-8 d-flex flex-column justify-content-center" id="title">
        <h2 class="text-center">List Movies</h2>
        <div class="underline mb-4"></div>
        <a href="/create" class="btn btn-outline-primary" id="addMovie">Add Movie</a>
      </div>  
    </div>

    <!-- List movie -->
    <div class="container-lg mt-3">
      <div class="d-flex flex-wrap" id="listMovie">
        @foreach($movies as $movie)
        <div class="card m-1">
          <img src="{{ asset('storage')}}/{{ $movie->image  }}" class="card-img-top" alt="poster">
          <div class="card-body">
            <h6 class="card-title">{{ $movie->title }}</h6>
            <p class="card-text"><small class="text-muted">{{ $movie->year }}</small></p>
            <a class="btn btn-primary btn-sm modal-detail-button" href="/{{ $movie->id }}/edit">Update</a>
            <form method="POST" action="/{{ $movie->id }}">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm modal-detail-button mt-1">Delete</button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
@endsection