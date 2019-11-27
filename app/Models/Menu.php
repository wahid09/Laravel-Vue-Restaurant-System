<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Menu extends Model
{
    protected $with = ['category'];

    public function category(){
      return $this->belongsTo(Category::class);
    }
}
