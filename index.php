<?php
session_start(); 
require 'controller/UserController.php';
$usercontroller = new UserController;
$usercontroller->viewManager();
// require 'controller/EntrepiseController.php';
// $entrepisecontroller = new EntrepiseController;
// $entrepisecontroller->viewManagerEntreprise();
// session_unset();

// // destroy the session
// session_destroy();

