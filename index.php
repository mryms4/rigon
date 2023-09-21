<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>دفترچه یادداشت</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>

<?php
require 'connection.php';

session_start();


// دریافت یادداشت‌ها از دیتابیس
$sql = "SELECT * FROM note";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error fetching notes: " . mysqli_error($conn));
}
?>

    <h1 class="text-center">دفترچه یادداشت</h1>
    <?php 
    if (!isset($_SESSION['user_id'])) {
        header('Location: signup.php');
        exit();
    }else{
        
        echo '<h2> hi ' . $_SESSION['user_id'] .'</h2> <a href="logout.php" class="btn btn-secondary">خارج شدن</a>';
    }
    ?>
    
    <div class="container">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <!-- نمایش اطلاعات هر یادداشت -->
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <p class="card-text"><?php echo $row['content']; ?></p>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">ویرایش</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">حذف</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php
// بستن اتصال به دیتابیس
mysqli_close($conn);
?>

    <!-- لینک رفتن به قسمت اضافه کردن یادداشت جدید -->
    <div class="text-center mt-4">
        <a href="add.php" class="btn btn-secondary">اضافه کردن یادداشت جدید</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</html>
