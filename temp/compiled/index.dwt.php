<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="baidu-site-verification" content="KKPaSZY2gT" />
<meta name="google-site-verification" content="fYz7t5fIhCO170a5Zc3egqm_eqFum8aJ_WjKaVmuvwA" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/left_goodslist.js"></script>

<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onmousemove=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="block clearfix"> 
  


<div style="float:left; width:1024px;">
<?php echo $this->fetch('library/index_ad.lbi'); ?>



  
<?php echo $this->fetch('library/recommend_new.lbi'); ?>

<div class="blank"></div>

 </div>


<div style="float:right; width:201px; overflow:hidden">

<div class="cat_articles new_article">
<div class="ttt">

<?php $this->assign('ads_id','7'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>



</div>
</div>




<?php echo $this->fetch('library/new_articles.lbi'); ?>






<?php $this->assign('ads_id','8'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </div>




<div class="f_l blank_no">


</div>

<div class="f_l blank_no" style=" padding-left:15px">


</div>

<div class="f_r blank_no">


</div>



<?php $this->assign('ads_id','15'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>


<div class="box cat_goods">
<div style=" clear:both"></div>



<?php $this->assign('cat_goods',$this->_var['cat_goods_15']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_15']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_16']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_16']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_17']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_17']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>





<?php $this->assign('ads_id','16'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>


    




</div>
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/links.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'my_lefttime.js')); ?>

</body>
</html>
