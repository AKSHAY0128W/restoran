<?php
require "../../config/config.php";
require "../../App.php";

if (isset($_GET['id'])) {
   $id = $_GET['id'];

   $query = "DELETE FROM bookings WHERE id = :id";
   $params = ['id' => $id];
   $path = "show-bookings.php";

   $app = new App;
   $app->delete($query, $params, $path);
}
