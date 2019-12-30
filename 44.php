<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
第二届世界马克思主义大会志愿者招募    </title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="activity_list.css">
    <link rel="stylesheet" href="activity_details.css">

    <script>
        function replaceDoc() {
window.location.replace("./44.php")        }
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
"pic/44.png"                      id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
第二届世界马克思主义大会志愿者招募                </div>
                    <div>活动时间：
2020年2月8日                    </div>
                    <div>活动主办方：<a href="activity_host.html">
第二届世界马克思主义大会组委会                    </a></div>
                    <div>官方网页链接：<a href=
"https://mp.weixin.qq.com/s/ndW5WCBkBSbVUciSpcWj0A"                        >
https://mp.weixin.qq.com/s/ndW5WCBkBSbVUciSpcWj0A                    </a>
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

经上级部门批准，北京大学将于2018年5月5日至6日举办第二届世界马克思主义大会，本届大会的主题为“马克思主义与人类命运共同体”。本届大会恰逢马克思诞辰200周年、《共产党宣言》发表170周年、中国改革开放40周年和北京大学120周年校庆之际，将是全世界马克思主义理论研究和科学社会主义伟大实践进程中具有里程碑意义的重大事件，同时也是北京大学120周年校庆系列重要活动之一。大会组委会将邀请近100位国外马克思主义相关研究领域的专家学者和政党人士、国内300余名著名专家学者与会。为保证大会圆满进行，大会组委会特采取公开招募、自愿报名、择优录用、定向服务的方式，面向全校招募志愿者。
具体方案如下：
 招募人数：60人
 服务内容
1．负责会议论文及会议议程的翻译工作；
2．负责国外学者、政党人士的接机、送机；
3. 负责会议期间国外学者、政党人士的日常陪同。
（首届世界马克思主义大会志愿者合影）
 服务时间：2018年5月3日至7日
（部分参会国际学者可能延迟离开1至2天）
 选拔条件
1．北京大学正式注册全日制在校生；
2．熟练掌握英语，口语流利，懂多种语言（法语、德国、俄语、日语等）者优先；
3．能够全程参加大会的培训及相关活动，保证志愿服务时间；
4．认真负责，具有志愿服务精神和奉献精神，遵守外事纪律。
 激励保障
1．提供大会工作证件、志愿者服装及工作期间的交通、餐饮；
2．提供大会志愿服务证书、大会纪念品及适当劳务补助；
3．提供实践学分认证，评选大会优秀志愿者。
 报名流程
1．报名时间：即日起至2018年3月15日17：00
2．报名方式：填写报名表电子版发送至指定邮箱。
 面试时间：2018年3月下旬
 联系方式
联系人：李健  李石生
联系电话：62761078
E-mail:smdhzyz2018@126.com


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