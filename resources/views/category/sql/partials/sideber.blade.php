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
                <h2 class="px-3 py-3 mb-0 border-bottom text-primary f-16">SQL Tutorials</h2>
                <a href="{{ url('sql/sql-introduction') }}"
                    class="{{ Request::is('sql/sql-introduction') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL Introduction
                </a>
                <a href="{{ url('sql/sql-commands') }}"
                    class="{{ Request::is('sql/sql-commands') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL Commands
                </a>
                <a href="{{ url('sql/sql-syntax') }}"
                    class="{{ Request::is('sql/sql-syntax') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL SYNTAX
                </a>
                <a href="{{ url('sql/sql-select') }}"
                    class="{{ Request::is('sql/sql-select') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL SELECT STATEMENT
                </a>
                <a href="{{ url('sql/sql-distinct') }}"
                    class="{{ Request::is('sql/sql-distinct') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL SELECT DISTINCT
                </a>
                <a href="{{ url('sql/sql-where') }}"
                    class="{{ Request::is('sql/sql-where') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL Where
                </a>
                <a href="{{ url('sql/sql-insert') }}"
                    class="{{ Request::is('sql/sql-insert') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL INSERT
                </a>
                <a href="{{ url('sql/sql-update') }}"
                    class="{{ Request::is('sql/sql-update') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL UPDATE
                </a>
                <a href="{{ url('sql/sql-comment') }}"
                    class="{{ Request::is('sql/sql-comment') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL Comments
                </a>
                <a href="{{ url('sql/sql-delete') }}"
                    class="{{ Request::is('sql/sql-delete') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL DELETE
                </a>
                <a href="{{ url('sql/sql-order-by') }}"
                    class="{{ Request::is('sql/sql-order-by') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL ORDER BY
                </a>
                <a href="{{ url('sql/sql-operators') }}"
                    class="{{ Request::is('sql/sql-operators') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL Operators
                </a>
                <a href="{{ url('sql/sql-joins') }}"
                    class="{{ Request::is('sql/sql-joins') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL Joins
                </a>
                <a href="{{ url('sql/sql-inner-join') }}"
                    class="{{ Request::is('sql/sql-inner-join') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL INNER JOIN
                </a>
                <a href="{{ url('sql/sql-left-join') }}"
                    class="{{ Request::is('sql/sql-left-join') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL LEFT JOIN
                </a>
                <a href="{{ url('sql/sql-right-join') }}"
                    class="{{ Request::is('sql/sql-right-join') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL RIGHT JOIN
                </a>
                <a href="{{ url('sql/sql-full-outer-join') }}"
                    class="{{ Request::is('sql/sql-full-outer-join') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL FULL OUTER JOIN
                </a>
                <a href="{{ url('sql/sql-data-type') }}"
                    class="{{ Request::is('sql/sql-data-type') ? 'activeSideber' : '' }}" id="SideberH">
                    SQL Data Type
                </a>
            </div>
            </nav>
        </div>
    </div>

</div>
