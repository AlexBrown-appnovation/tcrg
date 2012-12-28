<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); if ($this->_rootref['S_DISPLAY_ACTIVE']) {  ?>


<table cellspacing="1" class="viewforum">
	<tr>
		<td colspan="<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>7<?php } else { ?>6<?php } ?>"><h2><?php echo ((isset($this->_rootref['L_ACTIVE_TOPICS'])) ? $this->_rootref['L_ACTIVE_TOPICS'] : ((isset($user->lang['ACTIVE_TOPICS'])) ? $user->lang['ACTIVE_TOPICS'] : '{ ACTIVE_TOPICS }')); ?></h2></td>
	</tr>
	<tr class="toplines"> 
		<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

			<th colspan="3"><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></th>
		<?php } else { ?>

			<th colspan="2"><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></th>
		<?php } ?>

		<th><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></th>
	</tr>
	<tr> 
		<td colspan="6"><h2><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>">&lt;</a>&nbsp;&nbsp;<a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></h2></td>
	</tr>
	<?php $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; ?>


		<tr>
			<td class="row1 one"><?php echo $_topicrow_val['TOPIC_FOLDER_IMG']; ?></td>
			<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

				<td class="row1 one"><?php if ($_topicrow_val['TOPIC_ICON_IMG']) {  ?><img src="<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_topicrow_val['TOPIC_ICON_IMG']; ?>" width="<?php echo $_topicrow_val['TOPIC_ICON_IMG_WIDTH']; ?>" height="<?php echo $_topicrow_val['TOPIC_ICON_IMG_HEIGHT']; ?>" alt="" title="" /><?php } ?></td>
			<?php } ?><!-- FROM HERE NOT YET UPDATED -->

			<td class="row1 two">
				<?php if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?><a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a><?php } ?>

				<?php echo $_topicrow_val['ATTACH_ICON_IMG']; ?> <?php if ($_topicrow_val['S_HAS_POLL'] || $_topicrow_val['S_TOPIC_MOVED']) {  ?><b><?php echo $_topicrow_val['TOPIC_TYPE']; ?></b> <?php } ?><a title="<?php echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>: <?php echo $_topicrow_val['FIRST_POST_TIME']; ?>" href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>"class="topictitle"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a>
				<?php if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED']) {  ?>

					<a href="<?php echo $_topicrow_val['U_MCP_QUEUE']; ?>"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?></a>&nbsp;
				<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?>

					<a href="<?php echo $_topicrow_val['U_MCP_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?></a>&nbsp;
				<?php } if ($_topicrow_val['PAGINATION']) {  ?>

					<br />[ <?php echo (isset($this->_rootref['GOTO_PAGE_IMG'])) ? $this->_rootref['GOTO_PAGE_IMG'] : ''; echo ((isset($this->_rootref['L_GOTO_PAGE'])) ? $this->_rootref['L_GOTO_PAGE'] : ((isset($user->lang['GOTO_PAGE'])) ? $user->lang['GOTO_PAGE'] : '{ GOTO_PAGE }')); ?>: <?php echo $_topicrow_val['PAGINATION']; ?> ]
				<?php } ?>

			</td>

<!-- UNTIL HERE NOT YET UPDATED -->

			<td class="row2 one"><?php echo $_topicrow_val['REPLIES']; ?></td>
			<td class="row2 one"><?php echo $_topicrow_val['TOPIC_AUTHOR_FULL']; ?></td>
			<td class="row2 one"><?php echo $_topicrow_val['VIEWS']; ?></td>
			<td class="row3 three"><?php echo $_topicrow_val['LAST_POST_TIME']; ?><br />
			<?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?> <?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a><?php } ?>

			</td>
		</tr>

	<?php }} else { ?>


		<tr>
			<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

				<td class="row1 txtmiddle pad60" colspan="7"><?php if (! $this->_rootref['S_SORT_DAYS']) {  echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); } else { echo ((isset($this->_rootref['L_NO_TOPICS_TIME_FRAME'])) ? $this->_rootref['L_NO_TOPICS_TIME_FRAME'] : ((isset($user->lang['NO_TOPICS_TIME_FRAME'])) ? $user->lang['NO_TOPICS_TIME_FRAME'] : '{ NO_TOPICS_TIME_FRAME }')); } ?></td>
			<?php } else { ?>

				<td class="row1 txtmiddle pad60" colspan="6"><?php if (! $this->_rootref['S_SORT_DAYS']) {  echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); } else { echo ((isset($this->_rootref['L_NO_TOPICS_TIME_FRAME'])) ? $this->_rootref['L_NO_TOPICS_TIME_FRAME'] : ((isset($user->lang['NO_TOPICS_TIME_FRAME'])) ? $user->lang['NO_TOPICS_TIME_FRAME'] : '{ NO_TOPICS_TIME_FRAME }')); } ?></td>
			<?php } ?>

		</tr>
	<?php } ?>

<!--------------- FROM HERE NOT YET UPDATED -->
	<tr align="center">
		<td colspan="<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>7<?php } else { ?>6<?php } ?>">&nbsp;</td>
	</tr>
	</table>

<?php } if ($this->_rootref['S_HAS_SUBFORUM']) {  $this->_tpl_include('forumlist_body.html'); } ?>


<!--------------- UNTIL HERE NOT YET UPDATED -->

<?php if ($this->_rootref['S_NO_READ_ACCESS']) {  ?>

	<table cellspacing="1" class="viewforum">
	<tr>
		<td class="row1 txtmiddle pad60"><?php echo ((isset($this->_rootref['L_NO_READ_ACCESS'])) ? $this->_rootref['L_NO_READ_ACCESS'] : ((isset($user->lang['NO_READ_ACCESS'])) ? $user->lang['NO_READ_ACCESS'] : '{ NO_READ_ACCESS }')); ?></td>
	</tr>
	</table>

	<?php if (! $this->_rootref['S_USER_LOGGED_IN']) {  ?>


		<form method="post" action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>">

		<table width="100%" cellspacing="1">
		<tr>
			<td><h2><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a></h2></td>
		</tr>
		<tr>
			<td class="row1 txtcenter pad4"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>: <input class="post" type="text" name="username" size="10" />&nbsp; <?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>: <input class="post" type="password" name="password" size="10" /><?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?>&nbsp; <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?> <input type="checkbox" class="radio" name="autologin" /><?php } ?>&nbsp; <input type="submit" class="button" name="login" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" /></td>
		</tr>
		</table>
		
		</form>

	<?php } } if (! $this->_rootref['S_DISPLAY_ACTIVE'] && ( $this->_rootref['S_IS_POSTABLE'] || sizeof($this->_tpldata['topicrow']) )) {  ?>

		<table cellspacing="1" class="viewforum">
		<tr class="toplines">
			<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

				<th colspan="3"><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></th>
			<?php } else { ?>

				<th colspan="2"><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></th>
			<?php } ?>

			<th><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></th>
		</tr>
		<tr> 
			<td colspan="<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>7<?php } else { ?>6<?php } ?>"><h2><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>">&lt;</a>&nbsp;&nbsp;<a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></h2></td>
		</tr>
		<?php if ($this->_rootref['S_FORUM_RULES']) {  ?>

		<tr>
			<td colspan="<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>7<?php } else { ?>6<?php } ?>" class="forumrules">
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
			<td><div class="spacing"></div></td>
		</tr>
		<?php } $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; if ($_topicrow_val['S_TOPIC_TYPE_SWITCH'] == (1)) {  ?>

				<tr>
					<td colspan="<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>7<?php } else { ?>6<?php } ?>"><h2><?php echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); ?></h2></td>
				</tr>
			<?php } else if ($_topicrow_val['S_TOPIC_TYPE_SWITCH'] == 0) {  ?>

				<tr>
					<td colspan="<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>7<?php } else { ?>6<?php } ?>"><h2><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></h2></td>
				</tr>
			<?php } ?>

			<tr>
				<td class="row1 one"><?php echo $_topicrow_val['TOPIC_FOLDER_IMG']; ?></td>
				<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

					<td class="row1 one"><?php if ($_topicrow_val['TOPIC_ICON_IMG']) {  ?><img src="<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_topicrow_val['TOPIC_ICON_IMG']; ?>" width="<?php echo $_topicrow_val['TOPIC_ICON_IMG_WIDTH']; ?>" height="<?php echo $_topicrow_val['TOPIC_ICON_IMG_HEIGHT']; ?>" alt="" title="" /><?php } else { ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?></td>
				<?php } ?>

				<td class="row1 two"
				onmouseover="this.style.backgroundColor='#EBEBEB'; this.style.cursor='pointer'"
				onmouseout="this.style.backgroundColor=''"
				onclick="window.location.href='<?php echo $_topicrow_val['U_NEWEST_POST']; ?>'">
					<?php if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?><a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a><?php } ?>

					<?php echo $_topicrow_val['ATTACH_ICON_IMG']; ?> <?php if ($_topicrow_val['S_HAS_POLL'] || $_topicrow_val['S_TOPIC_MOVED']) {  ?><b><?php echo $_topicrow_val['TOPIC_TYPE']; ?></b> <?php } ?><span class="blacklink"><a title="<?php echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>: <?php echo $_topicrow_val['FIRST_POST_TIME']; ?>" href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a></span>
					<?php if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED']) {  ?>

						</br /><a href="<?php echo $_topicrow_val['U_MCP_QUEUE']; ?>"><?php echo $_topicrow_val['UNAPPROVED_IMG']; ?></a>&nbsp;
					<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?>

						</br /><a href="<?php echo $_topicrow_val['U_MCP_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?></a>&nbsp;
					<?php } if ($_topicrow_val['PAGINATION']) {  ?>

						<br />[ <?php echo (isset($this->_rootref['GOTO_PAGE_IMG'])) ? $this->_rootref['GOTO_PAGE_IMG'] : ''; echo ((isset($this->_rootref['L_GOTO_PAGE'])) ? $this->_rootref['L_GOTO_PAGE'] : ((isset($user->lang['GOTO_PAGE'])) ? $user->lang['GOTO_PAGE'] : '{ GOTO_PAGE }')); ?>: <?php echo $_topicrow_val['PAGINATION']; ?> ]
					<?php } ?>

				</td>
				<td class="row2 one"><?php echo $_topicrow_val['REPLIES']; ?></td>
				<td class="row2 one"><?php echo $_topicrow_val['TOPIC_AUTHOR_FULL']; ?></td>
				<td class="row2 one"><?php echo $_topicrow_val['VIEWS']; ?></td>
				<td class="row3 three"><?php echo $_topicrow_val['LAST_POST_TIME']; ?><br />
				<?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?> <?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a><?php } ?>

				</td>
			</tr>

		<?php }} else { if ($this->_rootref['S_IS_POSTABLE']) {  ?>

			<tr>
				<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

					<td class="row1 txtmiddle pad60" colspan="7"><?php if (! $this->_rootref['S_SORT_DAYS']) {  echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); } else { echo ((isset($this->_rootref['L_NO_TOPICS_TIME_FRAME'])) ? $this->_rootref['L_NO_TOPICS_TIME_FRAME'] : ((isset($user->lang['NO_TOPICS_TIME_FRAME'])) ? $user->lang['NO_TOPICS_TIME_FRAME'] : '{ NO_TOPICS_TIME_FRAME }')); } ?></td>
				<?php } else { ?>

					<td class="row1 txtmiddle pad60" colspan="6"><?php if (! $this->_rootref['S_SORT_DAYS']) {  echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); } else { echo ((isset($this->_rootref['L_NO_TOPICS_TIME_FRAME'])) ? $this->_rootref['L_NO_TOPICS_TIME_FRAME'] : ((isset($user->lang['NO_TOPICS_TIME_FRAME'])) ? $user->lang['NO_TOPICS_TIME_FRAME'] : '{ NO_TOPICS_TIME_FRAME }')); } ?></td>
				<?php } ?>

			</tr>
			<?php } } if (! $this->_rootref['S_IS_BOT']) {  ?>

		<tr>
			<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?>

				<td class="row3 pad4 txtright" colspan="7">
			<?php } else { ?>

				<td class="row3 pad4 txtright" colspan="6">
			<?php } ?>

					<form method="post" action="<?php echo (isset($this->_rootref['S_FORUM_ACTION'])) ? $this->_rootref['S_FORUM_ACTION'] : ''; ?>"><?php echo ((isset($this->_rootref['L_DISPLAY_TOPICS'])) ? $this->_rootref['L_DISPLAY_TOPICS'] : ((isset($user->lang['DISPLAY_TOPICS'])) ? $user->lang['DISPLAY_TOPICS'] : '{ DISPLAY_TOPICS }')); ?>:&nbsp;<?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>&nbsp;<?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>&nbsp;<input type="submit" class="button" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" /></form>
				</td>
		</tr>
		<?php } ?>

		</table>
		
		<div class="timezone left"><a href="<?php echo (isset($this->_rootref['U_MARK_TOPICS'])) ? $this->_rootref['U_MARK_TOPICS'] : ''; ?>" accesskey="m"><?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?></a>&nbsp;&nbsp;&nbsp;<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_WATCH_FORUM_LINK']) {  if ($this->_rootref['S_WATCHING_FORUM']) {  ?><a href="<?php echo (isset($this->_rootref['S_WATCH_FORUM_LINK'])) ? $this->_rootref['S_WATCH_FORUM_LINK'] : ''; ?>" title="<?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?>"><?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?></a><?php } else { ?><a href="<?php echo (isset($this->_rootref['S_WATCH_FORUM_LINK'])) ? $this->_rootref['S_WATCH_FORUM_LINK'] : ''; ?>" title="<?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?>"><?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?></a><?php } } } ?></div>
		<div class="timezone right"><?php echo (isset($this->_rootref['S_TIMEZONE'])) ? $this->_rootref['S_TIMEZONE'] : ''; ?></div>
		<div class="spacing"></div>
		
		<table cellspacing="0">
			<tr class="lines_3">
				<th>
				<div class="left">
					<?php if ($this->_rootref['MODERATORS']) {  if ($this->_rootref['S_SINGLE_MODERATOR']) {  echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); } else { echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); } ?>: <?php echo (isset($this->_rootref['MODERATORS'])) ? $this->_rootref['MODERATORS'] : ''; ?><br /><?php } else { ?>&nbsp;<br /><?php } if ($this->_rootref['PAGINATION']) {  ?>&nbsp;<br /><?php } ?>

					<span class="nav"><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a>&nbsp;&nbsp;~&nbsp;&nbsp;<a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></span>
				</div>
				<div class="right">
					<?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?><br />
					<?php if ($this->_rootref['S_DISPLAY_POST_INFO'] || $this->_rootref['TOTAL_TOPICS']) {  if ($this->_rootref['TOTAL_TOPICS']) {  echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?><br /><?php } } $this->_tpl_include('pagination.html'); ?>

				</div>
				</th>
			</tr>
		</table>
		<div class="spacing"></div>
		<div class="left"><?php if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; } ?></div>
		<div class="right"><?php if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  $this->_tpl_include('searchbox.html'); } ?></div>
		<div class="spacing"></div>
		<div class="left"><a href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>" alt="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['POST_IMG'])) ? $this->_rootref['POST_IMG'] : ''; ?></a></div>
		<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>
		<div class="spacing"></div>
	<?php } ?>

<div class="spacing"></div>

<?php if ($this->_rootref['S_DISPLAY_POST_INFO']) {  ?>


<table cellspacing="0">
	<tr> 
		<td>
			<table cellspacing="3" class="forumicons">
				<tr> 
					<td><?php echo (isset($this->_rootref['FOLDER_NEW_IMG'])) ? $this->_rootref['FOLDER_NEW_IMG'] : ''; ?></td>
					<td><?php echo ((isset($this->_rootref['L_NEW_POSTS'])) ? $this->_rootref['L_NEW_POSTS'] : ((isset($user->lang['NEW_POSTS'])) ? $user->lang['NEW_POSTS'] : '{ NEW_POSTS }')); ?></td>
					<td>&nbsp;&nbsp;</td>
					<td><?php echo (isset($this->_rootref['FOLDER_ANNOUNCE_NEW_IMG'])) ? $this->_rootref['FOLDER_ANNOUNCE_NEW_IMG'] : ''; ?></td>
					<td><?php echo ((isset($this->_rootref['L_ICON_ANNOUNCEMENT'])) ? $this->_rootref['L_ICON_ANNOUNCEMENT'] : ((isset($user->lang['ICON_ANNOUNCEMENT'])) ? $user->lang['ICON_ANNOUNCEMENT'] : '{ ICON_ANNOUNCEMENT }')); ?></td>
				</tr>
				<tr> 
					<td><?php echo (isset($this->_rootref['FOLDER_LOCKED_NEW_IMG'])) ? $this->_rootref['FOLDER_LOCKED_NEW_IMG'] : ''; ?></td>
					<td><?php echo ((isset($this->_rootref['L_NEW_POSTS_LOCKED'])) ? $this->_rootref['L_NEW_POSTS_LOCKED'] : ((isset($user->lang['NEW_POSTS_LOCKED'])) ? $user->lang['NEW_POSTS_LOCKED'] : '{ NEW_POSTS_LOCKED }')); ?></td>
					<td>&nbsp;&nbsp;</td>
					<td><?php echo (isset($this->_rootref['FOLDER_STICKY_NEW_IMG'])) ? $this->_rootref['FOLDER_STICKY_NEW_IMG'] : ''; ?></td>
					<td><?php echo ((isset($this->_rootref['L_ICON_STICKY'])) ? $this->_rootref['L_ICON_STICKY'] : ((isset($user->lang['ICON_STICKY'])) ? $user->lang['ICON_STICKY'] : '{ ICON_STICKY }')); ?></td>
				</tr>
				<tr> 
					<td><?php echo (isset($this->_rootref['FOLDER_LOCKED_IMG'])) ? $this->_rootref['FOLDER_LOCKED_IMG'] : ''; ?></td>
					<td><?php echo ((isset($this->_rootref['L_NO_NEW_POSTS_LOCKED'])) ? $this->_rootref['L_NO_NEW_POSTS_LOCKED'] : ((isset($user->lang['NO_NEW_POSTS_LOCKED'])) ? $user->lang['NO_NEW_POSTS_LOCKED'] : '{ NO_NEW_POSTS_LOCKED }')); ?></td>
					<td>&nbsp;&nbsp;</td>
				</tr>
			</table>
		</td>
		<td class="txtright">
			<?php $_rules_count = (isset($this->_tpldata['rules'])) ? sizeof($this->_tpldata['rules']) : 0;if ($_rules_count) {for ($_rules_i = 0; $_rules_i < $_rules_count; ++$_rules_i){$_rules_val = &$this->_tpldata['rules'][$_rules_i]; echo $_rules_val['RULE']; ?><br /><?php }} ?>

		</td>
	</tr>
</table>

<?php } if ($this->_rootref['S_IS_POSTABLE'] || $this->_rootref['S_NO_READ_ACCESS']) {  if ($this->_rootref['U_MCP']) {  ?>

	<div class="copyright"><a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a></div>
	<?php } } $this->_tpl_include('overall_footer.html'); ?>