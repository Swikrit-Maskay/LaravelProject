<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="post" action="{{route('auth.register')}}" style="display: flex; flex-direction: column; gap: 10px; width: 250px; margin: 50px auto; padding: 15px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px;" required>
        <input type="email" name="email" placeholder="Enter your email" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px;" required>
        <input type="password" name="password" placeholder="Password" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px;" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px;" required>
        <input type="submit" value="Submit" style="padding: 8px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
    </form>
</body>

</html>