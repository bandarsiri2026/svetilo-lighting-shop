<?php

namespace App\Http\Controllers;

use App\Item;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use TCG\Voyager\Models\Category;

class SubCatController extends Controller
{
    public function index(){

        $subCategories= SubCategory::all();
        return view('subCategories.allSubCat' , compact('subCategories' ));
    }
    public function show($id,$cat_id){
        $categories = Category::query()->where('id', '=', $id)->find($id);
        $subcategories = SubCategory::query()->where('cat_id', '=', $id)->find($cat_id);



        if (strpos($_SERVER['REQUEST_URI'], "?sort=ASC" ) !== false){
            $items = Item::where('sub_cat_id','=',  $cat_id)->orderBy('price' , 'asc')->paginate(6);

//            ->orWhere('sub_sub', 'green')->paginate(6);

        }elseif (strpos($_SERVER['REQUEST_URI'], "?sort=DESC" )  !== false){
            $items = Item::where('sub_cat_id','=', $cat_id)->orderBy('price' , 'desc')->paginate(6);

//            ->orWhere('sub_sub', 'red')->paginate(6);
        }else{
            $items = Item::where('sub_cat_id','=', $cat_id)->orderBy('created_at' , 'desc')->paginate(6);
        }

//




        return view('items.home', compact('categories','subcategories','items'));

    }

    public function showDesc($id,$cat_id){
        $categories = Category::query()->where('id', '=', $id)->find($id);
        $subcategories1 = SubCategory::query()->where('id', '=', $cat_id)->find($cat_id);
        $items = Item::where('sub_cat_id','=',  $cat_id)->first();


//




        return view('items.desc', compact('categories','subcategories1','items'));

    }


}
