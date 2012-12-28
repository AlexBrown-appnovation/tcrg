<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

	<form method="get" action="<?php echo (isset($this->_rootref['S_SEARCH_ACTION'])) ? $this->_rootref['S_SEARCH_ACTION'] : ''; ?>">
	
	<table cellspacing="1" class="search">
	<tr class="toplines">
		<th colspan="4"><?php echo ((isset($this->_rootref['L_SEARCH_QUERY'])) ? $this->_rootref['L_SEARCH_QUERY'] : ((isset($user->lang['SEARCH_QUERY'])) ? $user->lang['SEARCH_QUERY'] : '{ SEARCH_QUERY }')); ?></th>
	</tr>
	<tr>
		<td colspan="4"><h2><?php echo ((isset($this->_rootref['L_SEARCH_QUERY'])) ? $this->_rootref['L_SEARCH_QUERY'] : ((isset($user->lang['SEARCH_QUERY'])) ? $user->lang['SEARCH_QUERY'] : '{ SEARCH_QUERY }')); ?></h2></td>
	</tr>
	<tr>
		<td class="row1 one" colspan="2"><?php echo ((isset($this->_rootref['L_SEARCH_KEYWORDS'])) ? $this->_rootref['L_SEARCH_KEYWORDS'] : ((isset($user->lang['SEARCH_KEYWORDS'])) ? $user->lang['SEARCH_KEYWORDS'] : '{ SEARCH_KEYWORDS }')); ?>:<br /><?php echo ((isset($this->_rootref['L_SEARCH_KEYWORDS_EXPLAIN'])) ? $this->_rootref['L_SEARCH_KEYWORDS_EXPLAIN'] : ((isset($user->lang['SEARCH_KEYWORDS_EXPLAIN'])) ? $user->lang['SEARCH_KEYWORDS_EXPLAIN'] : '{ SEARCH_KEYWORDS_EXPLAIN }')); ?></td>
		<td class="row2 two" colspan="2"><input type="text" class="post postlarge" name="keywords" /><br />
		<div>
			<input type="radio" class="checkbox" name="terms" value="all" checked="checked" /> <?php echo ((isset($this->_rootref['L_SEARCH_ALL_TERMS'])) ? $this->_rootref['L_SEARCH_ALL_TERMS'] : ((isset($user->lang['SEARCH_ALL_TERMS'])) ? $user->lang['SEARCH_ALL_TERMS'] : '{ SEARCH_ALL_TERMS }')); ?>

		</div>
		<div>
			<input type="radio" class="checkbox" name="terms" value="any" /> <?php echo ((isset($this->_rootref['L_SEARCH_ANY_TERMS'])) ? $this->_rootref['L_SEARCH_ANY_TERMS'] : ((isset($user->lang['SEARCH_ANY_TERMS'])) ? $user->lang['SEARCH_ANY_TERMS'] : '{ SEARCH_ANY_TERMS }')); ?>

		</div></td>
	</tr>
	<tr>
		<td class="row1 one" colspan="2"><?php echo ((isset($this->_rootref['L_SEARCH_AUTHOR'])) ? $this->_rootref['L_SEARCH_AUTHOR'] : ((isset($user->lang['SEARCH_AUTHOR'])) ? $user->lang['SEARCH_AUTHOR'] : '{ SEARCH_AUTHOR }')); ?>:<br /><?php echo ((isset($this->_rootref['L_SEARCH_AUTHOR_EXPLAIN'])) ? $this->_rootref['L_SEARCH_AUTHOR_EXPLAIN'] : ((isset($user->lang['SEARCH_AUTHOR_EXPLAIN'])) ? $user->lang['SEARCH_AUTHOR_EXPLAIN'] : '{ SEARCH_AUTHOR_EXPLAIN }')); ?></td>
		<td class="row2 two" colspan="2"><input type="text" class="post postlarge" name="author" /></td>
	</tr>
	<tr>
		<td class="row1 one" colspan="2"><?php echo ((isset($this->_rootref['L_SEARCH_FORUMS'])) ? $this->_rootref['L_SEARCH_FORUMS'] : ((isset($user->lang['SEARCH_FORUMS'])) ? $user->lang['SEARCH_FORUMS'] : '{ SEARCH_FORUMS }')); ?>:</b><br /><?php echo ((isset($this->_rootref['L_SEARCH_FORUMS_EXPLAIN'])) ? $this->_rootref['L_SEARCH_FORUMS_EXPLAIN'] : ((isset($user->lang['SEARCH_FORUMS_EXPLAIN'])) ? $user->lang['SEARCH_FORUMS_EXPLAIN'] : '{ SEARCH_FORUMS_EXPLAIN }')); ?></td>
		<td class="row2 two" colspan="2"><select name="fid[]" multiple="multiple" size="7" class="postlarge"><?php echo (isset($this->_rootref['S_FORUM_OPTIONS'])) ? $this->_rootref['S_FORUM_OPTIONS'] : ''; ?></select></td>
	</tr>
	<tr>
		<th colspan="4" class="txtleft"><h2><?php echo ((isset($this->_rootref['L_SEARCH_OPTIONS'])) ? $this->_rootref['L_SEARCH_OPTIONS'] : ((isset($user->lang['SEARCH_OPTIONS'])) ? $user->lang['SEARCH_OPTIONS'] : '{ SEARCH_OPTIONS }')); ?></h2></th>
	</tr>
	<tr>
		<td class="row1 three"><?php echo ((isset($this->_rootref['L_SEARCH_SUBFORUMS'])) ? $this->_rootref['L_SEARCH_SUBFORUMS'] : ((isset($user->lang['SEARCH_SUBFORUMS'])) ? $user->lang['SEARCH_SUBFORUMS'] : '{ SEARCH_SUBFORUMS }')); ?>:</td>
		<td class="row2 two"><input type="radio" class="checkbox" name="sc" value="1" checked="checked" />&nbsp;<?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?>&nbsp;&nbsp;<input type="radio" class="checkbox" name="sc" value="0" />&nbsp;<?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></td>
		<td class="row1 three"><?php echo ((isset($this->_rootref['L_SEARCH_WITHIN'])) ? $this->_rootref['L_SEARCH_WITHIN'] : ((isset($user->lang['SEARCH_WITHIN'])) ? $user->lang['SEARCH_WITHIN'] : '{ SEARCH_WITHIN }')); ?>:</td>
		<td class="row2 two"><input type="radio" class="checkbox" name="sf" value="all" checked="checked" />&nbsp;<?php echo ((isset($this->_rootref['L_SEARCH_TITLE_MSG'])) ? $this->_rootref['L_SEARCH_TITLE_MSG'] : ((isset($user->lang['SEARCH_TITLE_MSG'])) ? $user->lang['SEARCH_TITLE_MSG'] : '{ SEARCH_TITLE_MSG }')); ?><br /><input type="radio" class="checkbox" name="sf" value="msgonly" />&nbsp;<?php echo ((isset($this->_rootref['L_SEARCH_MSG_ONLY'])) ? $this->_rootref['L_SEARCH_MSG_ONLY'] : ((isset($user->lang['SEARCH_MSG_ONLY'])) ? $user->lang['SEARCH_MSG_ONLY'] : '{ SEARCH_MSG_ONLY }')); ?>&nbsp;<br /><input type="radio" class="checkbox" name="sf" value="titleonly" />&nbsp;<?php echo ((isset($this->_rootref['L_SEARCH_TITLE_ONLY'])) ? $this->_rootref['L_SEARCH_TITLE_ONLY'] : ((isset($user->lang['SEARCH_TITLE_ONLY'])) ? $user->lang['SEARCH_TITLE_ONLY'] : '{ SEARCH_TITLE_ONLY }')); ?>&nbsp;<br /><input type="radio" class="checkbox" name="sf" value="firstpost" />&nbsp;<?php echo ((isset($this->_rootref['L_SEARCH_FIRST_POST'])) ? $this->_rootref['L_SEARCH_FIRST_POST'] : ((isset($user->lang['SEARCH_FIRST_POST'])) ? $user->lang['SEARCH_FIRST_POST'] : '{ SEARCH_FIRST_POST }')); ?></td>
	</tr>
	<tr>
		<td class="row1 three"><?php echo ((isset($this->_rootref['L_RESULT_SORT'])) ? $this->_rootref['L_RESULT_SORT'] : ((isset($user->lang['RESULT_SORT'])) ? $user->lang['RESULT_SORT'] : '{ RESULT_SORT }')); ?>:</td>
		<td class="row2 two"><?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?><br />
		<div>
			<input type="radio" class="checkbox" name="sd" value="a" />&nbsp;<?php echo ((isset($this->_rootref['L_SORT_ASCENDING'])) ? $this->_rootref['L_SORT_ASCENDING'] : ((isset($user->lang['SORT_ASCENDING'])) ? $user->lang['SORT_ASCENDING'] : '{ SORT_ASCENDING }')); ?>

		</div>
		<div>
			<input type="radio" class="checkbox" name="sd" value="d" checked="checked" />&nbsp;<?php echo ((isset($this->_rootref['L_SORT_DESCENDING'])) ? $this->_rootref['L_SORT_DESCENDING'] : ((isset($user->lang['SORT_DESCENDING'])) ? $user->lang['SORT_DESCENDING'] : '{ SORT_DESCENDING }')); ?>

		</div></td>
		<td class="row1 three"><?php echo ((isset($this->_rootref['L_DISPLAY_RESULTS'])) ? $this->_rootref['L_DISPLAY_RESULTS'] : ((isset($user->lang['DISPLAY_RESULTS'])) ? $user->lang['DISPLAY_RESULTS'] : '{ DISPLAY_RESULTS }')); ?>:</td>
		<td class="row2 two"><input type="radio" class="checkbox" name="sr" value="posts" checked="checked" />&nbsp;<?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>&nbsp;&nbsp;<input type="radio" class="checkbox" name="sr" value="topics" />&nbsp;<?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></td>
	</tr>
	<tr>
		<td class="row1 three"><?php echo ((isset($this->_rootref['L_RESULT_DAYS'])) ? $this->_rootref['L_RESULT_DAYS'] : ((isset($user->lang['RESULT_DAYS'])) ? $user->lang['RESULT_DAYS'] : '{ RESULT_DAYS }')); ?>:</td>
		<td class="row2 two"><?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></td>
		<td class="row1 three"><?php echo ((isset($this->_rootref['L_RETURN_FIRST'])) ? $this->_rootref['L_RETURN_FIRST'] : ((isset($user->lang['RETURN_FIRST'])) ? $user->lang['RETURN_FIRST'] : '{ RETURN_FIRST }')); ?>:</td>
		<td class="row2 two"><select class="post" name="ch"><?php echo (isset($this->_rootref['S_CHARACTER_OPTIONS'])) ? $this->_rootref['S_CHARACTER_OPTIONS'] : ''; ?></select>&nbsp;<?php echo ((isset($this->_rootref['L_POST_CHARACTERS'])) ? $this->_rootref['L_POST_CHARACTERS'] : ((isset($user->lang['POST_CHARACTERS'])) ? $user->lang['POST_CHARACTERS'] : '{ POST_CHARACTERS }')); ?></td>
	</tr>
	<tr>
		<td class="row3 pad4 txtcenter" colspan="4"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input class="button" name="submit" type="submit" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" />&nbsp;&nbsp;<input class="button" type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" /></td>
	</tr>
	</table>
	
	</form>

	<div class="spacing"></div>

	<?php if (sizeof($this->_tpldata['recentsearch'])) {  ?>

	<table cellspacing="1" class="search">
	<tr>
		<th colspan="2"><h2><?php echo ((isset($this->_rootref['L_RECENT_SEARCHES'])) ? $this->_rootref['L_RECENT_SEARCHES'] : ((isset($user->lang['RECENT_SEARCHES'])) ? $user->lang['RECENT_SEARCHES'] : '{ RECENT_SEARCHES }')); ?></h2></th>
	</tr>
	<?php $_recentsearch_count = (isset($this->_tpldata['recentsearch'])) ? sizeof($this->_tpldata['recentsearch']) : 0;if ($_recentsearch_count) {for ($_recentsearch_i = 0; $_recentsearch_i < $_recentsearch_count; ++$_recentsearch_i){$_recentsearch_val = &$this->_tpldata['recentsearch'][$_recentsearch_i]; ?>

		<tr>

			<?php if (!($_recentsearch_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row1 one" onmouseover="this.style.backgroundColor='#EBEBEB'; this.style.cursor='pointer'"
			onmouseout="this.style.backgroundColor=''"
			onclick="window.location.href='<?php echo $_recentsearch_val['U_KEYWORDS']; ?>'"
			width="70%"><?php } else { ?><td class="row2 one" onmouseover="this.style.backgroundColor='#e3e3e3'; this.style.cursor='pointer'"
			onmouseout="this.style.backgroundColor=''"
			onclick="window.location.href='<?php echo $_recentsearch_val['U_KEYWORDS']; ?>'"
			width="70%"><?php } ?><a href="<?php echo $_recentsearch_val['U_KEYWORDS']; ?>"><?php echo $_recentsearch_val['KEYWORDS']; ?></a></td>
			<?php if (!($_recentsearch_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row1 two" width="30%"><?php } else { ?><td class="row2 one" width="30%"><?php } echo $_recentsearch_val['TIME']; ?></td>
		</tr>
	<?php }} ?>

	</table>

	<div class="spacing"></div>

	<?php } $this->_tpl_include('breadcrumbs.html'); ?>


	<div class="spacing"></div>

	<div class="right"><?php $this->_tpl_include('jumpbox.html'); ?></div>

	<div class="spacing"></div>

	<?php $this->_tpl_include('overall_footer.html'); ?>