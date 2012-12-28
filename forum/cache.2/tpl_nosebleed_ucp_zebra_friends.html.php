<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<table class="viewforum" width="100%" cellspacing="1">
<tr>
	<th colspan="2" valign="middle"><h2><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h2></th>
</tr>
<tr>
	<td class="row3 pad4" colspan="2"><?php echo ((isset($this->_rootref['L_FRIENDS_EXPLAIN'])) ? $this->_rootref['L_FRIENDS_EXPLAIN'] : ((isset($user->lang['FRIENDS_EXPLAIN'])) ? $user->lang['FRIENDS_EXPLAIN'] : '{ FRIENDS_EXPLAIN }')); ?></td>
</tr>
<?php if ($this->_rootref['ERROR']) {  ?>

	<tr>
		<td class="row3 pad60 txtmiddle" colspan="2"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></td>
	</tr>
<?php } ?>

<tr>
	<td class="row1 pad4" width="40%"><b><?php echo ((isset($this->_rootref['L_YOUR_FRIENDS'])) ? $this->_rootref['L_YOUR_FRIENDS'] : ((isset($user->lang['YOUR_FRIENDS'])) ? $user->lang['YOUR_FRIENDS'] : '{ YOUR_FRIENDS }')); ?>:</b><br /><?php echo ((isset($this->_rootref['L_YOUR_FRIENDS_EXPLAIN'])) ? $this->_rootref['L_YOUR_FRIENDS_EXPLAIN'] : ((isset($user->lang['YOUR_FRIENDS_EXPLAIN'])) ? $user->lang['YOUR_FRIENDS_EXPLAIN'] : '{ YOUR_FRIENDS_EXPLAIN }')); ?></td>
	<td class="row2 pad4 txtcenter"><?php if ($this->_rootref['S_USERNAME_OPTIONS']) {  ?><select name="usernames[]" multiple="multiple" size="5"><?php echo (isset($this->_rootref['S_USERNAME_OPTIONS'])) ? $this->_rootref['S_USERNAME_OPTIONS'] : ''; ?></select><?php } else { ?><b><?php echo ((isset($this->_rootref['L_NO_FRIENDS'])) ? $this->_rootref['L_NO_FRIENDS'] : ((isset($user->lang['NO_FRIENDS'])) ? $user->lang['NO_FRIENDS'] : '{ NO_FRIENDS }')); ?></b><?php } ?></td>
</tr>
<tr>
	<td class="row1 pad4"><b><?php echo ((isset($this->_rootref['L_ADD_FRIENDS'])) ? $this->_rootref['L_ADD_FRIENDS'] : ((isset($user->lang['ADD_FRIENDS'])) ? $user->lang['ADD_FRIENDS'] : '{ ADD_FRIENDS }')); ?>:</b><br /><?php echo ((isset($this->_rootref['L_ADD_FRIENDS_EXPLAIN'])) ? $this->_rootref['L_ADD_FRIENDS_EXPLAIN'] : ((isset($user->lang['ADD_FRIENDS_EXPLAIN'])) ? $user->lang['ADD_FRIENDS_EXPLAIN'] : '{ ADD_FRIENDS_EXPLAIN }')); ?> [ <a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a> ]</td>
	<td class="row2 pad4 txtcenter"><textarea class="post" name="add" rows="5" cols="30"><?php echo (isset($this->_rootref['USERNAMES'])) ? $this->_rootref['USERNAMES'] : ''; ?></textarea><br /></td>
</tr>
<tr>
	<td class="row3 txtcenter pad4" colspan="2"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input class="button" type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;&nbsp;<input class="button" type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" /></td>
</tr>
</table>

<?php $this->_tpl_include('ucp_footer.html'); ?>