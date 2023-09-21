<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>دفترچه یادداشت</title>
  <!-- لینک کتابخانه بوت استرپ جهت استایل دهی -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<?php
require 'connection.php';

// اگر دکمه‌ی submit فرم فشرده شده است، یادداشت‌ی جدید به دیتابیس اضافه می‌شود
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // افزودن یک رکورد جدید به جدول notes
    $sql = "INSERT INTO note (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error adding note: " . $conn->error;
    }
}
?>


<h1 class="text-center">اضافه کردن یادداشت جدید</h1>

<!-- فرم اضافه کردن یادداشت جدید -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-sm-12">
      <form method="post">
          <div class="mb-3">
            <label for="title" class="form-label">عنوان یادداشت</label>
            <input type="text" class="form-control" name="title" id="title">
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">توضیحات یادداشت</label>
            <textarea class="form-control" name="content" id="content"></textarea>
          </div>
          <div class="d-grid">
            <button class="btn btn-primary" type="submit">ثبت</button>
          </div>
      </form>
    </div>
  </div>
</div>

<?php
// بستن اتصال به دیتابیس
mysqli_close($conn);
?>

<!-- لینک رفتن به قسمت یادداشت ها -->
<div class="text-center mt-4">
  <a href="index.php" class="btn btn-secondary">رفتن به لیست یادداشت ها</a>
</div>

<!-- جهت استفاده از کدهای جاوااسکریپت بوت استرپ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>