@extends('layouts.app')


@section('content')

<section class="py-4 bg-primary">
    <div class="container position-relative">

        @foreach ($listComics as $comic)


        @if ($comic['title'] === 'Action Comics #1000: The Deluxe Edition')
        <div class="position-comic ">
            <img src="{{$comic['thumb']}}" height="200" alt="" class="">
        </div>
        @endif


        @endforeach

    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row py-2">

            <div class="col">

                @foreach ($listComics as $comic)


                @if ($comic['title'] === 'Action Comics #1000: The Deluxe Edition')
                <div>
                    <h3>{{$comic['title']}}</h3>

                    <div class="row align-items-center">

                        <div class="col">

                            <div
                                class="row row-cols-lg-2 justify-content-between border border-3 border-success border-start-0 bg-success bg-gradient">

                                <div class="col">
                                    <span>U.S Price:
                                        <span class="text-white">{{$comic['price']}}</span>
                                    </span>
                                </div>

                                <div class="col text-end">
                                    <div>AVAILABLE</div>
                                </div>

                            </div>

                        </div>

                        <div class="col border border-3 border-success border-start-0 bg-success bg-gradient">
                            <h6 class="text-white">Check Availability ▼</h6>
                        </div>

                    </div>
                </div>

                @endif

                <div class="py-3">
                    @if ($comic['title'] === 'Action Comics #1000: The Deluxe Edition')

                    <p>{{$comic['description']}}</p>
                    @endif
                </div>
                @endforeach

            </div>

            <div class="col">
                <div class="text-end">
                    <div class="text-secondary">ADVERTISEMENT</div>
                    <img src="{{Vite::asset('resources/imgs/adv.jpg')}}" class="img-fluid" alt="action comic">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-secondary">

    <div class="container pb-5">

        <div class="row gx-5">
            <div class="col">

                <h4 class="py-3 border-bottom border-0 rounded-0 ">Talent</h4>

                <div class="row py-2 border-bottom border-0 rounded-0">

                    <div class="col">
                        <h6>Art by:</h6>
                    </div>

                    <div class="col">

                        @foreach($listComics as $artists => $comic)


                        @foreach($comic['artists'] as $artist)
                        @if ($comic['title'] === 'Action Comics #1000: The Deluxe Edition')

                        <span>{{ $artist }},</span>

                        @endif
                        @endforeach

                        @endforeach

                    </div>

                </div>

                <div class="row py-2 border-bottom border-0 rounded-0">

                    <div class="col">
                        <h6>Written by:</h6>

                    </div>

                    <div class="col">

                        @foreach($listComics as $writers => $comic)


                        @foreach($comic['writers'] as $writer)
                        @if ($comic['title'] === 'Action Comics #1000: The Deluxe Edition')

                        <span>{{ $writer }},</span>

                        @endif
                        @endforeach

                        @endforeach

                    </div>

                </div>

            </div>
            <div class="col">
                <h4 class="py-3 border-bottom border-0 rounded-0">Specs</h4>

                @foreach ($listComics as $comic)
                @if ($comic['title'] === 'Action Comics #1000: The Deluxe Edition')

                <div class="row py-2 border-bottom border-0 rounded-0">

                    <div class="col">
                        <h6>Series</h6>
                    </div>

                    <div class="col">
                        <h6>{{$comic['series']}}</h6>
                    </div>

                </div>

                @endif
                @endforeach

                @foreach ($listComics as $comic)
                @if ($comic['title'] === 'Action Comics #1000: The Deluxe Edition')

                <div class="row py-2 border-bottom border-0 rounded-0">

                    <div class="col">
                        <h6>U.S Price:</h6>
                    </div>

                    <div class="col">
                        <h6>{{$comic['price']}}</h6>
                    </div>

                </div>

                @endif
                @endforeach

                @foreach ($listComics as $comic)
                @if ($comic['title'] === 'Action Comics #1000: The Deluxe Edition')

                <div class="row py-2 border-bottom border-0 rounded-0">

                    <div class="col">
                        <h6>On Sale Date:</h6>
                    </div>

                    <div class="col">
                        <h6>{{$comic['sale_date']}}</h6>
                    </div>

                </div>

                @endif
                @endforeach

            </div>
        </div>

    </div>
</section>

<section class="bg-secondary border">
    <div class="container ">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 justify-content-center align-items-stratch">

            <div class="col border">
                <div class="row py-3">

                    <div class="col">
                        <a href="#" class="nav-link text-white fw-bold">
                            <span>DIGITAL COMICS</span>
                        </a>
                    </div>

                    <div class="col">
                        <img src="{{Vite::asset('resources/imgs/buy-comics-digital-comics.png')}}" class="img-fluid"
                            width="50" alt="DIGITAL COMICS">
                    </div>

                </div>

            </div>

            <div class="col border">
                <div class="row py-3">

                    <div class="col">
                        <a href="#" class="nav-link text-white fw-bold">
                            <span>SHOP DC</span>
                        </a>
                    </div>

                    <div class="col">
                        <img src="{{Vite::asset('resources/imgs/buy-comics-merchandise.png')}}" class="img-fluid"
                            width="50" alt="DC MERCHANDISE">
                    </div>

                </div>

            </div>

            <div class="col border">
                <a href="#" class="nav-link text-white fw-bold">
                    <span>COMIC SHOP LOCATOR</span>
                    <img src="{{Vite::asset('resources/imgs/buy-comics-shop-locator.png')}}" class="img-fluid"
                        width="35" height="55" alt="SUBSCRIPTION">
                </a>
            </div>

            <div class="col border">
                <a href="#" class="nav-link text-white fw-bold">
                    <span>SUBSCRIPTION</span>
                    <img src="{{Vite::asset('resources/imgs/buy-comics-subscriptions.png')}}" class="img-fluid"
                        width="50" alt="COMIC SHOP LOCATOR">
                </a>
            </div>

        </div>

    </div>
</section>

@endsection