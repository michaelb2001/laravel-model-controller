<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-model-controller</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <div class="container-fluid justify-content-center flex-wrap align-items-center text-center">
        <div class="container justify-content-center flex-wrap align-items-center text-center">
            @foreach ($lista_film as $chiave => $film)
            <div class="carta">
                <p>titolo : {{$film['title']}}</p>
            </div>
        @endforeach
        </div>
    </div>

</body>
</html>