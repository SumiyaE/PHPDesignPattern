<?php

namespace Capters\Capter9\src\Composite;
use IteratorAggregate;
use Traversable;
use ArrayIterator;

class Menu extends MenuComponent implements IteratorAggregate
{
  private array $menuItems;

  public function __construct(string $name, string $description)
  {
    parent::__construct($name, $description);
    $this->menuItems = [];
  }

  public function getIterator() : Traversable
  {
    return new ArrayIterator($this->menuItems);
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function add(MenuComponent $menuComponent): void
  {
    $this->menuItems[] = $menuComponent;
  }

  public function echo(): void
  {
    echo "============================\n";
    echo "【".$this->getName().":" . $this->getDescription() ."】\n";
    foreach ($this as $entry) {
      $entry->echo();
    }
    echo "============================\n";
  }
}