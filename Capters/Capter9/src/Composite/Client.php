<?php

namespace Capters\Capter9\src\Composite;

require_once __DIR__ . '/../../../../vendor/autoload.php';

function main(): void
{
  $menu = new Menu();
  $menu->appendMenuItem(new MenuItem('menu-A'));
  $menu->appendMenuItem(new MenuItem('menu-B'));
  $menu->appendMenuItem(new MenuItem('menu-C'));
  $menu->appendMenuItem(new MenuItem('menu-D'));
  $menu->appendMenuItem(new MenuItem('menu-E', false));
  $menu->appendMenuItem(new MenuItem('menu-F', false));

  // for文へのアクセス方法をクライアントが知っている
  // booksの内部構造が変わる場合、たとえば連想配列に変更した場合、クライアントも更する必要がある
  // booksの列挙方法が変わる場合、たとえば逆順で取得したい場合、クライアントも変更する必要がある
  $menuItems = $menu->getMenuItems();
  for ($i = 0; $i < count($menuItems); $i++) {
    echo $menuItems[$i]->getName() . "\n";
  }

//  $iterator = $menu->getIterator();
//  while ($iterator->hasNext()) {
//    echo $iterator->next()->getName() . "\n";
//  }
  echo '---' . "\n";
  // BookShelfをforeachで回すことで、Bookshelf内部のiteratorにアクセスすることができる
  foreach ($menu as $menuItem) {
    echo $menuItem->getName() . "\n";
  }

  echo '---' . "\n";
  $iterator = $menu->getIterator();
  foreach ($iterator as $menuItem) {
    echo $menuItem->getName() . "\n";
  }

  echo '---onlyEnglish---' . "\n";
  $englishMenuIterator = $menu->getEnglishIterator();
  foreach ($englishMenuIterator as $englishMenuItem) {
    echo $englishMenuItem->getName() . "\n";
  }

}

main();