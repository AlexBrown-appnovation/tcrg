<?php if (!defined('IN_PHPBB')) exit; ?><table width="100%" cellspacing="1">
<tr>
	<td ><h2><?php echo ((isset($this->_rootref['L_TOPIC_REVIEW'])) ? $this->_rootref['L_TOPIC_REVIEW'] : ((isset($user->lang['TOPIC_REVIEW'])) ? $user->lang['TOPIC_REVIEW'] : '{ TOPIC_REVIEW }')); ?> - <?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?></h2></td>
</tr>
<tr>
	<td style="padding: 5px;"><div style="overflow: auto; width: 100%; height: 300px;">

		<table width="100%" cellspacing="1" class="posting_body">
		<tr class="toplines">
			<th width="22%"><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?></th>
			<th><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?></th>
		</tr>
		<?php $_topic_review_row_count = (isset($this->_tpldata['topic_review_row'])) ? sizeof($this->_tpldata['topic_review_row']) : 0;if ($_topic_review_row_count) {for ($_topic_review_row_i = 0; $_topic_review_row_i < $_topic_review_row_count; ++$_topic_review_row_i){$_topic_review_row_val = &$this->_tpldata['topic_review_row'][$_topic_review_row_i]; ?>


			<tr>

				<?php if (!($_topic_review_row_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row1 three" rowspan="2" valign="top"><?php } else { ?><td class="row2 three" rowspan="2" valign="top"><?php } ?>

				<a id="pr<?php echo $_topic_review_row_val['POST_ID']; ?>"></a>
					<table width="150px" cellspacing="0">
					<tr>
						<td><b <?php if ($_topic_review_row_val['POST_AUTHOR_COLOUR']) {  ?> style="color: <?php echo $_topic_review_row_val['POST_AUTHOR_COLOUR']; ?>"<?php } ?>><?php echo $_topic_review_row_val['POST_AUTHOR']; ?></b></td>
					</tr>
					</table>
				</td>
				<td class="row3 two" width="100%">
					<table width="100%" cellspacing="0">
					<tr>
						<td><?php if ($this->_rootref['S_IS_BOT']) {  echo $_topic_review_row_val['MINI_POST_IMG']; } else { ?><a href="<?php echo $_topic_review_row_val['U_MINI_POST']; ?>"><?php echo $_topic_review_row_val['MINI_POST_IMG']; ?></a><?php } echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>:&nbsp;  <?php echo $_topic_review_row_val['POST_DATE']; if ($_topic_review_row_val['U_MCP_DETAILS']) {  ?>&nbsp;&nbsp;[ <a href="<?php echo $_topic_review_row_val['U_MCP_DETAILS']; ?>"><?php echo ((isset($this->_rootref['L_POST_DETAILS'])) ? $this->_rootref['L_POST_DETAILS'] : ((isset($user->lang['POST_DETAILS'])) ? $user->lang['POST_DETAILS'] : '{ POST_DETAILS }')); ?></a> ]<?php } ?></td><td class="txtright"><?php if ($_topic_review_row_val['POSTER_QUOTE'] && $_topic_review_row_val['DECODED_MESSAGE']) {  ?><a href="#" onclick="addquote(<?php echo $_topic_review_row_val['POST_ID']; ?>,'<?php echo $_topic_review_row_val['POSTER_QUOTE']; ?>'); return false;"><?php echo (isset($this->_rootref['QUOTE_IMG'])) ? $this->_rootref['QUOTE_IMG'] : ''; ?></a><?php } ?></td>
					</tr>
					</table>
				</td>
			</tr>

			<tr>

				<?php if (!($_topic_review_row_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row1 four" valign="top"><?php } else { ?><td class="row2 four" valign="top"><?php } ?>

					<table width="100%" cellspacing="0">
					<tr>
						<td valign="top">
							<table width="100%" cellspacing="0" cellpadding="2">
							<tr>
								<td>
									<div><?php echo $_topic_review_row_val['MESSAGE']; ?></div>

									<?php if ($_topic_review_row_val['S_HAS_ATTACHMENTS']) {  ?>

										<br clear="all" /><br />

										<table class="" width="100%" cellspacing="1">
										<tr>
											<td class="row3 pad4"><b><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?>: </b></td>
										</tr>
										<?php $_attachment_count = (isset($_topic_review_row_val['attachment'])) ? sizeof($_topic_review_row_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_topic_review_row_val['attachment'][$_attachment_i]; ?>

											<tr>
												<?php if (!($_attachment_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2"><?php } else { ?><td class="row1"><?php } echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></td>
											</tr>
										<?php }} ?>

										</table>
									<?php } if ($_topic_review_row_val['POSTER_QUOTE'] && $_topic_review_row_val['DECODED_MESSAGE']) {  ?>

										<div id="message_<?php echo $_topic_review_row_val['POST_ID']; ?>" style="display: none;"><?php echo $_topic_review_row_val['DECODED_MESSAGE']; ?></div>
									<?php } ?>

								</td>
							</tr>
							</table>
						</td>
					</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="row2 pad4" colspan="2">&nbsp;</td>
			</tr>
		<?php }} ?>

		</table>
	</div></td>
</tr>
</table>