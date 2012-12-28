<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<a name="faqtop"></a>

	<table cellspacing="1">
	<tr class="toplines">
		<th><?php echo ((isset($this->_rootref['L_FAQ_TITLE'])) ? $this->_rootref['L_FAQ_TITLE'] : ((isset($user->lang['FAQ_TITLE'])) ? $user->lang['FAQ_TITLE'] : '{ FAQ_TITLE }')); ?></th>
	</tr>
	<tr>
		<td><h2><?php echo ((isset($this->_rootref['L_FAQ_TITLE'])) ? $this->_rootref['L_FAQ_TITLE'] : ((isset($user->lang['FAQ_TITLE'])) ? $user->lang['FAQ_TITLE'] : '{ FAQ_TITLE }')); ?></h2></td>
	</tr>
	<tr>
		<td class="row1 pad25">
		<?php $_faq_block_count = (isset($this->_tpldata['faq_block'])) ? sizeof($this->_tpldata['faq_block']) : 0;if ($_faq_block_count) {for ($_faq_block_i = 0; $_faq_block_i < $_faq_block_count; ++$_faq_block_i){$_faq_block_val = &$this->_tpldata['faq_block'][$_faq_block_i]; ?>

			<span style="font-weight: bold;"><?php echo $_faq_block_val['BLOCK_TITLE']; ?></span><br />
			<?php $_faq_row_count = (isset($_faq_block_val['faq_row'])) ? sizeof($_faq_block_val['faq_row']) : 0;if ($_faq_row_count) {for ($_faq_row_i = 0; $_faq_row_i < $_faq_row_count; ++$_faq_row_i){$_faq_row_val = &$_faq_block_val['faq_row'][$_faq_row_i]; ?>

				<a class="postlink" href="#f<?php echo $_faq_block_val['S_ROW_COUNT']; ?>r<?php echo $_faq_row_val['S_ROW_COUNT']; ?>"><?php echo $_faq_row_val['FAQ_QUESTION']; ?></a><br />
			<?php }} ?>

			<br />
		<?php }} ?>

		</td>
	</tr>
	</table>

<div class="spacing"></div>

	<?php $_faq_block_count = (isset($this->_tpldata['faq_block'])) ? sizeof($this->_tpldata['faq_block']) : 0;if ($_faq_block_count) {for ($_faq_block_i = 0; $_faq_block_i < $_faq_block_count; ++$_faq_block_i){$_faq_block_val = &$this->_tpldata['faq_block'][$_faq_block_i]; ?>

		<table cellspacing="1">
		<tr> 
			<td colspan="2"><h2><?php echo $_faq_block_val['BLOCK_TITLE']; ?></h2></td>
		</tr>
		<?php $_faq_row_count = (isset($_faq_block_val['faq_row'])) ? sizeof($_faq_block_val['faq_row']) : 0;if ($_faq_row_count) {for ($_faq_row_i = 0; $_faq_row_i < $_faq_row_count; ++$_faq_row_i){$_faq_row_val = &$_faq_block_val['faq_row'][$_faq_row_i]; ?> 
		<tr>
			<?php if (!($_faq_row_val['S_ROW_COUNT'] & 1)  ) {  ?>

				<td class="row1 pad25">
			<?php } else { ?>

				<td class="row2 pad25">
			<?php } ?>

				<a name="f<?php echo $_faq_block_val['S_ROW_COUNT']; ?>r<?php echo $_faq_row_val['S_ROW_COUNT']; ?>"></a><span style="font-weight: bold;"><?php echo $_faq_row_val['FAQ_QUESTION']; ?></span><br />
				<?php echo $_faq_row_val['FAQ_ANSWER']; ?><br />
				<a href="#faqtop"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a>
			</td>
		</tr>
		<?php }} ?>

		</table>
	<?php }} ?><!-- NOT YET UPDATED BEGINS --><?php $this->_tpl_include('breadcrumbs.html'); ?><!-- NOT YET UPDATED END -->

<div class="spacing"></div>

<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>

<div class="spacing"></div>

<?php $this->_tpl_include('overall_footer.html'); ?>