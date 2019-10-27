<?php
set_time_limit(60);
session_start();
session_unset();
session_destroy();
header("Location: Login/Login_View.php");
