<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>心愿单</title>
    <link rel="icon" type="image/png" href="ico/logo.png" />
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="user_side_nav.css">
    <link rel="stylesheet" href="user_center_collection.css">
</head>

<body>
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
                    <a href="user_center_userinfo.php">
                        <li class="module-item">个人信息</li>
                    </a>
                    <a href="user_center_collection.php">
                        <li class="module-item active">心愿单</li>
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
        <!--侧边导航栏结束-->

        <div class="right-area">
            <div class="right-section">
                <h1>心愿单</h1>
                <div class="collection-items">
                    <?php
                    define('DB_HOST', 'localhost');
                    define('DB_USER', 'root');
                    define('DB_PASS', 'abcd');
                    define('DB_NAME', 'loho');
                    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                    $sqlstr = 'SELECT * FROM collection_act, act_info, act_subject WHERE collection_act.collection_act_id = act_info.act_id AND act_subject.act_id = act_info.act_id AND collection_act.user_name = "' . $_COOKIE['username'] . '"';
                    $result = mysqli_query($dbc, $sqlstr);
                    while ($row = mysqli_fetch_array($result)) {
                        create_item($dbc, $row);
                    }

                    function create_item($dbc, $row)
                    {
                        $act_id = $row['act_id'];
                        $act_name = $row['act_name'];
                        $act_time = $row['act_time'];
                        $act_theme = $row['act_subject'];
                        if ($act_time == "长期") {
                            $current_act_status = "正在举行";
                        } else {
                            if (strtotime($row['act_first_day']) < time()) {
                                $current_act_status = "已结束";
                            } else if (strtotime($row['act_first_day']) > time()) {
                                $current_act_status = "未举行";
                            } else {
                                $current_act_status = "正在举行";
                            }
                        }

                        $joinstr = 'SELECT * FROM joined_act WHERE user_name = "' . $_COOKIE['username'] . '" AND joined_act_id = ' . $row['act_id'];
                        $result = mysqli_query($dbc, $joinstr);
                        $joined = false;
                        while ($rowtemp = mysqli_fetch_array($result)) {
                            $joined = true;
                        }

                        echo '
                    <div class="collection-item">
                        <a href="' . $act_id . '.php">
                            <img src="pic/' . $act_id . '.png" alt="' . $act_name . '">
                            <div class="activity-info">
                                <div class="info-item">活动名：' . $act_name . '</div>
                                <div class="info-item">活动时间：' . $act_time . '</div>
                                <div class="info-item">活动状态：' . $current_act_status . '</div>
                                <div class="info-item">主题内容：' . $act_theme . '</div>
                            </div>
                        </a>
                        <div class="activity-options"><br><br><br>';
                        if ($joined == true) {
                            echo '<div><a href="" class="activity-option">已参加</a></div>';
                        } else if (strtotime($row['act_first_day']) < time()) {
                            echo '<div><a href="dojoin.php?id=' . $act_id . '" class="activity-option">标为已参加</a></div>';
                        }
                        echo '<div><a href="' . $act_id . '.php" class="activity-option">查看详情</a></div>
                        <div><a href="doremovewishlist.php?id=' . $act_id . '" class="activity-option">移出心愿单</a></div>
                        </div>
                    </div>';
                    }
                    ?>
                    <!--<div class="collection-item">
                        <a href="">
                            <img src="pic/30.png" alt="北京大学剧星风采大赛初赛">
                            <div class="activity-info">
                                <div class="info-item">活动名：北京大学剧星风采大赛初赛</div>
                                <div class="info-item">活动时间：2019年11月16日-11月24日</div>
                                <div class="info-item">活动状态：已结束</div>
                                <div class="info-item">主题内容：文艺-话剧比赛</div>
                            </div>
                        </a>
                        <div class="activity-options">
                            <br><br><br>
                            <div><a href="" class="activity-option">已参加</a></div>
                            <div><a href="" class="activity-option">查看详情</a></div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

</body>

</html>