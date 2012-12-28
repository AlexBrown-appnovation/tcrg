<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<table class="viewforum" width="100%" cellspacing="1">
<tr>
	<th colspan="2" valign="middle"><h2><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h2></th>
</tr>
<?php if ($this->_rootref['ERROR']) {  ?>

	<tr>
		<td class="row1 txtmiddle pad60" colspan="2"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></td>
	</tr>
<?php } ?>

<tr>
	<td class="row1 pad4" width="50%"><b><?php echo ((isset($this->_rootref['L_DEFAULT_BBCODE'])) ? $this->_rootref['L_DEFAULT_BBCODE'] : ((isset($user->lang['DEFAULT_BBCODE'])) ? $user->lang['DEFAULT_BBCODE'] : '{ DEFAULT_BBCODE }')); ?>:</b></td>
	<td class="row2 pad4"><input type="radio" class="radio" name="bbcode" value="1"<?php if ($this->_rootref['S_BBCODE']) {  ?> checked="checked"<?php } ?> /><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="bbcode" value="0"<?php if (! $this->_rootref['S_BBCODE']) {  ?> checked="checked"<?php } ?> /><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></td>
</tr>
<tr>
	<td class="row1 pad4" width="50%"><b><?php echo ((isset($this->_rootref['L_DEFAULT_SMILIES'])) ? $this->_rootref['L_DEFAULT_SMILIES'] : ((isset($user->lang['DEFAULT_SMILIES'])) ? $user->lang['DEFAULT_SMILIES'] : '{ DEFAULT_SMILIES }')); ?>:</b></td>
	<td class="row2 pad4"><input type="radio" class="radio" name="smilies" value="1"<?php if ($this->_rootref['S_SMILIES']) {  ?> checked="checked"<?php } ?> /><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="smilies" value="0"<?php if (! $this->_rootref['S_SMILIES']) {  ?> checked="checked"<?php } ?> /><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></td>
</tr>
<tr>
	<td class="row1 pad4" width="50%"><b><?php echo ((isset($this->_rootref['L_DEFAULT_ADD_SIG'])) ? $this->_rootref['L_DEFAULT_ADD_SIG'] : ((isset($user->lang['DEFAULT_ADD_SIG'])) ? $user->lang['DEFAULT_ADD_SIG'] : '{ DEFAULT_ADD_SIG }')); ?>:</b></td>
	<td class="row2 pad4"><input type="radio" class="radio" name="sig" value="1"<?php if ($this->_rootref['S_SIG']) {  ?> checked="checked"<?php } ?> /><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="sig" value="0"<?php if (! $this->_rootref['S_SIG']) {  ?> checked="checked"<?php } ?> /><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></td>
</tr>
<tr>
	<td class="row1 pad4" width="50%"><b><?php echo ((isset($this->_rootref['L_DEFAULT_NOTIFY'])) ? $this->_rootref['L_DEFAULT_NOTIFY'] : ((isset($user->lang['DEFAULT_NOTIFY'])) ? $user->lang['DEFAULT_NOTIFY'] : '{ DEFAULT_NOTIFY }')); ?>:</b></td>
	<td class="row2 pad4"><input type="radio" class="radio" name="notify" value="1"<?php if ($this->_rootref['S_NOTIFY']) {  ?> checked="checked"<?php } ?> /><?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="notify" value="0"<?php if (! $this->_rootref['S_NOTIFY']) {  ?> checked="checked"<?php } ?> /><?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></td>
</tr>
<tr>
	<td class="row3 txtcenter pad4" colspan="2"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input class="button" type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;&nbsp;<input class="button" type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" /></td>
</tr>
</table>

<?php $this->_tpl_include('ucp_footer.html'); ?>