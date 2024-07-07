<?php

namespace Capters\Capter9\src;

use Capters\Capter9\src\WithSPL\Book;
use Capters\Capter9\src\WithSPL\BookShelf;
use Capters\Capter9\src\WithSPL\EnglishBookFilter;

require_once __DIR__ . '/../../../../vendor/autoload.php';

function main(): void
{
  $bookShelf = new BookShelf();
  $bookShelf->appendBook(new Book('book-A'));
  $bookShelf->appendBook(new Book('book-B'));
  $bookShelf->appendBook(new Book('book-C'));
  $bookShelf->appendBook(new Book('book-D'));
  $bookShelf->appendBook(new Book('book-E', false));
  $bookShelf->appendBook(new Book('book-F', false));

  // for文へのアクセス方法をクライアントが知っている
  // booksの内部構造が変わる場合、たとえば連想配列に変更した場合、クライアントも更する必要がある
  // booksの列挙方法が変わる場合、たとえば逆順で取得したい場合、クライアントも変更する必要がある
  $books = $bookShelf->getBooks();
  for ($i = 0; $i < count($books); $i++) {
    echo $books[$i]->getName() . "\n";
  }

//  $iterator = $bookShelf->getIterator();
//  while ($iterator->hasNext()) {
//    echo $iterator->next()->getName() . "\n";
//  }
  echo '---' . "\n";
  // BookShelfをforeachで回すことで、Bookshelf内部のiteratorにアクセスすることができる
  foreach ($bookShelf as $book) {
    echo $book->getName() . "\n";
  }

  echo '---' . "\n";
  $iterator = $bookShelf->getIterator();
  foreach ($iterator as $book) {
    echo $book->getName() . "\n";
  }

  echo '---onlyEnglish---' . "\n";
  $englishBookIterator = $bookShelf->getEnglishIterator();
  foreach ($englishBookIterator as $englishBook) {
    echo $englishBook->getName() . "\n";
  }

}

main();