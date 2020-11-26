<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #FFFFFF;
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

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="images/promotion_03.jpg" alt="" class="img-fluid" width=100%  > 
                        </div>                    
                    </div>
                

                    <div class="row" style="margin-top:20px;">
                        <div class="col-sm-4" style="text-align: center;">
                            <img src="images/samsungPhone.jpg" width=50% alt="" class="img-fluid" > 
                            <p>SAMSUNG</p>
                        </div>
                        <div class="col-sm-4" style="text-align: center">
                            <img src="images/xiaomiPhone.jpg" width=50% alt="" class="img-fluid"> 
                            <p>XIAOMI</p>           
                        </div>
                        <div class="col-sm-4" style="text-align: center" >
                            <img src="images/vivoPhone.jpg" width=50% alt="" class="img-fluid" > 
                            <p>VIVO</p>
                        </div>                
                    </div>
            
                </div>

                <div class="container-fluid">
                    <div class="copyright text-center">
                        &copy; Copyright <strong>ABC company</strong>. All Rights Reserved
                    </div>
                    <div class="credits text-center">
                        Designed by <a href="https://ABC.com/">ABC Company</a>
                    </div>
                </div>
        
        </div>
    </body>
</html>
