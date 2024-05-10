<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center p-4">
            
            <h1>{{$info->name}}</h1>
            <p class="text-muted">{{$info->email}}</p>
            <img src="{{ asset('storage/images/' . $info->file_url) }}" alt="image"
            <a href="{{route('index')}}" class="btn btn-danger mb-3">Volver</a>
        </div>
    </div>
</body>

</html>

