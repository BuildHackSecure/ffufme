<?php View::page('header'); ?>
    <h2>Content Discovery - Pipes</h2>

    <p>Sometimes there's situations where the wordlists that we have aren't useful for the job required.</p>
    <p>For instance you might want to test something for an IDOR vulnerability and try some integers against it.</p>
    <p>Instead of creating a wordlist with the required integers for the job we can use the linux seq command instead and pipe the result straight into ffuf.</p>

    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'server'    :   'root@ffuf',
            'cmd'       :   'seq 1 1000 | ffuf -w - -u http://' + getHost() + '/cd/pipes/user?id=FUZZ'
        });
    </script>

    <p>The above command should discover a valid result of <strong>657</strong></p>

    <p>What if the ID's are hashed in base64 or md5, this is a common way for developers to try and obfuscate the input to make it appear more random.</p>
    <p>Unfortunately Linux doesn't have a good built in way to do this when piping in multiple lines so I developed the below bash script which can be altered to your own requirements. You'll need to save it in the /usr/local/bin with execute permissions so it's available from any directory.</p>

    <div id="terminal_bash"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_bash'),
            'server'    :   'root@ffuf',
            'hide-line' :   true,
            'cmd'       :   '#!/bin/bash<br><br>while read i<br>do<br>&nbsp;&nbsp;if [ "$1" == "md5" ]; then<br>&nbsp;&nbsp;&nbsp;&nbsp;echo -n $i | md5sum | awk \'{ print $1 }\'<br>&nbsp;&nbsp;elif [ "$1" == "b64" ]; then<br>&nbsp;&nbsp;&nbsp;&nbsp;echo -n $i | base64<br>&nbsp;&nbsp;else<br>&nbsp;&nbsp;&nbsp;&nbsp;echo $i<br>&nbsp;&nbsp;fi<br>done'
        });
    </script>
    <p>Try the below to find the base64 encoded ID</p>
    <div id="terminal_2"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_2'),
            'server'    :   'root@ffuf',
            'cmd'       :   'seq 1 1000 | hashit b64 | ffuf -w - -u http://' + getHost() + '/cd/pipes/user2?id=FUZZ'
        });
    </script>
    <p>The above command should discover a valid result of <strong>ODg4Cg==</strong> which is integer <strong>888</strong></p>
    <p>And lastly the below to find the md5 hashed ID</p>
    <div id="terminal_3"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_3'),
            'server'    :   'root@ffuf',
            'cmd'       :   'seq 1 1000 | hashit md5 | ffuf -w - -u http://' + getHost() + '/cd/pipes/user3?id=FUZZ'
        });
    </script>
    <p>The above command should discover a valid result of <strong>4daa3db355ef2b0e64b472968cb70f0d</strong> which is integer <strong>934</strong></p>
    <div class="nav">
        <a class="prev" href="/cd/rate">Back : Rate Limited</a>
        <a class="next" href="/">Content Discovery Module Complete</a>
    </div>
<?php View::page('footer'); ?>