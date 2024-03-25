<?php
require "config/config.php";
require "App.php";
require 'includes/header.php';

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $contact = $_POST['contact'];
   $date_booking = $_POST['date_booking'];
   $num_people = $_POST['num_people'];
   $special_req = $_POST['special_req'];
   $status = 'pending';
   $user_id = $_SESSION['user_id'];

   if (strtotime($date_booking) > strtotime(date('Y-m-d'))) {
      $query = "INSERT INTO bookings (name, contact, date_booking, num_people, sr, status, user_id) VALUES (
         :name, :contact, :date_booking, :num_people, :special_req, :status, :user_id
      )";

      $arr = [
         ":name" => $name,
         ":contact" => $contact,
         ":date_booking" => $date_booking,
         ":num_people" => $num_people,
         ":special_req" => $special_req,
         ":status" => $status,
         ":user_id" => $user_id
      ];

      $path = 'http://localhost/restoran';
      $app->insert($query, $arr, $path);
   } else {
      echo "<script>alert('invalid date please select a date starting from tomorrow')</script>";
      echo "<script>window.location = 'index.php'</script>";
   }
}
