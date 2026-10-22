<?php

// Home
Breadcrumbs::register('welcome', function($breadcrumbs)
{
    $breadcrumbs->push('Главное', route('welcome'));
});


//Категории
Breadcrumbs::register('cat.show', function($breadcrumbs,$category) {
    $breadcrumbs->parent('welcome');
    $breadcrumbs->push($category->slug, route('cat.show',$category->id));
    $breadcrumbs->push($category->slug , route('sub.show',$category->id));
});


//sub Категории
Breadcrumbs::register('sub.show', function($breadcrumbs,$category) {
    $breadcrumbs->parent('welcome');

    $breadcrumbs->push($category->slug , route('sub.show',$category->id));

});




?>