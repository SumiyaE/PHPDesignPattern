<?php

namespace Capters\Capter9\src\Composite;

require_once __DIR__ . '/../../../../vendor/autoload.php';

function main(): void
{
  // 全てのメニューの親となるComponent
  $allMenus = new MenuComposite('all menus', 'this is all menus');

  // メインディッシュのメニュー
  $mainMenu = new MenuComposite('main dish', 'this is main');

  // メインディッシュにメニューを追加
  $mainMenu->add(new MenuItem('menu-A', 'this menu is menu-A', 100, true));
  $mainMenu->add(new MenuItem('menu-B', 'this menu is menu-B', 200, false));
  $mainMenu->add(new MenuItem('menu-C', 'this menu is menu-C', 300, true));
  $mainMenu->add(new MenuItem('menu-D', 'this menu is menu-D', 400, false));
  $mainMenu->add(new MenuItem('menu-E', 'this menu is menu-E', 500, true));
  $mainMenu->add(new MenuItem('menu-F', 'this menu is menu-F', 600, false));

  // デザートのメニュー
  $dessertMenu = new MenuComposite('dessert', 'this is dessert');

  // デザートにメニューを追加
  $dessertMenu->add(new MenuItem('menu-G', 'this menu is menu-G', 700, true));
  $dessertMenu->add(new MenuItem('menu-H', 'this menu is menu-H', 800, false));
  $dessertMenu->add(new MenuItem('menu-I', 'this menu is menu-I', 900, true));
  $dessertMenu->add(new MenuItem('menu-J', 'this menu is menu-J', 1000, false));


  // メインディッシュとデザートを全てのメニューに追加
  $allMenus->add($mainMenu);
  $allMenus->add($dessertMenu);


  $allMenus->dump();
}

main();