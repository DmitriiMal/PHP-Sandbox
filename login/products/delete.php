<?php
session_start();

if (!isset($_SESSION["user"]) && !isset($_SESSION["adm"])) { // if the session user and the session adm have no value
  header("Location: ../login.php"); // redirect the user to the home page
}

if (isset($_SESSION["user"])) { // if a session "user" is exist and have a value
  header("Location: home.php"); // redirect the user to the user page
}
require_once "../db_connect.php";

$id = $_GET["id"];
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
if ($row["picture"] != "product.png") {
  unlink("../pictures/$row[picture]");
}

$delete = "DELETE FROM products WHERE id = $id";

if (mysqli_query($connect, $delete)) {
  header("Location: index.php");
} else {
  echo "Error";
};

mysqli_close($connect);
