<?php
echo "出力する数字を入力してください\n";
$m = fgets(STDIN);
echo "出力する桁数を指定してください\n";
$n = fgets(STDIN);
$num = rtrim($n);
echo sprintf("%0{$num}d", $m)."\n";
