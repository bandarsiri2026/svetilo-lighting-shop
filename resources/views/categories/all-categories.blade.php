@extends('welcome')
@section('content')

    <div class="container">

                  <div class="katalog ">
                КАТАЛОГ ТОВАРОВ

            </div>
            <div class="row">
        @foreach(TCG\Voyager\Models\Category::all() as $category)
            <div class="cat-hover card col-md-3 col-4 thumbnail" >

                <a href="/categories/{{$category->slug}} " class="">
                    <img class="card-img-top img-fluid " src="images/{{$category->slug}}.jpg" alt="фонарики">
                    <div class="card-block">
                        <hr>
                        <h4 class="card-title text-center">{{$category->name}}</h4>
                    </div>
                </a>
            </div>
        @endforeach
            </div>
    </div>
    <!-- /.container -->
@endsection
