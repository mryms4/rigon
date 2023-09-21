<?php 
require 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دفترچه یادداشت</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container"> 
    <h1 class="text-center">فرم ثبت نام در دفترچه یادداشت</h1> 
    <form method="post" action="<?php echo $baseUrl ?>signup.php" class="form-horizontal"> 
      <div class="form-group mb-2">
        <label for="fname" class="control-label col-sm-2">نام</label> 
        <div class="col-sm-10"> 
          <input type="text" name="fname" id="fname" class="form-control" placeholder="نام"> 
        </div>
      </div>

      <div class="form-group mb-2">
        <label for="lname" class="control-label col-sm-2">نام خانوادگی</label>
        <div class="col-sm-10">

          <input type="text" name="lname" id="lname" class="form-control" placeholder="نام خانوادگی">
        </div>
      </div>

      <div class="form-group mb-2">
        <label for="phone" class="control-label col-sm-2">شماره تلفن</label>
        <div class="col-sm-10">
          <input type="text" name="phone" id="phone" class="form-control" placeholder="شماره تلفن">
        </div>
      </div>

      <div class="form-group mb-2">
        <label for="email" class="control-label col-sm-2">ایمیل</label>
        <div class="col-sm-10">
          <input type="text" name="email" id="email" class="form-control" placeholder="ایمیل">
        </div>
      </div>

      <div class="form-group mb-2">
        <label for="psw" class="control-label col-sm-2">رمز عبور</label>
        <div class="col-sm-10">
          <input type="password" name="psw" id="psw" class="form-control" placeholder="رمز عبور">
        </div>
      </div>

      <div class="form-group mb-2">
        <div class="col-sm-10 col-sm-offset-2"> 
          <button type="submit" name="submit" class="btn btn-primary">ثبت نام</button> 
        </div>
      </div>
    </form>
</div> <!-- بستن container -->
    

<?php



    require 'table.php';


    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname']; 
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $psw = $_POST['psw'];

        if (empty(trim($fname)) || empty(trim($lname)) || empty(trim($phone)) || empty(trim($email)) || empty(trim($psw))) {
            echo "<div class='alert alert-danger'>خطا: تمامی فیلدها را باید پر کنید.</div>";
            exit();
        }

    $sql = "INSERT INTO signup (fname, lname, phone, email, psw)
        VALUES ('$fname', '$lname', '$phone', '$email', '$psw')";


    $result = mysqli_query($conn, $sql);
    print_r("result:");
    print_r($result);
    if ($result) {
        mysqli_close($conn);
        header("Location: " . $baseUrl . "index.php");
        exit();
    } else {
        echo "خطا در ثبت اطلاعات: " . mysqli_error($conn);
    }

}
?> 

  
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</html>