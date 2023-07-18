<?php
$word = "fuga";
for ($i = 1; $i <= 6; $i++) {
    if ($word == "hoge" && $i % 2 == 0) {
        echo "wordがhoge かつ " . $i . "は2の倍数です" . "<br>";
        continue;
    }

    if($word == "hoge" && $i % 2 == 1){
        echo "wordがhoge かつ " . $i . "は2の倍数以外です" . "<br>";
        continue;
    }
    if ($i % 2 == 0) {
        echo "wordがhogeでない かつ " . $i . "は2の倍数です" . "<br>";
        continue;
    }

    if($i % 2 == 1){
        echo "wordがhogeでない かつ " . $i . "は2の倍数以外です" . "<br>";
        continue;
    }
}
