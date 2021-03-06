<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
沪剧《雷雨》</title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>

    <link rel="stylesheet" href="layui/css/layui.css">
    <script src="layui/layui.js"></script>
    <script src="activity_details.js"></script>

    <script>
        function replaceDoc() {
window.location.replace("./40.php")    </script>

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
"pic/40.png"                     id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
沪剧《雷雨》 </div>
                    <div>活动时间：
2020年4月16日 </div>
                    <div>活动主办方：<a href="activity_host.html">
上海沪剧院   </a></div>
                    <div>官方网页链接：<a href=
"http://www.pku-hall.com/qbhd-nr.aspx?id=2839"            >
http://www.pku-hall.com/qbhd-nr.aspx?id=2839        </a>
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


传世经典沪剧《雷雨》
根据曹禺先生同名话剧改编
剧情介绍：
　　故事发生于二十世纪二十年代初，周公馆。
　　妻子繁漪不堪窒息于丈夫周朴园的专横冷酷，将追求新生活的希望寄予年岁相差不大的周朴园的长子周萍身上。岂料周萍已转而热恋年当青春的女佣四凤。此刻，四凤的母亲鲁妈来到周公馆，与周朴园不期而遇，原来她就是三十年前被抛弃了的周萍的生母。她决计带四凤远走他乡。然而，雷雨交加之夜，当两家人的情感纠葛真相大白之后，三个无辜的年轻人瞬间死于非命，生者却仍在毁灭的痛苦中挣扎……
原改编：宗华
本次改编：余雍和
导演：曹其敬
唱腔、音乐配器修改：汝金山
舞美设计：刘元声
灯光设计：沈倩  董思杰
服装造型设计：陈国梅  糜惠良
演员表
茅善玉  饰  繁　漪
陈　瑜  饰  鲁　妈
王明达  饰  周朴园
朱　俭  饰  周　萍
钱思剑  饰  鲁大海
凌月刚  饰  鲁　贵
洪豆豆  饰  四　凤
金世杰  饰  周　冲
（本场演出时长约120分钟，无中场休息；演员如有变动，以当日演出为准）
主要演员介绍
茅善玉
　　著名沪剧表演艺术家、国家一级演员，上海沪剧院院长，国家级非物质文化遗产项目“沪剧”项目代表性传承人。全国宣传文化系统“四个一批”人才。现任全国政协委员、民盟中央委员、中国戏曲现代戏研究会副会长、中国戏剧家协会理事、上海戏剧家协会副主席、上海戏曲艺术中心艺委会主任。2002年2月至今任上海沪剧院院长。
　　1974年考入上海沪剧团学馆，1979年毕业后留团(今上海沪剧院)。曾先后主演《庵堂相会》《一个明星的遭遇》《姊妹俩》《魂断蓝桥》《血染姐妹花》《牛仔女》《碧海青天夜夜心》《今日梦圆》《红灯记》《生死对话》《露香女》《家》《雷雨》《瑞珏》《董梅卿》《邓世昌》《敦煌女儿》等剧目。还在《璇子》《姊妹俩》《牛仔女》等沪剧电视连续剧和电影《风雨相思雁》、沪剧电影《雷雨》中担任主演。曾先后为来华访问的美国里根总统、德国科尔总理等国家首脑作专场演出。近年多次赴港澳台访问演出，先后出访美国、南非、澳大利亚等国，并于2006年1月应邀在奥地利维也纳金色大厅举行的“中国新春音乐会”上，登台演唱沪剧选曲《燕燕做媒》，使沪剧第一次登上了世界级艺术殿堂。
　　她师承沪剧宗师丁是娥和石筱英，并转益多师，其唱腔兼有“丁派”的华丽多变和“石派”的委婉甜糯，多年来的舞台实践让茅善玉对沪剧音乐唱腔有了更深的理解，并不断探索沪剧声腔的丰富性和现代表达，坚持自己设计每段唱腔，以我为主，在传承中发展，吸收了越剧、评弹、锡剧、京剧等特色，并将现代流行歌曲的节奏和气声唱法、中国民族的歌唱技巧，融会于沪剧的声腔之中；她行腔圆润妩媚，旋律丰富大气而婉转跌宕，以真挚、饱满的情感和深沉的文化内蕴传递出磁实的气场和审美的想象，洋溢着上海都市的清新格调和时代气息；其表演力求从人物出发，挖掘内心世界，借助肢体语言的手段，气脉连贯，自然饱满，生动传神，从而形成了独具风格的表演艺术。近年来她塑造的艺术形象深入人心，许多片段和唱段在社会上大量传唱，深得广大观众的喜爱和追捧。
　　曾先后荣获第二届《大众电视》“金鹰奖”最佳女主角奖，全国现代戏会演主演一等奖，上海市青年演员会演特等奖，第二届、第二十六届中国戏剧“梅花奖”（二度梅），第一、第七届上海白玉兰戏剧表演艺术主角奖，第四届中国戏剧节优秀主角奖，2011年荣获中国戏曲现代戏突出贡献奖，2012年荣获上海优秀文艺工作者奖。2014年荣获上海市五一巾帼奖标兵、上海市五一劳动奖章、奖状、上海文艺家荣誉奖，2014年10月15日参加习近平总书记主持召开的全国文艺工作座谈会，还荣获2015—2016年度上海市三八红旗手标兵，2017年度全国三八红旗手。曾任上海市人大代表。
陈  瑜
　　著名沪剧表演艺术家、国家级非物质文化遗产项目“沪剧”项目代表性传承人。
　　1960年考取上海黄浦区戏曲学校，1962年进入艺华沪剧团，1972年转入上海沪剧院。1993年至2002年任上海沪剧院青年团团长。曾先后主演《孔雀胆》《半把剪刀》《返魂香》《无辜的罪人》《雷雨》《杨乃武与小白菜》《樱花》《画女情》《清风歌》《明月照母心》《方桥情缘》《我心握你手》《今日梦圆》《影子》《星星之火》《心有泪千行》和《上海老师》等剧目，在《明月照母心》《昨夜情》等沪剧电视连续剧中担任主演，还在沪剧电影《雷雨》中饰演鲁妈一角。另外，她在《碧落黄泉》《永恒的旋律》等剧目中甘当配角，为培养青年演员做出了很大贡献。她的表演富有激情，擅长塑造当代各种不同类型的人物形象，在赋子板的演唱上尤见功力。1992年获第九届中国戏剧梅花奖，1989年和1992年获第一届、第二届国家文华表演奖，1989 年和1992年获第一届、第三届上海白玉兰戏剧表演主角奖，1991年获全国戏曲现代戏优秀演员奖，于1995年获得第四届中国戏剧节优秀配角奖，1993年获国务院颁发的政府特殊津贴，2002年获国务院颁发的“优秀专家”称号，还先后被评为上海德艺双馨的文艺工作者和上海妇女“三八”红旗手标兵，上海市劳动模范、国家级非物质文化遗产“沪剧”项目优秀传承人，2011年获中国戏曲现代戏突出贡献奖，2012年获“2011年度上海优秀文艺工作者奖”。曾任上海市第九届、第十届、第十一届政协常委，现为上海文史研究馆馆员。
王明达
　　著名沪剧表演艺术家。
　　1960年考取上海市静安区戏曲学校，1962年进长江沪剧团，1973年转入上海沪刷团(今上海沪剧院)。曾先后在《牛仔女》《影子》《心有泪千行》《芦荡火种》《石榴裙下》《雷雨》《一文钱》《露香女》《碧海青天夜夜心》《孽债》《返魂香》《逃犯》《上海老师》等剧目中扮演重要角色，还在沪剧电影《雷雨》中饰演周朴园一角。他的戏路较宽，演正面形象能深入细腻地开掘人物内心世界，具有很强的艺术感染力；演反面角色避免脸谱化，注重揭示人物阴暗心理和人物行动，给人以入木三分的印象。曾任上海沪剧院委托上海戏剧学院附属戏曲学校定向培养2013级沪剧表演班教研组长。
朱俭
　　国家一级演员，国家级非物质文化遗产保护项目“沪剧”项目上海市代表性传承人。
　　1987年考入上海戏曲学校沪剧班，1992年毕业后进上海沪剧院。2007年拜著名沪剧表演艺术家、“王(盘声)派”传人孙徐春为师。曾先后主演《杨乃武与小白菜》《碧落黄泉》《夜半歌声》《我心握你手》《永恒的旋律》《血染姐妹花》《方桥情缘》《董梅卿》《啼笑因缘》《芦荡火种》《石榴裙下》《大红喜事》《一文钱》《日出》《胡锦初借妻》《陆雅臣卖娘子》《家》《瑞珏》《雷雨》《人间至爱》《露香女》《魂断蓝桥》《海上梦》《芦荡火种》《霓虹灯下的哨兵》《邓世昌》《一号机密》等剧目，并在沪剧电影《雷雨》中饰演周萍一角，曾举办《粉墨佳年华2007上海优秀青年演员汇演“申曲复兴”朱俭、程臻沪剧专场》演出。他扮相英俊潇洒，表演轴成，深受观众喜爱。1993年获上海首届青年沪剧演员大奖赛“十佳”称号，1999年获上海白玉兰戏剧表演主角奖，2000年获第八届中国人口文化奖优秀演员奖，2001年获全国地方戏曲折子戏暨青年演员大奖赛二等奖，2003年与程臻同被推举为“东方戏剧之星”，2006年获“上海市优秀文艺人オ奖”，2007年获“中国戏曲红梅荟萃”红梅金奖，2012年获“上海市青年五四奖章”。曾当选为上海市徐汇区人大代表，现为上海市青联委员、上海戏剧家协会理事。
钱思剑
　　国家一级演员，国家级非物质文化遗产保护项目“沪剧”项目上海市代表性传承人
　　1982年进入崇明沪剧团，1993年调入上海沪剧院。曾先后主演《家庭公案》《野杨梅》《王孝和》《碧落黄泉》《夜半歌声》《方桥情缘》《我心握你手》《心中只有你》《心有泪千行》《生死对话》《瑞珏》《十六铺人家》《军礼》《红灯记》《芦荡火种》《敦煌女儿》等剧目，并在《雷雨》《金大班的最后一夜》《邓世昌》等剧目中出演重要角色，还在沪剧电影《雷雨》里饰演鲁大海一角。他嗓音明亮，润腔流畅，韵味醇厚，在演绎沪剧“袁（滨忠）派”唱腔上尤见功力。1993年获上海沪剧青年十佳称号，2000年荣获第八届中国人口文化奖优秀演员奖，2001年获上海戏剧表演白玉兰配角奖，2006年获上海优秀文艺人才奖。曾任上海市静安区政协委员、上海市青联委员、浦东新区青联常委。现为中国戏剧家协会会员，上海戏剧家协会理事，上海沪剧院演员团副团长，民进上海市委委员、民进上海市文化委员会副主委。
凌月刚
　　国家一级演员
　　1974年考入上海沪剧团学馆，1979年毕业后留团(今上海沪剧院)。曾先后在《庵堂相会》中饰演老相公，在《啼笑因缘》中饰演沈三弦，在《董梅卿》中饰演林朝奇，在《雷雨》中饰演鲁贵，在《日出》中饰演潘月亭，在《霓虹灯下的哨兵》中饰演连长，在《邓世昌》中饰演李鸿章，在《敦煌女儿》中饰演常书鸿等众多性格分明的角色,还在沪剧电影《雷雨》中饰演鲁贵一角。他塑造人物生动鲜活，能深刻挖掘角色的内心世界，具有冷峻、诙谐和深刻的特点。
洪豆豆
　　优秀青年演员。2006年考入上海戏剧学院附属戏曲学校，2011年毕业后进上海沪剧院。2014年拜著名沪剧表演艺术家茅善玉为师。曾在沪剧《胡锦初借妻》《陆雅臣卖娘子》《大雷雨》《雷雨》《霓虹灯下的哨兵》《红灯记》《芦荡火种》《魂断蓝桥》《邓世昌》《回望》等大戏中担任主要和重要角色，并在沪剧电影《雷雨》中出演四凤一角。先后荣获2014年上海白玉兰戏剧表演艺术奖新人配角奖，2016年上海市优秀共青团员，2016年度“全国优秀共青团员”称号。2017年荣获“上海市舞台艺术作品评选展演新人奖”。2018年当选“中国共青团第十八次全国代表大会代表”。她表演端庄，唱腔磁实，作为当今最年轻的沪剧优秀青年演员中的佼佼者深得观众喜爱。
金世杰  
　　优秀青年演员。2014年拜沪剧名家陆敬业为师。曾在沪剧《胡锦初借妻》《大雷雨》《霓虹灯下的哨兵》《红灯记》《陆雅臣卖娘子》《借黄糠》《邓世昌》《回望》《碧落黄泉》《一号机密》等大戏中担任主要和重要角色。他表演有激情，行腔清亮，是当今沪剧界优秀青年演员中最年轻的新秀之一。
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