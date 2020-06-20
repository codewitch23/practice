<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/contact">
    @csrf
    <div class="container">
        <div class="col-lg-4 my-style ">
            <div class="center">
                <input type="text" name="email" id="email" class="form-control ">
            </div>
            <div class="center">
                <button class="btn btn-success mx-auto btn-block">send email</button>
            </div>
            <div>
                @error('email')
                {{$message}}
                @enderror
            </div>
            @if(session('message'))
                <div>
                    {{session('message')}}
                </div>
    @endif
</form>

</body>
</html>
