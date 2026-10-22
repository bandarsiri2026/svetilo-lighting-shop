@extends('welcome')
@section('content')
    <div class="container">
        @foreach($subCategories as $subCat)
            <div class="row">
                <div class="card col-md-3 col-4 thumbnail" >
                    <a href="/categories/subCategories/{{$subCat->slug}}" class="">

                        <div class="card-block">
                            <hr>
                            <h4 class="card-title text-center">{{$subCat->name}}</h4>

                        </div>
                    </a>
                </div>
            </div>

        @endforeach
    </div>
    <!-- /.container -->


@endsection