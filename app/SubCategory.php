<?php

namespace App;



use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;

class SubCategory extends Model
{
    public function getRouteKeyName()
    {
        return ['id','slug'];
    }
    public function catId(){
        return $this->belongsTo(Category::class);
    }
    public function subCatId()
    {
        return $this->hasMany(Item::class);
    }

}
