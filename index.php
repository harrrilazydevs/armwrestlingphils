<?php


session_start();

$_SESSION['sesh_authorized'] = 1;
$_SESSION['sesh_access_level'] = 1;

if (!array_key_exists('sesh_authorized', $_SESSION)) {
    $_SESSION['sesh_authorized'] = 0;
    include 'src/auth/login.php';
}

$_SESSION['SYS_TYPE'] = "ecommerce";
$_SESSION['SYS_IMAGES_LOGO'] = "src/img\aw_logo.png";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arm Wrestling PH</title>

    <link rel="stylesheet" href="src/lib/bootstrap/bs5/bs.css">
    <link rel="stylesheet" href="src/lib/fontawesome/css/all.css">
    <link rel="icon" type="image/x-icon" href="src/img/philippines-flag-icon.svg">

    <?php
    if ($_SESSION['sesh_access_level'] == 1 && $_SESSION['sesh_authorized'] == 1) {
        echo ' 
            <link rel="stylesheet" href="src/pages/user/user_landing_style.css">
            <link rel="stylesheet" href="src/pages/user/page_component/headers/ecommerce_style2.css">
            <link rel="stylesheet" href="src/pages/user/sections/clubs/clubs.css">
        ';
    }

    ?>
</head>

<body>
    <script src="src/lib/bootstrap/bs5/bs.js"></script>
    <script src="src/lib/jquery/jquery-3.7.0.js"></script>
    <script src="src/lib/jquery/jqueryui-1.13.2.js"></script>
    <script src="src/lib/fontawesome/js/all.js"></script>
    <script src="src/func/system.js"></script>


    <?php
    if ($_SESSION['sesh_access_level'] == 1 && $_SESSION['sesh_authorized'] == 1) {
        include 'src/pages/user/landing_page.php';
    } else {
        include 'src/auth/login.php';
    }

    ?>



</body>

</html>