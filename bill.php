<?php require "config/config.php"; ?>
<?php require "App.php"; ?>
<?php require 'includes/header.php'; ?>

<?php
$app = new App;
$query = "SELECT * FROM cart where user_id = '$_SESSION[user_id]'";
$cart_items = $app->selectAll($query);
$cart_price = $app->selectone("SELECT SUM(price) as all_price FROM cart where user_id = '$_SESSION[user_id]'");
?>

<style>
   @media print {

      .no-print,
      .navbar-toggler {
         display: none;
      }
   }
</style>

<div class="container-xxl px-5 py-5 mb-5">
   <h1 class="display-3 text-center mb-3">Bill</h1>
   <table class="table">
      <thead>
         <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
         </tr>
      </thead>
      <tbody>
         <?php if (is_array($cart_items) || is_object($cart_items)) : ?>
            <?php foreach ($cart_items as $cart_item) : ?>
               <tr>
                  <td>
                     <?php echo $cart_item->name; ?>
                  </td>
                  <td>₹
                     <?php echo $cart_item->price; ?>
                  </td>
               </tr>
            <?php endforeach; ?>
         <?php else : ?>
            <tr>
               <td colspan="2" class="text-center">No items in cart</td>
            </tr>
         <?php endif; ?>
      </tbody>
   </table>
   <div class="text-end">
      <h2>Total: ₹<?php echo $cart_price->all_price ?></h2>
   </div>
   <div class="text-center no-print">
      <button onclick="window.print()" class="btn btn-primary">Print</button>
   </div>
</div>