<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>دفترچه یادداشت</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

<?php
require 'connection.php';

// دریافت آیدی یادداشت از پارامتر URL
$id = $_GET['id'];

// حذف یادداشت با استفاده از آیدی
$sql = "DELETE FROM note WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Note deleted successfully";
} else {
  echo "Error deleting note: " . $conn->error;
}

// بستن اتصال به دیتابیس
mysqli_close($conn);
?>


  
        <!-- لینک رفتن به قسمت یادداشت ها -->
        <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary">رفتن به لیست یادداشت ها</a>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>