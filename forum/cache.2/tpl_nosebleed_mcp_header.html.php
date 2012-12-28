<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr class="toplines">
		<th><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></th>
	</tr>
</table>
<div id="pageheader">
	<?php if ($this->_rootref['U_MCP']) {  ?>

	<div class="right mainmenu">
			<a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a><?php if ($this->_rootref['U_MCP_FORUM']) {  ?> | <a href="<?php echo (isset($this->_rootref['U_MCP_FORUM'])) ? $this->_rootref['U_MCP_FORUM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MODERATE_FORUM'])) ? $this->_rootref['L_MODERATE_FORUM'] : ((isset($user->lang['MODERATE_FORUM'])) ? $user->lang['MODERATE_FORUM'] : '{ MODERATE_FORUM }')); ?></a><?php } if ($this->_rootref['U_MCP_TOPIC']) {  ?> | <a href="<?php echo (isset($this->_rootref['U_MCP_TOPIC'])) ? $this->_rootref['U_MCP_TOPIC'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MODERATE_TOPIC'])) ? $this->_rootref['L_MODERATE_TOPIC'] : ((isset($user->lang['MODERATE_TOPIC'])) ? $user->lang['MODERATE_TOPIC'] : '{ MODERATE_TOPIC }')); ?></a><?php } if ($this->_rootref['U_MCP_POST']) {  ?> | <a href="<?php echo (isset($this->_rootref['U_MCP_POST'])) ? $this->_rootref['U_MCP_POST'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MODERATE_POST'])) ? $this->_rootref['L_MODERATE_POST'] : ((isset($user->lang['MODERATE_POST'])) ? $user->lang['MODERATE_POST'] : '{ MODERATE_POST }')); ?></a><?php } ?>

	</div><br />
	<?php } if ($this->_rootref['TOPIC_TITLE'] || $this->_rootref['FORUM_NAME']) {  ?>

	<h2><?php if ($this->_rootref['TOPIC_TITLE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEW_TOPIC'])) ? $this->_rootref['U_VIEW_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?></a><?php } else { ?><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a><?php } ?></h2>
	<?php } ?>

</div>


<div id="pagecontent">

	<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td width="20%" valign="top">

			<table class="viewforum" width="100%" cellspacing="1">
			<tr>
				<td><h2><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></h2></th>
			</tr>
			<?php $_l_block1_count = (isset($this->_tpldata['l_block1'])) ? sizeof($this->_tpldata['l_block1']) : 0;if ($_l_block1_count) {for ($_l_block1_i = 0; $_l_block1_i < $_l_block1_count; ++$_l_block1_i){$_l_block1_val = &$this->_tpldata['l_block1'][$_l_block1_i]; ?>

				<tr>
				<?php if ($_l_block1_val['S_SELECTED']) {  ?>

					<td class="row1 two"><b><?php echo $_l_block1_val['L_TITLE']; ?></b>

					<ul style="margin: 0; padding: 0; list-style-type: none; line-height: 175%;">
					<?php $_l_block2_count = (isset($_l_block1_val['l_block2'])) ? sizeof($_l_block1_val['l_block2']) : 0;if ($_l_block2_count) {for ($_l_block2_i = 0; $_l_block2_i < $_l_block2_count; ++$_l_block2_i){$_l_block2_val = &$_l_block1_val['l_block2'][$_l_block2_i]; ?>

						<li class="row2" style="padding: 1px 0;">&#187; <?php if ($_l_block2_val['S_SELECTED']) {  echo $_l_block2_val['L_TITLE']; } else { ?><a href="<?php echo $_l_block2_val['U_TITLE']; ?>"><?php echo $_l_block2_val['L_TITLE']; ?></a><?php } ?></li>
					<?php }} ?>

					</ul>
				<?php } else { ?>

					<td class="row2 two" nowrap="nowrap" onmouseover="this.className='row1 two'" onmouseout="this.className='row2 two'" onclick="location.href=this.firstChild.href;"><a href="<?php echo $_l_block1_val['U_TITLE']; ?>"><?php echo $_l_block1_val['L_TITLE']; ?></a>
				<?php } ?>

					</td>
				</tr>
			<?php }} ?>

			</table>

		</td>
		<td>&nbsp;</td>
		<td width="80%" valign="top">

		<?php if ($this->_rootref['MESSAGE']) {  ?>

			<table class="modcp" width="100%" cellspacing="1">
			<tr>
				<th><h2><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?></h2></th>
			</tr>
			<tr>
				<td class="row1" align="center"><br /><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?><br /><br /><?php $_return_links_count = (isset($this->_tpldata['return_links'])) ? sizeof($this->_tpldata['return_links']) : 0;if ($_return_links_count) {for ($_return_links_i = 0; $_return_links_i < $_return_links_count; ++$_return_links_i){$_return_links_val = &$this->_tpldata['return_links'][$_return_links_i]; echo $_return_links_val['MESSAGE_LINK']; ?><br /><br /><?php }} ?></td>
			</tr>
			</table>

			<br />
		<?php } if ($this->_rootref['CONFIRM_MESSAGE']) {  ?>

			<form name="confirm" method="post" action="<?php echo (isset($this->_rootref['S_CONFIRM_ACTION'])) ? $this->_rootref['S_CONFIRM_ACTION'] : ''; ?>">

			<table class="modcp" width="100%" cellspacing="1">
			<tr>
				<th><h2><?php echo ((isset($this->_rootref['L_PLEASE_CONFIRM'])) ? $this->_rootref['L_PLEASE_CONFIRM'] : ((isset($user->lang['PLEASE_CONFIRM'])) ? $user->lang['PLEASE_CONFIRM'] : '{ PLEASE_CONFIRM }')); ?></h2></th>
			</tr>
			<tr>
				<td class="row1" align="center"><br /><?php echo (isset($this->_rootref['CONFIRM_MESSAGE'])) ? $this->_rootref['CONFIRM_MESSAGE'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input class="button" type="submit" name="confirm" value="<?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?>" />&nbsp;&nbsp;<input class="button" type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?>" /><br /><br /></td>
			</tr>
			</table>

			</form>

			<br />
		<?php } ?>