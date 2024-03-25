<?php require "../../config/config.php"; ?>
<?php require "../../App.php"; ?>
<?php require "../layouts/header2.php"; ?>
<?php

$app = new App;
// $app->validateSessionAdmin();
if(isset($_POST['submit']))
{
   $email = $_POST['email'];
   $password = $_POST['password'];

   $query = "SELECT * FROM admins WHERE email = '$email'";

   $date = [
      'email' => $email,
      'password' => $password
   ];

   $path = "http://localhost/restoran/admin-panel";

   $app->login($query, $date, $path);
}

?>
<form method="post" action="login-admins.php" class="p-3">
   <h3 class="mb-3">Admin Login</h3>
   <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
   </div>

   <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" id="password">
   </div>

   <button type="submit" name="submit" class="btn btn-primary">Log In</button>
</form>
<?php require "../layouts/footer.php"; ?>