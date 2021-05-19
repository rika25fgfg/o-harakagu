<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>お支払い画面</title>
</head>
<body>

<?php require 'header.php'; ?> <!-- header挿入 -->

<h1 id="cart_title">お支払い画面</h1>

<div id="cart">
    <div id="cart_details">

<?php
	$total = 0;
	foreach ($_SESSION['goods'] as $id => $goods) {
?>
    <div id="cart_details_2">
    <div id="cart_left">
            <img src="images/<?= $goods['image'] ?>" alt="" width="200px" height="">
        </div>
        <div id="cart_center">
            <strong><?= $goods['name'] ?></strong><br>
            <strong>価格　　<?php echo number_format($goods['price']); ?>　　円</strong><br>
        </div>

        <?php
			$subtotal = $goods['price'] * $goods['count'];
			$total += $subtotal;
		?>

        <div id="cart_right">
            <strong>数量　　<?= $goods['count'] ?></strong><br>
            <strong>小計　　<?php echo number_format($subtotal); ?>　　円</strong><br>
        </div>
        <div id="cart_under">
            <p>※ご購入いただいた商品は届くことはありません。</p>
        </div>
    </div>
 
<?php
	}
?>

    </div>

    <div id="cart_pay">
        <h2>お支払い金額</h2>
        <strong id="cart_total">合計　　　　　　　<?php echo number_format($total); ?>　円</strong>
        <hr><br>
        <strong>商品金額　　　　　<?php echo number_format($total); ?>　円</strong>
        <hr><br>
        <strong>送料　　　　　　　0　円</strong>
        <hr><br>
        <strong>組立費　　　　　　0　円</strong>
        <hr><br>
        <p>※ご購入された商品は届きません。</p>
        <p>※未ログインまたは非会員の方はご購入いただけません。</p><br>
        
        <form action="done.php" id="cart_form">
          <br>
          <input type="submit" value="確認">
        </form>
    </div>
</div>


<?php require 'footer.php'; ?> <!-- footer挿入 -->

<style>
    #cart {
  margin: 30px 7% 30px 7%;
}

#cart_title {
  font-size: 30px;
  margin: 30px 7% 30px 7%;
}

#cart_details_2 {
  width: 97%;
  height: 230px;
  float: left;
  border-bottom: solid 1px black;
  margin-bottom: 15px;
}

#cart_details {
  width: 70%;
  float: left;
}

#cart_left {
  width: 200px;
  float: left;
  padding: 0px 10px 10px 0px;
}

#cart_center {
  width: 300px;
  height: 100px;
  float: left;
  overflow: hidden;
  margin: 0px 10px 10px 10px;
  padding: 0px 10px 10px 10px;
  line-height: 35px;
}

#cart_right {
  width: 220px;
  height: 100px;
  float: left;
  overflow: hidden;
  margin: 0px 10px 10px 10px;
  line-height: 35px
}

#cart_under {
  width: 550px;
  height: 100px;
  float: left;
  overflow: hidden;
  margin: 0px 20px 10px 10px;
}

#cart_line {
  float: left;
}

#cart_pay {
  width: 30%;
  float: right;
  overflow: hidden;
  margin: 0px 0px 10px 0px;
  padding: 40px 30px 40px 30px;
  background-color: whitesmoke;
  line-height: 35px
}

#cart_form input[type="submit"] {
  display       : inline-block;
  width: 100%; 
  border-radius : 2%;          /* 角丸       */
  font-size     : 15pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 14px 45px;   /* 余白       */
  background    : #FF6666;     /* 背景色     */
  color         : #ffffff;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 8px 8px 7px #666666;  /* 影の設定 */
  border        : 2px solid #FF6666;    /* 枠の指定 */
}

#cart_form input[type="submit"]:hover {
  box-shadow    : none;        /* カーソル時の影消去 */
  color         : #FF6666;     /* 背景色     */
  background    : #ffffff;     /* 文字色     */
}

#cart_form_2 input[type="submit"] {
  display       : inline-block;
  width: 100%; 
  border-radius : 2%;          /* 角丸       */
  font-size     : 15pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 14px 45px;   /* 余白       */
  background    : #3CB371;     /* 背景色     */
  color         : #ffffff;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 8px 8px 7px #666666;  /* 影の設定 */
  border        : 2px solid #3CB371;    /* 枠の指定 */
}

#cart_form_2 input[type="submit"]:hover {
  box-shadow    : none;        /* カーソル時の影消去 */
  color         : #3CB371;     /* 背景色     */
  background    : #ffffff;     /* 文字色     */
}

.button-panel {
  margin: 0.2em 0 0;
  width: 100%;
}

.button-panel .cart_button {
  background-color:white;
  border: none;
  color:black;
  cursor: pointer;
  height: 20px;
  /* font-family: 'Open Sans', sans-serif; */
  font-size: 0.9em;
  letter-spacing: 0.05em;
  text-align: center;
  text-transform: uppercase;
  transition: background 0.3s ease-in-out;
  width: 20%;
  /* margin: 0 0 0 10px; */
}

#cart_price {
  font-size: 24px;
}

#cart_total {
  color: #ff6347;
}

</style>
    
</body>
</html>