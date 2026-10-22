<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order</title>
</head>
<body>
<h1>Новый заказ</h1>
<p> Номер Заказа : {{$a*round(date("i"))}}</p>
<?php foreach(Cart::content() as $row) :?>
<p>Код Товара: {{$row->id}}000</p>

<p>Имя: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Телефон : {{ $telephone }}</p>
<p>Город : {{$city}}</p>
<p>Сообщение: {{ $msg }}</p>


<p>Назваие Товара: {{$row->name}}</p>
<p>Цена : {{ $row->price}}</p>
<p>Опт Цена :<?php if ($row->qty>10){echo $row->model->priceOpt ;}else{echo $row->price ;}?></p>
<p> Кол.: {{$row->qty}}</p>
<?php endforeach;?>


</body>
</html>


