<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phpAdminPanelController extends Controller
{
    public function index()
    {
        return view('category.php_admin_panel.index');
    }
    public function makeAdminPanel()
    {
        return view('category.php_admin_panel.pages.make-admin-panel-in-php');
    }
    public function registerData()
    {
        return view('category.php_admin_panel.pages.register-data-in-php');
    }
    public function fetchData()
    {
        return view('category.php_admin_panel.pages.fetch-data-from-database-in-php');
    }
    public function editData()
    {
        return view('category.php_admin_panel.pages.edit-data-in-php');
    }
    public function deleteData()
    {
        return view('category.php_admin_panel.pages.delete-data-from-database');
    }
    public function countTotal()
    {
        return view('category.php_admin_panel.pages.count-total-record-from-database-in-php');
    }
    public function loginSysPhp()
    {
        return view('category.php_admin_panel.pages.login-system-in-php');
    }
    public function logoutSys()
    {
        return view('category.php_admin_panel.pages.logout-system');
    }
    public function createMultiLog()
    {
        return view('category.php_admin_panel.pages.create-multi-login-user-in-php');
    }
}
