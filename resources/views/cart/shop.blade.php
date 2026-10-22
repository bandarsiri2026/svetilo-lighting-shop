@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 " >

                @if(session()->has('success'))

                    <div class="alert alert-success msg-success">
                        {{session()->get('success')}}

                        <h3>Номер Заказа :</h3> <span><?php echo round(date("ymd"))*round(date("i")); ?></span>

                        <br> <p>перенаправление на главную страницу через 15 секунд ...</p>
                    </div>

                    <script>
                        var timer = setTimeout(function() {
                            window.location='http://svetilo.com.ua'
                        }, 15000);
                    </script>

                    {{ \App\Http\Controllers\CartController::removeAll() }}

                @endif
            </div>
            <div class=" col-md-7 col-4 " >


                <table class="table ">
                    <thead class="thead-inverse">
                    <tr>
                        <th>image</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>delete</th>

                    </tr>
                    </thead>

                    <tbody>

                    <?php foreach(Cart::content() as $row) :?>




                    <tr class="table-success">



                        <td><img src="{{asset('storage/'.$row->options->img)}}" style="width: 80px"/></td>
                        <td>




                            <p><strong><?php echo $row->name; ?></strong></p>
                            <p><?php echo ($row->options->has('image') ? $row->options->image : ''); ?></p>
                        </td>
                        <td >
                            {!! Form::open(['route'=>['cart.update', $row->rowId] , 'method'=>'put']) !!}



                            <input type="text" name="qty" id="qty" class="inputbox input-order" value="{{$row->qty}}" style="  width: 54px; text-align: center;"/>

                            <input type="submit" class="btn btn-primary" value="обновить корзину" style="font-size: 11px;margin-top: -3px;margin-left: 0px;">

                            {!! Form::close() !!}
                        </td>
                        <td><?php echo $row->price * $row->qty; ?> грн</td>
                        <td> {!! Form::open(['route'=>['cart.destroy', $row->rowId] , 'method'=>'DELETE']) !!}

                            <input type="submit" class="btn btn-danger" value="x">
                            {!! Form::close() !!}</td>

                    </tr>

                    <?php endforeach;?>

                    </tbody>

                    <tfoot>


                    <tr class="table-active">
                        <td colspan="2" >&nbsp;</td>
                        <td>Total</td>
                        <td><?php echo Cart::subtotal() ; ?> грн</td>
                    </tr>
                    </tfoot>
                </table>

            </div>

            <div class="col-md-5">

                <h1 class="text-center">оформление заказа</h1>
                @if(count($errors))

                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                            <ul>
                                <li>
                                    {{$error}}
                                </li>
                            </ul>
                        @endforeach
                    </div>

                @endif
                <div class="form-group">
                    <div class="col-md-12 awsome">

                        {!! Form::open(array('method' => 'post')) !!}
                        <i class="fas fa-user name" aria-hidden="true"></i>

                        {{Form::label('Имя', ' Имя :', ['class' => 'awesome'])}}

                        <span class="star-name">*</span>
                        {{ Form::text('name', null,['class' => 'form-control','placeholder'=>'Ваше Имя']) }}
                        <i class="fas fa-envelope email" aria-hidden="true"></i>
                        {{Form::label('email', 'Электронная Почта :', ['class' => 'awesome'])}}
                        <span class="star-email">*</span>
                        {{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'Ваша электронная почта']) }}
                        <i class="fa fa-phone telephone" aria-hidden="true"></i>
                        {{Form::label('Телефон', 'Телефон :', ['class' => 'awesome'])}}
                        <span class="star-telephone">*</span>
                        {{ Form::text('telephone', null, ['class' => 'form-control','placeholder'=>'Ваш Телефон '] ) }}
                        {{Form::label('Город', 'Город :', ['class' => 'awesome'])}}
                        <select class="city form-control" name="city">
                            <option value="kharkov">Харьков</option>
                            <option value="kiev">Киев</option>
                            <option value="odessa">Одесса</option>
                            <option value="lvov">Львов</option>
                            <option value="poltava">Полтава</option>
                            <option value="zaparojie">Запарожье</option>
                            <option value="dnepro">Днепро</option>
                        </select>


                    </div>
                    <div class="col-md-12 textarea-i">
                        <i class="fas fa-comment msg" aria-hidden="true"></i>
                        {{Form::label('Сообщение', 'Сообщение:', ['class' => 'awesome'])}}
                        {{ Form::textarea('msg', null, ['class' => 'form-control','placeholder'=>'Сообщение']) }}

                        <input value="Отправить" type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> </input>

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- /.col-md-6 -->


        </div>

    </div>
    <!-- /.container -->


@endsection
