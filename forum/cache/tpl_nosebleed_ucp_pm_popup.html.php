<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('simple_header.html'); ?>


<script type="text/javascript">
// <![CDATA[
/**
* Jump to inbox
*/
function jump_to_inbox(url)
{
	opener.document.location.href = url.replace(/&amp;/g, '&');
	window.close();
}
// ]]>
</script>

<div class="spacing"></div>

<table class="viewtopic" width="100%" border="0" cellspacing="0" cellpadding="10">
<tr class="toplines">
	<th><?php if ($this->_rootref['S_NOT_LOGGED_IN']) {  echo ((isset($this->_rootref['L_LOGIN_CHECK_PM'])) ? $this->_rootref['L_LOGIN_CHECK_PM'] : ((isset($user->lang['LOGIN_CHECK_PM'])) ? $user->lang['LOGIN_CHECK_PM'] : '{ LOGIN_CHECK_PM }')); } else { echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; } ?></th>
</tr>
<tr>
	<td>
		<table width="100%" border="0" cellspacing="1" cellpadding="4">
		<tr> 
			<td class="row1 pad4 txtmiddle">
				<br />
				<?php if ($this->_rootref['S_NOT_LOGGED_IN']) {  ?>

					<?php echo ((isset($this->_rootref['L_LOGIN_CHECK_PM'])) ? $this->_rootref['L_LOGIN_CHECK_PM'] : ((isset($user->lang['LOGIN_CHECK_PM'])) ? $user->lang['LOGIN_CHECK_PM'] : '{ LOGIN_CHECK_PM }')); ?>

				<?php } else { ?>

					<?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['CLICK_TO_VIEW'])) ? $this->_rootref['CLICK_TO_VIEW'] : ''; ?>

				<?php } ?>

				<br /><br /><a href="#" onclick="window.close(); return false;"><?php echo ((isset($this->_rootref['L_CLOSE_WINDOW'])) ? $this->_rootref['L_CLOSE_WINDOW'] : ((isset($user->lang['CLOSE_WINDOW'])) ? $user->lang['CLOSE_WINDOW'] : '{ CLOSE_WINDOW }')); ?></a>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>

<?php $this->_tpl_include('simple_footer.html'); ?>