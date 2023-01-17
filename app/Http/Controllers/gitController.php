<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gitController extends Controller
{
    public function index(){
        return view('category.git.index');
    }
    public function installGit(){
        return view('category.git.pages.download-or-install-git');
    }
    public function getBranch(){
        return view('category.git.pages.get-the-current-branch-name-in-git');
    }
    public function repo(){
        return view('category.git.pages.create-git-repository-in-local-and-connect-to-github-gitlab-project');
    }
    public function creBranch(){
        return view('category.git.pages.create-a-branch-in-git-repository-using-command-line');
    }
    public function removeBranch(){
        return view('category.git.pages.remove-or-delete-branch-from-git-repository');
    }
    public function cloneRepo(){
        return view('category.git.pages.clone-a-git-repository-using-command-line');
    }
    public function checkRepo(){
        return view('category.git.pages.check-current-repository-name-using-command-line');
    }
    public function getListRepo(){
        return view('category.git.pages.get-or-list-all-remote-branches-names-present-in-git-repository-using-command-line');
    }
    public function changeRepo(){
        return view('category.git.pages.change-remote-git-repository-using-command-line');
    }
    public function addSsh(){
        return view('category.git.pages.add-ssh-key-in-gitlab');
    }
    public function renameGit(){
        return view('category.git.pages.rename-the-local-branch-in-git');
    }
    public function moveBranch(){
        return view('category.git.pages.move-to-previous-working-git-branch');
    }
    public function getBranchList(){
        return view('category.git.pages.get-a-list-of-git-branches-ordered-by-most-recent-commit');
    }
    public function ckUser(){
        return view('category.git.pages.check-or-set-username-and-email-address-in-git-using-cmd');
    }
}
