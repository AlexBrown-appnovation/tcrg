<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); ?>


<form method="post" name="mcp" action="<?php echo (isset($this->_rootref['U_POST_ACTION'])) ? $this->_rootref['U_POST_ACTION'] : ''; ?>">
	
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="modcp">
<tr>
	<td colspan="<?php if ($this->_rootref['S_CLEAR_ALLOWED']) {  ?>5<?php } else { ?>4<?php } ?>"><h2><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h2></td>
<tr class="toplines">
	<th><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></th>
	<th><?php echo ((isset($this->_rootref['L_IP'])) ? $this->_rootref['L_IP'] : ((isset($user->lang['IP'])) ? $user->lang['IP'] : '{ IP }')); ?></th>
	<th><?php echo ((isset($this->_rootref['L_TIME'])) ? $this->_rootref['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ TIME }')); ?></th>
	<th><?php echo ((isset($this->_rootref['L_ACTION'])) ? $this->_rootref['L_ACTION'] : ((isset($user->lang['ACTION'])) ? $user->lang['ACTION'] : '{ ACTION }')); ?></th>
	<?php if ($this->_rootref['S_CLEAR_ALLOWED']) {  ?><th><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th><?php } ?>

</tr>
<?php if ($this->_rootref['S_LOGS']) {  $_log_count = (isset($this->_tpldata['log'])) ? sizeof($this->_tpldata['log']) : 0;if ($_log_count) {for ($_log_i = 0; $_log_i < $_log_count; ++$_log_i){$_log_val = &$this->_tpldata['log'][$_log_i]; ?>

		<tr>
		<?php if (!($_log_val['S_ROW_COUNT'] & 1)  ) {  ?>

			<td class="row1 pad4"><?php echo $_log_val['USERNAME']; ?></td>
			<td class="row1 pad4" style="text-align: center;"><?php echo $_log_val['IP']; ?></td>
			<td class="row1 pad4" style="text-align: center;"><?php echo $_log_val['DATE']; ?></td>
			<td class="row1 pad4"><?php echo $_log_val['ACTION']; ?><br /><?php echo $_log_val['DATA']; ?></td>
			<?php if ($this->_rootref['S_CLEAR_ALLOWED']) {  ?><td class="row1 pad4" width="5%" align="center"><input type="checkbox" class="radio" name="mark[]" value="<?php echo $_log_val['ID']; ?>" /></td><?php } } else { ?>

			<td class="row2 pad4"><?php echo $_log_val['USERNAME']; ?></td>
			<td class="row2 pad4" style="text-align: center;"><?php echo $_log_val['IP']; ?></td>
			<td class="row2 pad4" style="text-align: center;"><?php echo $_log_val['DATE']; ?></td>
			<td class="row2 pad4"><?php echo $_log_val['ACTION']; ?><br /><?php echo $_log_val['DATA']; ?></td>
			<?php if ($this->_rootref['S_CLEAR_ALLOWED']) {  ?><td class="row2 pad4" width="5%" align="center"><input type="checkbox" class="radio" name="mark[]" value="<?php echo $_log_val['ID']; ?>" /></td><?php } } ?>

		</tr>
	<?php }} ?>

	<tr align="center">
		<td class="row3 pad4" colspan="<?php if ($this->_rootref['S_CLEAR_ALLOWED']) {  ?>5<?php } else { ?>4<?php } ?>"><?php echo ((isset($this->_rootref['L_DISPLAY_LOG'])) ? $this->_rootref['L_DISPLAY_LOG'] : ((isset($user->lang['DISPLAY_LOG'])) ? $user->lang['DISPLAY_LOG'] : '{ DISPLAY_LOG }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>&nbsp;<input class="button" type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" name="sort" /></td>
	</tr>
	<?php if ($this->_rootref['S_CLEAR_ALLOWED']) {  ?>

		<tr>
			<td class="row3 pad4" colspan="5" align="center"><input class="button" type="submit" name="action[del_all]" value="<?php echo ((isset($this->_rootref['L_DELETE_ALL'])) ? $this->_rootref['L_DELETE_ALL'] : ((isset($user->lang['DELETE_ALL'])) ? $user->lang['DELETE_ALL'] : '{ DELETE_ALL }')); ?>" />&nbsp; <input class="button" type="submit" name="action[del_marked]" value="<?php echo ((isset($this->_rootref['L_DELETE_MARKED'])) ? $this->_rootref['L_DELETE_MARKED'] : ((isset($user->lang['DELETE_MARKED'])) ? $user->lang['DELETE_MARKED'] : '{ DELETE_MARKED }')); ?>" /></td>
		</tr>
	<?php } } else { ?>

	<tr>
		<td class="row1 pad4" colspan="<?php if ($this->_rootref['S_CLEAR_ALLOWED']) {  ?>5<?php } else { ?>4<?php } ?>" align="center"><?php echo ((isset($this->_rootref['L_NO_ENTRIES'])) ? $this->_rootref['L_NO_ENTRIES'] : ((isset($user->lang['NO_ENTRIES'])) ? $user->lang['NO_ENTRIES'] : '{ NO_ENTRIES }')); ?></td>
	</tr>
<?php } ?>

</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>

<div class="spacing"></div>

<?php $this->_tpl_include('mcp_footer.html'); ?>