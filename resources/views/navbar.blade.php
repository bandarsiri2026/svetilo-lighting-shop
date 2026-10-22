<nav class="navbar navbar-expand-lg navbar-light" >

    <div class="container">
        <a class="navbar-brand " href="/"><img class="logo" src="{{asset('storage/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link green-active" href="/">ГЛАВНАЯ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about" href="/about-us"> О НАС</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link aplata" href="/payment"> ОПЛАТА И ДОСТАВКА </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link contacts" href="/contact-us"> КОНТАКТЫ</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0 " action="{{url('/items')}}" method="get">
                {{--<input type="text" name="s"  value="{{isset($s) ? $s : ''}}" class="form-control mr-sm-2" placeholder="поиск по магазину">--}}
                {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">поиск</button>--}}


            <div class="aa-input-container" id="aa-input-container">
                <input type="search" id="aa-search-input" class="aa-input-search" placeholder="поиск по магазину..." name="search" autocomplete="off" />
                <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                    <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
                </svg>
            </div>
            </form>

        </div>



    </div>
</nav>





<div class="backgr" style="background-color: #c4c9d68a;">
    <!-- /.backgr -->
    <div class="container" >
        <div class="row" >
            <div class="col">
                <!-- /.col -->
                <div class="col-md-2 phone-icon"><i class="fas fa-phone fa-3x"></i></div>

                <div class="col-md-10 phone-numbers ">
                    093-78-30-952<br>
                    098-49-83-613 <br>
                    063-75-57-122
                    <a class="megat" href="/"><img class="logoMegat" src="{{asset('storage/logoMegat.png')}}" alt=""></a>


                </div>





            </div>
            <div class="col">
                <!-- /.col -->
                <div class="shoping-bug">
                    <a class="karzina " href="{{route('cart.index')}}" ><i class="karzina-i fas fa-cart-arrow-down fa-3x"></i> <span>Корзина</span><span class="alert badge">{{Cart::content()->count()}}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
