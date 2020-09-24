<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = "articles";
    protected $fillable = ['title','content','category_id','user_id'];

    public function category(){
        return $this->belongsTo('App\Models\category');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function images(){
        return $this->hashMany('App\Models\image');
    }
    public function tags(){
        return $this->belongsToMany('App\Models\tag');
    }
}
