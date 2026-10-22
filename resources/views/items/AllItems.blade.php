@extends('welcome')
@section('content')
    <div class="container">

        <div class="row">
            @foreach($items as $item)
            <div class="card col-md-6 col-4 thumbnail" >
                    <div class="item-section-image">
                        <img class=" active" id="currentImage" src="{{asset('storage/'.$item->image)}}" alt="фонарики" style="border: 1px solid lightgray;margin-top: 10px;width: 402px;height: 402px;">
                    </div>

                        <div class="item-section-images">
                            <div class="item-section-thumbnail selected">
                                <img src="{{asset('storage/'.$item->image)}}" alt="item">
                            </div>


                            @if($item->images)
                                @foreach(json_decode($item->images, true) as $image)
                                    <div class="item-section-thumbnail ">
                                        <img src="{{asset('storage/'.$image)}}" alt="">
                                    </div>
                                @endforeach
                            @endif

                        </div>




            </div>
                <div class="col-md-6">
                    <p class="code">Код Товара: {{$item->id}}000</p>
                    <h4 class="card-title item-title "> {{$item->name}}</h4>
                    <h4 class="card-title "> Цена : <span style="font-weight: bold;">{{$item->price}} грн</span></h4>


                    {!! Form::open(['route'=>['cart.edit', $item->id] , 'method'=>'get']) !!}

                    <span>Кол-во:</span>

                    <div class="count-value"> <span class="minus" onclick="$(this).next().val(~~$(this).next().val()-1);"><i class="fa fa-minus
"></i></span>
                        <input onmouseout="kidor();" type="text" name="qty" data-min-qty="1" class="qty qty-input" value="1" id="">
                        <span class="plus1" onclick="$(this).prev().val(~~$(this).prev().val()+1);"><i class="fa fa-plus
"></i></span>
                    </div>
                    <input type="submit" name="cartRefrech" class="btn btn-primary" value="Добавить в Корзину" style="  font-size: 19px; margin-top: 30px;margin-left: -2px;">
                    <br>
                    <input type="submit" class="btn btn-success" value="Купить" style="font-size: 30px;margin-top: 25px;margin-left: 0px;">


                    {!! Form::close() !!}
                    <hr>
                    <h3>Характеристики:</h3>
                    <h5 class="card-title "> {{$item->description}}</h5>


                </div>


            @endforeach

        </div>


            <div class="text-center">

                {{$items->appends(['s' => $s])->links()}}
            </div>
    </div>
    <!-- /.container -->


@endsection