<?php
session_start(); 
require 'controller/Controller.php';
$usercontroller = new Controller;
$usercontroller->viewManager();
// require 'controller/EntrepiseController.php';
// $entrepisecontroller = new EntrepiseController;
// $entrepisecontroller->viewManagerEntreprise();
// session_unset();

// // destroy the session
// session_destroy();

