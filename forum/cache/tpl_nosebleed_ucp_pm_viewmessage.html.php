<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<h2><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h2>
<?php $this->_tpl_include('ucp_pm_message_header.html'); ?>

<div class="spacing"></div>

<table class="viewforum" width="100%" cellspacing="1" cellpadding="4">

<tr>
	<td class="row1 pad4" nowrap="nowrap" width="150"><b><?php echo ((isset($this->_rootref['L_PM_SUBJECT'])) ? $this->_rootref['L_PM_SUBJECT'] : ((isset($user->lang['PM_SUBJECT'])) ? $user->lang['PM_SUBJECT'] : '{ PM_SUBJECT }')); ?>:</b></td>
	<td class="row1 pad4"><?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?></td>
</tr>

<tr>
	<td class="row1 pad4" nowrap="nowrap" width="150"><b><?php echo ((isset($this->_rootref['L_PM_FROM'])) ? $this->_rootref['L_PM_FROM'] : ((isset($user->lang['PM_FROM'])) ? $user->lang['PM_FROM'] : '{ PM_FROM }')); ?>:</b></td>
	<td class="row1 pad4"><?php echo (isset($this->_rootref['MESSAGE_AUTHOR_FULL'])) ? $this->_rootref['MESSAGE_AUTHOR_FULL'] : ''; ?></td>
</tr>

<tr>
	<td class="row1 pad4" nowrap="nowrap" width="150"><b><?php echo ((isset($this->_rootref['L_SENT_AT'])) ? $this->_rootref['L_SENT_AT'] : ((isset($user->lang['SENT_AT'])) ? $user->lang['SENT_AT'] : '{ SENT_AT }')); ?>:</b></td>
	<td class="row1 pad4"><?php echo (isset($this->_rootref['SENT_DATE'])) ? $this->_rootref['SENT_DATE'] : ''; ?></td>
</tr>

<?php if ($this->_rootref['S_TO_RECIPIENT']) {  ?>

	<tr>
		<td class="row1 pad4" nowrap="nowrap" width="150"><b><?php echo ((isset($this->_rootref['L_TO'])) ? $this->_rootref['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ TO }')); ?>:</b></td>
		<td class="row1 pad4">
		<?php $_to_recipient_count = (isset($this->_tpldata['to_recipient'])) ? sizeof($this->_tpldata['to_recipient']) : 0;if ($_to_recipient_count) {for ($_to_recipient_i = 0; $_to_recipient_i < $_to_recipient_count; ++$_to_recipient_i){$_to_recipient_val = &$this->_tpldata['to_recipient'][$_to_recipient_i]; if ($_to_recipient_val['IS_GROUP']) {  ?><a href="<?php echo $_to_recipient_val['U_VIEW']; ?>"><?php echo $_to_recipient_val['NAME']; ?></a><?php } else { echo $_to_recipient_val['NAME_FULL']; ?> <?php } }} ?>

		</td>
	</tr>
<?php } if ($this->_rootref['S_BCC_RECIPIENT']) {  ?>

	<tr>
		<td class="row1 pad4" nowrap="nowrap" width="150"><b><?php echo ((isset($this->_rootref['L_BCC'])) ? $this->_rootref['L_BCC'] : ((isset($user->lang['BCC'])) ? $user->lang['BCC'] : '{ BCC }')); ?>:</b></td>
		<td class="row1 pad4">
		<?php $_bcc_recipient_count = (isset($this->_tpldata['bcc_recipient'])) ? sizeof($this->_tpldata['bcc_recipient']) : 0;if ($_bcc_recipient_count) {for ($_bcc_recipient_i = 0; $_bcc_recipient_i < $_bcc_recipient_count; ++$_bcc_recipient_i){$_bcc_recipient_val = &$this->_tpldata['bcc_recipient'][$_bcc_recipient_i]; if ($_bcc_recipient_val['IS_GROUP']) {  ?><a href="<?php echo $_bcc_recipient_val['U_VIEW']; ?>"><?php echo $_bcc_recipient_val['NAME']; ?></a><?php } else { echo $_bcc_recipient_val['NAME_FULL']; ?> <?php } }} ?>

		</td>
	</tr>
<?php } ?>

</table>

<table class="viewforum" width="100%" cellspacing="0" cellpadding="0">

<tr>
	<td nowrap="nowrap"><h2><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?></h2></td>
</tr>

<tr>
	<td class="row1" valign="top">
		<table width="100%" cellspacing="5">
		<tr>
			<td>
				<?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?>

				<?php if ($this->_rootref['S_HAS_ATTACHMENTS']) {  ?>

					<br clear="all" /><br />
							
					<table class="viewforum" width="100%" cellspacing="1">
					<tr>
						<td class="row3"><b><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?>: </b></td>
					</tr>
					<?php $_attachment_count = (isset($this->_tpldata['attachment'])) ? sizeof($this->_tpldata['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$this->_tpldata['attachment'][$_attachment_i]; ?>

						<tr>
							<td class="row2"><?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></td>
						</tr>
					<?php }} ?>

					</table>
				<?php } if ($this->_rootref['S_DISPLAY_NOTICE']) {  ?>

					<br /><br /><?php echo ((isset($this->_rootref['L_DOWNLOAD_NOTICE'])) ? $this->_rootref['L_DOWNLOAD_NOTICE'] : ((isset($user->lang['DOWNLOAD_NOTICE'])) ? $user->lang['DOWNLOAD_NOTICE'] : '{ DOWNLOAD_NOTICE }')); ?>

				<?php } if ($this->_rootref['SIGNATURE']) {  ?>

					<br />_________________<br /><?php echo (isset($this->_rootref['SIGNATURE'])) ? $this->_rootref['SIGNATURE'] : ''; ?>

				<?php } if ($this->_rootref['EDITED_MESSAGE']) {  ?>

					<?php echo (isset($this->_rootref['EDITED_MESSAGE'])) ? $this->_rootref['EDITED_MESSAGE'] : ''; ?>

				<?php } if (! $this->_rootref['S_HAS_ATTACHMENTS']) {  ?><br clear="all" /><br /><?php } ?>


				<table width="100%" cellspacing="0">
				<tr valign="middle">
					<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"> <?php if ($this->_rootref['U_DELETE']) {  ?><a href="<?php echo (isset($this->_rootref['U_DELETE'])) ? $this->_rootref['U_DELETE'] : ''; ?>"><?php echo (isset($this->_rootref['DELETE_IMG'])) ? $this->_rootref['DELETE_IMG'] : ''; ?></a> <?php } ?></td>
				</tr>
				</table>

			</td>
		</tr>
		</table>
	</td>
</tr>

<tr>
	<td  class="row3 pad4"><div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;">&nbsp;<?php if ($this->_rootref['U_MESSAGE_AUTHOR']) {  ?><a href="<?php echo (isset($this->_rootref['U_MESSAGE_AUTHOR'])) ? $this->_rootref['U_MESSAGE_AUTHOR'] : ''; ?>"><?php echo (isset($this->_rootref['PROFILE_IMG'])) ? $this->_rootref['PROFILE_IMG'] : ''; ?></a> <?php } if ($this->_rootref['U_EMAIL']) {  ?><a href="<?php echo (isset($this->_rootref['U_EMAIL'])) ? $this->_rootref['U_EMAIL'] : ''; ?>"><?php echo (isset($this->_rootref['EMAIL_IMG'])) ? $this->_rootref['EMAIL_IMG'] : ''; ?></a> <?php } ?>&nbsp;</div> <div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php if ($this->_rootref['U_EDIT']) {  ?><a href="<?php echo (isset($this->_rootref['U_EDIT'])) ? $this->_rootref['U_EDIT'] : ''; ?>"><?php echo (isset($this->_rootref['EDIT_IMG'])) ? $this->_rootref['EDIT_IMG'] : ''; ?></a> <?php } if ($this->_rootref['U_QUOTE']) {  ?><a href="<?php echo (isset($this->_rootref['U_QUOTE'])) ? $this->_rootref['U_QUOTE'] : ''; ?>"><?php echo (isset($this->_rootref['QUOTE_IMG'])) ? $this->_rootref['QUOTE_IMG'] : ''; ?></a> <?php } ?></div></td>
</tr>

</table>

<?php $this->_tpl_include('ucp_pm_message_footer.html'); if ($this->_rootref['S_DISPLAY_HISTORY']) {  $this->_tpl_include('ucp_pm_history.html'); } ?>


<table>
<tr>
	<td  class="pad4"><?php if ($this->_rootref['U_POST_REPLY_PM']) {  ?><a href="<?php echo (isset($this->_rootref['U_POST_REPLY_PM'])) ? $this->_rootref['U_POST_REPLY_PM'] : ''; ?>"><?php echo (isset($this->_rootref['REPLY_IMG'])) ? $this->_rootref['REPLY_IMG'] : ''; ?></a><?php } ?></td>
</tr>
</table>

<?php $this->_tpl_include('ucp_footer.html'); ?>