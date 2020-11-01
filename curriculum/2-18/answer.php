<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$port = $_POST['port'];
$language = $_POST['language'];
$comand = $_POST['comand'];

$port_answer = $_POST['port_answer'];
$language_answer = $_POST['language_answer'];
$comand_answer = $_POST['comand_answer'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
if($port == $port_answer){
	$port_result = "正解！";
}else{
	$port_result  = "残念･･･";
}
if($language== $language_answer){
	$language_result = "正解！";
}else{
	$language_result = "残念･･･";
}
if($comand == $comand_answer){
	$comand_result = "正解！";
}else{
	$comand_result = "残念･･･";
}

?>
<p><?php echo $name?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $port_result ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $language_result ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $comand_result ?>

