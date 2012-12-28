<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<table class="viewforum" width="100%" cellspacing="1">
<tr>
	<th colspan="4"><h2><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h2></th>
</tr>
<tr>
	<td class="row1 two txcenter" colspan="4"><?php echo ((isset($this->_rootref['L_DRAFTS_EXPLAIN'])) ? $this->_rootref['L_DRAFTS_EXPLAIN'] : ((isset($user->lang['DRAFTS_EXPLAIN'])) ? $user->lang['DRAFTS_EXPLAIN'] : '{ DRAFTS_EXPLAIN }')); ?></td>
</tr>

<?php if ($this->_rootref['ERROR']) {  ?>

	<tr>
		<td class="row1 two txtcenter" colspan="2"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></td>
	</tr>
<?php } if (! $this->_rootref['S_EDIT_DRAFT']) {  if ($this->_rootref['S_DRAFT_ROWS']) {  ?>

	<tr>
		<td colspan="4"><div class="spacing"></div>
	<tr class="toplines">
		<th><?php echo ((isset($this->_rootref['L_SAVE_DATE'])) ? $this->_rootref['L_SAVE_DATE'] : ((isset($user->lang['SAVE_DATE'])) ? $user->lang['SAVE_DATE'] : '{ SAVE_DATE }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_DRAFT_TITLE'])) ? $this->_rootref['L_DRAFT_TITLE'] : ((isset($user->lang['DRAFT_TITLE'])) ? $user->lang['DRAFT_TITLE'] : '{ DRAFT_TITLE }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></th>
		<th><?php echo ((isset($this->_rootref['L_DELETE'])) ? $this->_rootref['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ DELETE }')); ?></th>
	</tr>
	<?php } $_draftrow_count = (isset($this->_tpldata['draftrow'])) ? sizeof($this->_tpldata['draftrow']) : 0;if ($_draftrow_count) {for ($_draftrow_i = 0; $_draftrow_i < $_draftrow_count; ++$_draftrow_i){$_draftrow_val = &$this->_tpldata['draftrow'][$_draftrow_i]; if (!($_draftrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } ?>


		<td class="postdetails" style="padding: 4px;" nowrap="nowrap"><?php echo $_draftrow_val['DATE']; ?></td>
		<td style="padding: 4px;" valign="top" width="100%">
			<p class="topictitle"><?php echo $_draftrow_val['DRAFT_SUBJECT']; ?></p>
			<?php if ($_draftrow_val['S_LINK_TOPIC']) {  echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?>: <a href="<?php echo $_draftrow_val['U_VIEW']; ?>"><?php echo $_draftrow_val['TITLE']; ?></a>
			<?php } else if ($_draftrow_val['S_LINK_FORUM']) {  echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>: <a href="<?php echo $_draftrow_val['U_VIEW']; ?>"><?php echo $_draftrow_val['TITLE']; ?></a>
			<?php } else if ($_draftrow_val['S_LINK_PM']) {  echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?>

			<?php } else { echo ((isset($this->_rootref['L_NO_TOPIC_FORUM'])) ? $this->_rootref['L_NO_TOPIC_FORUM'] : ((isset($user->lang['NO_TOPIC_FORUM'])) ? $user->lang['NO_TOPIC_FORUM'] : '{ NO_TOPIC_FORUM }')); } ?>

		</td>
		<td style="padding: 4px;" align="center" nowrap="nowrap"><?php if ($_draftrow_val['U_INSERT']) {  ?><a href="<?php echo $_draftrow_val['U_INSERT']; ?>"><?php echo ((isset($this->_rootref['L_LOAD_DRAFT'])) ? $this->_rootref['L_LOAD_DRAFT'] : ((isset($user->lang['LOAD_DRAFT'])) ? $user->lang['LOAD_DRAFT'] : '{ LOAD_DRAFT }')); ?></a><br /><?php } ?><a href="<?php echo $_draftrow_val['U_VIEW_EDIT']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_EDIT'])) ? $this->_rootref['L_VIEW_EDIT'] : ((isset($user->lang['VIEW_EDIT'])) ? $user->lang['VIEW_EDIT'] : '{ VIEW_EDIT }')); ?></a></td>
		<td style="padding: 4px;" align="center"><input type="checkbox" class="radio" name="d[<?php echo $_draftrow_val['DRAFT_ID']; ?>]" /></td>
	</tr>
	<?php }} else { ?>

		<tr>
			<td class="row1 two txtcenter" colspan="4"><?php echo ((isset($this->_rootref['L_NO_SAVED_DRAFTS'])) ? $this->_rootref['L_NO_SAVED_DRAFTS'] : ((isset($user->lang['NO_SAVED_DRAFTS'])) ? $user->lang['NO_SAVED_DRAFTS'] : '{ NO_SAVED_DRAFTS }')); ?></td>
		</tr>
	<?php } if ($this->_rootref['S_DRAFT_ROWS']) {  ?>

		<tr>
			<td class="row3 pad4 txtright" colspan="4"><input class="button" type="submit" name="delete" value="<?php echo ((isset($this->_rootref['L_DELETE_MARKED'])) ? $this->_rootref['L_DELETE_MARKED'] : ((isset($user->lang['DELETE_MARKED'])) ? $user->lang['DELETE_MARKED'] : '{ DELETE_MARKED }')); ?>" />&nbsp;</td>
		</tr>
	<?php } } else if ($this->_rootref['S_EDIT_DRAFT']) {  ?>

	<tr>
		<td class="row1 two" width="22%"><b><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</b></td>
		<td class="row2 two"><input class="post" style="width:450px" type="text" name="subject" size="45" maxlength="64" tabindex="2" value="<?php echo (isset($this->_rootref['DRAFT_SUBJECT'])) ? $this->_rootref['DRAFT_SUBJECT'] : ''; ?>" /></td>
	</tr>
	<tr> 
		<td class="row1 two" width="22%"><b><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?>: </b><br /><?php echo ((isset($this->_rootref['L_EDIT_DRAFT_EXPLAIN'])) ? $this->_rootref['L_EDIT_DRAFT_EXPLAIN'] : ((isset($user->lang['EDIT_DRAFT_EXPLAIN'])) ? $user->lang['EDIT_DRAFT_EXPLAIN'] : '{ EDIT_DRAFT_EXPLAIN }')); ?></td>
		<td class="row2 two">
			<script type="text/javascript">
			// <![CDATA[
				var form_name = 'ucp';
				var text_name = 'message';
			// ]]>
			</script>
			<table cellspacing="0" cellpadding="2" border="0">
			<?php $this->_tpl_include('posting_buttons.html'); ?>

			<tr>
				<td colspan="9"><textarea class="post" name="message" rows="10" cols="70" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"><?php echo (isset($this->_rootref['DRAFT_MESSAGE'])) ? $this->_rootref['DRAFT_MESSAGE'] : ''; ?></textarea></td>
			</tr>
			<tr>
				<td colspan="9">
					<table cellspacing="0" cellpadding="0" border="0" width="100%">
					<tr>
						<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>">
							<script type="text/javascript">
							// <![CDATA[
								colorPalette('h', 6, 5)
							// ]]>
							</script>
						</td>
					</tr>
					</table>
				</td>
			</tr>			
			</table>
		</td>
	</tr>
	<tr>
		<td class="row1 pad4" colspan="9" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><p class="topictitle"><a href="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"><?php echo ((isset($this->_rootref['L_BACK_TO_DRAFTS'])) ? $this->_rootref['L_BACK_TO_DRAFTS'] : ((isset($user->lang['BACK_TO_DRAFTS'])) ? $user->lang['BACK_TO_DRAFTS'] : '{ BACK_TO_DRAFTS }')); ?></a></p></td>
	</tr>
	<tr>
		<td class="row3 pad4 txtcenter" colspan="2"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input class="button" type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;&nbsp;<input class="button" type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" /></td>
	</tr>
<?php } ?>

</table>
<?php $this->_tpl_include('ucp_footer.html'); ?>