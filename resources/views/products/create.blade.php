<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create product</h1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        <div>
            <label >Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label >Description:</label>
            <input type="text" id="description" name="description" required>
        </div>
        <div>
            <label >Price:</label>
            <input type="text" id="price" name="price" required>
        </div>
        <div>
            <label >Category ID:</label>
            <input type="text" id="category_id" name="category_id" required>
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>