<?php
/*
プログラム
1,[CARD1]~[CARD5]全てに大小2つのドロップダウンメニューが実装されている。
クリックすることで、複数の選択肢が表示され
(大,[spade],[heart],[diamond],[club])、
(小,1,2,3,4,5,6,7,8,9,10,11,12,13)
選択したうえで[SEND]ボタンをクリックすると、選択した数値がそれぞれのカードに反映される。


2,1で選択しSENDボタンをクリックし、表示されているカードが更新されるたびに、、
カードの組み合わせが、ポーカーのどの役に当たるのか判定する。

実装するシステム
・選択内容をカードに反映させるようにする。
カード内容をプロパティ


〇カード更新のたびに、ポーカーのどの役に当たるのかを判定
・特定の組み合わせに該当する役を設定する
*/
class Poker_Hand{
//[CARD1]~[CARD5]のスートと番号を入力する
private $card=[
   ['suit' => $suit1, 'number' => $number1],
    ['suit' => $suit2, 'number' => $number2],
    ['suit' => $suit3, 'number' => $number3],
    ['suit' => $suit4, 'number' => $number4],
    ['suit' => $suit5, 'number' => $number5],
];
//手札の役を入力する
private $judge;

//引数sult1~sult5とnumber1=number5の値を属性cardに入力する。
public function __construct($sult1,$number1,$suit2,$number2,
$suit3,$number3,$suit4,$number4,$suit5,$number5)
{
    
}
//属性judgeに入力されている値を取得する。
public function getPokerHandJudge(){

}
//選択されたカードから役判定を行う。
//判定された役は属性judgeに入力される。
public function setPokerHandJudge(){

}

//属性cardの値を取得する。
public function getCard(){

}

//handCreateメソッドから、生成した手札をソートする。
//$hand(手札を入力している連想配列)
private function cardSort($hand){

}

//ソートした手札に不正がないかをチェックする。
private function fraudJudge(){

}
}