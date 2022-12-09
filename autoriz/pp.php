<?php
session_start();
header('Content-Type: text/html; charset= utf-8');
require_once '../functions/connection.php';
$link = mysqli_connect($host, $user, $password, "testing");

include "../html/personal-page.html"
?>