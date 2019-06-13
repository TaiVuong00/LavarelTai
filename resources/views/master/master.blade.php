<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- css chung --}}

</head>
<body>
{{-- Gọi code trang header --}}
@include('master.header')


{{-- Nơi chứa nội dung thay đổi --}}
@yield('content')


{{-- gọi code troang footer --}}
@include('master.footer')


{{-- js chung --}}

</body>
</html>