<?php

namespace src;

class PancakeHouseMenu
{
  /** @var MenuItem[] */
  private array $menuItems = [];

  public function __construct()
  {
    $this->menuItems = array();
  }

  public function addItem(string $name, string $description, bool $vegetarian, float $price): void
  {
    $menuItem = new MenuItem($name, $description, $vegetarian, $price);
    $this->menuItems[] = $menuItem;
  }
}