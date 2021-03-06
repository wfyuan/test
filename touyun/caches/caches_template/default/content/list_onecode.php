<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
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
<!--一物一码中的扫码营销-->
<!--首页专用的js，css-->
<link rel="stylesheet" href="/touyun/statics/touyun/css/index/index.css">
<?php include template("content","tyheader"); ?>
<!--头部完-->
<style>

    .yCodeSell { margin: 0; padding: 50px 0 0;}
    .yCodeSell li{  float:left; width: 190px; height: 343px; margin-left:45px; }

    .imgCont{ padding: 60px 0;}
    .imgCont .img1{ float: left; width: 215px;}
    .imgCont p{ text-align: center; margin: 0; padding-top: 10px;color: #fff;}
    .imgCont .line{ width:40px; height: 200px; border-right: 1px solid #fff; float: left; margin-right: 40px;}

    .productList{ margin: 0; padding: 60px 0 0; }
    .productList li{ float: left;  width: 240px; text-align: center; margin-right:20px;}

    .senceList{ margin: 0; padding: 50px 0 }
    .senceList li{ margin: 0; width: 130px; float: left; margin-left: 30px;}
    .senceList li p{ text-align: center; margin: 0; padding-top: 10px;}
</style>
<!--案例列表-->
<div class="anliBanner">
    <img style="width: 100%;" class="am-img-responsive" src="/touyun/statics/touyun/images/onecode/yBanner.jpg">
</div>
<div class="anliList">

    <div class="zdDetailWarp" id="floor1">
        <nav class="anli-fixedNav" id="fixedNav" data-am-scrollspynav="{offsetTop: 45}">
            <ul>
                <li><a href="#floor1">扫码营销活动</a></li>
                <li><a href="#floor2">超值版套餐</a></li>
                <li><a href="#floor3">人气版套餐</a></li>
                <li><a href="#floor4">尊享版套餐</a></li>
                <li><a href="#floor5">应用场景</a></li>
            </ul>
        </nav>
        <div class="zdDetailWarpRight">
            <h1>扫码营销</h1>

            <p>透云科技旗下的“扫码营销”产品，致力于通过赋码为企业提供营销管理工具和数据洞察系统，帮助品牌快速、轻松部署扫码市场营销活动，并通过大数据分析，及时了解市场营销活动效果情况。<br>
                透云科技针对个性化营销规模的大小，利用成熟的平台推出“超值版”、“人气版”、“尊享版”三档产品，品牌可以根据自己的现实需求，选择适合的产品。
            </p>
            <ul class="yCodeSell am-cf">
                <li><img src="/touyun/statics/touyun/images/onecode/yPackage1.jpg"></li>
                <li><img src="/touyun/statics/touyun/images/onecode/yPackage2.jpg"></li>
                <li><img src="/touyun/statics/touyun/images/onecode/yPackage3.jpg"></li>
            </ul>
        </div>
    </div>
    <div class="zdDetailWarpType2" id="floor2">
    <div class="zdDetailWarp" >
        <div class="zdDetailWarpRight">
            <h2 style="color:#fff;">超值版套餐</h2>
            <p class="am-text-white">该套餐功能包括防伪验证、扫码抽奖、微信红包、基础数据报表和50万二维码的全生命周期管理。企业客户可自定义扫码营销界面，确保与品牌风格一致。</p>

            <div class="imgCont am-cf">
                <div class="img1">
                    <img src="/touyun/statics/touyun/images/onecode/yface1.png">

                    <p>界面展示</p>
                </div>
                <div class="line">

                </div>
                <div class="img2">
                    <img src="/touyun/statics/touyun/images/onecode/yface2.png">

                    <p>先防伪后抽奖</p>
                </div>
            </div>
            <div class="footerText">
                <h3 class="am-text-white"><b>价值</b></h3>

                <p class="am-text-white">• &nbsp;&nbsp; 可为企业的小型营销活动提供廉价、安全、稳定的防伪验证功能，提升品牌形象，有效防范假冒伪劣产品，获得消费者的信任。</p>

                <p class="am-text-white">• &nbsp;&nbsp; 专业的赋码工艺咨询和客户端识别能力，可将品牌所需传达信息放置于安全可靠的云平台。</p>

                <p class="am-text-white">• &nbsp;&nbsp; 透云科技可为企业小型营销活动提供抽奖模板，可帮助快速设置市场营销活动页面，支持微信红包的奖品管理，并提供安全、透明、账目明晰的促销管理。</p>
            </div>
        </div>
    </div>
    </div>

    <div class="zdDetailWarp" id="floor3">
        <div class="zdDetailWarpRight">
            <h2 style="color:#0D5899">人气版套餐</h2>
            <p>
                套餐品牌提供自定义扫码营销模板。用户可轻松地通过“拖、拉、拽”设计消费者体验流程以及促销机制，快速、准确地生成个性化扫码营销活动页面，更可根据时间、地域、产品以及销量灵活调整营销策略、奖品类别和中奖概率。该款版产品提供了两百万二维码的生命周管理、41项功能和报表，覆盖扫码营销的主要能力。用户也可选购赋码实施服务套餐，实现“交钥匙工程”。
            </p>

            <div class="centerImg">
                <img src="/touyun/statics/touyun/images/onecode/yPackageHot.jpg">
            </div>
            <h3><b>价值：</b></h3>

            <div class="zService">
                <p>• &nbsp;&nbsp; 根据品牌、品类、时间、地点，快速、灵活地部署营销活动</p>

                <p>• &nbsp;&nbsp; 安全、透明、账目明晰的促销管理平台</p>

                <p>• &nbsp;&nbsp; 积累海量代表商品实际消费扫码信息（时间、地点、产品）和消费者在营销互动过程中的行为数据</p>
            </div>
            <div class="centerImg">
                <img src="/touyun/statics/touyun/images/onecode/yPackageProduct.jpg">
            </div>
        </div>
    </div>

    <div class="zdDetailWarpType2" id="floor4">
    <div class="zdDetailWarp" >
        <div class="zdDetailWarpRight">
            <h2 style="color:#fff">尊享版套餐</h2>

            <p class="am-text-white">
                该套餐为品牌提供透云扫码营销管理平台所有64项功能，包括：提供四种类型的二维码（普通、卷标、套标、双码）、主要扫码营销功能、会员管理及标签功能（等级划分和条件精准筛选）、微信SCRM标签接口、通路行销数据接口、扫码营销相关报表、商品消耗、商品铺货周期分析等，并可支持品牌营销活动的定制开发，可拓展提供第三方接口，并可在客户公有云部署等。是专门服务于大型品牌的扫码营销活动而推出的一款产品。
            </p>

            <ul class="productList am-cf">
                <li>
                    <img src="/touyun/statics/touyun/images/onecode/yproduct1.png">

                    <p class="am-text-white">先防伪后抽奖</p>
                </li>
                <li>
                    <img src="/touyun/statics/touyun/images/onecode/yproduct2.png">

                    <p class="am-text-white">自定义活动页面设计</p>
                </li>
                <li>
                    <img src="/touyun/statics/touyun/images/onecode/yproduct3.png">
                    <p class="am-text-white">深度用户分析</p>
                </li>
            </ul>
            <h3 class="am-text-white"><b>价值：</b></h3>
                <p class="am-text-white">• &nbsp;&nbsp; 根据品牌、品类、时间、地点，快速、灵活地部署营销活动</p>

                <p class="am-text-white">• &nbsp;&nbsp; 安全、透明、账目明晰的促销管理平台</p>

                <p class="am-text-white">• &nbsp;&nbsp; 贴合目标消费者的需求，实时调整消费者体验设计方案</p>

                <p class="am-text-white">• &nbsp;&nbsp; 积累海量代表商品实际消费扫码信息（时间、地点、产品）和消费者在营销互动过程中的行为数据</p>

        </div>
    </div>
    </div>

    <div class="zdDetailWarp" id="floor5">
        <div class="zdDetailWarpRight">
            <h2 style="color:#0D5899">扫码营销活动应用场景</h2>
            <ul class="senceList am-cf">
                <li>
                    <img src="/touyun/statics/touyun/images/onecode/ySence1.jpg">

                    <p>福临门</p>
                </li>
                <li>
                    <img src="/touyun/statics/touyun/images/onecode/ySence2.jpg">

                    <p>蒙牛优益C</p>
                </li>
                <li>
                    <img src="/touyun/statics/touyun/images/onecode/ySence3.jpg">

                    <p>好时巧克力</p>
                </li>
                <li>
                    <img src="/touyun/statics/touyun/images/onecode/ySence4.jpg">

                    <p>天地一号</p>
                </li>
            </ul>
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
<!-- 
<div class="footer">
    <div class="container am-cf">
        <div class="mapsite am-fl am-cf">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
			<dl>
                <dt><?php echo $r['catname'];?></dt>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=050b6fa64652ce6258bc9e7d61f5b7cc&action=category&catid=%24k&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
				 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <dd><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></dd>
				 <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       
        </div>
        <div class="touyuncode am-fr">
            <p>透云官方微信</p>
            <img src="/touyun/statics/touyun/images/index/wechatcode.png">
        </div>
        <div style="clear: both;"></div>
        <div class="footer-bottom">
            <p>© 2014-2017 SAO.SO 上海透云物联网科技有限公司 版权所有 | 沪ICP12016045号-4 网站地图<br>
                沪公网安备 31010602001034号</p>
        </div>
    </div>
</div> -->
<?php include template("content","tyend"); ?>
</body>
</html>