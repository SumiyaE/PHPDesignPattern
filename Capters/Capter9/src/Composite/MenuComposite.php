<?php

namespace Capters\Capter9\src\Composite;

class MenuComposite extends MenuComponent
{
  private array $menuItems;

  public function __construct(string $name, string $description)
  {
    parent::__construct($name, $description);
    $this->menuItems = [];
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

  public function dump(): void
  {
    echo "============================\n";
    echo "【".$this->getName().":" . $this->getDescription() ."】\n";
    foreach ($this->menuItems as $entry) {
      $entry->dump();
    }
    echo "============================\n";
  }
}