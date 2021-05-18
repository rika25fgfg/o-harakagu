<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>会員登録画面</title>
</head>
<body>
  
<div class="form-wrapper">
	<?php 
	    require 'db_connect.php';
		$sql = "INSERT INTO user VALUES (null,:name, :email, :password)";
		$stm = $pdo->prepare($sql);
		$stm->bindValue(':name',$_POST['name'],PDO::PARAM_STR);
		$stm->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
		$stm->bindValue(':password',$_POST['password'],PDO::PARAM_STR);

		$stm->execute();
	?>
		<h2>お客様情報を登録しました<h2>
		<form action="home.php" method="post">
		<div class="button-panel">
				<input type="submit" class="button" title="Top" value="トップページへ"></input>
		</div>
	    </form>
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
  margin: 10em auto;
  padding: 0 1em;
  max-width: 370px;
  white-space: nowrap;
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