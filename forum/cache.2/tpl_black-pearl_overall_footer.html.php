<?php if (!defined('IN_PHPBB')) exit; ?><div style="text-align:center;"><?php if ($this->_rootref['U_ACP']) {  ?><br /><br /><span class="gensmall">[ <a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a> ]</span><br /><br /><?php } ?></div>

	<?php if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

</div>

<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

<div id="bottom_logo_ext">
<div id="bottom_logo">
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td class="np" nowrap="nowrap" width="250" align="left">
				<br /><span class="copyright">&nbsp;Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group</span><br /><br />
			</td>
			<td class="np" nowrap="nowrap" align="center">&nbsp;</td>
			<td class="np" nowrap="nowrap" width="250" align="right">
				<span class="copyright">Design by <a href="http://www.icyphoenix.com" target="_blank">Mighty Gorgon</a>&nbsp;</span>
			</td>
		</tr>
	</table>
</div>
</div>
		</td>
		<td class="rightshadow" width="9" valign="top"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/spacer.gif" alt="" width="9" height="1" /></td>
	</tr>
</table>
</div>

<div style="text-align:center;">
<span class="copyright">
<?php if ($this->_rootref['TRANSLATION_INFO']) {  echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; ?><br /><?php } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><bdo dir="ltr">[ <?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?> ]</bdo><?php } ?>

</span>
</div>

<a name="bottom"></a>

</body>
</html>