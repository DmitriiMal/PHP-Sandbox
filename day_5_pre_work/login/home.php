<?php
session_start(); // creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.

if (!isset($_SESSION["user"]) && !isset($_SESSION["adm"])) { // if the session user and the session adm have no value
  header("Location: login.php"); // redirect the user to the home page
}

if (isset($_SESSION["adm"])) { // if a session "adm" is exist and have a value
  header("Location: dashboard.php"); // redirect the user to the dashboard page
}

require_once "db_connect.php";

$sql = "SELECT * FROM users WHERE id = {$_SESSION["user"]}"; // selecting logged-in user details from the session user

$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome <?= $row["first_name"] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="pictures/<?= $row["picture"] ?> " alt="user pic" width="30" height="30">
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update.php?id=<?= $row["id"] ?> ">edit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php?logout">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <h2 class="text-center">Welcome <?= $row["first_name"] . " " . $row["last_name"] ?></h2>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>