<?php require_once '../config/config.php'; ?>
<?php require_once '../App.php'; ?>
<?php require_once '../includes/header.php'; ?>

<?php

$app = new App;

if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";

   $arr =
      [
         ":username" => $username,
         ":email" => $email,
         ":password" => $password
      ];

   $path = 'login.php';
   $app->register($query, $arr, $path);
}

?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
   <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Register</h1>
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
         </ol>
      </nav>
   </div>
</div>
</div>
<!-- Navbar & Hero End -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
   <div class="col-md-12 bg-dark d-flex align-items-center">
      <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
         <h5 class="section-title ff-secondary text-start text-primary fw-normal">Registration</h5>
         <h1 class="text-white mb-4">Register for a new user</h1>
         <form class="col-md-12" method="POST" action="register.php">
            <div class="row g-3">
               <div class="col-md-12">
                  <div class="form-floating">
                     <input type="text" name="username" class="form-control" id="name" placeholder="Your Name">
                     <label for="name">Username</label>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-floating">
                     <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                     <label for="email">Your Email</label>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-floating">
                     <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                     <label for="email">Your Email</label>
                  </div>
               </div>
               <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit" name="submit">REGISTER</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
</div>

<?php require_once '../includes/footer.php'; ?>