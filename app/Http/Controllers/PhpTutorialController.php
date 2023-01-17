<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpTutorialController extends Controller
{
    function index(){
        return view('category.php.index');
    }
    function phpIntroduction(){
        return view('category.php.pages.php-introduction');
    }
    function phpSyntax(){
        return view('category.php.pages.php-syntax');
    }
    function phpComments(){
        return view('category.php.pages.php-comments');
    }
    function phpVariables(){
        return view('category.php.pages.php-variables');
    }
    function phpOperators(){
        return view('category.php.pages.php-operators');
    }
    function phpIfElse(){
        return view('category.php.pages.php-if-else');
    }
    function phpSwitchCase(){
        return view('category.php.pages.php-switch-case');
    }
    function phpLoops(){
        return view('category.php.pages.php-loops');
    }
    function phpForeachLoop(){
        return view('category.php.pages.php-foreach-loop');
    }
    function phpWhileLoop(){
        return view('category.php.pages.php-while-loop');
    }
    function phpDoWhileLoop(){
        return view('category.php.pages.php-do-while-loop');
    }
    function phpForLoop(){
        return view('category.php.pages.php-for-loop');
    }
    function sessionMessage(){
        return view('category.php.pages.show-session-message-in-php');
    }
    function createDatabase(){
        return view('category.php.pages.create-database-using-php-mysql');
    }
    function DatabaseConnection(){
        return view('category.php.pages.database-connection-in-php-mysql');
    }
    function createTable(){
        return view('category.php.pages.create-table-in-database-using-php');
    }
    function insertData(){
        return view('category.php.pages.insert-data-into-database-in-php-mysql');
    }
    function fetchData(){
        return view('category.php.pages.fetch-data-from-database-in-php-mysql');
    }
    function updateData(){
        return view('category.php.pages.update-data-into-database-in-php-mysql');
    }
    function deleteData(){
        return view('category.php.pages.delete-data-from-database-in-php-mysql');
    }
    function uploadImage(){
        return view('category.php.pages.how-to-upload-an-image-in-php-mysql');
    }
    function regSystem(){
        return view('category.php.pages.registration-system-in-php-mysql');
    }
    function loginSystem(){
        return view('category.php.pages.login-system-with-session-in-php-mysql');
    }
    function importExcelFile(){
        return view('category.php.pages.import-excel-file-into-mysql-database-in-php');
    }
    function exportFile(){
        return view('category.php.pages.export-mysql-data-to-excel-sheet-in-php');
    }
    function createDynamicSql(){
        return view('category.php.pages.create-dynamic-sql-insert-query-in-phpmysql');
    }
}
