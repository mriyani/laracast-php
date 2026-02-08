<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Functions and Filters</title>

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
      'releaseYear' => 1964,
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'title' => "Sirah",
      'author' => "Musa bin ‘Uqbah",
      'releaseYear' => 1995,
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'title' => "Hadith",
      'author' => "Musa bin ‘Uqbah",
      'releaseYear' => 1998,
      'purchaseUrl' => 'http://example.com'
    ]
  ];

  // Custome filter function using anonymous function (lambda)

  // function filter($items, $fn)
  // {

  //   $filteredItems = [];

  //   foreach ($items as $item) {
  //     if ($fn($item)) {
  //       $filteredItems[] = $item;
  //     }
  //   }

  //   return $filteredItems;
  // };


  // Using built-in array_filter with anonymous function (lambda)

  $filteredBooks = array_filter(array: $books, callback: function ($book) {
    return $book['author'] === 'Musa bin ‘Uqbah';
  });

  ?>


  <ul>
    <?php foreach ($filteredBooks as $book) : ?>
      <li>
        <a style="text-decoration:none" href="<?= $book['purchaseUrl']; ?>">
          <?= $book['title']; ?> (<?= $book['releaseYear']; ?> ) - By <?= $book['author']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>