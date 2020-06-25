<?php
    $timestamp = time();
    $timezone = "Asia/Colombo";
    $dt = new DateTime();
    $dt->setTimestamp($timestamp);
    $dt->setTimezone(new DateTimeZone($timezone));
    $datetime = $dt->format('Y-m-d H:i:s');
    
?>