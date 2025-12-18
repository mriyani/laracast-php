<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Conditional and Booleans</title>

  <style>
    body {
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>

  <?php
  $book = "Jungle Book.";
  $read = true;
  ?>

  <h1>You have <?= $read ? "read" : "not read" ?> <?= "\"$book\"" ?></h1>

</body>

</html>