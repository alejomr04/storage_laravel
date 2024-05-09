<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios Registrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #f2f2f2;
        }
        table td img {
            display: block;
            margin: auto;
            max-width: 100px;
            height: auto;
        }
        .center {
            text-align: center;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('create') }}" class="center">Agregar Nuevo Usuario</a>

        <h1>Usuarios Registrados en la Base de Datos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($infos as $info)
                    <tr>
                        <td>{{ $info->name }}</td>
                        <td>{{ $info->email }}</td>
                        <td><img src="{{ asset('storage/images/' . $info->file_url) }}" alt="image"></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No hay datos</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
