<?php

namespace test;

use PHPUnit\Framework\TestCase;
use src\MenuItem;

class MenuItemTest extends TestCase
{
  public function testMenuItem(): void
  {
    $menuItem = new MenuItem('Pancake', 'Pancake with butter', false, 2.99);
    $this->assertEquals('Pancake', $menuItem->name);
    $this->assertEquals('Pancake with butter', $menuItem->description);
    $this->assertFalse($menuItem->vegetarian);
    $this->assertEquals(2.99, $menuItem->price);
  }

}