<?php
$app = new App;
$app->startingSession();
define('ADMINURL', 'http://localhost/restoran/admin-panel');
?>
<html>

<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
   <div class="container-fluid">
      <div class="row">
         <!-- Sidebar -->
         <div class="col-md-2 bg-light">
            <h3 class="text-center my-3">Smart Restaurant</h3>
            <?php if (isset($_SESSION['email'])) : ?>
               <div class="list-group">
                  <a href="<?php echo ADMINURL; ?>/index.php" class="list-group-item list-group-item-action">Home</a>
                  <a href="<?php echo ADMINURL; ?>/admins/admins.php" class="list-group-item list-group-item-action">Admins</a>
                  <a href="<?php echo ADMINURL; ?>/orders-admin/show-orders.php" class="list-group-item list-group-item-action">Orders</a>
                  <a href="<?php echo ADMINURL; ?>/bookings-admin/show-bookings.php" class="list-group-item list-group-item-action">Bookings</a>
                  <a href="<?php echo ADMINURL; ?>/foods-admin/show-foods.php" class="list-group-item list-group-item-action">Foods</a>
               </div>
            <?php endif; ?>
         </div>

         <!-- Dashboard -->
         <div class="col-md-10">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">
                  <a class="navbar-brand" href="#">Dashboard</a>
                  <div class="d-flex">
                     <?php if (!isset($_SESSION['email'])) : ?>
                        <a class="btn btn-primary" href="<?php echo ADMINURL; ?>/admins/login-admins.php ">Login</a>
                     <?php else : ?>
                        <a class="btn btn-primary me-2" href="">
                           <?php echo $_SESSION['email']; ?>
                        </a>
                        <a class="btn btn-primary" href="<?php echo ADMINURL; ?>/admins/logout.php">Logout</a>
                     <?php endif; ?>
                  </div>
               </div>
            </nav>
           