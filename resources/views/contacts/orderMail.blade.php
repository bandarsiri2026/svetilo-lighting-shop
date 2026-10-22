<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello from order</h1>
<p> Номер Заказа : {{$a*$price}}</p>
<p>Имя: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Телефон : {{ $telephone }}</p>
<p>Город : {{$city}}</p>
<p>Сообщение: {{ $msg }}</p>
<p>Name:{!! $nn !!}</p>

<p> Цена: {{$price}}</p>
<p>Количество : {{ $total /$price}}</p>


</body>
</html>


