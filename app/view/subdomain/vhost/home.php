<?php View::page('header'); ?>
    <h2>Subdomains - Virtual Host Enumeration</h2>
    <p>FFUF can be used to discovery subdomains by the use of virtual hosts and changing the Host header</p>
    <p>Try running the below ffuf:</p>
    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/subdomains.txt -H "Host: FUZZ.ffuf.me" -u http://' + getHost()
        });
    </script>

    <p>You'll see from the results that every result comes back with a size of <?php echo $data["size"];?> Bytes.</p>
    <p>Now try running the below ffuf scan but this time using the -fs switch to filter out any results that are <?php echo $data["size"];?> bytes.</p>

    <div id="terminal_2"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_2'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/subdomains.txt -H "Host: FUZZ.ffuf.me" -u http://' + getHost() +' -fs <?php echo $data["size"];?>'
        });
    </script>

    <p>This should of discovered the subdomain <strong>redhat</strong></p>
    <div class="nav">
        <a class="next" href="/">Module Complete</a>
    </div>
<?php View::page('footer'); ?>