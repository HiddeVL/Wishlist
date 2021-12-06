@extends("layouts.app")

@section('title')
    Home
@endsection

@section("content")

    <style>
        *{
            overflow: hidden;
        }

        .home_title{
            font-size: 8vh;
        }

        .home_button{
            border: 2px solid black;
            background-color: black;
            color: white;
            text-decoration: none;
            margin-top: 10vh;
            padding-left: 2vw;
            padding-right: 2vw;
            padding-top: 1vh;
            padding-bottom: 2vh;
            transition: 0.4s;
        }



        .home_button:hover{
            background-color: white;
            color: black;
           text-decoration: none;
        }

        .text_rotate{
            transform: rotate(-90deg);
            color: white;
            font-size: 8vh;
            margin-bottom: 10vh;
            white-space: nowrap;
        }

        .rondje{
            border: 2px solid white;
            border-radius: 50%;
            width: 50%;
            height: 10%;
        }
    </style>

<section class="d-flex flex-row" style="width: 100%; height: 100%">

    {{--Grote container--}}
    <article class="d-flex  " style="width: 70%; height: 90%; background-color: #00B4D8; padding: 2vw; color: white">
        <div style="width: 50%; height: 100%;" class="d-flex align-items-start justify-content-end flex-column">
            <h2 class="home_title">
                <b>Welcome to your wishlist</b>
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam orci sem, pretium accumsan augue ut, hendrerit ornare nisi. Nulla cursus scelerisque lobortis. Nullam aliquam eu lorem ac semper.</p>
            <br>
            @if(Auth::check())
                <a class="home_button" href="bekijken">Wishlist bekijken</a>
            @endif
        </div>
{{--        <div class="d-flex align-items-center justify-content-center" style="width: 100%">--}}
{{--            <img src="{{ URL::to('/') }}/images/earth.png" style="width: 80%; height: 90%">--}}
{{--        </div>--}}
    </article>

    {{--Container 1 Wishlist/Merge Grote container--}}
    @if(Auth::check())
    <article style="width: 10%; height: 90%; background-color: #0096C7" class="d-flex align-items-center justify-content-end flex-column">
            <p class="text_rotate">Wishlist</p>
        <div class="rondje d-flex align-items-center justify-content-center">
            <a href="bekijken">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" fill="white" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
            </a>
        </div>
    </article>
    @else
        <article style="width: 10%; height: 90%; background-color: #00B4D8;" class="d-flex align-items-center justify-content-end flex-column">
        </article>
    @endif

    {{--Container 2 Wensmaken/Registereren Button werkt niet--}}
    <article style="width: 10%; height: 90%; background-color: #0077B6;" class="d-flex align-items-center justify-content-end flex-column">
        @if(Auth::check())
        <p class="text_rotate" style="padding-left: 16vh">Wens maken</p>
        <div class="rondje d-flex align-items-center justify-content-center">
            <a href="/toevoegen" style="z-index: 1">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" fill="white" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
            </a>
        </div>
        @else
            <p class="text_rotate" style="padding-left: 13vh">Registreren</p>
            <div class="rondje d-flex align-items-center justify-content-center">
                <a href="{{ route('register') }}" style="z-index: 1">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" fill="white" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                </a>
            </div>
        @endif
    </article>

    {{--Container 3 Uitloggen/Inloggen--}}
    <article style="width: 10%; height: 90%; background-color: #023E8A" class="d-flex align-items-center justify-content-end flex-column">
        @if(Auth::check())
        <p class="text_rotate" style="padding-left: 6vh">Uitloggen</p>
        <div class="rondje d-flex align-items-center justify-content-center">

            <a href="logout">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" fill="white" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
            </a>

        </div>
        @else
            <p class="text_rotate" style="padding-left: 1vh">Inloggen</p>
            <div class="rondje d-flex align-items-center justify-content-center">

                <a href="{{ route('login') }}">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" fill="white" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                </a>

            </div>
            @endif
    </article>
</section>

@endsection

