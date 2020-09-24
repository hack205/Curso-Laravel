<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name'];

    public function articles(){
        return $this->hashMany('App\Models\article');
    }
}
