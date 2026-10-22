@extends('welcome')
@section('content')
    <div class="container">

        @foreach($categories as $category)

            <div class="card col-md-3 col-4 thumbnail" >
                <a href="/categories/{{$category->slug}}" class="">
                    <img class="card-img-top iimg-fluid " src="" alt="фонарики">
                    <div class="card-block">
                        <hr>
                        <h4 class="card-title text-center">{{$category->name}}</h4>
                    </div>
                </a>
            </div>

        @endforeach
    </div>
    <!-- /.container -->


@endsection