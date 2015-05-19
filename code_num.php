<?php
session_start();
require './components/validateCode.php';
$_vc = new ValidateCode();
$_vc->doimg();
$_SESSION['authnum_session'] = $_vc->getCode();
?>