<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>加入我们</title>
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <!--公用的样式和js-->
    <link rel="stylesheet" href="/touyun/statics/touyun/amaze/css/amazeui.min.css">
    <link rel="stylesheet" href="/touyun/statics/touyun/css/common/app.css">
    <script src="/touyun/statics/touyun/js/common/jquery-1.11.2.min.js"></script>
    <script src="/touyun/statics/touyun/amaze/js/amazeui.min.js"></script>
    <script src="/touyun/statics/touyun/js/common/app.js"></script>
    <!--公用的over-->
</head>
<body>
<!--首页专用的js，css-->
<link rel="stylesheet" href="/touyun/statics/touyun/css/index/index.css">
<?php include template("content","tyheader"); ?>

<style>
.joinContainer{ width: 748px; margin: 0 auto; padding-left: 215px; background-color: #fff;color: #333;}
.joinContainer h1{ font-size: 32px; font-weight: bold; padding-left: 100px; padding-top:70px; }
.joinContainer p{ font-size: 14px; line-height:25px;  }
.joinContainer ul{ padding-left: 0;}
.joinContainer h5{ font-size: 24px; font-weight: bold; }
.joinContainer li{ font-size: 14px; line-height: 25px; }
.joinContainer img{ margin: 30px auto 100px; }
</style>
<!--头部完-->
<div class="anliBanner">
    <img style="width: 100%;" class="am-img-responsive" src="/touyun/statics/touyun/images/anli/yBanner.jpg">
</div>

<div style="background-color: #f4f4f4; padding: 0">
    <div class="joinContainer">
	 <h1 style="color:#0D5899"><?php echo $title;?></h1>
	<?php echo $content;?>
       <!--  <h1>加入我们</h1>
        <p>众店宝，百万小店的制胜法宝<br>
            马上加入，立享七重福利！<br>
            加盟热线：4006165073</p>
        <h5>七大福利</h5>
        <ul>
            <li>• 	免费使用价值3000元的门店智能设备及系统</li>
            <li>• 	价格更低的进货渠道</li>
            <li>• 	持续的促销活动和在线抽奖</li>
            <li>• 	众店宝店主奖励活动</li>
            <li>• 	线上线下的免费贴心服务</li>
            <li>• 	未来快速、低息的运营资金贷款保证</li>
            <li>• 	吸引更多附近客流的外送服务</li>
        </ul>
        <img src="images/about/interus.jpg"> -->
    </div>
</div>

<!--右边的操作部分-->
<div class="aside-opation" id="asidePart">
    <ul class="asideList">
        <li class="case1">
            <p><a href="">在线<br>客服</a></p>
        </li>
        <li class="case2">
            <p>电话<br>热线</p>
            <div class="mobileCont">
                <div class="close">
                    <span class="am-icon-remove"></span>
                </div>
                <h4>联系我们</h4>
                <h5><span class="am-icon-phone"></span> 021-61820853</h5>
            </div>
        </li>
        <li class="case3">
            <p>扫码<br>关注</p>
            <div class="mobileCont">
                <div class="close">
                    <span class="am-icon-remove"></span>
                </div>
                <img src="images/index/wechatcode.png">
                <h3>透云官方微信</h3>
            </div>
        </li>
        <li class="case4">

        </li>
    </ul>
</div>
<?php include template("content","tyend"); ?>
</body>
</html>