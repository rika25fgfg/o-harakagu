<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>商品一覧</title>
</head>
<body>

<?php require 'header.php'; ?> <!-- header挿入 -->

<div id="list_bed">
    <h1>ベッド</h1>
    <p>収納付き・ライト付き・折りたたみタイプ・低床タイプなどお部屋や用途に合わせて、様々なデザイン、サイズやカラーからお選び頂けます。</p>
    <h2>カテゴリ一覧</h2>
    <div id= "list_goods">
        <a href="goods_details.php?id=1"><img src="images/bed/bed1.jpg" alt="" width="190px"></a>
        <p>シングルベッドルーム</p>
    </div>
    <div id ="list_goods">
        <a href="goods_details.php?id=2"><img src="images/bed/bed2.jpg" alt="" width="190px"></a>
        <p>アンティーク調木目ベッドフレーム</p>
    </div>
    <div id ="list_goods">
        <a href="goods_details.php?id=3"><img src="images/bed/bed3.jpg" alt="" width="190px"></a>
        <p>宮付きチェストシングルベッド</p>
    </div>
    <div id ="list_goods">
        <a href=""><img src="images/bed/bed4.jpg" alt="" width="190px"></a>
        <p>棚・コンセント付きチェストベッドフレーム</p>
    </div>
    <div id ="list_goods">
        <a href=""><img src="images/bed/bed5.jpg" alt="" width="190px"></a>
        <p>ヘッドレスチェストベッド　アメリア</p>
    </div>
    <div id ="list_goods">
        <a href=""><img src="images/bed/bed6.jpg" alt="" width="190px"></a>
        <p>シングルチェストベッドフレーム</p>
    </div>
    <div id ="list_goods">
        <a href=""><img src="images/bed/bed7.jpg" alt="" width="190px"></a>
        <p>アンティーク調木目ベッドフレーム</p>
    </div>
    <div id ="list_goods">
        <a href=""><img src="images/bed/bed8.jpg" alt="" width="190px"></a>
        <p>シングルベッドフレーム</p>
    </div>
    <div id ="list_goods">
        <a href=""><img src="images/bed/bed9.jpg" alt="" width="190px"></a>
        <p>棚・コンセント付スノコフロアシングルベッド</p>
    </div>
    <div id ="list_goods">
        <a href=""><img src="images/bed/bed10.jpg" alt="" width="190px"></a>
        <p>シングルフロアベッド2台セット+クッションキャビネット</p>
    </div>
</div>

<div id="list_line">
    <hr><br>
</div>

<div id = "list_shelf">
    <h1>ブックシェルフ・書棚</h1>
    <p>オープンタイプ・スライド対応・扉付きタイプなど種類も豊富です。お部屋に合わせて、様々なデザイン、サイズやカラーからお選び頂けます。</p>
    <h2>カテゴリ一覧</h2>
    <div id="list_goods">
        <a href="goods_details.php?id=10"><img src="images/shelf/shelf1.jpg" alt="" width="190px"></a>
        <p>スライド本棚                </p>
    </div>
    <div id="list_goods">
        <a href="goods_details.php?id=11"><img src="images/shelf/shelf2.jpg" alt="" width="190px"></a>
        <p>本棚</p>
    </div>
    <div id="list_goods">
        <a href="goods_details.php?id=12"><img src="images/shelf/shelf3.jpg" alt="" width="190px"></a>
        <p>引き出し付きハイタイプ壁面収納</p>
    </div>
    <div id="list_goods">
        <a href="goods_shelf1.php"><img src="images/shelf/shelf4.jpg" alt="" width="190px"></a>
        <p>フラップ扉本棚                </p>
    </div>
    <div id="list_goods">
        <a href="goods_shelf1.php"><img src="images/shelf/shelf5.jpg" alt="" width="190px"></a>
        <p>オープン本棚</p>
    </div>
    <div id="list_goods">
        <a href="goods_shelf1.php"><img src="images/shelf/shelf6.jpg" alt="" width="190px"></a>
        <p>オープン本棚</p>
    </div>
    <div id="list_goods">
        <a href="goods_shelf1.php"><img src="images/shelf/shelf7.jpg" alt="" width="190px"></a>
        <p>フラップ扉本棚</p>
    </div>
    <div id="list_goods">
        <a href="goods_shelf1.php"><img src="images/shelf/shelf8.jpg" alt="" width="190px"></a>
        <p>オープン本棚</p>
    </div>
    <div id="list_goods">
        <a href="goods_shelf1.php"><img src="images/shelf/shelf9.jpg" alt="" width="190px"></a>
        <p>オープンシェルフ</p>
    </div>
    <div id="list_goods">
        <a href="goods_shelf1.php"><img src="images/shelf/shelf10.jpg" alt="" width="190px"></a>
        <p>フリーラック</p>
    </div>
</div>

<div id="list_line">
    
</div>

<div id ="list_sofa">
    <hr><br>
    <h1>ソファ</h1>
    <p>お部屋に合わせて、様々なタイプやデザイン、素材・サイズ・カラーからお選び頂けます。カバーやメンテナンス用品も多数取り揃えています。</p>
    <h2>カテゴリ一覧</h2>
    <div id="list_goods">
        <a href="goods_details.php?id=4"><img src="images/sofa/sofa1.jpg" alt="" width="190px"></a>
        <p>カジュアルソファ</p>
    </div>
    <div id="list_goods">
        <a href="goods_details.php?id=5"><img src="images/sofa/sofa2.jpg" alt="" width="190px"></a>
        <p>3人用布張りソファ</p>
    </div>
    <div id="list_goods">
        <a href="goods_details.php?id=6"><img src="images/sofa/sofa3.jpg" alt="" width="190px"></a>
        <p>3人用両電動本革リクライニングソファ</p>
    </div>
    <div id="list_goods">
        <a href="goods_sofa1.php"><img src="images/sofa/sofa4.jpg" alt="" width="190px"></a>
        <p>ヒジ付きローソファ</p>
    </div>
    <div id="list_goods">
        <a href="goods_sofa1.php"><img src="images/sofa/sofa5.jpg" alt="" width="190px"></a>
        <p>カジュアルソファ</p>
    </div>
    <div id="list_goods">
        <a href="goods_sofa1.php"><img src="images/sofa/sofa6.jpg" alt="" width="190px"></a>
        <p>つながるポケットコイル座椅子</p>
    </div>
    <div id="list_goods">
        <a href="goods_sofa1.php"><img src="images/sofa/sofa7.jpg" alt="" width="190px"></a>
        <p>つながるハイバック座椅子</p>
    </div>
    <div id="list_goods">
        <a href="goods_sofa1.php"><img src="images/sofa/sofa8.jpg" alt="" width="190px"></a>
        <p>3way　ソファ座椅子</p>
    </div>
    <div id="list_goods">
        <a href="goods_sofa1.php"><img src="images/sofa/sofa9.jpg" alt="" width="190px"></a>
        <p>ソファベッド</p>
    </div>
    <div id="list_goods">
        <a href="goods_sofa1.php"><img src="images/sofa/sofa10.jpg" alt="" width="190px"></a>
        <p>2人用ローソファ</p>
    </div>
</div>

<div id="list_line">
</div>

<div id ="list_table">
    <hr>
    <br>
    <h1>テーブル</h1>
    <p>ダイニング、リビング、書斎などスペースに合わせて、様々なデザイン、サイズやカラーからお選び頂けます。在宅ワークにおすすめな商品も多数取り揃えています。</p>
    <h2>カテゴリ一覧</h2>
    <div id="list_goods">
        <a href="goods_details.php?id=7"><img src="images/table/table1.jpg" alt="" width="190px"></a>
        <p>ダイニングテーブル</p>
    </div>
    <div id="list_goods">
        <a href="goods_details.php?id=8"><img src="images/table/table2.jpg" alt="" width="190px"></a>
        <p>リビングダイニングテーブル</p>
    </div>
    <div id="list_goods">
        <a href="goods_details.php?id=9"><img src="images/table/table3.jpg" alt="" width="190px"></a>
        <p>伸長式ダイニングテーブル</p>
    </div>
    <div id="list_goods">
        <a href="goods_table3.php"><img src="images/table/table4.jpg" alt="" width="190px"></a>
        <p>リビングダイニングテーブル</p>
    </div>
    <div id="list_goods">
        <a href="goods_table3.php"><img src="images/table/table5.jpg" alt="" width="190px"></a>
        <p>ダイニングテーブル</p>
    </div>
    <div id="list_goods">
        <a href="goods_table3.php"><img src="images/table/table6.jpg" alt="" width="190px"></a>
        <p>ダイニングテーブル</p>
    </div>
    <div id="list_goods">
        <a href="goods_table3.php"><img src="images/table/table7.jpg" alt="" width="190px"></a>
        <p>引出し付きダイニングテーブル</p>
    </div>
    <div id="list_goods">
        <a href="goods_table3.php"><img src="images/table/table8.jpg" alt="" width="190px"></a>
        <p>円形テーブル</p>
    </div>
    <div id="list_goods">
        <a href="goods_table3.php"><img src="images/table/table9.jpg" alt="" width="190px"></a>
        <p>ダイニングテーブル</p>
    </div>
    <div id="list_goods">
        <a href="goods_table3.php"><img src="images/table/table10.jpg" alt="" width="190px"></a>
        <p>食卓テーブル</p>
    </div>
</div>





<?php require 'footer.php'; ?> <!-- footer挿入 -->
    
</body>
</html>