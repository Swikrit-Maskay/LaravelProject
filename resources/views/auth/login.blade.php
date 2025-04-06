<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('auth.login')}}" style="display: flex; flex-direction: column; gap: 10px; width: 250px; margin: 50px auto; padding: 15px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);">
        @csrf
        <input type="email" name="email" placeholder="Enter your email" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px;" required>
        <input type="password" name="password" placeholder="Password" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px;" required>
        <input type="submit" value="Login" style="padding: 8px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
    </form>
    <form method="get" action="{{route('auth.register')}}" style="width: 250px; margin: 0 auto;">
        <button type="submit" style="padding: 8px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; width: 100%; margin-top: 10px;">Register</button>
    </form>
</body>
</html>