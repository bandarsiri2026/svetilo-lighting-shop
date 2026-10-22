<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class CatController extends Controller
{
    public function index(){
        $categories= Category::all();

        return view('categories.all-categories', compact('categories'));
    }
    public function show($slug){
        $categories = Category::where('slug', '=', $slug)->paginate(12);
        $subcategories = SubCategory::where('cat_id', '=',$categories->pluck('id'))->paginate(12);



            return view('subCategories.subCategories', compact('subcategories','categories'));


        }





}
