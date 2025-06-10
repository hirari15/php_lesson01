<?php
$week_name = ['日','月'];
echo $week_name[0] . '<br>';

date_default_timezone_set('Asia/Tokyo');
$week = date('w');
echo $week;
?>