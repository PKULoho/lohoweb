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
        <a href="">分类</a>
    </div>
    <div class="nav-item right-nav-item">
        <a href="">个人中心</a>
    </div>
    <div class="nav-item right-nav-item">
        <b>董小葵</b>
        <span class="logout-button"><a href="">[退出]</a></span>
    </div>
</nav>


<div class="fix"></div>
<br>
<div class="mainpic" style="width: 1200px;height: 356px; margin: 0 auto; text-align: center;">
    <img src="pic/main.jpg" style="width: 1057px;height: 356px; ">
</div>
<br>
<div class="categories"
     style="width: 1265px;height: 61px; margin: 0 auto; text-align: center; background-color: #FFDBC5">
    <a href="#jiangzuo">
        <button class="button" type="button">讲座</button>
    </a>
    <a href="#bisai">
        <button class="button" type="button" style="margin-left: 10px">比赛</button>
    </a>
    <a href="#yanchu">
        <button class="button" type="button" style="margin-left: 10px">演出</button>
    </a>
    <a href="#tiyan">
        <button class="button" type="button" style="margin-left: 10px">体验类活动</button>
    </a>
    <a href="#zhiyuan">
        <button class="button" type="button" style="margin-left: 10px">志愿活动</button>
    </a>
    <a href="#shehui">
        <button class="button" type="button" style="margin-left: 10px">社会实践</button>
    </a>
    <a href="#luntan">
        <button class="button" type="button" style="margin-left: 10px">论坛/会议</button>
    </a>
    <a href="#qita">
        <button class="button" type="button" style="margin-left: 10px">其他活动</button>
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


echo'<br>
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

    
    echo '</div>';



$pinyin=array('jiangzuo','bisai','yanchu','tiyan','zhiyuan','shehui','luntan','qita');
$chinese=array('讲座','比赛','演出','体验类活动','志愿活动','社会实践','论坛/会议','其他');


$arrlength=count($pinyin);

for($x=0;$x<$arrlength;$x++)
{
    echo'<br>
<div class="category" id="'.$pinyin[$x].'">'.$chinese[$x].'</div>
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

    
    echo '</div>';

}


?>


</body>

</html>