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

        <div class=" offset-md-8 sort-div" >



        <?php $sort ='DESC';?>
            <span class="sort">Сортировка:</span>


                <a class=" <?php if($sort == 'DESC'){echo 'active';}?>" href="?sort=DESC" > от дорогих </a> |
                <a class=" <?php if($sort == 'ASC'){echo 'active';}?>" href="?sort=ASC"> от дешевых </a>

        </div>
        @include('items.desc')

        <div class="row ">


            @foreach($items as $item)
            <!-- /.col-md-9 -->
                    <div class="card col-md-3 col-4  thumbnail" >

                        <a href="/categories/{{@$categories->id}}/{{@$subcategories->id}}/{{$item['id']}}" >

                            <div class="image">
                                <img class="cat-hover card-img-top img-fluid " src="{{asset('storage/app/public/'.$item->image)}}" alt="фонарики" >
                            </div>
                            <!-- /.image -->

                            <div class="card-block">
                                <hr>

                                <h4 class="card-title text-center">{{$item->name}}</h4>
                                {{$item->number}}


                            </div>
                        </a>
                        <hr>
                        <span>Цена:</span>
                        <h4>{{$item->price}}</h4>

                        {!! Form::open(['route'=>['cart.edit', $item->id] , 'method'=>'get']) !!}


                        <span>Кол-во:</span>
                        <div class="count-value"> <span class="minus" onclick="$(this).next().val(~~$(this).next().val()-1);"><i class="fa fa-minus
"></i></span>
                            <input onmouseout="kidor();" type="text" name="qty" data-min-qty="1" class="qty qty-input" value="1" id="">
                            <span class="plus1" onclick="$(this).prev().val(~~$(this).prev().val()+1);"><i class="fa fa-plus
"></i></span>
                        </div>
                        <input type="submit" name="cartRefrech" class="add-button btn btn-primary " value="Добавить в Корзину">

                        <input type="submit" class="buy-button btn btn-success " value="Купить" >

                        {!! Form::close() !!}
                    </div>

            @endforeach
        </div>



    </div>
    <!-- /.container -->

@endsection
