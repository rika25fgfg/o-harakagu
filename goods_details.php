<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>商品詳細</title>
</head>
<body>

<?php require 'header.php'; ?> <!-- header挿入 -->
<?php
	require 'db_connect.php';
	$sql = "select * from goods where id = :id";
	$stm = $pdo->prepare($sql);
	$stm->bindValue(':id',$_REQUEST['id'],PDO::PARAM_STR);
	$stm->execute();
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);

	foreach ($result as $row) {
?>

<h1 id="details_title"><?= $row['name'] ?></h1>

<div id="details_left">
<img id="details_img" src="images/<?= $row['image'] ?>" alt="" width="100%" height="">
<br><br><br>
<h2> 関連商品</h2>
  <div id="details_kanren">
    <?php
      $sql = "select * from goods where category = :category";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':category',$row['category'],PDO::PARAM_STR);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      foreach ($result as $row2) {
        if ($row2['id'] != $row['id']) {
    ?>
    <div id="details_kanren_goods">
      <a href="goods_details.php?id=<?= $row2['id'] ?>"><img src="images/<?= $row2['image'] ?>" alt="" width="160px" height=""></a>
      <strong><?= $row2['name'] ?></strong><br>
      <strong><?php echo number_format($row2['price']); ?> 円</strong>
    </div>
    <?php
        }
	    }
    ?>
  </div>
</div>

<div id="details_center">
<h2>商品説明</h2>
<p><?= $row['discription'] ?></p>
<br><br>
<p>価格　　　<strong id="details_kakaku"><?php echo number_format($row['price']); ?></strong>　　　円（税込み）</p>
<br><br>
<p>※一度の注文で　<strong>2点</strong>　までご購入可能です。</p>
<br><br>

<h2>仕様・サイズ</h2>
<br>
<img src="images/<?= $row['i_image'] ?>" alt="" width="80px" height="">
<br><br>
<table id="details_table">
  <tr>
    <th>カラー</th><td><?= $row['color'] ?></td>
  </tr>
  <tr>
    <th>サイズ</th><td><?= $row['size'] ?></td>
  </tr>
  <tr>
    <th>素材</th><td><?= $row['material'] ?></td>
  </tr>
  <tr>
    <th>重量</th><td><?= $row['weight'] ?></td>
  </tr>
  <tr>
    <th>保証年数</th><td>保証なし</td>
  </tr>
  <tr>
    <th>梱包サイズ</th><td><?= $row['p_size'] ?></td>
  </tr>
</table>
</div>

<div id="details_right">
  <p>配送目安</p>
  <h3>一週間程度が目安です。※ご購入いただいた商品が届かない場合がございます。</h3>
  <hr><br>
  <p>返品・交換</p>
  <h3>返品・交換は受け付けておりません。</h3>
  <hr><br>
  <p>送料</p>
  <h3>無料</h3>
  <hr><br>
  <img src="images/siyou/haisou.jpg" alt="" width="100%" height="">
  <br><br><br>
  <form action="cart_insert.php" method="POST" id="details_form">
    数量<input type="number" name="count" value="1" min="1" max="2">
    <p>価格　　<strong id="details_kakaku"><?php echo number_format($row['price']); ?></strong>　　円（税込み）</p>
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
	  <input type="hidden" name="name" value="<?= $row['name'] ?>">
		<input type="hidden" name="price" value="<?= $row['price'] ?>">
		<input type="hidden" name="image" value="<?= $row['image'] ?>">
    <br>
    <input type="submit" value="カートに入れる">
  </form>
</div>

<?php
  }
?>

<?php require 'footer.php'; ?> <!-- footer挿入 -->
    
</body>
</html>

