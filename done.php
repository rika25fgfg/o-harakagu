<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>大原家具</title>
</head>
<body>

	<?php
		//MySQLデータベースに接続する
        require 'db_connect.php';

        date_default_timezone_set('Asia/Tokyo');
        $datetime = date("Y年m月d日 H時i分");
        
        foreach($_SESSION['goods'] as $id) {
            $sql = "INSERT INTO history VALUES(null, :user_id, :goods_id, :count, :datetime)";
            //プリペアードステートメントを作成
            $stm = $pdo->prepare($sql);
            //プリペアードステートメントに値をバインド
            $stm->bindValue(':user_id', $_SESSION['user']['id'],PDO::PARAM_INT);
            $stm->bindValue(':goods_id', $id['id'], PDO::PARAM_INT);
            $stm->bindValue(':count', $id['count'], PDO::PARAM_INT);
            $stm->bindValue(':datetime', $datetime, PDO::PARAM_STR);
            $stm->execute();

            // print_r($id);
        }

		if(isset($_SESSION['user'])){
			unset($_SESSION['goods']);
    ?>       

    <div class="form-wrapper">
    <h2>購入手続きが完了しました</h2>
    <form action="index.php" method="post">
        <div class="button-panel">
            <input type="submit" class="button" title="Top" value="トップページへ"></input>
        </div>
    </form>
    </div>

    <?php
		} else {
    ?>

    <div class="form-wrapper">
    <h2>購入手続き中にエラーが発生しました。申し訳ございません。</h2>
    <form action="index.php" method="post">
        <div class="button-panel">
            <input type="submit" class="button" title="Top" value="トップページへ"></input>
        </div>
    </form>
    </div>

    <?php
		}
	?>

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