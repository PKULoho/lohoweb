<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>个人信息</title>
    <link rel="icon" type="image/png" href="ico/logo.png" />
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="user_side_nav.css">
    <link rel="stylesheet" href="user_center_userinfo.css">
</head>

<body>
    <!-- 顶部导航栏 -->
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
            <div class="nav-item right-nav-item active">
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
            <div class="nav-item right-nav-item">
                <a href="login.php"><b>登录</b></a>
            </div>';
        }
        ?>

    </nav>
    <div class="fix"></div>

    <div class="main-container">
        <!--侧边导航栏开始-->
        <div class="side-nav">
            <div class="side-nav-header">个人中心</div>
            <div class="side-nav-modules">
                <ul class="module-list">
                    <a href="">
                        <li class="module-item active">个人信息</li>
                    </a>
                    <a href="user_center_collection.php">
                        <li class="module-item">心愿单</li>
                    </a>
                    <a href="user_center_past.php">
                        <li class="module-item">过往活动</li>
                    </a>
                    <a href="user_center_future.php">
                        <li class="module-item">未来活动</li>
                    </a>
                </ul>
            </div>
        </div>
        <!--侧边导航栏结束 个人信息-->
        <div class="u-c-label">
            <span>个人信息</span>
        </div>
        <div class="u-c-box">
            <form>
                <div class="u-i-item">
                    <div class="u-i-item item01-label">
                        <img src="head/a.jpg">
                    </div>

                </div>
                <div class="u-i-item">
                    <div class="u-i-item item02-label">
                        <span>用户名：</span>
                    </div>
                    <div class="u-i-item item02-input">
                        <input id="username" type="text" value="董小葵">
                    </div>
                </div>
                <div class="u-i-item">
                    <div class="u-i-item item03-label">
                        <span>姓名：</span>
                    </div>
                    <div class="u-i-item item03-input">
                        <input id="name" type="text" value="董婧文">
                    </div>
                </div>
                <div class="u-i-item">
                    <div class="u-i-item item04-label">
                        <span>性别：</span>
                    </div>
                    <div class="u-i-item item04-input">
                        <input name="sex" type="radio" value="男"><span>男</span>&nbsp;&nbsp;&nbsp;
                        <input name="sex" type="radio" value="女"><span>女</span>
                    </div>
                </div>
                <div class="u-i-item">
                    <div class="u-i-item item05-label">
                        <span>院系：</span>
                    </div>
                    <div class="u-i-item item05-input">
                        <input id="sdep" type="text" value="信息管理系">
                    </div>
                </div>
                <div class="u-i-item">
                    <div class="u-i-item item06-label">
                        <span>学号：</span>
                    </div>
                    <div class="u-i-item item06-input">
                        <input id="sno" type="text" value="1800016640">
                    </div>
                </div>
                <div class="u-i-item">
                    <div class="u-i-item item07-label">
                        <span>手机号：</span>
                    </div>
                    <div class="u-i-item item07-input">
                        <input id="stel" type="text" value="">
                    </div>
                </div>
            </form>
            <div class="mod-password-link"><a href="#">修改密码</a></div>
            <div class="update-btn"><a href="#">更新信息</a></div>

        </div>

    </div>

    

</body>

</html>