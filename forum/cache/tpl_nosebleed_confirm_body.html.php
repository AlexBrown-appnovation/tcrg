<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<form name="confirm" action="<?php echo (isset($this->_rootref['S_CONFIRM_ACTION'])) ? $this->_rootref['S_CONFIRM_ACTION'] : ''; ?>" method="post">

<table width="100%" cellspacing="1">
<tr class="toplines">
	<th><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></th>
</tr>
<tr>
	<td><h2><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></h2></td>
</tr>
	<tr>
	<td class="row1 txtmiddle pad60"><br /><p><?php echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?></p><br /><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" name="confirm" value="<?php echo (isset($this->_rootref['YES_VALUE'])) ? $this->_rootref['YES_VALUE'] : ''; ?>" class="button" />&nbsp;&nbsp;<input type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?>" class="button" /></td>
</tr>
</table>

</form>

<div class="spacing"></div>

<?php $this->_tpl_include('breadcrumbs.html'); ?>


<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>

<?php $this->_tpl_include('overall_footer.html'); ?>