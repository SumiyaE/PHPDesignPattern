<?php

namespace Capters\Capter9\src;


use Capters\Capter9\src\Interfaces\AggregateInterface;
use Capters\Capter9\src\Interfaces\IteratorInterface;

class BookShelf implements AggregateInterface
{
  /** @var Book[] */
  private array $books;

  public function getLength(): int
  {
    return count($this->books);
  }

  public function appendBook(Book $book): void
  {
    $this->books[] = $book;
  }

  public function getBooks(): array
  {
    return $this->books;
  }

  public function getBookAt(int $index): Book
  {
    return $this->books[$index];
  }

  public function iterator(): IteratorInterface
  {
    return new BookShelfIterator($this);
  }
}

function main()
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