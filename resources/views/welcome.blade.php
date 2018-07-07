<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{URL::asset('/css/mainPage/mainPage.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/bootstrap/css/bootstrap.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>
    <div class="navbar">
        <div class="navbar-inner">
            <a class="brand" href="#">интернет магазин </a>

            <ul class="nav" >

                <li ><a href="#">кек</a></li>
                <li class="divider-vertical"></li>


                <ul class="nav nav-pills">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Одежда <b class="caret"></b></a>
                        <ul id="menu1" class="dropdown-menu">
                            <li><a href="{{ url('/sale/pants') }}">Брюки</a></li>
                            <li><a href="{{ url('/sale/Jeans') }}">Джинсы</a></li>
                            <li><a href="{{ url('/sale/Hoodies') }}">Толстовки</a></li>
                        </ul>
                    </li>
                </ul>



                <li><a href="{{ url('/login') }}">Войти</a></li>
                <li class="divider-vertical"></li>


                <li> <a href="{{ url('/register') }}">Зарегистрироваться</a></li>
                <li class="divider-vertical"></li>

            </ul>
        </div>
         </div>

    @yield('shop')


    <script src="{{URL::asset('jquery.js')}}"></script>
    <script src="{{URL::asset('/bootstrap/js/bootstrap.js')}}"></script>
    </body>

</html>
