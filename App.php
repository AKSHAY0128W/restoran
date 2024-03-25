<?php require "config/config.php"; ?>
<?php
class App
{

   public $host = HOST;
   public $user = USER;
   public $pass = PASS;
   public $db = DBNAME;

   public $link;

   public function __construct()
   {
      $this->connect();
   }

   public function connect()
   {
      $this->link = new  PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);

      if ($this->link) {
         // echo "Connection Working";
      }
   }

   public function selectAll($query)
   {
      $row = $this->link->query($query);
      $row->execute();

      $singlerow = $row->fetchAll(PDO::FETCH_OBJ);

      if ($singlerow) {
         return $singlerow;
      } else {
         return false;
      }
   }

   public function selectone($query)
   {
      $row = $this->link->query($query);
      $row->execute();

      $allrow = $row->fetch(PDO::FETCH_OBJ);

      if ($allrow) {
         return $allrow;
      } else {
         return false;
      }
   }

   public function validate($arr)
   {
      if (in_array('', $arr)) {
         echo "empty field found";
      }
   }


   public function validateCart($q)
   {
      $row = $this->link->query($q);
      $row->execute();
      $count = $row->rowCount();
      return $count;

   }

   public function insert($query, $arr, $path)
   {
      if ($this->validate($arr)) {
         echo "<script>alert('empty field found')</script>";
      } else {
         $insert_record = $this->link->prepare($query);
         $insert_record->execute($arr);
         echo "<script> window.location.href = '" . $path . "'</script>";

      }
   }

   public function register($query, $arr, $path)
   {
      if ($this->validate($arr) == "empty") {
         echo "<script>alert('empty field found')</script>";
      } else {
         $register_user = $this->link->prepare($query);
         $register_user->execute($arr);
         header("location:" . $path."");
      }
   }

   public function login($query, $data, $path)
   {
      $login_user = $this->link->query($query);
      $login_user->execute();

      $fetch = $login_user->fetch(PDO::FETCH_ASSOC);
      if ($login_user->rowCount() > 0) {
          if (password_verify($data['password'], $fetch['password'])) {
             $_SESSION['email'] = $fetch['email'];
             $_SESSION['username'] = $fetch['username'];
            $_SESSION['user_id'] = $fetch['id'];
            
            header("location:" .$path."");
            

         }
      }
   }

   public function startingSession()
   {
      session_start();
   }

   public function validateSession()
   {
      if (!isset($_SESSION['user_id'])) {
         echo "<script> window.location.href = '" .APPURL. "'</script>";
      }
   }
   
   // public function validateSessionAdmin()
   // {
   //    if (!isset($_SESSION['email'])) {
   //       echo "<script> window.location.href = '" .ADMINURL. "/admins/login-admins.php'</script>";
   //    }
   // }
   

   public function update($query, $arr, $path)
   {
      if ($this->validate($arr)) {
         echo "<script>alert('empty field found')</script>";
      } else {
         $update_record = $this->link->prepare($query);
         $update_record->execute($arr);
         header("location:" . $path);
      }
   }

   public function delete($query, $params, $path)
   {
      $stmt = $this->link->prepare($query);
      $stmt->execute($params);
      echo "<script> window.location.href = '" . $path . "'</script>";
   }
}

$obj = new App;
