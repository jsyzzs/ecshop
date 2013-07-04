<?php if ($this->_var['new_goods']): ?>
<!-- Mr.HZ 2011-11-29 屏蔽无关JS脚本.
    <script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/prototype.js" type=text/javascript></SCRIPT>
    <script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/changimages.js" type=text/javascript></SCRIPT>
-->
<DIV class="recommendbox" align="center">
    <div class="tit">
    	<ul id="fadetab">
	    	<li class="current"><a>猜你喜欢</a></li>
	    	<li><a>团购</a></li>
	    	<li><a>品牌特卖</a></li>
    	</ul>
    </DIV>
    <DIV class="SwitchBigPic" id="fadecon">
    	<div class="sublist">
	        <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no1']['iteration']++;
?>
	
	        <?php if ($this->_foreach['no1']['iteration'] < 9): ?>
	        <dl class="recommend_goodsItem">
	            <dd class="recommend_goodsItem_image"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a>
	            </dd>
	            <dd class="recommend_goodsItem_name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></dd>
	            <dd class="recommend_goodsItem_price">
	             	<font class="recommend_goodsItem_integral"></font>
	                <font style="font-weight:bold">
	                    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
	                    <?php echo $this->_var['goods']['promote_price']; ?>
	                    <?php else: ?>
	                    <?php echo $this->_var['goods']['shop_price']; ?>
	                    <?php endif; ?>
	                </font>
	                <font class="recommend_goodsItem_integral">(销量:<?php echo $this->_var['goods']['give_integral']; ?>)</font>
	            </dd>
	        </dl>
	        <?php endif; ?>
	        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    	</div>
    	<div class="sublist">
	      <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no1']['iteration']++;
?>
		      <?php if ($this->_foreach['no1']['iteration'] < 9): ?>
		      <dl class="recommend_goodsItem">
		        <dd class="recommend_goodsItem_image"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></dd>
		        <dd class="recommend_goodsItem_name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></dd>
		        <dd class="recommend_goodsItem_price">
		          <font class="recommend_goodsItem_integral"></font>
		          <font style="font-weight:bold">
		            <?php if ($this->_var['goods']['promote_price'] != ""): ?>
		            <?php echo $this->_var['goods']['promote_price']; ?>
		            <?php else: ?>
		            <?php echo $this->_var['goods']['shop_price']; ?>
		            <?php endif; ?>
		          </font> 
		          
		        </dd>
		      </dl>
		      <?php endif; ?>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    	</div>
    	<div class="sublist">
	        <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no1']['iteration']++;
?>
	
	        <?php if ($this->_foreach['no1']['iteration'] < 9): ?>
	        <dl class="recommend_goodsItem">
	            <dd class="recommend_goodsItem_image"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a>
	            </dd>
	            <dd class="recommend_goodsItem_name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></dd>
	            <dd class="recommend_goodsItem_price">
	                <font style="font-weight:bold">
	                    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
	                    <?php echo $this->_var['goods']['promote_price']; ?>
	                    <?php else: ?>
	                    <?php echo $this->_var['goods']['shop_price']; ?>
	                    <?php endif; ?>
	                </font>
	                <font class="recommend_goodsItem_integral">(销量:<?php echo $this->_var['goods']['give_integral']; ?>)</font>
	            </dd>
	        </dl>
	        <?php endif; ?>
	        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    	</div>
    </DIV>
    <div style="clear:both"></div>
</DIV>
<?php endif; ?> 
