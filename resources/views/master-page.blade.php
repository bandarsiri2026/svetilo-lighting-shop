<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Svetilo интернет магазин</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/normalize.css') }}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css') }}">




</head>

<body>


@include('navbar')

@yield('content')

<!--  start slider -->


<!--end slider-->


<!-- start categories-->



<!-- Footer -->
@include('footer')

<!-- Bootstrap core JavaScript -->


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.elevateZoom-3.0.8.min.js') }}"></script>

<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome-all.js') }}"></script>
<script src="{{ asset('assets/js/style.js') }}"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('assets/js/algolia.js') }}"></script>


<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'LFWgU4wVkk';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->


</body>

</html>
