<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<table cellspacing="1" class="viewtopic">
	<tr class="toplines"> 
		<th><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?></th>
	</tr>
	<tr>
		<td colspan="2"><h2><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>">&lt;</a>&nbsp;&nbsp;<a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a>&nbsp;&nbsp;~&nbsp;&nbsp;<?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?></h2></td>
	</tr>
	<?php if ($this->_rootref['S_FORUM_RULES']) {  ?>

	<tr>
		<td colspan="2" class="forumrules">
			<?php if ($this->_rootref['U_FORUM_RULES']) {  ?>

				<b><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></b><br />
				<a href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><b><?php echo ((isset($this->_rootref['L_FORUM_RULES_LINK'])) ? $this->_rootref['L_FORUM_RULES_LINK'] : ((isset($user->lang['FORUM_RULES_LINK'])) ? $user->lang['FORUM_RULES_LINK'] : '{ FORUM_RULES_LINK }')); ?></b></a>
			<?php } else { ?>

				<b><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></b><br />
				<?php echo (isset($this->_rootref['FORUM_RULES'])) ? $this->_rootref['FORUM_RULES'] : ''; ?>

			<?php } ?>

		</td>
	</tr>
	<tr>
		<div class="spacing"></div>
	</tr>
	<?php } if ($this->_rootref['S_HAS_POLL']) {  ?>

	<tr>
		<td class="row3 txtmiddle pad60" colspan="2">

			<form method="post" action="<?php echo (isset($this->_rootref['S_POLL_ACTION'])) ? $this->_rootref['S_POLL_ACTION'] : ''; ?>">

			<table cellspacing="0" cellpadding="4" border="0" align="center">
			<tr>
				<td><b><?php echo (isset($this->_rootref['POLL_QUESTION'])) ? $this->_rootref['POLL_QUESTION'] : ''; ?></b><br /><?php echo ((isset($this->_rootref['L_POLL_LENGTH'])) ? $this->_rootref['L_POLL_LENGTH'] : ((isset($user->lang['POLL_LENGTH'])) ? $user->lang['POLL_LENGTH'] : '{ POLL_LENGTH }')); ?><br /><br /></td>
			</tr>
			<tr>
				<td>
					<table cellspacing="0" cellpadding="2" border="0">
				<?php $_poll_option_count = (isset($this->_tpldata['poll_option'])) ? sizeof($this->_tpldata['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$this->_tpldata['poll_option'][$_poll_option_i]; ?>

					<tr>
					<?php if ($this->_rootref['S_CAN_VOTE']) {  ?>

						<td>
							<?php if ($this->_rootref['S_IS_MULTI_CHOICE']) {  ?>

								<input type="checkbox" class="radio" name="vote_id[]" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> />
							<?php } else { ?>

								<input type="radio" class="radio" name="vote_id[]" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> />
							<?php } ?>

						</td>
					<?php } ?>

					</tr>
					<tr>
						<td class="txtcenter"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></td>
					</tr>
					<tr>
						<?php if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?>

						<td class="txtcenter" dir="ltr"><?php echo (isset($this->_rootref['POLL_LEFT_CAP_IMG'])) ? $this->_rootref['POLL_LEFT_CAP_IMG'] : ''; echo $_poll_option_val['POLL_OPTION_IMG']; echo (isset($this->_rootref['POLL_RIGHT_CAP_IMG'])) ? $this->_rootref['POLL_RIGHT_CAP_IMG'] : ''; ?></td>
					</tr>
					<tr>
						<td class="txtcenter pad4">[ <?php echo $_poll_option_val['POLL_OPTION_RESULT']; ?> ]&nbsp;<?php echo $_poll_option_val['POLL_OPTION_PERCENT']; if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>&nbsp;<b title="<?php echo ((isset($this->_rootref['L_POLL_VOTED_OPTION'])) ? $this->_rootref['L_POLL_VOTED_OPTION'] : ((isset($user->lang['POLL_VOTED_OPTION'])) ? $user->lang['POLL_VOTED_OPTION'] : '{ POLL_VOTED_OPTION }')); ?>">x</b></td>
							<?php } } ?>

					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					</tr>
				<?php }} ?>

					</table>
				</td>
			</tr>
		<?php if ($this->_rootref['S_CAN_VOTE']) {  ?>

			<tr>
				<td class="txtcenter"><?php echo ((isset($this->_rootref['L_MAX_VOTES'])) ? $this->_rootref['L_MAX_VOTES'] : ((isset($user->lang['MAX_VOTES'])) ? $user->lang['MAX_VOTES'] : '{ MAX_VOTES }')); ?><br /><br /><input type="submit" name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?>" class="button" /></td>
			</tr>
		<?php } if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?>

			<tr>
				<td class="txtcenter" colspan="4"><br /><?php echo ((isset($this->_rootref['L_TOTAL_VOTES'])) ? $this->_rootref['L_TOTAL_VOTES'] : ((isset($user->lang['TOTAL_VOTES'])) ? $user->lang['TOTAL_VOTES'] : '{ TOTAL_VOTES }')); ?> : <?php echo (isset($this->_rootref['TOTAL_VOTES'])) ? $this->_rootref['TOTAL_VOTES'] : ''; ?></td>
			</tr>
		<?php } else { ?>

			<tr>
				<td class="txtcenter"><a href="<?php echo (isset($this->_rootref['U_VIEW_RESULTS'])) ? $this->_rootref['U_VIEW_RESULTS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></a></td>
			</tr>
		<?php } ?>

			</table>
			<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

			
			</form>
			
		</td>
	</tr>
<?php } $_postrow_count = (isset($this->_tpldata['postrow'])) ? sizeof($this->_tpldata['postrow']) : 0;if ($_postrow_count) {for ($_postrow_i = 0; $_postrow_i < $_postrow_count; ++$_postrow_i){$_postrow_val = &$this->_tpldata['postrow'][$_postrow_i]; if (!($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } if ($_postrow_val['S_IGNORE_POST']) {  ?>

			<td colspan="2" height="25" align="center"><?php if ($_postrow_val['S_FIRST_UNREAD']) {  ?><a name="unread"></a><?php } ?><a name="p<?php echo $_postrow_val['POST_ID']; ?>"></a><?php echo $_postrow_val['L_IGNORE_POST']; ?></td>
	<?php } else { ?>


			<td class="row3 one">
				<?php if ($_postrow_val['S_FIRST_UNREAD']) {  ?><a name="unread"></a><?php } ?><a name="p<?php echo $_postrow_val['POST_ID']; ?>"></a>
				<div class="postauthor"<?php if ($_postrow_val['POST_AUTHOR_COLOUR']) {  ?> style="color: <?php echo $_postrow_val['POST_AUTHOR_COLOUR']; ?>"<?php } ?>><?php echo $_postrow_val['POST_AUTHOR']; ?></div>
			</td>
			<td class="row3 two">
				<table cellspacing="0">
				<tr>
				<?php if ($_postrow_val['POST_ICON_IMG']) {  ?>

					<td><img src="<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_postrow_val['POST_ICON_IMG']; ?>" width="<?php echo $_postrow_val['POST_ICON_IMG_WIDTH']; ?>" height="<?php echo $_postrow_val['POST_ICON_IMG_HEIGHT']; ?>" alt="" title="" /></td>
				<?php } ?>

					<td><?php if ($this->_rootref['S_IS_BOT']) {  echo $_postrow_val['MINI_POST_IMG']; } else { ?><a href="<?php echo $_postrow_val['U_MINI_POST']; ?>"><?php echo $_postrow_val['MINI_POST_IMG']; ?></a><?php } echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>: <?php echo $_postrow_val['POST_DATE']; ?></td>
					<td class="txtright"><?php if (! $this->_rootref['S_IS_BOT']) {  if ($_postrow_val['U_EDIT']) {  ?><a href="<?php echo $_postrow_val['U_EDIT']; ?>"><?php echo (isset($this->_rootref['EDIT_IMG'])) ? $this->_rootref['EDIT_IMG'] : ''; ?></a> <?php } if ($_postrow_val['U_QUOTE']) {  ?> <a href="<?php echo $_postrow_val['U_QUOTE']; ?>"><?php echo (isset($this->_rootref['QUOTE_IMG'])) ? $this->_rootref['QUOTE_IMG'] : ''; ?></a> <?php } if ($_postrow_val['U_REPORT']) {  ?> <a href="<?php echo $_postrow_val['U_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORT_IMG'])) ? $this->_rootref['REPORT_IMG'] : ''; ?></a> <?php } if ($_postrow_val['U_INFO']) {  ?> <a href="<?php echo $_postrow_val['U_INFO']; ?>"><?php echo (isset($this->_rootref['INFO_IMG'])) ? $this->_rootref['INFO_IMG'] : ''; ?></a> <?php } if ($_postrow_val['U_WARN']) {  ?> <a href="<?php echo $_postrow_val['U_WARN']; ?>"><?php echo (isset($this->_rootref['WARN_IMG'])) ? $this->_rootref['WARN_IMG'] : ''; ?></a>  <?php } if ($_postrow_val['U_DELETE']) {  ?> <a href="<?php echo $_postrow_val['U_DELETE']; ?>"><?php echo (isset($this->_rootref['DELETE_IMG'])) ? $this->_rootref['DELETE_IMG'] : ''; ?></a><?php } } ?></td>
				</tr>
				</table>
			</td>
		</tr>
		<tr>
			<?php if (!($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row1 three"><?php } else { ?><td class="row2 three"><?php } if ($_postrow_val['POSTER_AVATAR']) {  ?><span class="avatar"><?php echo $_postrow_val['POSTER_AVATAR']; ?></span><?php } if ($_postrow_val['RANK_TITLE']) {  ?><span class="block"><?php echo $_postrow_val['RANK_TITLE']; ?></span><?php } if ($_postrow_val['RANK_IMG']) {  ?><span class="block"><?php echo $_postrow_val['RANK_IMG']; ?></span><?php } if ($_postrow_val['POSTER_JOINED']) {  ?><span class="block"><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>: <?php echo $_postrow_val['POSTER_JOINED']; ?></span><?php } if ($_postrow_val['POSTER_POSTS'] != ('')) {  ?><span class="block"><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>: <?php echo $_postrow_val['POSTER_POSTS']; ?></span><?php } if ($_postrow_val['POSTER_FROM']) {  ?><span class="block"><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>: <?php echo $_postrow_val['POSTER_FROM']; ?></span><?php } $_custom_fields_count = (isset($_postrow_val['custom_fields'])) ? sizeof($_postrow_val['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$_postrow_val['custom_fields'][$_custom_fields_i]; ?><span class="block"><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?>:</b> <?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?></span><?php }} ?>

			</td>

			<?php if (!($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>

			<td class="row1 four">
			<?php } else { ?>

			<td class="row2 four">
			<?php } ?>

				<div style="padding-top: 2px; width: 560px;">
					<?php if ($_postrow_val['S_POST_UNAPPROVED'] || $_postrow_val['S_POST_REPORTED']) {  ?>

						<table width="100%" cellspacing="0">
						<tr>
							<td class="postreported"><?php if ($_postrow_val['S_POST_UNAPPROVED']) {  echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?> <a href="<?php echo $_postrow_val['U_MCP_APPROVE']; ?>"><?php echo ((isset($this->_rootref['L_POST_UNAPPROVED'])) ? $this->_rootref['L_POST_UNAPPROVED'] : ((isset($user->lang['POST_UNAPPROVED'])) ? $user->lang['POST_UNAPPROVED'] : '{ POST_UNAPPROVED }')); ?></a> <?php } if ($_postrow_val['S_POST_REPORTED']) {  echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?> <a href="<?php echo $_postrow_val['U_MCP_REPORT']; ?>"><?php echo ((isset($this->_rootref['L_POST_REPORTED'])) ? $this->_rootref['L_POST_REPORTED'] : ((isset($user->lang['POST_REPORTED'])) ? $user->lang['POST_REPORTED'] : '{ POST_REPORTED }')); ?></a><?php } ?></td>
						</tr>
						</table><br />
					<?php } ?>

					<?php echo $_postrow_val['MESSAGE']; ?>

					<?php if ($_postrow_val['S_HAS_ATTACHMENTS']) {  ?>

					<div class="attachtitle">
					<b><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?>:</b>
					</div>
					<div class="attachcontent">
					<?php $_attachment_count = (isset($_postrow_val['attachment'])) ? sizeof($_postrow_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_postrow_val['attachment'][$_attachment_i]; ?>

						<?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?>

					<?php }} ?>

					</div>
					<?php } if ($_postrow_val['S_DISPLAY_NOTICE']) {  ?>

					<div class="downloadnoticetitle"><b>Note:</b></div>
					<div class="downloadnotice"><?php echo ((isset($this->_rootref['L_DOWNLOAD_NOTICE'])) ? $this->_rootref['L_DOWNLOAD_NOTICE'] : ((isset($user->lang['DOWNLOAD_NOTICE'])) ? $user->lang['DOWNLOAD_NOTICE'] : '{ DOWNLOAD_NOTICE }')); ?></div>
					<?php } ?>

				</div>
				<table cellspacing="0" cellpadding="0">
				<?php if ($_postrow_val['SIGNATURE']) {  ?>

				<tr>
					<td class="txtbottom"><br />_________________<br /><?php echo $_postrow_val['SIGNATURE']; ?></td>
				</tr>
				<?php } if ($_postrow_val['EDITED_MESSAGE'] || $_postrow_val['EDIT_REASON']) {  if ($_postrow_val['EDIT_REASON']) {  ?>

					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="postedited">
						<table class="viewtopic" width="100%" cellspacing="0">
						<tr>
							<td class="row3 pad4"><?php echo $_postrow_val['EDITED_MESSAGE']; ?></td>
						</tr>
						<tr>
							<td class="row2 pad4"><?php echo $_postrow_val['EDIT_REASON']; ?></td>
						</tr>
						</table>
						</td>
					</tr>
					<?php } else { ?>

						<br /><br />
						<?php echo $_postrow_val['EDITED_MESSAGE']; ?>

					<?php } } if ($_postrow_val['BUMPED_MESSAGE']) {  if ($_postrow_val['EDITED_MESSAGE'] || $_postrow_val['EDIT_REASON']) {  ?>

					<tr><td>&nbsp;</td></tr>
					<?php } ?>

					<tr>
						<td class="postedited">
						<table class="viewtopic" width="100%" cellspacing="0">
						<tr>
							<td class="row3 pad4"><?php echo $_postrow_val['BUMPED_MESSAGE']; ?></td>
						</tr>
						</table>
						</td>
					</tr>
					<?php } if (! $_postrow_val['S_HAS_ATTACHMENTS']) {  ?><br /><br /><?php } ?>

				</table>
			</td>
		</tr>
		<tr> 
			<?php if (!($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>

			<td class="row1 five blacklink">
			<?php } else { ?>

			<td class="row2 five blacklink">
			<?php } ?>

			<a href="#top"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a>
			</td>
			<?php if (!($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>

			<td class="row1 six">
			<?php } else { ?>

			<td class="row2 six">
			<?php } if ($_postrow_val['ONLINE_IMG']) {  echo $_postrow_val['ONLINE_IMG']; ?> <?php } if ($_postrow_val['U_PROFILE']) {  ?><a href="<?php echo $_postrow_val['U_PROFILE']; ?>"><?php echo (isset($this->_rootref['PROFILE_IMG'])) ? $this->_rootref['PROFILE_IMG'] : ''; ?></a> <?php } if ($_postrow_val['U_PM']) {  ?><a href="<?php echo $_postrow_val['U_PM']; ?>"><?php echo (isset($this->_rootref['PM_IMG'])) ? $this->_rootref['PM_IMG'] : ''; ?></a> <?php } if ($_postrow_val['U_EMAIL']) {  ?><a href="<?php echo $_postrow_val['U_EMAIL']; ?>"><?php echo (isset($this->_rootref['EMAIL_IMG'])) ? $this->_rootref['EMAIL_IMG'] : ''; ?></a> <?php } ?>

			</td>
		</tr>
	<?php } }} if (! $this->_rootref['S_IS_BOT']) {  ?>

		<tr> 
			<td class="row3 pad4 txtright" colspan="2">
				<form name="viewtopic" method="post" action="<?php echo (isset($this->_rootref['S_POST_ACTION'])) ? $this->_rootref['S_POST_ACTION'] : ''; ?>">
					<p><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>

						<input type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="button" name="sort" /></p>
				</form>
			</td>
		</tr>
</table>
<?php } if (! $this->_rootref['S_IS_BOT']) {  ?>

<div class="timezone left"><?php if ($this->_rootref['U_WATCH_TOPIC']) {  ?><a href="<?php echo (isset($this->_rootref['U_WATCH_TOPIC'])) ? $this->_rootref['U_WATCH_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?></a>&nbsp;&nbsp;<?php if ($this->_rootref['U_PRINT_TOPIC'] || $this->_rootref['U_EMAIL_TOPIC'] || $this->_rootref['U_BUMP_TOPIC'] || $this->_rootref['U_BOOKMARK_TOPIC']) {  } } if ($this->_rootref['U_BOOKMARK_TOPIC']) {  ?><a href="<?php echo (isset($this->_rootref['U_BOOKMARK_TOPIC'])) ? $this->_rootref['U_BOOKMARK_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?></a>&nbsp;&nbsp;<?php if ($this->_rootref['U_PRINT_TOPIC'] || $this->_rootref['U_EMAIL_TOPIC'] || $this->_rootref['U_BUMP_TOPIC']) {  } } if ($this->_rootref['U_PRINT_TOPIC']) {  ?><a href="<?php echo (isset($this->_rootref['U_PRINT_TOPIC'])) ? $this->_rootref['U_PRINT_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?></a>&nbsp;&nbsp;<?php if ($this->_rootref['U_EMAIL_TOPIC'] || $this->_rootref['U_BUMP_TOPIC']) {  } } if ($this->_rootref['U_EMAIL_TOPIC']) {  ?><a href="<?php echo (isset($this->_rootref['U_EMAIL_TOPIC'])) ? $this->_rootref['U_EMAIL_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?></a>&nbsp;&nbsp;<?php if ($this->_rootref['U_BUMP_TOPIC']) {  } } if ($this->_rootref['U_BUMP_TOPIC']) {  ?><a href="<?php echo (isset($this->_rootref['U_BUMP_TOPIC'])) ? $this->_rootref['U_BUMP_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BUMP_TOPIC'])) ? $this->_rootref['L_BUMP_TOPIC'] : ((isset($user->lang['BUMP_TOPIC'])) ? $user->lang['BUMP_TOPIC'] : '{ BUMP_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_BUMP_TOPIC'])) ? $this->_rootref['L_BUMP_TOPIC'] : ((isset($user->lang['BUMP_TOPIC'])) ? $user->lang['BUMP_TOPIC'] : '{ BUMP_TOPIC }')); ?></a><?php } ?></div>
<?php } ?>

<div class="timezone right"><?php echo (isset($this->_rootref['S_TIMEZONE'])) ? $this->_rootref['S_TIMEZONE'] : ''; ?></div>
<div class="spacing"></div>

<table cellspacing="0">
	<tr class="lines_3">
		<th>
		<div class="left">
			<a href="<?php echo (isset($this->_rootref['U_VIEW_OLDER_TOPIC'])) ? $this->_rootref['U_VIEW_OLDER_TOPIC'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_PREVIOUS_TOPIC'])) ? $this->_rootref['L_VIEW_PREVIOUS_TOPIC'] : ((isset($user->lang['VIEW_PREVIOUS_TOPIC'])) ? $user->lang['VIEW_PREVIOUS_TOPIC'] : '{ VIEW_PREVIOUS_TOPIC }')); ?></a>&nbsp;|&nbsp;<a href="<?php echo (isset($this->_rootref['U_VIEW_NEWER_TOPIC'])) ? $this->_rootref['U_VIEW_NEWER_TOPIC'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NEXT_TOPIC'])) ? $this->_rootref['L_VIEW_NEXT_TOPIC'] : ((isset($user->lang['VIEW_NEXT_TOPIC'])) ? $user->lang['VIEW_NEXT_TOPIC'] : '{ VIEW_NEXT_TOPIC }')); ?></a><br />
			<?php if ($this->_rootref['U_VIEW_UNREAD_POST'] && ! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEW_UNREAD_POST'])) ? $this->_rootref['U_VIEW_UNREAD_POST'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_UNREAD_POST'])) ? $this->_rootref['L_VIEW_UNREAD_POST'] : ((isset($user->lang['VIEW_UNREAD_POST'])) ? $user->lang['VIEW_UNREAD_POST'] : '{ VIEW_UNREAD_POST }')); ?></a><br /><?php } else { ?>&nbsp;<br /><?php } ?>

			<span class="nav"><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a>&nbsp;&nbsp;~&nbsp;&nbsp;<a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></span>
		</div>
		<div class="right">
			<?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br />
			<?php if ($this->_rootref['TOTAL_POSTS']) {  ?>

			<?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?><br />
			<?php } $this->_tpl_include('pagination.html'); ?>

		</div>
		<div class="clear"></div>
		</th>
	</tr>
</table>

<div class="spacing"></div>
<div class="left"><?php if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; } ?></div>
<div class="right"><?php if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  $this->_tpl_include('searchbox.html'); } ?></div>
<div class="spacing"></div>
<?php if (! $this->_rootref['S_IS_BOT']) {  ?>

<div class="left"><?php if ($this->_rootref['S_DISPLAY_POST_INFO']) {  ?><a href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>" alt="<?php echo ((isset($this->_rootref['L_POST_NEW_TOPIC'])) ? $this->_rootref['L_POST_NEW_TOPIC'] : ((isset($user->lang['POST_NEW_TOPIC'])) ? $user->lang['POST_NEW_TOPIC'] : '{ POST_NEW_TOPIC }')); ?>"><?php echo (isset($this->_rootref['POST_IMG'])) ? $this->_rootref['POST_IMG'] : ''; ?></a>&nbsp;&nbsp;<?php } if ($this->_rootref['S_DISPLAY_REPLY_INFO']) {  ?><a href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['REPLY_IMG'])) ? $this->_rootref['REPLY_IMG'] : ''; ?></a><?php } ?></div>
<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>
<div class="spacing"></div>
<?php } ?>


<table>
<tr>
	<td class="txttop"><?php if ($this->_rootref['S_TOPIC_MOD']) {  ?><form method="post" action="<?php echo (isset($this->_rootref['S_MOD_ACTION'])) ? $this->_rootref['S_MOD_ACTION'] : ''; ?>"><?php echo ((isset($this->_rootref['L_QUICK_MOD'])) ? $this->_rootref['L_QUICK_MOD'] : ((isset($user->lang['QUICK_MOD'])) ? $user->lang['QUICK_MOD'] : '{ QUICK_MOD }')); ?>: <?php echo (isset($this->_rootref['S_TOPIC_MOD'])) ? $this->_rootref['S_TOPIC_MOD'] : ''; ?> <input class="button" type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" /></form><?php } ?></div></td>
	<td class="txtright"><?php $_rules_count = (isset($this->_tpldata['rules'])) ? sizeof($this->_tpldata['rules']) : 0;if ($_rules_count) {for ($_rules_i = 0; $_rules_i < $_rules_count; ++$_rules_i){$_rules_val = &$this->_tpldata['rules'][$_rules_i]; echo $_rules_val['RULE']; ?><br /><?php }} ?></td>
</tr>
</table>

<div class="spacing"></div>


<?php if ($this->_rootref['U_MCP']) {  ?>

	<div class="copyright"><a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a></div>
<?php } $this->_tpl_include('overall_footer.html'); ?>