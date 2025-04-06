<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit product</h1>
    <form method="POST" action="{{ route('product.update',['product' => $product]) }}">
        @csrf
        @method('PUT')
        <div>
            <label >Name:</label>
            <input type="text" id="name" name="name" value="{{$product->name}}">
        </div>
        <div>
            <label >Description:</label>
            <input type="text" id="description" name="description" value="{{$product->description}}">
        </div>
        <div>
            <label >Price:</label>
            <input type="text" id="price" name="price" value="{{$product->price}}">
        </div>
        <div>
            <label >Category ID:</label>
            <input type="text" id="category_id" name="category_id" value="{{$product->category_id}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>