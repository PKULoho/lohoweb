<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>北大乐活</title>
    <link rel="icon" type="image/png" href="ico/logo.png" />
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <nav class="global-nav">
        <a href="index.html" id="global-nav-logo">
            <img src="img/logo.png" height="100%">
        </a>
        <div class="nav-item left-nav-item active">
            <a href="index.html">首页</a>
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
            </div>';
        } else {
            echo '
            <div class="nav-item right-nav-item">
                <a href="register.php">注册</a>
            </div>
            <div class="nav-item right-nav-item">
                <a href="login.php"><b>登录</b></a>
            </div>';
        }
        ?>

    </nav>
    <div class="fix"></div>

    <p>这里是网页主体内容</p>

    <div class="footer"></div>
</body>

</html>