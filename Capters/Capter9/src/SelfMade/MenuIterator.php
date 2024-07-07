<?php

namespace Capters\Capter9\src\SelfMade;

use Capters\Capter9\src\SelfMade\Interfaces\IteratorInterface;

class MenuIterator implements IteratorInterface
{
  private Menu $menu;
  private int $index;

  public function __construct(Menu $menu)
  {
    $this->menu = $menu;
    $this->index = 0;
    // $this->index = this->menu->getLength() - 1;
  }

  public function hasNext(): bool
  {
    return $this->index < $this->menu->getLength();
    // return $this->index >= 0;
  }

  public function next(): object
  {
    $menuItems = $this->menu->getmenuItemsAt($this->index);
    $this->index++;
    // $this->index--;

    return $menuItems;
  }
}