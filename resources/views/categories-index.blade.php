
<div class="slider-tovar">
    <div class="container">
        <div class="row">


            <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" style=" margin-right: 5px;">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="brightness2 img-fluid" src="images/slide2/01.png" alt="First slide" style="width: 100%">
                    </div>
                    <div class="carousel-item">
                        <img class="brightness2 img-fluid"  src="images/slide2/02.jpg" alt="Second slide" style="width: 100%">
                    </div>
                    <div class="carousel-item">
                        <img class="brightness2 img-fluid"  src="images/slide2/03.jpg" alt="Second slide" style="width: 100%">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="brightness2 img-fluid" src="images/slide3/01.jpg" alt="First slide" style="width: 100%">
                    </div>
                    <div class="carousel-item">
                        <img class="brightness2 img-fluid"  src="images/slide3/02.jpg" alt="Second slide" style="width: 100%">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>




        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


</div>



<!-- end categories-->

<!-- start categories images-->
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

    <!-- /.row -->
</div>
<!-- /.container -->


<!-- end categories images-->
