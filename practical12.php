<?php
session_start();
$timeout = 2; // 10 seconds
if(isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout)
{
    session_unset();
    session_destroy();
    echo "Session expired due to inactivity.";
}
$_SESSION['last_activity'] = time();
?>
