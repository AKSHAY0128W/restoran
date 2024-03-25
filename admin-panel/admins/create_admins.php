<?php
require "../../config/config.php";
require "../../App.php";
require "../layouts/header2.php";

$app = new App;

if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $query = "INSERT INTO admins (name, email, password) VALUES (:username, :email, :password)";

   $data = [
      ":username" => $username,
      ":email" => $email,
      ":password" => $password,
   ];
   $path = "http://localhost/restoran/admin-panel";
   $app->insert($query, $data, $path);
}
?>
<div class="container mt-5">
   <form method="post" action="create_admins.php">
      <h3>Create Admin</h3>
      <div class="mb-3">
         <label for="username" class="form-label">Username</label>
         <input type="text" class="form-control" placeholder="Enter Username" name="username" id="username">
      </div>

      <div class="mb-3">
         <label for="email" class="form-label">Email</label>
         <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
      </div>

      <div class="mb-3">
         <label for="password" class="form-label">Password</label>
         <input type="password" class="form-control" name="password" placeholder="Password" id="password">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
   </form>
</div>

<?php require "../layouts/footer.php"; ?>