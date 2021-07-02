<?php View::page('header'); ?>
    <h2 style="margin: 0;padding: 0">Credits</h2>
    <div class="text-center" style="margin-bottom:20px"><a href="/about">About</a> | <a href="/help">Help</a> | <a href="/credits">Credits</a></div>

    <p>Wordlists are an essential requirement for fuzzing, here are 3 that you'll require to complete the tasks. The wordlists where created by <a href="https://twitter.com/DanielMiessler">Daniel Miessler</a> from the <a href="https://github.com/danielmiessler/SecLists">SecLists GitHub Repo</a> and they should be stored in the wordlists folder in your home directory.</p>

    <div id="terminal_bash"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_bash'),
            'server'    :   'root@ffuf',
            'hide-line' :   true,
            'cmd'       :   'cd ~<br>mkdir wordlists<br>cd wordlists<br>wget http://' + getHost() + '/wordlist/common.txt<br>wget http://' + getHost() + '/wordlist/parameters.txt<br>wget http://' + getHost() + '/wordlist/subdomains.txt<br><br>'
        });
    </script>
<?php View::page('header'); ?>