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

<style>
  #details_title {
  font-size: 30px;
  padding: 30px 30px 30px 7%;
}

#details_left {
  width: 35%;
  float: left;
  padding: 0px 10px 10px 7%;
}

#details_kanren_goods {
  width: 160px;
  float: left;
  overflow: hidden;
  margin: 5px 20px 0px 0px;
}

#details_center {
  width: 35%;
  float: left;
  overflow: hidden;
  padding: 0px 10px 10px 10px;
}

#details_kakaku {
  font-size: 30px;
}

#details_table{
  width: 100%;
  border-collapse: collapse;
}

#details_table tr{
  border-bottom: solid 2px white;
}

#details_table tr:last-child{
  border-bottom: none;
}

#details_table th{
  position: relative;
  text-align: left;
  width: 30%;
  background-color: #52c2d0;
  color: white;
  text-align: center;
  padding: 10px 0;
}

#details_table th:after{
  display: block;
  content: "";
  width: 0px;
  height: 0px;
  position: absolute;
  top:calc(50% - 10px);
  right:-10px;
  border-left: 10px solid #52c2d0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
}

#details_table td{
  text-align: left;
  width: 70%;
  text-align: center;
  background-color: #eee;
  padding: 10px 0;
}

#details_right {
  width: 22%;
  float: left;
  overflow: hidden;
  margin: 0px 7% 10px 10px;
  padding: 40px 30px 40px 30px;
  background-color: whitesmoke;
}

#details_form input[type="number"] {
  width: 100px; 
  margin: 0px 20% 20px 20px;
  padding: 20px 20px 20px 20px;
}

#details_form input[type="submit"] {
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

#details_form input[type="submit"]:hover {
  box-shadow    : none;        /* カーソル時の影消去 */
  color         : #FF6666;     /* 背景色     */
  background    : #ffffff;     /* 文字色     */
}
</style>
    
</body>
</html>

