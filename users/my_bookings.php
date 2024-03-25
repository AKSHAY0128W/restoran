<?php require "../config/config.php"; ?>
<?php require "../App.php"; ?>
<?php require '../includes/header.php'; ?>
<?php
$app = new App;
$query = "SELECT * FROM bookings where user_id = '$_SESSION[user_id]'";
$bookings = $app->selectAll($query);
?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
   <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown">My Bookings</h1>
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>/users/my_bookings.php?id=?php echo $_SESSION['$user_id']?>">Bookings</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Bookings</li>
         </ol>
      </nav>
   </div>
</div>
<div class="container-xxl px-5 py-5 mb-5">
   <table class="table">
      <thead>
         <tr>
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Booking_date</th>
            <th scope="col">People</th>
            <th scope="col">Special Request</th>
            <th scope="col">Status</th>
         </tr>
      </thead>
      <tbody>
         <?php if (is_array($bookings) || is_object($bookings)) : ?>
            <?php foreach ($bookings as $booking) : ?>
               <tr>
                  <th>
                     <?php echo $booking->name; ?>
                  </th>
                  <td>
                     <?php echo $booking->contact; ?>
                  </td>
                  <td>
                     <?php echo $booking->date_booking; ?>
                  </td>
                  <td><?php echo $booking->num_people; ?></td>
                  <td><?php echo $booking->sr; ?></td>
                  <td><?php echo $booking->status; ?></td>
               </tr>
            <?php endforeach; ?>
         <?php else : ?>
            <tr>
               <td colspan="6">No bookings found.</td>
            </tr>
         <?php endif; ?>
      </tbody>
   </table>
   <!-- Rest of your HTML code -->
</div>
<!-- Rest of your HTML code -->
</div>
<?php require '../includes/footer.php'; ?>