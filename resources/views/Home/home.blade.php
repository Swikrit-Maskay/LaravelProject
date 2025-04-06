<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    home
    @if(Auth::check())
        <form method="post" action ="{{route('auth.logout')}}">
            @csrf
            <button type='submit'>Logout</button>
        </form>
        @if(Auth::user()->is_admin)
        <a href="{{ route('product.index') }}">Go to Product Management</a>
        @endif
    @else
        <form method="get" action ="{{route('login')}}">
            @csrf
            <button type='submit'>Login</button>
        </form>
    @endif
    <form method="get" action ="{{route('wishlist.index')}}">
        @csrf
        <button type='submit'>wishlist</button>
    </form> 
    <table border=1>
    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category ID</th>
            <th>Price</th>
            <th>Wishlist</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->price}}</td>
            <td>
                <form method="POST" action="{{route('wishlist.add', ['productID' => $product->id])}}">
                    @csrf
                    <button type="submit">Add to wishlist</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>