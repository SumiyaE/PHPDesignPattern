<?php

namespace Capters\Capter9\src;

use Capters\Capter9\src\Interfaces\IteratorInterface;

class BookShelfIterator implements IteratorInterface
{
  private BookShelf $bookShelf;
  private int $index;

  public function __construct(BookShelf $bookShelf)
  {
    $this->bookShelf = $bookShelf;
    $this->index = 0;
    // $this->index = this->bookShelf->getLength() - 1;
  }

  public function hasNext(): bool
  {
    return $this->index < $this->bookShelf->getLength();
    // return $this->index >= 0;
  }

  public function next(): object
  {
    $book = $this->bookShelf->getBookAt($this->index);
    $this->index++;
    // $this->index--;

    return $book;
  }
}