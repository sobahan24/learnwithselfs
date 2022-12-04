<div class="col-md-2 px-0 left-sidebar-container">
    <div class="p-2 side-sticky">
        <button id="showSideNavbarCustom" class="d-lg-none btn btn-warning w-100" type="button"> Menu <i class="fa fa-bars mx-2"></i></button>
    </div>

    <div class="sidenavleft-adjust sticky-top">
        <div class="inside-sidebar">
            <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light bg-light">
                <div class="offcanvas-header">
                    <button id="navbarBtnCloseCustom" class="btn-close float-end m-2"></button>
                </div>
                <div class="funda-sidemenu">
                    <h2 class="px-3 py-3 mb-0 border-bottom text-primary f-16">PHP Tutorials</h2>
                    <a href="{{ url('/php/php-introduction') }}" class="{{ Request::is('php/php-introduction') ? 'activeSideber':'' }}" id="SideberH" >
                        PHP Introduction
                    </a>
                    <a href="{{ url('/php/php-syntax') }}" class="{{ Request::is('php/php-syntax') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Syntax
                    </a>
                    <a href="{{ url('/php/php-comments') }}" class="{{ Request::is('php/php-comments') ? 'activeSideber':'' }}" id="SideberH">
                        PHP comments
                    </a>
                    <a href="{{ url('/php/php-variables') }}" class="{{ Request::is('php/php-variables') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Variables
                    </a>
                    <a href="{{ url('/php/php-operators') }}" class="{{ Request::is('php/php-operators') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Operators
                    </a>
                    <a href="{{ url('/php/php-if-else') }}" class="{{ Request::is('php/php-if-else') ? 'activeSideber':'' }}" id="SideberH">
                        PHP IF-Elseif-Else
                    </a>
                    <a href="{{ url('/php/php-switch-case') }}" class="{{ Request::is('php/php-switch-case') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Switch
                    </a>
                    <a href="{{ url('/php/php-loops') }}" class="{{ Request::is('php/php-loops') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Loops
                    </a>
                    <a href="{{ url('/php/php-foreach-loop') }}" class="{{ Request::is('php/php-foreach-loop') ? 'activeSideber':'' }}" id="SideberH">
                        PHP foreach-loop
                    </a>
                    <a href="{{ url('/php/php-while-loop') }}" class="{{ Request::is('php/php-while-loop') ? 'activeSideber':'' }}" id="SideberH">
                        PHP while-loop
                    </a>
                    <a href="{{ url('/php/php-do-while-loop') }}" class="{{ Request::is('php/php-do-while-loop') ? 'activeSideber':'' }}" id="SideberH">
                        PHP do..while loop
                    </a>
                    <a href="{{ url('/php/php-for-loop') }}" class="{{ Request::is('php/php-for-loop') ? 'activeSideber':'' }}" id="SideberH">
                        PHP for loop
                    </a>
                    <a href="{{ url('/php/show-session-message-in-php') }}" class="{{ Request::is('php/show-session-message-in-php') ? 'activeSideber':'' }}" id="SideberH">
                        Success Message
                    </a>
                    <a href="{{ url('/php/create-database-using-php-mysql') }}" class="{{ Request::is('php/create-database-using-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Create Database
                    </a>
                    <a href="{{ url('/php/database-connection-in-php-mysql') }}" class="{{ Request::is('php/database-connection-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Database Connection
                    </a>
                    <a href="{{ url('/php/create-table-in-database-using-php') }}" class="{{ Request::is('php/create-table-in-database-using-php') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Create Table in MySQL
                    </a>
                    <a href="{{ url('/php/insert-data-into-database-in-php-mysql') }}" class="{{ Request::is('php/insert-data-into-database-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Insert Data
                    </a>
                    <a href="{{ url('/php/fetch-data-from-database-in-php-mysql') }}" class="{{ Request::is('php/fetch-data-from-database-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Retrieve Data
                    </a>
                    <a href="{{ url('/php/update-data-into-database-in-php-mysql') }}" class="{{ Request::is('php/update-data-into-database-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Edit &amp; Update Data
                    </a>
                    <a href="{{ url('/php/delete-data-from-database-in-php-mysql') }}" class="{{ Request::is('php/delete-data-from-database-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Delete Data
                    </a>
                    <a href="{{ url('/php/upload-an-image-in-php-mysql') }}" class="{{ Request::is('php/upload-an-image-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Upload image
                    </a>
                    <a href="{{ url('/php/registration-system-in-php-mysql') }}" class="{{ Request::is('php/registration-system-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Registration System / Sign Up Form
                    </a>
                    <a href="{{ url('/php/login-system-with-session-in-php-mysql') }}" class="{{ Request::is('php/login-system-with-session-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Login System with Session
                    </a>
                    <a href="{{ url('/php/import-excel-file-into-mysql-database-in-php') }}" class="{{ Request::is('php/import-excel-file-into-mysql-database-in-php') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Import excel file into mysql database
                    </a>
                    <a href="{{ url('/php/export-mysql-data-to-excel-sheet-in-php') }}" class="{{ Request::is('php/export-mysql-data-to-excel-sheet-in-php') ? 'activeSideber':'' }}" id="SideberH">
                        PHP Export MySQL data to Excel
                    </a>
                    <a href="{{ url('/php/create-dynamic-sql-insert-query-in-phpmysql') }}" class="{{ Request::is('php/create-dynamic-sql-insert-query-in-phpmysql') ? 'activeSideber':'' }}" id="SideberH">
                        PHP MySQL Dynamic Insert Query
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
