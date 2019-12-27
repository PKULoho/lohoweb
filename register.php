<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>北大乐活-注册</title>
    <link rel="icon" type="image/png" href="ico/logo.png" />
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="footer.css">
    <script type="text/javascript" src="register.js"></script>
</head>

<body>

    <!-- 导航栏 -->
    <nav class="global-nav">
        <a href="index.html" id="global-nav-logo">
            <img src="img/logo.png" height="100%">
        </a>
        <div class="nav-item left-nav-item">
            <a href="index.html">首页</a>
        </div>
        <div class="nav-item left-nav-item">
            <a href="">分类</a>
        </div>
        <div class="nav-item right-nav-item active">
            <a href="register.html">注册</a>
        </div>
        <div class="nav-item right-nav-item">
            <a href="login.html">登录</a>
        </div>
    </nav>
    <div class="fix"></div>

    <!-- 网页主体 -->
    <div class="bg">
        <div class="register-box">
            <img class="r-b-img" src="img/register-box.svg">
            <div class="label1">
                <span style="top: 20px;left: 200px;">个人信息</span>
                <span style="top: 245px;left: 182px">用户名和密码</span>
            </div>
            <div class="label2">
                <form action="doregister.php" method="post" onsubmit="return verify()">
                    <span style="top: 65px;left: 100px;">姓名：</span>
                    <input id="sname" name="sname" value class="text_field" style="top: 65px;left: 190px;">
                    <span style="top: 105px;left: 100px;">院系：</span>
                    <input id="sdep" name="sdep" value class="text_field" style="top: 105px;left: 190px;">
                    <span style="top: 145px;left: 100px;">学号：</span>
                    <input id="sno" name="sno" value class="text_field" style="top: 145px;left: 190px;">
                    <span style="top: 185px;left: 100px;">手机号：</span>
                    <input id="stel" name="stel" value class="text_field" style="top: 185px;left: 190px;">
                    <span style="top: 290px;left: 100px;">用户名：</span>
                    <input id="username" name="username" value class="text_field" style="top: 290px;left: 190px;">
                    <span style="top: 330px;left: 100px;">密码：</span>
                    <input id="password" name="pwd" type="password" value class="text_field" style="top: 330px;left: 190px;">
                    <span style="top: 370px;left: 100px;">确认密码：</span>
                    <input id="password2" name="pwd2" type="password" value class="text_field" style="top: 370px;left: 190px;">
                    <button class="register-btn" type="submit" style="top: 450px;left: 200px;">注 册</button>
                </form>
                <div class="login-link">
                    <a href="login.php">已有账号？立即登录</a>
                </div>
            </div>
        </div>


    </div>

    <!-- 页面最下方footer -->
    <div class="footer"></div>
</body>

</html>