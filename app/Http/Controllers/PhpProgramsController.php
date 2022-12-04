<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpProgramsController extends Controller
{
    public function index(){
        return view('category.php_programs.index');
    }
    public function findLeapYear(){
        return view('category.php_programs.pages.find-leap-year-or-not-in-php');
    }
    public function findOddEvenNum(){
        return view('category.php_programs.pages.find-odd-or-even-in-php');
    }
    public function sumOfNumber(){
        return view('category.php_programs.pages.make-sum-of-n-numbers');
    }
    public function fibonacciNumber(){
        return view('category.php_programs.pages.print-fibonacci-numbers');
    }
    public function compareStrings(){
        return view('category.php_programs.pages.compare-two-strings');
    }
    public function convertStrings(){
        return view('category.php_programs.pages.convert-string-into-lowercase-and-uppercase-in-php');
    }
    public function findPosition(){
        return view('category.php_programs.pages.find-position-of-a-given-character');
    }
    public function replaceString(){
        return view('category.php_programs.pages.replace-one-string-using-another-string-in-php');
    }
    public function reversArr(){
        return view('category.php_programs.pages.reverse-an-array-in-php');
    }
    public function maxMinNum(){
        return view('category.php_programs.pages.find-out-max-and-min-number-in-array-php');
    }
    public function createTxtFile(){
        return view('category.php_programs.pages.create-txt-file-and-write-content-in-it');
    }
    public function emailReg(){
        return view('category.php_programs.pages.develop-email-registration-form');
    }
    public function countNumber(){
        return view('category.php_programs.pages.count-number-of-visits-using-cookies-in-php');
    }
    public function fetchData(){
        return view('category.php_programs.pages.fetch-data-from-db-and-display-in-html-table-in-php');
    }
    public function displayGreeting(){
        return view('category.php_programs.pages.display-greeting-acc-to-current-time');
    }
    public function formatingData(){
        return view('category.php_programs.pages.formatting-date-functions-in-php');
    }
    public function loginSys(){
        return view('category.php_programs.pages.login-system-in-php');
    }
}
