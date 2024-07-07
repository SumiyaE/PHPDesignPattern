<?php

namespace Capters\Capter9\src\Interfaces;

interface AggregateInterface
{
  public function iterator(): IteratorInterface;
}