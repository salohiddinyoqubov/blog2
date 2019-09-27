<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','slug','description_short','description','image','image_show','meta_title','meta_description','meta_keyword','published','viewed','created_by','modefied_by'];
    public function categories()
    {
        return $this->morphToMany('App\Category','categoryable');
    }
}
