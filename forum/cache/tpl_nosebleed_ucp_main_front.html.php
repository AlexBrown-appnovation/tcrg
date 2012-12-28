<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<table class="viewforum" width="100%" cellspacing="1">
<tr>
	<th colspan="3"><h2><?php echo ((isset($this->_rootref['L_UCP'])) ? $this->_rootref['L_UCP'] : ((isset($user->lang['UCP'])) ? $user->lang['UCP'] : '{ UCP }')); ?></h2></th>
</tr>
<tr>
	<td class="row1 two" colspan="3"><p><?php echo ((isset($this->_rootref['L_UCP_WELCOME'])) ? $this->_rootref['L_UCP_WELCOME'] : ((isset($user->lang['UCP_WELCOME'])) ? $user->lang['UCP_WELCOME'] : '{ UCP_WELCOME }')); ?></p></td>
</tr>
<tr>
	<th colspan="3"><h2><?php echo ((isset($this->_rootref['L_IMPORTANT_NEWS'])) ? $this->_rootref['L_IMPORTANT_NEWS'] : ((isset($user->lang['IMPORTANT_NEWS'])) ? $user->lang['IMPORTANT_NEWS'] : '{ IMPORTANT_NEWS }')); ?></h2></th>
</tr>

<?php $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; ?><!-- ************** UNTESTED FROM HERE **************** -->
	<tr>
		<?php if (!($_topicrow_val['S_ROW_COUNT'] & 1)  ) {  ?>

		<td class="row1 txtcenter" width="10%"><?php echo $_topicrow_val['TOPIC_FOLDER_IMG']; ?></td>
		<td class="row1 two" width="60%">
			<p><?php if ($_topicrow_val['S_UNREAD']) {  ?><a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a> <?php } echo $_topicrow_val['ATTACH_ICON_IMG']; ?> <a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a></p><p><?php echo $_topicrow_val['GOTO_PAGE']; ?></p>
		</td>
		<td class="row1 two" width="30%" align="center" nowrap="nowrap">
			<p><?php echo $_topicrow_val['LAST_POST_TIME']; ?></p>
			<p><?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?>

				<a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a>
			</p>
		</td>
		<?php } else { ?>

		<td class="row2 two txtcenter" width="25"><?php echo $_topicrow_val['TOPIC_FOLDER_IMG']; ?></td>
		<td class="row2 two" width="100%">
			<p><?php if ($_topicrow_val['S_UNREAD']) {  ?><a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a> <?php } echo $_topicrow_val['ATTACH_ICON_IMG']; ?> <a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a></p><p><?php echo $_topicrow_val['GOTO_PAGE']; ?></p>
		</td>
		<td class="row2 two" width="120" align="center" nowrap="nowrap">
			<p><?php echo $_topicrow_val['LAST_POST_TIME']; ?></p>
			<p><?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?>

				<a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a>
			</p>
		</td>
		<?php } ?>

	</tr>
<!-- ************** UNTESTED UNTIL HERE **************** --><?php }} else { ?>

	<tr>
		<td class="row1 two txtcenter" colspan="3"><?php echo ((isset($this->_rootref['L_NO_IMPORTANT_NEWS'])) ? $this->_rootref['L_NO_IMPORTANT_NEWS'] : ((isset($user->lang['NO_IMPORTANT_NEWS'])) ? $user->lang['NO_IMPORTANT_NEWS'] : '{ NO_IMPORTANT_NEWS }')); ?></td>
	</tr>
<?php } ?>


<tr>
	<th colspan="3"><h2><?php echo ((isset($this->_rootref['L_YOUR_DETAILS'])) ? $this->_rootref['L_YOUR_DETAILS'] : ((isset($user->lang['YOUR_DETAILS'])) ? $user->lang['YOUR_DETAILS'] : '{ YOUR_DETAILS }')); ?></h2></th>
</tr>
<tr>
	<td class="row1 two" colspan="3">
		<table width="100%" cellspacing="1" cellpadding="4">
		<tr> 
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>: </td>
			<td width="100%"><?php echo (isset($this->_rootref['JOINED'])) ? $this->_rootref['JOINED'] : ''; ?></td>
		</tr>
		<tr> 
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_TOTAL_POSTS'])) ? $this->_rootref['L_TOTAL_POSTS'] : ((isset($user->lang['TOTAL_POSTS'])) ? $user->lang['TOTAL_POSTS'] : '{ TOTAL_POSTS }')); ?>: </td>
			<td><?php if ($this->_rootref['POSTS_PCT']) {  echo (isset($this->_rootref['POSTS'])) ? $this->_rootref['POSTS'] : ''; ?><br />[<?php echo (isset($this->_rootref['POSTS_PCT'])) ? $this->_rootref['POSTS_PCT'] : ''; ?> / <?php echo (isset($this->_rootref['POSTS_DAY'])) ? $this->_rootref['POSTS_DAY'] : ''; ?>]<br /><a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_YOUR_POSTS'])) ? $this->_rootref['L_SEARCH_YOUR_POSTS'] : ((isset($user->lang['SEARCH_YOUR_POSTS'])) ? $user->lang['SEARCH_YOUR_POSTS'] : '{ SEARCH_YOUR_POSTS }')); ?></a><?php } else { echo (isset($this->_rootref['POSTS'])) ? $this->_rootref['POSTS'] : ''; } ?></td>
		</tr>
		<?php if ($this->_rootref['S_SHOW_ACTIVITY']) {  ?>

			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_ACTIVE_IN_FORUM'])) ? $this->_rootref['L_ACTIVE_IN_FORUM'] : ((isset($user->lang['ACTIVE_IN_FORUM'])) ? $user->lang['ACTIVE_IN_FORUM'] : '{ ACTIVE_IN_FORUM }')); ?>: </td>
				<td><?php if ($this->_rootref['ACTIVE_FORUM']) {  ?><a  href="<?php echo (isset($this->_rootref['U_ACTIVE_FORUM'])) ? $this->_rootref['U_ACTIVE_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_FORUM'])) ? $this->_rootref['ACTIVE_FORUM'] : ''; ?></a><br />[ <?php echo (isset($this->_rootref['ACTIVE_FORUM_POSTS'])) ? $this->_rootref['ACTIVE_FORUM_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_FORUM_PCT'])) ? $this->_rootref['ACTIVE_FORUM_PCT'] : ''; ?> ]<?php } else { ?>-<?php } ?></td>
			</tr>
			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_ACTIVE_IN_TOPIC'])) ? $this->_rootref['L_ACTIVE_IN_TOPIC'] : ((isset($user->lang['ACTIVE_IN_TOPIC'])) ? $user->lang['ACTIVE_IN_TOPIC'] : '{ ACTIVE_IN_TOPIC }')); ?>: </td>
				<td><?php if ($this->_rootref['ACTIVE_TOPIC']) {  ?><a  href="<?php echo (isset($this->_rootref['U_ACTIVE_TOPIC'])) ? $this->_rootref['U_ACTIVE_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_TOPIC'])) ? $this->_rootref['ACTIVE_TOPIC'] : ''; ?></a><br />[ <?php echo (isset($this->_rootref['ACTIVE_TOPIC_POSTS'])) ? $this->_rootref['ACTIVE_TOPIC_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_TOPIC_PCT'])) ? $this->_rootref['ACTIVE_TOPIC_PCT'] : ''; ?> ]<?php } else { ?>-<?php } ?></td>
			</tr>
		<?php } if ($this->_rootref['WARNINGS']) {  ?>

			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="middle" nowrap="nowrap"><b><?php echo ((isset($this->_rootref['L_YOUR_WARNINGS'])) ? $this->_rootref['L_YOUR_WARNINGS'] : ((isset($user->lang['YOUR_WARNINGS'])) ? $user->lang['YOUR_WARNINGS'] : '{ YOUR_WARNINGS }')); ?>: </b></td>
				<td><?php echo (isset($this->_rootref['WARNING_IMG'])) ? $this->_rootref['WARNING_IMG'] : ''; ?> [ <b><?php echo (isset($this->_rootref['WARNINGS'])) ? $this->_rootref['WARNINGS'] : ''; ?></b> ]</td>
			</tr>
		<?php } ?>

		</table>
	</td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
</table>

<?php $this->_tpl_include('ucp_footer.html'); ?>