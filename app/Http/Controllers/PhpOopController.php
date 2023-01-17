<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpOopController extends Controller
{
    public function index(){
        return view('category.php_oop.index');
    }
    public function connectDB(){
        return view('category.php_oop.pages.connect-to-database-in-php-using-oop');
    }
    public function insertDataDB(){
        return view('category.php_oop.pages.how-to-insert-data-in-database-using-php-oop');
    }
    public function insertDataPro(){
        return view('category.php_oop.pages.insert-data-in-php-oop-using-mysqli-procedural');
    }
    public function fetchData(){
        return view('category.php_oop.pages.fetch-data-from-database-using-oop-in-php');
    }
    public function editData(){
        return view('category.php_oop.pages.edit-and-update-data-using-oops-in-php-mysql');
    }
    public function deleteData(){
        return view('category.php_oop.pages.delete-data-from-database-using-oop-in-php-mysql');
    }
}
