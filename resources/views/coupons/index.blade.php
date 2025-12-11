<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Coupons</h1>
    <ul>
        @foreach($coupons as $coupon)
            <li>{{ $coupon->code }} - {{ $coupon->discount_amount }}</li>
        @endforeach
    </ul>
    <br>
    <a href="{{ route('dashboard') }}">Back to Dashboard</a>
</body>
</html>