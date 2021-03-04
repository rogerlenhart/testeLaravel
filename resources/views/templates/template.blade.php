<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
</head>
<body>
<div class="container-fluid">
    <h1 class="text-center mt-2">
        @yield('title')
    </h1>    
    <hr>
    @yield('content')
</div>
</body>
</html>