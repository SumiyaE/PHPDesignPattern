<?php

namespace Capters\Capter9\src\SelfMade;


use Capters\Capter9\src\SelfMade\Interfaces\AggregateInterface;
use Capters\Capter9\src\SelfMade\Interfaces\IteratorInterface;

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