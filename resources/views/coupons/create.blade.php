<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Coupon</h1>
    <form action="{{ route('coupons.store') }}" method="POST">
        @csrf
        <label for="code">Code:</label>
        <input type="text" id="code" name="code" required>
        <br>
        <label for="discount_amount">Discount Amount:</label>
        <input type="number" id="discount_amount" name="discount_amount" required>
        <br>
        <button type="submit">Create Coupon</button>
    </form>
    <br>
    <a href="{{ route('coupons.index') }}">Back to Coupons</a>
    //nao ta funcionando o create
</body>
</html>