<?php
session_start();
session_destroy();
setcookie('email', '', -1);
header("Location:home.php");
