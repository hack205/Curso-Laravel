<?php

namespace App\Http\Controllers;
use App\Http\Request;
use App\Http\Controller\Controller;
use App\Models\User;

class TestController extends Controller
{
    public function view($id){
        $user = User::find($id);
    }
    
}
