<!--
    删除页脚客户电话、IM联系方式显示代码，2011-11-24，Mr.HZ。
-->


<script type="text/javascript">
    if (Object.prototype.toJSONString) {
        var oldToJSONString = Object.toJSONString;
        Object.prototype.toJSONString = function() {
            if (arguments.length > 0) {
                return false;
            } else {
                return oldToJSONString.apply(this, arguments);
            }
        }
    }
</script>
<div class="blank"></div>
     
<div class="footer_box">
    
    
  
     <?php if ($this->_var['navigator_list']['bottom']): ?>
    <div class="blank"></div>
    <div class="block">
        <div class="bNavList">
            <div style="float: left;width:800px;">

                <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_62358800_1372749701');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_62358800_1372749701']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
                <a href="<?php echo $this->_var['nav_0_62358800_1372749701']['url']; ?>" <?php if ($this->_var['nav_0_62358800_1372749701']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_62358800_1372749701']['name']; ?></a>
                <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
                <span style="color:#C54546"> |</span>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            </div>
            <div style="float: right;width: 80px;text-align: right;line-height: 0;font-size: 0px">
                <a href="#top"><img src="themes/quwan/images/footer_top.gif"></a>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <?php else: ?>
    <div style="background-color: #AE0001;height:5px;font-size: 0;margin: 2px auto;width: 1225px;"></div>
    <?php endif; ?>
    

    <div class="blank"></div>
    
    <div id="footer">
        <div class="text">
            <?php echo $this->_var['copyright']; ?>　<?php echo $this->_var['shop_address']; ?>　<?php echo $this->_var['shop_postcode']; ?>
            <?php if ($this->_var['icp_number']): ?>
            <?php echo $this->_var['lang']['icp_number']; ?>：<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>　
            <?php endif; ?>
        </div>
         <script src="http://s95.cnzz.com/stat.php?id=5341938&web_id=5341938&show=pic2" language="JavaScript">
    </div>
   
<div class="blank"></div>
</div>
