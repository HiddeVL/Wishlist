<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@300&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <style>
        *{
            font-family: 'Zen Kaku Gothic Antique', sans-serif;
            font-weight: bold;
        }

        .container-fluid {
            padding-right:0;
            padding-left:0;
            margin-right:auto;
            margin-left:auto
        }

        .nav_item{
            margin-right: 1vw;
            color: black;
            text-decoration: none;
        }

        .nav_item:hover{
            color: gray;
            text-decoration: none;
        }

        .logo{
            height: 10vh;
        }

        .logout-button{
            background-color: #90E0EF;
            border: none;
            border-radius: 20px;
            font-weight: bolder;
            color: white;
            padding: 0.5vw;
        }

        .logout-button:hover{
            background-color: #48CAE4;
            color: white;
        }
    </style>
</head>

<body class="container-fluid">
<section class="navigatie  d-flex align-items-center justify-content-between" style="height: 10%;">
    <article>
    </article>
    <article>
        <a href="home" class="nav_item">Home</a>
        @if(Auth::check())
        <a href="bekijken" class="nav_item">Wishlist bekijken</a>
        <a href="toevoegen" class="nav_item">Item toevoegen</a>
            @endif
    </article>
    <article>

            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @if(Auth::check())
                    <a href="{{ url('/logout') }}" class="nav_item logout-button btn btn-primary">Uitloggen</a>
                @else
                    <a href="{{ route('login') }}" class="nav_item">Login</a>
                    <a href="{{ route('register') }}" class="nav_item logout-button btn btn-primary">Get Started</a>
                    @endif
            </div>
            </div>
    </article>
</section>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
