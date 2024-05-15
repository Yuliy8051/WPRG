<?php
$text = readline();
echo preg_replace('/[\\\\\/:*?"<>|+-]/', "", $text);
?>