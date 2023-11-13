<?php require_once('db_connect.php');

$sql = "SELECT * FROM products";


// fetch_all()
$result = mysqli_query($connect, $sql);

// OOP way:
// $rows = $result->fetch_all(MYSQLI_ASSOC);

// Procedural way:
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row) {
  echo  "<p>" . $row['name'] . " " . $row['price'] . "</p>";
}

// echo "<pre>";
// echo var_dump($result);
// echo "</pre>";

// fetch_array()
$result2 = mysqli_query($connect, $sql);

while ($row  = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {

  echo  "<p>{$row['name']} {$row['price']}</p>";
}


// fetch_assoc()
$result3 = mysqli_query($connect, $sql);

$cards = "";

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result3)) {
    $cards  .= "<div>
              <div class='card'>
                  <img src='pictures/{$row["picture"]}'  class='card-img-top'  alt='...' >
                  <div class= 'card-body' >
                  <h5 class='card-title' >{$row["name"]}</h5>
                  <p class='card-text' >{$row["price"]}</p>
                  <a href='#' class='btn btn-light'>Go somewhere</a>
              </div>
          </div>
        </div> ";
  }
} else {
  $cards =  " <p> No  results found </p> ";
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
  <div class="container my-5">
    <a class="btn btn-outline-secondary" href="create.php">Create a product</a>

    <h1 class="my-3">Products List</h1>
    <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">

      <?= $cards ?>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>