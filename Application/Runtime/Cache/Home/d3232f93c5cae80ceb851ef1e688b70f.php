<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <title>忆天堂 - The Memory of Heaven</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/heavensky/Public/css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <img src="/heavensky/Public/img/logo.png">
        </div>
    </header>
    <div class="container">
        <div class="guide">
            <!-- <h4>人间留足迹，天堂寻追忆！</h4>
            <p>Footprint in the world, memories in the heaven! </p> -->
            <img src="/heavensky/Public/img/guide.png">
        </div>
        <div class="form">
            <div class="top">
                <a>悼念已逝的那些人</a>
                <br />
                <br />
                <a>Mourn the dead</a>
                <br />
                <br />
            </div>
            <div class="mid">
                <div style="text-align:center"><img src="http://i0.qhimg.com/dr/200__/t014637b89671031f41.jpg" style="display:inline-block"></div>
                <div style="display:inline-block;"><span>唐立民先生是中国共产党党员，大连理工大学原工程力学系教授，我国著名的力学家、教育家。1924年6月7日出生于河北省秦皇岛市。1946年，唐立民毕业于天津工商学院土木系。大学期间，唐立民不仅学习专业，还是工商学院管弦乐队的首席小提琴兼队长。大学毕业后，在唐山交通大学土木系任教。

                    1948年8月，他留学美国，1949年获密歇根大学土木系结构力学硕士学位，1950年又获数学系(数理统计)硕士学位，同时参加两项科研。抗美援朝战争爆发后，他毅然回国，先在政务院财政经济委员会计划局重工业计划处任职。1952年调至上海航务学院和大连海运学院。自1953年起，一直任教于大连工学院(现为大连理工大学)，先后任数理力学系副系主任、工程力学系系主任、工程力学研究所副所长、研究生院院长等职务。1977年被评为教授。1981年为计算力学学科首批博士导师。因病医治无效，2013年1月16日0点20分在大连逝世，享年89周岁。</span></div>
            </div>
            <div class="bottom" style="text-align:left;color:black">
                <button id="btnPray">祈祷</button>
                <button id="btnFlower">献花</button>
                <div>
                    <section style="max-width: 100%; margin: 0.8em 0px 0.5em; overflow: hidden; box-sizing: border-box; padding: 0px;">
                        <section class="135brush" data-brushtype="text" placeholder="请输入标题" style="height: 36px; display: inline-block; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold; padding: 0px 10px; line-height: 36px; float: left; vertical-align: top; background-color: rgb(30, 155, 232); box-sizing: border-box !important; margin: 0px;">评论</section>
                    </section>
                </div>
                <span style="text-align:left;color:black">昵称：</span>
                <input type="text" id="txtNickname">
                </br>
                </br>
                <span style="text-align:left;color:black">评论内容：<br><br></span>
                <textarea rows="7" cols="100" id="txtCommit" placeholder="在这里你可以写下你的评论"></textarea>
                <br>
                <br>
                <button type="button" id="btnSubmit">提交评论</button>
                <br>
                <br>
                <div>
                    <span style="float:left;color:black">某某人评论：XXXXXXXXXXXXXXXXXXXXXXXX</span>
                    <span style="float:right;color:black">time 2015/10/31</span>
                </div>
            </div>
        </div>
        <div class="bottom-pic">
            <img src="/heavensky/Public/img/bottom.jpg">
        </div>
        <div class="more-link">
            <a href="">详细内容</a>
            <div class="icon"></div>
        </div>
    </div>
    <div class="bottom">
        <div class="title">
            <span>联系我们</span>
            <span>关于我们</span>
        </div>
        <div class="contact">
            <span>邮箱：youhancompany@youhan.com</span>
            <span>QQ：123456789</span>
            <span>电话：12345678912</span>
            <span>南京优汉文化有限公司</span>
        </div>
    </div>
    <footer>
        <span>©2015-2015</span>
        <span>ICP证：苏B1-20150000</span>
        <span>南京优汉文化有限公司版权所有</span>
    </footer>
</body>
<script type="text/javascript" src="/heavensky/Public/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var pid = <?=$pid?>;
    $("#btnSubmit").click(function() {
        var nickname = $("#txtNickname").val();
        var comment = $("#txtCommit").val();
        $.post("<?php echo U('Index/Submit');?>", {
            pid: pid,
            type: 0,
            nickname: nickname,
            comment: comment
        }, function(back) {
            if (back.status === 0) {
                alert("评论成功");
            } else {
                alert("评论失败");
                console.log(back);
            };
        })
    })
    $("#btnPray").click(function() {
        $.post("<?php echo U('Index/Submit');?>", {
            pid: pid,
            type: 1,
        }, function(back) {
            if (back.status === 0) {
                alert("祈祷成功");
            } else {
                alert("失败");
                console.log(back);
            };
        })
    })
    $("#btnFlower").click(function() {
        $.post("<?php echo U('Index/Submit');?>", {
            pid: pid,
            type: 2,
        }, function(back) {
            if (back.status === 0) {
                alert("献花成功");
            } else {
                alert("失败");
                console.log(back);
            };
        })
    })
})

</script>
<div>

</html>