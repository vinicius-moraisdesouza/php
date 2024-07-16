<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 include_once ("route.php");
 if( !empty($_POST['form_submit']) ) {
 rotas($_POST['acao']);
 }
?>
<!DOCTYPE html>