<?php if (!defined('IN_PHPBB')) exit; if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
	
	By using this template, you agree to not remove the link to www.mikelothar.com.
	Feel free to add your own link next to it, if you have modified the template or similar.
	Feel free to ask for more information or ask questions at www.mikelothar.com.
	Feel free to feel free.
		
	Mike Lothar : 2004
	
	By using this template, you agree to not remove the link to www.countriesincolors.com.
	Feel free to add your own link next to it, if you have modified the template or similar.
	Feel free to ask for more information or ask questions at www.countriesincolors.com.
	Feel free to feel free.
		
	Countries in colors : 2008

//-->

<div class="copyright"><?php if ($this->_rootref['U_ACP']) {  ?><a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a><?php } ?></div>
	
	<div class="copyright">
		Powered by <a href="http://www.phpbb.com/">phpBB</a>
		//
		Template by <a href="http://www.mikelothar.com/" target="_mikelothar" title="Nosebleed template, created by Mike Lothar &copy; 2004">Mike Lothar</a><br />
		3.x port by <a href="http://www.countriesincolors.com/" target="_blank" title="Nosebleed template, updated by Countries in colors &copy; 2009">CiC</a> and <a href="http://www.willhough.net/" target="_willhough">will_hough</a> // GC
	<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><bdo dir="ltr">[ <?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?> ]</bdo><?php } ?><br /><br /></div>
		</td>
		<td>&nbsp;</td>
  </tr>
</table>

<div class="clear"><br /></div>

<!-- This tracker is for testing purposes only.  You can delete the code but I would appreciate it if you could please keep it for the first few hits.  That will allow me to identify your site dduring this alpha-testing stage.  Thank you.  More info on http://www.countriesinclors.com --><!-- Start of StatCounter Code -->
<script type="text/javascript">
sc_project=3610870; 
sc_invisible=1; 
sc_partition=41; 
sc_security="2e6577df"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div class="statcounter"><a href="http://www.statcounter.com/" target="_blank"><img class="statcounter" src="http://c42.statcounter.com/3610870/0/2e6577df/1/" alt="counter free hit unique web" ></a></div></noscript>
<!-- End of StatCounter Code -->
</body>
</html>