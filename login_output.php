<?php session_start(); ?>

<?php require('db_connect.php'); ?>

<?php
	//userセッション変数を破棄
	unset($_SESSION['user']);
	//MySQLデータベースに接続する
	//SQL文を作る（プレースホルダを使った式）
	$sql = "select * from user where email = :email and password = :password";
	//プリペアードステートメントを作る
	$stm = $pdo->prepare($sql);
	//プリペアードステートメントに値をバインドする
	$stm->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
	$stm->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
	//SQL文を実行する
	$stm->execute();
	//結果の取得（連想配列で受け取る）
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);
	//userセッションの設定
	foreach ($result as $row) {
		$_SESSION['user'] = [
			'id'       => $row['id'],
			'name'     => $row['name'],
			'email'     => $row['email'],
			'password' => $row['password'],
		];
	}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="style.css"> -->
    <title>ログイン画面</title>
</head>
<body>


<div class="form-wrapper">
<?php
	if (isset($_SESSION['user'])) { 
?>

		<h2>ログインが完了しました</h2>
		<form action="home.php" method="post">
		<div class="button-panel">
				<input type="submit" class="button" title="Top" value="トップページへ"></input>
		</div>
		<form>
</div>
<?php 
	}else { ?>
<div class="form-wrapper2">	
	<h2>ログイン名またはパスワードが違います。</h2>
</div>
<?php 
}
?>

</div>

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400);

/* fontawesome */
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

/* Simple Reset */
* { margin: 0; padding: 0; box-sizing: border-box; }

/* body */
body {
  background: #e9e9e9;
  color: #5e5e5e;
  font: 400 87.5%/1.5em 'Open Sans', sans-serif;
}

.form-wrapper {
  /* background: #fafafa; */
  margin: 15em auto;
  padding: 0 1em;
  max-width: 370px;
  white-space: nowrap;
  text-align: center;
  /* height: 120px; */
}

.form-wrapper2 {
  /* background: #fafafa; */
  margin: 20em auto;
  padding: 0 1em;
  max-width: 370px;
  white-space: nowrap;
  text-align: center;
  /* height: 120px; */
}

.button-panel .button {
	background: #f16272;
  border: none;
  color: #fff;
  cursor: pointer;
  height: 50px;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.2em;
  letter-spacing: 0.05em;
  text-align: center;
  text-transform: uppercase;
  transition: background 0.3s ease-in-out;
  width: 80%;
  margin: 3em auto;

}

.button:hover {
  background: #ee3e52;
}


</style>
    
</body>
</html>