<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form  action="{{route('admin.login.post')}}" method="POST">
        @csrf
        username:
        <input name="username" type="text">
        password:
        <input name="password" type="text">
        <button type="submit">Conectarse</button>
    </form>
</body>
</html>