<?php
require "../config/config.php";
require "../App.php";
require '../includes/header.php';

$app = new App;

if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $query = "SELECT * FROM foods where id = '$id'";
   $one = $app->selectone($query);

   if (isset($_SESSION['user_id'])) {
      $q = "SELECT * FROM cart WHERE item_id = '$id' AND user_id = '$_SESSION[user_id]'";
      $count = $app->validateCart($q);
   }

   if (isset($_POST['submit'])) {
      $item_id = $_POST['item_id'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $image = $_POST['image'];
      $user_id = $_SESSION['user_id'];

      $query = "INSERT INTO cart (item_id, name, price,image,user_id) VALUES (
        :item_id, :name, :price, :image, :user_id
    )";

      $arr = [
         ":item_id" => $item_id,
         ":name" => $name,
         ":price" => $price,
         ":image" => $image,
         ":user_id" => $user_id
      ];

      $path = '../cart.php';
      $app->insert($query, $arr, $path);
   }
}

?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
   <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $one->name; ?></h1>
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page"><?php echo $one->name; ?></li>
         </ol>
      </nav>
   </div>
</div>
</div>


<div class="container-xxl py-5">
   <div class="container">
      <div class="row g-5 align-items-center">
         <div class="col-md-6">
            <div class="row g-3">
               <div class="col-md-12 text-start">
                  <img class="img-fluid rounded w-100 wow zoomIn" src="<?php echo APPURL; ?>/img/<?php echo $one->image; ?>" alt="">
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <h1 class="mb-4">
               <?php echo $one->name; ?>
            </h1>
            <p class="mb-4">
               <?php echo $one->description; ?>
            </p>
            <p class="mb-4"></p>
            <div class="row g-4 mb-4">
               <div class="col-sm-6">
                  <div class="d-flex align-items-center border ">
                     <h3>Price ₹
                        <?php echo $one->price; ?>
                     </h3>
                  </div>
               </div>
            </div>
            <form action="add-cart.php?id=<?php echo $id; ?>" method="post">
               <input type="hidden" name="item_id" value="<?php echo $one->id; ?>">
               <input type="hidden" name="name" value="<?php echo $one->name; ?>">
               <input type="hidden" name="image" value="<?php echo $one->image; ?>">
               <input type="hidden" name="price" value="<?php echo $one->price; ?>">
               <?php if ($count > 0) : ?>
                  <button name="submit" type="submit" href="" disabled class="btn btn-primary">Added to cart </button>
               <?php else : ?>
                  <button name="submit" type="submit" href="" class="btn btn-primary">Add to cart </button>
               <?php endif; ?>
            </form>
         </div>
      </div>
   </div>