<?php
session_start();
// print('セッションIDは '.$_COOKIE['PHPSESSID']);
// $_SESSION['item1'] = 'img/00001.jpeg';
// $_SESSION['item2'] = 'img/00002.jpeg';
// $_SESSION['item3'] = 'img/00003.jpeg';
// $_SESSION['item4'] = 'img/00004.jpeg';
// $_SESSION['item5'] = 'img/00005.jpeg';
// $_SESSION['item6'] = 'img/00006.jpeg';


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/jquery-2.1.3.min.js"></script>
  <title>あの人に着せたい6着</title>
</head>
<body>
  

  <main>

    <h1>タイトル</h1>

    <form action="item.php" method="GET">
      <div>
        <div>
            <div><label for="who">STEP１：どんな6着を選ぶ？（必須）</label></div>
            <div><input type="text" placeholder="全角●文字以内" id="who" name="who" required>6着</div>
        </div>
        <!-- <div>
            <div><label>STEP2：枠を選択してアイテムを登録（必須）</label></div>
            <div>
              <span><a href="item.php" target="_blank"><img src="img/default.jpg" style="width:50px" class="item" id="item1" alt="画像1"></a></span>
              <span><a href="item.php" target="_blank"><img src="img/default.jpg" style="width:50px" class="item" id="item2" alt="画像2"></a></span>
              <span><a href="item.php" target="_blank"><img src="img/default.jpg" style="width:50px" class="item" id="item3" alt="画像3"></a></span>
              <span><a href="item.php" target="_blank"><img src="img/default.jpg" style="width:50px" class="item" id="item4" alt="画像4"></a></span>
              <span><a href="item.php" target="_blank"><img src="img/default.jpg" style="width:50px" class="item" id="item5" alt="画像5"></a></span>
              <span><a href="item.php" target="_blank"><img src="img/default.jpg" style="width:50px" class="item" id="item6" alt="画像6"></a></span>
            </div>
        </div> -->



        <div>
            <div><label for="user_name">STEP3：ニックネームを入力（必須）</label></div>
            <div><input type="text" placeholder="全角●文字以内" id="user_name" name="user_name" required></div>
        </div>
        <!-- <div>
            <div><label for="discription">STEP4：説明文（任意）</label></div>
            <div><textarea rows="3" cols="40" id="discription" placeholder="全角●文字以内" name="discription"></textarea></div>
        </div> -->
        <!-- <input type="hidden" name="item1" value="img/00001.jpeg">
        <input type="hidden" name="item2" value="img/00002.jpeg">
        <input type="hidden" name="item3" value="img/00003.jpeg">
        <input type="hidden" name="item4" value="img/00004.jpeg">
        <input type="hidden" name="item5" value="img/00005.jpeg">
        <input type="hidden" name="item6" value="img/00006.jpeg"> -->

        <div><input id="submit" type="submit" value="アイテムを選ぶ"></div>
      </div>
    </form>


  </main>
<script>

// クリックでウィンドウを開く
// $(".item").on("click", function () {
//   window.open('item.php', null, 'top=100,left=100,width=400,height=600' );
// });

// ID取得
let item1 = document.getElementById("item1");
let item1 = document.getElementById("item2");
let item1 = document.getElementById("item3");
let item1 = document.getElementById("item4");
let item1 = document.getElementById("item5");
let item1 = document.getElementById("item6");

console.log(sample);


</script>



</body>
</html>

