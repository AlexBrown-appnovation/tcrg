<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<script type="text/javascript">
// <![CDATA[
	/**
	* Change language
	*/
	function change_language(lang_iso)
	{
		document.forms['register'].change_lang.value = lang_iso;
		document.forms['register'].submit.click();
	}

// ]]>
</script>

<form name="register" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>">

<table cellspacing="1" class="profile">
<tr class="toplines">
	<th colspan="2"><?php echo ((isset($this->_rootref['L_REGISTRATION'])) ? $this->_rootref['L_REGISTRATION'] : ((isset($user->lang['REGISTRATION'])) ? $user->lang['REGISTRATION'] : '{ REGISTRATION }')); ?></th>
</tr>
<tr>
	<th colspan="2"><h2><?php echo ((isset($this->_rootref['L_REGISTRATION'])) ? $this->_rootref['L_REGISTRATION'] : ((isset($user->lang['REGISTRATION'])) ? $user->lang['REGISTRATION'] : '{ REGISTRATION }')); ?></h2></th>
</tr>

<?php if ($this->_rootref['ERROR']) {  ?>

	<tr>
		<td class="row1 nav pad60 txtmiddle" colspan="2"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></td>
	</tr>
<?php } if ($this->_rootref['L_REG_COND']) {  ?>

	<tr>
		<td class="row2 three" colspan="2"><?php echo ((isset($this->_rootref['L_REG_COND'])) ? $this->_rootref['L_REG_COND'] : ((isset($user->lang['REG_COND'])) ? $user->lang['REG_COND'] : '{ REG_COND }')); ?></td>
	</tr>
<?php } if (sizeof($this->_tpldata['profile_fields'])) {  ?>

	<tr>
		<td class="row2 three" colspan="2"><?php echo ((isset($this->_rootref['L_ITEMS_REQUIRED'])) ? $this->_rootref['L_ITEMS_REQUIRED'] : ((isset($user->lang['ITEMS_REQUIRED'])) ? $user->lang['ITEMS_REQUIRED'] : '{ ITEMS_REQUIRED }')); ?></td>
	</tr>
<?php } ?>


<tr>
	<td class="row1 one"><b><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>: </b><br /><?php echo ((isset($this->_rootref['L_USERNAME_EXPLAIN'])) ? $this->_rootref['L_USERNAME_EXPLAIN'] : ((isset($user->lang['USERNAME_EXPLAIN'])) ? $user->lang['USERNAME_EXPLAIN'] : '{ USERNAME_EXPLAIN }')); ?></td>
	<td class="row2 two"><input class="post" type="text" name="username" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" /></td>
</tr>
<tr>
	<td class="row1 one"><b><?php echo ((isset($this->_rootref['L_EMAIL_ADDRESS'])) ? $this->_rootref['L_EMAIL_ADDRESS'] : ((isset($user->lang['EMAIL_ADDRESS'])) ? $user->lang['EMAIL_ADDRESS'] : '{ EMAIL_ADDRESS }')); ?>: </b></td>
	<td class="row2 two"><input class="post" type="text" name="email" size="25" maxlength="100" value="<?php echo (isset($this->_rootref['EMAIL'])) ? $this->_rootref['EMAIL'] : ''; ?>" /></td>
</tr>
<tr>
	<td class="row1 one"><b><?php echo ((isset($this->_rootref['L_CONFIRM_EMAIL'])) ? $this->_rootref['L_CONFIRM_EMAIL'] : ((isset($user->lang['CONFIRM_EMAIL'])) ? $user->lang['CONFIRM_EMAIL'] : '{ CONFIRM_EMAIL }')); ?>: </b></td>
	<td class="row2 two"><input class="post" type="text" name="email_confirm" size="25" maxlength="100" value="<?php echo (isset($this->_rootref['EMAIL_CONFIRM'])) ? $this->_rootref['EMAIL_CONFIRM'] : ''; ?>" /></td>
</tr>
<tr>
	<td class="row1 one"><b><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>: </b><br /><?php echo ((isset($this->_rootref['L_PASSWORD_EXPLAIN'])) ? $this->_rootref['L_PASSWORD_EXPLAIN'] : ((isset($user->lang['PASSWORD_EXPLAIN'])) ? $user->lang['PASSWORD_EXPLAIN'] : '{ PASSWORD_EXPLAIN }')); ?></td>
	<td class="row2 two"><input class="post" type="password" name="new_password" size="25" value="<?php echo (isset($this->_rootref['PASSWORD'])) ? $this->_rootref['PASSWORD'] : ''; ?>" /></td>
</tr>
<tr>
	<td class="row1 one"><b><?php echo ((isset($this->_rootref['L_CONFIRM_PASSWORD'])) ? $this->_rootref['L_CONFIRM_PASSWORD'] : ((isset($user->lang['CONFIRM_PASSWORD'])) ? $user->lang['CONFIRM_PASSWORD'] : '{ CONFIRM_PASSWORD }')); ?>: </b></td>
	<td class="row2 two"><input class="post" type="password" name="password_confirm" size="25" value="<?php echo (isset($this->_rootref['PASSWORD_CONFIRM'])) ? $this->_rootref['PASSWORD_CONFIRM'] : ''; ?>" /></td>
</tr>
<tr>
	<td class="row1 one"><b><?php echo ((isset($this->_rootref['L_LANGUAGE'])) ? $this->_rootref['L_LANGUAGE'] : ((isset($user->lang['LANGUAGE'])) ? $user->lang['LANGUAGE'] : '{ LANGUAGE }')); ?>: </b></td>
	<td class="row2 two"><select name="lang" onchange="change_language(this.value); return false;"><?php echo (isset($this->_rootref['S_LANG_OPTIONS'])) ? $this->_rootref['S_LANG_OPTIONS'] : ''; ?></select></td>
</tr>
<tr>
	<td class="row1 one"><b><?php echo ((isset($this->_rootref['L_TIMEZONE'])) ? $this->_rootref['L_TIMEZONE'] : ((isset($user->lang['TIMEZONE'])) ? $user->lang['TIMEZONE'] : '{ TIMEZONE }')); ?>: </b></td>
	<td class="row2 two"><select name="tz"><?php echo (isset($this->_rootref['S_TZ_OPTIONS'])) ? $this->_rootref['S_TZ_OPTIONS'] : ''; ?></select></td>
</tr>
<?php $_profile_fields_count = (isset($this->_tpldata['profile_fields'])) ? sizeof($this->_tpldata['profile_fields']) : 0;if ($_profile_fields_count) {for ($_profile_fields_i = 0; $_profile_fields_i < $_profile_fields_count; ++$_profile_fields_i){$_profile_fields_val = &$this->_tpldata['profile_fields'][$_profile_fields_i]; ?>

	<tr>
		<td class="row1 one">
			<b><?php echo $_profile_fields_val['LANG_NAME']; ?>: </b>
			<?php if ($_profile_fields_val['S_REQUIRED']) {  ?><b>*</b><?php } if ($_profile_fields_val['LANG_EXPLAIN']) {  ?><br /><?php echo $_profile_fields_val['LANG_EXPLAIN']; } ?>

		</td>
		<td class="row2 two"><?php echo $_profile_fields_val['FIELD']; if ($_profile_fields_val['ERROR']) {  ?><br /><?php echo $_profile_fields_val['ERROR']; } ?></td>
	</tr>
<?php }} if ($this->_rootref['S_CONFIRM_CODE']) {  ?>

	<tr>
		<td colspan="2"><h2><?php echo ((isset($this->_rootref['L_CONFIRMATION'])) ? $this->_rootref['L_CONFIRMATION'] : ((isset($user->lang['CONFIRMATION'])) ? $user->lang['CONFIRMATION'] : '{ CONFIRMATION }')); ?></h2></td>
	</tr>
	<tr>
		<td class="row1 two" colspan="2"><?php echo ((isset($this->_rootref['L_CONFIRM_EXPLAIN'])) ? $this->_rootref['L_CONFIRM_EXPLAIN'] : ((isset($user->lang['CONFIRM_EXPLAIN'])) ? $user->lang['CONFIRM_EXPLAIN'] : '{ CONFIRM_EXPLAIN }')); ?></td>
	</tr>
	<tr>
		<td class="row1 two" colspan="2" align="center"><?php echo (isset($this->_rootref['CONFIRM_IMG'])) ? $this->_rootref['CONFIRM_IMG'] : ''; ?></td>
	</tr>
	<tr>
		<td class="row1 one"><b><?php echo ((isset($this->_rootref['L_CONFIRM_CODE'])) ? $this->_rootref['L_CONFIRM_CODE'] : ((isset($user->lang['CONFIRM_CODE'])) ? $user->lang['CONFIRM_CODE'] : '{ CONFIRM_CODE }')); ?>: </b><br /><?php echo ((isset($this->_rootref['L_CONFIRM_CODE_EXPLAIN'])) ? $this->_rootref['L_CONFIRM_CODE_EXPLAIN'] : ((isset($user->lang['CONFIRM_CODE_EXPLAIN'])) ? $user->lang['CONFIRM_CODE_EXPLAIN'] : '{ CONFIRM_CODE_EXPLAIN }')); ?> <?php if ($this->_rootref['S_CONFIRM_REFRESH']) {  echo ((isset($this->_rootref['L_VC_REFRESH_EXPLAIN'])) ? $this->_rootref['L_VC_REFRESH_EXPLAIN'] : ((isset($user->lang['VC_REFRESH_EXPLAIN'])) ? $user->lang['VC_REFRESH_EXPLAIN'] : '{ VC_REFRESH_EXPLAIN }')); } ?></td>
		<td class="row2 two"><input class="post" type="text" name="confirm_code" size="8" maxlength="8" /><?php if ($this->_rootref['S_CONFIRM_REFRESH']) {  ?>&nbsp;<input type="submit" value="<?php echo ((isset($this->_rootref['L_VC_REFRESH'])) ? $this->_rootref['L_VC_REFRESH'] : ((isset($user->lang['VC_REFRESH'])) ? $user->lang['VC_REFRESH'] : '{ VC_REFRESH }')); ?>" class="button" /><?php } ?></td>
	</tr>
<?php } if ($this->_rootref['S_COPPA']) {  ?>

	<tr>
		<td colspan="2"><h2><?php echo ((isset($this->_rootref['L_COPPA_COMPLIANCE'])) ? $this->_rootref['L_COPPA_COMPLIANCE'] : ((isset($user->lang['COPPA_COMPLIANCE'])) ? $user->lang['COPPA_COMPLIANCE'] : '{ COPPA_COMPLIANCE }')); ?></h2></td>
	</tr>
	<tr>
		<td class="row3 one" colspan="2"><?php echo ((isset($this->_rootref['L_COPPA_EXPLAIN'])) ? $this->_rootref['L_COPPA_EXPLAIN'] : ((isset($user->lang['COPPA_EXPLAIN'])) ? $user->lang['COPPA_EXPLAIN'] : '{ COPPA_EXPLAIN }')); ?></td>
	</tr>
<?php } ?>


<tr>
	<td class="row3 pad4 txtcenter" colspan="2"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input class="button" type="submit" name="submit" id="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;&nbsp;<input class="button" type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" /></td>
</tr>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>
<?php $this->_tpl_include('breadcrumbs.html'); ?>


<div class="spacing"></div>

<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>

<?php $this->_tpl_include('overall_footer.html'); ?>