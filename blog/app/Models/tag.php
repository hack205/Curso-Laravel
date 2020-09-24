<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table = "tags";
    protected $fillable = ['name'];

    public function articles(){
        return $this->belongsToMany('App\Models\article');
    }

}
