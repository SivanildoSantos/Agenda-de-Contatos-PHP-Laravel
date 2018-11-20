<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>News System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #E0FFFF;
                color: #636b6f;
                font-family: arial;
                font-weight: 100;
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
                text-align: center;
            }

            .title {
                font-size: 30px;
            }

            .links > a {
                color: #4682B4 ;
                padding: 0 15px;
                font-size: 18px;
                font-weight: 100;
                font-family: tahoma;
                text-decoration: none;
                text-transform: uppercase;

            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md ">
                Portal de Notícias
                </div>
                <div class="title m-b-md ">
                   <img src="https://cdn4.iconfinder.com/data/icons/pretty_office_3/256/Add-Male-User.png">
                </div>




                <div class="links">

                <a href="{{ url('/register') }}">Criar uma conta</a>
                    <a href="{{ url('/login') }}">Acessar</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
