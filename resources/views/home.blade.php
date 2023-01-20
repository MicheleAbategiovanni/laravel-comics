@extends('layouts.app')

@section('content')

<section>
  <div class="container position-relative">

    <div class="my-box">

      <span class="bg-primary text-white px-3 py-2 fw-bold ">
        <span>CURRENT SERIES</span>
      </span>

    </div>

  </div>
</section>

<section class="bg-dark py-4">
  <div class="container py-3">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 text-white g-4 px-2">

      @foreach ($listComics as $comic)

      <div class="col">
        <a href="#">
          <img src="{{$comic['thumb']}}" alt="" class="img-comic">
        </a>
        <div class="fw-small">{{$comic['series']}}</div>
      </div>

      @endforeach

    </div>

  </div>
</section>


@endsection