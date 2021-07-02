<?php View::page('header'); ?>
    <h2>Content Discovery - Recursion</h2>
    <p>This is simular to the first scan but this time we're using the -recursion switch. This switch tells ffuf that if it enounters a directory it should start another scan within that directory and so on until no more results are found</p>
    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/common.txt -recursion -u http://' + getHost() + '/cd/recursion/FUZZ'
        });
    </script>
    <p>This scan should uncover the directory <strong>/admin</strong> and then <strong>/admin/users</strong> and finally the file <strong>/admin/users/96</strong></p>


    <div class="nav">
        <a class="prev" href="/cd/basic">Back : Basic</a>
        <a class="next" href="/cd/ext">Next : File Extensions</a>
    </div>

<?php View::page('footer'); ?>