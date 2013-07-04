

<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
<div class="box_1" style="padding:10px 15px">
    <?php if ($this->_var['brands']['1']): ?>
    <div class="screeBox clearfix">
        <ul>
        <li class="caption"><?php echo $this->_var['lang']['brand']; ?>：</li>
        <li class="items">
            <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
            <?php if ($this->_var['brand']['selected']): ?>
            <span class="selected"><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></span>
            <?php else: ?>
            <span class="unselect"><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></span>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </li>
       </ul>
    </div>
    <?php endif; ?>
    <?php if ($this->_var['price_grade']['1']): ?>
    <div class="screeBox clearfix">
        <ul>
            <li class="caption"><?php echo $this->_var['lang']['price']; ?>：</li>
            <li class="items">
                 <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
                <?php if ($this->_var['grade']['selected']): ?>
                <span class="selected"><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></span>
                <?php else: ?>
                <span class="unselect"><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></span>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </li>
        </ul>
    </div>
    <?php endif; ?>
    <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_83692000_1372750254');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_83692000_1372750254']):
?>
    <div class="screeBox clearfix">
        <ul>
            <li class="caption"><?php echo htmlspecialchars($this->_var['filter_attr_0_83692000_1372750254']['filter_attr_name']); ?>：</li>
            <li class="items">
                <?php $_from = $this->_var['filter_attr_0_83692000_1372750254']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
                <?php if ($this->_var['attr']['selected']): ?>
                <span class="selected"><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></span>
                <?php else: ?>
                <span class="selected"><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></span>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </li>
        </ul>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<div class="blank"></div>

<?php endif; ?>
