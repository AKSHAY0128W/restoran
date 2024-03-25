<?php require '../../config/config.php'; ?>
<?php require '../../App.php'; ?>
<?php require '../layouts/header2.php'; ?>
<?php

$app = new App;
$query = "SELECT * FROM foods";
$foods = $app->selectAll($query);
?>
<div class="container-xxl px-5 py-5 mb-5">
   <div class="mb-3">
      <a href="<?php echo ADMINURL; ?>/foods-admin/create-foods.php" class="btn btn-primary">Add Food</a>
   </div>
   <table class="table table-striped table-hover">
      <thead>
         <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Delete</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($foods as $food) : ?>
            <tr>
               <td><?php echo $food->id; ?></td>
               <td><?php echo $food->name; ?></td>
               <td><img src="../../img/<?php echo $food->image; ?>" width="100px" height="100px" alt=""></td>
               <td>₹<?php echo $food->price; ?></td>
               <td><a href="delete-foods.php?id=<?php echo $food->id ?>" class="btn btn-danger">DELETE</a></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
</div> 