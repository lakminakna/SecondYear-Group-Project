<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parking.lk</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #fff;*/
                /*color: #636b6f;*/
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('../css/images/6.jpg');
                
                /*
                text-align:center;
                background-repeat:no-repeat;
                width:450px;
                height:900px;*/
            }

            /*.background1 {
                background-image: url('../css/images/5.jpg');
                filter: blur(8px);
                -webkit-filter: blur(8px);
            }*/


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
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: bold;
                color: #7FCB16;
            }

            .links > a {
                color: #F8FAF6;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- <div class="background1"></div> -->
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
        
            <div class="content" style="body-background">
                <div class="title m-b-md">
                    PARKING
                </div>

                <div class="links">
                    <a href="#">park</a>
                    <a href="#">earn</a>
                    <a href="#">easy</a>
                    <a href="#">quick</a>
                    <a href="#">safe</a>
                    <a href="#">time</a>
                    <a href="#">trust</a>
                    <a href="http://127.0.0.1:8000/contacts">Contacts</a>
                    
                </div>
            </div>
            <div style="height: 45px;background-image:url('../public/css/images/1.jpg');border-radius: 5px;position:relative"></div>
        </div>
        
    </body>
</html>
