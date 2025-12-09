<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delivery Drivers</h1>
    <ul>
        @foreach($Deliverydrivers as $driver)
            <li>{{ $driver->name }} - {{ $driver->phone }}</li>
        @endforeach
    </ul>
</body>
</html>