<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Endereços</h1>
    <ul>
        @foreach($enderecos as $endereco)
            <li>{{ $endereco->rua }} - {{ $endereco->cidade }} - {{ $endereco->estado }}</li>
        @endforeach
        <br>
    </ul>
    <a href="{{ route('dashboard') }}">Back to Dashboard</a>
</body>
</html>