<?php

namespace src;

class MenuItem
{

  public function __construct(
    public readonly string $name,
    public readonly string $description,
    public readonly bool   $vegetarian,
    public readonly float  $price
  )
  {
  }
}