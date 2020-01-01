<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LOHO~</title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="activity_host.css">
    <link rel="stylesheet" href="user_center_collection.css">
    <link rel="stylesheet" href="INDEXcss.css">
    <style>
        .global-nav .search-bar input{
            height: 30px;
        }
    </style>
</head>


<body>
<nav class="global-nav">
        <a href="index.php" id="global-nav-logo">
            <img src="img/logo.png" height="100%">
        </a>
        <div class="nav-item left-nav-item active">
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
            <div class="nav-item right-nav-item">
                <a href="login.php"><b>登录</b></a>
            </div>';
        }
        ?>

    </nav>


<div class="fix"></div>
<br>
<div class="mainpic" style="width: 1200px;height: 356px; margin: 0 auto; text-align: center;">
    <a href="30.php"><img src="pic/main.jpg" style="width: 1100px; "></a>
</div>
<br>
<div class="categories">
    <a href="activity_list.php?type=1">
    <div class="category-item">
        <button class="button" type="button"><i class="icon icon-jiangzuo"></i>讲座</button>
    </div>
    </a>
    <a href="activity_list.php?type=2">
    <div class="category-item">
        <button class="button" type="button"><i class="icon icon-bisai"></i>比赛</button>
    </div>
    </a>
    <a href="activity_list.php?type=3">
    <div class="category-item">
        <button class="button" type="button"><i class="icon icon-yanchu"></i>演出</button>
    </div>
    </a>
    <a href="activity_list.php?type=4">
    <div class="category-item">
        <button class="button" type="button" style="padding-left:0;font-size:14px"><i class="icon icon-tiyan"></i>体验类活动</button>
    </div>
    </a>
    <a href="activity_list.php?type=5">
    <div class="category-item">
        <button class="button" type="button"><i class="icon icon-zhiyuan"></i>志愿活动</button>
    </div>
    </a>
    <a href="activity_list.php?type=6">
    <div class="category-item">
        <button class="button" type="button"><i class="icon icon-shijian"></i>社会实践</button>
    </div>
    </a>
    <a href="activity_list.php?type=7">
    <div class="category-item">
        <button class="button" type="button"><i class="icon icon-luntan"></i>论坛/会议</button>
    </div>
    </a>
    <a href="activity_list.php?type=8">
    <div class="category-item">
        <button class="button" type="button"><i class="icon icon-qita"></i>其他活动</button>
    </div>
    </a>

</div>

    </div>

</div>

<?php

//从cookie获取用户最初在登陆界面输入的信息
$username = 'root';
$password = 'abcd';
$sqlname = 'loho';


//连接数据库
$mysqli = new mysqli('localhost', $username, $password, $sqlname);

//下面先搞智能推荐的输出
$file = fopen("RULES.csv","r",";");
$yuanyin=array();
$jieguo=array();
$recommend=array();
while(! feof($file))
  {
  array_push($yuanyin,fgetcsv($file)[0]);
  array_push($jieguo,fgetcsv($file)[0]);
  }
$sql_query = "SELECT user_name,joined_act_id FROM joined_act";
$ppp = $mysqli->query($sql_query, MYSQLI_STORE_RESULT);

$alreadybought=$ppp->fetch_row();


echo'<div class="category-container">
<br>
<div class="category" id="zhineng">智能推荐</div>
<div class="items">';

    $sql_query = "SELECT act_id,act_name,act_first_day,act_place FROM act_info WHERE act_id>25";
    $itemlist = $mysqli->query($sql_query, MYSQLI_STORE_RESULT);

    //计数，智能推荐显示六个活动
    $itemcount=0;
    while ((list($id,$name,$first,$place) = $itemlist->fetch_row()) && $itemcount<6) {
        echo '<a href="'.$id.'.php">
        <div class="item">
            <div class="item-pic"><img src="pic/'.$id.'.png"></div>
            <div class="item-text">
                <p class="item-heading">'.$name.'</p>
                <p>活动时间：'.$first.'</p>
                <p>活动地点：'.$place.'</p>

            </div>

        </div>
    </a>';
    $itemcount=$itemcount+1;
    }

    //如果不足6个活动，用其他活动补齐6个
    $sql_query = "SELECT act_id,act_name,act_first_day,act_place FROM act_info WHERE act_first_day > '2020-01-03'";
    $itemlist = $mysqli->query($sql_query, MYSQLI_STORE_RESULT);
    while ((list($id,$name,$first,$place) = $itemlist->fetch_row()) && $itemcount<6) {
        echo '<a href="'.$id.'.php">
        <div class="item">
            <div class="item-pic"><img src="pic/'.$id.'.png"></div>
            <div class="item-text">
                <p class="item-heading">'.$name.'</p>
                <p>活动时间：'.$first.'</p>
                <p>活动地点：'.$place.'</p>

            </div>

        </div>
    </a>';
    $itemcount=$itemcount+1;
    }

    
    echo '</div></div>';



$pinyin=array('jiangzuo','bisai','yanchu','tiyan','zhiyuan','shehui','luntan','qita');
$chinese=array('讲座','比赛','演出','体验类活动','志愿活动','社会实践','论坛/会议','其他');


$arrlength=count($pinyin);

for($x=0;$x<$arrlength;$x++)
{
    echo'<div class="category-container">
    <br>
<div class="category" id="'.$pinyin[$x].'">'.$chinese[$x].'<span><a href="activity_list.php?type='.($x+1).'">更多 ></a></span></div>
<div class="items">';

    $sql_query = "SELECT act_id,act_name,act_first_day,act_place FROM act_info WHERE act_type = '".$chinese[$x]."' and act_first_day > '2020-01-03'";
    $itemlist = $mysqli->query($sql_query, MYSQLI_STORE_RESULT);

    //计数，每类显示六个活动
    $itemcount=0;
    while ((list($id,$name,$first,$place) = $itemlist->fetch_row()) && $itemcount<6) {
        echo '<a href="'.$id.'.php">
        <div class="item">
            <div class="item-pic"><img src="pic/'.$id.'.png"></div>
            <div class="item-text">
                <p class="item-heading">'.$name.'</p>
                <p>活动时间：'.$first.'</p>
                <p>活动地点：'.$place.'</p>

            </div>

        </div>
    </a>';
    $itemcount=$itemcount+1;
    }

    //下面是因为咱们数据库里有的不足6个活动，于是用其他活动补齐6个
    $sql_query = "SELECT act_id,act_name,act_first_day,act_place FROM act_info WHERE act_first_day > '2020-01-03'";
    $itemlist = $mysqli->query($sql_query, MYSQLI_STORE_RESULT);
    while ((list($id,$name,$first,$place) = $itemlist->fetch_row()) && $itemcount<6) {
        echo '<a href="'.$id.'.php">
        <div class="item">
            <div class="item-pic"><img src="pic/'.$id.'.png"></div>
            <div class="item-text">
                <p class="item-heading">'.$name.'</p>
                <p>活动时间：'.$first.'</p>
                <p>活动地点：'.$place.'</p>

            </div>

        </div>
    </a>';
    $itemcount=$itemcount+1;
    }

    
    echo '</div></div>';

}


?>


</body>

</html>