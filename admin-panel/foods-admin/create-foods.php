<?php
require '../../config/config.php';
require '../../App.php';
require '../layouts/header2.php';

$app = new App;
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $price = $_POST['price'];
   $description = $_POST['description'];
   $meal_type = $_POST['meal_id'];
   $image = $_FILES['image']['name'];

   $dir = "foods-images/" . basename($image);

   $query = "INSERT INTO foods (name, image, description, price, meal_id) VALUES (:name, :image, :description, :price, :meal_id)";

   $arr = [
      ':name' => $name,
      ':image' => $image,
      ':description' => $description,
      ':price' => $price,
      ':meal_id' => $meal_type
   ];
   $path = 'show-foods.php';
   if (move_uploaded_file($_FILES['image']['tmp_name'], $dir)) {
      $app->insert($query, $arr, $path);
   }
}
?>

<div class="container">
   <h2>Add Food</h2>
   <form action="create-foods.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
         <label for="name">Name:</label>
         <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
         <label for="price">Price:</label>
         <input type="number" class="form-control" id="price" name="price" required>
      </div>
      <div class="form-group">
         <label for="description">Description:</label>
         <textarea class="form-control" id="description" name="description" required></textarea>
      </div>
      <div class="form-group">
         <label for="img">Image:</label>
         <input type="file" class="form-control-file" id="img" name="image" required>
      </div>
      <div class="form-group">
         <label for="meal_id">Meal Type:</label>
         <select class="form-control" id="meal_type" name="meal_id">
            <option value="1">Breakfast</option>
            <option value="2">Lunch</option>
            <option value="3">Dinner</option>
         </select>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Add Food</button>
   </form>
</div>

<?php require '../layouts/footer.php'; ?>