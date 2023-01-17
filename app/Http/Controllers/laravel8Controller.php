<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravel8Controller extends Controller
{
    public function index(){
        return view('category.laravel8.index');
    }
    public function insLara8(){
        return view('category.laravel8.pages.install-laravel-8');
    }
    public function modelMigration(){
        return view('category.laravel8.pages.make-model-and-migration-in-laravel');
    }
    public function controllerResCon(){
        return view('category.laravel8.pages.create-a-controller-and-resource-controller-in-laravel');
    }
    public function insertData(){
        return view('category.laravel8.pages.insert-data-in-laravel-8');
    }
    public function fetchData(){
        return view('category.laravel8.pages.fetch-data-from-database-in-laravel');
    }
    public function updateData(){
        return view('category.laravel8.pages.edit-update-data-in-laravel');
    }
    public function deleteData(){
        return view('category.laravel8.pages.delete-data-in-laravel-with-example');
    }
    public function loginSystem(){
        return view('category.laravel8.pages.login-registration-system-tutorial');
    }
    public function getDataById(){
        return view('category.laravel8.pages.get-data-from-database-by-id-in-laravel');
    }
    public function uploadImage(){
        return view('category.laravel8.pages.upload-image-in-laravel-8');
    }
    public function laravelPagination(){
        return view('category.laravel8.pages.laravel-pagination');
    }
    public function formRequestValidation(){
        return view('category.laravel8.pages.form-request-validation');
    }
    public function customMessageFormRequestValidation(){
        return view('category.laravel8.pages.set-custom-messages-in-form-request-validation');
    }
    public function successMessage(){
        return view('category.laravel8.pages.show-success-message-in-laravel-8');
    }
    public function flashMessage(){
        return view('category.laravel8.pages.show-session-flash-message-in-laravel-8');
    }
    public function genSlug(){
        return view('category.laravel8.pages.generate-slug-in-laravel-8');
    }
    public function getDataMultiId(){
        return view('category.laravel8.pages.get-find-data-by-multiple-ids-in-laravel');
    }
    public function loginWithPhoneOrEmail(){
        return view('category.laravel8.pages.login-with-email-or-phone-number-in-laravel');
    }
}
