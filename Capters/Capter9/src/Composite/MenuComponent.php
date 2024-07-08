<?php
namespace Capters\Capter9\src\Composite;
/**
 * Componentクラスに相当する
 */
abstract class MenuComponent
{

  protected readonly string $name;
  protected readonly string $description;

  public function __construct(string $name, string $description)
  {
    $this->name = $name;
    $this->description = $description;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * 子要素を追加する
   * ここでは抽象メソッドとして用意
   */
  public abstract function add(MenuComponent $menuComponent);

  /**
   * メニューを表示する
   * サンプルでは、デフォルトの実装を用意
   */
  public abstract function echo(): void;
}
