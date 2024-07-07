<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use Capters\Capter9\src\SelfMade\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
  public function testBook()
  {
    $book = new Book('test');
    $this->assertEquals('test', $book->getName());
  }
}