<?php

use App\Http\Controllers\gitController;
use App\Http\Controllers\jqueryController;
use App\Http\Controllers\laravel5Controller;
use App\Http\Controllers\laravel8Controller;
use App\Http\Controllers\laravelTipsController;
use App\Http\Controllers\phpAdminPanelController;
use App\Http\Controllers\PhpOopController;
use App\Http\Controllers\PhpPdoController;
use App\Http\Controllers\PhpProgramsController;
use App\Http\Controllers\PhpSolutionsController;
use App\Http\Controllers\PhpTutorialController;
use App\Http\Controllers\sqlController;
use Illuminate\Support\Facades\Route;

//root route start
Route::get('/', function () {
    return view('index');
});
//root route end

//PHP Tutorials route start
Route::get('/php', [PhpTutorialController::class, 'index']);
Route::get('/php/php-introduction', [PhpTutorialController::class, 'phpIntroduction']);
Route::get('/php/php-syntax', [PhpTutorialController::class, 'phpSyntax']);
Route::get('/php/php-comments', [PhpTutorialController::class, 'phpComments']);
Route::get('/php/php-variables', [PhpTutorialController::class, 'phpVariables']);
Route::get('/php/php-operators', [PhpTutorialController::class, 'phpOperators']);
Route::get('/php/php-if-else', [PhpTutorialController::class, 'phpIfElse']);
Route::get('/php/php-switch-case', [PhpTutorialController::class, 'phpSwitchCase']);
Route::get('/php/php-loops', [PhpTutorialController::class, 'phpLoops']);
Route::get('/php/php-foreach-loop', [PhpTutorialController::class, 'phpForeachLoop']);
Route::get('/php/php-while-loop', [PhpTutorialController::class, 'phpWhileLoop']);
Route::get('/php/php-do-while-loop', [PhpTutorialController::class, 'phpDoWhileLoop']);
Route::get('/php/php-for-loop', [PhpTutorialController::class, 'phpForLoop']);
Route::get('/php/show-session-message-in-php', [PhpTutorialController::class, 'sessionMessage']);
Route::get('/php/create-database-using-php-mysql', [PhpTutorialController::class, 'createDatabase']);
Route::get('/php/database-connection-in-php-mysql', [PhpTutorialController::class, 'DatabaseConnection']);
Route::get('/php/create-table-in-database-using-php', [PhpTutorialController::class, 'createTable']);
Route::get('/php/insert-data-into-database-in-php-mysql', [PhpTutorialController::class, 'insertData']);
Route::get('/php/fetch-data-from-database-in-php-mysql', [PhpTutorialController::class, 'fetchData']);
Route::get('/php/update-data-into-database-in-php-mysql', [PhpTutorialController::class, 'updateData']);
Route::get('/php/delete-data-from-database-in-php-mysql', [PhpTutorialController::class, 'deleteData']);
Route::get('/php/upload-an-image-in-php-mysql', [PhpTutorialController::class, 'uploadImage']);
Route::get('/php/registration-system-in-php-mysql', [PhpTutorialController::class, 'regSystem']);
Route::get('/php/login-system-with-session-in-php-mysql', [PhpTutorialController::class, 'loginSystem']);
Route::get('/php/import-excel-file-into-mysql-database-in-php', [PhpTutorialController::class, 'importExcelFile']);
Route::get('/php/export-mysql-data-to-excel-sheet-in-php', [PhpTutorialController::class, 'exportFile']);
Route::get('/php/create-dynamic-sql-insert-query-in-phpmysql', [PhpTutorialController::class, 'createDynamicSql']);
//PHP Tutorials route end


//PHP OPP route start
Route::get('/php-oop', [PhpOopController::class, 'index']);
Route::get('/php-oop/connect-to-database-in-php-using-oop', [PhpOopController::class, 'connectDB']);
Route::get('/php-oop/insert-data-in-database-using-php-oop', [PhpOopController::class, 'insertDataDB']);
Route::get('/php-oop/insert-data-in-php-oop-using-mysqli-procedural', [PhpOopController::class, 'insertDataPro']);
Route::get('/php-oop/fetch-data-from-database-using-oop-in-php', [PhpOopController::class, 'fetchData']);
Route::get('/php-oop/edit-and-update-data-using-oops-in-php-mysql', [PhpOopController::class, 'editData']);
Route::get('/php-oop/delete-data-from-database-using-oop-in-php-mysql', [PhpOopController::class, 'deleteData']);
//PHP OPP route end


//php-pdo route start
Route::get('/php-pdo', [PhpPdoController::class, 'index']);
Route::get('/php-pdo/connect-database-using-pdo-in-php', [PhpPdoController::class, 'connectDB']);
Route::get('/php-pdo/insert-data-into-database-using-pdo-in-php', [PhpPdoController::class, 'insertData']);
Route::get('/php-pdo/fetch-data-from-database-using-pdo-in-php', [PhpPdoController::class, 'fetchData']);
Route::get('/php-pdo/edit-update-data-into-database-using-pdo-in-php', [PhpPdoController::class, 'updateData']);
Route::get('/php-pdo/delete-data-from-database-using-pdo-in-php', [PhpPdoController::class, 'deleteData']);
Route::get('/php-pdo/insert-data-using-bindparam-function-in-php-pdo', [PhpPdoController::class, 'insertDataBind']);
Route::get('/php-pdo/edit-update-data-using-bindparam-in-php-pdo', [PhpPdoController::class, 'updateDataBind']);
Route::get('/php-pdo/delete-data-using-bindparam-in-php-pdo', [PhpPdoController::class, 'deleteDataBind']);
//php-pdo route end


//php-solutions route start
Route::get('/php-solutions', [PhpSolutionsController::class, 'index']);
Route::get('/php-solutions/php-crud-using-bootstrap-model-in-php', [PhpSolutionsController::class, 'bootstrapCrud']);
Route::get('/php-solutions/php-crud-fetch-data-in-php-mysql', [PhpSolutionsController::class, 'bootstrapCrudFetch']);
Route::get('/php-solutions/php-crud-insert-data-into-database-in-php-mysql', [PhpSolutionsController::class, 'bootstrapCrudInsert']);
Route::get('/php-solutions/php-crud-edit-and-update-data-into-database-in-php-mysql', [PhpSolutionsController::class, 'bootstrapCrudUpdate']);
Route::get('/php-solutions/php-crud-delete-data-from-database-in-php-mysql', [PhpSolutionsController::class, 'bootstrapCrudDelete']);
Route::get('/php-solutions/fetch-data-from-db-using-jquery-ajax-php', [PhpSolutionsController::class, 'ajaxFetch']);
Route::get('/php-solutions/store-data-without-page-reload-using-jquery-ajax-in-php', [PhpSolutionsController::class, 'ajaxStoreData']);
Route::get('/php-solutions/fetch-single-data-in-pop-up-dialog-using-jquery-ajax-php', [PhpSolutionsController::class, 'ajaxStoreDataReload']);
Route::get('/php-solutions/fetch-data-in-textbox-pop-up-dialog-using-jquery-ajax-php', [PhpSolutionsController::class, 'ajaxStoreDataTextBox']);
Route::get('/php-solutions/set-navbar-item-active-in-php', [PhpSolutionsController::class, 'setNav']);
//php-solutions route end


//php-programs route start
Route::get('/php-programs', [PhpProgramsController::class, 'index']);
Route::get('/php-programs/find-leap-year-or-not-in-php', [PhpProgramsController::class, 'findLeapYear']);
Route::get('/php-programs/find-odd-or-even-in-php', [PhpProgramsController::class, 'findOddEvenNum']);
Route::get('/php-programs/make-sum-of-n-numbers', [PhpProgramsController::class, 'sumOfNumber']);
Route::get('/php-programs/print-fibonacci-numbers', [PhpProgramsController::class, 'fibonacciNumber']);
Route::get('/php-programs/compare-two-strings', [PhpProgramsController::class, 'compareStrings']);
Route::get('/php-programs/convert-string-into-lowercase-and-uppercase-in-php', [PhpProgramsController::class, 'convertStrings']);
Route::get('/php-programs/find-position-of-a-given-character', [PhpProgramsController::class, 'findPosition']);
Route::get('/php-programs/replace-one-string-using-another-string-in-php', [PhpProgramsController::class, 'replaceString']);
Route::get('/php-programs/reverse-an-array-in-php', [PhpProgramsController::class, 'reversArr']);
Route::get('/php-programs/find-out-max-and-min-number-in-array-php', [PhpProgramsController::class, 'maxMinNum']);
Route::get('/php-programs/create-txt-file-and-write-content-in-it', [PhpProgramsController::class, 'createTxtFile']);
Route::get('/php-programs/develop-email-registration-form', [PhpProgramsController::class, 'emailReg']);
Route::get('/php-programs/count-number-of-visits-using-cookies-in-php', [PhpProgramsController::class, 'countNumber']);
Route::get('/php-programs/fetch-data-from-db-and-display-in-html-table-in-php', [PhpProgramsController::class, 'fetchData']);
Route::get('/php-programs/display-greeting-acc-to-current-time', [PhpProgramsController::class, 'displayGreeting']);
Route::get('/php-programs/formatting-date-functions-in-php', [PhpProgramsController::class, 'formatingData']);
Route::get('/php-programs/login-system-in-php', [PhpProgramsController::class, 'loginSys']);
//php-programs route end

//PHP Admin Panel route start
Route::get('/php-admin-panel', [phpAdminPanelController::class, 'index']);
Route::get('/php-admin-panel/make-admin-panel-in-php', [phpAdminPanelController::class, 'makeAdminPanel']);
Route::get('/php-admin-panel/register-data-in-php', [phpAdminPanelController::class, 'registerData']);
Route::get('/php-admin-panel/fetch-data-from-database-in-php', [phpAdminPanelController::class, 'fetchData']);
Route::get('/php-admin-panel/edit-data-in-php', [phpAdminPanelController::class, 'editData']);
Route::get('/php-admin-panel/delete-data-from-database', [phpAdminPanelController::class, 'deleteData']);
Route::get('/php-admin-panel/count-total-record-from-database-in-php', [phpAdminPanelController::class, 'countTotal']);
Route::get('/php-admin-panel/login-system-in-php', [phpAdminPanelController::class, 'loginSysPhp']);
Route::get('/php-admin-panel/logout-system', [phpAdminPanelController::class, 'logoutSys']);
Route::get('/php-admin-panel/create-multi-login-user-in-php', [phpAdminPanelController::class, 'createMultiLog']);
//PHP Admin Panel route end


//php-laravel-5-8 route start
Route::get('/laravel-5-8', [laravel5Controller::class, 'index']);
Route::get('/laravel-5-8/install-laravel-package-5-8', [laravel5Controller::class, 'installLaravelPkg']);
Route::get('/laravel-5-8/connect-database-in-larave-5-8', [laravel5Controller::class, 'connectDatabase']);
Route::get('/laravel-5-8/login-and-register-in-laravel-5-8-using-auth-command', [laravel5Controller::class, 'loginRegAuth']);
Route::get('/laravel-5-8/user-and-admin-login-system-in-laravel', [laravel5Controller::class, 'userAdminLoginSystem']);
Route::get('/laravel-5-8/ban-and-unban-user-for-login-in-laravel', [laravel5Controller::class, 'banUnban']);
Route::get('/laravel-5-8/generate-sitemap-automatically-in-laravel', [laravel5Controller::class, 'siteMapGen']);
Route::get('/laravel-5-8/create-database-seeder-in-laravel', [laravel5Controller::class, 'createSeeder']);
Route::get('/laravel-5-8/disable-register-route-in-laravel', [laravel5Controller::class, 'disableRoute']);
Route::get('/laravel-5-8/create-database-error-page-in-laravel', [laravel5Controller::class, 'dbErrorPage']);
//php-laravel-5-8 route end


//laravel 8 route start
Route::get('/laravel-8', [laravel8Controller::class, 'index']);
Route::get('/laravel-8/install-laravel-8', [laravel8Controller::class, 'insLara8']);
Route::get('/laravel-8/make-model-and-migration-in-laravel', [laravel8Controller::class, 'modelMigration']);
Route::get('/laravel-8/create-a-controller-and-resource-controller-in-laravel', [laravel8Controller::class, 'controllerResCon']);
Route::get('/laravel-8/insert-data-in-laravel-8', [laravel8Controller::class, 'insertData']);
Route::get('/laravel-8/fetch-data-from-database-in-laravel', [laravel8Controller::class, 'fetchData']);
Route::get('/laravel-8/edit-update-data-in-laravel', [laravel8Controller::class, 'updateData']);
Route::get('/laravel-8/delete-data-in-laravel-with-example', [laravel8Controller::class, 'deleteData']);
Route::get('/laravel-8/login-registration-system-tutorial', [laravel8Controller::class, 'loginSystem']);
Route::get('/laravel-8/get-data-from-database-by-id-in-laravel', [laravel8Controller::class, 'getDataById']);
Route::get('/laravel-8/upload-image-in-laravel-8', [laravel8Controller::class, 'uploadImage']);
Route::get('/laravel-8/laravel-pagination', [laravel8Controller::class, 'laravelPagination']);
Route::get('/laravel-8/form-request-validation', [laravel8Controller::class, 'formRequestValidation']);
Route::get('/laravel-8/set-custom-messages-in-form-request-validation', [laravel8Controller::class, 'customMessageFormRequestValidation']);
Route::get('/laravel-8/show-success-message-in-laravel-8', [laravel8Controller::class, 'successMessage']);
Route::get('/laravel-8/show-session-flash-message-in-laravel-8', [laravel8Controller::class, 'flashMessage']);
Route::get('/laravel-8/generate-slug-in-laravel-8', [laravel8Controller::class, 'genSlug']);
Route::get('/laravel-8/get-find-data-by-multiple-ids-in-laravel', [laravel8Controller::class, 'getDataMultiId']);
Route::get('/laravel-8/login-with-email-or-phone-number-in-laravel', [laravel8Controller::class, 'loginWithPhoneOrEmail']);
//laravel 8 route end


//laravel Tips route start
Route::get('/laravel-tips', [laravelTipsController::class, 'index']);
Route::get('/laravel-tips/get-data-from-database-by-id', [laravelTipsController::class, 'getDataId']);
Route::get('/laravel-tips/get-data-with-multiple-ids', [laravelTipsController::class, 'getDataMultiId']);
Route::get('/laravel-tips/get-array-of-ids-from-collection', [laravelTipsController::class, 'getArr']);
Route::get('/laravel-tips/get-or-select-specific-columns-in-laravel-eloquent', [laravelTipsController::class, 'getColm']);
Route::get('/laravel-tips/concat-two-columns-using-eloquent-model', [laravelTipsController::class, 'concatColm']);
//laravel Tips route ends

//git route start
Route::get('/git', [gitController::class, 'index']);
Route::get('/git/download-or-install-git', [gitController::class, 'installGit']);
Route::get('/git/get-the-current-branch-name-in-git', [gitController::class, 'getBranch']);
Route::get('/git/create-git-repository-in-local-and-connect-to-github-gitlab-project', [gitController::class, 'repo']);
Route::get('/git/create-a-branch-in-git-repository-using-command-line', [gitController::class, 'creBranch']);
Route::get('/git/remove-or-delete-branch-from-git-repository', [gitController::class, 'removeBranch']);
Route::get('/git/clone-a-git-repository-using-command-line', [gitController::class, 'cloneRepo']);
Route::get('/git/check-current-repository-name-using-command-line', [gitController::class, 'checkRepo']);
Route::get('/git/get-or-list-all-remote-branches-names-present-in-git-repository-using-command-line', [gitController::class, 'getListRepo']);
Route::get('/git/change-remote-git-repository-using-command-line', [gitController::class, 'changeRepo']);
Route::get('/git/add-ssh-key-in-gitlab', [gitController::class, 'addSsh']);
Route::get('/git/rename-the-local-branch-in-git', [gitController::class, 'renameGit']);
Route::get('/git/move-to-previous-working-git-branch', [gitController::class, 'moveBranch']);
Route::get('/git/get-a-list-of-git-branches-ordered-by-most-recent-commit', [gitController::class, 'getBranchList']);
Route::get('/git/check-or-set-username-and-email-address-in-git-using-cmd', [gitController::class, 'ckUser']);
//git route end

//sql route start
Route::get('/sql', [sqlController::class, 'index']);
Route::get('/sql/sql-introduction', [sqlController::class, 'intro']);
Route::get('/sql/sql-commands', [sqlController::class, 'commands']);
Route::get('/sql/sql-syntax', [sqlController::class, 'syntax']);
Route::get('/sql/sql-select', [sqlController::class, 'select']);
Route::get('/sql/sql-distinct', [sqlController::class, 'distinct']);
Route::get('/sql/sql-where', [sqlController::class, 'where']);
Route::get('/sql/sql-insert', [sqlController::class, 'insert']);
Route::get('/sql/sql-update', [sqlController::class, 'update']);
Route::get('/sql/sql-comment', [sqlController::class, 'comment']);
Route::get('/sql/sql-delete', [sqlController::class, 'delete']);
Route::get('/sql/sql-order-by', [sqlController::class, 'order']);
Route::get('/sql/sql-operators', [sqlController::class, 'operators']);
Route::get('/sql/sql-joins', [sqlController::class, 'joins']);
Route::get('/sql/sql-inner-join', [sqlController::class, 'innerJoin']);
Route::get('/sql/sql-left-join', [sqlController::class, 'leftJoin']);
Route::get('/sql/sql-right-join', [sqlController::class, 'rightJoin']);
Route::get('/sql/sql-full-outer-join', [sqlController::class, 'fullOuterJoin']);
Route::get('/sql/sql-data-type', [sqlController::class, 'dataType']);
//sql route end

//Jquery route start
Route::get('/jquery', [jqueryController::class, 'index']);
Route::get('/jquery/jquery-introduction', [jqueryController::class, 'jqueryIntroduction']);
Route::get('/jquery/get-value-from-input-box-using-jquery', [jqueryController::class, 'getValueFromInputBox']);
Route::get('/jquery/set-value-of-an-input-text-field-using-jquery', [jqueryController::class, 'getValueFromInputTextField']);
Route::get('/jquery/form-input-box-validation-using-jquery', [jqueryController::class, 'inputBoxValidation']);
Route::get('/jquery/add-text-in-p-tag-using-jquery', [jqueryController::class, 'addTextInTag']);
Route::get('/jquery/get-the-value-of-div-content-using-jquery', [jqueryController::class, 'getValueOfDivContent']);
Route::get('/jquery/add-html-tag-in-div-using-jquery', [jqueryController::class, 'addHtmlTagInDiv']);
Route::get('/jquery/add-remove-input-fields-dynamically-using-jquery', [jqueryController::class, 'addRemoveInputField']);
Route::get('/jquery/remove-the-div-or-element-using-jquery', [jqueryController::class, 'removeDivElement']);
Route::get('/jquery/get-the-closest-table-row-data-using-jquery', [jqueryController::class, 'getTableRowData']);
Route::get('/jquery/get-closest-value-table-row-using-map-function-in-jquery', [jqueryController::class, 'getValueMapFunction']);
Route::get('/jquery/get-the-closest-input-value-from-clicked-element-using-jquery', [jqueryController::class, 'getValueFromClickedElement']);
Route::get('/jquery/remove-closest-div-element-on-click-using-jquery', [jqueryController::class, 'removeDivElementOnClick']);
Route::get('/jquery/refresh-reload-a-page-automatically-in-jquery', [jqueryController::class, 'reloadPageAutomatically']);
Route::get('/jquery/reload-a-div-without-reloading-the-entire-page', [jqueryController::class, 'reloadDivWithoutReloadingEntirePage']);
Route::get('/jquery/disable-or-enable-form-submit-button-in-jquery', [jqueryController::class, 'disableOrEnableFormSubmitButton']);
Route::get('/jquery/disable-submit-button-until-form-is-filled-in-jquery', [jqueryController::class, 'disableSubmitButtonUntilFromIsFilled']);
Route::get('/jquery/disable-right-click-using-jquery', [jqueryController::class, 'disableRightClick']);
//Jquery route end
