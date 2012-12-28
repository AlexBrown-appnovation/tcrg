<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<form name="login_forum" method="post" action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>">

<table width="100%" cellspacing="1" align="center">
<tr class="toplines">
	<th colspan="2"><?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?></th>
</tr>
<tr> 
	<td><h2><?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?></h2></td>
</tr>
<tr>
	<td class="row3 txtmiddle"><?php echo ((isset($this->_rootref['L_LOGIN_FORUM'])) ? $this->_rootref['L_LOGIN_FORUM'] : ((isset($user->lang['LOGIN_FORUM'])) ? $user->lang['LOGIN_FORUM'] : '{ LOGIN_FORUM }')); ?></td>
</tr>
<tr> 
	<td class="row1 txtmiddle">
	
		<table cellspacing="1" border="0">
		<?php if ($this->_rootref['LOGIN_ERROR']) {  ?>

			<tr>
				<td class="pad4"><?php echo (isset($this->_rootref['LOGIN_ERROR'])) ? $this->_rootref['LOGIN_ERROR'] : ''; ?></td>
			</tr>
		<?php } ?>

		<tr>
			<td class="pad4"><b><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</b> <input class="post" type="password" name="password" size="25" tabindex="2" /></td>
		</tr>
		</table>
	</td>
</tr>
<tr> 
	<td class="row3 pad4 txtcenter" colspan="2"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" name="login" class="button" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" tabindex="3" /></td>
</tr>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>

<div class="spacing"></div>

<?php $this->_tpl_include('breadcrumbs.html'); ?>


<div class="spacing"></div>

<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>

<?php $this->_tpl_include('overall_footer.html'); ?>