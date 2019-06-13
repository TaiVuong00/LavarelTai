<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    {{--  form bao trùm các ô input  --}}
    @csrf
    Tài khoản: <input type="text" name="Username">
    <br>
    Mật Khẩu: <input type="text" name="Password">
    <br>
    <button type="submit">Gửi dữ liệu</button>

</form>
</body>
</html>