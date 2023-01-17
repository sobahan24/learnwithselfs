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
                    <h2 class="px-3 py-3 mb-0 border-bottom text-primary f-16">PHP Admin Panel Source</h2>
                    <a href="{{ url('/php-admin-panel/make-admin-panel-in-php') }}"
                        class="{{ Request::is('php-admin-panel/make-admin-panel-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                        Part - 1 : PHP Admin Panel
                    </a>
                    <a href="{{ url('/php-admin-panel/register-data-in-php') }}"
                        class="{{ Request::is('php-admin-panel/register-data-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                        Part 2 - Registration Insert Data in php
                    </a>
                    <a href="{{ url('/php-admin-panel/fetch-data-from-database-in-php') }}"
                        class="{{ Request::is('php-admin-panel/fetch-data-from-database-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                        Part 3 - Register Fetch Data
                    </a>
                    <a href="{{ url('/php-admin-panel/edit-data-in-php') }}"
                        class="{{ Request::is('php-admin-panel/edit-data-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                        Part 4 - Register EDIT &amp; UPDATE
                    </a>
                    <a href="{{ url('/php-admin-panel/delete-data-from-database') }}"
                        class="{{ Request::is('php-admin-panel/delete-data-from-database') ? 'activeSideber' : '' }}" id="SideberH">
                        Part 6 - Registertion Delete Data
                    </a>
                    <a href="{{ url('/php-admin-panel/count-total-record-from-database-in-php') }}"
                        class="{{ Request::is('php-admin-panel/count-total-record-from-database-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                        Part 7 - Registered Total User
                    </a>
                    <a href="{{ url('/php-admin-panel/login-system-in-php') }}"
                        class="{{ Request::is('php-admin-panel/login-system-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                        Part 8 (A &amp; B) - Login System with Session
                    </a>
                    <a href="{{ url('/php-admin-panel/logout-system') }}"
                        class="{{ Request::is('php-admin-panel/logout-system') ? 'activeSideber' : '' }}" id="SideberH">
                        Part 9 - Logout System in php
                    </a>
                    <a href="{{ url('/php-admin-panel/create-multi-login-user-in-php') }}"
                        class="{{ Request::is('php-admin-panel/create-multi-login-user-in-php') ? 'activeSideber' : '' }}" id="SideberH">
                        Part 10(A &amp; B) - Multi Login in php
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>