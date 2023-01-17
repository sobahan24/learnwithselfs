@extends('layouts.master')

@section('title')
    Git | Add SSH Key | Learn with Self
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('category.git.partials.sideber')
            <div class="col-md-10">
                <div class="row">
                <div class="col-md-8 border-left border-right">
                    <div class="main-heading">
                        <h1>How to add SSH Key in Gitlab</h1>
                    </div>
                    <div class="description py-3">
                        <p>How to add SSH Key in Gitlab&nbsp;</p><p>In this article, we are going know about how to add ssh key to your GitLab account from system.</p><p><br></p><p><b>Step 1:</b> Lets go to gitlab.com and&nbsp; open your profile or setting, and search SSH Keys in Sidebar, click o<span style="font-size: 1rem;">n it.</span></p><p><span style="font-size: 1rem;"><b>Step 2: </b>SSH Key page opens, then you will find an option to generate one SSH Key or you can use old SSH Key.</span></p><p><span style="font-size: 1rem;"><b>Step 3:</b> You can create and configure ED25519 Keys for SSH - so use the following command on your CMD / Terminal / GitBash as follows:</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ ssh-keygen&nbsp;-t&nbsp;ed25519&nbsp;-C&nbsp;<span style="color: #ce9178;">"&lt;comment&gt;"</span></div></div><p><span style="font-size: 1rem;">The -C which is quoted as comment, there you can put your email address like: -C "example@email.com" to label or name your generated SSH Key.</span></p><p><span style="font-size: 1rem;">Once the command is successful. <b>OUTPUT</b> will be as follows:</span></p><div class="alert fuda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>HP@HP-PC&nbsp;MINGW64&nbsp;/c/xampp/htdocs/<span style="color: #dcdcaa;">project</span>&nbsp;(master)</div><div>$&nbsp;ssh-keygen&nbsp;-t&nbsp;ed25519&nbsp;-C&nbsp;<span style="color: #ce9178;">"example@email.com"</span></div><div>Generating&nbsp;<span style="color: #569cd6;">public</span>/<span style="color: #569cd6;">private</span>&nbsp;ed25519&nbsp;key&nbsp;pair.</div><div>Enter&nbsp;file&nbsp;in&nbsp;which&nbsp;to&nbsp;save&nbsp;the&nbsp;<span style="color: #dcdcaa;">key</span>&nbsp;(/c/Users/HP/.ssh/id_ed25519):</div><div>Enter&nbsp;<span style="color: #dcdcaa;">passphrase</span>&nbsp;(empty&nbsp;<span style="color: #c586c0;">for</span>&nbsp;<span style="color: #569cd6;">no</span>&nbsp;passphrase):</div><div>Enter&nbsp;same&nbsp;passphrase&nbsp;again:</div><div>Your&nbsp;identification&nbsp;has&nbsp;been&nbsp;saved&nbsp;in&nbsp;/c/Users/HP/.ssh/id_ed25519</div><div>Your&nbsp;<span style="color: #569cd6;">public</span>&nbsp;key&nbsp;has&nbsp;been&nbsp;saved&nbsp;in&nbsp;/c/Users/HP/.ssh/id_ed25519.pub</div><div>The&nbsp;key&nbsp;fingerprint&nbsp;is:</div><div>SHA256:sdfgsdfgfglsdfdgufussfdsf+ARU&nbsp;example@email.com</div><div>The&nbsp;key<span style="color: #ce9178;">'s&nbsp;randomart&nbsp;image&nbsp;is:</span></div></div><p><span style="font-size: 1rem;"><br></span></p><p><span style="font-size: 1rem;"><b>Step 4:</b> After your SSH key generated as above, now need to copy that generated ED25519 Key known as SSH Key as follows:</span><span style="font-size: 1rem;">&nbsp;</span></p><div class="alert funda-bg" style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div>$ cat&nbsp;~/.ssh/id_ed25519.pub</div></div><p><span style="font-size: 1rem;">OUTPUT:</span></p><div class="alert funda-bg" style="background-color: rgb(30, 30, 30); line-height: 19px;"><div style=""><font color="#d4d4d4" face="Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;">$ cat ~/.ssh/id_ed25519.pub</span></font><br></div><div style="color: rgb(212, 212, 212); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; white-space: pre;">ssh-ed25519&nbsp;asdasdasdasdasdasd/pwb4bcc7sdfsdfsfddsfsdfsd/Jtt2adadadadsXfs&nbsp;example@email.com</div></div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6 text-start">
                                <a href="{{ url('/git/change-remote-git-repository-using-command-line') }}" class="bg-blue px-5 btn text-white" ><i class="fa fa-arrow-left me-2"></i> Prev </a>
                            </div>
                            <div class="col-md-6 col-6 text-end">
                                <a href="{{ url('/git/rename-the-local-branch-in-git') }}" class="bg-blue px-5 btn text-white" >Next <i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    @include('category.git.partials.latestPost')
                </div>
            </div>
        </div>
    </div>
@endsection
