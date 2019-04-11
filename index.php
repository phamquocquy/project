<?php
ob_start();
session_start();
//load file config
include "config.php";
// load file model
include "application/model.php";
// load file controller
include "application/controller.php";

//logout
if(isset($_GET['act']) && $_GET['act'] == "logout")
    unset($_SESSION['email_nv']);
// kiem tra user dang nhap
if (isset($_SESSION["email_nv"]) == false){
    include "controller/controller_login.php";
}
else{
    $c = isset($_GET['controller']) ? $_GET['controller'] : "";
    $controller = $c != "" ? "controller/controller_$c.php" : "";
    include "view/view_layout.php";
}
