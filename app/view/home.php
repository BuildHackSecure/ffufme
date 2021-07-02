<?php View::page('header'); ?>
    <h2 style="margin: 0;padding: 0">For FFUF Target Practice</h2>
    <div class="text-center"><a href="/about">About</a> | <a href="/help">Help</a> | <a href="/credits">Credits</a></div>
    <div class="welcome text-center" style="margin-top:20px;background-color: #e76c6c">
        <p>Before you start make sure you download the required <a href="/wordlists">wordlists</a> first</p>
    </div>
    <h3>Content Discovery</h3>
    <ul>
        <li><a href="/cd/basic">Basic Content Discovery</a></li>
        <li><a href="/cd/recursion">Content Discovery With Recursion</a></li>
        <li><a href="/cd/ext">Content Discovery With File Extensions</a></li>
        <li><a href="/cd/no404">No 404 Status</a></li>
        <li><a href="/cd/param">Param Mining</a></li>
        <li><a href="/cd/rate">Rate Limited</a></li>
        <li><a href="/cd/pipes">Pipes</a></li>
    </ul>
    <h3>Subdmain Enumeration</h3>
    <ul>
        <li><a href="/sub/vhost">Virtual Host Discovery</a></li>
    </ul>
<?php View::page('footer'); ?>