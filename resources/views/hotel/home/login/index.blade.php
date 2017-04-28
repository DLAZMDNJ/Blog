<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>后台登录</title>
<meta name="author" content="DeathGhost">
<link rel="stylesheet" type="text/css" href="{{asset("/admin/login/style.css")}}" tppabs="css/style.css">
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="{{asset("/admin/login/jquery.js")}}"></script>
<script src="{{asset("/admin/login/verificationNumbers.js")}}" tppabs="js/verificationNumbers.js"></script>
<script src="{{asset("/admin/login/Particleground.js")}}" tppabs="js/Particleground.js"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
  //测试提交，对接程序删除即可
  $(".submit_btn").click(function(){
	  location.href="javascrpt:;"/*tpa=http://***index.html*/;
	  });
});
</script>
<style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>
<body><canvas class="pg-canvas" width="1755" height="861"></canvas>
<dl class="admin_login">
 <dt>
  <strong>QM  酒店登录</strong>
  <em>Welcome !</em>
 </dt>
 <dd class="user_icon">
 <form method="post" action="/doLogin">
 <input	type="hidden" name="_token" value="{{csrf_token()}}">
  <input placeholder="账号" class="login_txtbx" type="text" name="name">
 </dd>
 <dd class="pwd_icon">
  <input placeholder="密码" class="login_txtbx" type="password" name="pwd">
 </dd>
 <dd class="val_icon">
  <div class="checkcode">
    <input id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx" type="text">
    <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
  </div>
  <input value="验证码核验" class="ver_btn" onclick="validate();" type="button">
 </dd>
 <dd>
  <input class="submit_btn" type="submit" value="立即登陆">
 </form>
  </dd>
 <dd>
 <a href="/qm/home/register"><span style="font-size: 20px; margin-left:100px;color:#ccc;">马 上 注 册</span></a>
  <p>© 2017-2018  版权所有</p>
  <p>Mr.Qm</p>
 </dd>
</dl>


</body></html>