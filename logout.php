<?php

include "function.php";
$_SESSION['login'] = 0;
unset($_SESSION['login']);
header("Location: " . $baseurl);
exit;
