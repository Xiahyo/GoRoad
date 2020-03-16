<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corona</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}">

    <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script src="{{ URL::asset('js/all.min.js') }}"></script>
    <script src="{{ URL::asset('js/fontawesome.min.js') }}"></script>

</head>
<body>

    <div class="container-fluid p-0 bg-home">
        <div class="row">
            <div class="col-md-8 bg-home bg-wallpaper position-relative">
                <div class="text-corona px-5 pt-4 pb-3 text-white">
                    <h1 class="font-weight-bold">Ayo travelling ke wuhan guys...</h1>
                    <h5>Mari belajar tentang corona, dan praktek terkena corona bersama sama</h5>
                    <h5>Dijamin asyik dehh. Biaya travelling juga murah :v</h5>
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
            <div class="col-md-4 bg-home bg-wallpaper1 position-relative">
                <div class="overlay-danger"></div>
                <img src="{{ 'img/logo.png' }}" class="logo" alt="">
            </div>
        </div>
    </div>

</body>
</html>
