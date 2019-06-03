<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:23:"./template/pc/index.htm";i:1559360260;s:44:"D:\xampp\htdocs\runde\template\pc\header.htm";i:1559272803;s:44:"D:\xampp\htdocs\runde\template\pc\footer.htm";i:1559357051;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></title>
<meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_description"); echo $__VALUE__; ?>" />
<meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_keywords"); echo $__VALUE__; ?>" />
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
/*core*/

.core {
}
.core .co_bj {
	padding: 18px;
	background: #0a64be;
	overflow: hidden;
	display: inline-block;
	width: 100%;
}
.core .co_title {
	padding: 10px;
	display: inline-block;
	vertical-align: top;
	width: 20%;
	float: left;
}
.core .co_title p {
	color: #fff;
}
.core .co_title span {
	display: block;
}
.core .co_title .p1 {
	padding-bottom: 15px;
	font-size: 27px;
	font-weight: bold;
}
.core .co_title .on_a {
	display: none;
}
.core .co_title .p2 {
	padding-bottom: 30px;
	font-size: 18px;
	font-weight: lighter;
}
.core .co_title a {
	padding: 6px 8px;
	border: solid #fff 1px;
	color: #fff;
}
.core .co_title em {
	padding: 0 5px;
	font-size: 10px;
}
.core .co_list {
	padding: 20px 0;
	background: #fff;
	display: inline-block;
	height: 170px;
	width: 80%;
}
.core .co_list .list {
	width: 100%;
}
.core .co_list .list li {
	text-align: center;
	width: 25%;
	border-right: solid #cfd2dc 1px;
}
.core .co_list .list li > a .bk {
	margin-bottom: 10px;
	height: 80px;
	width: 80px;
	line-height: 70px;
	border: solid #0a64be 3px;
	border-radius: 50px;
	display: inline-block;
}
.core .co_list .list li > a .bk .co_tb {
	vertical-align: middle;
}
.core .co_list .list li > a p {
	font-size: 10px;
}
.core .co_list .list li > a span {
	margin: 3px 0;
	display: block;
	font-size: 16px;
	color: #000;
}
 @media (max-width: 1024px) {
.core .co_bj {
	padding: 18px 10px;
}
.core .co_title {
	padding: 0;
	width: 100%;
}
.core .co_title .p1 {
	display: inline-block;
}
.core .co_title span {
	padding-left: 10px;
	display: inline-block;
}
.core .co_title .on_a {
	display: inline-block;
	float: right;
}
.core .co_title .on_b {
	display: none;
}
.core .co_list {
	width: 100%;
}
}
 @media (max-width: 667px) {
.core .co_list {
	overflow: hidden;
	height: auto;
}
.core .co_list .list li {
	margin-bottom: 20px;
	width: 50%;
}
}
 @media (max-width: 400px) {
.core .co_title span {
	padding-left: 0;
	display: block;
}
}
 @media (max-width: 380px) {
.core .co_list .list li {
	width: 100%;
	border-right: none;
}
}
/*display*/

.display {
}
.display .display_list {
	margin-left: -10px;
}
.display .display_list .list {
	width: 100%;
}
.display .display_list .list li {
	padding-left: 10px;
}
.display .display_list .list .ls1 {
	width: 27%;
}
.display .display_list .list .ls1 .dp_title {
	padding: 15px 50px;
	background: #eaeaea;
	display: block;
}
.display .display_list .list .ls1 .dp_title p {
	color: #0c2d63;
	font-weight: lighter;
}
.display .display_list .list .ls1 .dp_title .p1 {
	margin-bottom: 20px;
	font-size: 30px;
}
.display .display_list .list .ls1 .dp_title .p2 {
	font-size: 16px;
}
.display .display_list .list .ls1 .dp_title .fg {
	margin: 35px 0;
	border-bottom: solid #7d7e81 1px;
	width: 85px;
}
.display .display_list .list .ls1 .dp_title span {
	margin-bottom: 6px;
	display: block;
	font-size: 12px;
	color: #7d7e81;
}
.display .display_list .list .ls2 {
	width: 36.5%;
	text-align: center;
}
.display .display_list .list .ls2 .sp {
	width: 100%;
}
.display .display_list .list .ls2 a {
	position: relative;
	width: 100%;
	display: inline-block;
}
.display .display_list .list .ls2 .mode {
	position: absolute;
	top: 33%;
	left: 0;
	right: 0;
}
.display .display_list .list .ls2 .mode p {
	margin-top: 80px;
    font-size: 18px;
    color: #7d7e81;
}
 @media (max-width: 1024px) {
.display .display_list .list .ls1 .dp_title {
	padding: 20px 10px;
}
.display .display_list .list .ls1 {
	margin-bottom: 10px;
	width: 100%;
}
.display .display_list .list .ls1 .dp_title .fg {
	margin: 15px 0;
	display: block;
}
.display .display_list .list .ls1 .dp_title span {
	display: inline-block;
}
.display .display_list .list .ls2 {
	width: 50%;
}
}
 @media (max-width: 667px) {
.display .display_list .list .ls2 {
	margin-top: 20px;
	width: 100%;
}
.display .display_list .list .ls2 .mode {
	top: 40%;
}
}
 @media (max-width: 470px) {
.display .display_list .list .ls2 .mode {
	top: 35%;
}
}
/*about*/

.about {
	padding: 45px 0;
	background: #f7f7f7;
	display: block;
}
.about .left {
	float: left;
	display: inline-block;
	width: 67%;
	overflow: hidden;
	background: #fff;
}
.about .left .lt {
	float: left;
	width: 50%;
	font-size: 0;
}
.about .left .lt .a_ct1 {
	width: 100%;
}
.about .left .rt {
	padding: 30px 30px 0 30px;
	width: 50%;
	display: inline-block;
}
.about .left .rt .ab_t1 {
	margin-right: 20px;
	float: left;
}
.about .left .rt .title {
	padding: 10px 0;
}
.about .left .rt .title .p1 {
	margin-bottom: 5px;
	font-size: 18px;
	color: #0a64be;
}
.about .left .rt .title .p2 {
	font-size: 14px;
	color: #a4acbf;
}
.about .left .rt .title .no_a {
	display: none;
}
.about .left .rt .mode .p1 {
	line-height: 30px;
	color: #7d8287;
	overflow: hidden;
	height: 10.5em;
}
.about .left .rt a {
	margin-top: 30px;
	vertical-align: middle;
	font-size: 12px;
	color: #7d8287;
	display: inline-block;
}
.about .left .rt .gd {
	vertical-align: middle;
	width: 30px;
}
.about .left .rt .mo {
	margin-right: 5px;
	display: inline-block;
	vertical-align: middle;
}
.about .right {
	padding: 26px 26px 13px 26px;
	width: 31%;
	display: inline-block;
	float: right;
	background: #80c02e;
}
.about .right .ab_t1 {
	margin-right: 20px;
	float: left;
}
.about .right .title {
	padding: 10px 0;
}
.about .right .title .p1 {
	margin-bottom: 5px;
	font-size: 18px;
	color: #fff;
}
.about .right .title .p2 {
	font-size: 14px;
	color: #fff;
}
.about .right .title .no_a {
	display: none;
}
.about .right .fg {
	margin: 25px 0;
	border: solid rgba(255,255,255,0.6) 0.5px;
	width: 100%;
	display: inline-block;
}
.about .right .a_ct2 {
	margin: 0 auto;
	display: block;
}
.about .right a {
	margin-top: 30px;
	vertical-align: middle;
	font-size: 12px;
	color: #fff;
	display: inline-block;
}
.about .right .gd {
	vertical-align: middle;
	width: 30px;
}
.about .right .mo {
	margin-right: 5px;
	display: inline-block;
	vertical-align: middle;
}
.about .right .ry_list {
	display: none;
}
 @media (max-width: 1024px) {
.about .left {
	margin-bottom: 20px;
	width: 100%;
}
.about .left .rt {
	padding: 50px 10px 0 30px;
}
.about .left .rt a {
	margin-top: 50px;
}
.about .left .rt .title .p1 {
	display: inline-block;
}
.about .left .rt .title .no_a {
	margin-top: 0;
	display: inline-block;
	float: right;
}
.about .left .rt .no_b {
	display: none;
}
.about .right {
	padding: 30px 10px;
	width: 100%;
}
.about .right .title .p1 {
	display: inline-block;
}
.about .right .title .no_a {
	margin-top: 0;
	display: inline-block;
	float: right;
}
.about .right .no_b {
	display: none;
}
.about .right .a_ct2 {
	display: none;
}
.about .right .ry_list {
	display: block;
    text-align: center;
    margin: 0 auto;
}
.about .right .ry_list .list li {
	padding-left: 10px;
	width: 33%;
	text-align: center;
}
}
 @media (max-width: 780px) {
.about {
	padding: 10px 0;
}
.about .left .lt {
	float: none;
	width: 100%;
}
.about .left .rt {
	padding: 50px 10px;
	width: 100%;
}
}
 @media (max-width: 667px) {
.about .right .ry_list .list li {
	margin-bottom: 10px;
	width: 50%;
}
}
 @media (max-width: 480px) {
.about .right .ry_list .list li {
	margin-bottom: 10px;
	width: 100%;
}
}
 @media (max-width: 400px) {
.about .left .rt .title .no_a {
	display: none;
}
.about .left .rt .no_b {
	display: inline-block;
}
}
/*news*/
.news {
}
.news .news_bk {
}
.news .news_bk .left {
	padding: 30px 30px 62px 30px;
	float: left;
	background: #0a64be;
	width: 31%;
}
.news .news_bk .left .title {
}
.news .news_bk .left .title .p1 {
	font-size: 18px;
	color: #fff;
	float: left;
}
.news .news_bk .left .title a {
	font-size: 12px;
	color: #52a3f4;
	float: right;
}
.news .news_bk .left .mode {
	margin-top: 41px;
	display: inline-block;
}
.news .news_bk .left .mode .tp .p1 {
	font-size: 16px;
	color: #fff;
	overflow: hidden;
	height: 1.5em;
}
.news .news_bk .left .mode .tp .p2 {
	margin-top: 15px;
	display: inline-block;
	font-size: 12px;
	color: #CCC;
}
.news .news_bk .left .mode .fg {
	border-style: dotted;
}
.news .news_bk .left .mode .bo .p1 {
	font-size: 16px;
	color: #fff;
	overflow: hidden;
	height: 1.5em;
}
.news .news_bk .left .mode .bo .p2 {
	margin-top: 15px;
	display: inline-block;
	font-size: 12px;
	color: #CCC;
}
.news .news_bk .left ul li:nth-child(2) .fg {
	display: none;
}
.news .news_bk .two {
	display: none;
}
.news .news_bk .right {
	float: right;
	width: 67%;
	background: #f6f7f9;
}
.news .news_bk .right .lt {
	float: left;
	width: 50%;
	font-size: 0;
	overflow: hidden;
}
.news .news_bk .right .lt .pic {
	max-height: 317px;
}
.news .news_bk .right .rt {
	padding: 30px 30px 0 30px;
	width: 50%;
	display: inline-block;
}
.news .news_bk .right .rt .title .p1 {
	font-size: 18px;
	color: #0a64be;
	float: left;
}
.news .news_bk .right .rt .title a {
	font-size: 12px;
	color: #b2bec9;
	float: right;
}
.news .news_bk .right .rt .mode {
	margin-top: 41px;
	display: inline-block;
}
.news .news_bk .right .rt .mode p {
	color: #bababe;
}
.news .news_bk .right .rt .mode .p1 {
	font-size: 16px;
	color: #55565e;
}
.news .news_bk .right .rt .mode .p2 {
	margin-top: 15px;
	font-size: 12px;
	color: #bababe;
	display: block;
}
.news .news_bk .right .rt .mode .p3 {
	overflow: hidden;
	overflow: hidden;
	height: 3.5em;
	line-height: 24px;
}
.news .news_bk .right .rt .mode .fg {
	width: 40px;
	border-width: 1px;
}
._slick3 .slick-dots li button {
	background: #0a64be;
	opacity: 1;
	font-size: initial;
	transform: scale(.7);
}
._slick3 .slick-dots li.slick-active button {
	width: 10px;
	background: transparent;
	border: solid #0a64be 1px;
	transform: scale(.7);
}
._slick3 .slick-dots {
	right: -60px;
}
@media (max-width: 1024px) {
.news .news_bk .one {
	display: none;
}
.news .news_bk .two {
	display: block;
}
.news .news_bk .two .right {
	background: none;
}
.news .news_bk .two .right ul li {
	background: #f6f7f9;
}
.news .news_bk .two ul li {
	margin-bottom: 20px;
	display: inline-block;
}
.news .news_bk .left {
	margin-bottom: 20px;
	padding: 30px 10px;
	width: 100%;
}
.news .news_bk .left .mode {
	display: block;
}
.news .news_bk .left .mode .tp span {
	margin-top: 0;
	float: right;
}
.news .news_bk .left .mode .bo span {
	margin-top: 0;
	float: right;
}
.news .news_bk .right {
	width: 100%;
}
}
 @media (max-width: 780px) {
.news .news_bk .right .lt {
	width: 100%;
}
.news .news_bk .right .rt {
	padding: 30px 10px;
	width: 100%;
}
.news .news_bk .two .right ul li .lt .pic {
	max-height: none;
	max-width: 100%;
}
}
 @media (max-width: 480px) {
.news .news_bk .left .mode .tp span {
	margin-top: 20px;
	float: none;
	display: block;
}
.news .news_bk .left .mode .bo span {
	margin-top: 20px;
	float: none;
	display: block;
}
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
<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
<div class="core clearfix">
  <div class=" g_cw g_mt g_mb">
    <div class="co_bj">
      <div class="co_title">
        <p class="p1"><?php  $__VALUE__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__VALUE__; ?></p>
        <a class="on_a" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">查看更多<em> > </em></a>
        <p class="p2"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></p>
        <a class="on_b" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">查看更多<em> > </em></a> </div>
      <div class="co_list">
        <ul class="list">
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
          <li> <a href="<?php echo $field['typeurl']; ?>">
            <div class="bk"> <img class="co_tb" src="<?php echo $field['litpic']; ?>"> </div>
            <p> <span><?php echo $field['typename']; ?></span> <?php echo $field['englist_name']; ?> </p>
            </a> </li>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> 
        </ul>
      </div>
    </div>
  </div>
</div>
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "4"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
<div class="display clearfix">
  <div class="g_cw g_mt g_mb">
    <div class="display_list">
      <ul class="list">
        <li class="ls1">
          <div class="dp_title">
            <p class="p1"><?php  $__VALUE__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__VALUE__; ?></p>
            <p class="p2"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></p>
            <p class="fg"></p>
            <span><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在";$__VALUE__ = html_msubstr($__VALUE__, 0, 60, true); echo $__VALUE__; ?></span></div>
        </li>
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 2; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $channeltype, ); $tag = array (
  'orderby' => 'now',
  'row' => '2',
  'flag' => 'c',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "now", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li class="ls2"> <a href="<?php echo $field['arcurl']; ?>"> <img class="sp" src="<?php echo $field['litpic']; ?>">
          <div class="mode"> <img class="" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/tj.svg">
            <p><?php echo $field['title']; ?></p>
          </div>
          </a> </li>
       <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> 
      </ul>
    </div>
  </div>
</div>
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> 
<div class="about g_mt g_mb clearfix">
  <div class="g_cw">
    <div class="">
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "24"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <div class="left">
        <div class="lt"> <img class="a_ct1" src="<?php  $__VALUE__ = isset($channelartlist["litpic"]) ? $channelartlist["litpic"] : "变量名不存在"; echo $__VALUE__; ?>"> </div>
        <div class="rt"> <img class="ab_t1" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ab_ml.svg">
          <div class="title">
            <p class="p1"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></p>
            <a class="no_a" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">
            <p class="mo">了解更多</p>
            <img class="gd" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ck_gd.svg"></a>
            <p class="p2"><?php  $__VALUE__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__VALUE__; ?></p>
          </div>
          <p class="fg"></p>
          <div class="mode">
            <p class="p1 "> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", "single_content"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?><?php echo html_msubstr($field['content'],0,105); ?>...<?php endif; else: echo htmlspecialchars_decode("");endif; ?></p>
          </div>
          <a class="no_b" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">
          <p class="mo">了解更多</p>
          <img class="gd" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ck_gd.svg"></a> </div>
      </div>
     <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "26"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <div class="right"> <img class="ab_t1 g_imgf" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ab_ry.svg">
        <div class="title">
          <p class="p1"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></p>
          <a class="no_a" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">
          <p class="mo">了解更多</p>
          <img class="gd" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ck_gd_a.svg"></a>
          <p class="p2"><?php  $__VALUE__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__VALUE__; ?></p>
        </div>
        <p class="fg"></p>
        <img class="a_ct2 g_imgf" src="<?php  $__VALUE__ = isset($channelartlist["litpic"]) ? $channelartlist["litpic"] : "变量名不存在"; echo $__VALUE__; ?>"> <a class="no_b" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">
        <p class="mo">了解更多</p>
        <img class="gd" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ck_gd_a.svg"></a>
        <div class="ry_list">
          <img class=" g_imgf" src="<?php  $__VALUE__ = isset($channelartlist["litpic"]) ? $channelartlist["litpic"] : "变量名不存在"; echo $__VALUE__; ?>">
        </div>
      </div>
     <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>  
    </div>
  </div>
</div>
<div class="news clearfix">
  <div class="g_cw g_mt g_mb">
    <div class="news_bk">
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "11"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <div class="left">
        <div class="title">
          <p class="p1">- <?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></p>
          <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">了解更多...</a> </div>
        <div class="mode">
          <ul>
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 2; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tag = array (
  'orderby' => 'now',
  'row' => '2',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "now", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li> <a href="<?php echo $field['arcurl']; ?>" target="_blank">
              <div class="tp">
                <p class="p1"><?php echo $field['title']; ?></p>
                <p class="p2"><?php echo MyDate('Y-m-d',$field['add_time']); ?></p>
              </div>
              </a>
              <div class="fg"></div>
            </li>
          <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>   
          </ul>
        </div>
      </div>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>  
      <div class="one">
        <div class="right">
          <ul>
            <div class="_slick3" style="margin:0 auto; width:100%;">
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "9"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tag = array (
  'orderby' => 'now',
  'row' => '3',
  'typeid' => '9',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "now", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
              <li>
                <div class="lt"> <img class=" pic" src="<?php echo $field['litpic']; ?>"> </div>
                <div class="rt">
                  <div class="title">
                    <p class="p1">- <?php echo $field['typename']; ?></p>
                    <a href="<?php echo $field['typeurl']; ?>">了解更多...</a> </div>
                  <div class="mode"> <a href="<?php echo $field['arcurl']; ?>" target="_blank">
                    <p class="p1"><?php echo $field['title']; ?></p>
                    <p class="p2"><?php echo MyDate('Y-m-d',$field['add_time']); ?></p>
                    <div class="fg"></div>
                    <p class="p3"><?php echo html_msubstr($field['seo_description'],0,60,true); ?></p>
                    </a> </div>
                </div>
              </li>
             <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>   
            </div>
          </ul>
        </div>
        <script>
						$('._slick3').slick({ arrows: false, dots: true, slidesToShow: 1, slidesToScroll: 1, autoplay: false, autoplaySpeed: 5000, speed: 500 });
					</script> 
      </div>
      <div class="two">
        <div class="right">
          <ul>
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "9"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tag = array (
  'orderby' => 'now',
  'row' => '3',
  'typeid' => '9',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "now", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
              <li>
                <div class="lt"> <img class=" pic" src="<?php echo $field['litpic']; ?>"> </div>
                <div class="rt">
                  <div class="title">
                    <p class="p1">- <?php echo $field['typename']; ?></p>
                    <a href="<?php echo $field['typeurl']; ?>">了解更多...</a> </div>
                  <div class="mode"> <a href="<?php echo $field['arcurl']; ?>" target="_blank">
                    <p class="p1"><?php echo $field['title']; ?></p>
                    <p class="p2"><?php echo MyDate('Y-m-d',$field['add_time']); ?></p>
                    <div class="fg"></div>
                    <p class="p3"><?php echo html_msubstr($field['seo_description'],0,60,true); ?></p>
                    </a> </div>
                </div>
              </li>
             <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>   
          </ul>
        </div>
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
