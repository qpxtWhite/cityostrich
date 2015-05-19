<?php
session_start();
if(isset($_GET['validateCode'])){
    $code = strtolower($_GET['validateCode']);
    if(strtolower($_SESSION['authnum_session']) != $code){
        echo 'wrong';
    } else {
        echo 'true';
    }
}
?>