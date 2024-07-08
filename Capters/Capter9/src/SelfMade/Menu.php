<?php

namespace Capters\Capter9\src\SelfMade;


use Capters\Capter9\src\SelfMade\Interfaces\AggregateInterface;
use Capters\Capter9\src\SelfMade\Interfaces\IteratorInterface;

// ConcreteAggregateに相当する
class Menu implements AggregateInterface
{
  /** @var MenuItem[] */
  private array $menuItems;

  public function getLength(): int
  {
    return count($this->menuItems);
  }

  public function appendMenuItems(MenuItem $MenuItems): void
  {
    $this->menuItems[] = $MenuItems;
  }

  public function getMenuItems(): array
  {
    return $this->menuItems;
  }

  public function getMenuItemsAt(int $index): MenuItem
  {
    return $this->menuItems[$index];
  }

  public function iterator(): IteratorInterface
  {
    return new MenuIterator($this);
  }
}