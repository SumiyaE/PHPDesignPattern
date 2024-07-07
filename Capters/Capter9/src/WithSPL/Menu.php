<?php

namespace Capters\Capter9\src\WithSPL;


use IteratorAggregate;
use ArrayIterator;
use Traversable;

class Menu implements IteratorAggregate
{
  /** @var MenuItem[] */
  private array $menuItems;

  public function appendMenuItem(MenuItem $book): void
  {
    $this->menuItems[] = $book;
  }

  public function getMenuItems(): array
  {
    return $this->menuItems;
  }

  public function getIterator() : Traversable
  {
    return new ArrayIterator($this->menuItems);
  }

  public function getEnglishIterator(): Traversable
  {
    return new EnglishMenuFilter($this->getIterator());
  }
}