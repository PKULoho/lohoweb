<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
摄影班 | 基础班报名</title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>

    <link rel="stylesheet" href="layui/css/layui.css">
    <script src="layui/layui.js"></script>
    <script src="activity_details.js"></script>

    <script>
        function replaceDoc() {
window.location.replace("./60.php")    </script>

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
"pic/60.png"                     id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
摄影班 | 基础班报名 </div>
                    <div>活动时间：
2020年2月7日 </div>
                    <div>活动主办方：<a href="activity_host.html">
北京大学青年摄影学会   </a></div>
                    <div>官方网页链接：<a href=
"https://mp.weixin.qq.com/s/jLAMzJlQcR1PJXBmNdPmSA"            >
https://mp.weixin.qq.com/s/jLAMzJlQcR1PJXBmNdPmSA        </a>
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


2019年秋季学期，北大青年摄影学会推出5期摄影课程：
摄影基础班
手机摄影班
Vlog班
肖像班
胶片班
所有课程面向青年摄影学会成员开放。
大家可以根据自己对摄影的掌握情况报名一个或多个摄影班，各摄影班时间不冲突，可自由选择。（关于Vlog班的推送将在之后发出）
报名方式在最后
摄影基础班
课程内容：
注：为了方便大家上课，部分课程可能采取网上直播（QQ群直播）的形式，但学会不提供录播视频，允许学员自行录屏。具体上课形式招新完成后会与大家协商。
第一节：相机基础&摄影器材购买指导
带你了解光圈、快门、感光度；色温、色调；成像原理、画幅、焦段 & 超良心摄影器材购买指导。
第二节：LR基础+基础调色演示
LR基础：LR面板介绍、色温、色调、对比度、高光阴影白色黑色、曲线工具、HSL、色调分离、镜头校正、如何看直方图。
第三节：PS基础+人像修图演示
PS基础：PS面板介绍、ACR（同LR）、基本磨皮操作（中性灰磨皮）、人像修图基本步骤。
第四节：外拍实践
由4-5名外拍经验丰富的大牛分别带队，组织校内外外拍活动，每组人数10人以内。时间非固定，会穿插在整个学期进行。
第五节：人像摄影经验分享
第六节：风光摄影经验分享
第七节：人文摄影经验分享及摄影理念
第八节：胶片入门及暗房体验/棚拍简介（二选一）
 
开班人数：100以内
时间：10.7起，每周六晚18:40-20:30
面向对象：青年摄影学会成员  
费用：100/人/学期
报名方式
招新结束后会在YASP大群里公布基础班二维码
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