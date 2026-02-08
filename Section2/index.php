
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

// Using built-in array_filter with anonymous function (lambda)

$filteredBooks = array_filter(array: $books, callback: function ($book) {
    return $book['author'] === 'Musa bin ‘Uqbah';
});

require 'index.view.php';
