<?php View::page('header'); ?>
    <h2>Content Discovery - Rate Limited</h2>
    <p>Sometimes services are rate limited, this means you're only allowed to send a certain amount of requests per second. In this instance the directory we are going to fuzz is limited to 50 requests per second. Try running the below command and you'll soon notice you're receiving a lot of 429 HTTP Statuses which means you're temporarily banned from making requests for a few seconds.</p>
    <p>We're using the -mc switch to only display http statuses 200 and 429.</p>
    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/common.txt -u http://ffuf.test/cd/rate/FUZZ -mc 200,429'
        });
    </script>
    <p>Now try running the below command, the -p switch causes the application to pause 0.1 seconds per request and the -t switch creates 5 versions of ffuf which means a maximum of 50 requests per second.</p>
    <div id="terminal_2"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_2'),
            'server'    :   'root@ffuf',
            'cmd'       :   'ffuf -w ~/wordlists/common.txt -t 5 -p 0.1 -u http://ffuf.test/cd/rate/FUZZ -mc 200,429'
        });
    </script>
    <p>Now you shouldn't get any more 429 errors and you should find the <strong>oracle</strong> file.</p>
    <div class="nav">
        <a class="prev" href="/cd/param">Back : Param Mining</a>
        <a class="next" href="/cd/pipes">Next : Pipes</a>
    </div>
<?php View::page('footer'); ?>