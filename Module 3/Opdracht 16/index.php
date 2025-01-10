<?php

require_once ('Book.php');
require_once ('BookCatalog.php');

session_start();

$catalog = isset($_SESSION['catalog']) ? $_SESSION['catalog'] : new BookCatalog();

if (!empty($_POST['title'])) {
    $price = !empty($_POST['price']) ? $_POST['price'] : 15.95;
    $book = new Book($_POST['title'], $_POST['author'], $price);
    $catalog->addBook($book);
} else {
    ?>
    <form action="index.php" method="POST">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="author" placeholder="Author">
        <input type="text" name="price" placeholder="Price">
        <input type="submit" value="Add Book">
    </form>
    <?php
}

$_SESSION['catalog'] = $catalog;