 <?php require "../config/config.php"; ?>
 <?php require "../App.php"; ?>
 <?php require '../includes/header.php'; ?>
 <?php
   $app = new App;
   $query = "SELECT * FROM orders where user_id = '$_SESSION[user_id]'";
   $orders = $app->selectAll($query);
   ?>
 <div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
       <h1 class="display-3 text-white mb-3 animated slideInDown">My orders</h1>
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>/users/orders.php?id=?php echo $_SESSION['$user_id']?>">Orders</a></li>
             <li class="breadcrumb-item text-white active" aria-current="page">Orders</li>
          </ol>
       </nav>
    </div>
 </div>
 <div class="container-xxl px-5 py-5 mb-5">
    <table class="table">
       <thead>
          <tr>
             <th scope="col">Name</th>
             <th scope="col">Table No</th>
             <th scope="col">Total Amount</th>
             <th scope="col">Special Request</th>
             <th scope="col">Status</th>
             <th scope="col">Date</th>
          </tr>
       </thead>
       <tbody>
          <?php if (is_array($orders) || is_object($orders)) : ?>
             <?php foreach ($orders as $order) : ?>
                <tr>
                   <th>
                      <?php echo $order->name; ?>
                   </th>
                   <td>
                      <?php echo $order->table_no; ?>
                   </td>
                   <td>
                      ₹<?php echo $order->total_price; ?>
                   </td>
                   <td><?php echo $order->sr; ?></td>
                   <td><?php echo $order->status; ?></td>
                   <td><?php echo $order->created_at; ?></td>
                </tr>
             <?php endforeach; ?>
          <?php else : ?>
             <tr>
                <td colspan="6">No orders found.</td>
             </tr>
          <?php endif; ?>
       </tbody>
    </table>
    <!-- Rest of your HTML code -->
 </div>
 <!-- Rest of your HTML code -->
 </div>
 <?php require '../includes/footer.php'; ?>