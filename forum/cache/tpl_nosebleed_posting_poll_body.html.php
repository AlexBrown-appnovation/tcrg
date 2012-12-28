<?php if (!defined('IN_PHPBB')) exit; ?><tr>
	<th colspan="2"><h2><?php echo ((isset($this->_rootref['L_ADD_POLL'])) ? $this->_rootref['L_ADD_POLL'] : ((isset($user->lang['ADD_POLL'])) ? $user->lang['ADD_POLL'] : '{ ADD_POLL }')); ?></h2></th>
</tr>
<tr>
	<td class="row3 pad4" colspan="2"><?php echo ((isset($this->_rootref['L_ADD_POLL_EXPLAIN'])) ? $this->_rootref['L_ADD_POLL_EXPLAIN'] : ((isset($user->lang['ADD_POLL_EXPLAIN'])) ? $user->lang['ADD_POLL_EXPLAIN'] : '{ ADD_POLL_EXPLAIN }')); ?></td>
</tr>
<tr>
	<td class="row1 pad4"><?php echo ((isset($this->_rootref['L_POLL_QUESTION'])) ? $this->_rootref['L_POLL_QUESTION'] : ((isset($user->lang['POLL_QUESTION'])) ? $user->lang['POLL_QUESTION'] : '{ POLL_QUESTION }')); ?>:</td>
	<td class="row2 pad4"><input class="post" type="text" name="poll_title" size="50" maxlength="255" value="<?php echo (isset($this->_rootref['POLL_TITLE'])) ? $this->_rootref['POLL_TITLE'] : ''; ?>" /></td>
</tr>
<tr>
	<td class="row1 pad4"><?php echo ((isset($this->_rootref['L_POLL_OPTIONS'])) ? $this->_rootref['L_POLL_OPTIONS'] : ((isset($user->lang['POLL_OPTIONS'])) ? $user->lang['POLL_OPTIONS'] : '{ POLL_OPTIONS }')); ?>:<br /><?php echo ((isset($this->_rootref['L_POLL_OPTIONS_EXPLAIN'])) ? $this->_rootref['L_POLL_OPTIONS_EXPLAIN'] : ((isset($user->lang['POLL_OPTIONS_EXPLAIN'])) ? $user->lang['POLL_OPTIONS_EXPLAIN'] : '{ POLL_OPTIONS_EXPLAIN }')); ?></td>
	<td class="row2 pad4"><textarea class="post" style="width:450px" name="poll_option_text" rows="5" cols="35"><?php echo (isset($this->_rootref['POLL_OPTIONS'])) ? $this->_rootref['POLL_OPTIONS'] : ''; ?></textarea></td>
</tr>
<tr>
	<td class="row1 pad4"><?php echo ((isset($this->_rootref['L_POLL_MAX_OPTIONS'])) ? $this->_rootref['L_POLL_MAX_OPTIONS'] : ((isset($user->lang['POLL_MAX_OPTIONS'])) ? $user->lang['POLL_MAX_OPTIONS'] : '{ POLL_MAX_OPTIONS }')); ?>:<br /><?php echo ((isset($this->_rootref['L_POLL_MAX_OPTIONS_EXPLAIN'])) ? $this->_rootref['L_POLL_MAX_OPTIONS_EXPLAIN'] : ((isset($user->lang['POLL_MAX_OPTIONS_EXPLAIN'])) ? $user->lang['POLL_MAX_OPTIONS_EXPLAIN'] : '{ POLL_MAX_OPTIONS_EXPLAIN }')); ?></td>
	<td class="row2 pad4"><input class="post" type="text" name="poll_max_options" size="3" maxlength="3" value="<?php echo (isset($this->_rootref['POLL_MAX_OPTIONS'])) ? $this->_rootref['POLL_MAX_OPTIONS'] : ''; ?>" /></td>
</tr>
<tr>
	<td class="row1 pad4"><?php echo ((isset($this->_rootref['L_POLL_FOR'])) ? $this->_rootref['L_POLL_FOR'] : ((isset($user->lang['POLL_FOR'])) ? $user->lang['POLL_FOR'] : '{ POLL_FOR }')); ?>:</td>
	<td class="row2 pad4"><input class="post" type="text" name="poll_length" size="3" maxlength="3" value="<?php echo (isset($this->_rootref['POLL_LENGTH'])) ? $this->_rootref['POLL_LENGTH'] : ''; ?>" />&nbsp;<?php echo ((isset($this->_rootref['L_DAYS'])) ? $this->_rootref['L_DAYS'] : ((isset($user->lang['DAYS'])) ? $user->lang['DAYS'] : '{ DAYS }')); ?>&nbsp;<?php echo ((isset($this->_rootref['L_POLL_FOR_EXPLAIN'])) ? $this->_rootref['L_POLL_FOR_EXPLAIN'] : ((isset($user->lang['POLL_FOR_EXPLAIN'])) ? $user->lang['POLL_FOR_EXPLAIN'] : '{ POLL_FOR_EXPLAIN }')); ?></td>
</tr>
<?php if ($this->_rootref['S_POLL_VOTE_CHANGE']) {  ?>

	<tr>
		<td class="row1 pad4"><?php echo ((isset($this->_rootref['L_POLL_VOTE_CHANGE'])) ? $this->_rootref['L_POLL_VOTE_CHANGE'] : ((isset($user->lang['POLL_VOTE_CHANGE'])) ? $user->lang['POLL_VOTE_CHANGE'] : '{ POLL_VOTE_CHANGE }')); ?>:<br /><?php echo ((isset($this->_rootref['L_POLL_VOTE_CHANGE_EXPLAIN'])) ? $this->_rootref['L_POLL_VOTE_CHANGE_EXPLAIN'] : ((isset($user->lang['POLL_VOTE_CHANGE_EXPLAIN'])) ? $user->lang['POLL_VOTE_CHANGE_EXPLAIN'] : '{ POLL_VOTE_CHANGE_EXPLAIN }')); ?></td>
		<td class="row2 pad4"><input type="checkbox" class="radio" name="poll_vote_change"<?php echo (isset($this->_rootref['VOTE_CHANGE_CHECKED'])) ? $this->_rootref['VOTE_CHANGE_CHECKED'] : ''; ?> /></td>
	</tr>
<?php } if ($this->_rootref['S_POLL_DELETE']) {  ?>

	<tr>
		<td class="row1 pad4"><?php echo ((isset($this->_rootref['L_POLL_DELETE'])) ? $this->_rootref['L_POLL_DELETE'] : ((isset($user->lang['POLL_DELETE'])) ? $user->lang['POLL_DELETE'] : '{ POLL_DELETE }')); ?>:</td>
		<td class="row2 pad4"><input type="checkbox" class="radio" name="poll_delete"<?php if ($this->_rootref['S_POLL_DELETE_CHECKED']) {  ?> checked="checked"<?php } ?> /></td>
	</tr>
<?php } ?>