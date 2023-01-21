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
        <a href="/comics/{{$comic['link']}}">
          <img src="{{$comic['thumb']}}" alt="" class="img-comic">
        </a>
        <div class="fw-small mt-2">{{$comic['series']}}</div>
      </div>

      @endforeach

    </div>

    <div class="text-center mt-5 ">
      <button class="btn bg-primary fw-bold text-white rounded-0 px-5">LOAD MORE</button>
    </div>

  </div>
</section>


<section class="bg-primary">
  <div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center gy-3">
      
      <div class="col">
        <a href="#" class="nav-link text-white fw-bold">
          <img src="{{Vite::asset('resources/imgs/buy-comics-digital-comics.png')}}" class="img-fluid" width="50" alt="DIGITAL COMICS">
          <span>DIGITAL COMICS</span>
        </a>
      </div>

      <div class="col">
        <a href="#" class="nav-link text-white fw-bold">
          <img src="{{Vite::asset('resources/imgs/buy-comics-merchandise.png')}}" class="img-fluid" width="50" alt="DC MERCHANDISE">
          <span>DC MERCHANDISE</span>
        </a>
      </div>

      <div class="col">
        <a href="#" class="nav-link text-white fw-bold">
          <img src="{{Vite::asset('resources/imgs/buy-comics-shop-locator.png')}}" class="img-fluid" width="35" height="55" alt="SUBSCRIPTION">
          <span>SUBSCRIPTION</span>
        </a>
      </div>

      <div class="col">
        <a href="#" class="nav-link text-white fw-bold">
          <img src="{{Vite::asset('resources/imgs/buy-comics-subscriptions.png')}}" class="img-fluid" width="50"  alt="COMIC SHOP LOCATOR">
          <span>COMIC SHOP LOCATOR</span>
        </a>
      </div>

      <div class="col">
        <a href="#" class="nav-link text-white fw-bold">
          <img src="{{Vite::asset('resources/imgs/buy-dc-power-visa.svg')}}" class="img-fluid" width="50" alt="DC POWER VISA">
          <span>DC POWER VISA</span>
        </a>
      </div>

    </div>
  </div>
</section>


@endsection