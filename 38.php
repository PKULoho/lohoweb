<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
2019中俄经典名曲音乐会    </title>
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
"pic/38.png"                      id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
2019中俄经典名曲音乐会                </div>
                    <div>活动时间：
2020年4月9日                    </div>
                    <div>活动主办方：<a href="activity_host.html">
北京大学会议中心                    </a></div>
                    <div>官方网页链接：<a href=
"http://www.pku-hall.com/qbhd-nr.aspx?id=2971"                        >
http://www.pku-hall.com/qbhd-nr.aspx?id=2971                    </a>
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

节目单：
1、春节序曲　　　　　　　　　　　　　　　　李焕之 曲
2、小提琴协奏曲《梁山伯与祝英台》　　　　　陈钢、何占豪 曲
3、《胡桃夹子》组曲　　　　　　　　　　　　柴科夫斯基 曲
中场休息
4、红旗颂　　　　　　　　　　　　　　　　　吕其明 曲
5、《假面舞会》组曲　　　　　　　　　　　　哈恰图良 曲
6、斯拉夫进行曲　　　　　　　　　　　　　　柴科夫斯基 曲
7、I、莫斯科郊外的晚上
    II、喀秋莎　　　　　　　　　　　　　　　 女声独唱：奥莉加·穆奇科娃
（曲目如有变动，以当日演出为准）
本场演出时长约105分钟，含中场休息15分钟。
俄罗斯国立克麦罗沃爱乐乐团  
　　俄罗斯国立克麦罗沃爱乐乐团（Russian State Kemerovo Philharmonic）是俄罗斯最负盛名的六大交响乐团之一。乐团不仅能演奏俄罗斯和西方古典交响乐作品，而且对现代作品的理解和诠释也有相当独到的造诣，在欧洲具有相当的名气。 
　　世界上许多著名的演奏家都曾经与该团进行过合作演出，如钢琴家维拉蒂摩尔•科伦尼夫、小提琴家安得列•克萨阔夫等，世界上许多大师级指挥家都曾执棒该乐团。乐团还成功在匈牙利、德国、瑞士、马耳他、比利时、法国、西班牙、奥地利、中国等地举办巡回演出，巡演足迹遍及欧洲和世界几十个国家和地区，所到之处均得到高度的评价和赞誉。
指挥：林涛
　　中央音乐学院指挥系教授，俄罗斯国立克麦罗沃爱乐乐团艺术总监、首席指挥。莫斯科国家柴科夫斯基音乐学院授予其指挥表演艺术博士学位。
　　林涛先生指挥过圣彼得堡爱乐乐团、俄罗斯国家交响乐团、马林斯基剧院交响乐团、莫斯科爱乐乐团、圣彼得堡交响乐团、莫斯科广播交响乐团、莫斯科交响乐团、乌拉尔爱乐乐团、新西伯利亚交响乐团、维也纳交响乐团、捷克布拉格交响乐团、西班牙穆尔西亚交响乐团、土耳其国家交响乐团等世界知名乐团，并受邀担任俄罗斯许多乐团的客座指挥，在世界各地成功地指挥了一千多场音乐会以及二十多部歌剧，受到听众及业内专家的极好评价和音乐评论家的多方赞誉。
小提琴：诺尔玛托娃·菲卢扎·塔什盖芭耶夫娜
　　1986年生于伊尔库斯克，2005年考入乌兹别克斯坦国立音乐学院小提琴专业，并于2009年获学士毕业证书，2013年获硕士毕业证书。她是诸多艺术节和大师班的参与者，如：2006年法国的欧洲交响艺术节、2007年塔吉克斯坦杜尚别的巴赫里斯顿艺术节、2009年法国尼斯的日内瓦音乐学院举办的国际大师班。在2010年德国奥戈堡Appolon-Musagete弦乐四重奏举办的国际大师班中，她斩获慕尼黑《ARD》四重奏国际竞赛一等奖，这是继2008年获得该奖项的希望奖后第二次斩获殊荣。同年，她还获得了Shabit国际室内乐竞赛哈萨克斯坦阿斯塔纳获总统杯和最高奖，她曾于2007年斩获过该奖项的二等奖。
　　此外，她还是诸多国内外竞赛的获奖者和参与者，如：2005年国家竞赛《ССУЗ》三等奖、2009年作为集体艺术创作联合体室内乐演员参加了在柏林-塔什干举办的国际设计节、2010年塔什干尼霍尔胜利者国家奖的参与者、2011年乌兹别克斯坦-土库曼斯坦举办的艺术行家音乐会的参与者。从2010年起，她成为斯皮瓦科瓦管理的独联体青年交响乐团的经常参与者。2012年9月参加英国BBC－PROMS国际项目和马克•埃尔德爵士管理的和平交响乐团。2018年获得俄联邦政府的奖学金，同年获得克麦罗沃州“信仰和善良”奖章。
俄罗斯花腔女高音歌唱家：奥莉加·穆奇科娃
　　1984年5月27日出生于俄罗斯克麦罗沃州普罗科皮耶夫斯克市。她从小学习音乐，是普罗科皮耶夫青年天才基金会奖学金获得者。她曾在托木斯克地区杰尼索夫音乐学院学习声乐，2012年毕业于乌拉尔国立音乐学院音乐系，后又于穆索尔斯基音乐学院继续深造。毕业后，她立即受邀到车里雅宾斯克国立模范歌剧和芭蕾舞剧院参加演出。2017年11月，她担任了库兹巴斯国家音乐学院的独唱演员。奥莉加拥有精湛的声乐技巧，其音乐风格和舞台魅力一直吸引着公众的关注。


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