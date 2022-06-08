<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
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

        .links>a {
            color: #636b6f;
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

        .nav {
            height: 90px;
            background-color: aquamarine;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav a {
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            margin: 0px 20px;

        }
    </style>
</head>

<body>
    <div class="nav">
        <a href="{{route('others')}}">Home</a>
        <a href="{{route('others')}}">Others</a>

    </div>


    <div class="content">
        <div class="title m-b-md">
            {{$msg}}
        </div>

        <h3>{{$fullname}}</h3>
    </div>

</body>

</html>