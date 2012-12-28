<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_IN_SEARCH_POPUP']) {  $this->_tpl_include('simple_header.html'); } else { $this->_tpl_include('overall_header.html'); } if ($this->_rootref['S_SEARCH_USER']) {  $this->_tpl_include('memberlist_search.html'); } if ($this->_rootref['S_SHOW_GROUP']) {  $this->_tpl_include('memberlist_group.html'); } if (! $this->_rootref['S_SHOW_GROUP']) {  ?>

	<form method="post" name="charsearch" action="<?php echo (isset($this->_rootref['S_MODE_ACTION'])) ? $this->_rootref['S_MODE_ACTION'] : ''; ?>">
		<table cellspacing="1" class="memberlist">
		<tr>
			<td class="row3 pad4" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" colspan="8"><?php echo ((isset($this->_rootref['L_USERNAME_BEGINS_WITH'])) ? $this->_rootref['L_USERNAME_BEGINS_WITH'] : ((isset($user->lang['USERNAME_BEGINS_WITH'])) ? $user->lang['USERNAME_BEGINS_WITH'] : '{ USERNAME_BEGINS_WITH }')); ?>: <select name="first_char" onchange="this.form.submit();"><?php echo (isset($this->_rootref['S_CHAR_OPTIONS'])) ? $this->_rootref['S_CHAR_OPTIONS'] : ''; ?></select>&nbsp;<input type="submit" name="char" value="<?php echo ((isset($this->_rootref['L_DISPLAY'])) ? $this->_rootref['L_DISPLAY'] : ((isset($user->lang['DISPLAY'])) ? $user->lang['DISPLAY'] : '{ DISPLAY }')); ?>" class="button" />
	<?php if ($this->_rootref['U_FIND_MEMBER'] && ! $this->_rootref['S_SEARCH_USER']) {  ?>

			&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo (isset($this->_rootref['U_FIND_MEMBER'])) ? $this->_rootref['U_FIND_MEMBER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a></td>
	<?php } else if ($this->_rootref['S_SEARCH_USER'] && $this->_rootref['U_HIDE_FIND_MEMBER'] && ! $this->_rootref['S_IN_SEARCH_POPUP']) {  ?>

			&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo (isset($this->_rootref['U_HIDE_FIND_MEMBER'])) ? $this->_rootref['U_HIDE_FIND_MEMBER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_HIDE_MEMBER_SEARCH'])) ? $this->_rootref['L_HIDE_MEMBER_SEARCH'] : ((isset($user->lang['HIDE_MEMBER_SEARCH'])) ? $user->lang['HIDE_MEMBER_SEARCH'] : '{ HIDE_MEMBER_SEARCH }')); ?></a></td>
	<?php } ?>

		</tr>
		</table>
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</form>
<?php } if ($this->_rootref['S_IN_SEARCH_POPUP']) {  ?>

	<form method="post" name="results" action="<?php echo (isset($this->_rootref['S_MODE_ACTION'])) ? $this->_rootref['S_MODE_ACTION'] : ''; ?>" onsubmit="insert_marked(this.user);return false">
<?php } else { ?>

	<form method="post" action="<?php echo (isset($this->_rootref['S_MODE_ACTION'])) ? $this->_rootref['S_MODE_ACTION'] : ''; ?>">
<?php } ?>

<table cellspacing="1" class="memberlist">
<tr class="toplines">
	<th nowrap="nowrap">#</th>
	<th nowrap="nowrap" width="25%" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><a href="<?php echo (isset($this->_rootref['U_SORT_USERNAME'])) ? $this->_rootref['U_SORT_USERNAME'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></a></th>
	<th nowrap="nowrap" width="15%"><a href="<?php echo (isset($this->_rootref['U_SORT_JOINED'])) ? $this->_rootref['U_SORT_JOINED'] : ''; ?>"><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?></a></th>
	<th nowrap="nowrap" width="10%"><a href="<?php echo (isset($this->_rootref['U_SORT_POSTS'])) ? $this->_rootref['U_SORT_POSTS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?></a></th>
	<th nowrap="nowrap" width="15%"><a href="<?php echo (isset($this->_rootref['U_SORT_RANK'])) ? $this->_rootref['U_SORT_RANK'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RANK'])) ? $this->_rootref['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ RANK }')); ?></a></th>
	<th nowrap="nowrap" width="11%"><?php echo ((isset($this->_rootref['L_SEND_MESSAGE'])) ? $this->_rootref['L_SEND_MESSAGE'] : ((isset($user->lang['SEND_MESSAGE'])) ? $user->lang['SEND_MESSAGE'] : '{ SEND_MESSAGE }')); ?></th>
	<th nowrap="nowrap" width="11%"><a href="<?php echo (isset($this->_rootref['U_SORT_EMAIL'])) ? $this->_rootref['U_SORT_EMAIL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_EMAIL'])) ? $this->_rootref['L_EMAIL'] : ((isset($user->lang['EMAIL'])) ? $user->lang['EMAIL'] : '{ EMAIL }')); ?></a></th>
	<th nowrap="nowrap" width="11%"><a href="<?php echo (isset($this->_rootref['U_SORT_WEBSITE'])) ? $this->_rootref['U_SORT_WEBSITE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WEBSITE'])) ? $this->_rootref['L_WEBSITE'] : ((isset($user->lang['WEBSITE'])) ? $user->lang['WEBSITE'] : '{ WEBSITE }')); ?></a></th>
	<?php if ($this->_rootref['S_IN_SEARCH_POPUP'] && ! $this->_rootref['S_SELECT_SINGLE']) {  ?><th width="2%" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?></th><?php } ?>

</tr>
<?php $_memberrow_count = (isset($this->_tpldata['memberrow'])) ? sizeof($this->_tpldata['memberrow']) : 0;if ($_memberrow_count) {for ($_memberrow_i = 0; $_memberrow_i < $_memberrow_count; ++$_memberrow_i){$_memberrow_val = &$this->_tpldata['memberrow'][$_memberrow_i]; if ($this->_rootref['S_SHOW_GROUP']) {  if ($_memberrow_val['S_FIRST_ROW'] && $_memberrow_val['S_GROUP_LEADER']) {  ?>

			<tr class="row3">
				<td colspan="8"><h2><?php echo ((isset($this->_rootref['L_GROUP_LEADER'])) ? $this->_rootref['L_GROUP_LEADER'] : ((isset($user->lang['GROUP_LEADER'])) ? $user->lang['GROUP_LEADER'] : '{ GROUP_LEADER }')); ?></h2></td>
			</tr>
		<?php } else if (! $_memberrow_val['S_GROUP_LEADER'] && ! $this->_tpldata['DEFINE']['.']['S_MEMBER_HEADER']) {  ?>

			<tr class="row3">
				<td colspan="8"><h2><?php echo ((isset($this->_rootref['L_GROUP_MEMBERS'])) ? $this->_rootref['L_GROUP_MEMBERS'] : ((isset($user->lang['GROUP_MEMBERS'])) ? $user->lang['GROUP_MEMBERS'] : '{ GROUP_MEMBERS }')); ?></h2></td>
			</tr>
				<?php $this->_tpldata['DEFINE']['.']['S_MEMBER_HEADER'] = 1; } } ?>


	<tr>

		<?php if (!($_memberrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2 one txtcenter"><?php } else { ?><td class="row1 one txtcenter"><?php } ?>&nbsp;<?php echo $_memberrow_val['ROW_NUMBER']; ?>&nbsp;</td>
		<?php if (!($_memberrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2 one" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php } else { ?><td class="row1 one"align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php } ?> <?php echo $_memberrow_val['USERNAME_FULL']; if ($this->_rootref['S_SELECT_SINGLE']) {  ?> [&nbsp;<a href="#" onclick="insert_single('<?php echo $_memberrow_val['A_USERNAME']; ?>'); return false;"><?php echo ((isset($this->_rootref['L_SELECT'])) ? $this->_rootref['L_SELECT'] : ((isset($user->lang['SELECT'])) ? $user->lang['SELECT'] : '{ SELECT }')); ?></a>&nbsp;]<?php } ?></td>
		<?php if (!($_memberrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2 one txtcenter"  nowrap="nowrap"><?php } else { ?><td class="row1 one txtcenter" nowrap="nowrap"><?php } ?>&nbsp;<?php echo $_memberrow_val['JOINED']; ?>&nbsp;</td>
		<?php if (!($_memberrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2 one txtcenter"><?php } else { ?><td class="row1 one txtcenter"><?php } echo $_memberrow_val['POSTS']; ?></td>
		<?php if (!($_memberrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2 one txtcenter" valign=middle><?php } else { ?><td class="row1 one txtcenter" valign=middle><?php } if ($_memberrow_val['RANK_IMG']) {  echo $_memberrow_val['RANK_IMG']; } else { echo $_memberrow_val['RANK_TITLE']; } ?></td>
		<?php if (!($_memberrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2 one txtcenter" valign=middle><?php } else { ?><td class="row1 one txtcenter" valign=middle><?php } ?>&nbsp;<?php if ($_memberrow_val['U_PM']) {  ?><a href="<?php echo $_memberrow_val['U_PM']; ?>"><?php echo (isset($this->_rootref['PM_IMG'])) ? $this->_rootref['PM_IMG'] : ''; ?></a><?php } ?>&nbsp;</td>
		<?php if (!($_memberrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2 one txtcenter" valign=middle><?php } else { ?><td class="row1 one txtcenter" valign=middle><?php } ?>&nbsp;<?php if ($_memberrow_val['U_EMAIL']) {  ?><a href="<?php echo $_memberrow_val['U_EMAIL']; ?>"><?php echo (isset($this->_rootref['EMAIL_IMG'])) ? $this->_rootref['EMAIL_IMG'] : ''; ?></a><?php } ?>&nbsp;</td>
		<?php if (!($_memberrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2 one txtcenter" valign=middle><?php } else { ?><td class="row1 one txtcenter" valign=middle><?php } ?>&nbsp;<?php if ($_memberrow_val['U_WWW']) {  ?><a href="<?php echo $_memberrow_val['U_WWW']; ?>"><?php echo (isset($this->_rootref['WWW_IMG'])) ? $this->_rootref['WWW_IMG'] : ''; ?></a><?php } ?>&nbsp;</td>
		<?php if ($_memberrow_val['S_PROFILE_FIELD1']) {  ?><!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. --><?php if (!($_memberrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2 one txtcenter"><?php } else { ?><td class="row1 one txtcenter"><?php } ?>&nbsp;<?php echo $_memberrow_val['PROFILE_FIELD1_VALUE']; ?></td>
		<?php } if ($this->_rootref['S_IN_SEARCH_POPUP'] && ! $this->_rootref['S_SELECT_SINGLE']) {  ?><td align="center"><input type="checkbox" class="radio" name="user" value="<?php echo $_memberrow_val['USERNAME']; ?>" /></td><?php } ?>

	</tr>

<?php }} else { ?>


	<tr>
		<td class="row1 one" colspan="<?php if ($this->_rootref['S_IN_SEARCH_POPUP']) {  ?>9<?php } else { ?>8<?php } ?>" align="center">
			<?php if ($this->_rootref['S_SHOW_GROUP']) {  echo ((isset($this->_rootref['L_NO_GROUP_MEMBERS'])) ? $this->_rootref['L_NO_GROUP_MEMBERS'] : ((isset($user->lang['NO_GROUP_MEMBERS'])) ? $user->lang['NO_GROUP_MEMBERS'] : '{ NO_GROUP_MEMBERS }')); } else { echo ((isset($this->_rootref['L_NO_MEMBERS'])) ? $this->_rootref['L_NO_MEMBERS'] : ((isset($user->lang['NO_MEMBERS'])) ? $user->lang['NO_MEMBERS'] : '{ NO_MEMBERS }')); } ?>

		</td>
	</tr>

<?php } ?>


<tr>
	<td class="row3 pad4 txtright" colspan="<?php if ($this->_rootref['S_IN_SEARCH_POPUP']) {  ?>9<?php } else { ?>8<?php } ?>"><?php if ($this->_rootref['S_IN_SEARCH_POPUP'] && ! $this->_rootref['S_SELECT_SINGLE']) {  ?><input class="button" type="submit" value="<?php echo ((isset($this->_rootref['L_SELECT_MARKED'])) ? $this->_rootref['L_SELECT_MARKED'] : ((isset($user->lang['SELECT_MARKED'])) ? $user->lang['SELECT_MARKED'] : '{ SELECT_MARKED }')); ?>" /><?php } else { echo ((isset($this->_rootref['L_SELECT_SORT_METHOD'])) ? $this->_rootref['L_SELECT_SORT_METHOD'] : ((isset($user->lang['SELECT_SORT_METHOD'])) ? $user->lang['SELECT_SORT_METHOD'] : '{ SELECT_SORT_METHOD }')); ?>:&nbsp;<select name="sk"><?php echo (isset($this->_rootref['S_MODE_SELECT'])) ? $this->_rootref['S_MODE_SELECT'] : ''; ?></select>&nbsp; <?php echo ((isset($this->_rootref['L_ORDER'])) ? $this->_rootref['L_ORDER'] : ((isset($user->lang['ORDER'])) ? $user->lang['ORDER'] : '{ ORDER }')); ?>&nbsp;<select name="sd"><?php echo (isset($this->_rootref['S_ORDER_SELECT'])) ? $this->_rootref['S_ORDER_SELECT'] : ''; ?></select>&nbsp; <input type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button" /><?php } ?></td>
</tr>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	
</form>
<div class="timezone right"><?php echo (isset($this->_rootref['S_TIMEZONE'])) ? $this->_rootref['S_TIMEZONE'] : ''; ?></div>
<div class="spacing"></div>

<table cellspacing="0">
	<tr class="lines_1">
		<th>
		<div class="right">
			<?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?> [ <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> ]
		</div>
		<div class="left">
			<span class="nav"><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a></span>
		</div>
		</th>
	</tr>
</table>

<!-- ****************************BEGIN NOT YET UPDATED -->
<table width="100%" cellspacing="0" cellpadding="0">
<tr>
	<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php if ($this->_rootref['S_IN_SEARCH_POPUP'] && ! $this->_rootref['S_SELECT_SINGLE']) {  ?><b class="nav"><a href="#" onclick="marklist('results', 'user', true); return false;"><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a> :: <a href="#" onclick="marklist('results', 'user', false); return false;"><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></b><br /><?php } ?><span class="pagination"><?php $this->_tpl_include('pagination.html'); ?></span></td>
</tr>
</table>
<!-- ****************************END NOT YET UPDATED --><?php if ($this->_rootref['S_IN_SEARCH_POPUP']) {  $this->_tpl_include('simple_footer.html'); } else { ?>

	
	<div class="spacing"></div>
	
	<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>	
	<div class="spacing"></div>
	<?php $this->_tpl_include('overall_footer.html'); } ?>