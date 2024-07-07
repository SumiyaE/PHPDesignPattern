<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use Capters\Capter9\src\SelfMade\Book;
use Capters\Capter9\src\SelfMade\BookShelf;
use PHPUnit\Framework\TestCase;

class BookShelfTest extends TestCase
{
  public function testBookShelf()
  {
    $bookShelf = new BookShelf();
    $book = new Book('test');
    $bookShelf->appendBook($book);
    $this->assertEquals(1, $bookShelf->getLength());
  }
}