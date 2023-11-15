<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
  <div class="container mt-5">
    <h2>Create a new product</h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" aria-describedby="price" name="price">
      </div>
      <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" class="form-control" id="picture" aria-describedby="picture" name="picture">
      </div>
      <button name="create" type="submit" class="btn btn-light">Create product</button>
      <a href="index.php" class="btn btn-outline-secondary">Back to home page</a>
    </form>
  </div>

</body>

</html>