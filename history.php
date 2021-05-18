<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>購入履歴</title>
</head>
<body>

<?php require 'header.php'; ?> <!-- header挿入 -->

<h1 id="history_title">購入履歴</h1>

<?php 
	require 'db_connect.php';

	if (isset($_SESSION['user'])) {
        $sql = "
            select goods.id as goods_id, name, price, image, count, datetime
            from history join goods 
            on history.goods_id = goods.id
            where history.user_id = :id"; 
		$stm = $pdo->prepare($sql);
		$stm->bindValue(':id',$_SESSION['user']['id'],PDO::PARAM_INT);
		$stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
?>

<div id="history">
    <div id = "history_image">
        <img src="images/<?= $row['image'] ?>" alt="" width="190px">
    </div>

    <div id = "history_details">
        <p><?= $row['name'] ?></p>
        <p>価格　　　<?php echo number_format($row['price']); ?>　　円</p>
        <p>数量　　　<?= $row['count'] ?></p>
        <p><?= $row['datetime'] ?>　に購入済み</p>  
    </div>
</div>

<?php
        }
	} else {
?>

    <div class="form-wrapper">
    <h2>購入履歴を表示するには、ログインしてください。</h2>
    <form action="home.php" method="post">
        <div class="button-panel">
            <input type="submit" class="button" title="Top" value="トップページへ"></input>
        </div>
    </form>
    </div>

<?php
	}
?>

<?php require 'footer.php'; ?> <!-- footer挿入 -->

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400);

/* fontawesome */
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

/* Simple Reset */
* { margin: 0; padding: 0; box-sizing: border-box; }

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