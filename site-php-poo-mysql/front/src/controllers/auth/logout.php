<?php

$cookieErase_name = "CookieAuth";
$GLOBALS['eraseCookie']= true;
$GLOBALS['logout']= true;
require('../../layout/layout.html.php');
header('Location: ../../../../index.php');
