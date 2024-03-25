<?php require "../config/config.php"; ?>
<?php require "../App.php"; ?>
<?php require '../includes/header.php'; ?>
<?php
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $table_no = $_POST['table_no'];
   $special_req = $_POST['special_req'];
   $total_price = $_SESSION['total_price'];
   $user_id = $_SESSION['user_id'];

   $query = "INSERT INTO orders (name, table_no, sr, total_price, user_id) VALUES (:name, :table_no, :special_req, :total_price, :user_id)";

   $arr = [
   ":name" => $name,
   ":table_no" => $table_no,
   ":special_req" => $special_req,
   ":total_price" => $total_price,
   ":user_id" => $user_id
];
   $path = 'http://localhost/restoran/bill.php';
   $app->insert($query, $arr, $path);
}
?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
   <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Checkout</h1>
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Checout</li>
         </ol>
      </nav>
   </div>
</div>
</div>
<!-- Navbar & Hero End -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
   <div class="col-md-12 bg-dark d-flex align-items-center">
      <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
         <h5 class="section-title ff-secondary text-start text-primary fw-normal">Checkout</h5>
         <h1 class="text-white mb-4">Checkout for a order</h1>
         <form class="col-md-12" method="POST" action="checkout.php">
            <div class="row g-3">
               <div class="col-md-12">
                  <div class="form-floating">
                     <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                     <label for="name">Your Name</label>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="form-floating">
                     <input type="number" class="form-control" name="table_no" id="table_no" placeholder="Your Table Number">
                     <label for="email">Table No</label>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-floating">
                     <input type="text" class="form-control" name="special_req" id="special_req" placeholder="Enter Special Request">
                     <label for="Town">Special Request</label>
                  </div>
               </div>
               <div class="col-md-12">
                  <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Confirm Order</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
</div>

<?php require '../includes/footer.php'; ?>