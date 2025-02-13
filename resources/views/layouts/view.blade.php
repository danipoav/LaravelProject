<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD activities</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

</body>
<div class="container mx-auto p-4">
    @if(session('succes'))
    <div class="bg-green-200 text-green-200 p-2 mb-4">
        {{session('succes')}}
    </div>
    @endif

    @yield('content')
</div>

</html>