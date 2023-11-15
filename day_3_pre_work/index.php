<?php
require_once "db_connect.php";

$sql = "SELECT * FROM products";

$result = mysqli_query($connect, $sql);

$cards = "";

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $cards  .= "<div class='my-2'>
                  <div class='card'>
                      <img src='pictures/{$row["picture"]}' class='card-img-top'  alt='...' >
                      <div class= 'card-body'>
                      <h5 class='card-title'>{$row["name"]}</h5>
                      <p class='card-text'>{$row["price"]}</p>
                      <a href='update.php?id={$row['id']}' class='btn btn-light me-2'>Update</a>
                      <a href='delete.php?id={$row["id"]}' class='btn btn-outline-danger'>Delete</a>
                  </div>
              </div>
            </div> ";
  }
} else {
  $cards = "<p No results found</p>";
}

mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>PHP CRUD</title>
</head>

<body>
  <?php require_once "navbar.php" ?>
  <div class="container m-100px py-4">
    <!-- <a class="btn btn-light" href="create.php">Create a product</a> -->

    <h1 class="my-4">Products List</h1>
    <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
      <?= $cards ?>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>