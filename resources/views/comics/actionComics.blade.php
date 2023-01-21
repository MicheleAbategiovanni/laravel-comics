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
                               
                                <div class="row row-cols-lg-2 justify-content-between border border-3 border-success border-start-0 bg-success bg-gradient">
                                    
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

<section>
    <div class="container">

    </div>
</section>

@endsection