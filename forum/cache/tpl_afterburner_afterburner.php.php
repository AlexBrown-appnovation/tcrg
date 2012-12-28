<?php if (!defined('IN_PHPBB')) exit; 
global $config, $template;
$template->assign_vars(array(
// RokBB3 variables
		'S_SHOW_AFTERUSER'		=> ($config['show_jafteruser']) ? true : false,
                'SHOW_AFTER_BOTTOM'		=> ($config['show_after_bottom']) ? true : false,
                'SHOW_AFTER_TOP'		=> ($config['show_after_top']) ? true : false,
		'AFTER_MENUPOSITION'	=>  "{$config['after_menu_position']}",
                'AFTER_LOGO_LINK'	=>  "{$config['after_logo_link']}",
		'ALLOW_AFTER_COLORSWITCHER'=> ($config['show_after_colorswitcher']) ? true : false,
                'SHOW_AFTER_PATHWAY'		=> ($config['show_after_pathway']) ? true : false,
                'SHOW_AFTER_FONT'		=> ($config['show_after_font']) ? true : false,
                'SHOW_AFTER_COPYRIGHT'	=> ($config['show_after_copyright']) ? true : false,
                'AFTER_WIDTH'		=> "{$config['after_width']}",
                'AFTER_SIDECOL_WIDTH' => "{$config['after_sidecol_width']}",
                'AFTER_COLUMN_COLOR' => "{$config['after_column_color']}",
                
//Menu code
                'AFTER_BMENU_LINK1_HREF'	=>  "{$config['after_link1_href']}",
                'AFTER_BMENU_LINK1_DESC'	=>  "{$config['after_link1_desc']}",
                
                'AFTER_BMENU_LINK2_HREF'	=>  "{$config['after_link2_href']}",
                'AFTER_BMENU_LINK2_DESC'	=>  "{$config['after_link2_desc']}",
                
                'AFTER_BMENU_LINK3_HREF'	=>  "{$config['after_link3_href']}",
                'AFTER_BMENU_LINK3_DESC'	=>  "{$config['after_link3_desc']}",
                
                'AFTER_BMENU_LINK4_HREF'	=>  "{$config['after_link4_href']}",
                'AFTER_BMENU_LINK4_DESC'	=>  "{$config['after_link4_desc']}",
                
                'AFTER_BMENU_LINK5_HREF'	=>  "{$config['after_link5_href']}",
                'AFTER_BMENU_LINK5_DESC'	=>  "{$config['after_link5_desc']}", 
                
));

 if (! $this->_rootref['AFTER_MENUPOSITION']) {  
	global $template, $config;
	$template->assign_vars(array(
		'AFTER_MENUPOSITION'		=> "left",
		)
	);	
 } 
global $template, $config;

if (!isset($config['after_column_color'])) {
	$template->assign_vars(array(
		'AFTER_COLUMN_COLOR'		=> "color2",
		)
	);
 }


if (!isset($config['show_after_top'])) {
	$template->assign_vars(array(
		'SHOW_AFTER_TOP'		=> "true",
		)
	);
 }

if (!isset($config['show_after_bottom'])) {
	$template->assign_vars(array(
		'SHOW_AFTER_BOTTOM'		=> "true",
		)
	);
 }

if (!isset($config['show_jafteruser'])) {
	$template->assign_vars(array(
		'S_SHOW_AFTERUSER'		=> "true",
		)
	);
 }


if (!isset($config['show_after_font'])) {
	$template->assign_vars(array(
		'SHOW_AFTER_FONT'		=> "true",
		)
	);
 }

global $template, $config;
 if (!isset($config['show_after_pathway'])) {
	$template->assign_vars(array(
		'SHOW_AFTER_PATHWAY'		=> "true",
		)
	);
 }

if (!isset($config['show_after_colorswitcher'])) {
	$template->assign_vars(array(
		'ALLOW_AFTER_COLORSWITCHER'		=> "true",
		)
	);
 }
 

if (!isset($config['show_after_copyright'])) {
	$template->assign_vars(array(
		'SHOW_AFTER_COPYRIGHT'		=> "true",
		)
	);
 }

if (!isset($config['after_link1_desc'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK1_DESC'		=> "phpBB",
		)
	);
 }
 
 if (!isset($config['after_link1_href'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK1_HREF'		=> "http://www.phpbb.com",
		)
	);
 }
 
 if (!isset($config['after_link2_desc'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK2_DESC'		=> "phpBB blog",
		)
	);
 }
 
 if (!isset($config['after_link2_href'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK2_HREF'		=> "http://www.phpbb.com/blog",
		)
	);
 }
 
 
  if (!isset($config['after_link3_desc'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK3_DESC'		=> "phpBB community",
		)
	);
 }
 
 if (!isset($config['after_link3_href'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK3_HREF'		=> "http://www.phpbb.com/community/",
		)
	);
 }  
 
  if (!isset($config['after_link4_desc'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK4_DESC'		=> "phpBB customise",
		)
	);
 }
 
 if (!isset($config['after_link4_href'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK4_HREF'		=> "http://www.phpbb.com/customise/",
		)
	);
 }
 
 
   if (!isset($config['after_link5_desc'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK5_DESC'		=> "RT phpBB3 Styles",
		)
	);
 }
 
 if (!isset($config['after_link5_href'])) {
	$template->assign_vars(array(
		'AFTER_BMENU_LINK5_HREF'		=> "http://demo.rockettheme.com/phpbb3/",
		)
	);
 }

 ?>