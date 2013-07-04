<div class="cat_articles new_article">
    <div style=" display: block; float:left; height:33px;line-height:0;font-size:0;">
        <ul class="news_nav" id="normaltab">
			<li id="newcut" class="current"><a>促销信息</a></li>
			<li><a>商城公告</a></li>
			<li><a>媒体聚焦</a></li>
		<ul>
    </div>
    <div class="boxCenterList newsBox tabcon "  id="normalcon">
     		<div class="news_b sublist">
	           <?php $_from = $this->_var['class_articles_10']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
	           		  <span style="width:209px;" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>">  <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo sub_str($this->_var['article']['short_title'],15); ?></a></span>
	           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	          
	        </div>
	        <div class="news_b sublist">
	            <?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['no']['iteration']++;
?>
	            <span style="width:209px;" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>">  <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo $this->_var['article']['short_title']; ?></a></span>
	            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	        </div>
	       
	        <div class="news_b sublist">
	            <?php $_from = $this->_var['class_articles_11']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
	            <span style="width:209px;" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>">  <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo $this->_var['article']['short_title']; ?></a></span>
	            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	            
	        </div>

    </div>
</div>

<a href="/goods-2802.html" target="_blank"><img src="themes/quwan/images/chanpintu_01.jpg" style="height: 104px;width:200px"></a>

<a href="/goods-2802.html" target="_blank"><img src="themes/quwan/images/chanpintu_02.jpg" style="height: 104px;width:200px"></a>

<a href="/goods-2802.html" target="_blank"><img src="themes/quwan/images/chanpintu_03.jpg" style="height: 97px;width:200px"></a>

<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.tabso_yeso.js"></script>

<script type="text/javascript">
$(document).ready(function($){
	
	//上下滑动选项卡切换
	$("#move-animate-top").tabso({
		cntSelect:"#topcon",
		tabEvent:"mouseover",
		tabStyle:"move-animate",
		direction : "top"
	});
	
	//左右滑动选项卡切换
	$("#move-animate-left").tabso({
		cntSelect:"#leftcon",
		tabEvent:"mouseover",
		tabStyle:"move-animate",
		direction : "left"
	});
	
	//淡隐淡现选项卡切换
	$("#fadetab").tabso({
		cntSelect:"#fadecon",
		tabEvent:"mouseover",
		tabStyle:"fade"
	});
	
	//默认选项卡切换
	$("#normaltab").tabso({
		cntSelect:"#normalcon",
		tabEvent:"mouseover",
		tabStyle:"normal"
	});
	
});
</script>