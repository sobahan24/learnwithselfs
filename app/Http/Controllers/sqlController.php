<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sqlController extends Controller
{
    public function index(){
        return view('category.sql.index');
    }
    public function intro(){
        return view('category.sql.pages.sql-introduction');
    }
    public function commands(){
        return view('category.sql.pages.sql-commands');
    }
    public function syntax(){
        return view('category.sql.pages.sql-syntax');
    }
    public function select(){
        return view('category.sql.pages.sql-select');
    }
    public function distinct(){
        return view('category.sql.pages.sql-distinct');
    }
    public function where(){
        return view('category.sql.pages.sql-where');
    }
    public function insert(){
        return view('category.sql.pages.sql-insert');
    }
    public function update(){
        return view('category.sql.pages.sql-update');
    }
    public function comment(){
        return view('category.sql.pages.sql-comment');
    }
    public function delete(){
        return view('category.sql.pages.sql-delete');
    }
    public function order(){
        return view('category.sql.pages.sql-order-by');
    }
    public function operators(){
        return view('category.sql.pages.sql-operators');
    }
    public function joins(){
        return view('category.sql.pages.sql-joins');
    }
    public function innerJoin(){
        return view('category.sql.pages.sql-inner-join');
    }
    public function leftJoin(){
        return view('category.sql.pages.sql-left-join');
    }
    public function rightJoin(){
        return view('category.sql.pages.sql-right-join');
    }
    public function fullOuterJoin(){
        return view('category.sql.pages.sql-full-outer-join');
    }
    public function dataType(){
        return view('category.sql.pages.sql-data-type');
    }
}
