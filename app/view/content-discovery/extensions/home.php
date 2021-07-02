<?php View::page('header'); ?>
    <h2>Content Discovery - File Extensions</h2>
    <p>We've come across a directory called /logs but we cannot view its contents. We can make a safe assumption that the files stored in here are using the .log extension</p>
    <p>Use the below scan with the -e switch to specify the extension type to add onto the end of every word in the wordlist to find the correct log</p>
    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/common.txt -e .log -u http://' + getHost() + '/cd/ext/logs/FUZZ'
        });
    </script>
    <p>The above scan should of found the file <strong>/logs/users.log</strong></p>
    <div class="nav">
        <a class="prev" href="/cd/recursion">Back : Recursion</a>
        <a class="next" href="/cd/no404">Next : No 404 Status</a>
    </div>

<?php View::page('footer'); ?>