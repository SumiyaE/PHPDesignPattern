<?php

namespace Capters\Capter9\src\WithSPL;


use IteratorAggregate;
use ArrayIterator;
use Traversable;

class BookShelf implements IteratorAggregate
{
  /** @var Book[] */
  private array $books;

  public function appendBook(Book $book): void
  {
    $this->books[] = $book;
  }

  public function getBooks(): array
  {
    return $this->books;
  }

  public function getIterator() : Traversable
  {
    return new ArrayIterator($this->books);
  }

  public function getEnglishIterator(): Traversable
  {
    return new EnglishBookFilter($this->getIterator());
  }
}