<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>愚痴ります</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="body-color">
        <div class="d-flex justify-content-center pt-5">
            <h2 class=" ">これから愚痴ります</h2>
        </div>
        <div class="d-flex justify-content-center pt-5 ">
            <h5>仕事、人間関係など心に溜まっていることを吐き出して少しでもスッキリしてもらうためアプリです</h5>
        </div>

        <div class="pb-4">
            <img class="d-block mx-auto" src="/images/b1149.png" width="500" height="500">
            @if (Route::has('login'))
            <div class="top-right links  row d-flex justify-content-center">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }} " class="btn1 btn-3d btn-3db col-3 mr-2">ログイン</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn1 btn-3d btn-3db col-3">新規登録</a>
                @endif
                @endauth
            </div>
            @endif
        </div>


    </div>
</body>

</html>
