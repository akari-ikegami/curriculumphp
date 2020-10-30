<?php
// ループ文 × 条件分岐

// サイコロを降った回数
$count = 0;
// すごろくのマス目
$masu = 40;
while(true){
  // サイコロを一回ずつフル
  $count ++;
  // サイコロをフル
  $i = mt_rand(1,6);
  // 降っためを足して４０マスから引いていく
  $masu = $masu - $i;
  echo $count."回目=". $i."<br>";
  if($masu <= 0){
    break;
  }
}
echo "合計".$count."回でゴールしました";
?>

<br>
<br>

<?php
// 関数 × 条件分岐

// $today = getdate();
// $timestamp = time();
date_default_timezone_set('Asia/Tokyo');
$time = intval(date('H'));
echo "今".date("H")."時台です"."<br>";
if(date("H")>=5 and date("H")<11){
  echo "おはようございます";
}else if(date("H")>=12 and date("H")<17){
  echo "こんにちは";
}else{
  echo "こんばんは"; 
}

