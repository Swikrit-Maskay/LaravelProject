<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
</head>
<body>
    <h1>Products</h1>
    <div>
        @if(session()->has('success'))
                {{session('success')}}
        @endif
    </div>
    <div>
        <a href="{{route('product.create')}}">Create Product</a>
    </div>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category ID</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product-> id}}</td>
            <td>{{$product-> name}}</td>
            <td>{{$product-> description}}</td>
            <td>{{$product-> price}}</td>
            <td>{{$product-> category_id}}</td>
            <td>
                <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
            </td>
            <td>
                <form method='post' action="{{ route('product.destroy',['product' => $product]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value='Delete'>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>