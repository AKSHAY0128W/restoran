<?php require "config/config.php"; ?>
<?php require "App.php"; ?>
<?php require "includes/header.php"; ?>
<?php
$query = "SELECT * FROM foods WHERE meal_id=1 ";
$app = new App;
$meals_1 = $app->selectAll($query);

$query = "SELECT * FROM foods WHERE meal_id=2 ";
$app = new App;
$meals_2 = $app->selectAll($query);

$query = "SELECT * FROM foods WHERE meal_id=3 ";
$app = new App;
$meals_3 = $app->selectAll($query);
?>

<!-- Hero Start -->
<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container-fluid my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">
                    Enjoy our delicious meal with your family and friends. We provide the best quality food for you.
                </p>
                <a href="#reservation" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<!-- Hero End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Master Chefs</h5>
                        <p>We have the best master chefs in town. They provide the best quality food for you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5>Quality Food</h5>
                        <p>We provide the best quality food for you. We use the best ingredients to make the food.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                        <h5>
                            Different Menu
                        </h5>
                        <p>
                            We have a different menu for you. You can choose your favorite food from our menu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h5>24/7 Service</h5>
                        <p>We provide 24/7 service for you. You can order your food anytime from our website.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                <p class="mb-4">
                    Welcome to Restoran. We provide the best quality food for you. We have the best master chefs in town. They provide the best quality food for you. We provide the best quality food for you. We use the best ingredients to make the food. We have a different menu for you. You can choose your favorite food from our menu. We provide 24/7 service for you. You can order your food anytime from our website.
                </p>
                <p class="mb-4">
                    We provide the best quality food for you. We have the best master chefs in town. They provide the best quality food for you. We provide the best quality food for you. We use the best ingredients to make the food. We have a different menu for you. You can choose your favorite food from our menu. We provide 24/7 service for you. You can order your food anytime from our website.
                </p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Menu Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mt-n1 mb-0">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Special</small>
                            <h6 class="mt-n1 mb-0">Launch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mt-n1 mb-0">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php foreach ($meals_1 as $meal_1) : ?>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/<?php echo $meal_1->image; ?>" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>
                                                <?php echo $meal_1->name; ?>
                                            </span>
                                            <span class="text-primary">₹
                                                <?php echo $meal_1->price; ?>
                                            </span>
                                        </h5>
                                        <small class="fst-italic">
                                            <?php echo $meal_1->description; ?>
                                        </small>
                                        <a type="button" class="btn btn-primary mt-3" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_1->id; ?>">Order
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <?php foreach ($meals_2 as $meal_2) : ?>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/<?php echo $meal_2->image; ?>" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>
                                                <?php echo $meal_2->name; ?>
                                            </span>
                                            <span class="text-primary">₹
                                                <?php echo $meal_2->price; ?>
                                            </span>
                                        </h5>
                                        <small class="fst-italic">
                                            <?php echo $meal_2->description; ?>
                                        </small>
                                        <a type="button" class="btn btn-primary mt-3" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_2->id; ?>">Order
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <?php foreach ($meals_3 as $meal_3) : ?>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/<?php echo $meal_3->image; ?>" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>
                                                <?php echo $meal_3->name; ?>
                                            </span>
                                            <span class="text-primary">₹
                                                <?php echo $meal_3->price; ?>
                                            </span>
                                        </h5>
                                        <small class="fst-italic">
                                            <?php echo $meal_3->description; ?>
                                        </small>
                                        <a type="button" class="btn btn-primary mt-3" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_3->id; ?>">Order
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

<!-- Reservation Start -->

<div class="container-xxl py-5 bg-dark hero-header">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Reservation</h1>
    </div>
</div>


<div class="container-fluid px-0 wow fadeInUp" id="reservation" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://youtu.be/TteJ-Kfkm9g?si=ZKVdVsgp7gpC5ibg" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                <h1 class="text-white mb-4">Book A Table Online</h1>
                <form method="post" action="booking-table.php">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" name="contact" class="form-control" id="email" placeholder="Your Contact">
                                <label for="email">Contact Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="date" name="date_booking" class="form-control" id="datetime" placeholder="Date & Time" />
                                <label for="datetime">Date & Time</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="num_people" class="form-select" id="select1">
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                    <option value="5"> 5</option>
                                    <option value="5 or more"> 5 or more</option>
                                </select>
                                <label for="select1">No Of People</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="special_req" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                <label for="message">Special Request</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <?php if (!isset($_SESSION['$user_id'])) : ?>
                                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Book Now</button>
                            <?php else : ?>
                                <a href="<?php echo APPURL; ?>/auth/login.php" class="btn btn-primary w-100 py-3">Login to Book</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TteJ-Kfkm9g?si=3inbVHM6XBDA7Yi2&amp;controls=0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- reservation end -->

<!-- Footer Start -->
<?php require "includes/footer.php"; ?>
<!-- Footer End -->