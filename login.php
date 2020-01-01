<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>北大乐活-登录</title>
    <link rel="icon" type="image/png" href="ico/logo.png" />
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <!-- 导航栏 -->
    <nav class="global-nav">
        <a href="index.php" id="global-nav-logo">
            <img src="img/logo.png" height="100%">
        </a>
        <div class="nav-item left-nav-item">
            <a href="index.php">首页</a>
        </div>
        <div class="nav-item left-nav-item">
            <a href="activity_list.php">分类</a>
        </div>
        <div class="search-bar">
            <form action="activity_list.php" method="get">
                <input type="text" name="query">
                <button type="submit">搜&nbsp;索</button>
            </form>
        </div>
        <?php
        if (isset($_COOKIE['username'])) {
            echo '
            <div class="nav-item right-nav-item">
                <a href="user_center_userinfo.php">个人中心</a>
            </div>
            <div class="nav-item right-nav-item">
                <b>' . $_COOKIE['usernickname'] . '</b>
                <span class="logout-button"><a href="do_logout.php">[退出]</a></span>
            </div>
            <div class="nav-item right-nav-item" id="reminder">
                <a>提醒</a><div class="reminder-list"><ul><li>>&nbsp;&nbsp;您报名的“北大剧星风采大赛初赛”将于今天举行</li><li>>“数学文化节”的时间更改为2020年4月2日</li></ul></div>
            </div>';
        } else {
            echo '
            <div class="nav-item right-nav-item">
                <a href="register.php">注册</a>
            </div>
            <div class="nav-item right-nav-item active">
                <a href="login.php"><b>登录</b></a>
            </div>';
        }
        ?>

    </nav>
    <div class="fix"></div>

    <!-- 登录页面主体 -->
    <div class="bg">
        <div class="login-box">
            <div class="l-b">
                <div class="label1">
                    <span style="top: 40px;left: 205px;">登 录</span>
                </div>
                <div class="label2">
                    <form action="dologin.php" method="post">
                        <span style="top: 110px;left: 90px;">用户名：</span>
                        <input id="sname" name="username" value class="text_field" style="top: 110px;left: 190px;">
                        <span style="top: 170px;left: 90px;">密码：</span>
                        <input type="password" name="pwd" id="sdep" value class="text_field" style="top: 170px;left: 190px;">
                        <button class="login-btn" type="submit" style="top: 280px;left: 190px;">登 录</button>
                    </form>
                    <div class="register-link">
                        <a href="register.php">新用户注册</a>&nbsp;&nbsp;
                        <a href="#">忘记密码</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 页面最下方footer -->
    <div class="footer"></div>

</body>

</html>