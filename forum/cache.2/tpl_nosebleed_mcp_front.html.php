<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); if ($this->_rootref['S_SHOW_UNAPPROVED']) {  ?>

	<form name="mcp_queue" method="post" action="<?php echo (isset($this->_rootref['S_MCP_QUEUE_ACTION'])) ? $this->_rootref['S_MCP_QUEUE_ACTION'] : ''; ?>">

	<table class="modcp" width="100%" cellspacing="1">
	<tr>
		<th colspan="6"><h2><?php echo ((isset($this->_rootref['L_LATEST_UNAPPROVED'])) ? $this->_rootref['L_LATEST_UNAPPROVED'] : ((isset($user->lang['LATEST_UNAPPROVED'])) ? $user->lang['LATEST_UNAPPROVED'] : '{ LATEST_UNAPPROVED }')); ?></h2></th>
	</tr>
	<tr class="toplines">
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_POST_TIME'])) ? $this->_rootref['L_POST_TIME'] : ((isset($user->lang['POST_TIME'])) ? $user->lang['POST_TIME'] : '{ POST_TIME }')); ?>&nbsp;</th>
		<th width="5%">&nbsp;<?php echo ((isset($this->_rootref['L_SELECT'])) ? $this->_rootref['L_SELECT'] : ((isset($user->lang['SELECT'])) ? $user->lang['SELECT'] : '{ SELECT }')); ?>&nbsp;</th>
	</tr>
	<?php $_unapproved_count = (isset($this->_tpldata['unapproved'])) ? sizeof($this->_tpldata['unapproved']) : 0;if ($_unapproved_count) {for ($_unapproved_i = 0; $_unapproved_i < $_unapproved_count; ++$_unapproved_i){$_unapproved_val = &$this->_tpldata['unapproved'][$_unapproved_i]; ?>

		<tr>
			<td class="row1 pad4" width="15%" valign="top"><?php if ($_unapproved_val['U_FORUM']) {  ?><a href="<?php echo $_unapproved_val['U_FORUM']; ?>"><?php echo $_unapproved_val['FORUM_NAME']; ?></a><?php } else { echo $_unapproved_val['FORUM_NAME']; } if ($_unapproved_val['U_MCP_FORUM']) {  ?><br />[ <a href="<?php echo $_unapproved_val['U_MCP_FORUM']; ?>"><?php echo ((isset($this->_rootref['L_MODERATE'])) ? $this->_rootref['L_MODERATE'] : ((isset($user->lang['MODERATE'])) ? $user->lang['MODERATE'] : '{ MODERATE }')); ?></a> ]<?php } ?></td>
			<td class="row2 pad4" valign="top"><a href="<?php echo $_unapproved_val['U_TOPIC']; ?>"><?php echo $_unapproved_val['TOPIC_TITLE']; ?></a><br />[ <a href="<?php echo $_unapproved_val['U_MCP_TOPIC']; ?>"><?php echo ((isset($this->_rootref['L_MODERATE'])) ? $this->_rootref['L_MODERATE'] : ((isset($user->lang['MODERATE'])) ? $user->lang['MODERATE'] : '{ MODERATE }')); ?></a> ]</td>
			<td class="row1 pad4" valign="top"><?php echo $_unapproved_val['SUBJECT']; ?><br />[ <a href="<?php echo $_unapproved_val['U_POST_DETAILS']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_DETAILS'])) ? $this->_rootref['L_VIEW_DETAILS'] : ((isset($user->lang['VIEW_DETAILS'])) ? $user->lang['VIEW_DETAILS'] : '{ VIEW_DETAILS }')); ?></a> ]</td>
			<td class="row2 pad4" align="center" width="15%" nowrap="nowrap" valign="top"><?php echo $_unapproved_val['AUTHOR_FULL']; ?></td>
			<td class="row1 pad4" align="center" width="15%" nowrap="nowrap" valign="top"><?php echo $_unapproved_val['POST_TIME']; ?></td>
			<td class="row2 pad4" align="center"><input type="checkbox" class="radio" name="post_id_list[]" value="<?php echo $_unapproved_val['POST_ID']; ?>" /></td>
		</tr>
	<?php }} else { ?>

		<tr>
			<td class="row1 txtmiddle pad10" colspan="6"><?php echo ((isset($this->_rootref['L_UNAPPROVED_POSTS_ZERO_TOTAL'])) ? $this->_rootref['L_UNAPPROVED_POSTS_ZERO_TOTAL'] : ((isset($user->lang['UNAPPROVED_POSTS_ZERO_TOTAL'])) ? $user->lang['UNAPPROVED_POSTS_ZERO_TOTAL'] : '{ UNAPPROVED_POSTS_ZERO_TOTAL }')); ?></td>
		</tr>
	<?php } if ($this->_rootref['S_HAS_UNAPPROVED_POSTS']) {  ?>

		<tr>
			<td class="row3 pad4" colspan="6"><?php echo ((isset($this->_rootref['L_UNAPPROVED_TOTAL'])) ? $this->_rootref['L_UNAPPROVED_TOTAL'] : ((isset($user->lang['UNAPPROVED_TOTAL'])) ? $user->lang['UNAPPROVED_TOTAL'] : '{ UNAPPROVED_TOTAL }')); ?></td>
		</tr>
	<?php } ?>

	<tr>
		<td class="row3 pad4" colspan="6" align="center"><input class="button" type="submit" name="action[approve]" value="<?php echo ((isset($this->_rootref['L_APPROVE'])) ? $this->_rootref['L_APPROVE'] : ((isset($user->lang['APPROVE'])) ? $user->lang['APPROVE'] : '{ APPROVE }')); ?>" />&nbsp;&nbsp;<input class="button" type="submit" name="action[disapprove]" value="<?php echo ((isset($this->_rootref['L_DISAPPROVE'])) ? $this->_rootref['L_DISAPPROVE'] : ((isset($user->lang['DISAPPROVE'])) ? $user->lang['DISAPPROVE'] : '{ DISAPPROVE }')); ?>" /></td>
	</tr>
	</table>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</form>
	
	<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><b><a href="#" onclick="marklist('mcp_queue', '', true); return false;"><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a> :: <a href="#" onclick="marklist('mcp_queue', '', false); return false;"><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></b></td>
	</tr>
	</table>
<?php } if ($this->_rootref['S_SHOW_REPORTS']) {  ?>

	<table class="modcp" width="100%" cellspacing="1">
	<tr>
		<td colspan="5"><h2><?php echo ((isset($this->_rootref['L_LATEST_REPORTED'])) ? $this->_rootref['L_LATEST_REPORTED'] : ((isset($user->lang['LATEST_REPORTED'])) ? $user->lang['LATEST_REPORTED'] : '{ LATEST_REPORTED }')); ?></h2></td>
	</tr>
	<tr class="toplines">
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_REPORTER'])) ? $this->_rootref['L_REPORTER'] : ((isset($user->lang['REPORTER'])) ? $user->lang['REPORTER'] : '{ REPORTER }')); ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_REPORT_TIME'])) ? $this->_rootref['L_REPORT_TIME'] : ((isset($user->lang['REPORT_TIME'])) ? $user->lang['REPORT_TIME'] : '{ REPORT_TIME }')); ?>&nbsp;</th>
	</tr>
	<?php $_report_count = (isset($this->_tpldata['report'])) ? sizeof($this->_tpldata['report']) : 0;if ($_report_count) {for ($_report_i = 0; $_report_i < $_report_count; ++$_report_i){$_report_val = &$this->_tpldata['report'][$_report_i]; ?>

		<tr>
			<td class="row1 pad4" width="15%" valign="top"><?php if ($_report_val['U_FORUM']) {  ?><a href="<?php echo $_report_val['U_FORUM']; ?>"><?php echo $_report_val['FORUM_NAME']; ?></a><?php } else { echo $_report_val['FORUM_NAME']; } if ($_report_val['U_MCP_FORUM']) {  ?><br />[ <a href="<?php echo $_report_val['U_MCP_FORUM']; ?>"><?php echo ((isset($this->_rootref['L_MODERATE'])) ? $this->_rootref['L_MODERATE'] : ((isset($user->lang['MODERATE'])) ? $user->lang['MODERATE'] : '{ MODERATE }')); ?></a> ]<?php } ?></td>
			<td class="row2 pad4" valign="top"><a href="<?php echo $_report_val['U_TOPIC']; ?>"><?php echo $_report_val['TOPIC_TITLE']; ?></a><br />[ <a href="<?php echo $_report_val['U_MCP_TOPIC']; ?>"><?php echo ((isset($this->_rootref['L_MODERATE'])) ? $this->_rootref['L_MODERATE'] : ((isset($user->lang['MODERATE'])) ? $user->lang['MODERATE'] : '{ MODERATE }')); ?></a> ]</td>
			<td class="row1 pad4" valign="top"><?php echo $_report_val['SUBJECT']; ?><br />[ <a href="<?php echo $_report_val['U_POST_DETAILS']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_DETAILS'])) ? $this->_rootref['L_VIEW_DETAILS'] : ((isset($user->lang['VIEW_DETAILS'])) ? $user->lang['VIEW_DETAILS'] : '{ VIEW_DETAILS }')); ?></a> ]</td>
			<td class="row2 pad4" align="center" width="15%" nowrap="nowrap" valign="top"><?php echo $_report_val['REPORTER_FULL']; ?></td>
			<td class="row1 pad4" align="center" width="15%" nowrap="nowrap" valign="top"><?php echo $_report_val['REPORT_TIME']; ?></td>
		</tr>
	<?php }} else { ?>

		<tr>
			<td class="row1 txtmiddle pad10" colspan="5" align="center"><?php echo ((isset($this->_rootref['L_REPORTS_ZERO_TOTAL'])) ? $this->_rootref['L_REPORTS_ZERO_TOTAL'] : ((isset($user->lang['REPORTS_ZERO_TOTAL'])) ? $user->lang['REPORTS_ZERO_TOTAL'] : '{ REPORTS_ZERO_TOTAL }')); ?></td>
		</tr>
	<?php } if ($this->_rootref['S_HAS_REPORTS']) {  ?>

		<tr>
			<td class="row3 pad4" colspan="5"><?php echo ((isset($this->_rootref['L_REPORTS_TOTAL'])) ? $this->_rootref['L_REPORTS_TOTAL'] : ((isset($user->lang['REPORTS_TOTAL'])) ? $user->lang['REPORTS_TOTAL'] : '{ REPORTS_TOTAL }')); ?></td>
		</tr>
	<?php } ?>

	</table>

<?php } if ($this->_rootref['S_SHOW_LOGS']) {  ?>

	<table class="modcp" width="100%" cellspacing="1" cellpadding="4" border="0" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>">
	<tr>
		<td colspan="5"><h2><?php echo ((isset($this->_rootref['L_LATEST_LOGS'])) ? $this->_rootref['L_LATEST_LOGS'] : ((isset($user->lang['LATEST_LOGS'])) ? $user->lang['LATEST_LOGS'] : '{ LATEST_LOGS }')); ?></h2></td>
	</tr>
	<tr class="toplines">
		<th width="15%" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></th>
		<th width="12%" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_IP'])) ? $this->_rootref['L_IP'] : ((isset($user->lang['IP'])) ? $user->lang['IP'] : '{ IP }')); ?></th>
		<th width="45%" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_ACTION'])) ? $this->_rootref['L_ACTION'] : ((isset($user->lang['ACTION'])) ? $user->lang['ACTION'] : '{ ACTION }')); ?></th>
		<th nowrap="nowrap"></th>
		<th width="18%" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_TIME'])) ? $this->_rootref['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ TIME }')); ?></th>
	</tr>
	<?php $_log_count = (isset($this->_tpldata['log'])) ? sizeof($this->_tpldata['log']) : 0;if ($_log_count) {for ($_log_i = 0; $_log_i < $_log_count; ++$_log_i){$_log_val = &$this->_tpldata['log'][$_log_i]; ?>

		<tr>
			<td class="row1 pad4" nowrap="nowrap"><?php echo $_log_val['USERNAME']; ?></td>
			<td class="row1 pad4" align="center" nowrap="nowrap"><?php echo $_log_val['IP']; ?></td>
			<td class="row1 pad4"><?php echo $_log_val['ACTION']; ?></td>
			<td class="row1 pad4" align="center" nowrap="nowrap"><?php if ($_log_val['U_VIEW_TOPIC']) {  ?><a href="<?php echo $_log_val['U_VIEW_TOPIC']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_TOPIC'])) ? $this->_rootref['L_VIEW_TOPIC'] : ((isset($user->lang['VIEW_TOPIC'])) ? $user->lang['VIEW_TOPIC'] : '{ VIEW_TOPIC }')); ?></a><?php if ($_log_val['U_VIEWLOGS']) {  ?> | <?php } } if ($_log_val['U_VIEWLOGS']) {  ?><a href="<?php echo $_log_val['U_VIEWLOGS']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_TOPIC_LOGS'])) ? $this->_rootref['L_VIEW_TOPIC_LOGS'] : ((isset($user->lang['VIEW_TOPIC_LOGS'])) ? $user->lang['VIEW_TOPIC_LOGS'] : '{ VIEW_TOPIC_LOGS }')); ?></a><?php } ?></td>
			<td class="row1 pad4" align="center" nowrap="nowrap"><?php echo $_log_val['TIME']; ?></td>
		</tr>
	<?php }} else { ?>

		<tr>
			<td class="row1 pad4" colspan="5" align="center"><?php echo ((isset($this->_rootref['L_NO_ENTRIES'])) ? $this->_rootref['L_NO_ENTRIES'] : ((isset($user->lang['NO_ENTRIES'])) ? $user->lang['NO_ENTRIES'] : '{ NO_ENTRIES }')); ?></td>
		</tr>
	<?php } ?>

	</table>

<?php } $this->_tpl_include('mcp_footer.html'); ?>