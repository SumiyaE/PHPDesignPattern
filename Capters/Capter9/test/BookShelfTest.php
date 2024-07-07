<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use Capters\Capter9\src\SelfMade\MenuItem;
use Capters\Capter9\src\SelfMade\Menu;
use PHPUnit\Framework\TestCase;

class BookShelfTest extends TestCase
{
  public function testBookShelf()
  {
    $bookShelf = new Menu();
    $book = new MenuItem('test');
    $bookShelf->appendBook($book);
    $this->assertEquals(1, $bookShelf->getLength());
  }
}