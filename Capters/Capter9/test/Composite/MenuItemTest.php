<?php
namespace Capters\Capter9\test\Composite;
require_once __DIR__ . '/../../../../vendor/autoload.php';

use Capters\Capter9\src\Composite\MenuItem;
use PHPUnit\Framework\TestCase;

class MenuItemTest extends TestCase
{
  public function testMenuItem()
  {
    $menuItem = new MenuItem('test', 'test', 100, true);
    $this->assertEquals('test', $menuItem->getName());
    $this->assertEquals('test', $menuItem->getDescription());
    $this->assertEquals(100, $menuItem->getPrice());
    $this->assertTrue(true);
  }
}