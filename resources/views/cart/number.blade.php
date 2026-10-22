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

            @if(session()->has('success'))

                <div class="alert alert-success msg-success">
                    {{session()->get('success')}}
                    @foreach(Cart::content() as $row)
                        <h3>Номер Заказа :</h3> <span><?php echo date("m.d.y"); ?></span>
                    @endforeach
                    <br> <p>перенаправление на главную страницу через 15 секунд ...</p>
                </div>

                <script>
                    var timer = setTimeout(function() {
                        window.location='http://svetilo.com.ua'
                    }, 15000);
                </script>

    @endif
@endsection