<?php

namespace Capters\Capter9\src;

use Capters\Capter9\src\SelfMade\MenuItem;
use Capters\Capter9\src\SelfMade\Menu;

require_once __DIR__ . '/../../../../vendor/autoload.php';

function main(): void
{
  $menu = new Menu();
  $menu->appendMenuItems(new MenuItem('menu-A'));
  $menu->appendMenuItems(new MenuItem('menu-B'));
  $menu->appendMenuItems(new MenuItem('menu-C'));
  $menu->appendMenuItems(new MenuItem('menu-D'));

  // for文へのアクセス方法をクライアントが知っている
  // menuの内部構造が変わる場合、たとえば連想配列に変更した場合、クライアントも更する必要がある
  // menuの列挙方法が変わる場合、たとえば逆順で取得したい場合、クライアントも変更する必要がある
  $menuItems = $menu->getMenuItems();
  for ($i = 0; $i < count($menuItems); $i++) {
    echo $menuItems[$i]->getName() . "\n";
  }

  $iterator = $menu->iterator();
  while ($iterator->hasNext()) {
    echo $iterator->next()->getName() . "\n";
  }

}

main();