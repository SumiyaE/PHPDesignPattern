<?php

namespace Capters\Capter9\src\Composite;
use BadMethodCallException;

class MenuItem extends MenuComponent
{
  private readonly int $price;
  private readonly bool $isEnglish;

  public function __construct(string $name, string $description,  int $price,bool $isEnglish)
  {
    parent::__construct($name, $description);
    $this->price = $price;
    $this->isEnglish = $isEnglish;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function isEnglish(): string
  {
    return $this->isEnglish;
  }

  public function getPrice(): int
  {
    return $this->price;
  }

  public function add(MenuComponent $menuComponent)
  {
    throw new BadMethodCallException("MenuItemクラスには子要素を追加できません");
  }

  public function echo(): void
  {
    echo "    ".$this->getName().":" . $this->getDescription() ."\n";
    echo "    price:".$this->getPrice() . "円\n";
    echo "    ----------------\n";
  }
}