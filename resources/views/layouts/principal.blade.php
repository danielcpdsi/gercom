<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gercom</title>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery-3.0.0.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery-3.0.0.min.js')}}"></script>
    

    <style>
        @font-face {
            font-family: 'nevis';
            src: url({{URL::asset('assets/fonts/nevis.ttf')}});
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

    @yield('content')

</body>
</html>

