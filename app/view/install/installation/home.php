<?php View::page('header'); ?>
    <h2>Installation Instructions</h2>

    <p>First things first, you'll actually need ffuf on your system. You can either do this by downloading a prebuilt binary from <a href="https://github.com/ffuf/ffuf/releases/tag/v1.3.1">here</a> or compiling it on your machine ( best option )</p>

    <p>FFUF is built in <a href="https://golang.org/">go</a> so therefore you'll need the go compiler if you don't have this yet follow the below commands:</p>
    <div id="terminal_1"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_1'),
            'hide-line' :   true,
            'server'    :   'root@ffuf',
            'cmd'       :   'sudo add-apt-repository -y ppa:longsleep/golang-backports<br>sudo apt update<br>sudo apt install -y golang-go'
        });
    </script>
    <p>You can then install ffuf either by using the go get command below:</p>
    <div id="terminal_2"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_2'),
            'hide-line' :   true,
            'server'    :   'root@ffuf',
            'cmd'       :   'cd ~<br>go get github.com/ffuf/ffuf<br><span style="color:#118971">#The below command makes the ffuf command available from any directory</span><br>sudo ln -s ~/go/bin/ffuf /usr/sbin/ffuf'
        });
    </script>

    <p>Or straight from the GitHub Repo:</p>

    <div id="terminal_3"></div>
    <script>
        new MockTerminal({
            'element'   :   document.getElementById('terminal_3'),
            'hide-line' :   true,
            'server'    :   'root@ffuf',
            'cmd'       :   'cd ~<br>git clone https://github.com/ffuf/ffuf<br>cd ffuf<br>go get<br>go build<br><span style="color:#118971">#The below command makes the ffuf command available from any directory</span><br>sudo ln -s ~/go/bin/ffuf /usr/sbin/ffuf'
        });
    </script>



    <div class="nav">
        <a class="next" href="/">Module Complete</a>
    </div>
<?php View::page('footer'); ?>