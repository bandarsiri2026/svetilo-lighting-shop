<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;
use Laravel\Scout\Searchable;


class Item extends Model
{
    use Searchable;

    public function scopeSearch($query , $s){

        return $query->where('name','LIKE','%'.$s.'%')->orWhere('description','LIKE','%'.$s.'%')->orWhere('id','LIKE','%'.$s. '%');


    }

    public function subCatId(){
        return $this->belongsTo(SubCategory::class);
    }

}
