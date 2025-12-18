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

  function filterBooksByAuthor($books, $author)
  {
    $filteredBooks = [];
    foreach ($books as $book) {
      if ($book['author'] === $author) {
        $filteredBooks[] = $book;
      }
    }
    return $filteredBooks;
  }

  ?>


  <ul>
    <?php foreach (filterBooksByAuthor(books: $books, author: 'Musa bin ‘Uqbah') as $book) : ?>
      <li>
        <a style="text-decoration:none" href="<?= $book['purchaseUrl']; ?>">
          <?= $book['title']; ?> (<?= $book['releaseYear']; ?> ) - By <?= $book['author']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>