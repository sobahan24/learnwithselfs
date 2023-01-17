<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravel5Controller extends Controller
{
    public function index(){
        return view('category.laravel5.index');
    }
    public function installLaravelPkg(){
        return view('category.laravel5.pages.install-laravel-package-5-8');
    }
    public function connectDatabase(){
        return view('category.laravel5.pages.connect-database-in-larave-5-8');
    }
    public function loginRegAuth(){
        return view('category.laravel5.pages.login-and-register-in-laravel-5-8-using-auth-command');
    }
    public function userAdminLoginSystem(){
        return view('category.laravel5.pages.user-and-admin-login-system-in-laravel');
    }
    public function banUnban(){
        return view('category.laravel5.pages.ban-and-unban-user-for-login-in-laravel');
    }
    public function siteMapGen(){
        return view('category.laravel5.pages.generate-sitemap-automatically-in-laravel');
    }
    public function createSeeder(){
        return view('category.laravel5.pages.create-database-seeder-in-laravel');
    }
    public function disableRoute(){
        return view('category.laravel5.pages.disable-register-route-in-laravel');
    }
    public function dbErrorPage(){
        return view('category.laravel5.pages.create-database-error-page-in-laravel');
    }
}
