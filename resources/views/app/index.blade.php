<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        thead{
            font-weight: bolder;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Bienvenu sur la première page de notre projet</h1>
    <table class="table table-striped">
            <thead>
                <tr>
            <td>
                nom
            </td>
            <td>
                entraineur
            </td>
                </tr>
            </thead>
        @foreach ($clubs as $club)
            <tr>
                <td> <a href="{{ route('equipe', ['id'=>$club->id]) }}">{{ $club->nom }}</a></td>
                <td>{{ $club->entraineur }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
