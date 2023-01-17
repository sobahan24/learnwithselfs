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
                    <h2 class="px-3 py-3 mb-0 border-bottom text-primary f-16">Laravel 5.8 Solution</h2>
                    <a href="{{ url('/laravel-5-8/install-laravel-package-5-8') }}"
                        class="{{ Request::is('laravel-5-8/install-laravel-package-5-8') ? 'activeSideber' : '' }}" id="SideberH">
                        Installing Laravel
                    </a>
                    <a href="{{ url('/laravel-5-8/connect-database-in-larave-5-8') }}"
                        class="{{ Request::is('laravel-5-8/connect-database-in-larave-5-8') ? 'activeSideber' : '' }}" id="SideberH">
                        Database Connection
                    </a>
                    <a href="{{ url('/laravel-5-8/login-and-register-in-laravel-5-8-using-auth-command') }}"
                        class="{{ Request::is('laravel-5-8/login-and-register-in-laravel-5-8-using-auth-command') ? 'activeSideber' : '' }}" id="SideberH">
                        Login and Register using Auth Command
                    </a>
                    <a href="{{ url('/laravel-5-8/user-and-admin-login-system-in-laravel') }}"
                        class="{{ Request::is('laravel-5-8/user-and-admin-login-system-in-laravel') ? 'activeSideber' : '' }}" id="SideberH">
                        Multiple Login using auth (User + Admin)
                    </a>
                    <a href="{{ url('/laravel-5-8/ban-and-unban-user-for-login-in-laravel') }}"
                        class="{{ Request::is('laravel-5-8/ban-and-unban-user-for-login-in-laravel') ? 'activeSideber' : '' }}" id="SideberH">
                        How to Ban or Unban User for login in laravel
                    </a>
                    <a href="{{ url('/laravel-5-8/generate-sitemap-automatically-in-laravel') }}"
                        class="{{ Request::is('laravel-5-8/generate-sitemap-automatically-in-laravel') ? 'activeSideber' : '' }}" id="SideberH">
                        Automatically Generate Sitemap in Laravel
                    </a>
                    <a href="{{ url('/laravel-5-8/create-database-seeder-in-laravel') }}"
                        class="{{ Request::is('laravel-5-8/create-database-seeder-in-laravel') ? 'activeSideber' : '' }}" id="SideberH">
                        How to create Database Seeder in Laravel
                    </a>
                    <a href="{{ url('/laravel-5-8/disable-register-route-in-laravel') }}"
                        class="{{ Request::is('laravel-5-8/disable-register-route-in-laravel') ? 'activeSideber' : '' }}" id="SideberH">
                        Disable register route &amp; other Auth route in laravel 5.7 +
                    </a>
                    <a href="{{ url('/laravel-5-8/create-database-error-page-in-laravel') }}"
                        class="{{ Request::is('laravel-5-8/create-database-error-page-in-laravel') ? 'activeSideber' : '' }}" id="SideberH">
                        How to create a database error page in laravel
                    </a>
                </div>
            </nav>
        </div>
    </div>

</div>
