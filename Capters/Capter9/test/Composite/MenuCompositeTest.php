<?php
namespace Capters\Capter9\test\Composite;
require_once __DIR__ . '/../../../../vendor/autoload.php';

use Capters\Capter9\src\Composite\MenuComposite;
use Capters\Capter9\src\Composite\MenuItem;
use PHPUnit\Framework\TestCase;

class MenuCompositeTest extends TestCase
{
  public function testMenuItem()
  {
    // public function __construct(string $name, string $description,  int $price,bool $isEnglish)
    $menuItem = new MenuItem('menu1', 'this menu is menu1', 100, true);
    $menuComposite = new MenuComposite('main dish', 'this is main');
    $menuComposite->add($menuItem);
    $this->assertEquals('main dish', $menuComposite->getName());
    $menuComposite->dump();
  }
}