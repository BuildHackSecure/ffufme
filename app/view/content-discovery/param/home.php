<?php View::page('header'); ?>
    <h2>Content Discovery - Param Mining</h2>
    <p>Viewing the page <a href="/cd/param/data">/cd/param/data</a> you are greeted with the message "Required Parameter Missing" and the page is set to a HTTP Status Code of 400 which means Bad Request.</p>
    <p>Using the below request we can try and find the missing parameter.</p>
    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/parameters.txt -u http://' + getHost() + '/cd/param/data?FUZZ=1'
        });
    </script>
    <p>The above command should of returned the missing parameter of <strong>debug</strong>.</p>
    <div class="nav">
        <a class="prev" href="/cd/no404">Back : No 404 Status</a>
        <a class="next" href="/cd/rate">Next : Rate Limited</a>
    </div>
<?php View::page('footer'); ?>