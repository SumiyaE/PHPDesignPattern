<?php

namespace Capters\Capter9\src\SelfMade\Interfaces;

interface AggregateInterface
{
  public function iterator(): IteratorInterface;
}