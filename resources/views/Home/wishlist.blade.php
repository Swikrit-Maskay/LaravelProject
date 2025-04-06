<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Wishlist</h1>
    @foreach($wishlistItems as $item)
        <div>
            <h3>{{ $item->product->name }}</h3>
            <p>{{$item->product->description}}</p>
            <p>{{$item->product->price}}</p>
            <form action="{{route('wishlist.remove', $item->id)}}" method='post'>
                @csrf
                @method('DELETE')
                <button type='submit'>Delete</button>
            </form>
        </div>
    @endforeach
</body>
</html>