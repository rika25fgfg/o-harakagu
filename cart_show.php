<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>カート</title>
</head>
<body>

<?php require 'header.php'; ?> <!-- header挿入 -->

<h1 id="cart_title">カート</h1>

<?php
if (!empty($_SESSION['goods'])) {
?>

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
            <div class="button-panel">
                <a href="cart_delete.php?id=<?= $id ?>"><input type="submit" class="cart_button" title="削除" value="✖削除"></input></a>
            </div>
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
        <p>※ご購入いただいた商品は届くことはありません。</p>
        <p>※未ログインまたは非会員の方はご購入いただけません。</p><br>
        
        <form action="pay.php" method="POST" id="cart_form">
          <br>
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
	      <input type="hidden" name="name" value="<?= $row['name'] ?>">
	      <input type="hidden" name="price" value="<?= $row['price'] ?>">
          <input type="hidden" name="image" value="<?= $row['image'] ?>">
          <input type="submit" value="レジへ進む">
        </form>
        <form action="home.php" method="POST" id="cart_form_2">
          <br>
          <input type="submit" value="買い物を続ける">
        </form>
    </div>
</div>

<?php
} else {
?>

<div id="cart">
  <p>ショッピングカートに商品が入っていません。</p><br>
  <p>ショッピングカート内の商品は自由に出し入れしていただけます。</p>
</div>

<style>

footer {
    position: absolute;/*←絶対位置*/
    bottom: 0; /*下に固定*/
}

</style>

<?php
}
?>

<?php require 'footer.php'; ?> <!-- footer挿入 -->
    
</body>
</html>