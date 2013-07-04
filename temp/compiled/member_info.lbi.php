<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
<font style=" font-size:12px;">
<?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a> |
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a> |
</font>
<?php else: ?>
<span>您好！欢迎来到酒多商城！</span><a  href="user.php">[请登录]</a><a >，新用户？</a><a class="f1" href="user.php?act=register">[免费注册]</a>
<?php endif; ?>