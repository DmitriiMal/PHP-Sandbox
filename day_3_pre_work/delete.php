<?php
require_once "db_connect.php";

$id = $_GET["id"];
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
if ($row["picture"] != "product.png") {
  unlink("pictures/$row[picture]");
}

$delete = "DELETE FROM products WHERE id = $id";

if (mysqli_query($connect, $delete)) {
  header("Location: index.php");
} else {
  echo "Error";
};

mysqli_close($connect);
