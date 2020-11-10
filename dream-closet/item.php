<?php
session_start();
require_once('inc/funcs.php');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['who'])&&isset($_POST['user_name'])) {
      $_SESSION['who'] = $_POST['who'];
      $_SESSION['user_name'] = $_POST['user_name'];
  }
}

$who =$_SESSION['who'];
$user_name=$_SESSION['user_name'];


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Document</title>
  </head>
  <body>
    <!-- <header id="header">
        <div id="header_inbox">
          <a href="index.html"><div id="allow"></div></a>>
            <div id="room">戻る</div>
            <a href="read.php"><div id="login">メンバーリスト</div></a>
        </div>
    </header> -->

    <main>
          <h1><?= h($who) ?>6着</h1>


        <div>
        <img src="./img/default.jpg" id="item1" style="width:50px" class="item" alt="">            
        <img src="./img/default.jpg" id="item2" style="width:50px" class="item" alt="">
        <img src="./img/default.jpg" id="item3" style="width:50px" class="item" alt="">
        <img src="./img/default.jpg" id="item4" style="width:50px" class="item" alt="">
        <img src="./img/default.jpg" id="item5" style="width:50px" class="item" alt="">
        <img src="./img/default.jpg" id="item6" style="width:50px" class="item" alt="">
      </div>
      <form action="confirm.php" method="POST">
      <input id="item_src1" type="hidden" name="./img/default.jpg">
      <input id="item_src2" type="hidden" name="./img/default.jpg">
      <input id="item_src3" type="hidden" name="./img/default.jpg">
      <input id="item_src4" type="hidden" name="./img/default.jpg">
      <input id="item_src5" type="hidden" name="./img/default.jpg">
      <input id="item_src6" type="hidden" name="./img/default.jpg">
      <div><input id="submit" type="hidden" value="アイテム決定"></div>
</form>


    <div class="cssgrid">
        <div><img src="./img/00001.jpeg" id="img1" class="img" alt=""></div>
        <div><img src="./img/00002.jpeg" id="img2" class="img" alt=""></div>
        <div><img src="./img/00003.jpeg" id="img3" class="img" alt=""></div>
        <div><img src="./img/00004.jpeg" id="img4" class="img" alt=""></div>
        <div><img src="./img/00005.jpeg" id="img5" class="img" alt=""></div>
        <div><img src="./img/00006.jpeg" id="img6" class="img" alt=""></div>
        <div><img src="./img/00007.jpeg" id="img7" class="img" alt=""></div>
        <div><img src="./img/00008.jpeg" id="img8" class="img" alt=""></div>
        <div><img src="./img/00009.jpeg" id="img9" class="img" alt=""></div>
        <div><img src="./img/00010.jpeg" id="img10" class="img" alt=""></div> 
        <!-- <ul id="list"></ul>     -->
      </div>

 
      

      </div>
    

    </main>
    <footer id="footer">
        <div id="copywrite">(c) copyright</div>
    </footer>

    

<script>




  // ------------------
      // グローバル変数
      // ------------------
      let APPID = "1027306534650996418"; //アプリID *必須
      let AFF = "1d1234e2.3dc1e4f6.1d1234e3.4f94fc78";
      let MAX_PAGE = 1; //最大取得ページ件数
      let HITS = 30; //1ページ当たりの表示件数
      let GENRE = 555086;
      let SHOP = "cocacoca";
      let KEYWORD = encodeURIComponent("カラコン"); //絞り込みしたい単語
      let SORT = encodeURIComponent("standard"); //レビュー降順
      let IMGFLG = 1;
      let GENRECOUNT =1;

      // ------------------
      // 楽天API
      // ------------------
      $(function () {
        function put_item(item) {
          //ループで表示したいHTML部分を作成 ※ループでID変えなきゃ
          $(".cssgrid").append(
            `
            <div>
            <img src="${item.mediumImageUrls[0].imageUrl.replace("?_ex=128x128","")}" id="img1" class="img">
            <span style="color:red"><a href="${item.affiliateUrl}" target="_blank">●</a></span>
            </div>           
            `
          );
        }

        //ajax
        function search_rakuten(page) {
          $.ajax({
            url:
              "https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706?format=json&applicationId=" +
              APPID +
              "&affiliateId=" +
              AFF +
              "&shopCode=" +
              SHOP +
              // "&genreId=" +
              // GENRE +
              // "&keyword=" +
              // KEYWORD +
              "&imageFlag=" +
              IMGFLG +
              "&genreInformationFlag=" +
              GENRECOUNT +
              "&sort=" +
              SORT +
              "&page=" +
              page +
              "&hits=" +
              HITS,
            type: "get",
            dataType: "json",
            timeout: 10000,
            async: "true",
          })
            //読み込み成功時の処理
            .done(function (data) {
              // 1商品ずつhtml置く
              goods = data.Items;

              for (let i in goods) {
                put_item(goods[i].Item);
              }
            })
            //読み込み失敗時の処理
            .fail(function (data) {
              console.log("読み込みエラー");
            });
        }

        search_rakuten(1);
        search_rakuten(2);
        search_rakuten(3);
        search_rakuten(4);
        search_rakuten(5);
        search_rakuten(6);

      });




      $(window).on('load',function(){
  $('.img').on('click', function(){
    let img_id = $(this).attr('src');
    let item1 = $('#item1').attr('src');
    let item2 = $('#item2').attr('src');
    let item3 = $('#item3').attr('src');
    let item4 = $('#item4').attr('src');
    let item5 = $('#item5').attr('src');
    let item6 = $('#item6').attr('src');
    if(item1 ==="./img/default.jpg"){
      $('#item1').attr('src', img_id);
      $('#item_src1').attr('name', img_id);
    }else if(item2 === "./img/default.jpg"){
      $('#item2').attr('src', img_id);
      $('#item_src2').attr('name', img_id);
    }else if(item3 === "./img/default.jpg"){
      $('#item3').attr('src', img_id);
      $('#item_src3').attr('name', img_id);
    }else if(item4 === "./img/default.jpg"){
      $('#item4').attr('src', img_id);
      $('#item_src4').attr('name', img_id);
    }else if(item5 === "./img/default.jpg"){
      $('#item5').attr('src', img_id);
      $('#item_src5').attr('name', img_id);
    }else if(item6 === "./img/default.jpg"){
      $('#item6').attr('src', img_id);
      $('#item_src6').attr('name', img_id);
      $('#submit').attr('type', "submit");
    }else{
      $('#submit').attr('type', "submit");
    }

   $('#item1').on('click', function(){
      $(this).attr('src', "./img/default.jpg");
    })
    $('#item2').on('click', function(){
      $(this).attr('src', "./img/default.jpg");
    })
    $('#item3').on('click', function(){
      $(this).attr('src', "./img/default.jpg");
    })
    $('#item4').on('click', function(){
      $(this).attr('src', "./img/default.jpg");
    })
    $('#item5').on('click', function(){
      $(this).attr('src', "./img/default.jpg");
    })
    $('#item6').on('click', function(){
      $(this).attr('src', "./img/default.jpg");
    })  

  });
});


</script>





  </body>
</html>
