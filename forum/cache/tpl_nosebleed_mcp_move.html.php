<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<div id="pagecontent">

	<form name="confirm" action="<?php echo (isset($this->_rootref['S_CONFIRM_ACTION'])) ? $this->_rootref['S_CONFIRM_ACTION'] : ''; ?>" method="post">
	
	<table class="modcp" width="100%" cellspacing="1">
	<tr class="toplines">
		<th><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></th>
	</tr>
	<tr>
		<th><h2><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></h2></th>
	</tr>
	<tr>
		<td class="row1 pad4" align="center">
			<?php if ($this->_rootref['ADDITIONAL_MSG']) {  ?>

				<?php echo (isset($this->_rootref['ADDITIONAL_MSG'])) ? $this->_rootref['ADDITIONAL_MSG'] : ''; ?><br />
			<?php } if ($this->_rootref['S_FORUM_SELECT']) {  ?>

				<br /><?php echo ((isset($this->_rootref['L_SELECT_DESTINATION_FORUM'])) ? $this->_rootref['L_SELECT_DESTINATION_FORUM'] : ((isset($user->lang['SELECT_DESTINATION_FORUM'])) ? $user->lang['SELECT_DESTINATION_FORUM'] : '{ SELECT_DESTINATION_FORUM }')); ?>&nbsp;&nbsp;
					<select name="to_forum_id"><?php echo (isset($this->_rootref['S_FORUM_SELECT'])) ? $this->_rootref['S_FORUM_SELECT'] : ''; ?></select><br />
				<?php if ($this->_rootref['S_CAN_LEAVE_SHADOW']) {  ?>

					<input type="checkbox" class="radio" name="move_leave_shadow" checked="checked" /><?php echo ((isset($this->_rootref['L_LEAVE_SHADOW'])) ? $this->_rootref['L_LEAVE_SHADOW'] : ((isset($user->lang['LEAVE_SHADOW'])) ? $user->lang['LEAVE_SHADOW'] : '{ LEAVE_SHADOW }')); ?><br />
				<?php } ?>

				<br /><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?><br /><br />
				<input type="submit" name="confirm" value="<?php echo (isset($this->_rootref['YES_VALUE'])) ? $this->_rootref['YES_VALUE'] : ''; ?>" class="button" />&nbsp;&nbsp;<input type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?>" class="button" />
			<?php } else { ?>

				<?php echo ((isset($this->_rootref['L_NO_DESTINATION_FORUM'])) ? $this->_rootref['L_NO_DESTINATION_FORUM'] : ((isset($user->lang['NO_DESTINATION_FORUM'])) ? $user->lang['NO_DESTINATION_FORUM'] : '{ NO_DESTINATION_FORUM }')); ?><br /><br />
					<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

					<input type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_CANCEL'])) ? $this->_rootref['L_CANCEL'] : ((isset($user->lang['CANCEL'])) ? $user->lang['CANCEL'] : '{ CANCEL }')); ?>" class="button" />
			<?php } ?>

		</td>
	</tr>
	</table>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>	
	</form>
	
</div>

<div class="spacing"></div>

<?php $this->_tpl_include('breadcrumbs.html'); ?>


<div class="spacing"></div>

<?php $this->_tpl_include('overall_footer.html'); ?>