<?php
session_unset();
session_destroy();
header("Location: Login/Login_View.php");
