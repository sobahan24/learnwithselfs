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
                    <h2 class="px-3 py-3 mb-0 border-bottom text-primary f-16">PHP PDO Tutorial</h2>
                                    <a href="{{ url('php-pdo/connect-database-using-pdo-in-php') }}"
                         class="{{ Request::is('php-pdo/connect-database-using-pdo-in-php') ? 'activeSideber':'' }}" id="SideberH">
                        PHP PDO Connect Database
                    </a>
                                    <a href="{{ url('php-pdo/insert-data-into-database-using-pdo-in-php') }}"
                         class="{{ Request::is('php-pdo/insert-data-into-database-using-pdo-in-php') ? 'activeSideber':'' }}" id="SideberH">
                        PHP PDO Insert data
                    </a>
                                    <a href="{{ url('php-pdo/fetch-data-from-database-using-pdo-in-php') }}"
                         class="{{ Request::is('php-pdo/fetch-data-from-database-using-pdo-in-php') ? 'activeSideber':'' }}" id="SideberH">
                        PHP PDO Fetch data
                    </a>
                                    <a href="{{ url('php-pdo/edit-update-data-into-database-using-pdo-in-php') }}"
                         class="{{ Request::is('php-pdo/edit-update-data-into-database-using-pdo-in-php') ? 'activeSideber':'' }}" id="SideberH">
                        PHP PDO Edit &amp; Update data
                    </a>
                                    <a href="{{ url('php-pdo/delete-data-from-database-using-pdo-in-php') }}"
                         class="{{ Request::is('php-pdo/delete-data-from-database-using-pdo-in-php') ? 'activeSideber':'' }}" id="SideberH">
                        PHP PDO Delete data
                    </a>
                                    <a href="{{ url('php-pdo/insert-data-using-bindparam-function-in-php-pdo') }}"
                         class="{{ Request::is('php-pdo/insert-data-using-bindparam-function-in-php-pdo') ? 'activeSideber':'' }}" id="SideberH">
                        PHP PDO Insert data using bindParam()
                    </a>
                                    <a href="{{ url('php-pdo/edit-update-data-using-bindparam-in-php-pdo') }}"
                         class="{{ Request::is('php-pdo/edit-update-data-using-bindparam-in-php-pdo') ? 'activeSideber':'' }}" id="SideberH">
                        PHP PDO Edit Update data using bindParam()
                    </a>
                                    <a href="{{ url('php-pdo/delete-data-using-bindparam-in-php-pdo') }}"
                         class="{{ Request::is('php-pdo/delete-data-using-bindparam-in-php-pdo') ? 'activeSideber':'' }}" id="SideberH">
                        PHP PDO Delete data using bindParam()
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>