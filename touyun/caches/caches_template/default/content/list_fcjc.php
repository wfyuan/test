<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="icon" type="image/png" href="/touyun/statics/touyun/assets/i/favicon.png">
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
<!--头部完-->
<style>
    .am-gallery-title{ text-align: center;}
    .img2{ padding-top: 40px;}
</style>
<!--案例列表-->
<div class="anliBanner">
    <img style="width: 100%;" class="am-img-responsive" src="/touyun/statics/touyun/images/onecode/yBanner.jpg">
</div>
<div class="anliList">
    <div class="zdDetailWarp" id="floor1">
        <nav class="anli-fixedNav" id="fixedNav" data-am-scrollspynav="{offsetTop: 45}">
            <ul>
                <li><a href="#floor1">防窜稽查</a></li>
                <li><a href="#floor2">特色与优势</a></li>
                <li><a href="#floor3">产品组合</a></li>
                <li><a href="#floor4">产品价值</a></li>
            </ul>
        </nav>
        <div class="zdDetailWarpRight" style="padding-bottom:30px;">
            <h1 style="color:#0D5899">防窜稽查</h1>
            <p>	基于一物一码的全流程数据追溯，在企业因为成本或实施困难无法全面部署分销管理工具的情况下，透云科技的简单防窜货系统可以较低成本和较简单的实施难度，帮助企业实现货物跟踪。借助消费者扫码的数据分析提供窜货分析和预警，提高企业防窜货效率。</p>
            <!--<div class="centerImg">-->
                <!--<img src="/touyun/statics/touyun/images/onecode/fcjc1.png" width="700">-->
            <!--</div>-->

        </div>
        </div>

    <div class="zdDetailWarpType2" id="floor2">
        <div class="zdDetailWarp">
            <div class="zdDetailWarpRight">
                <h2 style="color:#fff;">特色与优势</h2>
                    <p class="am-text-white">简单防窜货产品可通过供应链或预绑定，将产品流通方向和一级经销商关联。通过和消费者扫码得到的反馈与经销商流向的分析，提供防窜预警。同时，也可以和溯源系统整合，为消费者提供防伪信息。</p>
                <p class="am-text-white">可为企业提供通过采集消费者扫码信息进行的防窜分析。包括防窜地图、防窜预警和防窜查询</p>
                <p class="am-text-white">利用消费者扫码进行防窜稽查具有以下优势：</p>
                    <p class="am-text-white">仅通过关联一级经销商、及消费者扫码即可形成窜货地图，部署简单、高效，投入低，收效高；消费者可通过扫码进行产品的防伪验证，以及参与扫码营销活动。
                </p>
                <div class="centerImg">
                <img src="/touyun/statics/touyun/images/onecode/fcjc2.png" width="720">
                    </div>

            </div>
        </div>
    </div>

        <div class="zdDetailWarp" id="floor3">
             <div class="zdDetailWarpRight">
                 <h2 style="color:#0D5899">产品组合</h2>
                 <p>通过消费者购买时的扫码行为，获取产品最终售卖地理信息，对比一级经销商分销地图，即可形成对应的窜货地图，了解产品初步窜货情况。</p>
                 <p>可与扫码营销活动管理（尊享版）组合使用</p>
                 <p>基于“一物一码”的互动，为品牌以消费者为中心重新审视营销创意提供可扩展的平台，并提供消费者进行产品的防伪溯源验证，并帮助企业进行窜货稽查。</p>
                 <ul class="am-gallery am-gallery-default am-cf" >
                     <li class="am-u-sm-7" style="padding: 0 30px;">
                         <div class="am-gallery-item">
                             <img style="height: 320px;" src="/touyun/statics/touyun/images/onecode/fcjc3.png"/>
                             <h3 class="am-gallery-title">多元灵活的奖品管理</h3>
                         </div>
                     </li>
                     <li class="am-u-sm-5" style="padding: 0">
                         <div class="am-gallery-item">
                             <img style="height: 320px;" src="/touyun/statics/touyun/images/onecode/fcjc4.png"/>
                             <h3 class="am-gallery-title">手机端查询</h3>
                         </div>
                     </li>
                 </ul>

                 <div class="centerImg img2">
                     <img src="/touyun/statics/touyun/images/onecode/fcjc4.jpg" width="720">
                 </div>


             </div>
        </div>

    <div class="zdDetailWarpType2" id="floor4">
        <div class="zdDetailWarp">
            <div class="zdDetailWarpRight">
                <h2 style="color:#fff">产品价值</h2>
				<div class="footerText">
					<h3 class="am-text-white"><b>对品牌：</b></h3>
					<p class="am-text-white">规范渠道，可帮助实现对经销商的管理；<br/>
						最大限度的保证品牌附加值回收、统一市面上的价格；<br/>
						防止经销商参与恶性竞争，增强经销商和消费者对品牌的信心；<br/>
						确保企业定点投放（针对某些地区的特价政策、促销活动）效益最大化；<br/>
						企业可在使用防窜货扫码功能的同时，提供产品防伪溯源。
					</p>
					<h3 class="am-text-white"><b>对经销商：</b></h3>
					<p class="am-text-white">防止产品在流通环节的恶性竞争，保证经销商的渠道利益。
					</p>
					<h3 class="am-text-white"><b>对消费者：</b></h3>
					<p class="am-text-white">消费者可通过扫码参与扫码营销活动，享受企业的促销优惠；<br/>
						消费者也可通过扫码进行产品的防伪溯源。<br/>
					</p>
				</div>

            </div>
        </div>
    </div>

</div>
<!--案例列表完-->

<script>
    $(function () {
        var heightL = $("#floor1").offset().top;
        var footerT = $("#footer").offset().top;
        var barHeight = $('#fixedNav').height();

        var fixedNavL = ($(window).width()-800)/2 - 150;

        var floor =  $("div[id*='floor']");
        var jumbotronTop = ''
        var currentID = '';

        $(window).scroll(function () {
            var scrollTop = $(document).scrollTop();
            if(scrollTop>heightL){
                $('#fixedNav').css({'position':'fixed','left':fixedNavL+'px','top':'72px'})
            }else{
                $('#fixedNav').css({'position':'absolute','left': '-50px','top':'40px'})
            }
            var scrollTop =  $(window).scrollTop();
            if(scrollTop>=(footerT-barHeight)){
                $('#fixedNav').hide();
            }else{
                $('#fixedNav').show();
            }
            floor.each(function() {
                var $this = $(this);
                jumbotronTop = parseInt($this.offset().top);//获取当前楼层的高度
                if (scrollTop > (jumbotronTop - 260)) {
                    currentID =　$this.attr("id").slice(5);
                }else {
                    return false;
                };
            })

            if(currentID%2 == 0){
                $('#fixedNav').addClass('active');
            }else{
                $('#fixedNav').removeClass('active');
            }
        })
    })
</script>

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
                <img src="/touyun/statics/touyun/images/index/wechatcode.png">
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