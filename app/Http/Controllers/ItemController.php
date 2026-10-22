<?php

namespace App\Http\Controllers;

use App\Item;
use App\SubCategory;
use TCG\Voyager\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($cat_id,$id,$sub_cat_id){

        $categories = Category::query()->where('id', '=', $id)->first();
        $subcategories = SubCategory::query()->where('id', '=', $cat_id)->first();
        $items = Item::query()->where('id', '=', $sub_cat_id )->first();


        return view('items.items' , compact('categories','subcategories','items'));
    }

    public function index(Request $request){
        $s=$request->input('s');

        $items = Item::latest()->search($s)->paginate(6);


        return view('items.AllItems' , compact('items' , 's'));

    }
}
