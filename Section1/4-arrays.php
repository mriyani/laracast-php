<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Arrays</title>

  <style>
    body {
      display: grid;
      place-items: center;
      /* height: 100vh; */
      margin: 0;
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>

  <h1>Recommended Books</h1>

  <?php
  $books = [
    [
      'title' => "Tafseer",
      'author' => "Al-Jalalayn",
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'title' => "Sirah",
      'author' => "Musa bin ‘Uqbah",
      'purchaseUrl' => 'http://example.com'
    ]
  ];

  ?>


  <ul>
    <?php foreach ($books as $book) : ?>
      <li>
        <a style="text-decoration:none" href="<?= $book['purchaseUrl'] ?>">
          <?= $book['title'] ?> by <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>