<?php

include 'db/db.php';
session_start();
session_destroy();
header('location:login.php')


?>