<?php
include_once(dirname(__FILE__) . '/../../../includes/db_connect.php');
include_once(dirname(__FILE__) . '/../../../includes/login_functions.php');

sec_session_start();

if (!permission_check($mysqli, 'per_bread')) {
  header('Location: ../index.php');
  exit(0);
} ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Bread Delivery Status</title>
    <link rel='stylesheet' href='../resources/styles/w3.css'>
    <link rel='stylesheet' href='../resources/styles/w3-theme-red.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='bread_status.js'></script>
</head>
<body>
<header class='w3-theme w3-card w3-container'>
    <h2>Bread Status</h2>
</header>

<section class='w3-card w3-margin w3-padding w3-row'>
    <h6 class='w3-col l1 m2 s12'>Region:</h6>
    <select class='w3-col l7 m10 s12 w3-select w3-border' id='sel_rgn'
            title='select region'></select>
    <button class='w3-col l4 m12 s12 w3-btn w3-theme' id='btn_red_rgn'>Fetch
        Deliveries
    </button>
</section>

<div id='div_switch' class='w3-card w3-margin w3-padding w3-row'>
</div>
</body>
</html>