<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$port = array(80,22,20,21);
$language = array("PHP","Python","JAVA","HTML");
$comand = array("join","select","insert","update");

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$port_answer = $port[0];
$language_answer = $language[3];
$comand_answer = $comand[1];

?>
<p>お疲れ様です<?php echo $name?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($port as $value){ ?>
  <input type="radio" name="port" value="<?php echo $value; ?>" /><?php echo $value; ?><br>
<?php } ?>
<input type="hidden" name="port_answer" value="<?php echo $port_answer ?>">

<h2>②Webページを作成するための言語は？</h2>
<?php foreach($language as $value){ ?>
  <input type="radio" name="language" value="<?php echo $value; ?>" /><?php echo $value; ?><br>
<?php } ?>
<input type="hidden" name="language_answer" value="<?php echo $language_answer ?>">

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php foreach($comand as $value){ ?>
  <input type="radio" name="comand" value="<?php echo $value; ?>" /><?php echo $value; ?><br>
<?php } ?>
<input type="hidden" name="comand_answer" value="<?php echo $comand_answer ?>">

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="submit" value="回答する">

</form>