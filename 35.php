<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
航海王：狂热行动    </title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="activity_list.css">
    <link rel="stylesheet" href="activity_details.css">

    <script>
        function replaceDoc() {
window.location.replace("./35.php")        }
    </script>
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
    ';
    } else {
    echo '
    <div class="nav-item right-nav-item">
        <a href="register.php">注册</a>
    </div>
    <div class="nav-item right-nav-item">
        <a href="login.php"><b>登录</b></a>
    </div>
    ';
    }
    ?>

</nav>


<div class="fix"></div>


<div class="main-container">
    <div class="AllLeft">
        <div class="details">

            <!--上半部分的图片和信息-->
            <div class="ActivityDetailsUp">

                <div class="UpPic"><img src=
"pic/35.png"                      id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
航海王：狂热行动                </div>
                    <div>活动时间：
2020年2月28日                    </div>
                    <div>活动主办方：<a href="activity_host.html">
北大百讲                    </a></div>
                    <div>官方网页链接：<a href=
"http://www.pku-hall.com/qbhd-nr.aspx?id=3098"                        >
http://www.pku-hall.com/qbhd-nr.aspx?id=3098                    </a>
                    </div>
                    <div>评分：10.0</div>

                    <button class="button" type="submit" onclick="replaceDoc()"><img src="ico/icon_wishlist.png"
                                                                                     class="icon">加入心愿单
                    </button>
                    <button class="button" type="submit" onclick="replaceDoc()"><img src="ico/icon_joined.png"
                                                                                     class="icon">标为已参加
                    </button>
                    <button class="button" type="submit" onclick="replaceDoc()"><img src="ico/icon_apply.png"
                                                                                     class="icon">立即报名
                    </button>
                    <button class="button" type="submit" onclick="replaceDoc()"><img src="ico/icon_rate.png"
                                                                                     class="icon">评分
                    </button>
                </div>


            </div>


            <!--下半部分的活动简介-->

            <div class="ActivityDetailsDown">
                <br><br>
                <div style="font-size: 18px;text-align: left;">活动简介
                </div>

                <br>

1999年10月20日，《航海王》TV 版动画在富士电视台首次播出，不知不觉间，陪伴无数粉丝们成长的热血少年动漫迎来了动画播出的第20个年头。
　　20周年纪念版电影《航海王：狂热行动》由尾田荣一郎监制，田中真弓、冈村明美、中井和哉等动画原版声优阵容倾情献声。这一次的故事发生在航海世博会上，燃度升级，将有超过200个角色登场。在这场云集世界航海家的狂热盛会上，草帽一伙遭遇空前危机，路飞等人将如何应对？来电影中寻找答案吧！
　　20年，意味着一个人从呱呱坠地到风华正茂，也能将一个青葱少年锤炼成沉稳练达的社会中坚。正是因为收获了这20年间粉丝们的支持，《航海王》才得以在动漫界创造记录。正如艾斯说的，“对我的厚爱，感激不尽”。《航海王》让曾经懵懂的我们燃起热血，让梦想和成长的定义更加完整，与这部动画同行的日子，也成为了我们的独家记忆。“我想一直在你身边”，特辑开头简单的八个字道出了《航海王》与粉丝之间的紧密联系。从这一刻起，我们将共同迎接一场全新的冒险。
　　航程永不完结，伙伴一路同行。《航海王：狂热行动》即将热血来袭，让我们相约讲堂，共赴这场20年之约。


            </div>
            <br><br>
        </div>
        <br>
        <div class="commentsection">

            <!--我要评论-->

            <h1>我要评论</h1>
            <textarea name="message" style="width:770px;height:100px;"></textarea>

            <button id="submit" class="button" type="submit">提交</button>

            <br><br><br>
            <!--最新评论-->

            <h1>最新评论</h1>
            <div class="comments">
                <div class="comment">
                    <div class="userinfo">
                        <div class="touxiang">
                            <img src="head/a.jpg">
                        </div>
                        <div class="user_name">董小葵</div>
                    </div>
                    <div class="message">
                        <p>
                            好棒的活动！爱了爱了！下次还会再来！和此卖家交流，不由得精神为之一振，自觉七经八脉为之一畅，我在淘宝买了这么多年，所谓阅商无数，但与卖家您交流，我只想说，老板你实在是太好了，你的高尚情操太让人感动了，本人对此卖家之仰慕如滔滔江水连绵不绝，海枯石烂，天崩地裂，永不变心。</p>

                    </div>

                </div>

                <div class="comment">
                    <div class="userinfo">
                        <div class="touxiang">
                            <img src="head/b.jpg">
                        </div>
                        <div class="user_name">张小涵</div>
                    </div>
                    <div class="message">
                        <p>
                            今天参加了这项活动，真是好。交易成功后，我的心情是久久不能平静，自古英雄出少年，卖家年纪轻轻，就有经天纬地之才，定国安邦之智，而今，天佑我大中华，沧海桑田5000年，神州平地一声雷，飞沙走石，大雾迷天，朦胧中，只见顶天立地一金甲天神立于天地间，花见花开，人见人爱，这位英雄手持双斧，二目如电，一斧下去，混沌初开，二斧下去，女娲造人，三斧下去，小生倾倒。</p>

                    </div>

                </div>

                <div class="comment">
                    <div class="userinfo">
                        <div class="touxiang">
                            <img src="head/a.jpg">
                        </div>
                        <div class="user_name">董小葵</div>
                    </div>
                    <div class="message">
                        <p>
                            这是一个好评模版，不要看了下面都是废话。因为本姑娘很懒不想每个宝贝都写好评 所以才模仿网友的 好评模版 但是这个宝贝不管是质量 款式还是性价比 都是本姑娘喜欢的
                            如果是不喜欢的那本姑娘就会很生气 然后这个模版就变成了各种喋喋不休的吐槽</p>

                    </div>

                </div>


            </div>


        </div>
    </div>

    <!--copy自活动列表-右侧-->
    <div class="recommend_right">
        <div class="list_title">为你推荐</div>
        <div class="activity_right">
            <div class="collection-items">

                <div class="collection-item">
                    <a href="">
                        <img src="pic/28.png" alt="北京大学十佳歌手比赛初赛">
                        <div class="activity-info" style="padding: 5px 0px 10px 0px;">
                            <div>北京大学十佳歌手比赛初赛</div>
                            <div>时间待定</div>
                            <div>主题内容：文艺</div>
                        </div>
                    </a>

                </div>

                <div class="collection-item">
                    <a href="">
                        <img src="pic/14.png" alt="法学院第十一届“君合杯”模拟法庭比赛决赛">
                        <div class="activity-info" style="padding: 5px 0px 10px 0px">

                            <div>法学院第十一届“君合杯”模拟法庭比赛决赛</div>
                            <div>2019年5月18日 18:30-21:00</div>
                            <div>主题内容：学术</div>
                        </div>
                    </a>
                </div>
                <div class="collection-item">
                    <a href="">
                        <img src="pic/29.png" alt="北京大学第十六届学生“演讲十佳”大赛开始报名啦！">
                        <div class="activity-info" style="padding: 5px 0px 10px 0px">

                            <div>北京大学第十六届学生“演讲十佳”大赛开始报名啦！</div>
                            <div>2019年11月2日</div>
                            <div>主题内容：文艺</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>