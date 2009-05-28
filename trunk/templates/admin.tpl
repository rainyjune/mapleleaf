<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../themes/{$theme}/admin.css" />
<script type="text/javascript" src="../includes/admin.js"></script>
<title>管理员控制面板首页</title>
</head>

<body>
<div id="admin_header">
	<a href="../index.php">首页</a>&nbsp;<a href="logout.php" title="注销"><img src="../themes/{$theme}/images/icon_logout.gif"  alt="注销" border="0" /></a>
</div>
<div id="con">
<ul id="tags">
	<li {if $current_tab=='overview'} class="selectTag"{/if}><a id="overview" onclick="selectTag('tagContent0',this)" 
  href="javascript:void(0)">综合</a> </li>
  <li><a onClick="selectTag('tagContent1',this)" 
  href="javascript:void(0)">站点设置</a> </li>
 <li {if $current_tab=='message'} class="selectTag"{/if}><a id="message_m" onClick="selectTag('tagContent2',this)" 
  href="javascript:void(0)">留言管理</a> </li>
 </ul>
<div id="tagContent">
<div id="tagContent0" 
{if $current_tab=='overview'}
	class="tagContent selectTag"
{else}
	class="tagContent"
{/if}
>
<table>
	<tr>
		<td><h1>欢迎来到MapleLeaf</h1></td>
	</tr>
	<tr>
		<td align="left">感谢您选择MapleLeaf作为留言板解决方案. 这个界面将显示您的留言板的总体信息.上方的链接允许您管理留言板.</td>
	</tr>
</table>
<table  width="256px" align="left" cellpadding="0" cellspacing="0" style="margin-top:5px;">
	<tr>
		<td align="left"><b>统计信息</b></td>
	</tr>
	<tr>
		<td align="left">留言数量：</td><td align="right">{$m_num}</td>
	</tr>
	<tr>
		<td align="left">回复数量：</td><td align="right">{$r_num}</td>
	</tr>
	<tr>
		<td align="left">当前版本：</td><td align="right">{$mapleleaf_version}</td>
	</tr>
	<tr>
		<td align="left"><b>系统信息</b></td>
	</tr>
	<tr>
		<td align="left">PHP版本：</td><td align="right">{$php_version}</td>
	</tr>
	<tr>
		<td align="left">GD版本： </td><td align="right">{$gd_version}</td>
	</tr>
	<tr>
		<td align="left">安全模式：</td><td align="right">{$isSafeMode}</td>
	</tr>
	<tr>
		<td align="left">Register_Globals：</td><td align="right">{$register_globals}</td>
	</tr>
	<tr>
		<td align="left">Magic_Quotes_Gpc：</td><td align="right">{$magic_quotes_gpc"}</td>
	</tr>
	<tr>
		<td align="left">allow_url_fopen：</td><td align="right">{$allow_url_fopen}</td>
	</tr>
</table>
</DIV>
<div class="tagContent" id="tagContent1">
<form action="admin_process.php" method="post">
<input type="hidden" name="process_type" value="config_set" />
<fieldset>
<legend>整体设置</legend>
<table cellpadding="0" cellspacing="0" width="600px">
	<tr>
		<td width="150px">留言板名称:</td><td align="left"><input name="board_name" type="text" size="20" value="{$board_name}" /></td>
	</tr>
	<tr>
		<td>站长信箱:</td><td align="left"><input name="admin_email" type="text" size="20" value="{$admin_email}" /></td>
	</tr>
	<tr>
		<td>版权信息:</td><td align="left"><textarea name="copyright_info" cols="20" rows="3">{$copyright_info}</textarea></td>
	</tr>
	<tr>
		<td>外观主题:</td><td align="left">{html_options name=theme options=$themes selected=$selected_theme}</td>
	</tr>
	<tr>
		<td>使用时区:</td><td align="left">{html_options name=timezone options=$timezones selected=$selected_timezone}</td>
	</tr>
</table>
</fieldset>
<fieldset>
<legend>留言设置</legend>
<table cellpadding="0" cellspacing="0" width="600px">
	<tr>
		<td width="150px">过滤词汇：</td><td align="left"><textarea name="filter_words" cols="20" rows="3">{$filter_words}</textarea></td>
	</tr>
	<tr>
		<td>启用验证码：</td><td align="left"><input name="valid_code_open" type="radio" value="1" 
{if $valid_code_open==1} checked='checked' {/if}>启用<input name="valid_code_open" type="radio" value="0" {if $valid_code_open==0} checked='checked' {/if}>关闭</td>
	</tr>
	<tr>
		<td>启用分页功能：</td><td align="left"><input name="page_on" type="radio" value="1" {if $page_on==1} checked='checked' {/if} />启用<input name="page_on" type="radio" value="0" {if $page_on==0} checked='checked'{/if} />关闭</td>
	</tr>
	<tr>
		<td>每页显示留言数：</td><td align="left"><input name="num_perpage" type="text" value="{$num_perpage}" />(当分页启用后，此设置起效)</td>
	</tr>
</table>
</fieldset>
<fieldset>
<legend>管理员帐户</legend>
<table cellpadding="0" cellspacing="0" width="600px">
	<tr>
		<td>修改密码:</td><td align="left"><input name="password" type="password" value="{$password}" /></td>
	</tr>
</table>
</fieldset>
<input type="submit" value="提交" /><input type="reset" value="重设" />
</form>

</div>
<DIV  id="tagContent2" 
{if $current_tab=='message'}
	class="tagContent selectTag"
{else}
	class="tagContent"
{/if}
 >
<div id="container2">
<!-- 留言管理 -->
<form action="admin_process.php" method="post">
<input type="hidden" name="process_type" value="admin_del_process">
<table id="table2">
	<tr class="header">
		<td>选择</td><td class="ls">昵称</td><td class="m">留言</td><td>删除</td><td>回复</td>
	</tr>
	
{foreach value=m from=$data}
<tr class='admin_message'>
	<td><input type='checkbox' name='select_mid[]' value='{$m.0}' />
		<input type='hidden' name='{$m.0}' value='{if $m.reply}1{else}0{/if}' />
	</td>
	<td class='left'>	{$m.1}</td>
	<td class='left'>{$m.2}<br />时间：{$m.3|date:"m-d H:i"} {if $m.reply==true}  <br /><font color="red">您回复：</font> {$m.reply.1} Time:{$m.reply.2|date:"m-d H:i"}{/if}</td>
	<td><a href='admin_process.php?process_type=del&mid={$m.0}&reply={if $m.reply}1{else}0{/if}'>删除</a></td>
	<td><a href='reply.php?mid={$m.0}'>回复</a></td>
</tr>
{/foreach}

<tr><td colspan='5' align='left'><input type='submit' value='删除所选' />&nbsp;<input type='button' value='清空所有留言'  onclick="javascript:if(window.confirm('你确实要删除所有留言吗？同时会删除所有回复'))window.open('admin_process.php?process_type=clear_message','_self')" />&nbsp;<input type='button' value='清空所有回复' onclick="javascript:if(window.confirm('你确实要删除所有回复？'))window.open('admin_process.php?process_type=clear_reply','_self')" /></td></tr>

</table>
</form>
<br/>
    </div>
</DIV>
</DIV>
</DIV>
<div id="botton">Powered by <a href="http://maple.dreamneverfall.cn">MapleLeaf</a>&nbsp;&copy; 2009 mapleleaf Group</div>
</body>
</html>
