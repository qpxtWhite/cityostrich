<?php
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $device = array();
    $device['mobile'] = strpos($agent, 'iphone') ? true : (strpos($agent, 'ipad')?true:(strpos($agent, 'android')?true:false));
?>