<?php
session_start();
use Core\Components;
$action = (($_POST['action'] != null || $_GET['action' != null]))? "":"home.index";

$controller = controller::createEngine($action);
$controller->execute();
?>