<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
终身大事——五四知识人的婚姻生活    </title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="activity_list.css">
    <link rel="stylesheet" href="activity_details.css">

    <script>
        function replaceDoc() {
window.location.replace("./8.php")        }
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
"pic/8.png"                      id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
终身大事——五四知识人的婚姻生活                </div>
                    <div>活动时间：
2019年8月6日                    </div>
                    <div>活动主办方：<a href="activity_host.html">
信管学生会                    </a></div>
                    <div>官方网页链接：<a href=
"https://mp.weixin.qq.com/s/i1PjGm6OVdK7fSXKxTzHow"                        >
https://mp.weixin.qq.com/s/i1PjGm6OVdK7fSXKxTzHow                    </a>
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

一百年前，“思想自由，兼容并包”的北京大学成为五四运动的发源地，用新思想的浪潮引领着时代的进步青年。一百年后，“爱国、进步、民主、科学”的五四精神依然在北大熠熠生辉，胡适、傅斯年等人的事迹鼓舞着一代又一代的青年学子。
　　然而，在耀眼的光环下，这些大人物也需要面对自己的婚姻大事。在追求自由恋爱的理想婚姻与讲究父母之命的传统婚姻之间，他们如何抉择，付出了什么代价？当个人情感与时代理性交织，个人生命史与社会历史运动重叠，婚姻记忆反映的，又是怎样的社会和文化习俗变迁？
　　大人物，小故事，4月18日，听潘光哲先生讲述五四知识人对婚姻之事的期待与抉择，品时代巨匠不一样的“儿女情长”，从婚姻视角看文化习俗的转变，用个体生命的眼光体悟时代剧变！


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