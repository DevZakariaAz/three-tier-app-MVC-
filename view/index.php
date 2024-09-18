<?php
require_once '../model/BookRepository.php';

// Path to the JSON data file
$dataFile = '../data/books.json';
$bookRepository = new BookRepository($dataFile);

// Get all books
$books = $bookRepository->getAllBooks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
</head>
<body>
    <h1>List of Books</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?php echo htmlspecialchars($book->title); ?> by <?php echo htmlspecialchars($book->author); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
