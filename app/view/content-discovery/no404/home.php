<?php View::page('header'); ?>
    <h2>Content Discovery - No 404 Status</h2>
    <p>In a perfect world all websites would respond correctly with the correct HTTP status codes</p>
    <p>Lets try running the below ffuf example and see what happens</p>
    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/common.txt -u http://' + getHost() + '/cd/no404/FUZZ'
        });
    </script>
    <p>From the ffuf response you'll notice that every file you've requested has come back as been found! It's not that you've got lucky and come across a load of content it's that the webpage displaying the "Page Cannot Be Found" message is not returning a 404 header</p>
    <p>You'll notice that the "Page Cannot Be Found" page consistently has a file size of 630 bytes. Let's re-run the ffuf command but with the -fs switch which filters out any results that are 630 bytes in length.</p>
    <div id="terminal_2"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_2'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/common.txt -u http://' + getHost() + '/cd/no404/FUZZ -fs 630'
        });
    </script>
    <p>This should cut the results down to just one file <strong>/secret</strong></p>

    <div class="nav">
        <a class="prev" href="/cd/ext">Back : File Extensions</a>
        <a class="next" href="/cd/param">Next : Param Mining</a>
    </div>
<?php View::page('footer'); ?>