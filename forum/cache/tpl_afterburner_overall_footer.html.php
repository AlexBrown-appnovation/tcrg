<?php if (!defined('IN_PHPBB')) exit; ?></div>

<div id="page-footer">

	<div class="navbar">
		<div class="inner"><span class="corners-top"><span></span></span>

		<ul class="linklist">
			<li class="icon-home"><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" accesskey="h"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a></li>
				<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_WATCH_FORUM_LINK']) {  ?><li <?php if ($this->_rootref['S_WATCHING_FORUM']) {  ?>class="icon-unsubscribe"<?php } else { ?>class="icon-subscribe"<?php } ?>><a href="<?php echo (isset($this->_rootref['S_WATCH_FORUM_LINK'])) ? $this->_rootref['S_WATCH_FORUM_LINK'] : ''; ?>" title="<?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?>"><?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?></a></li><?php } if ($this->_rootref['U_WATCH_TOPIC']) {  ?><li <?php if ($this->_rootref['S_WATCHING_TOPIC']) {  ?>class="icon-unsubscribe"<?php } else { ?>class="icon-subscribe"<?php } ?>><a href="<?php echo (isset($this->_rootref['U_WATCH_TOPIC'])) ? $this->_rootref['U_WATCH_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_BOOKMARK_TOPIC']) {  ?><li class="icon-bookmark"><a href="<?php echo (isset($this->_rootref['U_BOOKMARK_TOPIC'])) ? $this->_rootref['U_BOOKMARK_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_BUMP_TOPIC']) {  ?><li class="icon-bump"><a href="<?php echo (isset($this->_rootref['U_BUMP_TOPIC'])) ? $this->_rootref['U_BUMP_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BUMP_TOPIC'])) ? $this->_rootref['L_BUMP_TOPIC'] : ((isset($user->lang['BUMP_TOPIC'])) ? $user->lang['BUMP_TOPIC'] : '{ BUMP_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_BUMP_TOPIC'])) ? $this->_rootref['L_BUMP_TOPIC'] : ((isset($user->lang['BUMP_TOPIC'])) ? $user->lang['BUMP_TOPIC'] : '{ BUMP_TOPIC }')); ?></a></li><?php } } ?>

			<li class="rightside"><?php if ($this->_rootref['U_TEAM']) {  ?><a href="<?php echo (isset($this->_rootref['U_TEAM'])) ? $this->_rootref['U_TEAM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_THE_TEAM'])) ? $this->_rootref['L_THE_TEAM'] : ((isset($user->lang['THE_TEAM'])) ? $user->lang['THE_TEAM'] : '{ THE_TEAM }')); ?></a> &bull; <?php } if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo (isset($this->_rootref['U_DELETE_COOKIES'])) ? $this->_rootref['U_DELETE_COOKIES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_DELETE_COOKIES'])) ? $this->_rootref['L_DELETE_COOKIES'] : ((isset($user->lang['DELETE_COOKIES'])) ? $user->lang['DELETE_COOKIES'] : '{ DELETE_COOKIES }')); ?></a> &bull; <a href="index.php?delete_cookies=true">Delete style cookies</a> &bull; <?php } echo (isset($this->_rootref['S_TIMEZONE'])) ? $this->_rootref['S_TIMEZONE'] : ''; ?></li>
		</ul>

		<span class="corners-bottom"><span></span></span></div>
	</div>
	

</div>

</div>

<div>
	<a id="bottom" name="bottom" accesskey="z"></a>
	<?php if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

</div>

</div>

                                    </div>
										                            </div>
							</div>
                        </div>
						                        <?php if ($this->_rootref['AFTER_MENUPOSITION'] == (left)) {  ?>

									<div id="col2" class="<?php if ($this->_rootref['AFTER_COLUMN_COLOR']) {  echo (isset($this->_rootref['AFTER_COLUMN_COLOR'])) ? $this->_rootref['AFTER_COLUMN_COLOR'] : ''; } else { ?>color2<?php } ?>">
                        			<?php if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  ?>

							<div class="module">
		
				<h3 class="module-title">Search</h3>
			    <div class="module-body">
	        	
			
		<form action="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" method="post" id="search">
				<fieldset>
					<input name="keywords" id="keywords" type="text" maxlength="128" title="<?php echo ((isset($this->_rootref['L_SEARCH_KEYWORDS'])) ? $this->_rootref['L_SEARCH_KEYWORDS'] : ((isset($user->lang['SEARCH_KEYWORDS'])) ? $user->lang['SEARCH_KEYWORDS'] : '{ SEARCH_KEYWORDS }')); ?>" class="inputbox search" value="<?php if ($this->_rootref['SEARCH_WORDS']) {  echo (isset($this->_rootref['SEARCH_WORDS'])) ? $this->_rootref['SEARCH_WORDS'] : ''; } else { echo ((isset($this->_rootref['L_SEARCH_MINI'])) ? $this->_rootref['L_SEARCH_MINI'] : ((isset($user->lang['SEARCH_MINI'])) ? $user->lang['SEARCH_MINI'] : '{ SEARCH_MINI }')); } ?>" onclick="if(this.value=='<?php echo ((isset($this->_rootref['LA_SEARCH_MINI'])) ? $this->_rootref['LA_SEARCH_MINI'] : ((isset($this->_rootref['L_SEARCH_MINI'])) ? addslashes($this->_rootref['L_SEARCH_MINI']) : ((isset($user->lang['SEARCH_MINI'])) ? addslashes($user->lang['SEARCH_MINI']) : '{ SEARCH_MINI }'))); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo ((isset($this->_rootref['LA_SEARCH_MINI'])) ? $this->_rootref['LA_SEARCH_MINI'] : ((isset($this->_rootref['L_SEARCH_MINI'])) ? addslashes($this->_rootref['L_SEARCH_MINI']) : ((isset($user->lang['SEARCH_MINI'])) ? addslashes($user->lang['SEARCH_MINI']) : '{ SEARCH_MINI }'))); ?>';" /> 
					<input class="button2" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" type="submit" style="margin-top: 5px;margin-bottom: 5px;"/><br />
					<a href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>" ><?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?></a> <?php echo (isset($this->_rootref['S_SEARCH_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_HIDDEN_FIELDS'] : ''; ?>

				</fieldset>
				</form>
			    </div>
	</div><?php } ?>

						
						<div class="module">
		
				<h3 class="module-title">Main Menu</h3>
			    <div class="module-body">
	        			<?php if ($this->_rootref['S_DISPLAY_SEARCH'] || ( $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] )) {  ?>

	<ul class="menu">
	<?php if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

		<li class="parent <?php if ($this->_rootref['U_SEARCH_ID'] == ('unanswered')) {  ?>active<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_SEARCH_UNANSWERED'])) ? $this->_rootref['L_SEARCH_UNANSWERED'] : ((isset($user->lang['SEARCH_UNANSWERED'])) ? $user->lang['SEARCH_UNANSWERED'] : '{ SEARCH_UNANSWERED }')); ?></span></a></li><?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>

		<li class="parent <?php if ($this->_rootref['U_SEARCH_ID'] == ('newposts')) {  ?>active<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_SEARCH_NEW'])) ? $this->_rootref['L_SEARCH_NEW'] : ((isset($user->lang['SEARCH_NEW'])) ? $user->lang['SEARCH_NEW'] : '{ SEARCH_NEW }')); ?></span></a></li><?php } ?>

		<li class="parent <?php if ($this->_rootref['U_SEARCH_ID'] == ('active_topics')) {  ?>active<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['L_SEARCH_ACTIVE_TOPICS'] : ((isset($user->lang['SEARCH_ACTIVE_TOPICS'])) ? $user->lang['SEARCH_ACTIVE_TOPICS'] : '{ SEARCH_ACTIVE_TOPICS }')); ?></span></a></li>
	<?php } ?>

	<li class="<?php if ($this->_rootref['U_SEARCH_ID'] == ('egosearch')) {  ?>active<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></span></a></li>
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>" accesskey="m" ><span><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></span></a></li><?php } ?>

	</ul>	
<?php } ?>		        </div>
	</div>
						
						<?php if ($this->_rootref['S_SHOW_AFTERUSER']) {  ?>

						<div class="module">
		
				<h3 class="module-title">User Menu</h3>
			    <div class="module-body">
	        			<ul class="menu">
	<?php if ($this->_rootref['U_MCP']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></span></a></li><?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>


				<li<?php echo (isset($this->_rootref['U_PROFILE_STYLE'])) ? $this->_rootref['U_PROFILE_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="u" ><span><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></span></a></li>
						<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?><li<?php echo (isset($this->_rootref['U_PRIVATEMSGS_STYLE'])) ? $this->_rootref['U_PRIVATEMSGS_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>" ><span><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></span></a></li><?php } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?>

					<li ><a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></span></a></li>
					<?php } } ?>



				<li<?php echo (isset($this->_rootref['U_FAQ_STYLE'])) ? $this->_rootref['U_FAQ_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>" ><span><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></span></a></li>
				<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?><li<?php echo (isset($this->_rootref['U_MEMBERLIST_STYLE'])) ? $this->_rootref['U_MEMBERLIST_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['MEMBERLIST_EXPLAIN'])) ? $user->lang['MEMBERLIST_EXPLAIN'] : '{ MEMBERLIST_EXPLAIN }')); ?>" ><span><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></span></a></li><?php } if (! $this->_rootref['S_USER_LOGGED_IN']) {  ?><li<?php echo (isset($this->_rootref['U_REGISTER_STYLE'])) ? $this->_rootref['U_REGISTER_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></span></a></li><?php } ?>

					<li<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT_STYLE'])) ? $this->_rootref['U_LOGIN_LOGOUT_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="l" ><span><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></span></a></li>
				<?php } ?>

	</ul>			        </div>
	</div>
						<?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>				
			<div class="module">
		
				<h3 class="module-title">Login Form</h3>
			    <div class="module-body">
			<form method="post" action="<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>ucp.php?mode=login" class="form-login">
				<p id="form-login-username">
					<label for="modlgn_username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></label><br />
			<input type="text" name="username" id="username" class="inputbox" value="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" alt="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" onblur="if(this.value=='') this.value='<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>';" onfocus="if(this.value=='<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>') this.value='';" />
		</p>
		<p id="form-login-password">
			<label for="modlgn_username"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?></label><br />
			<input type="password" name="password" id="password"  class="inputbox" alt="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>" onblur="if(this.value=='') this.value='<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>';" onfocus="if(this.value=='<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>') this.value='';" />
		</p>
		
			<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?>

			<p id="form-login-remember">
			<input type="checkbox" name="autologin" id="autologin" class="checkbox" value="yes" alt="<?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?>" />
			<label class="remember">
				<?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?>			</label>	
			</p>
			<?php } ?>

			<input name="redirect" value="<?php echo (isset($this->_rootref['LOGIN_REDIRECT'])) ? $this->_rootref['LOGIN_REDIRECT'] : ''; ?>" type="hidden" />
			<input type="submit" name="login" class="button" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" />

	</form>
		
		

		
        </div>
	</div>
			<?php } if ($this->_rootref['ALLOW_AFTER_COLORSWITCHER']) {  ?>

			<div class="module">
		
				<h3 class="module-title">Style switcher</h3>
			    <div class="module-body">
	 
	 <a href="index.php?ntheme=light">Style1</a> | 
<a href="index.php?ntheme=light2">Style2</a> | 
<a href="index.php?ntheme=light3">Style3</a> | 
<a href="index.php?ntheme=light4">Style4</a> | 
<a href="index.php?ntheme=dark">Style5</a> | 
<a href="index.php?ntheme=dark2">Style6</a> |
<a href="index.php?ntheme=dark3">Style7</a> |
<a href="index.php?ntheme=dark4">Style8</a> | 
	 
		        </div>
	</div>
			<?php } ?>

			
                        </div>
			<?php } if ($this->_rootref['AFTER_MENUPOSITION'] == (right)) {  ?>

									<div id="col3" class="<?php if ($this->_rootref['AFTER_COLUMN_COLOR']) {  echo (isset($this->_rootref['AFTER_COLUMN_COLOR'])) ? $this->_rootref['AFTER_COLUMN_COLOR'] : ''; } else { ?>color2<?php } ?>">
                        			<?php if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  ?>

							<div class="module">
		
				<h3 class="module-title">Search</h3>
			    <div class="module-body">
	        	
			
		<form action="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" method="post" id="search">
				<fieldset>
					<input name="keywords" id="keywords" type="text" maxlength="128" title="<?php echo ((isset($this->_rootref['L_SEARCH_KEYWORDS'])) ? $this->_rootref['L_SEARCH_KEYWORDS'] : ((isset($user->lang['SEARCH_KEYWORDS'])) ? $user->lang['SEARCH_KEYWORDS'] : '{ SEARCH_KEYWORDS }')); ?>" class="inputbox search" value="<?php if ($this->_rootref['SEARCH_WORDS']) {  echo (isset($this->_rootref['SEARCH_WORDS'])) ? $this->_rootref['SEARCH_WORDS'] : ''; } else { echo ((isset($this->_rootref['L_SEARCH_MINI'])) ? $this->_rootref['L_SEARCH_MINI'] : ((isset($user->lang['SEARCH_MINI'])) ? $user->lang['SEARCH_MINI'] : '{ SEARCH_MINI }')); } ?>" onclick="if(this.value=='<?php echo ((isset($this->_rootref['LA_SEARCH_MINI'])) ? $this->_rootref['LA_SEARCH_MINI'] : ((isset($this->_rootref['L_SEARCH_MINI'])) ? addslashes($this->_rootref['L_SEARCH_MINI']) : ((isset($user->lang['SEARCH_MINI'])) ? addslashes($user->lang['SEARCH_MINI']) : '{ SEARCH_MINI }'))); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo ((isset($this->_rootref['LA_SEARCH_MINI'])) ? $this->_rootref['LA_SEARCH_MINI'] : ((isset($this->_rootref['L_SEARCH_MINI'])) ? addslashes($this->_rootref['L_SEARCH_MINI']) : ((isset($user->lang['SEARCH_MINI'])) ? addslashes($user->lang['SEARCH_MINI']) : '{ SEARCH_MINI }'))); ?>';" /> 
					<input class="button2" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" type="submit" style="margin-top: 5px;margin-bottom: 5px;"/><br />
					<a href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>" ><?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?></a> <?php echo (isset($this->_rootref['S_SEARCH_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_HIDDEN_FIELDS'] : ''; ?>

				</fieldset>
				</form>
			    </div>
	</div><?php } ?>

						
						<div class="module">
		
				<h3 class="module-title">Main Menu</h3>
			    <div class="module-body">
	        			<?php if ($this->_rootref['S_DISPLAY_SEARCH'] || ( $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] )) {  ?>

	<ul class="menu">
	<?php if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

		<li class="parent <?php if ($this->_rootref['U_SEARCH_ID'] == ('unanswered')) {  ?>active<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_SEARCH_UNANSWERED'])) ? $this->_rootref['L_SEARCH_UNANSWERED'] : ((isset($user->lang['SEARCH_UNANSWERED'])) ? $user->lang['SEARCH_UNANSWERED'] : '{ SEARCH_UNANSWERED }')); ?></span></a></li><?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>

		<li class="parent <?php if ($this->_rootref['U_SEARCH_ID'] == ('newposts')) {  ?>active<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_SEARCH_NEW'])) ? $this->_rootref['L_SEARCH_NEW'] : ((isset($user->lang['SEARCH_NEW'])) ? $user->lang['SEARCH_NEW'] : '{ SEARCH_NEW }')); ?></span></a></li><?php } ?>

		<li class="parent <?php if ($this->_rootref['U_SEARCH_ID'] == ('active_topics')) {  ?>active<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['L_SEARCH_ACTIVE_TOPICS'] : ((isset($user->lang['SEARCH_ACTIVE_TOPICS'])) ? $user->lang['SEARCH_ACTIVE_TOPICS'] : '{ SEARCH_ACTIVE_TOPICS }')); ?></span></a></li>
	<?php } ?>

	<li class="<?php if ($this->_rootref['U_SEARCH_ID'] == ('egosearch')) {  ?>active<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></span></a></li>
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>" accesskey="m" ><span><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></span></a></li><?php } ?>

	</ul>	
<?php } ?>		        </div>
	</div>
						
						<?php if ($this->_rootref['S_SHOW_AFTERUSER']) {  ?>

						<div class="module">
		
				<h3 class="module-title">User Menu</h3>
			    <div class="module-body">
	        			<ul class="menu">
	<?php if ($this->_rootref['U_MCP']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></span></a></li><?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>


				<li<?php echo (isset($this->_rootref['U_PROFILE_STYLE'])) ? $this->_rootref['U_PROFILE_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="u" ><span><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></span></a></li>
						<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?><li<?php echo (isset($this->_rootref['U_PRIVATEMSGS_STYLE'])) ? $this->_rootref['U_PRIVATEMSGS_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>" ><span><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></span></a></li><?php } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?>

					<li ><a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></span></a></li>
					<?php } } ?>



				<li<?php echo (isset($this->_rootref['U_FAQ_STYLE'])) ? $this->_rootref['U_FAQ_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>" ><span><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></span></a></li>
				<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?><li<?php echo (isset($this->_rootref['U_MEMBERLIST_STYLE'])) ? $this->_rootref['U_MEMBERLIST_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['MEMBERLIST_EXPLAIN'])) ? $user->lang['MEMBERLIST_EXPLAIN'] : '{ MEMBERLIST_EXPLAIN }')); ?>" ><span><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></span></a></li><?php } if (! $this->_rootref['S_USER_LOGGED_IN']) {  ?><li<?php echo (isset($this->_rootref['U_REGISTER_STYLE'])) ? $this->_rootref['U_REGISTER_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>" ><span><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></span></a></li><?php } ?>

					<li<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT_STYLE'])) ? $this->_rootref['U_LOGIN_LOGOUT_STYLE'] : ''; ?>><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="l" ><span><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></span></a></li>
				<?php } ?>

	</ul>			        </div>
	</div>
						<?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>				
			<div class="module">
		
				<h3 class="module-title">Login Form</h3>
			    <div class="module-body">
			<form method="post" action="<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>ucp.php?mode=login" class="form-login">
				<p id="form-login-username">
					<label for="modlgn_username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></label><br />
			<input type="text" name="username" id="username" class="inputbox" value="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" alt="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" onblur="if(this.value=='') this.value='<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>';" onfocus="if(this.value=='<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>') this.value='';" />
		</p>
		<p id="form-login-password">
			<label for="modlgn_username"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?></label><br />
			<input type="password" name="password" id="password"  class="inputbox" alt="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>" onblur="if(this.value=='') this.value='<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>';" onfocus="if(this.value=='<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>') this.value='';" />
		</p>
		
			<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?>

			<p id="form-login-remember">
			<input type="checkbox" name="autologin" id="autologin" class="checkbox" value="yes" alt="<?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?>" />
			<label class="remember">
				<?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?>			</label>	
			</p>
			<?php } ?>

			<input name="redirect" value="<?php echo (isset($this->_rootref['LOGIN_REDIRECT'])) ? $this->_rootref['LOGIN_REDIRECT'] : ''; ?>" type="hidden" />
			<input type="submit" name="login" class="button" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" />

	</form>
		
		

		
        </div>
	</div>
			<?php } if ($this->_rootref['ALLOW_AFTER_COLORSWITCHER']) {  ?>

			<div class="module">
		
				<h3 class="module-title">Style switcher</h3>
			    <div class="module-body">
	 
	 <a href="index.php?ntheme=light">Style1</a> | 
<a href="index.php?ntheme=light2">Style2</a> | 
<a href="index.php?ntheme=light3">Style3</a> | 
<a href="index.php?ntheme=light4">Style4</a> | 
<a href="index.php?ntheme=dark">Style5</a> | 
<a href="index.php?ntheme=dark2">Style6</a> |
<a href="index.php?ntheme=dark3">Style7</a> |
<a href="index.php?ntheme=dark4">Style8</a> | 
	 
		        </div>
	</div>
			<?php } ?>

			
                        </div>
			<?php } ?>

			
			
												                    </div>
                </div>
            </div>
        </div>
	
				<div id="mainmods3" class="spacer w<?php if ($this->_rootref['NEWEST_USER']) {  ?>49<?php } else { ?>99<?php } ?>">
					<?php if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

					<div class="module">
										<?php if ($this->_rootref['U_VIEWONLINE']) {  ?><h3 class="module-title"><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a></h3><?php } else { ?><h3 class="module-title"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></h3><?php } ?>

										<div class="module-body">
										<?php echo (isset($this->_rootref['TOTAL_USERS_ONLINE'])) ? $this->_rootref['TOTAL_USERS_ONLINE'] : ''; ?> (<?php echo ((isset($this->_rootref['L_ONLINE_EXPLAIN'])) ? $this->_rootref['L_ONLINE_EXPLAIN'] : ((isset($user->lang['ONLINE_EXPLAIN'])) ? $user->lang['ONLINE_EXPLAIN'] : '{ ONLINE_EXPLAIN }')); ?>)<br /><?php echo (isset($this->_rootref['RECORD_USERS'])) ? $this->_rootref['RECORD_USERS'] : ''; ?><br /> <br /><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?>

	<?php if ($this->_rootref['LEGEND']) {  ?><br /><em><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?>: <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?></em><?php } if ($this->_rootref['S_DISPLAY_BIRTHDAY_LIST'] && $this->_rootref['BIRTHDAY_LIST']) {  ?>

	<strong><?php echo ((isset($this->_rootref['L_BIRTHDAYS'])) ? $this->_rootref['L_BIRTHDAYS'] : ((isset($user->lang['BIRTHDAYS'])) ? $user->lang['BIRTHDAYS'] : '{ BIRTHDAYS }')); ?></strong><br />
	<?php if ($this->_rootref['BIRTHDAY_LIST']) {  echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>: <strong><?php echo (isset($this->_rootref['BIRTHDAY_LIST'])) ? $this->_rootref['BIRTHDAY_LIST'] : ''; ?></strong><?php } else { echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); } } ?>	</div>			</div>
					<?php } if ($this->_rootref['NEWEST_USER']) {  ?>

					<div class="module">
	<h3 class="module-title"><?php echo ((isset($this->_rootref['L_STATISTICS'])) ? $this->_rootref['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ STATISTICS }')); ?></h3>
	<div class="module-body">
	<?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['NEWEST_USER'])) ? $this->_rootref['NEWEST_USER'] : ''; ?>	</div>		</div><?php } ?>


		</div>
						<?php if ($this->_rootref['SHOW_AFTER_BOTTOM']) {  ?>

						<div id="footer">
			<div class="footer-pad">
                <ul class="menu">		<?php if ($this->_rootref['AFTER_BMENU_LINK1_HREF'] || $this->_rootref['AFTER_BMENU_LINK1_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK1_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK1_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK1_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK1_DESC'] : ''; ?></a></li><?php } if ($this->_rootref['AFTER_BMENU_LINK2_HREF'] || $this->_rootref['AFTER_BMENU_LINK2_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK2_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK2_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK2_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK2_DESC'] : ''; ?></a></li><?php } if ($this->_rootref['AFTER_BMENU_LINK3_HREF'] || $this->_rootref['AFTER_BMENU_LINK3_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK3_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK3_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK3_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK3_DESC'] : ''; ?></a></li><?php } if ($this->_rootref['AFTER_BMENU_LINK4_HREF'] || $this->_rootref['AFTER_BMENU_LINK4_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK4_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK4_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK4_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK4_DESC'] : ''; ?></a></li><?php } if ($this->_rootref['AFTER_BMENU_LINK5_HREF'] || $this->_rootref['AFTER_BMENU_LINK5_DESC']) {  ?><li><a href="<?php echo (isset($this->_rootref['AFTER_BMENU_LINK5_HREF'])) ? $this->_rootref['AFTER_BMENU_LINK5_HREF'] : ''; ?>" class="mainlevel-bottom" ><?php echo (isset($this->_rootref['AFTER_BMENU_LINK5_DESC'])) ? $this->_rootref['AFTER_BMENU_LINK5_DESC'] : ''; ?></a></li><?php } ?></ul> 
            </div>
		</div><?php } if ($this->_rootref['SHOW_AFTER_COPYRIGHT']) {  ?><a href="http://www.rockettheme.com"><span id="logo2"></span></a><?php } ?>

						<div class="module">
		
			    <div class="module-body">
	        <div>Copyright &#169; 2009 Afterburner - Free GPL Template. All Rights Reserved.</div>      </div>
	</div>
	
		
	</div>
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

	<div class="copyright">Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group
		<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; } if ($this->_rootref['U_ACP']) {  ?><br /><strong><a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a></strong><?php } ?>

	</div>

</body>
</html>