@extends('welcome')
@section('content')
    <div class="categories-1">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #c8f3c8 !important;">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    @foreach(TCG\Voyager\Models\Category::all()  as $category)

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 11px">
                                {{$category->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @foreach(App\SubCategory::where('cat_id', '=', $category->id)->get() as $sub)

                                    <a class="dropdown-item" href="/categories/{{$category->id}}/{{$sub->id}}">{{$sub->name}}</a>
                                @endforeach

                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>

    </div>
    <!-- /.row -->
    <div class="container">

        <div class="row">

            <div class=" col-md-6 col-4 thumbnail" >
                <div class="item-section-image item-grand">

                <img class="photo-tovar active zoom_01" src="{{asset('storage/app/public/'.$items->image)}}" alt="фонарики">
                </div>


                <div class="item-section-images">
                    <div class="item-section-thumbnail selected">
                        <imgsrc="{{asset('storage/app/public/'.$items->image)}}" alt="item">
                    </div>


                        @if($items->images)
                            @foreach(json_decode($items->images, true) as $image)
                                <div class="item-section-thumbnail no-selected ">
                                    <img src="{{asset('storage/app/public/'.$image)}}" alt="">
                                </div>
                            @endforeach
                        @endif

                </div>
            </div>

            <div class="col-md-6">

                <p class="code">Код Товара: {{$items->id}}000</p>
                <hr>
                <h4 class="card-title item-title "> {{$items->name}}</h4>
                <h4 class="card-title "> Опт : <span style="font-weight: bold;padding: 10px;background-color: #c8f3c8;border-radius: 8%;">{{$items->priceOpt}} грн</span></h4>
                <br>
                <h4 class="card-title "> Розница : <span style="font-weight: bold;padding: 10px;background-color: #c8f3c8;border-radius: 8%;">{{$items->price}} грн</span></h4>



                {!! Form::open(['route'=>['cart.edit', $items->id] , 'method'=>'get']) !!}

               <span>Кол-во:</span>

                <div class="count-value"> <span class="minus" onclick="$(this).next().val(~~$(this).next().val()-1);"><i class="fa fa-minus"></i></span>
                    <input onmouseout="kidor();" type="text" name="qty" data-min-qty="1" class="qty qty-input" value="1" id="">
                    <span class="plus1" onclick="$(this).prev().val(~~$(this).prev().val()+1);"><i class="fa fa-plus"></i></span>
                </div>
                <input type="submit" name="cartRefrech" class="btn btn-primary" value="Добавить в Корзину" style="  font-size: 19px; margin-top: 30px;margin-left: -2px;">
                <br>
                <input type="submit" class="btn btn-success" value="Купить" style="font-size: 30px;margin-top: 25px;margin-left: 0px;">


                {!! Form::close() !!}
                <hr>
                <h3>Характеристики:</h3>
                <h5 class="card-title "> {!!$items->description!!}</h5>
                <hr>
                <!-- comments -->

                <h5>Отзывы:</h5>
                <div id="disqus_thread"></div>
                <script>

                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        var disqus_config = function () {
                            this.page.url = '{{Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = {{$items->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://svetilo-com-ua-2.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>






            </div>
            <!-- /.col-md-6 -->


        </div>

    </div>
    <!-- /.container -->



@endsection
