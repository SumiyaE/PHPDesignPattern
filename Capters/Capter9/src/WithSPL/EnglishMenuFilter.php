<?php

namespace Capters\Capter9\src\WithSPL;
use FilterIterator;

class EnglishMenuFilter extends FilterIterator
{

  // コンストラクタ
  public function __construct($iterator)
  {
    parent::__construct($iterator);
  }
  public function accept():bool
  {
    // getInnerIteratorメソッドで内部イテレータを取得する
    // currentメソッドで現在の要素の値を取得する
    // 両方ともFilterIteratorクラスのメソッド
    $menuItem = $this->getInnerIterator()->current();

    // isEnglishがtrueのものだけを返す
    return $menuItem->isEnglish();
  }
}