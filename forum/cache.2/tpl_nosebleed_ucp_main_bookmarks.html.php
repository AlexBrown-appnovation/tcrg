<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<table class="viewforum" width="100%" cellspacing="1">
<tr>
	<th colspan="4"><h2><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h2></th>
</tr>
<tr>
	<td class="row1 two" colspan="4"><?php echo ((isset($this->_rootref['L_BOOKMARKS_EXPLAIN'])) ? $this->_rootref['L_BOOKMARKS_EXPLAIN'] : ((isset($user->lang['BOOKMARKS_EXPLAIN'])) ? $user->lang['BOOKMARKS_EXPLAIN'] : '{ BOOKMARKS_EXPLAIN }')); ?></td>
</tr>
<?php if (sizeof($this->_tpldata['topicrow'])) {  ?>

<tr>
	<th colspan="4"><h2><?php echo ((isset($this->_rootref['L_BOOKMARKS'])) ? $this->_rootref['L_BOOKMARKS'] : ((isset($user->lang['BOOKMARKS'])) ? $user->lang['BOOKMARKS'] : '{ BOOKMARKS }')); ?></h2></th>
</tr>
<?php } if ($this->_rootref['S_NO_DISPLAY_BOOKMARKS']) {  ?>

	<tr>
		<td class="row1 txtcenter pad25" colspan="4"><?php echo ((isset($this->_rootref['L_BOOKMARKS_DISABLED'])) ? $this->_rootref['L_BOOKMARKS_DISABLED'] : ((isset($user->lang['BOOKMARKS_DISABLED'])) ? $user->lang['BOOKMARKS_DISABLED'] : '{ BOOKMARKS_DISABLED }')); ?></td>
	</tr>
<?php } else { if ($this->_rootref['TOTAL_TOPICS']) {  ?>

		<tr>
			<td class="row3" colspan="4">
				<table width="100%" cellspacing="1">
				<tr>
					<td class="txtmiddle" nowrap="nowrap">&nbsp;<?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br /></td>
					<td nowrap="nowrap">&nbsp;[ <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> ]&nbsp;</td>
					<td width="100%" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php $this->_tpl_include('pagination.html'); ?></td>
				</tr>
				</table>
			</td>
		</tr>
	<?php } $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; if (!($_topicrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } ?>

			<td class="pad4 txtmiddle" width="20"><?php echo $_topicrow_val['TOPIC_FOLDER_IMG']; ?></td>
		<?php if ($_topicrow_val['S_DELETED_TOPIC']) {  ?>

			<td class="pad4" width="100%" colspan="2"><?php echo ((isset($this->_rootref['L_DELETED_TOPIC'])) ? $this->_rootref['L_DELETED_TOPIC'] : ((isset($user->lang['DELETED_TOPIC'])) ? $user->lang['DELETED_TOPIC'] : '{ DELETED_TOPIC }')); ?></td>
		<?php } else { ?>

			<td class="pad4" width="100%" valign="top">
				<p><?php if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?><a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a> <?php } echo $_topicrow_val['ATTACH_ICON_IMG']; ?> <a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a></p>
				<?php if ($_topicrow_val['S_GLOBAL_TOPIC']) {  echo ((isset($this->_rootref['L_GLOBAL_ANNOUNCEMENT'])) ? $this->_rootref['L_GLOBAL_ANNOUNCEMENT'] : ((isset($user->lang['GLOBAL_ANNOUNCEMENT'])) ? $user->lang['GLOBAL_ANNOUNCEMENT'] : '{ GLOBAL_ANNOUNCEMENT }')); } else { ?><b><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>: </b><a href="<?php echo $_topicrow_val['U_VIEW_FORUM']; ?>"><?php echo $_topicrow_val['FORUM_NAME']; ?></a><?php } if ($_topicrow_val['PAGINATION']) {  ?>

					<p> [ <?php echo (isset($this->_rootref['GOTO_PAGE_IMG'])) ? $this->_rootref['GOTO_PAGE_IMG'] : ''; echo ((isset($this->_rootref['L_GOTO_PAGE'])) ? $this->_rootref['L_GOTO_PAGE'] : ((isset($user->lang['GOTO_PAGE'])) ? $user->lang['GOTO_PAGE'] : '{ GOTO_PAGE }')); ?>: <?php echo $_topicrow_val['PAGINATION']; ?> ] </p>
				<?php } ?>

			</td>
			<td class="pad4 txtmiddle" nowrap="nowrap" valign="top">
				<p><?php echo $_topicrow_val['LAST_POST_TIME']; ?></p>
				<p><?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?>

					<a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a>
				</p>
			</td>
		<?php } ?>

			<td class="pad4 txtmiddle"> <input type="checkbox" class="radio" name="t[<?php echo $_topicrow_val['TOPIC_ID']; ?>]" /> </td>
		</tr>
	<?php }} else { ?>

		<tr>
			<td class="row1 txtcenter pad25" colspan="4"><?php echo ((isset($this->_rootref['L_NO_BOOKMARKS'])) ? $this->_rootref['L_NO_BOOKMARKS'] : ((isset($user->lang['NO_BOOKMARKS'])) ? $user->lang['NO_BOOKMARKS'] : '{ NO_BOOKMARKS }')); ?></td>
		</tr>
	<?php } if (sizeof($this->_tpldata['topicrow'])) {  ?>

			<tr>
				<td class="row3 pad4 txtright" colspan="5"><input class="button" type="submit" name="unbookmark" value="<?php echo ((isset($this->_rootref['L_REMOVE_BOOKMARK_MARKED'])) ? $this->_rootref['L_REMOVE_BOOKMARK_MARKED'] : ((isset($user->lang['REMOVE_BOOKMARK_MARKED'])) ? $user->lang['REMOVE_BOOKMARK_MARKED'] : '{ REMOVE_BOOKMARK_MARKED }')); ?>" />&nbsp;</td>
			</tr>
		<?php } } ?>

</table>

<?php if (! $this->_rootref['S_NO_DISPLAY_BOOKMARKS'] && sizeof($this->_tpldata['topicrow'])) {  ?>

	<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>; padding-top: 2px;"><b><a href="#" onclick="marklist('ucp', 't', true); return false;"><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a> :: <a href="#" onclick="marklist('ucp', 't', false); return false;"><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></b></div>
<?php } $this->_tpl_include('ucp_footer.html'); ?>