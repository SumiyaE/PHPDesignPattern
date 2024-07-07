<?php

namespace Capters\Capter9\src\SelfMade;

class Book
{
  private readonly string $name;
  private readonly bool $isEnglish;

  public function __construct(string $name, bool $isEnglish = true)
  {
    $this->name = $name;
    $this->isEnglish = $isEnglish;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function isEnglish(): string
  {
    return $this->isEnglish;
  }

}