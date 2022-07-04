<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

//$allCategories = ['Categories1' , 'Categories2'];

class HomeController extends Controller
{
    public function index(){

    /*$allCategories = DB::table('categories')->get();

    return view ( 'index' ,['categories' => $allCategories ]);*/
    }
}
