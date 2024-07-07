<?php

namespace Capters\Capter9\src\SelfMade\Interfaces;
interface IteratorInterface
{
  public function hasNext(): bool;

  public function next(): object;
}