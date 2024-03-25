<?php require "../../config/config.php"; ?>
<?php require "../../App.php"; ?>
<?php require "../layouts/header2.php"; ?>
<?php
$app = new App;
$query = "SELECT * FROM admins;";
$admins = $app->selectAll($query);
?>
<div class="container-xxl px-5 py-5 mb-5">
   <div class="mb-3">
      <a href="<?php echo ADMINURL; ?>/admins/create_admins.php" class="btn btn-primary">Add Admin</a>
   </div>
   <table class="table table-striped table-hover mx-auto">
      <thead>
         <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($admins as $admin) : ?>
            <tr>
               <th>
                  <?php echo $admin->id; ?>
               </th>
               <td>
                  <?php echo $admin->name; ?>
               </td>
               <td>
                  <?php echo $admin->email; ?>
               </td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
</div>

<?php require "../layouts/footer.php"; ?>