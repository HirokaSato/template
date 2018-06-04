<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="../yamagishisan/common/bootstrap.min.css">
    <link rel="stylesheet" href="../yamagishisan/common/common.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style media="screen">
      .main {
        flex: 1 0 auto;
        position: relative;
      }
      .form_des{
        border-radius: 4.5rem;
        line-height: 2.5;
      }
      .login-box{
        margin: 0 auto;
        text-align: center;
      }
      .login-box{
        color:#000;
        font-weight:bold;
        font-size:45px;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        width: 35%;
        height: 455px;
      }
      .login-info{
        width: 100%;
        height: 280px;
        background: #FFF;
        margin: 0 auto;
        text-align:left;
        padding: 38px;
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
      }
      .login-info label{
        font-size: 20px;
      }
      @media screen and (max-width: 500px) {
        .logo-tab{
          text-align: center;
        }
        .login-box{
          width:85%;
        }
      }
    </style>
  </head>
  <body>
    <div class="main well">
      <div class="login-box">
        <p>LOGIN</p>
        <div class="login-info">
             <div class="form-group">
               <input text="email" id="login_email" name="login_email" class="form-control form_des" placeholder="Email" value="">
             </div>
             <div class="form-group">
               <input text="password" id="login_password" name="login_password" class="form-control form_des" placeholder="Password" type="password" value="">
             </div>
             <div class="form-group btn-block" style="text-align:center;">
               <button type="submit" class="btn btn-success form_des" style="width:100%;">ログイン</button>
             </div>
        </div>
      </div>
    </div>
  </body>
</html>
