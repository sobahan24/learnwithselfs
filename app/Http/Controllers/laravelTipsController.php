<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravelTipsController extends Controller
{
    public function index(){
        return view('category.laravel_tips.index');
    }
    public function getDataId(){
        return view('category.laravel_tips.pages.get-data-from-database-by-id');
    }
    public function getDataMultiId(){
        return view('category.laravel_tips.pages.get-data-with-multiple-ids');
    }
    public function getArr(){
        return view('category.laravel_tips.pages.get-array-of-ids-from-collection');
    }
    public function getColm(){
        return view('category.laravel_tips.pages.get-or-select-specific-columns-in-laravel-eloquent');
    }
    public function concatColm(){
        return view('category.laravel_tips.pages.concat-two-columns-using-eloquent-model');
    }
}
