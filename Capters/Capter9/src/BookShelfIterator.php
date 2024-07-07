<?php

namespace Capters\Capter9\src;

use Capters\Capter9\src\Interfaces\IteratorInterface;

class BookShelfIterator implements IteratorInterface
{
  private $bookShelf;
  private $index;

  public function __construct(BookShelf $bookShelf)
  {
    $this->bookShelf = $bookShelf;
    $this->index = 0;
  }

  public function hasNext(): bool
  {
    return $this->index < $this->bookShelf->getLength();
  }

  public function next(): object
  {
    $book = $this->bookShelf->getBookAt($this->index);
    $this->index++;

    return $book;
  }
}