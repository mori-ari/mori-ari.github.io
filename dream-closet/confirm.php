<?php
session_start();

include('inc/funcs.php');
//1. POSTデータ取得
$who =$_SESSION['who'];
$user_name =$_SESSION['user_name'];
$item_src1 =$_GET['item_src1'];
$item_src2 =$_GET['item_src2'];
$item_src3 =$_GET['item_src3'];
$item_src4 =$_GET['item_src4'];
$item_src5 =$_GET['item_src5'];
$item_src6 =$_GET['item_src6'];





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@moriari2">
<meta name="og:url" content="http://dream-closet.jp">
<meta name="og:title" content="タイトル">
<meta name="og:description" content="#理想の6着">
<meta name="og:image" content="img/00007.jpeg">

  <!-- <link rel="stylesheet" href="css/reset.css" /> -->
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/jquery-2.1.3.min.js"></script>
  <title>タイトル</title>
</head>

<body>
<canvas id="canvas" width="1200" height="630" ></canvas>
<img id="output" src="">

<br>

who<?=h($who) ?><br>
item1<?= h($item_src1) ?><br>
item2<?= h($item_src2) ?><br>
item3<?= h($item_src3) ?><br>
item4<?= h($item_src4) ?><br>
item5<?= h($item_src5) ?><br>
item6<?= h($item_src6) ?><br>
user_name<?= h($user_name) ?><br>
discription<?= h($discription) ?><br>


<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-hashtags="#わたしの理想の6着"　data-via="moriari2" data-show-count="false">Tweet</a>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>






<script>
(function() {
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d'); 

    var image0 = new Image();
    image0.src = 'img/00007.jpeg';
    image0.addEventListener('load', function() {
        context.drawImage(image0, 300, 0, 600, 300);
    }, false);


    var image1 = new Image();
    image1.src = 'img/00001.jpeg';
    image1.addEventListener('load', function() {
        context.drawImage(image1, 0, 0, 300, 300);
    }, false);

    var image2 = new Image();
    image2.src = 'img/00002.jpeg';
    image2.addEventListener('load', function() {
        context.drawImage(image2, 0, 300, 300, 300);
    }, false);

    var image3 = new Image();
    image3.src = 'img/00003.jpeg';
    image3.addEventListener('load', function() {
        context.drawImage(image3, 300, 300, 300, 300);
    }, false);

    var image4 = new Image();
    image4.src = 'img/00004.jpeg';
    image4.addEventListener('load', function() {
        context.drawImage(image4, 600, 300, 300, 300);
    }, false);

    var image5 = new Image();
    image5.src = 'img/00005.jpeg';
    image5.addEventListener('load', function() {
        context.drawImage(image5, 900, 300, 300, 300);
    }, false);

    var image6 = new Image();
    image6.src = 'img/00006.jpeg';
    image6.addEventListener('load', function() {
        context.drawImage(image6, 900, 0, 300, 300);
    }, false);

    function init(){
	// 画像の表示イベント
	var image0 = new Image();
	image0.src = "img/00007.jpeg";
	image0.addEventListener('load', function() {
		// 画像を表示
		// ctx.drawImage(image0,100, 0, 200, 100);
		
		// 線を描画
		ctx.beginPath();
        ctx.font         = "60px 'Yu Gothic 游ゴシック'";
        ctx.fillStyle    = "black";
        ctx.fillText("<?= h($user_name) ?>が選ぶ",  330, 60);

        ctx.font         = "90px 'Yu Gothic 游ゴシック'";
        ctx.fillStyle    = "black";
        ctx.fillText("<?= h($who) ?>",  330, 150);
        ctx.fillText("6着",  330, 210);
	});
}
    // 実行をセット
    let ctx;
    document.body.onload = function(){
        ctx = document.querySelector("#canvas").getContext("2d");
        init();
    }

})();

// ---------------
// canvasをURL化
// ---------------
// キャンパス要素を取得 (既に描画されている)
let canvas = document.getElementById( "canvas" ) ;
// // 描画内容をデータURIに変換する (引数なしだとPNG)
let dataURI = canvas.toDataURL() ;
// JPGにする場合 (第2引数は品質)
// let dataURI = canvas.toDataURL( "img/jpg", 0.75 ) ;
// img要素を取得
let image = document.getElementById( "output" ) ;
// データURIは直接img要素のsrc属性に指定できる
image.src = dataURI ;


</script>

</body>
</html>
