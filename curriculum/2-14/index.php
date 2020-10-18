<?php ?>
<br>

<?php 
// 要素の数を数える
$fruits = ["apple", "orange", "peach"];
echo count($fruits);
?>
<br>

<?php 
// 要素の並べ替え
$numbers = [5, 100, 25, 33, 66];
sort($numbers);
var_dump($numbers);
?>
<br>

<?php 
// 配列に中にある要素が存在しているか
$fruits = ["apple", "orange", "peach"];
if(in_array("peach", $fruits)){
  echo "桃があります";
}else{
  echo "桃はありません";
};
?>
<br>

<?php 
// 配列を結合して文字列に変換
$fruits = ["apple", "orange", "peach"];
$atstr = implode("/", $fruits);
var_dump($atstr);
?>
<br>

<?php 
// 文字列を指定の区切りで配列にする
$fruits = ["apple", "orange", "peach"];
$atstr = implode("/", $fruits);
$re_fruits = explode("/", $atstr);
var_dump($re_fruits);
?>
<br>
