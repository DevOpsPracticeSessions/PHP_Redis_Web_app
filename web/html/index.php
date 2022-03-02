<?php 
ini_set('session.save_handler', 'redis');
ini_set('session.save_path', 'tcp://devcache1:6379,tcp://devcache1:6379');
session_name('FOOBAR');
session_start();
if (!array_key_exists('visit', $_SESSION)) {
    $_SESSION['visit'] = 0;
}
$_SESSION['visit']++;
echo nl2br('This is the  ' . $_SESSION['visit'] . ' visitors.');
