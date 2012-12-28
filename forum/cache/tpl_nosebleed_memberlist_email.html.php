<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<form action="<?php echo (isset($this->_rootref['S_POST_ACTION'])) ? $this->_rootref['S_POST_ACTION'] : ''; ?>" method="post" name="postform">

<table class="posting_body" width="100%" cellspacing="1">
<tr class="toplines">
	<th colspan="2"><?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?></th>
</tr>
<tr>
	<th colspan="2"><h2><?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></h2></th>
</tr>
<?php if ($this->_rootref['ERROR_MESSAGE']) {  ?>

	<tr>
		<td class="row3" colspan="2" align="center"><?php echo (isset($this->_rootref['ERROR_MESSAGE'])) ? $this->_rootref['ERROR_MESSAGE'] : ''; ?></td>
	</tr>
<?php } if ($this->_rootref['S_SEND_USER']) {  ?>

	<tr> 
		<td class="row1 pad4" width="35%"><b><?php echo ((isset($this->_rootref['L_RECIPIENT'])) ? $this->_rootref['L_RECIPIENT'] : ((isset($user->lang['RECIPIENT'])) ? $user->lang['RECIPIENT'] : '{ RECIPIENT }')); ?></b></td>
		<td class="row2 pad4" width="65%"><b><?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></b></td>
	</tr>
	<tr> 
		<td class="row1 pad4" width="35%"><b><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?></b></td>
		<td class="row2 pad4"><input class="post" type="text" name="subject" size="50" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>" /></td>
	</tr>
<?php } else { ?>

	<tr>
		<td class="row1 pad4" width="35%"><b><?php echo ((isset($this->_rootref['L_EMAIL_ADDRESS'])) ? $this->_rootref['L_EMAIL_ADDRESS'] : ((isset($user->lang['EMAIL_ADDRESS'])) ? $user->lang['EMAIL_ADDRESS'] : '{ EMAIL_ADDRESS }')); ?></b></td>
		<td class="row2 pad4"><input class="post" type="text" name="email" size="50" maxlength="100" value="<?php echo (isset($this->_rootref['EMAIL'])) ? $this->_rootref['EMAIL'] : ''; ?>" /></td>
	</tr>
	<tr> 
		<td class="row1 pad4" width="35%"><b><?php echo ((isset($this->_rootref['L_REAL_NAME'])) ? $this->_rootref['L_REAL_NAME'] : ((isset($user->lang['REAL_NAME'])) ? $user->lang['REAL_NAME'] : '{ REAL_NAME }')); ?></b></td>
		<td class="row2 pad4"><input class="post" type="text" name="name" size="50" value="<?php echo (isset($this->_rootref['NAME'])) ? $this->_rootref['NAME'] : ''; ?>" /></td>
	</tr>
	<tr> 
		<td class="row1 pad4" width="35%"><b><?php echo ((isset($this->_rootref['L_DEST_LANG'])) ? $this->_rootref['L_DEST_LANG'] : ((isset($user->lang['DEST_LANG'])) ? $user->lang['DEST_LANG'] : '{ DEST_LANG }')); ?></b><br /><?php echo ((isset($this->_rootref['L_DEST_LANG_EXPLAIN'])) ? $this->_rootref['L_DEST_LANG_EXPLAIN'] : ((isset($user->lang['DEST_LANG_EXPLAIN'])) ? $user->lang['DEST_LANG_EXPLAIN'] : '{ DEST_LANG_EXPLAIN }')); ?></td>
		<td class="row2 pad4"><select name="lang"><?php echo (isset($this->_rootref['S_LANG_OPTIONS'])) ? $this->_rootref['S_LANG_OPTIONS'] : ''; ?></select></td>
	</tr>
<?php } ?>

<tr> 
	<td class="row1 pad4" valign="top"><b><?php echo ((isset($this->_rootref['L_MESSAGE_BODY'])) ? $this->_rootref['L_MESSAGE_BODY'] : ((isset($user->lang['MESSAGE_BODY'])) ? $user->lang['MESSAGE_BODY'] : '{ MESSAGE_BODY }')); ?></b><br /><?php echo ((isset($this->_rootref['L_EMAIL_BODY_EXPLAIN'])) ? $this->_rootref['L_EMAIL_BODY_EXPLAIN'] : ((isset($user->lang['EMAIL_BODY_EXPLAIN'])) ? $user->lang['EMAIL_BODY_EXPLAIN'] : '{ EMAIL_BODY_EXPLAIN }')); ?></td>
	<td class="row2 pad4"><textarea class="post" name="message" rows="15" cols="76" tabindex="3"><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?></textarea></td>
</tr>
<tr> 
	<td class="row1 pad4" valign="top"><b><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?></b></td>
	<td class="row2 pad4">
		<table cellspacing="0" cellpadding="1" border="0">
		<tr> 
			<td><input type="checkbox" class="radio" name="cc_email" value="1" checked="checked" /></td>
			<td><?php echo ((isset($this->_rootref['L_CC_EMAIL'])) ? $this->_rootref['L_CC_EMAIL'] : ((isset($user->lang['CC_EMAIL'])) ? $user->lang['CC_EMAIL'] : '{ CC_EMAIL }')); ?></td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td class="row3 pad4 txtcenter" colspan="2"><input type="submit" tabindex="6" name="submit" class="button" value="<?php echo ((isset($this->_rootref['L_SEND_EMAIL'])) ? $this->_rootref['L_SEND_EMAIL'] : ((isset($user->lang['SEND_EMAIL'])) ? $user->lang['SEND_EMAIL'] : '{ SEND_EMAIL }')); ?>" /></td>
</tr>
</table>

<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>


</form>


<?php $this->_tpl_include('breadcrumbs.html'); ?>


<div class="spacing"></div>

<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>

<?php $this->_tpl_include('overall_footer.html'); ?>