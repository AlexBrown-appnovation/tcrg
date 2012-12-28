<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<table cellspacing="1">
<tr class="toplines">
	<th><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></th>
</tr>
<tr>
	<td><h2><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></h2></td>
</tr>
<tr>
	<td class="row1 txtmiddle pad60"><?php echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?></td>
</tr>
</table>

<div class="spacing"></div>

<?php $this->_tpl_include('breadcrumbs.html'); $this->_tpl_include('overall_footer.html'); ?>