<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('styleswitcher.html'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>" lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" xml:lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>">
<head>

<meta http-equiv="content-type" content="text/html; charset=<?php echo (isset($this->_rootref['S_CONTENT_ENCODING'])) ? $this->_rootref['S_CONTENT_ENCODING'] : ''; ?>" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-language" content="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2000, 2002, 2005, 2007 phpBB Group" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<?php echo (isset($this->_rootref['META'])) ? $this->_rootref['META'] : ''; ?>

<title><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> &bull; <?php if ($this->_rootref['S_IN_MCP']) {  echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?> &bull; <?php } else if ($this->_rootref['S_IN_UCP']) {  echo ((isset($this->_rootref['L_UCP'])) ? $this->_rootref['L_UCP'] : ((isset($user->lang['UCP'])) ? $user->lang['UCP'] : '{ UCP }')); ?> &bull; <?php } echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></title>

<?php if ($this->_rootref['S_ENABLE_FEEDS']) {  if ($this->_rootref['S_ENABLE_FEEDS_OVERALL']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_NEWS']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FEED_NEWS'])) ? $this->_rootref['L_FEED_NEWS'] : ((isset($user->lang['FEED_NEWS'])) ? $user->lang['FEED_NEWS'] : '{ FEED_NEWS }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=news" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_FORUMS']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_ALL_FORUMS'])) ? $this->_rootref['L_ALL_FORUMS'] : ((isset($user->lang['ALL_FORUMS'])) ? $user->lang['ALL_FORUMS'] : '{ ALL_FORUMS }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=forums" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_TOPICS']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FEED_TOPICS_NEW'])) ? $this->_rootref['L_FEED_TOPICS_NEW'] : ((isset($user->lang['FEED_TOPICS_NEW'])) ? $user->lang['FEED_TOPICS_NEW'] : '{ FEED_TOPICS_NEW }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=topics" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_TOPICS_ACTIVE']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FEED_TOPICS_ACTIVE'])) ? $this->_rootref['L_FEED_TOPICS_ACTIVE'] : ((isset($user->lang['FEED_TOPICS_ACTIVE'])) ? $user->lang['FEED_TOPICS_ACTIVE'] : '{ FEED_TOPICS_ACTIVE }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=topics_active" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_FORUM'] && $this->_rootref['S_FORUM_ID']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?> - <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo (isset($this->_rootref['S_FORUM_ID'])) ? $this->_rootref['S_FORUM_ID'] : ''; ?>" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_TOPIC'] && $this->_rootref['S_TOPIC_ID']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?> - <?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo (isset($this->_rootref['S_FORUM_ID'])) ? $this->_rootref['S_FORUM_ID'] : ''; ?>&amp;t=<?php echo (isset($this->_rootref['S_TOPIC_ID'])) ? $this->_rootref['S_TOPIC_ID'] : ''; ?>" /><?php } } $this->_tpl_include('../../../rokbb3.php'); $this->_tpl_include('afterburner.php'); ?>


<!--
	phpBB style name: afterburner
	Based on style:   prosilver (this is the default phpBB3 style)
	Original author:  Tom Beddard ( http://www.subBlue.com/ )
	Modified by: RocketTheme, LLC (C) Copyright. All rights reserved.     
	
	NOTE: This page was generated by phpBB, the free open-source bulletin board package.
	      The phpBB Group is not responsible for the content of this page and forum. For more information
	      about phpBB please visit http://www.phpbb.com
-->

<script type="text/javascript">
// <![CDATA[
	var jump_page = '<?php echo ((isset($this->_rootref['LA_JUMP_PAGE'])) ? $this->_rootref['LA_JUMP_PAGE'] : ((isset($this->_rootref['L_JUMP_PAGE'])) ? addslashes($this->_rootref['L_JUMP_PAGE']) : ((isset($user->lang['JUMP_PAGE'])) ? addslashes($user->lang['JUMP_PAGE']) : '{ JUMP_PAGE }'))); ?>:';
	var on_page = '<?php echo (isset($this->_rootref['ON_PAGE'])) ? $this->_rootref['ON_PAGE'] : ''; ?>';
	var per_page = '<?php echo (isset($this->_rootref['PER_PAGE'])) ? $this->_rootref['PER_PAGE'] : ''; ?>';
	var base_url = '<?php echo (isset($this->_rootref['A_BASE_URL'])) ? $this->_rootref['A_BASE_URL'] : ''; ?>';
	var style_cookie = 'phpBBstyle';
	var style_cookie_settings = '<?php echo (isset($this->_rootref['A_COOKIE_SETTINGS'])) ? $this->_rootref['A_COOKIE_SETTINGS'] : ''; ?>';
	var onload_functions = new Array();
	var onunload_functions = new Array();

	<?php if ($this->_rootref['S_USER_PM_POPUP']) {  ?>

		if (<?php echo (isset($this->_rootref['S_NEW_PM'])) ? $this->_rootref['S_NEW_PM'] : ''; ?>)
		{
			var url = '<?php echo (isset($this->_rootref['UA_POPUP_PM'])) ? $this->_rootref['UA_POPUP_PM'] : ''; ?>';
			window.open(url.replace(/&amp;/g, '&'), '_phpbbprivmsg', 'height=225,resizable=yes,scrollbars=yes, width=400');
		}
	<?php } ?>


	/**
	* Find a member
	*/
	function find_username(url)
	{
		popup(url, 760, 570, '_usersearch');
		return false;
	}

	/**
	* New function for handling multiple calls to window.onload and window.unload by pentapenguin
	*/
	window.onload = function()
	{
		for (var i = 0; i < onload_functions.length; i++)
		{
			eval(onload_functions[i]);
		}
	}

	window.onunload = function()
	{
		for (var i = 0; i < onunload_functions.length; i++)
		{
			eval(onunload_functions[i]);
		}
	}

// ]]>
</script>
<?php if ($this->_rootref['SHOW_AFTER_FONT']) {  ?>

<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/styleswitcher.js"></script>
<?php } ?>

<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/forum_fn.js"></script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/rt_js/mootools-release-1.11.js"></script>

<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/print.css" rel="stylesheet" type="text/css" media="print" title="printonly" />
<link href="<?php echo (isset($this->_rootref['T_STYLESHEET_LINK'])) ? $this->_rootref['T_STYLESHEET_LINK'] : ''; ?>" rel="stylesheet" type="text/css" media="screen, projection" />
<?php if ($this->_rootref['SHOW_AFTER_FONT']) {  ?>

<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/small.css" rel="alternate stylesheet" type="text/css" title="A--" />
<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/normal.css" rel="stylesheet" type="text/css" title="A" />
<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/medium.css" rel="alternate stylesheet" type="text/css" title="A+" />
<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/large.css" rel="alternate stylesheet" type="text/css" title="A++" />
<?php } if ($this->_rootref['S_CONTENT_DIRECTION'] == ('rtl')) {  ?>

	<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/bidi.css" rel="stylesheet" type="text/css" media="screen, projection" />
<?php } ?>


  <style type="text/css">
    <!--

	#wrapper { margin: 0 auto; <?php if ($this->_rootref['AFTER_WIDTH']) {  ?>width:<?php echo (isset($this->_rootref['AFTER_WIDTH'])) ? $this->_rootref['AFTER_WIDTH'] : ''; ?>px;<?php } else { ?>width:962px;<?php } ?>padding:0;}
	.s-c-s #colmid { left:210px;}
	.s-c-s #colright { margin-left:-210px;}
	.s-c-s #col1pad { margin-left:210px;}
	.s-c-s #col2 { left:0px;width:210px;}
	.s-c-s #col3 { width:0px;}
	
	.s-c-x #colright { left:<?php if ($this->_rootref['AFTER_SIDECOL_WIDTH']) {  echo (isset($this->_rootref['AFTER_SIDECOL_WIDTH'])) ? $this->_rootref['AFTER_SIDECOL_WIDTH'] : ''; } else { ?>210<?php } ?>px;}
	.s-c-x #col1wrap { right:<?php if ($this->_rootref['AFTER_SIDECOL_WIDTH']) {  echo (isset($this->_rootref['AFTER_SIDECOL_WIDTH'])) ? $this->_rootref['AFTER_SIDECOL_WIDTH'] : ''; } else { ?>210<?php } ?>px;}
	.s-c-x #col1 { margin-left:<?php if ($this->_rootref['AFTER_SIDECOL_WIDTH']) {  echo (isset($this->_rootref['AFTER_SIDECOL_WIDTH'])) ? $this->_rootref['AFTER_SIDECOL_WIDTH'] : ''; } else { ?>210<?php } ?>px;}
	.s-c-x #col2 { right:<?php if ($this->_rootref['AFTER_SIDECOL_WIDTH']) {  echo (isset($this->_rootref['AFTER_SIDECOL_WIDTH'])) ? $this->_rootref['AFTER_SIDECOL_WIDTH'] : ''; } else { ?>210<?php } ?>px;width:<?php if ($this->_rootref['AFTER_SIDECOL_WIDTH']) {  echo (isset($this->_rootref['AFTER_SIDECOL_WIDTH'])) ? $this->_rootref['AFTER_SIDECOL_WIDTH'] : ''; } else { ?>210<?php } ?>px;}
	
	.x-c-s #colright { margin-left:-<?php if ($this->_rootref['AFTER_SIDECOL_WIDTH']) {  echo (isset($this->_rootref['AFTER_SIDECOL_WIDTH'])) ? $this->_rootref['AFTER_SIDECOL_WIDTH'] : ''; } else { ?>210<?php } ?>px;}
	.x-c-s #col1 { margin-left:<?php if ($this->_rootref['AFTER_SIDECOL_WIDTH']) {  echo (isset($this->_rootref['AFTER_SIDECOL_WIDTH'])) ? $this->_rootref['AFTER_SIDECOL_WIDTH'] : ''; } else { ?>210<?php } ?>px;}
	.x-c-s #col3 { left:<?php if ($this->_rootref['AFTER_SIDECOL_WIDTH']) {  echo (isset($this->_rootref['AFTER_SIDECOL_WIDTH'])) ? $this->_rootref['AFTER_SIDECOL_WIDTH'] : ''; } else { ?>210<?php } ?>px;width:<?php if ($this->_rootref['AFTER_SIDECOL_WIDTH']) {  echo (isset($this->_rootref['AFTER_SIDECOL_WIDTH'])) ? $this->_rootref['AFTER_SIDECOL_WIDTH'] : ''; } else { ?>210<?php } ?>px;}
	
	<?php if ($this->_rootref['AVATAR_POSITION'] == (left)) {  ?>

	.postprofile {float: left; border: 0px; margin-left: -6px;}
	.postbody {float: right;}
	ul.profile-icons {margin-right: 40px;}
	.online {background-position: 17% -1%;}
	<?php } if ($this->_rootref['AFTER_MENUPOSITION'] == (left) || $this->_rootref['AFTER_MENUPOSITION'] == (right)) {  ?>

#postingbox .autowidth {width: 90% !important; }
	#postingbox .column2 { width: 75%; margin-top:-65px; position: relative;}
	#postingbox .column1 { width: 70%;position: relative; z-index:10000;}
	#postingbox fieldset.fields1 dd { margin-left: 15em;}
	#colour_palette dd { margin-left: 6em !important;}
	<?php if (rok_isIe(7)) {print("#postingbox .column2 { width: 75%; margin-top:0px; position: relative; margin-left: -300px;}");} if (rok_isIe(6)) {print("#postingbox .column2 { width: 75%; margin-top:0px; position: relative; margin-left: -300px;} #message-box #message {width: 98%;}");} } ?>

    -->
  </style>

<link rel="stylesheet" href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/<?php if ($this->_rootref['AFTER_STYLE']) {  echo (isset($this->_rootref['AFTER_STYLE'])) ? $this->_rootref['AFTER_STYLE'] : ''; } else { ?>light4<?php } ?>.css" type="text/css" />

<!--[if lte IE 6]>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/rt_js/ie_suckerfish.js"></script>
<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/styles.ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/styles.ie7.css" type="text/css" />
<![endif]-->

<?php if ($this->_rootref['AFTER_STYLE'] == ('dark') || $this->_rootref['AFTER_STYLE'] == ('dark2') || $this->_rootref['AFTER_STYLE'] == ('dark3') || $this->_rootref['AFTER_STYLE'] == ('dark4')) {  ?>

<script type="text/javascript">
// <![CDATA[
window.addEvent('domready', function() {
  var newImagePath = '<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>/styles/afterburner_dark_imageset/imageset/'; // remember to add the ending forward slash
  var classToSearch = '.icon';
  var els = $$(classToSearch);
  if (els.length) {
    els.each(function(el) {
      var bg = el.getStyle('background-image'), newBg, imgSource;
      bg = bg.replace('")', '').replace(")", '');
      var tmp = bg.split('/');
      imgSource = tmp[tmp.length - 1];
      el.setStyle('background-image', 'url('+newImagePath+imgSource+')');     
    });
  }
});
// ]]>
</script>
<?php } ?><!-- RokBox phpBB3 Code Start --><?php if ($this->_rootref['ROKBOX']) {  ?>

<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/rokbox/rokbox.js"></script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/rokbox/themes/<?php if ($this->_rootref['ROKBOX_THEME']) {  echo (isset($this->_rootref['ROKBOX_THEME'])) ? $this->_rootref['ROKBOX_THEME'] : ''; } else { ?>light<?php } ?>/rokbox-config.js"></script>
<link href="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/rokbox/themes/<?php if ($this->_rootref['ROKBOX_THEME']) {  echo (isset($this->_rootref['ROKBOX_THEME'])) ? $this->_rootref['ROKBOX_THEME'] : ''; } else { ?>light<?php } ?>/rokbox-style.css" rel="stylesheet" type="text/css" media="screen, projection" />
<?php if ($this->_rootref['IE_VERSION'] == ('6')) {  ?>

<link href="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/rokbox/themes/<?php if ($this->_rootref['ROKBOX_THEME']) {  echo (isset($this->_rootref['ROKBOX_THEME'])) ? $this->_rootref['ROKBOX_THEME'] : ''; } else { ?>light<?php } ?>/rokbox-style-ie6.css" rel="stylesheet" type="text/css" media="screen, projection" />
<?php } if ($this->_rootref['IE_VERSION'] == ('7')) {  ?>

<link href="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/rokbox/themes/<?php if ($this->_rootref['ROKBOX_THEME']) {  echo (isset($this->_rootref['ROKBOX_THEME'])) ? $this->_rootref['ROKBOX_THEME'] : ''; } else { ?>light<?php } ?>/rokbox-style-ie7.css" rel="stylesheet" type="text/css" media="screen, projection" />
<?php } if ($this->_rootref['IE_VERSION'] == ('8')) {  ?>

<link href="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/rokbox/themes/<?php if ($this->_rootref['ROKBOX_THEME']) {  echo (isset($this->_rootref['ROKBOX_THEME'])) ? $this->_rootref['ROKBOX_THEME'] : ''; } else { ?>light<?php } ?>/rokbox-style-ie8.css" rel="stylesheet" type="text/css" media="screen, projection" />
<?php } } ?><!-- RokBox phpBB3 Code End -->
</head>



<body id="phpbb" class="<?php if ($this->_rootref['AFTER_STYLE'] == ('dark') || $this->_rootref['AFTER_STYLE'] == ('dark2') || $this->_rootref['AFTER_STYLE'] == ('dark3') || $this->_rootref['AFTER_STYLE'] == ('dark4')) {  ?>dark <?php } ?>section-<?php echo (isset($this->_rootref['SCRIPT_NAME'])) ? $this->_rootref['SCRIPT_NAME'] : ''; ?> <?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>">
	<?php echo (isset($this->_rootref['AFTER_BODY'])) ? $this->_rootref['AFTER_BODY'] : ''; ?>

<div class="background"></div>
<div id="main">
	<div id="wrapper" class="foreground">
	    <div id="header">
    				<?php if ($this->_rootref['SHOW_AFTER_TOP']) {  ?>

				<div class="module">
		
			    <div class="module-body">
	       <ul class="menu">		<?php if ($this->_rootref['AFTER_BMENU_LINK1_HREF'] || $this->_rootref['AFTER_BMENU_LINK1_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK1_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK1_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK1_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK1_DESC'] : ''; ?></a></li><?php } if ($this->_rootref['AFTER_BMENU_LINK2_HREF'] || $this->_rootref['AFTER_BMENU_LINK2_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK2_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK2_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK2_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK2_DESC'] : ''; ?></a></li><?php } if ($this->_rootref['AFTER_BMENU_LINK3_HREF'] || $this->_rootref['AFTER_BMENU_LINK3_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK3_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK3_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK3_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK3_DESC'] : ''; ?></a></li><?php } if ($this->_rootref['AFTER_BMENU_LINK4_HREF'] || $this->_rootref['AFTER_BMENU_LINK4_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK4_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK4_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK4_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK4_DESC'] : ''; ?></a></li><?php } if ($this->_rootref['AFTER_BMENU_LINK5_HREF'] || $this->_rootref['AFTER_BMENU_LINK5_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK5_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK5_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK5_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK5_DESC'] : ''; ?></a></li><?php } ?></ul>        </div>
	</div><?php } ?>

			
    	    <a href="<?php if ($this->_rootref['AFTER_LOGO_LINK']) {  echo (isset($this->_rootref['AFTER_LOGO_LINK'])) ? $this->_rootref['AFTER_LOGO_LINK'] : ''; } else { echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; } ?>"><span id="logo"></span></a>
		</div>
   
		<div id="nav">
		    <?php if ($this->_rootref['S_ALLOW_JMENU']) {  if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>

                            <?php echo (isset($this->_rootref['T_JOOMLA_MENU_REG'])) ? $this->_rootref['T_JOOMLA_MENU_REG'] : ''; ?>

                            <?php } else { ?>

                            <?php echo (isset($this->_rootref['T_JOOMLA_MENU'])) ? $this->_rootref['T_JOOMLA_MENU'] : ''; ?>

                            <?php } } else { ?>

									
									  <ul class="menutop">
<li<?php echo (isset($this->_rootref['U_INDEX_STYLE'])) ? $this->_rootref['U_INDEX_STYLE'] : ''; ?>><a class="orphan item bullet" href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" accesskey="h"><span><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></span></a></li>
 
<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>

 
                <li<?php echo (isset($this->_rootref['U_PROFILE_STYLE'])) ? $this->_rootref['U_PROFILE_STYLE'] : ''; ?>><a class="orphan item bullet" href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="u"><span><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></span></a></li>
<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?><li<?php echo (isset($this->_rootref['U_PRIVATEMSGS_STYLE'])) ? $this->_rootref['U_PRIVATEMSGS_STYLE'] : ''; ?>><a class="orphan item bullet" href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><span><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></span></a></li><?php } } ?>  
 
 
<li<?php echo (isset($this->_rootref['U_FAQ_STYLE'])) ? $this->_rootref['U_FAQ_STYLE'] : ''; ?>><a class="orphan item bullet" href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>"><span><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></span></a></li>
                <?php if (! $this->_rootref['S_IS_BOT']) {  if (! $this->_rootref['S_USER_LOGGED_IN']) {  ?><li<?php echo (isset($this->_rootref['U_REGISTER_STYLE'])) ? $this->_rootref['U_REGISTER_STYLE'] : ''; ?>><a class="orphan item bullet" href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><span><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></span></a></li><?php } ?>

                    <li<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT_STYLE'])) ? $this->_rootref['U_LOGIN_LOGOUT_STYLE'] : ''; ?>><a class="orphan item bullet" href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="l"><span><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></span></a></li>
                <?php } ?>

 
</ul>
                    <?php } ?>

		</div>
		<div id="message">
		    
		</div>
				
        <div id="main-content" class="<?php if ($this->_rootref['AFTER_MENUPOSITION'] == (left)) {  ?>s<?php } else { ?>x<?php } ?>-c-<?php if ($this->_rootref['AFTER_MENUPOSITION'] == (right)) {  ?>s<?php } else { ?>x<?php } ?>">
            <div id="colmask" class="ckl-<?php if ($this->_rootref['AFTER_COLUMN_COLOR']) {  echo (isset($this->_rootref['AFTER_COLUMN_COLOR'])) ? $this->_rootref['AFTER_COLUMN_COLOR'] : ''; } else { ?>color2<?php } ?>">
                <div id="colmid" class="cdr-<?php if ($this->_rootref['AFTER_COLUMN_COLOR']) {  echo (isset($this->_rootref['AFTER_COLUMN_COLOR'])) ? $this->_rootref['AFTER_COLUMN_COLOR'] : ''; } else { ?>color2<?php } ?>">
                    <div id="colright" class="ctr-<?php if ($this->_rootref['AFTER_COLUMN_COLOR']) {  echo (isset($this->_rootref['AFTER_COLUMN_COLOR'])) ? $this->_rootref['AFTER_COLUMN_COLOR'] : ''; } else { ?>color2<?php } ?>">
                        <div id="col1wrap">
							<div id="col1pad">
                            	<div id="col1">
									                                    <?php if ($this->_rootref['SHOW_AFTER_PATHWAY']) {  ?>

													    <div class="breadcrumbs-pad">
                                        <div class="breadcrumbs">
<a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" accesskey="h" class="pathway"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a> <?php $_navlinks_count = (isset($this->_tpldata['navlinks'])) ? sizeof($this->_tpldata['navlinks']) : 0;if ($_navlinks_count) {for ($_navlinks_i = 0; $_navlinks_i < $_navlinks_count; ++$_navlinks_i){$_navlinks_val = &$this->_tpldata['navlinks'][$_navlinks_i]; ?> <span class="sep">\</span> <a href="<?php echo $_navlinks_val['U_VIEW_FORUM']; ?>"><?php echo $_navlinks_val['FORUM_NAME']; ?></a><?php }} ?>


    									</div>

                                    </div><?php } ?>

													    
					
					
					
																		                                    <div class="component-pad">
                                        
<div id="page">

<div id="wrap">
	<a id="top" name="top" accesskey="t"></a>
	<div id="page-header">

	<?php if ($this->_rootref['AFTER_MENUPOSITION'] == (full)) {  ?>

		<div class="navbar">
			<div class="inner">

			<ul class="linklist navlinks">
				<?php if ($this->_rootref['SHOW_AFTER_FONT']) {  ?>

				<li class="rightside"><a href="#" onclick="fontsizeup(); return false;" onkeypress="fontsizeup(); return false;" class="fontsize" title="<?php echo ((isset($this->_rootref['L_CHANGE_FONT_SIZE'])) ? $this->_rootref['L_CHANGE_FONT_SIZE'] : ((isset($user->lang['CHANGE_FONT_SIZE'])) ? $user->lang['CHANGE_FONT_SIZE'] : '{ CHANGE_FONT_SIZE }')); ?>"><?php echo ((isset($this->_rootref['L_CHANGE_FONT_SIZE'])) ? $this->_rootref['L_CHANGE_FONT_SIZE'] : ((isset($user->lang['CHANGE_FONT_SIZE'])) ? $user->lang['CHANGE_FONT_SIZE'] : '{ CHANGE_FONT_SIZE }')); ?></a></li><?php } if ($this->_rootref['U_EMAIL_TOPIC']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_EMAIL_TOPIC'])) ? $this->_rootref['U_EMAIL_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?>" class="sendemail"><?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_EMAIL_PM']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_EMAIL_PM'])) ? $this->_rootref['U_EMAIL_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?>" class="sendemail"><?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?></a></li><?php } if ($this->_rootref['U_PRINT_TOPIC']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_PRINT_TOPIC'])) ? $this->_rootref['U_PRINT_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?>" accesskey="p" class="print"><?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_PRINT_PM']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_PRINT_PM'])) ? $this->_rootref['U_PRINT_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?>" accesskey="p" class="print"><?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?></a></li><?php } ?>

			</ul>

			<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>

			<ul class="linklist leftside">
				<li class="icon-ucp">
					<a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="e"><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></a>
						<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?> (<a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></a>)<?php } if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?> &bull;
					<a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></a>
					<?php } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?> &bull;
					<a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></a>
					<?php } ?>

				</li>
			</ul>
			<?php } ?>


			<ul class="linklist rightside">
				<li class="icon-faq"><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></a></li>
				<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?><li class="icon-members"><a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['MEMBERLIST_EXPLAIN'])) ? $user->lang['MEMBERLIST_EXPLAIN'] : '{ MEMBERLIST_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></a></li><?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && $this->_rootref['S_REGISTER_ENABLED'] && ! ( $this->_rootref['S_SHOW_COPPA'] || $this->_rootref['S_REGISTRATION'] )) {  ?><li class="icon-register"><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a></li><?php } ?>

					<li class="icon-logout"><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="x"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a></li>
				<?php } ?>

			</ul>
</div>
		</div>
		<?php } else { ?>

	
			<ul class="linklist ">
				<?php if ($this->_rootref['SHOW_AFTER_FONT']) {  ?><li class="rightside"><a href="#" onclick="fontsizeup(); return false;" onkeypress="fontsizeup(); return false;" class="fontsize" title="<?php echo ((isset($this->_rootref['L_CHANGE_FONT_SIZE'])) ? $this->_rootref['L_CHANGE_FONT_SIZE'] : ((isset($user->lang['CHANGE_FONT_SIZE'])) ? $user->lang['CHANGE_FONT_SIZE'] : '{ CHANGE_FONT_SIZE }')); ?>"><?php echo ((isset($this->_rootref['L_CHANGE_FONT_SIZE'])) ? $this->_rootref['L_CHANGE_FONT_SIZE'] : ((isset($user->lang['CHANGE_FONT_SIZE'])) ? $user->lang['CHANGE_FONT_SIZE'] : '{ CHANGE_FONT_SIZE }')); ?></a></li><?php } if ($this->_rootref['U_EMAIL_TOPIC']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_EMAIL_TOPIC'])) ? $this->_rootref['U_EMAIL_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?>" class="sendemail"><?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_EMAIL_PM']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_EMAIL_PM'])) ? $this->_rootref['U_EMAIL_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?>" class="sendemail"><?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?></a></li><?php } if ($this->_rootref['U_PRINT_TOPIC']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_PRINT_TOPIC'])) ? $this->_rootref['U_PRINT_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?>" accesskey="p" class="print"><?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_PRINT_PM']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_PRINT_PM'])) ? $this->_rootref['U_PRINT_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?>" accesskey="p" class="print"><?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?></a></li><?php } ?>

			</ul>

<?php } ?>


	</div>

	<a name="start_here"></a>
	<div id="page-body">
		
		 <?php if ($this->_rootref['S_BOARD_DISABLED'] && $this->_rootref['S_USER_LOGGED_IN'] && ( $this->_rootref['U_MCP'] || $this->_rootref['U_ACP'] )) {  ?>

		<div id="information" class="rules">
			<div class="inner"><span class="corners-top"><span></span></span>
				<strong><?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?>:</strong> <?php echo ((isset($this->_rootref['L_BOARD_DISABLED'])) ? $this->_rootref['L_BOARD_DISABLED'] : ((isset($user->lang['BOARD_DISABLED'])) ? $user->lang['BOARD_DISABLED'] : '{ BOARD_DISABLED }')); ?>

			<span class="corners-bottom"><span></span></span></div>
		</div>
		<?php } ?>