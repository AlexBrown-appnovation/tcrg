<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); ?>


<form method="post" name="mcp" action="<?php echo (isset($this->_rootref['U_POST_ACTION'])) ? $this->_rootref['U_POST_ACTION'] : ''; ?>">

<table class="modcp" width="100%" cellspacing="1" border="0" align="center">
<tr>
	<th colspan="2"><h2><?php echo ((isset($this->_rootref['L_SELECT_USER'])) ? $this->_rootref['L_SELECT_USER'] : ((isset($user->lang['SELECT_USER'])) ? $user->lang['SELECT_USER'] : '{ SELECT_USER }')); ?></h2></th>
</tr>
<tr>
	<td class="row1 pad4" width="40%"><b><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?>: </b><br />[ <a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a> ]</td>
	<td class="row2 pad4"><input type="text" class="post" name="username" size="20" /></td>
</tr>
<tr>
	<td class="row3 pad4" colspan="2" align="center"><input type="submit" name="submituser" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button" /></td>
</tr>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>

<table class="modcp" width="100%" cellspacing="1">
<tr>
	<td colspan="4"><h2><?php echo ((isset($this->_rootref['L_MOST_WARNINGS'])) ? $this->_rootref['L_MOST_WARNINGS'] : ((isset($user->lang['MOST_WARNINGS'])) ? $user->lang['MOST_WARNINGS'] : '{ MOST_WARNINGS }')); ?></h2></td>
</tr>
<tr class="toplines">
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_WARNINGS'])) ? $this->_rootref['L_WARNINGS'] : ((isset($user->lang['WARNINGS'])) ? $user->lang['WARNINGS'] : '{ WARNINGS }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_LATEST_WARNING_TIME'])) ? $this->_rootref['L_LATEST_WARNING_TIME'] : ((isset($user->lang['LATEST_WARNING_TIME'])) ? $user->lang['LATEST_WARNING_TIME'] : '{ LATEST_WARNING_TIME }')); ?>&nbsp;</th>
	<th>&nbsp;</th>
</tr>
<?php $_highest_count = (isset($this->_tpldata['highest'])) ? sizeof($this->_tpldata['highest']) : 0;if ($_highest_count) {for ($_highest_i = 0; $_highest_i < $_highest_count; ++$_highest_i){$_highest_val = &$this->_tpldata['highest'][$_highest_i]; ?>

	<tr>
		<td class="row1 pad4" width="15%" valign="top"><?php echo $_highest_val['USERNAME_FULL']; ?></td>
		<td class="row2 pad4" width="15%" valign="top"><?php echo $_highest_val['WARNINGS']; ?></td>
		<td class="row1 pad4" width="15%" valign="top"><?php echo $_highest_val['WARNING_TIME']; ?></td>
		<td class="row2 pad4" width="15%" valign="top"><a href="<?php echo $_highest_val['U_NOTES']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?></a></td>
	</tr>
<?php }} else { ?>

	<tr>
		<td class="row1 pad4" colspan="4" align="center"><?php echo ((isset($this->_rootref['L_WARNINGS_ZERO_TOTAL'])) ? $this->_rootref['L_WARNINGS_ZERO_TOTAL'] : ((isset($user->lang['WARNINGS_ZERO_TOTAL'])) ? $user->lang['WARNINGS_ZERO_TOTAL'] : '{ WARNINGS_ZERO_TOTAL }')); ?></td>
	</tr>
<?php } ?>

</table>

<table class="modcp" width="100%" cellspacing="1">
<tr>
	<td colspan="4"><h2><?php echo ((isset($this->_rootref['L_LATEST_WARNINGS'])) ? $this->_rootref['L_LATEST_WARNINGS'] : ((isset($user->lang['LATEST_WARNINGS'])) ? $user->lang['LATEST_WARNINGS'] : '{ LATEST_WARNINGS }')); ?></h2></td>
</tr>
<tr class="toplines">
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_TIME'])) ? $this->_rootref['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ TIME }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_TOTAL_WARNINGS'])) ? $this->_rootref['L_TOTAL_WARNINGS'] : ((isset($user->lang['TOTAL_WARNINGS'])) ? $user->lang['TOTAL_WARNINGS'] : '{ TOTAL_WARNINGS }')); ?>&nbsp;</th>
	<th>&nbsp;</th>
</tr>
<?php $_latest_count = (isset($this->_tpldata['latest'])) ? sizeof($this->_tpldata['latest']) : 0;if ($_latest_count) {for ($_latest_i = 0; $_latest_i < $_latest_count; ++$_latest_i){$_latest_val = &$this->_tpldata['latest'][$_latest_i]; ?>

	<tr>
		<td class="row1 pad4" width="15%" valign="top"><?php echo $_latest_val['USERNAME_FULL']; ?></td>
		<td class="row2 pad4" width="15%" valign="top"><?php echo $_latest_val['WARNING_TIME']; ?></td>
		<td class="row1 pad4" width="15%" valign="top"><?php echo $_latest_val['WARNINGS']; ?></td>
		<td class="row2 pad4" width="15%" valign="top"><a href="<?php echo $_latest_val['U_NOTES']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?></a></td>
	</tr>
<?php }} else { ?>

	<tr>
		<td class="row1 pad4" colspan="4" align="center"><?php echo ((isset($this->_rootref['L_WARNINGS_ZERO_TOTAL'])) ? $this->_rootref['L_WARNINGS_ZERO_TOTAL'] : ((isset($user->lang['WARNINGS_ZERO_TOTAL'])) ? $user->lang['WARNINGS_ZERO_TOTAL'] : '{ WARNINGS_ZERO_TOTAL }')); ?></td>
	</tr>
<?php } ?>

</table>

<div class="spacing"></div>

<?php $this->_tpl_include('mcp_footer.html'); ?>