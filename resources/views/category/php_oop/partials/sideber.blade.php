<div class="col-md-2 px-0 left-sidebar-container">
    <div class="p-2 side-sticky">
        <button id="showSideNavbarCustom" class="d-lg-none btn btn-warning w-100" type="button">
            Menu <i class="fa fa-bars mx-2"></i>
        </button>
    </div>

    <div class="sidenavleft-adjust sticky-top" style="height: 80vh;">
        <div class="inside-sidebar">
            <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light bg-light">
                <div class="offcanvas-header">
                    <button id="navbarBtnCloseCustom" class="btn-close float-end m-2"></button>
                </div>

                <div class="funda-sidemenu">
                    <h2 class="px-3 py-3 mb-0 border-bottom text-primary f-16">PHP OOP Tutorials</h2>
                    <a href="{{ url('php-oop/connect-to-database-in-php-using-oop') }}" class="{{ Request::is('php-oop/connect-to-database-in-php-using-oop') ? 'activeSideber':'' }}" id="SideberH">
                        Connect to database in PHP OOP
                    </a>
                    <a href="{{ url('php-oop/insert-data-in-database-using-php-oop') }}" class="{{ Request::is('php-oop/insert-data-in-database-using-php-oop') ? 'activeSideber':'' }}" id="SideberH">
                        Insert Data using MySqli Object Oriented
                    </a>
                    <a href="{{ url('php-oop/insert-data-in-php-oop-using-mysqli-procedural') }}" class="{{ Request::is('php-oop/insert-data-in-php-oop-using-mysqli-procedural') ? 'activeSideber':'' }}" id="SideberH">
                        Insert Data using MySqli Procedural
                    </a>
                    <a href="{{ url('php-oop/fetch-data-from-database-using-oop-in-php') }}" class="{{ Request::is('php-oop/fetch-data-from-database-using-oop-in-php') ? 'activeSideber':'' }}" id="SideberH">
                        Fetch data from database using OOP
                    </a>
                    <a href="{{ url('php-oop/edit-and-update-data-using-oops-in-php-mysql') }}" class="{{ Request::is('php-oop/edit-and-update-data-using-oops-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        Edit and Update data using OOP
                    </a>
                    <a href="{{ url('php-oop/delete-data-from-database-using-oop-in-php-mysql') }}" class="{{ Request::is('php-oop/delete-data-from-database-using-oop-in-php-mysql') ? 'activeSideber':'' }}" id="SideberH">
                        Delete data from database using OOP
                    </a>
                </div>
            </nav>
        </div>
    </div>

</div>
