<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <title>دفترچه یادداشت</title>
</head>
<body>
<div class="container"> 
<form method="post" action="login.php"class="form-horizontal" >
        <h2>فرم ورود به دفترچه یادداشت</h2>
        <div class="form-group">
        <label for="fname" class="control-label col-sm-2">نام</label> 
        <div class="col-sm-10"> 
          <input type="text" name="fname" id="fname" class="form-control" placeholder="نام"> 
        </div>
      </div>
        <div class="form-group">
        <label for="psw" class="control-label col-sm-2">رمز عبور</label>
        <div class="col-sm-10">
          <input type="password" name="psw" id="psw" class="form-control" placeholder="رمز عبور">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2"> 
          <button type="submit" name="submit" class="btn btn-primary"> ورود</button> 
        </div>
      </div>    
</div>
    </form>

    <?php
        require 'connection.php';

        session_start(); // شروع یک سشن جدید

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            require 'connection.php'; // فایل اتصال به دیتابیس 

            $username = $_POST['fname'];
            $password = $_POST['psw'];

            // بررسی صحت نام کاربری و رمز عبور
            $sql = "SELECT * FROM signup WHERE email = '$username' and psw = '$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){ // اگر اطلاعات ورودی صحیح بود
                $row = mysqli_fetch_assoc($result);

                $_SESSION['loggedin'] = true; // تنظیم وضعیت لاگین کاربر
                $_SESSION['email'] = $username; // ذخیره نام کاربری در سشن

                header("Location: index.php"); // انتقال به صفحه داشبورد
            }
            else{ // در غیر این صورت
                echo '<script>alert("نام کاربری یا رمز عبور نامعتبر است.")</script>';
            }
        }
    ?>


  <a href="signup.php" class="btn btn-secondary">حساب کاربری ندارید ازینجا ثبت نام کنید  </a>

  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</html>