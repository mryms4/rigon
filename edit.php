<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>دفترچه یادداشت</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
require 'connection.php';

// دریافت آیدی یادداشت از پارامتر URL
$id = $_GET['id'];

// دریافت اطلاعات یادداشت با استفاده از آیدی
$sql = "SELECT * FROM note WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error fetching note: " . mysqli_error($conn));
}

// اگر دکمه‌ی submit فرم فشرده شده است، اطلاعات یادداشت را به روز می‌کنیم
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // به روز کردن اطلاعات یادداشت با استفاده از آیدی
    $sql = "UPDATE note SET title='$title', content='$content' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
      echo "Note updated successfully";
    } else {
      echo "Error updating note: " . $conn->error;
    }
}

// نمایش فرم برای ویرایش یادداشت
while ($row = mysqli_fetch_assoc($result)) {
  echo '<div class="container">';
  echo ' <div class="row justify-content-center">';
  echo ' <div class="col-md-6 col-sm-12">';
  echo ' <form method="post">';
  echo ' <div class="mb-3">';
  echo ' <label for="title" class="form-label">عنوان یادداشت</label>';
  echo ' <input type="text" class="form-control" name="title" id="title">';
  echo ' </div>';
  echo ' <div class="mb-3">';
  echo ' <label for="content" class="form-label">توضیحات یادداشت</label>';
  echo ' <textarea class="form-control" name="content" id="content"></textarea>';
  echo ' </div>';
  echo ' <div class="d-grid">';
  echo ' <button class="btn btn-primary" type="submit">ثبت</button>';
  echo ' </div>';
  echo ' </form>';
  echo ' </div>';
  echo ' </div>';
  echo '</div>';
}

// بستن اتصال به دیتابیس
mysqli_close($conn);
?>


  
        <!-- لینک رفتن به قسمت یادداشت ها -->
        <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary">رفتن به لیست یادداشت ها </a>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</html>