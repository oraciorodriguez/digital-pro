<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digital pro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Gloria Hallelujah:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                
                color: #636b6f;
                font-family: 'Gloria Hallelujah', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: height;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

             html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
    }
 
    #full-screen-background-image {
        z-index: -999;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
    }

        </style>
        <img alt="full screen background imagenes" src="/imagenes/digital.jpg" id="full-screen-background-image" />
    </head>

    <body >
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
               
                <div class="links">
                    <a href="/products">productos</a>
                    <a href="https://forge.laravel.com">Forge</a>
                </div>
            </div>
        </div>
    </body>
</html>
