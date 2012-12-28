<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); ?>


<form name="mcp" id="mcp" method="post" action="<?php echo (isset($this->_rootref['S_MCP_ACTION'])) ? $this->_rootref['S_MCP_ACTION'] : ''; ?>">

<table width="100%" class="modcp" cellspacing="1" cellpadding="4" border="0">
<tr>
	<th colspan="5" nowrap="nowrap"><h2><?php echo ((isset($this->_rootref['L_DISPLAY_OPTIONS'])) ? $this->_rootref['L_DISPLAY_OPTIONS'] : ((isset($user->lang['DISPLAY_OPTIONS'])) ? $user->lang['DISPLAY_OPTIONS'] : '{ DISPLAY_OPTIONS }')); ?></h2></th>
</tr>
<tr>
	<td colspan="5" class="row3 pad4"><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?> <select name="f"><?php echo (isset($this->_rootref['S_FORUM_OPTIONS'])) ? $this->_rootref['S_FORUM_OPTIONS'] : ''; ?></select> &nbsp; <?php if ($this->_rootref['TOPIC_ID']) {  ?><input type="checkbox" class="radio" name="t" value="<?php echo (isset($this->_rootref['TOPIC_ID'])) ? $this->_rootref['TOPIC_ID'] : ''; ?>" checked="checked" />&nbsp; <b><?php echo ((isset($this->_rootref['L_ONLY_TOPIC'])) ? $this->_rootref['L_ONLY_TOPIC'] : ((isset($user->lang['ONLY_TOPIC'])) ? $user->lang['ONLY_TOPIC'] : '{ ONLY_TOPIC }')); ?></b> &nbsp; <?php } ?><input class="button" type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" /></td>
</tr>
<tr class="toplines"> 
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_POST'])) ? $this->_rootref['L_POST'] : ((isset($user->lang['POST'])) ? $user->lang['POST'] : '{ POST }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_REPORTER'])) ? $this->_rootref['L_REPORTER'] : ((isset($user->lang['REPORTER'])) ? $user->lang['REPORTER'] : '{ REPORTER }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_REPORT_TIME'])) ? $this->_rootref['L_REPORT_TIME'] : ((isset($user->lang['REPORT_TIME'])) ? $user->lang['REPORT_TIME'] : '{ REPORT_TIME }')); ?>&nbsp;</th>
	<th width="5%">&nbsp;<?php echo ((isset($this->_rootref['L_SELECT'])) ? $this->_rootref['L_SELECT'] : ((isset($user->lang['SELECT'])) ? $user->lang['SELECT'] : '{ SELECT }')); ?>&nbsp;</th>
</tr>
<?php $_postrow_count = (isset($this->_tpldata['postrow'])) ? sizeof($this->_tpldata['postrow']) : 0;if ($_postrow_count) {for ($_postrow_i = 0; $_postrow_i < $_postrow_count; ++$_postrow_i){$_postrow_val = &$this->_tpldata['postrow'][$_postrow_i]; if (!($_postrow_val['S_ROW_'] & 1)  ) {  ?><tr class="row1 pad4"><?php } else { ?><tr class="row2 pad4"><?php } ?>

		<td style="padding: 4px;"><p ><a href="<?php echo $_postrow_val['U_VIEWPOST']; ?>"><?php echo $_postrow_val['POST_SUBJECT']; ?></a></p>
			<?php if ($_postrow_val['U_VIEWFORUM']) {  echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>: <a href="<?php echo $_postrow_val['U_VIEWFORUM']; ?>"><?php echo $_postrow_val['FORUM_NAME']; ?></a><?php } else { echo $_postrow_val['FORUM_NAME']; } ?></td>
		<td style="padding: 4px;" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo $_postrow_val['POST_AUTHOR_FULL']; ?><br />
			<?php echo $_postrow_val['POST_TIME']; ?></td>
		<td style="padding: 4px;" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo $_postrow_val['REPORTER_FULL']; ?></td>
		<td style="padding: 4px;" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo $_postrow_val['REPORT_TIME']; ?><br />
			[ <a href="<?php echo $_postrow_val['U_VIEW_DETAILS']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_DETAILS'])) ? $this->_rootref['L_VIEW_DETAILS'] : ((isset($user->lang['VIEW_DETAILS'])) ? $user->lang['VIEW_DETAILS'] : '{ VIEW_DETAILS }')); ?></a> ]</td>
		<td align="center"><input type="checkbox" class="radio" name="report_id_list[]" value="<?php echo $_postrow_val['REPORT_ID']; ?>" /></td>
	</tr>
<?php }} else { ?>

	<tr>
		<td class="row1 pad4" colspan="5" height="30" align="center" valign="middle"><?php echo ((isset($this->_rootref['L_NO_POSTS'])) ? $this->_rootref['L_NO_POSTS'] : ((isset($user->lang['NO_POSTS'])) ? $user->lang['NO_POSTS'] : '{ NO_POSTS }')); ?></td>
	</tr>
<?php } ?>

<tr>
	<td class="row3 pad4" colspan="5" align="center">
	<?php if ($this->_rootref['S_CLOSED']) {  ?>

		<input class="button" type="submit" value="<?php echo ((isset($this->_rootref['L_DELETE_REPORTS'])) ? $this->_rootref['L_DELETE_REPORTS'] : ((isset($user->lang['DELETE_REPORTS'])) ? $user->lang['DELETE_REPORTS'] : '{ DELETE_REPORTS }')); ?>" name="action[delete]" />
	<?php } else { ?>

		<input class="button" type="submit" name="action[close]" value="<?php echo ((isset($this->_rootref['L_CLOSE_REPORTS'])) ? $this->_rootref['L_CLOSE_REPORTS'] : ((isset($user->lang['CLOSE_REPORTS'])) ? $user->lang['CLOSE_REPORTS'] : '{ CLOSE_REPORTS }')); ?>" /> &nbsp; <input class="button" type="submit" value="<?php echo ((isset($this->_rootref['L_DELETE_REPORTS'])) ? $this->_rootref['L_DELETE_REPORTS'] : ((isset($user->lang['DELETE_REPORTS'])) ? $user->lang['DELETE_REPORTS'] : '{ DELETE_REPORTS }')); ?>" name="action[delete]" />
	<?php } ?>

	</td>
</tr>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
<tr>
	<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><b class="gensmall"><a href="#" onclick="marklist('mcp', '', true); return false;"><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a> :: <a href="#" onclick="marklist('mcp', '', false); return false;"><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></b></td>
</tr>
</table>

<?php $this->_tpl_include('mcp_footer.html'); ?>