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

<?php require 'header.php'; ?> <!-- header挿入 -->

<div id ="home_list">
    <a href="goods_list.php"><strong id="home_goodslist">商品一覧はこちら</strong></a>
</div>
<div id="home_dummy">
    <img src="images/dummy/dummy1.jpg" alt="" width="245px">
    <img src="images/dummy/dummy2.jpg" alt="" width="245px">
    <img src="images/dummy/dummy3.jpg" alt="" width="245px">
    <img src="images/dummy/dummy4.jpg" alt="" width="245px">
</div>

    
<div id="home_recommend">
    <h2>おすすめ商品</h2><br>
    <div id = "home_goods">
        <img src="images/bed/bed5.jpg" alt="" width="180px">
        <p>ヘッドレスベッド</p><br>
        <p><strong id = home_price>23,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/bed/bed10.jpg" alt="" width="180px">
        <p>シングルフロアベッド</p><br>
        <p><strong id = home_price>19,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/shelf/shelf5.jpg" alt="" width="180px">
        <p>オープン本棚</p><br>
        <p><strong id = home_price>26,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/shelf/shelf10.jpg" alt="" width="180px">
        <p>フリーラック</p><br>
        <p><strong id = home_price>27,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/sofa/sofa5.jpg" alt="" width="180px">
        <p>カジュアルソファ</p><br>
        <p><strong id = home_price>27,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/sofa/sofa2.jpg" alt="" width="180px">
        <p>3人用布張りソファ</p><br>
        <p><strong id = home_price>14,600</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/sofa/sofa4.jpg" alt="" width="180px">
        <p>ヒジ付きローソファ</p><br>
        <p><strong id = home_price>22,600</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/bed/bed2.jpg" alt="" width="180px">
        <p>アンティークベッドフレーム</p><br>
        <p><strong id = home_price>34,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/bed/bed4.jpg" alt="" width="180px">
        <p>チェストベッドフレーム</p><br>
        <p><strong id = home_price>27,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/shelf/shelf2.jpg" alt="" width="180px">
        <p>本棚</p><br>
        <p><strong id = home_price>19,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/shelf/shelf4.jpg" alt="" width="180px">
        <p>フラップ扉本棚</p><br>
        <p><strong id = home_price>17,200</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/table/table2.jpg" alt="" width="180px">
        <p>リビングダイニングテーブル</p><br>
        <p><strong id = home_price>19,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/table/table4.jpg" alt="" width="180px">
        <p>リビングダイニングテーブル</p><br>
        <p><strong id = home_price>21,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/sofa/sofa8.jpg" alt="" width="180px">
        <p>3way　ソファ座椅子</p><br>
        <p><strong id = home_price>29,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/table/table8.jpg" alt="" width="180px">
        <p>円形テーブル</p><br>
        <p><strong id = home_price>19,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/shelf/shelf8.jpg" alt="" width="180px">
        <p>オープン本棚</p><br>
        <p><strong id = home_price>26,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/shelf/shelf7.jpg" alt="" width="180px">
        <p>フラップ扉本棚</p><br>
        <p><strong id = home_price>27,400</strong>円(税込)</p><br>
    </div>
    <div id = "home_goods">
        <img src="images/table/table10.jpg" alt="" width="180px">
        <p>食卓テーブル</p><br>
        <p><strong id = home_price>18,400</strong>円(税込)</p><br>
    </div>

</div>

<?php require 'footer.php'; ?> <!-- footer挿入 -->
    
</body>
</html>