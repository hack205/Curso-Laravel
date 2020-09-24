<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = "articles";
    protected $fillable = ['title','content','category_id','user_id'];
}
