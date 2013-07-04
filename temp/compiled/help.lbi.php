<?php echo $this->_var['help_cat']['cat_name']; ?>
<?php if ($this->_var['helps']): ?>
<div id="helpbox">
        <div class="helpTitBg">
            <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
            <dl>
                <dt><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><img style="vertical-align:middle"
                                                                                   src="themes/quwan/images/help_cat_<?php echo $this->_foreach['no']['iteration']; ?>.gif"></a>
                </dt>
                <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <dd><img src="themes/quwan/images/help_listdisc.gif" style="vertical-align: bottom;margin-right: 5px"><a href="<?php echo $this->_var['item']['url']; ?>"
                                                                          title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a>
                </dd>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dl>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <div style="float:left;;width:10px"><img src="themes/quwan/images/help_line2.gif"></div>
        <div style="float:right;;width:245px;padding-top:15px">
            <span style="float: left"><img src="themes/quwan/images/help_tel.gif"></span>
            <span style="padding:5px 0 0 15px;float: left"><a href="http://www.9duo.com" title="酒多网官方网站"
                                                               target="_blank">点击进入：www.9duo.com</a></span></div>
    <div style="clear: both"></div>
</div>

<?php endif; ?>