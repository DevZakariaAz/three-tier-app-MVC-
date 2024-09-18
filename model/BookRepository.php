<?php
require_once '../model/Book.php';

class BookRepository {
    private $dataFile;

    public function __construct($dataFile) {
        $this->dataFile = $dataFile;
    }

    public function getAllBooks() {
        $json = file_get_contents($this->dataFile);
        $booksData = json_decode($json, true);
        $books = [];
        foreach ($booksData as $bookData) {
            $books[] = new Book($bookData['id'], $bookData['title'], $bookData['author']);
        }
        return $books;
    }
}
?>
