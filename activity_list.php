<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>北大乐活</title>

    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/daterangepicker.css" />
    <script src="js/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/daterangepicker.js"></script>

    <link rel="icon" type="image/png" href="ico/logo.png" />
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="activity_list.css">
    <script type="text/javascript" src="activity_list.js"></script>


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
    <!--分类列表-->
    <?php
    $time = null;
    if (isset($_GET['time'])) $time = $_GET['time'];
    $status = null;
    if (isset($_GET['status'])) $status = $_GET['status'];
    $theme = null;
    if (isset($_GET['theme'])) $theme = $_GET['theme'];
    $type = null;
    if (isset($_GET['type'])) $type = $_GET['type'];
    $host = null;
    if (isset($_GET['host'])) $host = $_GET['host'];
    $location = null;
    if (isset($_GET['location'])) $location = $_GET['location'];
    ?>
    <div class="list a">
        <ul class="each_list">
            <li class="theme">活动时间：</li>
            <?php
            if ($time == null) $time = 0;
            $time_map = [
                0 => "全部",
                1 => "今天",
                2 => "明天",
                3 => "本周",
                4 => "下周",
                5 => "本月内",
            ];
            for ($i = 0; $i < count($time_map); $i++) {
                echo '<li getid="' . $i . '"';
                if ($time == $i) echo ' class="active"';
                echo '>' . $time_map[$i] . '</li>';
            }
            if (!is_numeric($time)) {
                echo '<li><label class="active">按日历查询</label>';
            } else {
                echo '<li><label>按日历查询</label>';
            }
            echo '<input type="text" id="demo" class="form-control"></li>';
            ?>
        </ul>
        <br>
        <hr>
        <ul class="each_list">
            <li class="theme">活动状态：</li>
            <?php
            if ($status == null) $status = 0;
            $status_map = [
                0 => "全部",
                1 => "已结束",
                2 => "正在举行",
                3 => "未举行",
            ];
            for ($i = 0; $i < count($status_map); $i++) {
                echo '<li getid="' . $i . '"';
                if ($status == $i) echo ' class="active"';
                echo '>' . $status_map[$i] . '</li>';
            }
            ?>
        </ul>
        <br>
        <hr>
        <ul class="each_list">
            <li class="theme">主题内容：</li>
            <?php
            if ($theme == null) $theme = 0;
            $theme_map = [
                0 => "全部",
                1 => "学术",
                2 => "文艺",
                3 => "体育",
                4 => "生活",
                5 => "其他",
            ];
            for ($i = 0; $i < count($theme_map); $i++) {
                echo '<li getid="' . $i . '"';
                if ($theme == $i) echo ' class="active"';
                echo '>' . $theme_map[$i] . '</li>';
            }
            ?>
        </ul>
        <br>
        <hr>
        <ul class="each_list">
            <li class="theme">活动类别：</li>
            <?php
            if ($type == null) $type = 0;
            $type_map = [
                0 => "全部",
                1 => "讲座",
                2 => "比赛",
                3 => "演出",
                4 => "体验类活动",
                5 => "志愿活动",
                6 => "社会实践",
                7 => "会议/论坛",
                8 => "其他活动",
            ];
            for ($i = 0; $i < count($type_map); $i++) {
                echo '<li getid="' . $i . '"';
                if ($type == $i) echo ' class="active"';
                echo '>' . $type_map[$i] . '</li>';
            }
            ?>
        </ul>
        <br>
        <hr>
        <ul class="each_list">
            <li class="theme">主办方：</li>
            <?php
            if ($host == null) $host = 0;
            $host_map = [
                0 => "全部",
                1 => "校团委",
                2 => "校学生会",
                3 => "院系",
                4 => "社团",
                5 => "极客实验室",
                6 => "其他",
            ];
            for ($i = 0; $i < count($host_map); $i++) {
                echo '<li getid="' . $i . '"';
                if ($host == $i) echo ' class="active"';
                echo '>' . $host_map[$i] . '</li>';
            }
            ?>
        </ul>
        <br>
        <hr>
        <ul class="each_list">
            <li class="theme">活动地点：</li>
            <?php
            if ($location == null) $location = 0;
            $location_map = [
                0 => "全部",
                1 => "校内",
                2 => "北京市",
                3 => "其他",
            ];
            for ($i = 0; $i < count($location_map); $i++) {
                echo '<li getid="' . $i . '"';
                if ($location == $i) echo ' class="active"';
                echo '>' . $location_map[$i] . '</li>';
            }
            ?>
        </ul>
    </div>

    <!--活动列表-左侧-->
    <div class="list_left">
        <div class="list_title">检索结果</div>

        <?php
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', 'abcd');
        define('DB_NAME', 'loho');
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sqlstr = 'SELECT DISTINCT act_info.act_id, act_name, act_time, act_subject, act_first_day FROM act_info, act_subject, act_host_relationship WHERE act_info.act_id = act_subject.act_id AND act_info.act_id = act_host_relationship.act_id';

        if (isset($_GET['query'])) {
            $query = $_GET['query'];
            $sqlstr = $sqlstr . ' AND (act_name LIKE "%' . $query . '%" OR act_intro LIKE "%' . $query . '%")';
            echo '搜索"' . $query . '"的结果';
        }
        echo '<div class="activity_left">
                <div class="collection-items">';
        if (isset($_GET['time'])) {
            if (is_numeric($time)) {
                switch ($time) {
                    case 1:
                        $sqlstr = $sqlstr . ' AND act_first_day = "' . date("Y-m-d") . '"';
                        break;
                    case 2:
                        $sqlstr = $sqlstr . ' AND act_first_day = "' . date("Y-m-d", strtotime("+1 day")) . '"';
                        break;
                    case 3:
                        $sqlstr = $sqlstr . ' AND act_first_day BETWEEN "' . date("Y-m-d") . '" AND "' . date("Y-m-d", strtotime("+7 day")) . '"';
                        break;
                    case 4:
                        $sqlstr = $sqlstr . ' AND act_first_day BETWEEN "' . date("Y-m-d", strtotime("+7 day")) . '" AND "' . date("Y-m-d", strtotime("+14 day")) . '"';
                        break;
                    case 5:
                        $sqlstr = $sqlstr . ' AND act_first_day BETWEEN "' . date("Y-m-d") . '" AND "' . date("Y-m-d", strtotime("+1 month")) . '"';
                        break;
                }
            } else {
                $start_end_date = explode(" - ", $time);
                $start_date = $start_end_date[0];
                $end_date = $start_end_date[1];
                $sqlstr = $sqlstr . ' AND act_first_day BETWEEN "' . $start_date . '" AND "' . $end_date . '"';
            }
        }
        // 此处查询有简化
        if (isset($_GET['status'])) {
            switch ($status) {
                case 1:
                    $sqlstr = $sqlstr . ' AND act_first_day < "' . date("Y-m-d") . '"';
                    break;
                case 2:
                    $sqlstr = $sqlstr . ' AND act_first_day = "' . date("Y-m-d") . '"';
                    break;
                case 3:
                    $sqlstr = $sqlstr . ' AND act_first_day > "' . date("Y-m-d") . '"';
                    break;
            }
        }
        if (isset($_GET['theme']) && $_GET['theme'] > 0) {
            $sqlstr = $sqlstr . ' AND act_subject = "' . $theme_map[$_GET['theme']] . '"';
        }
        if (isset($_GET['type']) && $_GET['type'] > 0) {
            $sqlstr = $sqlstr . ' AND act_type = "' . $type_map[$_GET['type']] . '"';
        }
        if (isset($_GET['type']) && $_GET['type'] > 0) {
            $sqlstr = $sqlstr . ' AND act_type = "' . $type_map[$_GET['type']] . '"';
        }
        if (isset($_GET['host'])) {
            switch ($host) {
                case 1:
                    $sqlstr = $sqlstr . ' AND host_id = 33';
                    break;
                case 2:
                    $sqlstr = $sqlstr . ' AND host_id = 28';
                    break;
                    /* 3和4没有做 */
                case 5:
                    $sqlstr = $sqlstr . ' AND host_id = 22';
                    break;
            }
        }
        if (isset($_GET['location'])) {
            switch ($location) {
                case 1:
                    $sqlstr = $sqlstr . ' AND in_pku = "是"';
                    break;
                case 2:
                    $sqlstr = $sqlstr . ' AND in_beijing = "是"';
                    break;
                case 3:
                    $sqlstr = $sqlstr . ' AND in_beijing <> "是"';
                    break;
            }
        }

        //echo $sqlstr . '<br>';

        $result = mysqli_query($dbc, $sqlstr);
        while ($row = mysqli_fetch_array($result)) {
            //echo $row[0] . '<br>';
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

            $collectionstr = 'SELECT * FROM collection_act WHERE user_name = "' . $_COOKIE['username'] . '" AND collection_act_id = ' . $row['act_id'];
            $result = mysqli_query($dbc, $collectionstr);
            $collected = false;
            while ($rowtemp = mysqli_fetch_array($result)) {
                $collected = true;
            }

            echo '
                    <div class="collection-item">
                    <a href="">
                        <img src="pic/' . $act_id . '.png" alt="' . $act_name . '">
                        <div class="activity-info">
                            <div class="info-item">活动名：' . $act_name . '</div>
                            <div class="info-item">活动时间：' . $act_time . '</div>
                            <div class="info-item">活动状态：' . $current_act_status . '</div>
                            <div>
                                <div class="info_item_left">主题内容：' . $act_theme . '</div>
                                <div class="info_item_right activity-options">';
            if ($joined == true) {
                echo '<div><a href="" class="activity-option">已参加</a></div>';
            } else if (strtotime($row['act_first_day']) < time()) {
                echo '<div><a href="dojoin.php?id=' . $act_id . '" class="activity-option">标为已参加</a></div>';
            }
            if ($collected == false) {
                echo '<div><a href="do_wishlist_add.php?id=' . $act_id . '" class="activity-option">加入心愿单</a></div>';
            } else {
                echo '<div><a href="" class="activity-option">已加入心愿单</a></div>';
            }
            echo '<div><a href="" class="activity-option">查看详情</a></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>';
        }
        ?>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!--活动列表-右侧-->
    <div class="list_right">
        <div class="list_title">为你推荐</div>
        <div class="activity_right">
            <div class="collection-items">

                <div class="collection-item">
                    <a href="">
                        <img src="pic/28.png" alt="北京大学十佳歌手比赛初赛">
                        <div class="activity-info" style="padding: 5px 0px 10px 0px;">
                            <div>北京大学十佳歌手比赛初赛</div>
                            <div>时间待定</div>
                            <div>
                                <div>主题内容：文艺-音乐比赛</div>
                            </div>
                    </a>

                </div>
            </div>
            <div class="collection-items">
                <div class="collection-item">
                    <a href="">
                        <img src="pic/14.png" alt="法学院第十一届“君合杯”模拟法庭比赛决赛">
                        <div class="activity-info" style="padding: 5px 0px 10px 0px">

                            <div>法学院第十一届“君合杯”<br>模拟法庭比赛决赛</div>
                            <div>2019年5月18日 18:30-21:00</div>
                            <div>
                                <div>主题内容：学术-法律比赛</div>
                            </div>
                    </a>
                </div>
            </div>
            <div class="collection-item">
                <a href="">
                    <img src="pic/29.png" alt="北京大学第十六届学生“演讲十佳”大赛开始报名啦！">
                    <div class="activity-info" style="padding: 5px 0px 10px 0px">

                        <div>北京大学第十六届学生“演讲<br>十佳”大赛开始报名啦！</div>
                        <div>2019年11月2日</div>
                        <div>
                            <div>主题内容：文艺-演讲比赛</div>
                        </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div class="footer"></div>
</body>

</html>