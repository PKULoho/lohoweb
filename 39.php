<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
2020新年相声喜乐会    </title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>
    <link rel="stylesheet" href="global_navigation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="activity_list.css">
    <link rel="stylesheet" href="activity_details.css">

    <script>
        function replaceDoc() {
            window.location.replace("./activity_details.html")
        }
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
"pic/39.png"                      id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
2020新年相声喜乐会                </div>
                    <div>活动时间：
2020年3月5日                    </div>
                    <div>活动主办方：<a href="activity_host.html">
北京大学会议中心                    </a></div>
                    <div>官方网页链接：<a href=
"http://www.pku-hall.com/qbhd-nr.aspx?id=3010"                        >
http://www.pku-hall.com/qbhd-nr.aspx?id=3010                    </a>
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

说学逗唱，感受相声魅力
妙语雅谑，体味人生百态
　　具有全面才能的相声表演艺术家李金斗、实力派大家赵炎、中国十大笑星之一石富宽、“青门海派”开创者方清平、相声大赛状元付强……一个个耳熟能详的名字，一段段经典难忘的回忆。自2009年起讲堂推出“大讲堂·相声空间”系列活动，为师生提供了近距离接触传统曲艺的机会，长期以来深受观众欢迎。12月21日晚，众位相声名家在讲堂联袂献艺，为大家带来一场风趣幽默、妙趣横生的相声喜乐会。熔传统与时尚于一炉的绝活表演，令人捧腹不已的包袱笑料，一场全新打造的喜乐盛宴，让您在笑声中感悟人生！
节目单：
1.对口相声：刘颖　　浩楠
2.对口相声：李国盛　郑宇坤 
3.对口相声：石富宽　付强
4.对口相声：赵炎　　张刚
5.双簧表演：王波　　万宇
6.单口相声：方清平
7.对口相声：李金斗　王文林  
主持人：王玉兰
（演员、节目如有变动，以当日演出为准）
本场演出时长约120分钟，无中场休息。
主要演员简介：
李金斗
　　国家一级演员。台风潇洒，表演生动，是一名具有全面才能的相声表演艺术家。他博采众长，融合北京的清雅、天津的火爆、东北的粗犷，形成了独特的艺术风格——形象上的“帅”，展现相声技巧的“卖”，简单干练的“脆”，注重时效性的“快”。
赵炎
　　国家一级演员，中国十大笑星之一。师承相声大师马季先生。他曾长期与马季合作，多次在全国相声大赛中获奖，并多次出国访问演出，受到海外华人的广泛好评。赵炎台风正，不哗众取宠，翻抖包袱注重分寸感，表演注重内涵，摹拟从容自如，把思考的乐趣充分留给观众。
石富宽
　　国家一级演员，中国十大笑星之一。曾与相声演员侯耀文长期搭档，捧哏风格不温不火、不夺戏不漏戏。多次参加中央电视台春节联欢晚会及各种大型晚会，深受广大群众欢迎和喜爱。
李国盛
　　国家一级演员。自幼随著名相声表演艺术家、单口大王刘宝瑞学艺，后拜相声名家罗荣寿为师，曾给相声大师侯宝林捧哏三年，受益匪浅。曾与笑林长期合作，被选为全国最佳相声搭档。
方清平
　　单口相声演员，李金斗弟子。2010年凭借单口相声《幸福童年》在中央电视台第五届全国相声大赛中获得二等奖。其表演既不同于偏重叙述故事的传统单口相声，也区别于夸张说唱的新派脱口秀，而是在看似表情木然的絮叨和自嘲中，令人捧腹大笑、拍案称绝。
付强
　　青年相声演员，李金斗弟子。1999年获得全国曲艺调演相声金奖，2005年获得北京电视台全国相声大赛最佳逗哏奖，2008年获得中央电视台第四届全国相声大赛最佳逗哏奖。



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