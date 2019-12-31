<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
海淀公园新老生交流会</title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>

    <link rel="stylesheet" href="layui/css/layui.css">
    <script src="layui/layui.js"></script>
    <script src="activity_details.js"></script>

    <script>
        function replaceDoc() {
window.location.replace("./6.php")    </script>

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
"pic/6.png"                     id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
海淀公园新老生交流会 </div>
                    <div>活动时间：
2020年1月10日 </div>
                    <div>活动主办方：<a href="activity_host.html">
信管学生会   </a></div>
                    <div>官方网页链接：<a href=
"https://mp.weixin.qq.com/s/HbnYj-14qXtDH6TxEgiDbg"            >
https://mp.weixin.qq.com/s/HbnYj-14qXtDH6TxEgiDbg        </a>
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


当你看到自己满满的课表，高数计概布置了一大堆看不懂的作业，加入的学生会部门又多了许多锅，社团每周还有训练活动，还经常听到很多听不懂的“大学”词汇，类似于
老师所提起的：论文？pre？小组合作？小班课？学习资料？
学长学姐经常说到的：团建？保研？双学位？交换？找实习
便逐渐陷入蒙圈ing……
甚至焦虑到头秃，
不过这些统统都没关系，因为这样的悲桑就要结——束——了！
信息管理系团委学术部助力打造新老生交流互助平台，邀请了8位在学习、学工以及实习等方面有丰富经验的学长学姐参与，与大家面对面交流！
咸鱼翻身做大佬，
你，只差一个新老生交流会！
咦？那会有哪些善良的老腊肉到场呢？
19级硕士生 张恂达：15级信息管理系本科生，曾任信息管理系学生会主席，有着极为丰富的学工经历~
Z姓学长：具有丰富的互联网战略投资实习经历，曾拿到腾讯、百度、微软、字节跳动等实习offer。擅长商业战略分析讲解、简历制作与修改。
17级本科生 王洋：普通信管17级只会转发通知的班长，光华双学位六代小伏低，信管辩论队从不上场前领队，内外资咨询公司卑微咨询实习生，外资500强低级边缘员工，天使轮投资创业项目划水创业者，无法流畅与原住民英语沟通的挂名国际志愿者。
18级本科生 王睿：女，2018级信管本科生，经济双学位。虽然是学术部部长但是一点也不学术（垃圾？），作为啥都可以问的万金油，我也许可以教大家唱歌？
18级本科生 钱志超：一个低调的大佬，擅长计算机类课程，或许可以与大家聊一聊大一的专业课以及令人头秃的计概和数算。
18级本科生 苏洋：大一参加了很多的学工社团和好玩的活动。本学期报了中文的双学位和社会科学严复班项目，现在留任学术部当部长，在快乐的玩和生活方面还是有很多独特的经验想要分享给大家，期待你们来喔~
18级本科生 张丽晨：去过北京许多公园、景点，爬过北京的山，热爱生活，热衷于亲身体验一切好玩的事。大一时怀着做一个优秀的记者的愿望，加入了宣传部，现在留任宣传部部长。期待同样热爱生活、有梦想的你们，一起来吧~
看完了参与的老腊肉们，再来看看我们的场地吧~
当当当
海淀公园！！！！
是不是超级适合躺下来晒太阳聊聊人生？
各类小零食，毫无保留的经验分享，有趣的互动游戏，聊累了还可以躺着晒晒太阳。
机不可失，时不再来！赶紧点击阅读原文，填写我们的报名问卷吧！
由于场地有限，此次交流会人数上限为25人，心动的萌新们赶紧点击阅读原文填问卷吧！
时间：9月22日（周日）下午13点-16点
地点：海淀公园
听我的，你，必须来！
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