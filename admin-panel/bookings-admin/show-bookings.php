<?php require "../../config/config.php"; ?>
<?php require "../../App.php"; ?>
<?php require "../layouts/header2.php"; ?>
<?php
$app = new App;
$query = "SELECT * FROM bookings;";
$bookings = $app->selectAll($query);
?>
<div class="container-xxl px-5 py-5 mb-5">
   <table class="table table-striped table-hover">
      <thead>
         <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Table No</th>
            <th scope="col">Date</th>
            <th scope="col">People</th>
            <th scope="col">Special Request</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($bookings as $booking) : ?>
            <tr>
               <td>
                  <?php echo $booking->id; ?>
               </td>
               <th>
                  <?php echo $booking->name; ?>
               </th>
               <td>
                  <?php echo $booking->contact; ?>
               </td>
               <td><?php echo $booking->date_booking; ?></td>
               <td><?php echo $booking->num_people; ?></td>
               <td><?php echo $booking->sr; ?></td>
               <td><?php echo $booking->status; ?></td>
               <td><a href="status.php?id=<?php echo $booking->id; ?>" class="btn btn-success">STATUS</a></td>
               <td><a href="delete-bookings.php?id=<?php echo $booking->id; ?>" class="btn btn-danger">DELETE</a></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
</div>
<?php require "../layouts/footer.php"; ?>