<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
西班牙穆尔西亚舞蹈团经典弗拉门戈舞剧《卡门》</title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>

    <link rel="stylesheet" href="layui/css/layui.css">
    <script src="layui/layui.js"></script>
    <script src="activity_details.js"></script>

    <script>
        function replaceDoc() {
window.location.replace("./41.php")    </script>

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
"pic/41.png"                     id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
西班牙穆尔西亚舞蹈团经典弗拉门戈舞剧《卡门》 </div>
                    <div>活动时间：
2018年8月22日 </div>
                    <div>活动主办方：<a href="activity_host.html">
北京大学会议中心   </a></div>
                    <div>官方网页链接：<a href=
"http://www.pku-hall.com/qbhd-nr.aspx?id=2935"            >
http://www.pku-hall.com/qbhd-nr.aspx?id=2935        </a>
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


西班牙穆尔西亚舞蹈团经典弗拉门戈舞剧《卡门》
惊艳舞步，再现传世经典；
曼妙身姿，演绎爱恨缠绵；
豪迈与冷艳的交织，激情与优雅的碰撞。
西班牙舞坛著名姐妹花，
西班牙穆尔西亚舞蹈团，再现弗拉门戈经典舞剧《卡门》传奇！
西班牙穆尔西亚舞蹈团：
　　西班牙穆尔西亚舞蹈团成立于1985年，由卡门·卢比奥与马蒂·卢比奥姐妹领导。自成立以来，他们先后在西班牙很多著名剧院演出，巡演足迹遍布全国。同时，他们也参加了许多国际艺术节的表演，并获得极大的成功。
　　自2003年首次访华，西班牙穆尔西亚舞蹈团在中国演出已经超过15个年头。舞团的创始人卡门和马蒂，在年轻时代皆为明星舞者，才华横溢，获奖无数。与其他在赌场、酒馆里表演的舞者不同，穆尔西亚舞蹈团通常在艺术节、剧院、电视台进行演出。这对舞蹈编排、舞美制作、演员阵容都有更严格的要求。舞蹈团自成立以来，历经30年长盛不衰。
　　舞蹈团的所有节目均由卡门、马蒂二人创作与编排。马蒂作为当代的编舞大师，一直保持着高质量与高产量的创作。目前除了本团的编创，她们还经常受邀为其他剧院进行编舞。这些创作有些是独立的舞剧，有些则是跨界合作。同时每年马蒂都会有1～2部新作品在西班牙上演。源源不断的原创作品，是舞团在欧洲以及西语地区广受欢迎的坚实基础。除了舞蹈编排的精益求精，舞团在音乐上也坚持高水准的制作。舞团使用的配乐不少都出自名家大咖。在中国表演过的弗拉门戈集锦《弗拉门戈之魂》《红酒与玫瑰》等节目的配乐，均由卡洛斯等著名音乐人专门为乐团创作。舞剧《卡门》没有照搬歌剧作为背景音乐，而是选用了交响乐与弗拉门戈音乐结合的版本，别具特色。
西班牙穆尔西亚舞蹈团团长卡门·卢比奥：
　　卡门·卢比奥女士现任西班牙穆尔西亚大学舞蹈系西班牙舞蹈教授，西班牙穆尔西亚舞蹈团团长及导演。1985年与妹妹马蒂·卢比奥共同组建西班牙穆尔西亚舞蹈团。舞蹈团自成立起，即活跃于国际舞台，常年于法国、德国、古巴、约旦、希腊、葡萄牙等国的剧院进行表演，并自2003年起多次率团来华进行巡回演出。同时她还先后担任过古巴艾丽西亚·阿隆索国际舞蹈学院教授、西班牙胡安·卡洛斯国王大学教授。卡门在其职业生涯中获奖无数，曾先后获得第20届西班牙国家“文化万岁”奖，西班牙穆尔西亚弗拉门戈艺术节Patriarca大奖，意大利 Giuliana Penzi 终身成就奖，年度演艺界杰出女性奖等等诸多奖项，并于2017年受邀参加国际舞蹈日系列庆典活动，对“西班牙舞蹈”进行了专题演讲，并在活动期间开办大师班。
　　除此之外，在舞蹈团成立的30年间，由马蒂编舞卡门导演的剧目曾多次获奖。穆尔西亚政府文化部门对卡门领导的舞团给予了很高评价。市政府曾为舞团举办专题展览，并在穆尔西亚大剧院为该团举办了建团30周年庆典演出，演出剧目为复排版《卡门》，现场音乐除弗拉门戈乐手外还特别邀请了穆尔西亚国立交响乐团伴奏，以此表彰她为西班牙文化传播所做出的卓越贡献。
西班牙穆尔西亚舞蹈团艺术总监马蒂·卢比奥：
　　马蒂·卢比奥女士现任西班牙穆尔西亚舞蹈团艺术总监、穆尔西亚国立音乐舞蹈学院教授。马蒂·卢比奥生于穆尔西亚，自幼学习舞蹈，毕业于穆尔西亚国立音乐舞蹈学院。后赴马德里求学，期间师从马格达莱纳、帕克·罗梅罗、梅尔凯·埃斯梅拉达、马利玛、何赛·安东尼奥、阿索林等多位名师。她还在西班牙最负盛名的芭蕾舞蹈学校之一Victor Ullate及卡门罗氏国际舞蹈中心学习古典舞及现代舞。
　　经过激烈严格的选拔考试，马蒂·卢比奥进入穆尔西亚国立音乐舞蹈学院任教。除教授工作外，她还多次应邀在西班牙各地及其他国家和地区进行授课及艺术指导工作，并多次率团前往法国、荷兰、葡萄牙、中国等地巡演。她曾应古巴文化部邀请，出席了第三届舞蹈教学与推广大会，进行了“西班牙舞蹈及其不同表现形式”的主题演讲，并于1997—2008年担任西班牙国家电视一台晚会编舞。2011—2014年期间，她在胡安·卡洛斯国王大学编舞专业任教并成立工作室，同时在不同国家开办大师班。
马蒂·卢比奥女士曾应多家剧院邀请，为歌剧编舞并对演员进行舞蹈指导：
　　希腊赛萨洛尼斯基音乐大厅，歌剧《卡门》
　　西班牙阿利坎特，歌剧《卡门》
　　巴西圣保罗剧院，歌剧《卡门》
　　西班牙瓦伦西亚，法雅歌剧《人生朝露》（又名《短暂人生》）
　　斯洛文尼亚马里博尔，威尔第歌剧《命运之力》
　　以色列特拉维夫国立剧院，威尔第歌剧《命运之力》
　　法国比亚里茨，威尔第歌剧《茶花女》
　　西班牙穆尔西亚，罗西尼歌剧《赛维利亚的理发师》
　　法国，威尔第歌剧《弄臣》
二人共同编创的舞蹈作品：
　　2018年3月首演于穆尔西亚《三个火枪手》，改编自大仲马作品
　　2016年首次参演音乐、马术、弗拉门戈跨界演出 
　　2015年9月首演于中国上海东方艺术中心《莎乐美》
　　2013年首演于西班牙穆尔西亚《红酒与玫瑰》
　　2010年首演于西班牙穆尔西亚《月亮之心》
　　2009年改编并参与服装设计工作《扑克弗拉门戈》      
　　2008年中国深圳电视艺术节《弗拉门戈之魂》
　　2005年西班牙贝尼卡西姆国际音乐节及西班牙国家电视一台全明星晚会《Chamboy》
　　2005年西班牙比列加斯胜利会堂与著名编舞大师哈维尔拉托雷联合创作《嫉妒》
　　2003年根据希腊神话创作并兼任服装、舞美设计的舞剧《珀涅罗珀》
　　2001与马克贝里尔共同为年欧洲青奥会创作《蝶蛹》
　　2001年西班牙穆尔西亚科萨尔会议中心礼堂《焰火时刻》《地中海的黑暗面》
　　2000年担任汉诺威世博会西班牙馆开馆演出编舞
　　1998年西班牙马德里《诗人的罗盘》
二人近年获奖经历：                                                                                                     
　　2017年：演艺界杰出女性奖                           
　　2014年：意大利 Giuliana Penzi 终身成就奖                 
　　2013年：西班牙穆尔西亚弗拉门戈艺术节 Patriarca大奖      
　　2011年：第20届西班牙国家“文化万岁”大奖
　　2010年：塔拉斯卡评论家协会表演艺术奖
　　拉乌尼翁国际音乐节弗拉门戈特别贡献奖
　　穆尔西亚大学授予西班牙舞蹈及弗拉门戈特别贡献奖
　　舞剧《珀涅罗珀》荣获多个最高级别舞蹈奖项
　　2010年：圣洛伦索埃斯科里亚尔市政厅及胡安卡洛斯国王大学授予杰出贡献奖
　　圣洛伦索埃斯科里亚尔国际舞蹈节西班牙文化传播特别贡献奖
　　西班牙国家电视七台及广播电台授予文化奖
演员介绍
伊内斯·埃林  饰演 卡门
　　自幼跟随马蒂·卢比奥学习舞蹈，在穆尔西亚国立音乐舞蹈学院完成舞蹈专业的学习。随后考入胡安·卡洛斯国王大学表演艺术专业，先后获得硕士、博士学位。伊内斯自2001年起进入由卡门&马蒂领导的穆尔西亚舞蹈团，2009年起担任独舞演员，2013年起担任首席舞者。
　　伊内斯撰写的《西班牙舞蹈与戏剧》已于近期出版，作为编舞先后创作了《三个火枪手》（2018年）、《塞万提斯》（2017年）等作品。近期主演的作品有《卡门》（上海东方艺术中心）、《扑克弗拉门戈》（法国比亚里茨大剧院、法国卡拉卡森大剧院）、《珀涅罗珀》（约旦安曼国际艺术节》。 
阿莫尔·卡诺瓦丝　饰演 卡门
　　阿莫尔的舞蹈学习始于穆尔西亚圣安赫尔舞蹈学院，进入穆尔西亚国立音乐舞蹈学院后成为职业舞者。目前在马德里攻读舞蹈和视觉艺术专业。
　　阿莫尔自2015年起在穆尔西亚舞蹈团担任舞蹈演员，2017年获得西班牙舞蹈特别奖。本季将在上海东方艺术中心首次担任主演。
何赛·卡诺瓦思　饰演 何塞
　　何赛的舞蹈学习始于穆尔西亚圣安赫尔舞蹈学院，后跟随卡门&马蒂在穆尔西亚国立音乐舞蹈学院开启职业生涯。目前在穆尔西亚舞蹈团担任独舞演员，并在中国和法国的巡回演出中饰演主要角色。何赛同时在马德里商会舞蹈团任舞者，并与马德里爱乐乐团合作演出《 Antología de la Zarzuela》。
　　何赛毕业于马德里胡安·卡洛斯国王大学西班牙舞蹈与视觉艺术专业，目前在该大学攻读表演艺术硕士学位，同时在穆尔西亚舞蹈团继续从事舞蹈表演事业。
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