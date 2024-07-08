<?php
namespace Capters\Capter9\test\SelfMade;
require_once __DIR__ . '/../../../../vendor/autoload.php';

use Capters\Capter9\src\SelfMade\Menu;
use Capters\Capter9\src\SelfMade\MenuItem;
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase
{
  public function testBookShelf()
  {
    $menu = new Menu();
    $menuItem = new MenuItem('test');
    $menu->appendMenuItems($menuItem);
    $this->assertEquals(1, $menu->getLength());
  }
}