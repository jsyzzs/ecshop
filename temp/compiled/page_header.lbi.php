<script type="text/javascript">
    var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>


<?php
	require_once("themes/quwan/util.php");
?>


<div class="header_bg">
    <div id="tophot">
        <div class="f_r log" style="width:1225px">
            <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
            <ul>
                <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </ul>
                 
            <div style="float:right">
           
                <ul class="ul1" onmouseover="this.className='ul1 ul1_on'" onmouseout="this.className='ul1'"><a class="a1" href="user.php">我的酒多</a>
                    <div class="ul1_float">
                        <a target="_blank" href="user.php">我的账户</a>
                        <a href="user.php?act=order_list">我的订单</a>
                        <a href="user.php?act=message_list">我的留言</a>
                        <a href="user.php?act=collection_list">我的收藏</a>
                        <a href="user.php?act=affiliate">我的推荐</a>
                    </div>
                </ul>
                <ul>| <a style=" color:#afaaaa">客服电话：400-151-9999</a></ul>
                <?php if ($this->_var['navigator_list']['top']): ?>
                <ul>
                    <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
                    | <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>
                    ><?php echo $this->_var['nav']['name']; ?></a>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php endif; ?>
                	<ul>| <img  src="themes/quwan/images/LOGO_24x24.png" width="18" height="18" alt="新浪微博"/><a href="http://e.weibo.com/9duo?type=0" target="_blank">关注我们</a></ul>
            </div>
        </div>

    </div>
    <div style=" width:1225px; position:relative">
        <div class="f_l" style="padding-top:0px;">
            <div id="logo"><a href="index.php" name="top"><img style="float:left;" src="themes/quwan/images/logo.png"/></a></div>
             <script type="text/javascript">
		        
		        <!--
		        function checkSearchForm()
		        {
		            if(document.getElementById('keyword').value)
		            {
		                return true;
		            }
		            else
		            {
		               alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
		                return false;
		            }
		        }
		        -->
	        
	        </script>
              <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_l">
	            <div class="searchbox">
	                <div style="float:left;border:1px solid #48413f;background:url(themes/quwan/images/biao1.gif) 3px center no-repeat #fff;margin-right:0px;width:386px;height:36px">
			            <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" class="B_input"
	                   style="width:366px;_width:340px;padding-left: 20px; float:left; background:none; border:none; vertical-align:middle; height:36px; line-height:36px;color:#999"/>
	                   </div>
	                   <input name="imageField" type="submit" value="" class="go" style="cursor:pointer; float:left"/>
	                   
	             
            </div>
            	</form>  
        </div>
        <div class="top_link">
        	<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
          <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            <!--
                    <a style="padding:0; margin:0; width:90px"><img  src="themes/quwan/images/moshi.jpg" /></a>
            -->
        </div>
    </div>
</div>


<div id="mainNav" class="clearfix">
    <div style="width:1225px;background:#4b4443;height:100%; ">
    	<ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"
        <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> id="cur"<?php endif; ?> >
        	<a class="a2 home_a" href="index.php">
          		全部商品列表 
	        </a>
	        <table cellpadding='0' border='0' cellspacing='0px' class='sub_nav' style="width:226px;float:left;left:0">
	          <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
	           	<tr class="sub_tr">
	                <td valign='top'>
	                    <div style=' width:210px; padding-left:1px;'><a  <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>  href="<?php echo $this->_var['nav']['url']; ?>" style="color:#fff"><?php echo $this->_var['nav']['name']; ?></a>
	                    </div>
	                    <?php
	                    	    $subcates = get_subcate_byurl($GLOBALS['smarty']->_var['nav']['url']);
	                    	    if($subcates!=false){
							        if(count($subcates)>0){
							        	if($subcates){
							                foreach($subcates as $key=>$cate){
							               
							                	if($key<6){
							               
								                	echo "<span><a href='".$cate['url']."' >".$cate['name']."</a></span>";
							                	}
							                	
							                }
							            }
							        	
							        }
						        }
	                   ?>
	                   
	                </td>
                </tr>
	          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
             </table>
        </ul>
        
        <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>       
        <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'"
        <?php if ($this->_var['nav']['active'] == 1): ?> id="cur" <?php endif; ?> >

        <a class="a1" href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>>
        <img class="ul_l" src="themes/quwan/images/ul_bg_l.gif"> <img class="ul_r" src="themes/quwan/images/ul_bg_r.gif">
        <?php echo $this->_var['nav']['name']; ?>

        <img class="dot_l" src="themes/quwan/images/dot.gif">
        <img class="dot_r" src="themes/quwan/images/dot.gif">
        </a>
        </ul>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <ul  class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" ><a class="a1" href="/phytop.php">扫一扫</a></ul>
    </div>
</div>



   



