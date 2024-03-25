<?php
require "../../config/config.php";
require "../../App.php";
require "../layouts/header2.php";

$app = new App;
if (isset($_GET['id'])) {
   $id = $_GET['id'];

   if (isset($_POST['submit'])) {
      $status = $_POST['status'];

      $query = "UPDATE bookings SET status = :status WHERE id = :id";
      $arr = [
         'status' => $status,
         'id' => $id
      ];
      $path = "show-bookings.php";
      $app->update($query, $arr, $path);
   }
}
?>

<div class="container mt-5">
   <form method="post" action="status.php?id=<?php echo $id; ?>">
      <div class="mb-3">
         <label for="status" class="form-label">Status:</label>
         <select class="form-control" id="status" name="status">
            <option value="Pending">Pending</option>
            <option value="Confirm">Confirm</option>
            <option value="Cancelled">Cancelled</option>
         </select>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
   </form>
</div>

<?php require "../layouts/footer.php"; ?>