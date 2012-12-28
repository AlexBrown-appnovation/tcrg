<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Your account has been deactivated

Hello <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Your account on "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" has been deactivated, most likely due to changes made to your profile. The administrator of the board will need to activate it before you can log in. You will receive another notification when this has occurred.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>