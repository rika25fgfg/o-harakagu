<?php session_start(); ?>

<?php
    if (!isset($_SESSION['user'])) {
	    $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	    header("Location:" . $url . "/login_input.php" );
	    exit();
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>マイページ</title>
</head>
<body>

<?php require 'header.php'; ?> <!-- header挿入 -->



<div class ="mypage">
<h2>マイページ</h2>

</div>
<div class ="mypage2">
<h3>ご注文内容の確認</h3>
</div>
<div class ="mypage3">
<a href="cart_show.php"><p>現在のショッピングカート</p></a>
<a href="history.php"><p>ご注文履歴</p></a>
</div>


<div class ="mypage2">
<h3>その他メニュー</h3>
</div>
<div class ="mypage3">
<a href="logout.php"><p>ログアウト</p></a>

</div>

<?php require 'footer.php'; ?> <!-- footer挿入 -->

<style>

footer {
    position: absolute;/*←絶対位置*/
    bottom: 0; /*下に固定*/
}

.kakomi-box3 {
  margin: 2em auto;
  padding: 1em;
  width: 90%;
  border: 1px solid #ccc; /* 枠線 */
  background-color: #fff; /* 背景色 */
  box-shadow: 1px 1px 2px #ccc;
}

.mypage2 {
  padding-top: 20px;
  margin: 0 auto;
  max-width: 500px;
  border-bottom: solid 0.1px gray;
  padding-bottom: 10px;

}

.mypage {
  padding-top: 120px;
  margin: 0 auto;
  max-width: 700px;
}

.mypage3 {
  padding-top: 5px;
  margin: 0 auto;
  max-width: 500px;
  color: #0066FF;
}

.border {
  border-style: dotted;
}

</style>
    
</body>
</html>