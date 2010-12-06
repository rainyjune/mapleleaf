<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache,must-revalidate" />
<meta http-equiv="expires" content="0" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.2r1/build/reset-fonts-grids/reset-fonts-grids.css">
<link type="text/css" rel="stylesheet" href="<?php echo './themes/'.FrontController::getInstance()->_theme.'/scripts/admin.css';?>" />
<link type="text/css" rel="stylesheet" href="<?php echo './themes/'.FrontController::getInstance()->_theme.'/scripts/jqModal.css';?>" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo './themes/'.FrontController::getInstance()->_theme.'/scripts/jqModal.js';?>"></script>
<script type="text/javascript" src="<?php echo './themes/'.FrontController::getInstance()->_theme.'/scripts/admin.js';?>"></script>
<title><?php echo FrontController::t('ACP_INDEX');?></title>
</head>

<body>
    <div id="doc">
	<div id="hd">
		<a href="index.php"><?php echo FrontController::t('HOME');?></a>&nbsp;<a href="index.php?controller=user&amp;action=logout" title="<?php echo FrontController::t('LOGOUT');?>"><?php echo FrontController::t('LOGOUT');?></a>
	</div><!-- header -->
	<div id="bd">
	    <div class="yui-g">
		<ul id="tags">
		    <?php
		    for($i=0,$c=count($tabs_array);$i<$c;$i++) {
			$class=($current_tab==$tabs_array[$i])?'selectTag':'';
			echo "\n<li class='$class'><a href='index.php?action=control_panel&subtab={$tabs_array[$i]}'>{$tabs_name_array[$i]}</a></li>\n";
		    }
		    ?>
		</ul>
	    </div><!-- yui-g -->
	    <div class="yui-g">
		<div id="tagContent">
		    <div <?php if($current_tab=='overview'){?> class="tagContent selectTag" <?php } else {?> class="tagContent" <?php }?> >
			<table>
			    <tr>
				<td><h1><?php echo FrontController::t('WELCOME_SYS');?></h1></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo FrontController::t('THANKS');?></td>
			    </tr>
			</table>
			<table>
			    <tr>
				<td colspan="2" align="left"><b><?php echo FrontController::t('STATS_INFO');?></b></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo FrontController::t('NUM_POSTS');?>：</td><td align="right"><?php echo $nums;?></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo FrontController::t('NUM_REPLY');?>：</td><td align="right"><?php echo $reply_num;?></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo FrontController::t('MP_VERSION');?>：</td><td align="right"><?php echo MP_VERSION;?></td>
			    </tr>
			    <tr>
				<td align="left" colspan="2"><b><?php echo FrontController::t('SYS_INFO');?></b></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo FrontController::t('PHP_VERSION');?>：</td><td align="right"><?php echo PHP_VERSION;?></td>
			    </tr>
			    <tr>
				<td align="left"><?php echo FrontController::t('GD_VERSION');?>： </td><td align="right"><?php echo $gd_version;?></td>
			    </tr>
			    <tr>
				<td align="left">Register_Globals：</td><td align="right"><?php echo $register_globals;?></td>
			    </tr>
			    <tr>
				<td align="left">Magic_Quotes_Gpc：</td><td align="right"><?php echo $magic_quotes_gpc;?></td>
			    </tr>
			    <tr>
				<td align="left">ZipArchive：</td><td align="right"><?php echo $zip_support;?></td>
			    </tr>
			</table>
		    </div><!-- Overview -->
		    <div <?php if($current_tab=='siteset'){?> class="tagContent selectTag" <?php } else {?> class="tagContent" <?php }?>>
			<form action="index.php?controller=configuration&amp;action=set_config" method="post">
			    <fieldset>
			    <legend><?php echo FrontController::t('SYS_CONF');?></legend>
			    <table>
				<tr>
				    <td><?php echo FrontController::t('BOARD_NAME');?>:</td><td align="left"><input name="board_name" type="text" size="20" value="<?php echo FrontController::getInstance()->_board_name;?>" /></td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('CLOSE_BOARD');?>:</td><td align="left"><input name="mb_open" type="radio" value="1"
			    <?php if(FrontController::getInstance()->_mb_open==1){?> checked='checked' <?php }?> /><?php echo FrontController::t('YES');?><input name="mb_open" type="radio" value="0" <?php if(FrontController::getInstance()->_mb_open==0){?> checked='checked' <?php }?> /><?php echo FrontController::t('NO');?></td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('CLOSE_REASON');?>:</td><td align="left"><textarea name="close_reason" cols="30" rows="3"><?php echo FrontController::getInstance()->_close_reason;?></textarea></td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('ADMIN_EMAIL');?>:</td><td align="left"><input name="admin_email" type="text" size="20" value="<?php echo FrontController::getInstance()->_admin_email;?>" /></td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('COPY_INFO');?>:</td><td align="left"><textarea name="copyright_info" cols="30" rows="3"><?php echo FrontController::getInstance()->_copyright_info;?></textarea></td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('SYS_THEME');?>:</td><td align="left"><select name="theme"><?php foreach ($themes as $per_theme){?><option value="<?php echo $per_theme;?>" <?php if($per_theme==FrontController::getInstance()->_theme){echo 'selected="selected"';}?>><?php echo $per_theme;?></option><?php }?></select></td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('TIMEZONE');?>:</td>
				    <td align="left">
					    <select name="timezone">

				    <?php foreach ($timezone_array as $key=>$per_timezone)
					    {
				    ?>
				    <option value="<?php echo $key;?>" <?php if($key==FrontController::getInstance()->_time_zone){echo 'selected="selected"';}?>>
				    <?php echo $per_timezone;?></option>
				    <?php }?>

					    </select>
				    </td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('LANG');?>:</td><td align="left"><select name="lang"><?php foreach ($languages as $language){?><option value="<?php echo $language;?>" <?php if($language==FrontController::getInstance()->_current_lang){echo 'selected="selected"';}?>><?php echo $language;?></option><?php }?></select></td>
				</tr>
			    </table>
			    </fieldset>
			    <fieldset>
			    <legend><?php echo FrontController::t('POST_CONF');?></legend>
			    <table>
				<tr>
				    <td><?php echo FrontController::t('FILTER_WORDS');?>：</td><td align="left"><textarea name="filter_words" cols="20" rows="3"><?php echo FrontController::getInstance()->_filter_words;?></textarea></td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('ENABLE_CAPTCHA');?>：</td><td align="left"><input name="valid_code_open" type="radio" value="1"
			    <?php if(FrontController::getInstance()->_valid_code_open==1){?> checked='checked' <?php }?> /><?php echo FrontController::t('YES');?><input name="valid_code_open" type="radio" value="0" <?php if(FrontController::getInstance()->_valid_code_open==0){?> checked='checked' <?php }?> /><?php echo FrontController::t('NO');?></td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('ENABLE_PAGE');?>：</td><td align="left"><input name="page_on" type="radio" value="1" <?php if(FrontController::getInstance()->_page_on==1){?> checked='checked' <?php }?> /><?php echo FrontController::t('YES');?><input name="page_on" type="radio" value="0" <?php if(FrontController::getInstance()->_page_on==0){?> checked='checked'<?php }?> /><?php echo FrontController::t('NO');?></td>
				</tr>
				<tr>
				    <td><?php echo FrontController::t('POST_PERPAGE');?>：</td><td align="left"><input name="num_perpage" type="text" value="<?php echo FrontController::getInstance()->_num_perpage;?>" /><?php echo FrontController::t('PAGINATION_TIP');?></td>
				</tr>
			    </table>
			    </fieldset>
			    <fieldset>
			    <legend><?php echo FrontController::t('ADMIN_CONF');?></legend>
			    <table>
				<tr>
				    <td><?php echo FrontController::t('CHANGE_PWD');?>:</td><td align="left"><input name="password" type="password"  />&nbsp;<?php echo FrontController::t('PWD_TIP');?></td>
				</tr>
			    </table>
			    </fieldset>
			<input type="submit" value="<?php echo FrontController::t('SUBMIT');?>" /><input type="reset" value="<?php echo FrontController::t('RESET');?>" />
			</form>
		    </div><!-- Configuration -->
		    <div id="message_container" <?php if($current_tab=='message'){?>	class="tagContent selectTag" <?php } else {?>	class="tagContent" <?php }?>>
			<!-- 留言管理 -->
			<form id="message_manage" action="index.php?action=delete_multi_messages" method="post">
			<table>
			    <tr class="header">
				<td><?php echo FrontController::t('SELECT');?></td><td><?php echo FrontController::t('NICKNAME');?></td><td><?php echo FrontController::t('MESSAGE');?></td><td><?php echo FrontController::t('OPERATION');?></td>
			    </tr>
			<?php foreach($data as $m){?>
			<tr class='admin_message'>
			    <td><input type='checkbox' name='select_mid[]' value='<?php echo $m['id'];?>' />
				<input type='hidden' name='<?php echo $m['id'];?>' value='<?php if(@$m['reply']){ echo "1";}else{echo "0";}?>' />
			    </td>
			    <td class='left'><?php echo $m['user'];?></td>
			    <td class='left'><?php echo $m['content'];?><br /><?php echo FrontController::t('TIME');?>：<?php echo date('m-d H:i',$m['time']+ FrontController::getInstance()->_time_zone*60*60);?>
			    <?php if(@$m['reply']==true){?>
			    <br />
			     <?php echo sprintf(FrontController::t('YOU_REPLIED'),date('m-d H:i',(int)$m['reply']['reply_time']+FrontController::getInstance()->_time_zone*60*60),$m['reply']['reply_content']);?>
			     <span>&nbsp;<a href="index.php?action=delete_reply&amp;mid=<?php echo $m['id'];?>"><?php echo FrontController::t('DELETE_THIS_REPLY');?></a></span>

			<?php }?></td>
			    <td><a href='index.php?action=delete_message&amp;mid=<?php echo $m['id'];?>&amp;reply=<?php if(@$m['reply']){ echo "1";}else{ echo "0";}?>'><?php echo FrontController::t('DELETE');?></a>
			    <a class="ex2trigger" href='index.php?action=reply&amp;mid=<?php echo $m['id'];?>'><?php echo FrontController::t('REPLY');?></a>
			    <a class="ex2trigger" href='index.php?action=update&amp;mid=<?php echo $m['id'];?>'><?php echo FrontController::t('UPDATE');?></a>
			    <a href='index.php?controller=badips&amp;action=ban&amp;ip=<?php echo $m['ip'];?>'><?php echo FrontController::t('BAN');?></a></td>
			</tr>
		       <?php }?>

			<tr>
			    <td colspan='4' align='left'>
				<a href="#" id="m_checkall"><?php echo FrontController::t('CHECK_ALL');?></a> &nbsp;
				<a href="#" id="m_checknone"><?php echo FrontController::t('CHECK_NONE');?></a> &nbsp;
				<a href="#" id="m_checkxor"><?php echo FrontController::t('CHECK_INVERT');?></a>&nbsp;
				<input type='submit' value='<?php echo FrontController::t('DELETE_CHECKED');?>' />&nbsp;
				<a href="index.php?action=clear_all"><input id="deleteallButton" type='button' value='<?php echo FrontController::t('DELETE_ALL');?>' /></a>&nbsp;
				<a href="index.php?action=clear_reply"><input  id="deleteallreplyButton" type='button' value='<?php echo FrontController::t('DELETE_ALL_REPLY');?>' /></a>
				<a href="index.php?controller=backup&amp;action=backupData"><input type='button' id="buckupButton" value='<?php echo FrontController::t('BACKUP');?>' /></a>
			    </td></tr>

			</table>
			</form>
		    </div><!-- Messages -->
		    
		    <div id="ip_container" <?php if($current_tab=='ban_ip'){?> class="tagContent selectTag" <?php } else {?> class="tagContent" <?php }?>>
			<!-- IP管理 -->
			<form id="banip_manage" action="index.php?controller=badips&amp;action=ip_update" method="post">
			    <table class="table2">
				<tr class="header">
				    <td><?php echo FrontController::t('SELECT');?></td><td><?php echo FrontController::t('BAD_IP');?></td>
				</tr>
				<?php foreach($ban_ip_info as $m){?>
				<tr class='admin_message'>
				    <td><input type='checkbox' name='select_ip[]' value='<?php echo $m["ip"];?>' /></td>
				    <td><?php echo $m["ip"];?></td>
				</tr>
				<?php }?>
				<tr><td colspan='2' align='left'><a href="#" id="ip_checkall"><?php echo FrontController::t('CHECK_ALL');?></a> &nbsp; <a href="#" id="ip_checknone"><?php echo FrontController::t('CHECK_NONE');?></a> &nbsp;<a href="#" id="ip_checkxor"><?php echo FrontController::t('CHECK_INVERT');?></a>&nbsp;<input type='submit' value='<?php echo FrontController::t('DELETE_CHECKED');?>' /></td></tr>
			    </table>
			</form>
		    </div><!-- Bad IPs -->
		    <div <?php if($current_tab=='plugin'){?> class="tagContent selectTag" <?php } else {?> class="tagContent" <?php }?>>
			<p><?php echo FrontController::t('PLUGIN');?></p>
			<ul>
			    <?php
			    foreach($plugins as $plugin){
			    ?>
			    <li><h1><b><?php echo $plugin;?></b></h1>
			    <?php
				include PLUGINDIR.$plugin.'.php';
				$configFuncName=$plugin.'_config';
				$configFuncName(true);
			    ?>
			    </li>
			    <?php }?>
			</ul>
		    </div><!-- Plugins -->
		</div>
	    </div><!-- yui-g  -->
	</div><!-- body -->
	<div class="ft">
	    Powered by <a href="http://mapleleaf.ourplanet.tk">MapleLeaf<?php echo MP_VERSION;?></a>
	</div><!-- footer -->
	<!-- jqModal window -->
	<div class="jqmWindow" id="ex2">
	Please wait...
	</div>
	<!-- end of jqModal window -->
    </div>
</body>
</html>