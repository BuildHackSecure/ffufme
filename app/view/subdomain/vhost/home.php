<?php View::page('header'); ?>
    <h2>Subdomains - Virtual Host Enumeration</h2>
    <p>Lets start with the most basic fuzz first</p>
    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/subdomains.txt -H "Host: FUZZ.ffuf.me" -u http://' + getHost()
        });
    </script>

    <div id="terminal_2"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_2'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/subdomains.txt -H "Host: FUZZ.ffuf.me" -u http://' + getHost() +' -fs <?php echo $data["size"];?>'
        });
    </script>

    <p>This should of discovered the files <strong>class</strong> and <strong>development.log</strong></p>
    <div class="nav">
        <a class="next" href="/">Module Complete</a>
    </div>
<?php View::page('footer'); ?>