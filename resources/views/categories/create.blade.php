<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description">
        <br><br>
        <button type="submit">Create Category</button>
    </form>
    <br>
    <a href="{{ route('categories.index') }}">Back to Categories</a>
</body>
</html>