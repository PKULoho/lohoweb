<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
2019·春风上巳天 昆曲经典折子戏专场</title>
    <link rel="icon" type="image/png" href="ico/logo.png"/>

    <link rel="stylesheet" href="layui/css/layui.css">
    <script src="layui/layui.js"></script>
    <script src="activity_details.js"></script>

    <script>
        function replaceDoc() {
window.location.replace("./36.php")    </script>

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
"pic/36.png"                     id="activity_pic"></div>
                <div class="UpText">
                    <div>活动名称：
2019·春风上巳天 昆曲经典折子戏专场 </div>
                    <div>活动时间：
2020年3月2日 </div>
                    <div>活动主办方：<a href="activity_host.html">
石小梅昆曲工作室   </a></div>
                    <div>官方网页链接：<a href=
"http://www.pku-hall.com/qbhd-nr.aspx?id=3045"            >
http://www.pku-hall.com/qbhd-nr.aspx?id=3045        </a>
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


出　品：石小梅昆曲工作室 江苏省演艺集团昆剧院
艺术总指导：石小梅
总监制：李鸿良
戏剧顾问：张弘
节目单
《烂柯山·痴梦》
崔氏：徐思佳
　　剧情简介：崔氏抛弃贫寒丈夫朱买臣，改嫁木匠张西乔。后得知朱买臣当了本郡太守，心中百感交集，百般无奈，不觉入梦，梦见朱买臣派来接她当夫人。正在得意非凡，如痴似狂之际，突然惊醒过来，只见残月孤灯。
《鲛绡记·写状》
贾主文：计韶清
刘君玉：孙海蛟
　　剧情简介：临安讼师贾主文贪婪成性，伤天害理之事做过无数。心中惧怕，假装信佛。恰有为富不仁的刘君玉前来请他代写状子，诬告沈必贵。贾主文表示不愿做此“坏事”，但看到白花花的银锭后，慌忙扯下了伪装。
《九莲灯·火判》
火德星君：孙晶
闵远：张争耀
　　剧情简介：忠臣之子闵远因全家遭奸臣陷害，独自逃至火神庙躲避。火德星君现灵，问明情由。嘱闵至莲花圣母处借取九莲灯以解其危。此剧唱做繁重，为昆剧净行架子花脸代表剧目之一。
《春江花月夜·乘月》
张若虚：石小梅
辛夷：徐思佳
小鬼：钱　伟
　　剧情简介：张若虚死而复生，重回明月桥头，虽然只有三天的寿命，却仍然心心念念当年在此盼见倾心的佳人辛夷，不料阴间数日，阳世已过数十载，薄暮冥冥中，一位老妇迎上前来……叹可叹，往岁繁华，尽数凋零；当年红颜，无非白发，唯江流明月，灿然如故……
（本场演出时长约150分钟，无中场休息。节目、演员如有变动，以当日演出为准）
演员介绍
石小梅 
　　江苏省演艺集团昆剧院国家一级演员，工小生，1982年正式拜沈传芷、周传瑛、俞振飞为师。
　　代表剧目：全本大戏：《白罗衫》《桃花扇》、精华版《牡丹亭》《宫祭》。折子戏《牡丹亭•拾画叫画》《桃花扇•题画》《西楼记•玩笺错梦》《西楼记•拆书》《玉簪记•琴挑》《玉簪记•秋江》《牧羊记•望乡》《浣纱记•寄子》《荆钗记•见娘》《铁冠图•观图》《二胥记•哭秦》《春江花月夜·乘月》等。
　　主要荣誉：第五届中国戏剧梅花奖、第八届文华奖、首届江苏省政府资金荣誉奖、联合国教科文组织和文化部授予的“长期潜心昆曲艺术成绩卓著的艺术家”称号、国家级非物质文化遗产传承人、享受国务院特殊津贴。
计韶清
　　江苏省演艺集团昆剧院国家一级演员。1985年毕业于江苏省戏剧学校昆剧科。工付、丑，师从周传沧、姚继荪、范继信等。
　　代表剧目：《艳云亭·痴诉点香》《牡丹亭·问路》《鲛绡记·写状》《十五贯·访测》《寻亲记·茶访》《水浒记·活捉》《风筝误》等。
　　主要荣誉：首届全国昆剧青年演员交流演出兰花表演奖、第三届江苏戏曲红梅奖银奖、第五届江苏省戏剧节表演奖。
孙海蛟
　　江苏省演艺集团昆剧院国家一级演员。1985年毕业于江苏省戏剧学校昆剧科。工净、白面行。师从邵传镛、沈传锟、学、薛传钢、郭荣江、张永康、王正堃、王继南，文武皆备、表演细腻。
　　代表剧目：《鲛绡记·写状》《虎囊弹·山门》《牧羊记·小逼》《燕子笺·狗洞》等。 
　　曾获首届全国昆剧青年演员交流演出兰花表演奖。
徐思佳
　　江苏省演艺集团昆剧院国家二级演员。2004年毕业于江苏省戏剧学校昆剧科。工正旦、闺门旦，师从龚隐雷、胡锦芳、梁谷音、徐云秀等。2013年拜胡锦芳为师。
　　代表剧目：《朱买臣休妻》《雷峰塔·断桥》《奇双会·写状》《千里送京娘》《长生殿·小宴》《狮吼记·跪池》《桃花扇·逢舟》《双珠记·投渊》等。
　　主要荣誉：首届京昆艺术紫金奖新秀奖、表演奖，全国戏曲“红梅杯”成年组金奖，全国戏剧戏曲“蚁力神杯”华东六省一市赛区成年组铜奖，全国青年昆曲演员展演表演奖，首届黄孝慈戏剧奖·戏剧奖，第二届京昆艺术紫金奖优秀表演奖。
孙晶
　　江苏省演艺集团昆剧院国家二级演员。专工净行，师从赵坚、周志毅、杨才、黄小午、方洋、侯少奎、陈治平等老师。2012年拜方洋为师。
　　代表剧目：《九莲灯·火判》《祝发记·渡江》《风云会·千里送京娘》《单刀会》《天下乐·钟馗嫁妹》《草庐记·芦花荡》《虎囊弹·山门》《牡丹亭·冥判》《铁冠图·刺虎》《牡丹亭·问路》《牧羊记·望乡》《桃花扇·寄扇》《桃花扇·逢舟》等，大戏《1699·桃花扇》《南柯梦》《曲圣魏良辅》、传承版《桃花扇》《幽闺记》《逐梦记》《顾炎武》。
　　主要荣誉：全国昆曲优秀青年演员展演十佳新秀、第六届江苏戏曲红梅奖金奖。
张争耀
　　江苏省演艺集团昆剧院国家二级演员，1998进入江苏省戏剧学校昆剧科，主工巾生兼官生。师从石小梅、钱振荣、程敏、岳美缇等，2010年拜蔡正仁为师。
　　代表剧目：《幽闺记》《1699·桃花扇》《牡丹亭》《玉簪记》《长生殿·小宴、迎像哭像》《钗钏记》及实景版《浮生六记》。
　　主要荣誉：第三届全国红梅杯金花奖、第三届江苏戏曲红梅奖金奖、首届江苏省红梅飘香新人奖、第二届京昆艺术紫金奖优秀表演奖。
钱伟
　　江苏省演艺集团昆剧院国家二级演员，2004年毕业于江苏省戏剧学校昆剧科。工丑，师从李鸿良、计韶清、林继凡，2013年拜张寄蝶为师。
　　代表剧目:《跃鲤记·芦林》《寻亲记·茶访》《虎囊弹·山门》《占花魁·湖楼》《牡丹亭·问路》《水浒记·活捉》《1699·桃花扇》等。
　　主要荣誉：全国昆曲优秀青年演员展演表演奖、第八届江苏戏曲红梅奖银奖。
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