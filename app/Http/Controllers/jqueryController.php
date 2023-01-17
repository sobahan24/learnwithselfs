<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jqueryController extends Controller
{
    public function index(){
        return view('category.jquery.index');
    }
    public function jqueryIntroduction(){
        return view('category.jquery.pages.jquery-introduction');
    }
    public function getValueFromInputBox(){
        return view('category.jquery.pages.get-value-from-input-box-using-jquery');
    }
    public function getValueFromInputTextField(){
        return view('category.jquery.pages.set-value-of-an-input-text-field-using-jquery');
    }
    public function inputBoxValidation(){
        return view('category.jquery.pages.form-input-box-validation-using-jquery');
    }
    public function addTextInTag(){
        return view('category.jquery.pages.add-text-in-p-tag-using-jquery');
    }
    public function getValueOfDivContent(){
        return view('category.jquery.pages.get-the-value-of-div-content-using-jquery');
    }
    public function addHtmlTagInDiv(){
        return view('category.jquery.pages.add-html-tag-in-div-using-jquery');
    }
    public function addRemoveInputField(){
        return view('category.jquery.pages.add-remove-input-fields-dynamically-using-jquery');
    }
    public function removeDivElement(){
        return view('category.jquery.pages.remove-the-div-or-element-using-jquery');
    }
    public function getTableRowData(){
        return view('category.jquery.pages.get-the-closest-table-row-data-using-jquery');
    }
    public function getValueMapFunction(){
        return view('category.jquery.pages.get-closest-value-table-row-using-map-function-in-jquery');
    }
    public function getValueFromClickedElement(){
        return view('category.jquery.pages.get-the-closest-input-value-from-clicked-element-using-jquery');
    }
    public function removeDivElementOnClick(){
        return view('category.jquery.pages.remove-closest-div-element-on-click-using-jquery');
    }
    public function reloadPageAutomatically(){
        return view('category.jquery.pages.refresh-reload-a-page-automatically-in-jquery');
    }
    public function reloadDivWithoutReloadingEntirePage(){
        return view('category.jquery.pages.reload-a-div-without-reloading-the-entire-page');
    }
    public function disableOrEnableFormSubmitButton(){
        return view('category.jquery.pages.disable-or-enable-form-submit-button-in-jquery');
    }
    public function disableSubmitButtonUntilFromIsFilled(){
        return view('category.jquery.pages.disable-submit-button-until-form-is-filled-in-jquery');
    }
    public function disableRightClick(){
        return view('category.jquery.pages.disable-right-click-using-jquery');
    }
}
