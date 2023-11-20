<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>

  <nav>
    <input id="nav-toggle" type="checkbox" />
    <div class="logo">
      <img src="pictures/<?= $row["picture"] ?>" alt="user pic" width="30" height="30">
      <a href="/login/products/index.php"><strong>
          PHP CRUD</strong></a>
    </div>
    <ul class="links">
      <li><a href="/login/products/index.php">Products</a></li>
      <li><a href="/login/products/create.php">Create</a></li>
      <li><a href="/login/update.php?id=<?= $row["id"] ?> ">edit</a></li>
      <li><a href="/login/logout.php?logout">Logout</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>