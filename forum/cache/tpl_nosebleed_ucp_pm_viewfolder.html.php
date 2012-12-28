<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<h2><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h2>

<?php if ($this->_rootref['S_PM_ICONS']) {  $this->_tpldata['DEFINE']['.']['COLSPAN'] = 6; } else { $this->_tpldata['DEFINE']['.']['COLSPAN'] = 5; } ?>


<form name="viewfolder" method="post" action="<?php echo (isset($this->_rootref['S_PM_ACTION'])) ? $this->_rootref['S_PM_ACTION'] : ''; ?>" style="margin:0px">

<?php if ($this->_rootref['PROMPT']) {  ?>

	<table class="viewforum" width="100%" cellspacing="1" cellpadding="0" border="0">
	<tr>
		<th colspan="2" valign="middle"><h2><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></h2></th>
	</tr>
	<tr>
		<td class="row1 pad4" width="35%"><?php echo ((isset($this->_rootref['L_DELIMITER'])) ? $this->_rootref['L_DELIMITER'] : ((isset($user->lang['DELIMITER'])) ? $user->lang['DELIMITER'] : '{ DELIMITER }')); ?>: </td>
		<td class="row2 pad4"><input class="post" type="text" name="delimiter" value="," /></td>
	</tr>
	<tr>
		<td class="row1 pad4" width="35%"><?php echo ((isset($this->_rootref['L_ENCLOSURE'])) ? $this->_rootref['L_ENCLOSURE'] : ((isset($user->lang['ENCLOSURE'])) ? $user->lang['ENCLOSURE'] : '{ ENCLOSURE }')); ?>: </td>
		<td class="row2 pad4"><input class="post" type="text" name="enclosure" value="&#034;" /></td>
	</tr>
	<tr>
		<td class="row3 txtcenter pad4" colspan="2"><input type="hidden" name="export_option" value="CSV" /><input class="button" type="submit" name="submit_export" value="<?php echo ((isset($this->_rootref['L_EXPORT_FOLDER'])) ? $this->_rootref['L_EXPORT_FOLDER'] : ((isset($user->lang['EXPORT_FOLDER'])) ? $user->lang['EXPORT_FOLDER'] : '{ EXPORT_FOLDER }')); ?>" />&nbsp;&nbsp;<input class="button" type="reset" value="Reset" name="reset" /></td>
	</tr>
	</table>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>


</form>
<?php } else { ?>

	
	<table class="viewforum" width="100%" cellspacing="1" cellpadding="0" border="0">
	<?php if ($this->_rootref['NUM_NOT_MOVED'] || $this->_rootref['NUM_REMOVED']) {  ?>

		<tr>
			<td class="row3 pad10" colspan="<?php echo (isset($this->_tpldata['DEFINE']['.']['COLSPAN'])) ? $this->_tpldata['DEFINE']['.']['COLSPAN'] : ''; ?>">
				<?php if ($this->_rootref['NUM_REMOVED']) {  ?>

				<?php echo (isset($this->_rootref['RULE_REMOVED_MESSAGES'])) ? $this->_rootref['RULE_REMOVED_MESSAGES'] : ''; ?>

					<?php if ($this->_rootref['NUM_NOT_MOVED']) {  ?><br /><?php } } if ($this->_rootref['NUM_NOT_MOVED']) {  ?>

				<?php echo (isset($this->_rootref['NOT_MOVED_MESSAGES'])) ? $this->_rootref['NOT_MOVED_MESSAGES'] : ''; ?><br /><?php echo (isset($this->_rootref['RELEASE_MESSAGE_INFO'])) ? $this->_rootref['RELEASE_MESSAGE_INFO'] : ''; ?>

				<?php } ?>

			</td>
		</tr>
	<?php } ?>

	<tr class="toplines">
		<th colspan="<?php if ($this->_rootref['S_PM_ICONS']) {  ?>3<?php } else { ?>2<?php } ?>">&nbsp;<?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>&nbsp;</th>
		<th>&nbsp;<?php if ($this->_rootref['S_SHOW_RECIPIENTS']) {  echo ((isset($this->_rootref['L_RECIPIENTS'])) ? $this->_rootref['L_RECIPIENTS'] : ((isset($user->lang['RECIPIENTS'])) ? $user->lang['RECIPIENTS'] : '{ RECIPIENTS }')); } else { echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); } ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_SENT_AT'])) ? $this->_rootref['L_SENT_AT'] : ((isset($user->lang['SENT_AT'])) ? $user->lang['SENT_AT'] : '{ SENT_AT }')); ?>&nbsp;</th>
		<th>&nbsp;<?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?>&nbsp;</th>
	</tr>

	<?php $_messagerow_count = (isset($this->_tpldata['messagerow'])) ? sizeof($this->_tpldata['messagerow']) : 0;if ($_messagerow_count) {for ($_messagerow_i = 0; $_messagerow_i < $_messagerow_count; ++$_messagerow_i){$_messagerow_val = &$this->_tpldata['messagerow'][$_messagerow_i]; ?>

		<tr>
			<td class="row1 pad4 txtcenter" width="25" nowrap="nowrap"><?php echo $_messagerow_val['FOLDER_IMG']; ?></td>
		<?php if ($this->_rootref['S_PM_ICONS']) {  ?>

			<td class="row1 pad4 txtcenter" width="25"><?php echo $_messagerow_val['PM_ICON_IMG']; ?></td>
		<?php } if ($_messagerow_val['S_PM_DELETED']) {  ?><td class="row3 pad4"><?php } else { ?><td class="row1 pad4"><?php } if (! $_messagerow_val['PM_IMG'] && $_messagerow_val['PM_CLASS']) {  ?>

				<span class="<?php echo $_messagerow_val['PM_CLASS']; ?>" style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;"><img src="images/spacer.gif" width="10" height="10" alt="" />&nbsp;
			<?php } else if ($_messagerow_val['PM_IMG']) {  ?>

				<?php echo $_messagerow_val['PM_IMG']; ?>&nbsp;
			<?php } ?>


				<?php echo $_messagerow_val['ATTACH_ICON_IMG']; ?> 
				<?php if ($_messagerow_val['S_PM_DELETED']) {  ?>

					<?php echo ((isset($this->_rootref['L_MESSAGE_REMOVED_FROM_OUTBOX'])) ? $this->_rootref['L_MESSAGE_REMOVED_FROM_OUTBOX'] : ((isset($user->lang['MESSAGE_REMOVED_FROM_OUTBOX'])) ? $user->lang['MESSAGE_REMOVED_FROM_OUTBOX'] : '{ MESSAGE_REMOVED_FROM_OUTBOX }')); ?><br />
					<a href="<?php echo $_messagerow_val['U_REMOVE_PM']; ?>" style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php echo ((isset($this->_rootref['L_DELETE_MESSAGE'])) ? $this->_rootref['L_DELETE_MESSAGE'] : ((isset($user->lang['DELETE_MESSAGE'])) ? $user->lang['DELETE_MESSAGE'] : '{ DELETE_MESSAGE }')); ?></a>
				<?php } else { ?>

					<a href="<?php echo $_messagerow_val['U_VIEW_PM']; ?>"><?php echo $_messagerow_val['SUBJECT']; ?></a>
				<?php } if ($_messagerow_val['S_AUTHOR_DELETED']) {  ?>

					<br /><em class="gensmall"><?php echo ((isset($this->_rootref['L_PM_FROM_REMOVED_AUTHOR'])) ? $this->_rootref['L_PM_FROM_REMOVED_AUTHOR'] : ((isset($user->lang['PM_FROM_REMOVED_AUTHOR'])) ? $user->lang['PM_FROM_REMOVED_AUTHOR'] : '{ PM_FROM_REMOVED_AUTHOR }')); ?></em>
				<?php } ?>

			</td>

			<td class="row1 pad4 txtcenter" width="100"><p><?php if ($this->_rootref['S_SHOW_RECIPIENTS']) {  echo $_messagerow_val['RECIPIENTS']; } else { echo $_messagerow_val['MESSAGE_AUTHOR_FULL']; } ?></p></td>
			<td class="row1 pad4 txtcenter" width="120"><p><?php echo $_messagerow_val['SENT_TIME']; ?></p></td>
			<td class="row1 pad4 txtcenter" width="20"><p><input type="checkbox" class="radio" name="marked_msg_id[]" value="<?php echo $_messagerow_val['MESSAGE_ID']; ?>" /></p></td>
		</tr>
	<?php }} else { ?>

		<tr>
			<td class="row1 pad60 txtmiddle" colspan="<?php echo (isset($this->_tpldata['DEFINE']['.']['COLSPAN'])) ? $this->_tpldata['DEFINE']['.']['COLSPAN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NO_MESSAGES'])) ? $this->_rootref['L_NO_MESSAGES'] : ((isset($user->lang['NO_MESSAGES'])) ? $user->lang['NO_MESSAGES'] : '{ NO_MESSAGES }')); ?></td>
		</tr>
	<?php } ?>

</table>

<input type="hidden" name="cur_folder_id" value="<?php echo (isset($this->_rootref['CUR_FOLDER_ID'])) ? $this->_rootref['CUR_FOLDER_ID'] : ''; ?>" />

<table class="viewforum" border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
	<td class="row3 pad4">
<?php if (sizeof($this->_tpldata['messagerow'])) {  ?>

	<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;"><select name="export_option"><option value="CSV"><?php echo ((isset($this->_rootref['L_EXPORT_AS_CSV'])) ? $this->_rootref['L_EXPORT_AS_CSV'] : ((isset($user->lang['EXPORT_AS_CSV'])) ? $user->lang['EXPORT_AS_CSV'] : '{ EXPORT_AS_CSV }')); ?></option><option value="CSV_EXCEL"><?php echo ((isset($this->_rootref['L_EXPORT_AS_CSV_EXCEL'])) ? $this->_rootref['L_EXPORT_AS_CSV_EXCEL'] : ((isset($user->lang['EXPORT_AS_CSV_EXCEL'])) ? $user->lang['EXPORT_AS_CSV_EXCEL'] : '{ EXPORT_AS_CSV_EXCEL }')); ?></option><option value="XML"><?php echo ((isset($this->_rootref['L_EXPORT_AS_XML'])) ? $this->_rootref['L_EXPORT_AS_XML'] : ((isset($user->lang['EXPORT_AS_XML'])) ? $user->lang['EXPORT_AS_XML'] : '{ EXPORT_AS_XML }')); ?></option></select>&nbsp;<input class="button" type="submit" name="submit_export" value="<?php echo ((isset($this->_rootref['L_EXPORT_FOLDER'])) ? $this->_rootref['L_EXPORT_FOLDER'] : ((isset($user->lang['EXPORT_FOLDER'])) ? $user->lang['EXPORT_FOLDER'] : '{ EXPORT_FOLDER }')); ?>" /></div>
	<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><select name="mark_option"><?php echo (isset($this->_rootref['S_MARK_OPTIONS'])) ? $this->_rootref['S_MARK_OPTIONS'] : ''; echo (isset($this->_rootref['S_MOVE_MARKED_OPTIONS'])) ? $this->_rootref['S_MOVE_MARKED_OPTIONS'] : ''; ?></select>&nbsp;<input class="button" type="submit" name="submit_mark" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" />&nbsp;</div>
<?php } ?>

	</td>
</tr>
</table>
<?php if (! $this->_rootref['PROMPT']) {  $this->_tpl_include('ucp_pm_message_header.html'); } $this->_tpl_include('ucp_pm_message_footer.html'); } $this->_tpl_include('ucp_footer.html'); ?>