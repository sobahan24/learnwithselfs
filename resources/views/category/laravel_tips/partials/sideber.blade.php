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
                <h2 class="px-3 py-3 mb-0 border-bottom text-primary f-16">Laravel Tips</h2>
                    <a href="{{ ('/laravel-tips/get-data-from-database-by-id') }}"
                    class="{{ Request::is('laravel-tips/get-data-from-database-by-id') ? 'activeSideber' : '' }}" id="SideberH">
                    Get data by id
                </a>
                    <a href="{{ url('/laravel-tips/get-data-with-multiple-ids') }}"
                    class="{{ Request::is('laravel-tips/get-data-with-multiple-ids') ? 'activeSideber' : '' }}" id="SideberH">
                    Get data with multiple ids
                </a>
                    <a href="{{ url('/laravel-tips/get-array-of-ids-from-collection') }}"
                    class="{{ Request::is('laravel-tips/get-array-of-ids-from-collection') ? 'activeSideber' : '' }}" id="SideberH">
                    Get Array of IDs from Eloquent
                </a>
                    <a href="{{ url('/laravel-tips/get-or-select-specific-columns-in-laravel-eloquent') }}"
                    class="{{ Request::is('laravel-tips/get-or-select-specific-columns-in-laravel-eloquent') ? 'activeSideber' : '' }}" id="SideberH">
                    Get or Select specific columns in eloquent
                </a>
                    <a href="{{ url('/laravel-tips/concat-two-columns-using-eloquent-model') }}"
                    class="{{ Request::is('laravel-tips/concat-two-columns-using-eloquent-model') ? 'activeSideber' : '' }}" id="SideberH">
                    Concat two columns using eloquent model
                </a>
            </div>
        </nav>
    </div>
    </div>

</div>
