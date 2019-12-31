<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
北大车协全国高校自行车交流赛</title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>

    <link rel="stylesheet" href="layui/css/layui.css">
    <script src="layui/layui.js"></script>
    <script src="activity_details.js"></script>

    <script>
        function replaceDoc() {
window.location.replace("./53.php")    </script>

    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="activity_list.css">
    <link rel="stylesheet" href="activity_details.css">

    <style>
        .global-nav .search-bar input{
            height:32px;
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
"pic/53.png"                     id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
北大车协全国高校自行车交流赛 </div>
                    <div>活动时间：
2020年2月14日 </div>
                    <div>活动主办方：<a href="activity_host.html">
北大车协   </a></div>
                    <div>官方网页链接：<a href=
"https://mp.weixin.qq.com/s/75VclNDuAINzx4YEx0tNHA"            >
https://mp.weixin.qq.com/s/75VclNDuAINzx4YEx0tNHA        </a>
                    </div>
                    <div>综合评分:10.0&nbsp;&nbsp;趣味:10.0&nbsp;&nbsp;意义:10.0&nbsp;&nbsp;秩序:10.0</div>

                    <button class="button" type="submit" onclick="replaceDoc()"><img src="ico/icon_wishlist.png"
                                                                                     class="icon">加入心愿单
                    </button>
                    <button class="button" type="submit" onclick="replaceDoc()"><img src="ico/icon_joined.png"
                                                                                     class="icon">标为已参加
                    </button>
                    <button class="button" type="submit" onclick="replaceDoc()"><img src="ico/icon_apply.png"
                                                                                     class="icon">立即报名
                    </button>
                    <button class="button" type="submit"><img src="ico/icon_rate.png"
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


北大车协全国高校自行车交流赛，简称“交流赛”或“北大赛”，是由北京大学自行车协会自主自办的全国高校自行车交流赛。
从1998年北大赛的前身“北大——八达岭”自行车拉力赛，到2002年在铁壁银山的第一届北大赛，再到2018年在河北固安的全国高校自行车交流赛，时至今日，北大赛已举办了十六个年头。十六年间，北大赛不断发展，办赛地点从京郊铁壁银山、未名湖畔，到青龙湖、十三陵，再到延庆、固安，参赛范围也由北京拓展到全国多个省市。
2018年，第十六届北大赛在河北固安自行车运动公园举办，共计160所高校、864名选手和观众参与。也正是这一年，北大赛获中国大学生自行车协会（以下简称大自协）认可，部分项目成为了大自协的B级积分赛。选手可通过北大赛获取相应积分，刷新赛季积分榜。这一改变标志着北大赛的赛事地位进入了新纪元。
2019年
北大赛再次升级，做出了全新的改变
！！！
改变一
更专业的赛道
绕圈？不！今年我们选择一圈解决问题！
觉得山地赛道不够惊险？我们增加了多个技术点！厌倦了平坦无坡的公路赛道？我们加入了众多起伏！
改变二
更美丽的风景
第十七届“御道口牧场杯”北大车协全国高校自行车比赛将在国家4A级景区御道口牧场草原森林风景区举行。公路赛将截取国家1号风景大道上的一段作为赛道，山地赛则选在风景如画的坝上草原。届时，参赛者将亲身体验在“水的源头，云的故乡，花的世界，林的海洋，珍禽异兽的天堂”骑行的感觉。
改变三
更丰厚的奖品
整车、轮组、刹车，丰厚奖品等你来拿！
更有多种骑行装备待交流赛锦鲤抱走！
改变四
更好玩的娱乐活动
除了例行在第一天晚上举办联谊晚会外，今年的交流赛还会在第二天晚上、第三天晚上举办交流party和颁奖典礼，届时还将配备乐队、美食及烟火等。此外，整个交流赛期间，还会有景区游览、景区定向等丰富多彩的场外活动供高校朋友们选择。
2019年北大赛即将开始
让我们相约御道口牧场！
“御道口牧场杯”
北大车协第十七届全国高校自行车交流赛
赛事预览
时间：2019年7月5号——2019年7月8号
地点：河北省承德市围场县御道口牧场
赛事：7月5号（周五）为各高校报道，7月6号（周六）、7号（周日）为试赛道和比赛，7月8号（周一）为各高校退场。比赛项目分别为：男子山地精英组、大众组，女子山地组，男子公路精英组、大众组，女子公路组。
报名：网上报名、网上缴费、具体报名方式待交流赛网站维护更新之后，交流赛筹备组会以微信推送、联络群、邮件等方式尽快告知各兄弟车协。
 
说明：
1.  “北大赛”报名和缴费方式将在报名网站更新维护结束后发布，大家可以关注北大车协微信公众号（capu1995）或关注北大车协微博（@CAPU北大车协），届时会在自媒体平台上第一时间发布，并通过邮件、联络群等方式告知各兄弟车协。
2.  活动方案、交通方式、住宿情况将在交流赛报名期间发送至各高校车协，届时请查收。
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