<?php

namespace Capters\Capter9\src;
require_once __DIR__ . '/../../../vendor/autoload.php';

function main(): void
{
  $bookShelf = new BookShelf();
  $bookShelf->appendBook(new Book('book-A'));
  $bookShelf->appendBook(new Book('book-B'));
  $bookShelf->appendBook(new Book('book-C'));
  $bookShelf->appendBook(new Book('book-D'));

  $iterator = $bookShelf->iterator();
  while ($iterator->hasNext()) {
    echo $iterator->next()->getName() . "\n";
  }

  $books = $bookShelf->getBooks();
  for ($i = 0; $i < count($books); $i++) {
    echo $books[$i]->getName() . "\n";
  }
}

main();