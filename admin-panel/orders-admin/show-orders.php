<?php require "../../config/config.php"; ?>
<?php require "../../App.php"; ?>
<?php require "../layouts/header2.php"; ?>
<?php
$app = new App;
$query = "SELECT * FROM orders;";
$orders = $app->selectAll($query);
?>
<div class="container-xxl px-5 py-5 mb-5">
   <table class="table table-striped table-hover">
      <thead>
         <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Table No</th>
            <th scope="col">Total Amount</th>
            <th scope="col">Special Request</th>
            <th scope="col">Status</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($orders as $order) : ?>
            <tr>
               <td>
                  <?php echo $order->id; ?>
               </td>
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
               <td><a href="status.php?id=<?php echo $order->id; ?>" class="btn btn-success">STATUS</a></td>
               <td><a href="delete-orders.php?id=<?php echo $order->id; ?>" class="btn btn-danger">DELETE</a></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
</div>
<?php require "../layouts/footer.php"; ?>