<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:31:"./template/pc/lists_article.htm";i:1559035162;s:44:"D:\xampp\htdocs\runde\template\pc\header.htm";i:1559272803;s:41:"D:\xampp\htdocs\runde\template\pc\top.htm";i:1559035162;s:44:"D:\xampp\htdocs\runde\template\pc\footer.htm";i:1559035162;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/slick.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/g.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/s.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery-1.11.1.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery-ui.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/slick.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/scrolloverflow.min.notransition.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/g.js"></script>
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/freedom.css" />
<script>(function(){var l=function(){var l1=function(){var sg=document.createElement('SCRIPT');sg.setAttribute('src','<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/freedom.js?v1.18.12.14');(document.head||document.getElementsByTagName('head')[0]).appendChild(sg);sg.onload=function(){_g.take($(document));};};if(!window.jQuery){var sj=document.createElement('SCRIPT');sj.setAttribute('src','<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery-1.11.1.min.js');(document.head||document.getElementsByTagName('head')[0]).appendChild(sj);sj.onload=l1;}else l1();};window.addEventListener?window.addEventListener('load',l):window.attachEvent('onload',l);})();</script>
</head>
<style>
/*news_home*/


.content_home .news_home {
}
.content_home .news_home .lt {
	margin-left: -30px;
}
.content_home .news_home .list {
}
.content_home .news_home .list li {
	margin-bottom: 30px;
	padding-left: 30px;
	width: 33.33%;
}
.content_home .news_home .list li:nth-child(3n+1) {
	clear: both;
}
.content_home .news_home .list li a {
	background: #f3f6fa;
	display: inline-block;
}
.content_home .news_home .list li .ne_ct {
	width: 100%;
	max-height: 252px;
}
.content_home .news_home .list li .mode {
	padding: 30px 15px;
}
.content_home .news_home .list li .mode .n_t1 {
	margin-right: 5px;
	width: 16px;
	vertical-align: middle;
}
.content_home .news_home .list li .mode .n_t2 {
	margin-top: 5px;
	width: 17px;
	float: right;
	vertical-align: middle;
	display: none;
}
.content_home .news_home .list li .mode .n_t2_a {
	margin-top: 5px;
	width: 17px;
	float: right;
	vertical-align: middle;
}
.content_home .news_home .list li .mode .ico {
	margin-bottom: 20px;
	font-size: 12px;
	color: #b3b3b3;
	vertical-align: middle;
	display: inline-block;
	float: right;
}
.content_home .news_home .list li .mode .p1 {
	margin-top: 20px;
	font-size: 18px;
	color: #3f3f40;
	height: 1.5em;
	overflow: hidden;
}
.content_home .news_home .list li .mode .p2 {
	line-height: 28px;
	color: #b3b3b3;
	font-size: 14px;
	height: 6em;
	overflow: hidden;
}
.content_home .news_home .list li .mode .tm {
	vertical-align: middle;
}
.content_home .news_home .list li a:hover {
	background: #0a64be;
}
.content_home .news_home .list li a:hover .p1 {
	color: #fff;
}
.content_home .news_home .list li a:hover .n_t2 {
	display: inline-block;
}
.content_home .news_home .list li a:hover .n_t2_a {
	display: none;
}
 @media (max-width: 1024px) {
.content_home .news_home .list li {
	width: 50%;
}
.content_home .news_home .list li:nth-child(3n+1) {
	clear: none;
}
}
 @media (max-width: 710px) {
.content_home .news_home .list li:nth-child(2n+1) {
	clear: both;
}
}
 @media (max-width: 667px) {
.content_home .news_home .list li {
	width: 100%;
}
}
.pages {
	margin-top: 60px;
	text-align: center;
	clear: both;
}
.pages ul {
	margin-top: 60px;
	display: inline-block;
}
.pages ul li {
	display: inline-block;
	box-sizing: border-box;
}
.pages ul li a {
	padding: 10px 17px;
	border: solid transparen 1px;
}
.pages ul li a:hover {
	background: #0a64be;
	border-color: #e9eff9;
	color: #fff;
}
.pages ul li .on {
	padding: 10px 17px;
	background: #0a64be;
	border: solid #e9eff9 1px;
	color: #fff;
}
</style>
<body>
<div class="g_header clearfix">
  <div class="bar"> <a href="#" class="menu"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/cd.svg" /></a>
    <p class="logo"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>" /></a></p>
  </div>
  <div class="g_cw">
    <div class="main">
      <div class="top">
        <div class="left"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="logo"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" /></a> </div>
        <div class="right">
          <p class="tp"> <img class="tp_dh" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/tp_dh.svg">全国咨询热线：<span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></span> </p>
          
        </div>
      </div>
      <div class="bo">
        <div class="nav_bj">
          <div class="right">
            <ul class="nav">
              <li> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" >
                <p class="na_a <?php if(CONTROLLER_NAME == 'Index'): ?>on_a<?php endif; ?> "><em class="en na_t">HOME</em></p>
                <p class="na_b <?php if(CONTROLLER_NAME == 'Index'): ?>on_a<?php endif; ?> "><b>首页</b></p>
                <p class="na_c"><em class="en na_t on_a">HOME</em></p>
                </a> </li>
             <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "on_a"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
              <li> <a href="<?php echo $field['typeurl']; ?>">
                <p class="na_a <?php echo $field['currentstyle']; ?>"><em class="en na_t"><?php echo $field['englist_name']; ?></em></p>
                <p class="na_b <?php echo $field['currentstyle']; ?>"><b><?php echo $field['typename']; ?></b></p>
                <p class="na_c"><em class="en na_t"><?php echo $field['englist_name']; ?></em></p>
                </a> </li>
             <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> 
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="banner clearfix">
  <div class="banner_pc">
    <div class="frame" style="background-image:url(<?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("1"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?><?php echo $field['litpic']; endif; else: echo "";endif; ?>); width:100%; ">
      
    </div>
  </div>
  
</div>
<div class="banner_m clearfix" zoom-width="1024" zoom-heigh="780">
  <div class="frame_a" style="background-image:url(<?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("2"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?><?php echo $field['litpic']; endif; else: echo "";endif; ?>); width:100%; display:inline-block;">
    
  </div>
</div>
<div class="content_home">
  <div class="top">
    <div class="g_cw">
      <div class="g_title">
        <p class="p1"><?php echo gettoptype($eyou['field']['typeid'],'typename'); ?></p>
        <p class="p2"><?php echo gettoptype($eyou['field']['typeid'],'englist_name'); ?></p>
      </div>
      <div class="lt">
        <ul class="list">
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "en"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
          <li><a class="<?php echo $field['currentstyle']; ?>" href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a></li>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>   
        </ul>
      </div>
    </div>
  </div>
  <div class="news_home">
    <div class=" g_cw g_mt g_mb">
      <div class="lt">
        <ul class="list">
        <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 6, "", "", "desc");if(is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
          <li> <a href="<?php echo $field['arcurl']; ?>" target="_blank">
            <p class="pic" style="background:url(<?php echo $field['litpic']; ?>) no-repeat center center; background-size:cover; height:252px;"></p>
            <div class="mode">
              <p class="tm"><img class="n_t1" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ne_sj.svg"><span><?php echo MyDate('Y-m-d',$field['add_time']); ?></span></p>
              <p class="p1"><?php echo $field['title']; ?></p>
              <p class="fg"></p>
              <p class="p2"><?php echo html_msubstr($field['seo_description'],0,30,true); ?></p>
              <span class="ico"><img class="n_t2" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ne_mo.svg"><img class="n_t2_a" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ne_mo_a.svg"></span> </div>
            </a> </li>
         <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>   
        </ul>
      </div>
      <div class="pages">
        <ul>
           <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,pre,pageno,next,end", "2"); echo $__VALUE__; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="bottom  g_mt">
  <div class="g_cw">
    <div class="left">
      <ul class="list">
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li>
          <p><span><?php echo $field['typename']; ?></span></p>
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,4, true) : $field['children']->slice(0,4, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$mod = ($e % 2 );$i= intval($key) + 1;?>
          <p><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></p>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
        </li>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>    
      </ul>
    </div>
    <div class="right"> <img class="bo_wx" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>">
      <div class="hm">
        <p>全国热线：<span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></span></p>
        <p>联系地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?></p>
      </div>
    </div>
    
  </div>
  <div class="un">
      <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?> | <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?>  </p>
    </div>
</div>
   <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?>
  <!-- 应用插件标签 start -->
   <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
  <!-- 应用插件标签 end -->
</body>
</html>
