@extends('layouts.public')

@section('main')
    <section class="single_comics">
        <div class="jumbo">
            <img src="{{ asset('storage/' . $comic->banner) }}" alt="">
        </div>
        <div class="bg_blue"></div>

        <div class="container">
            <div class="img_cover">
                <img src="{{ asset('storage/' . $comic->cover ) }}" alt="">
            </div>
            
            <h2 class="mt-5">{{$comic->title}}</h2>
            
            <div class="row">
                <div class="info_comics col-7">
                    <div class="price_available px-2 my-3 element_center">
                        <div class="price_available_cont element_between">
                            <span>U.S. Price: ${{$comic->price}}</span>
                            @if ($comic->available == 1)
                            <span>AVAILABLE</span>
                            @else
                            <span>NOT AVAILABLE</span>
                            @endif
                        </div>
                        <div class="buy_now element_center">
                            <span class="">Buy Now <i class="fas fa-caret-down ml-2"></i></span>
                        </div>
                    </div>
                    <div class="comics_description">
                        <p>{{$comic->description}}</p>
                    </div>
                </div>

                <div class="community col-5">
                    <div class="community_title my-3 element_between">
                        <h3>COMMUNITY</h3>
                        <span>SEE ALL</span>
                    </div>
                    <div class="event">
                        <h4>CHOOSE YOUR CHAMPION! THROWDOWN ON THEMYSCIRA</h4>
                        <span>MAR 9</span>
                        <p>Who has the skill and the strength to battle another day? Cast your votes!</p>
                    </div>

                    <div class="event">
                        <h4>DC FAN ART CLUB: APRIL CHALLENGE</h4>
                        <span>APR 9</span>
                        <p>Celebrate the one-year anniversary of the DCFAC with a team-up creation!</p>
                    </div>

                    <div class="event">
                        <h4>JOIN THE DICK GRAYSON FAN CLUB</h4>
                        <span>APR 5</span>
                        <p>Every month, the Community selects Nightwing comics to read and discuss. Join the fun!</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection