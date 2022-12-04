<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpSolutionsController extends Controller
{
    public function index(){
        return view('category.php_solutions.index');
    }
    public function bootstrapCrud(){
        return view('category.php_solutions.pages.php-crud-using-bootstrap-model-in-php');
    }
    public function bootstrapCrudFetch(){
        return view('category.php_solutions.pages.php-crud-fetch-data-in-php-mysql');
    }
    public function bootstrapCrudInsert(){
        return view('category.php_solutions.pages.php-crud-insert-data-into-database-in-php-mysql');
    }
    public function bootstrapCrudUpdate(){
        return view('category.php_solutions.pages.php-crud-edit-and-update-data-into-database-in-php-mysql');
    }
    public function bootstrapCrudDelete(){
        return view('category.php_solutions.pages.php-crud-delete-data-from-database-in-php-mysql');
    }
    public function ajaxFetch(){
        return view('category.php_solutions.pages.fetch-data-from-db-using-jquery-ajax-php');
    }
    public function ajaxStoreData(){
        return view('category.php_solutions.pages.store-data-without-page-reload-using-jquery-ajax-in-php');
    }
    public function ajaxStoreDataReload(){
        return view('category.php_solutions.pages.fetch-single-data-in-pop-up-dialog-using-jquery-ajax-php');
    }
    public function ajaxStoreDataTextBox(){
        return view('category.php_solutions.pages.fetch-data-in-textbox-pop-up-dialog-using-jquery-ajax-php');
    }
    public function setNav(){
        return view('category.php_solutions.pages.set-navbar-item-active-in-php');
    }
}
