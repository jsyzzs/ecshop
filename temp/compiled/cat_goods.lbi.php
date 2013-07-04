<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="cat_goods"> 
    <div class="head cat-<?php echo $this->_var['goods_cat']['id']; ?>">
        <ul>
            <li class="name_img"><a href="<?php echo $this->_var['goods_cat']['url']; ?>"><img src="themes/quwan/images/cat/cat-<?php echo $this->_var['goods_cat']['id']; ?>.png"></a></li>
            <li class="cat_more"> <?php $_from = $this->_var['goods_cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?> <a
                href="category.php?id=<?php echo $this->_var['child']['cat_id']; ?>" target="_blank"><?php echo $this->_var['child']['cat_name']; ?></a>　|　 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </li>
            <li class="more" style="margin-right: 10px;line-height: 33px"><a href="<?php echo $this->_var['goods_cat']['url']; ?>">更多</a>
            </li>
        </ul>
    </div>
    
    <div class="cat_goods_box">
        <div class="clearfix goodsBox" style="border:none;">  <?php endif; ?>
            <div class="f_l">
                <div style="float:left"> <?php echo get_adv('cat_l',$GLOBALS['smarty']->_var['goods_cat']['id'])?></div>
            </div>
            
            <div class="f_r"> <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_61338000_1372749701');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_61338000_1372749701']):
?>
                <div class="goodsItem">
                    <dl> 
                        <dd class="image"><a href="<?php echo $this->_var['goods_0_61338000_1372749701']['url']; ?>"><img src="<?php echo $this->_var['goods_0_61338000_1372749701']['thumb']; ?>"
                                                                      alt="<?php echo htmlspecialchars($this->_var['goods_0_61338000_1372749701']['name']); ?>"/></a></dd>
                        
                        <dd class="name"><a href="<?php echo $this->_var['goods_0_61338000_1372749701']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_61338000_1372749701']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_61338000_1372749701']['short_name']); ?></a>
                        </dd>
                        
                        <dd class="price f1"> <font style="color:#999;font-size:12px">抢购价:</font><font style="font-weight:bold;font-size:12px"> <?php if ($this->_var['goods_0_61338000_1372749701']['promote_price'] != ""): ?>
                            <?php echo $this->_var['goods_0_61338000_1372749701']['promote_price']; ?> <?php else: ?> <?php echo $this->_var['goods_0_61338000_1372749701']['shop_price']; ?> <?php endif; ?> </font> 
                            </dd>
                    </dl>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
            <div class="f_A_d"> <?php echo get_adv_r('cat_r',$GLOBALS['smarty']->_var['goods_cat']['id'])?>
           
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>

<div class="blank"></div>