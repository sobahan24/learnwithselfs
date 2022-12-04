<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpPdoController extends Controller
{
    public function index(){
        return view('category.php_pdo.index');
    }
    public function connectDB(){
        return view('category.php_pdo.pages.connect-database-using-pdo-in-php');
    }
    public function insertData(){
        return view('category.php_pdo.pages.insert-data-into-database-using-pdo-in-php');
    }
    public function fetchData(){
        return view('category.php_pdo.pages.fetch-data-from-database-using-pdo-in-php');
    }
    public function updateData(){
        return view('category.php_pdo.pages.edit-update-data-into-database-using-pdo-in-php');
    }
    public function deleteData(){
        return view('category.php_pdo.pages.delete-data-from-database-using-pdo-in-php');
    }
    public function insertDataBind(){
        return view('category.php_pdo.pages.insert-data-using-bindparam-function-in-php-pdo');
    }
    public function updateDataBind(){
        return view('category.php_pdo.pages.edit-update-data-using-bindparam-in-php-pdo');
    }
    public function deleteDataBind(){
        return view('category.php_pdo.pages.delete-data-using-bindparam-in-php-pdo');
    }
}
