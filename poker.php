<?php
class Poker_Hand {
    private $card;
    private $judge;

    public function __construct($suit1,$number1,$suit2,$number2,
    $suit3,$number3,$suit4,$number4,$suit5,$number5) {
        $this->card = [
            ['suit' => $suit1, 'number' => $number1],
            ['suit' => $suit2, 'number' => $number2],
            ['suit' => $suit3, 'number' => $number3],
            ['suit' => $suit4, 'number' => $number4],
            ['suit' => $suit5, 'number' => $number5],
        ];
    }

    public function getPokerHandJudge() {
        return $this->judge;
    }

    public function setPokerHandJudge() {
        // 役の判定ロジックをここに記述
    }

    public function getCard() {
        return $this->card;
    }

    private function cardSort($hand) {
        // 手札をソートするロジックをここに記述
    }

    private function fraudJudge() {
        // 不正チェックのロジックをここに記述
    }
}

// フォームからデータを受け取る
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $suits = ['suit1', 'suit2', 'suit3', 'suit4', 'suit5'];
    $numbers = ['number1', 'number2', 'number3', 'number4', 'number5'];

    $inputSuits = array_map(fn($s) => $_POST[$s] ?? '', $suits);
    $inputNumbers = array_map(fn($n) => $_POST[$n] ?? '', $numbers);

    $pokerHand = new Poker_Hand(
        $inputSuits[0], $inputNumbers[0],
        $inputSuits[1], $inputNumbers[1],
        $inputSuits[2], $inputNumbers[2],
        $inputSuits[3], $inputNumbers[3],
        $inputSuits[4], $inputNumbers[4]
    );

    // カード情報を取得
    $cards = $pokerHand->getCard();

    // カード画像を表示
    foreach ($cards as $card) {
        $suit = $card['suit'];
        $number = $card['number'];
        if ($suit && $number) {
            echo "<img src='images/{$suit}/{$number}.png' alt=''>";
        }
    }
}
?>
