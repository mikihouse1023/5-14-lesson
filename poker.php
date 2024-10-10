<?php
class Poker_Hand {
    private $card;
    private $judge;

    public function __construct($suit1, $number1) {
        $this->card = [
            ['suit' => $suit1, 'number' => $number1],
            // 他のカード情報は後で追加できます
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $suit1 = $_POST['suit1'] ?? '';
    $number1 = $_POST['number1'] ?? '';

    // 画像のパスを構成
    $imagePath = "images/{$suit1}/{$number1}.png";

    // index.phpに戻り画像を置き換えるためのスクリプトを出力
    echo "<form id='redirectForm' action='index.php' method='post' style='display:none;'>
            <input type='hidden' name='imagePath' value='{$imagePath}'>
          </form>
          <script>
            document.getElementById('redirectForm').submit();
          </script>";
}
