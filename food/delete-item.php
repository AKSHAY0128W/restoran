<?php
require "../config/config.php";
require "../App.php";
require '../includes/header.php';

if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $app = new App;
   $app->delete("DELETE FROM cart WHERE id = :id", ['id' => $id], '../cart.php');
}