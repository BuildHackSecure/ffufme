<?php View::page('header'); ?>
    <h2>Content Discovery - Basic</h2>
    <p>Lets start with the most basic fuzz first</p>
    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/common.txt -u http://' + getHost() + '/cd/basic/FUZZ'
        });
    </script>
    <p>This should of discovered the files <strong>class</strong> and <strong>development.log</strong></p>
    <div class="nav">
        <a class="next" href="/cd/recursion">Next : Recursion</a>
    </div>
<?php View::page('footer'); ?>