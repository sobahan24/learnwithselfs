
<div class="col-md-2 px-0 left-sidebar-container">
    <div class="p-2 side-sticky">
        <button id="showSideNavbarCustom" class="d-lg-none btn btn-warning w-100" type="button">
            Menu <i class="fa fa-bars mx-2"></i>
        </button>
    </div>
    <div class="sidenavleft-adjust sticky-top">
    <div class="inside-sidebar">
        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light bg-light">
            <div class="offcanvas-header">
                <button id="navbarBtnCloseCustom" class="btn-close float-end m-2"></button>
            </div>
            
            <div class="funda-sidemenu">
                <h2 class="px-3 py-3 mb-0 border-bottom text-primary f-16">PHP Solutions</h2>
                                <a href="{{ url('/php-solutions/php-crud-using-bootstrap-model-in-php') }}"
                    class="{{ Request::is('php-solutions/php-crud-using-bootstrap-model-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                    PHP CRUD using Bootstrap Modal with DataTable
                </a>
                                <a href="{{ url('/php-solutions/php-crud-fetch-data-in-php-mysql') }}"
                    class="{{ Request::is('php-solutions/php-crud-fetch-data-in-php-mysql') ? 'activeSideber' : '' }}" id="SideberH">
                    PHP CRUD : Display data in PHP MySQL
                </a>
                                <a href="{{ url('/php-solutions/php-crud-insert-data-into-database-in-php-mysql') }}"
                    class="{{ Request::is('php-solutions/php-crud-insert-data-into-database-in-php-mysql') ? 'activeSideber' : '' }}" id="SideberH">
                    PHP CRUD : Insert Data in PHP MySQL
                </a>
                                <a href="{{ url('/php-solutions/php-crud-edit-and-update-data-into-database-in-php-mysql') }}"
                    class="{{ Request::is('php-solutions/php-crud-edit-and-update-data-into-database-in-php-mysql') ? 'activeSideber' : '' }}" id="SideberH">
                    PHP CRUD : Edit and Update Data in PHP MySQL
                </a>
                                <a href="{{ url('/php-solutions/php-crud-delete-data-from-database-in-php-mysql') }}"
                    class="{{ Request::is('php-solutions/php-crud-delete-data-from-database-in-php-mysql') ? 'activeSideber' : '' }}" id="SideberH">
                    PHP CRUD : Delete Data in PHP
                </a>
                                <a href="{{ url('/php-solutions/fetch-data-from-db-using-jquery-ajax-php') }}"
                    class="{{ Request::is('php-solutions/fetch-data-from-db-using-jquery-ajax-php') ? 'activeSideber' : '' }}" id="SideberH">
                    PHP Ajax - Fetch data using jquery in php
                </a>
                                <a href="{{ url('/php-solutions/store-data-without-page-reload-using-jquery-ajax-in-php') }}"
                    class="{{ Request::is('php-solutions/store-data-without-page-reload-using-jquery-ajax-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                    PHP Ajax - Store Data without reload using jquery php
                </a>
                                <a href="{{ url('/php-solutions/fetch-single-data-in-pop-up-dialog-using-jquery-ajax-php') }}"
                    class="{{ Request::is('php-solutions/fetch-single-data-in-pop-up-dialog-using-jquery-ajax-php') ? 'activeSideber' : '' }}" id="SideberH">
                    PHP Ajax - How to fetch single data POP Up Box jquery php
                </a>
                                <a href="{{ url('/php-solutions/fetch-data-in-textbox-pop-up-dialog-using-jquery-ajax-php') }}"
                    class="{{ Request::is('php-solutions/fetch-data-in-textbox-pop-up-dialog-using-jquery-ajax-php') ? 'activeSideber' : '' }}" id="SideberH">
                    PHP Ajax - Fetch data in textbox in pop up using ajax php
                </a>
                                <a href="{{ url('/php-solutions/set-navbar-item-active-in-php') }}"
                    class="{{ Request::is('php-solutions/set-navbar-item-active-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                    Set Navbar Item Active
                </a>
            </div>
        </nav>
    </div>
</div>
</div>