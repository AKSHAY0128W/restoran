<?php
require '../config/config.php';
require '../App.php';
require 'layouts/header2.php';

$app = new App;
$query = "SELECT COUNT(*) AS count_food FROM foods";
$count_foods = $app->selectone($query);

$query = "SELECT COUNT(*) AS count_bookings FROM bookings";
$count_bookings = $app->selectone($query);

$query = "SELECT COUNT(*) AS count_orders FROM orders";
$count_orders = $app->selectone($query);

$query = "SELECT COUNT(*) AS count_admins FROM admins";
$count_admins = $app->selectone($query);
?>

<div class="container mt-5">
   <div class="row">
      <div class="col-md-3">
         <div class="card text-white bg-primary mb-3">
            <div class="card-header"><i class="fas fa-hamburger"></i> Foods</div>
            <div class="card-body">
               <h5 class="card-title"><?php echo $count_foods->count_food; ?></h5>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="card text-white bg-success mb-3">
            <div class="card-header"><i class="fas fa-shopping-cart"></i> Orders</div>
            <div class="card-body">
               <h5 class="card-title"><?php echo $count_bookings->count_bookings; ?></h5>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="card text-white bg-warning mb-3">
            <div class="card-header"><i class="fas fa-book-open"></i> Bookings</div>
            <div class="card-body">
               <h5 class="card-title"><?php echo $count_orders->count_orders; ?></h5>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="card text-white bg-danger mb-3">
            <div class="card-header"><i class="fas fa-user-shield"></i> Admins</div>
            <div class="card-body">
               <h5 class="card-title"><?php echo $count_admins->count_admins; ?></h5>
            </div>
         </div>
      </div>
   </div>
</div>
<?php require 'layouts/footer.php' ?>