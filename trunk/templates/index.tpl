<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./includes/index.js"></script>
<link rel="stylesheet" href="./style/common.css" type="text/css">
<title>欢迎光临{$title}</title>
</head>

<body>
<div id="container">
<h1>欢迎留言</h1>
<table id="table1">
	<tr class="header">
		<td class="ls">昵称</td>
		<td class="m">留言</td>
		<td>时间</td>
	</tr>
    {foreach value=m from=$data}
    <tr class='message'>
    	<td class='left'>{$m.1}</td>
        <td class='left'>{$m.2}<br />{if $m.reply}{$m.reply.1} Time:{$m.reply.2}{/if}</td>
        <td class='left'>{$m.3|date:"n/j/Y g:ia"}</td>
    </tr>
    {/foreach}
</table>
<br />


<div align="center">请您留言：</div>
<form name="guestbook" action="process.php" method="post"
	onsubmit="return checkall()">
<table id="table1">
	<tr>
		<td class="l">昵称</td>
		<td class="s">{if $admin == true}
        				<input name="user" id="user" type="hidden" maxlength="10"  onfocus="clear_user()" value="Admin" /><font color="red">Admin</font>
						{else}
                        <input name="user" id="user" type="text" maxlength="10"  onfocus="clear_user()" value="anonymous" />
					{/if}
		</td>
		<td class="left">&nbsp;
		<div id="user_msg"></div>
		</td>
	</tr>
	<tr>
		<td class="l" valign="top">留言</td>
		<td class="left">

		<textarea name="content" cols="40" rows="9"></textarea></td>
		<td class="left">
		
		<!-- begin 表情表格 -->
		<div id="smileys"><?php show_smileys_table()?></div>
		<!-- end 表情表格 -->
		
		</td>
	</tr>
	
	<tr>
		<td class="l">验证码</td>
		<td class="left"><input type="text" name="valid_code" size="4"
			maxlength="4" />&nbsp;<img src="./includes/showimgcode.php"
			border="0" align="absbottom" /></td>
		<td class="left">&nbsp;</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td colspan="2" class="left"><input name="submit" type="submit"
			value="提交留言" /></td>
	</tr>

</table>
</form>

<!-- begin footer -->
<div id="botton">&nbsp;{$copyright_info}
<a href="mailto:{$admin_email}">站长信箱</a> <a
	href="./adm/index.php">管理</a><br />
Powered by <a href="http://maple.dreamneverfall.cn" target="_blank"
	title="Find More">MapleLeaf 1.5</a></div>
</div>
<!-- end foot -->
</body>
</html>
