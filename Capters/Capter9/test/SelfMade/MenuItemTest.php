<?php
namespace Capters\Capter9\test\SelfMade;
require_once __DIR__ . '/../../../../vendor/autoload.php';

use Capters\Capter9\src\SelfMade\MenuItem;
use PHPUnit\Framework\TestCase;

class MenuItemTest extends TestCase
{
  public function testMenuItem()
  {
    $book = new MenuItem('test');
    $this->assertEquals('test', $book->getName());
  }
}