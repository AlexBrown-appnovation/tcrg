<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<form method="post" action="<?php echo (isset($this->_rootref['S_MODE_ACTION'])) ? $this->_rootref['S_MODE_ACTION'] : ''; ?>">

<table class="viewforum" width="100%" cellspacing="1">
<tr class="toplines">
	<th nowrap="nowrap" width="20%"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></th>
	<th nowrap="nowrap" width="25%"><?php echo ((isset($this->_rootref['L_FORUMS'])) ? $this->_rootref['L_FORUMS'] : ((isset($user->lang['FORUMS'])) ? $user->lang['FORUMS'] : '{ FORUMS }')); ?></th>
	<th nowrap="nowrap" width="20%"><?php echo ((isset($this->_rootref['L_PRIMARY_GROUP'])) ? $this->_rootref['L_PRIMARY_GROUP'] : ((isset($user->lang['PRIMARY_GROUP'])) ? $user->lang['PRIMARY_GROUP'] : '{ PRIMARY_GROUP }')); ?></th>
	<th nowrap="nowrap" width="15%"><?php echo ((isset($this->_rootref['L_RANK'])) ? $this->_rootref['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ RANK }')); ?></th>
	<th nowrap="nowrap" width="11%"><?php echo ((isset($this->_rootref['L_SEND_MESSAGE'])) ? $this->_rootref['L_SEND_MESSAGE'] : ((isset($user->lang['SEND_MESSAGE'])) ? $user->lang['SEND_MESSAGE'] : '{ SEND_MESSAGE }')); ?></th>
</tr>
<tr>
	<td colspan="5"><h2><?php echo ((isset($this->_rootref['L_ADMINISTRATORS'])) ? $this->_rootref['L_ADMINISTRATORS'] : ((isset($user->lang['ADMINISTRATORS'])) ? $user->lang['ADMINISTRATORS'] : '{ ADMINISTRATORS }')); ?></h2></td>
</tr>
<?php $_admin_count = (isset($this->_tpldata['admin'])) ? sizeof($this->_tpldata['admin']) : 0;if ($_admin_count) {for ($_admin_i = 0; $_admin_i < $_admin_count; ++$_admin_i){$_admin_val = &$this->_tpldata['admin'][$_admin_i]; if (!($_admin_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row2"><?php } else { ?><tr class="row1"><?php } ?>


	<td class="pad10 txtmiddle"><strong><?php echo $_admin_val['USERNAME_FULL']; ?></strong></td>
	<td align="center">&nbsp;</td>
	<td align="center" nowrap="nowrap">&nbsp;
		<?php if ($_admin_val['U_GROUP']) {  ?>

			<a<?php if ($_admin_val['GROUP_COLOR']) {  ?> style="font-weight: bold; color:#<?php echo $_admin_val['GROUP_COLOR']; ?>"<?php } ?> href="<?php echo $_admin_val['U_GROUP']; ?>"><?php echo $_admin_val['GROUP_NAME']; ?></a>
		<?php } else { ?>

			<?php echo $_admin_val['GROUP_NAME']; ?>

		<?php } ?>

	&nbsp;</td>
	<td class="pad10 txtmiddle"><?php if ($_admin_val['RANK_IMG']) {  echo $_admin_val['RANK_IMG']; } else { echo $_admin_val['RANK_TITLE']; } ?></td>
	<td align="center">&nbsp;<?php if ($_admin_val['U_PM']) {  ?><a href="<?php echo $_admin_val['U_PM']; ?>"><?php echo (isset($this->_rootref['PM_IMG'])) ? $this->_rootref['PM_IMG'] : ''; ?></a><?php } ?>&nbsp;</td>
</tr>
<?php }} else { ?>

	<tr>
		<td class="row1 pad10 txtmiddle" colspan="5"><?php echo ((isset($this->_rootref['L_NO_ADMINISTRATORS'])) ? $this->_rootref['L_NO_ADMINISTRATORS'] : ((isset($user->lang['NO_ADMINISTRATORS'])) ? $user->lang['NO_ADMINISTRATORS'] : '{ NO_ADMINISTRATORS }')); ?></td>
	</tr>
<?php } ?>

<tr>
	<td colspan="5"><h2><?php echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); ?></h2></td>
</tr>
<?php $_mod_count = (isset($this->_tpldata['mod'])) ? sizeof($this->_tpldata['mod']) : 0;if ($_mod_count) {for ($_mod_i = 0; $_mod_i < $_mod_count; ++$_mod_i){$_mod_val = &$this->_tpldata['mod'][$_mod_i]; if (!($_mod_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row2"><?php } else { ?><tr class="row1"><?php } ?>


	<td class="pad10 txtmiddle"><strong><?php echo $_mod_val['USERNAME_FULL']; ?></strong></td>
	<td align="center"><?php if (! $_mod_val['FORUMS']) {  echo ((isset($this->_rootref['L_ALL_FORUMS'])) ? $this->_rootref['L_ALL_FORUMS'] : ((isset($user->lang['ALL_FORUMS'])) ? $user->lang['ALL_FORUMS'] : '{ ALL_FORUMS }')); } else { ?><select style="width: 200px;"><?php echo $_mod_val['FORUMS']; ?></select><?php } ?>&nbsp;</td>
	<td align="center" nowrap="nowrap">&nbsp;
		<?php if ($_mod_val['U_GROUP']) {  ?>

			<a<?php if ($_mod_val['GROUP_COLOR']) {  ?> style="font-weight: bold; color:#<?php echo $_mod_val['GROUP_COLOR']; ?>"<?php } ?> href="<?php echo $_mod_val['U_GROUP']; ?>"><?php echo $_mod_val['GROUP_NAME']; ?></a>
		<?php } else { ?>

			<?php echo $_mod_val['GROUP_NAME']; ?>

		<?php } ?>

	&nbsp;</td>
	<td class="pad10 txtmiddle"><?php if ($_mod_val['RANK_IMG']) {  echo $_mod_val['RANK_IMG']; } else { echo $_mod_val['RANK_TITLE']; } ?></td>
	<td align="center">&nbsp;<?php if ($_mod_val['U_PM']) {  ?><a href="<?php echo $_mod_val['U_PM']; ?>"><?php echo (isset($this->_rootref['PM_IMG'])) ? $this->_rootref['PM_IMG'] : ''; ?></a><?php } ?>&nbsp;</td>
</tr>
<?php }} else { ?>

	<tr>
		<td class="row1 pad10 txtmiddle" colspan="5"><?php echo ((isset($this->_rootref['L_NO_MODERATORS'])) ? $this->_rootref['L_NO_MODERATORS'] : ((isset($user->lang['NO_MODERATORS'])) ? $user->lang['NO_MODERATORS'] : '{ NO_MODERATORS }')); ?></td>
	</tr>
<?php } ?>

</table>

</form>

<?php $this->_tpl_include('breadcrumbs.html'); ?>


<div class="spacing"></div>

<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>

<?php $this->_tpl_include('overall_footer.html'); ?>