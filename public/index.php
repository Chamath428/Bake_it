<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 86400)) {
    session_unset();     
    session_destroy();   
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
include "../config/config.php"; 
include "../system/init.php";

?>