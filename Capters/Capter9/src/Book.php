<?php

namespace Capters\Capter9\src;

class Book
{
  private string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }
}