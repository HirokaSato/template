<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>top</title>
    <link rel="stylesheet" href="../yamagishisan/common/bootstrap.min.css">
    <link rel="stylesheet" href="../yamagishisan/common/common.css">
    <script src="../yamagishisan/common/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style media="screen">
      .header-wrapper{
        display:flex;
      }
      .flex-container{
        display:flex;
        min-height: 709px;
      }
      .menu-wrapper{
        width: 200px;
        box-shadow: 0 1px 3px rgb(106,137,152);
      }
      .menu-wrapper ul{
        list-style: none;
        padding-left: 0px;
      }
      .menu-wrapper ul li{
        text-align: center;
      }
      .menu-wrapper ul li a{
        color:#000;
        display: block;
        border-bottom: 1px solid rgba(106,137,152,0.4);
        padding:10px;
        text-decoration: none;
      }
      .menu-wrapper ul li a:hover{
        background: rgb(40,167,69);
        color:#FFF;
      }
      .content-wrapper{
        width:100%;
      }
      /* ハンバーガーアイコン */
      .hamburger {
        position: absolute;
        display: block;
        width: 32px;
        height: 20px;
        z-index: 99999;
        box-sizing: border-box;
        display:none;
        z-index: 99999;
      }

      .hamburger span {
        display: inline-block;
        transition: all .4s;
        box-sizing: border-box;
        position: absolute;
        right: 0;
        width: 100%;
        height: 3px;
        background-color: #FFF;
      }

      .hamburger span:nth-of-type(1) {
        top: 0;
      }

      .hamburger span:nth-of-type(2) {
        top: 8px;
      }

      .hamburger span:nth-of-type(3) {
        bottom: 0;
      }

      .hamburger.active span:nth-of-type(1) {
        transform: translateY(8px) rotate(-45deg);
      }

      .hamburger.active span:nth-of-type(2) {
        opacity: 0;
      }

      .hamburger.active span:nth-of-type(3) {
        transform: translateY(-8px) rotate(45deg);
      }
      /* ナビゲーションバー */
      #navigation{
        position: fixed;
        display: none;
        width: 50%;
        height: 100vh;
        top: 0;
        left: 0;
        background-color: rgb(76,76,76);
        z-index: 99998;
        box-shadow: 0 1px 3px rgb(106,137,152);
      }
      #navigation .navigation_inner{
        display: table;
        width: 100%;
        height: 100%;
      }
      #navigation .navigation_inner .navigation_menu{
        padding-top: 70px;
        padding-left: 0px;
        list-style: none;
      }
      #navigation .navigation_inner .navigation_menu .navigation_item{
        width: 100px;
        height: 30px;
        margin: 16px auto 0 auto;
      }
      #navigation .navigation_inner .navigation_menu .navigation_item:first-child{
        margin-top: 0;
      }
      #navigation .navigation_inner .navigation_menu .navigation_item a{
        display: block;
        position: relative;
        text-decoration: none;
        font-size: 1rem;
        color: #FFF;
        line-height: 30px;
        text-align: center;
        /* border-bottom: 1px solid rgb(106,137,152); */
      }
      @media screen and (max-width: 500px) {
        .hamburger{
          display: block;
        }
        .logo-wrapper{
          margin-left:auto;
          margin-right:auto;
        }
        .menu-wrapper{
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <div class="header-wrapper">
        <div class="logo-wrapper">
          ロゴ
        </div>
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div id="navigation">
          <div class="navigation_inner">
            <ul class="navigation_menu">
              <li class="navigation_item"><a href="#">リンク</a></li>
              <li class="navigation_item"><a href="#">ログアウト</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="main">
      <div class="flex-container">
        <div class="menu-wrapper">
          <ul>
            <li>
              <a href="#">リンク</a>
            </li>
            <li>
              <a href="#">ログアウト</a>
            </li>
          </ul>
        </div>
        <div class="content-wrapper">
        </div>
      </div>
    </div>
    <footer>
      <div class="">
        フッター
      </div>
    </footer>
    <script>
    // ハンバーガーメニューアニメーション
      $(".hamburger").on('click', function(){
          $(this).toggleClass('active');
        $('#navigation').animate({width: 'toggle'}, 400);
      })
    </script>
  </body>
</html>
