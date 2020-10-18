<?php
//切り上げ
$x = 11.4;
echo ceil($x);
?>
<br>

<?php
//切り捨て
$x = 6.8;
echo floor($x);
?>
<br>

<?php
//四捨五入
$x = 10.3;
echo round($x);
?>
<br>

<?php
//円周率
echo pi();
function circleArea($r) {
  $circle_area = $r * $r * pi();
  echo $circle_area; 
  }
circleArea(5);
?>
<br>

<?php
//乱数
echo mt_rand(100, 150);
?>
<br>

<?php
//文字列の長さ
$str = "Hello";
echo strlen($str);
?>
<br>

<?php
//検索
$str = "shinnbunnshi";
echo strpos($str, "s");
?>
<br>

<?php
//文字の切り取り
$str = "shinnbunnshi";
echo substr($str, -6, 1);
?>
<br>

<?php
//置換
$str = "shinnbunnshi";
echo str_replace("bu", "BU", $str);
?>
<br>

<?php
//フォーマット化した文字列を出力
$name = "秋山選手";
$number = 5;
printf("%sは%d個目を食べきりました", $name, $number);
?>
<br>

<?php
//変数に代入できるprintf
$hour = 1;
$minute = 30;
$time = sprintf("今日の勉強時間は%02d時間%02d分", $hour, $minute);
echo $time;
?>