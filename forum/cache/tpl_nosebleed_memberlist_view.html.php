<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<form method="post" action="<?php echo (isset($this->_rootref['S_PROFILE_ACTION'])) ? $this->_rootref['S_PROFILE_ACTION'] : ''; ?>">

<table class="profile" cellspacing="1">
<tr class="toplines">
	<th colspan="2" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_VIEWING_PROFILE'])) ? $this->_rootref['L_VIEWING_PROFILE'] : ((isset($user->lang['VIEWING_PROFILE'])) ? $user->lang['VIEWING_PROFILE'] : '{ VIEWING_PROFILE }')); ?></th>
</tr>
<tr>
	<td width="40%"><h2><?php echo ((isset($this->_rootref['L_USER_PRESENCE'])) ? $this->_rootref['L_USER_PRESENCE'] : ((isset($user->lang['USER_PRESENCE'])) ? $user->lang['USER_PRESENCE'] : '{ USER_PRESENCE }')); ?></h2></td>
	<td width="60%"><h2><?php echo ((isset($this->_rootref['L_USER_FORUM'])) ? $this->_rootref['L_USER_FORUM'] : ((isset($user->lang['USER_FORUM'])) ? $user->lang['USER_FORUM'] : '{ USER_FORUM }')); ?></h2></td>
</tr>
<tr>
	<td class="row1 txtcenter pad4">

		<table cellspacing="1" cellpadding="2" border="0">
		<?php if ($this->_rootref['S_USER_INACTIVE']) {  ?>

		<tr>
			<td align="center" style="color: red;"><b><?php echo ((isset($this->_rootref['L_USER_IS_INACTIVE'])) ? $this->_rootref['L_USER_IS_INACTIVE'] : ((isset($user->lang['USER_IS_INACTIVE'])) ? $user->lang['USER_IS_INACTIVE'] : '{ USER_IS_INACTIVE }')); ?></b><br /><?php echo ((isset($this->_rootref['L_INACTIVE_REASON'])) ? $this->_rootref['L_INACTIVE_REASON'] : ((isset($user->lang['INACTIVE_REASON'])) ? $user->lang['INACTIVE_REASON'] : '{ INACTIVE_REASON }')); ?>: <?php echo (isset($this->_rootref['USER_INACTIVE_REASON'])) ? $this->_rootref['USER_INACTIVE_REASON'] : ''; ?><br /><br /></td>
		</tr>
		<?php } ?>

		<tr>
			<td class="txtcenter"><?php if ($this->_rootref['USER_COLOR']) {  ?><b style="color: <?php echo (isset($this->_rootref['USER_COLOR'])) ? $this->_rootref['USER_COLOR'] : ''; ?>"><?php } else { ?><b><?php } echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></b><?php if ($this->_rootref['U_USER_BAN']) {  ?><br />[ <a href="<?php echo (isset($this->_rootref['U_USER_BAN'])) ? $this->_rootref['U_USER_BAN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USER_BAN'])) ? $this->_rootref['L_USER_BAN'] : ((isset($user->lang['USER_BAN'])) ? $user->lang['USER_BAN'] : '{ USER_BAN }')); ?></a> ]<?php } if ($this->_rootref['U_USER_ADMIN']) {  ?><br />[ <a href="<?php echo (isset($this->_rootref['U_USER_ADMIN'])) ? $this->_rootref['U_USER_ADMIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USER_ADMIN'])) ? $this->_rootref['L_USER_ADMIN'] : ((isset($user->lang['USER_ADMIN'])) ? $user->lang['USER_ADMIN'] : '{ USER_ADMIN }')); ?></a> ]<?php } ?></td>
		</tr>
		<?php if ($this->_rootref['RANK_TITLE']) {  ?>

			<tr>
				<td class="txtcenter"><?php echo (isset($this->_rootref['RANK_TITLE'])) ? $this->_rootref['RANK_TITLE'] : ''; ?></td>
			</tr>
		<?php } if ($this->_rootref['RANK_IMG']) {  ?>

			<tr>
				<td class="txtcenter"><?php echo (isset($this->_rootref['RANK_IMG'])) ? $this->_rootref['RANK_IMG'] : ''; ?></td>
			</tr>
		<?php } ?>

			<tr>
				<td class="txtcenter"><?php if ($this->_rootref['AVATAR_IMG']) {  echo (isset($this->_rootref['AVATAR_IMG'])) ? $this->_rootref['AVATAR_IMG'] : ''; } else { ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/ava.gif" width="90" height="90" alt="Default avatar" /><?php } ?></td>
			</tr>
		<?php if ($this->_rootref['ONLINE_IMG']) {  ?>

		<tr>
			<td class="txtcenter"><?php echo (isset($this->_rootref['ONLINE_IMG'])) ? $this->_rootref['ONLINE_IMG'] : ''; ?></td>
		</tr>
		<?php } if ($this->_rootref['U_SWITCH_PERMISSIONS']) {  ?>

			<tr>
				<td class="txtcenter">[ <a href="<?php echo (isset($this->_rootref['U_SWITCH_PERMISSIONS'])) ? $this->_rootref['U_SWITCH_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USE_PERMISSIONS'])) ? $this->_rootref['L_USE_PERMISSIONS'] : ((isset($user->lang['USE_PERMISSIONS'])) ? $user->lang['USE_PERMISSIONS'] : '{ USE_PERMISSIONS }')); ?></a> ]</td>
			</tr>
		<?php } if ($this->_rootref['S_USER_LOGGED_IN'] && $this->_rootref['S_ZEBRA']) {  ?>

			<tr>
				<td class="txtcenter">[ <?php if ($this->_rootref['U_ADD_FRIEND'] && $this->_rootref['U_ADD_FOE']) {  ?><a href="<?php echo (isset($this->_rootref['U_ADD_FRIEND'])) ? $this->_rootref['U_ADD_FRIEND'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ADD_FRIEND'])) ? $this->_rootref['L_ADD_FRIEND'] : ((isset($user->lang['ADD_FRIEND'])) ? $user->lang['ADD_FRIEND'] : '{ ADD_FRIEND }')); ?></a> | <a href="<?php echo (isset($this->_rootref['U_ADD_FOE'])) ? $this->_rootref['U_ADD_FOE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ADD_FOE'])) ? $this->_rootref['L_ADD_FOE'] : ((isset($user->lang['ADD_FOE'])) ? $user->lang['ADD_FOE'] : '{ ADD_FOE }')); ?></a><?php } if ($this->_rootref['U_REMOVE_FRIEND']) {  ?><a href="<?php echo (isset($this->_rootref['U_REMOVE_FRIEND'])) ? $this->_rootref['U_REMOVE_FRIEND'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REMOVE_FRIEND'])) ? $this->_rootref['L_REMOVE_FRIEND'] : ((isset($user->lang['REMOVE_FRIEND'])) ? $user->lang['REMOVE_FRIEND'] : '{ REMOVE_FRIEND }')); ?></a><?php } if ($this->_rootref['U_REMOVE_FOE']) {  ?><a href="<?php echo (isset($this->_rootref['U_REMOVE_FOE'])) ? $this->_rootref['U_REMOVE_FOE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REMOVE_FOE'])) ? $this->_rootref['L_REMOVE_FOE'] : ((isset($user->lang['REMOVE_FOE'])) ? $user->lang['REMOVE_FOE'] : '{ REMOVE_FOE }')); ?></a><?php } ?> ]</td>
			</tr>
		<?php } ?>

		</table>
	</td>
	<td class="row1 pad4">
		<table cellspacing="3" cellpadding="2" border="0" class="profile_view_body">
		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>: </td>
			<td width="100%"><?php echo (isset($this->_rootref['JOINED'])) ? $this->_rootref['JOINED'] : ''; ?></td>
		</tr>
		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_VISITED'])) ? $this->_rootref['L_VISITED'] : ((isset($user->lang['VISITED'])) ? $user->lang['VISITED'] : '{ VISITED }')); ?>: </td>
			<td width="100%"><?php echo (isset($this->_rootref['VISITED'])) ? $this->_rootref['VISITED'] : ''; ?></td>
		</tr>
		<?php if ($this->_rootref['U_NOTES'] || $this->_rootref['U_WARN']) {  ?>

			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_WARNINGS'])) ? $this->_rootref['L_WARNINGS'] : ((isset($user->lang['WARNINGS'])) ? $user->lang['WARNINGS'] : '{ WARNINGS }')); ?>: </td>
				<td width="100%"><?php echo (isset($this->_rootref['WARNINGS'])) ? $this->_rootref['WARNINGS'] : ''; ?>&nbsp;&nbsp;[ <a href="<?php echo (isset($this->_rootref['U_NOTES'])) ? $this->_rootref['U_NOTES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?></a> <?php if ($this->_rootref['U_WARN']) {  ?> | <a href="<?php echo (isset($this->_rootref['U_WARN'])) ? $this->_rootref['U_WARN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?></a> <?php } ?>]</td>
			</tr>
		<?php } ?>

		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_TOTAL_POSTS'])) ? $this->_rootref['L_TOTAL_POSTS'] : ((isset($user->lang['TOTAL_POSTS'])) ? $user->lang['TOTAL_POSTS'] : '{ TOTAL_POSTS }')); ?>: </td>
			<td><?php echo (isset($this->_rootref['POSTS'])) ? $this->_rootref['POSTS'] : ''; if ($this->_rootref['POSTS_PCT']) {  ?>&nbsp;&nbsp;[<?php echo (isset($this->_rootref['POSTS_PCT'])) ? $this->_rootref['POSTS_PCT'] : ''; ?> / <?php echo (isset($this->_rootref['POSTS_DAY'])) ? $this->_rootref['POSTS_DAY'] : ''; ?>]<?php } if ($this->_rootref['POSTS_IN_QUEUE'] && $this->_rootref['U_MCP_QUEUE']) {  ?><br />[<a href="<?php echo (isset($this->_rootref['U_MCP_QUEUE'])) ? $this->_rootref['U_MCP_QUEUE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POSTS_IN_QUEUE'])) ? $this->_rootref['L_POSTS_IN_QUEUE'] : ((isset($user->lang['POSTS_IN_QUEUE'])) ? $user->lang['POSTS_IN_QUEUE'] : '{ POSTS_IN_QUEUE }')); ?></a>]<?php } else if ($this->_rootref['POSTS_IN_QUEUE']) {  ?><br />[<?php echo ((isset($this->_rootref['L_POSTS_IN_QUEUE'])) ? $this->_rootref['L_POSTS_IN_QUEUE'] : ((isset($user->lang['POSTS_IN_QUEUE'])) ? $user->lang['POSTS_IN_QUEUE'] : '{ POSTS_IN_QUEUE }')); ?>]<?php } ?><br /><a href="<?php echo (isset($this->_rootref['U_SEARCH_USER'])) ? $this->_rootref['U_SEARCH_USER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_USER_POSTS'])) ? $this->_rootref['L_SEARCH_USER_POSTS'] : ((isset($user->lang['SEARCH_USER_POSTS'])) ? $user->lang['SEARCH_USER_POSTS'] : '{ SEARCH_USER_POSTS }')); ?></a></td>
		</tr>
		<?php if ($this->_rootref['S_SHOW_ACTIVITY']) {  ?>

			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_ACTIVE_IN_FORUM'])) ? $this->_rootref['L_ACTIVE_IN_FORUM'] : ((isset($user->lang['ACTIVE_IN_FORUM'])) ? $user->lang['ACTIVE_IN_FORUM'] : '{ ACTIVE_IN_FORUM }')); ?>: </td>
				<td><?php if ($this->_rootref['ACTIVE_FORUM']) {  ?><a href="<?php echo (isset($this->_rootref['U_ACTIVE_FORUM'])) ? $this->_rootref['U_ACTIVE_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_FORUM'])) ? $this->_rootref['ACTIVE_FORUM'] : ''; ?></a><br />[ <?php echo (isset($this->_rootref['ACTIVE_FORUM_POSTS'])) ? $this->_rootref['ACTIVE_FORUM_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_FORUM_PCT'])) ? $this->_rootref['ACTIVE_FORUM_PCT'] : ''; ?> ]<?php } else { ?>-<?php } ?></td>
			</tr>
			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_ACTIVE_IN_TOPIC'])) ? $this->_rootref['L_ACTIVE_IN_TOPIC'] : ((isset($user->lang['ACTIVE_IN_TOPIC'])) ? $user->lang['ACTIVE_IN_TOPIC'] : '{ ACTIVE_IN_TOPIC }')); ?>: </td>
				<td><?php if ($this->_rootref['ACTIVE_TOPIC']) {  ?><a  href="<?php echo (isset($this->_rootref['U_ACTIVE_TOPIC'])) ? $this->_rootref['U_ACTIVE_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_TOPIC'])) ? $this->_rootref['ACTIVE_TOPIC'] : ''; ?></a><br />[ <?php echo (isset($this->_rootref['ACTIVE_TOPIC_POSTS'])) ? $this->_rootref['ACTIVE_TOPIC_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_TOPIC_PCT'])) ? $this->_rootref['ACTIVE_TOPIC_PCT'] : ''; ?> ]<?php } else { ?>-<?php } ?></td>
			</tr>
		<?php } ?>

		</table>
	</td>
</tr>
<tr>
	<td><h2><?php echo ((isset($this->_rootref['L_CONTACT_USER'])) ? $this->_rootref['L_CONTACT_USER'] : ((isset($user->lang['CONTACT_USER'])) ? $user->lang['CONTACT_USER'] : '{ CONTACT_USER }')); ?></h2></td>
	<td><h2><?php echo ((isset($this->_rootref['L_ABOUT_USER'])) ? $this->_rootref['L_ABOUT_USER'] : ((isset($user->lang['ABOUT_USER'])) ? $user->lang['ABOUT_USER'] : '{ ABOUT_USER }')); ?></h2></td>
</tr>
<tr>
	<td class="row1 pad4">
		<table cellspacing="3" cellpadding="2" border="0"  class="profile_view_body">
		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_EMAIL_ADDRESS'])) ? $this->_rootref['L_EMAIL_ADDRESS'] : ((isset($user->lang['EMAIL_ADDRESS'])) ? $user->lang['EMAIL_ADDRESS'] : '{ EMAIL_ADDRESS }')); ?>: </td>
			<td width="100%"><?php if ($this->_rootref['U_EMAIL']) {  ?><a href="<?php echo (isset($this->_rootref['U_EMAIL'])) ? $this->_rootref['U_EMAIL'] : ''; ?>"><?php echo (isset($this->_rootref['EMAIL_IMG'])) ? $this->_rootref['EMAIL_IMG'] : ''; ?></a><?php } ?></td>
		</tr>
		<?php if ($this->_rootref['U_PM']) {  ?>

			<tr>
				<td nowrap="nowrap" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PM'])) ? $this->_rootref['L_PM'] : ((isset($user->lang['PM'])) ? $user->lang['PM'] : '{ PM }')); ?>: </td>
				<td><a href="<?php echo (isset($this->_rootref['U_PM'])) ? $this->_rootref['U_PM'] : ''; ?>"><?php echo (isset($this->_rootref['PM_IMG'])) ? $this->_rootref['PM_IMG'] : ''; ?></a></td>
			</tr>
		<?php } ?>

		<tr>
			<td nowrap="nowrap" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MSNM'])) ? $this->_rootref['L_MSNM'] : ((isset($user->lang['MSNM'])) ? $user->lang['MSNM'] : '{ MSNM }')); ?>: </td>
			<td><?php if ($this->_rootref['U_MSN']) {  ?><a href="<?php echo (isset($this->_rootref['U_MSN'])) ? $this->_rootref['U_MSN'] : ''; ?>" onclick="popup(this.href, 550, 320); return false"><?php echo (isset($this->_rootref['MSN_IMG'])) ? $this->_rootref['MSN_IMG'] : ''; ?></a><?php } else if ($this->_rootref['USER_MSN']) {  echo (isset($this->_rootref['USER_MSN'])) ? $this->_rootref['USER_MSN'] : ''; } ?></td>
		</tr>
		<tr>
			<td nowrap="nowrap" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?>: </td>
			<td><?php if ($this->_rootref['U_YIM']) {  ?><a href="<?php echo (isset($this->_rootref['U_YIM'])) ? $this->_rootref['U_YIM'] : ''; ?>" onclick="popup(this.href, 780, 550); return false"><?php echo (isset($this->_rootref['YIM_IMG'])) ? $this->_rootref['YIM_IMG'] : ''; ?></a><?php } else if ($this->_rootref['USER_YIM']) {  echo (isset($this->_rootref['USER_YIM'])) ? $this->_rootref['USER_YIM'] : ''; } ?></td>
		</tr>
		<tr>
			<td nowrap="nowrap" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?>: </td>
			<td><?php if ($this->_rootref['U_AIM']) {  ?><a href="<?php echo (isset($this->_rootref['U_AIM'])) ? $this->_rootref['U_AIM'] : ''; ?>" onclick="popup(this.href, 550, 320); return false"><?php echo (isset($this->_rootref['AIM_IMG'])) ? $this->_rootref['AIM_IMG'] : ''; ?></a><?php } else if ($this->_rootref['USER_AIM']) {  echo (isset($this->_rootref['USER_AIM'])) ? $this->_rootref['USER_AIM'] : ''; } ?></td>
		</tr>
		<tr>
			<td nowrap="nowrap" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?>: </td>
			<td><?php if ($this->_rootref['U_ICQ']) {  ?><a href="<?php echo (isset($this->_rootref['U_ICQ'])) ? $this->_rootref['U_ICQ'] : ''; ?>" onclick="popup(this.href, 550, 320); return false"><?php echo (isset($this->_rootref['ICQ_IMG'])) ? $this->_rootref['ICQ_IMG'] : ''; ?></a><?php } else if ($this->_rootref['USER_ICQ']) {  echo (isset($this->_rootref['USER_ICQ'])) ? $this->_rootref['USER_ICQ'] : ''; } ?></td>
		</tr>
		<tr>
			<td nowrap="nowrap" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><span style="text-transform:uppercase;"><?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?>:</span> </td>
			<td><?php if ($this->_rootref['U_JABBER'] && $this->_rootref['S_JABBER_ENABLED']) {  ?><a href="<?php echo (isset($this->_rootref['U_JABBER'])) ? $this->_rootref['U_JABBER'] : ''; ?>" onclick="popup(this.href, 550, 320); return false"><?php echo (isset($this->_rootref['JABBER_IMG'])) ? $this->_rootref['JABBER_IMG'] : ''; ?></a><?php } else if ($this->_rootref['USER_JABBER']) {  echo (isset($this->_rootref['USER_JABBER_IMG'])) ? $this->_rootref['USER_JABBER_IMG'] : ''; } ?></td>
		</tr>
		</table>
	</td>
	<td class="row1 pad4">
		<table cellspacing="3" cellpadding="2" border="0"  class="profile_view_body">
		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_USERGROUPS'])) ? $this->_rootref['L_USERGROUPS'] : ((isset($user->lang['USERGROUPS'])) ? $user->lang['USERGROUPS'] : '{ USERGROUPS }')); ?>: </td>
			<td><select name="g"><?php echo (isset($this->_rootref['S_GROUP_OPTIONS'])) ? $this->_rootref['S_GROUP_OPTIONS'] : ''; ?></select> <input class="button" type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" /></td>
		</tr>
		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>: </td>
			<td><?php if ($this->_rootref['LOCATION']) {  echo (isset($this->_rootref['LOCATION'])) ? $this->_rootref['LOCATION'] : ''; } ?></td>
		</tr>
		<?php if ($this->_rootref['AGE']) {  ?>

		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_AGE'])) ? $this->_rootref['L_AGE'] : ((isset($user->lang['AGE'])) ? $user->lang['AGE'] : '{ AGE }')); ?>: </td>
			<td><?php if ($this->_rootref['AGE']) {  echo (isset($this->_rootref['AGE'])) ? $this->_rootref['AGE'] : ''; } else { ?> - <?php } ?></td>
		</tr>
		<?php } ?>

		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_OCCUPATION'])) ? $this->_rootref['L_OCCUPATION'] : ((isset($user->lang['OCCUPATION'])) ? $user->lang['OCCUPATION'] : '{ OCCUPATION }')); ?>: </td>
			<td><?php if ($this->_rootref['OCCUPATION']) {  echo (isset($this->_rootref['OCCUPATION'])) ? $this->_rootref['OCCUPATION'] : ''; } ?></td>
		</tr>
		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_INTERESTS'])) ? $this->_rootref['L_INTERESTS'] : ((isset($user->lang['INTERESTS'])) ? $user->lang['INTERESTS'] : '{ INTERESTS }')); ?>: </td>
			<td><?php if ($this->_rootref['INTERESTS']) {  echo (isset($this->_rootref['INTERESTS'])) ? $this->_rootref['INTERESTS'] : ''; } ?></td>
		</tr>
		<tr>
			<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_WEBSITE'])) ? $this->_rootref['L_WEBSITE'] : ((isset($user->lang['WEBSITE'])) ? $user->lang['WEBSITE'] : '{ WEBSITE }')); ?>: </td>
			<td><?php if ($this->_rootref['U_WWW']) {  ?><a href="<?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?>"><?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?></a><?php } ?></td>
		</tr>
		<?php if ($this->_rootref['S_PROFILE_FIELD1']) {  ?><!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo (isset($this->_rootref['PROFILE_FIELD1_NAME'])) ? $this->_rootref['PROFILE_FIELD1_NAME'] : ''; ?>: </td>
				<td><?php echo (isset($this->_rootref['PROFILE_FIELD1_VALUE'])) ? $this->_rootref['PROFILE_FIELD1_VALUE'] : ''; ?></td>
			</tr>
		<?php } $_custom_fields_count = (isset($this->_tpldata['custom_fields'])) ? sizeof($this->_tpldata['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$this->_tpldata['custom_fields'][$_custom_fields_i]; ?>

			<tr>
				<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?>: </td>
				<td><?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?></td>
			</tr>
		<?php }} ?>

		</table>
	</td>
</tr>
<?php if ($this->_rootref['SIGNATURE']) {  ?>

	<tr>
		<td colspan="2" class="txtcenter"><h2><?php echo ((isset($this->_rootref['L_SIGNATURE'])) ? $this->_rootref['L_SIGNATURE'] : ((isset($user->lang['SIGNATURE'])) ? $user->lang['SIGNATURE'] : '{ SIGNATURE }')); ?></h2></td>
	</tr>
	<tr>
		<td class="row1 pad10" colspan="2"><?php echo (isset($this->_rootref['SIGNATURE'])) ? $this->_rootref['SIGNATURE'] : ''; ?></td>
	</tr>
<?php } ?>

</table>

</form>


<?php $this->_tpl_include('breadcrumbs.html'); ?>


<div class="spacing"></div>

<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>

<?php $this->_tpl_include('overall_footer.html'); ?>