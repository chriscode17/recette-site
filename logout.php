<?php 
session_start();
require_once(__DIR__."/backend/fonctions.php");

session_unset();
session_destroy();

 redirectToUrl("index.php");

?>