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
                    <h2 class="px-3 py-3 mb-0 border-bottom text-primary f-16">Git Tutorials</h2>
                    <a href="{{ url('/git/download-or-install-git') }}"
                        class="{{ Request::is('git/download-or-install-git') ? 'activeSideber' : '' }}" id="SideberH">
                        How to download or install Git
                    </a>
                    <a href="{{ url('/git/get-the-current-branch-name-in-git') }}"
                        class="{{ Request::is('git/get-the-current-branch-name-in-git') ? 'activeSideber' : '' }}" id="SideberH">
                        How to get the current branch name in Git ?
                    </a>
                    <a href="{{ url('/git/create-git-repository-in-local-and-connect-to-github-gitlab-project') }}"
                        class="{{ Request::is('git/create-git-repository-in-local-and-connect-to-github-gitlab-project') ? 'activeSideber' : '' }}" id="SideberH">
                        How to create git repository in local and connect to Git project
                    </a>
                    <a href="{{ url('/git/create-a-branch-in-git-repository-using-command-line') }}"
                        class="{{ Request::is('git/create-a-branch-in-git-repository-using-command-line') ? 'activeSideber' : '' }}" id="SideberH">
                        How to create a branch in git repository using command line
                    </a>
                    <a href="{{ url('/git/remove-or-delete-branch-from-git-repository') }}"
                        class="{{ Request::is('git/remove-or-delete-branch-from-git-repository') ? 'activeSideber' : '' }}" id="SideberH">
                        How to remove or delete branch from git repository using command line
                    </a>
                    <a href="{{ url('/git/clone-a-git-repository-using-command-line') }}"
                        class="{{ Request::is('git/clone-a-git-repository-using-command-line') ? 'activeSideber' : '' }}" id="SideberH">
                        How to clone a git repository using command line
                    </a>
                    <a href="{{ url('/git/check-current-repository-name-using-command-line') }}"
                        class="{{ Request::is('git/check-current-repository-name-using-command-line') ? 'activeSideber' : '' }}" id="SideberH">
                        How to check current git repository name using command line
                    </a>
                    <a href="{{ url('/git/get-or-list-all-remote-branches-names-present-in-git-repository-using-command-line') }}"
                        class="{{ Request::is('git/get-or-list-all-remote-branches-names-present-in-git-repository-using-command-line') ? 'activeSideber' : '' }}" id="SideberH">
                        How to get / List all remote branches present in Git repository using command line
                    </a>
                    <a href="{{ url('/git/change-remote-git-repository-using-command-line') }}"
                        class="{{ Request::is('git/change-remote-git-repository-using-command-line') ? 'activeSideber' : '' }}" id="SideberH">
                        How to change remote git repository using command line
                    </a>
                    <a href="{{ url('/git/add-ssh-key-in-gitlab') }}"
                        class="{{ Request::is('git/add-ssh-key-in-gitlab') ? 'activeSideber' : '' }}" id="SideberH">
                        How to add SSH Key in Gitlab
                    </a>
                    <a href="{{ url('/git/rename-the-local-branch-in-git') }}"
                        class="{{ Request::is('git/rename-the-local-branch-in-git') ? 'activeSideber' : '' }}" id="SideberH">
                        How to Rename a Git Branch
                    </a>
                    <a href="{{ url('/git/move-to-previous-working-git-branch') }}"
                        class="{{ Request::is('git/move-to-previous-working-git-branch') ? 'activeSideber' : '' }}" id="SideberH">
                        git checkout to previous branch
                    </a>
                    <a href="{{ url('/git/get-a-list-of-git-branches-ordered-by-most-recent-commit') }}"
                        class="{{ Request::is('git/get-a-list-of-git-branches-ordered-by-most-recent-commit') ? 'activeSideber' : '' }}" id="SideberH">
                        get a last list of Git branches
                    </a>
                    <a href="{{ url('/git/check-or-set-username-and-email-address-in-git-using-cmd') }}"
                        class="{{ Request::is('git/check-or-set-username-and-email-address-in-git-using-cmd') ? 'activeSideber' : '' }}" id="SideberH">
                        Check or Set username and email
                    </a>
                </div>
            </nav>
        </div>
    </div>

</div>
