<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2009-05-03 08:10:56 中国标准时间 */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./includes/index.js"></script>
<link rel="stylesheet" href="./style/common.css" type="text/css">
<title>娆㈣繋鍏変复<?php echo $this->_vars['title']; ?>
</title>
</head>

<body>
<div id="container">
<h1>娆㈣繋鐣欒█</h1>
<table id="table1">
	<tr class="header">
		<td class="ls">鏄电О</td>
		<td class="m">鐣欒█</td>
		<td>鏃堕棿</td>
	</tr>
</table>
<br />


<div align="center">璇锋偍鐣欒█锛�</div>
<form name="guestbook" action="process.php" method="post"
	onsubmit="return checkall()">
<table id="table1">
	<tr>
		<td class="l">鏄电О</td>
		<td class="s">
		</td>
		<td class="left">&nbsp;
		<div id="user_msg"></div>
		</td>
	</tr>
	<tr>
		<td class="l" valign="top">鐣欒█</td>
		<td class="left">

		<textarea name="content" cols="40" rows="9"></textarea></td>
		<td class="left">
		
		<!-- begin 琛ㄦ儏琛ㄦ牸 -->
		<div id="smileys"><?php show_smileys_table()?></div>
		<!-- end 琛ㄦ儏琛ㄦ牸 -->
		
		</td>
	</tr>
	
	<tr>
		<td class="l">楠岃瘉鐮�</td>
		<td class="left"><input type="text" name="valid_code" size="4"
			maxlength="4" />&nbsp;<img src="./includes/showimgcode.php"
			border="0" align="absbottom" /></td>
		<td class="left">&nbsp;</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td colspan="2" class="left"><input name="submit" type="submit"
			value="鎻愪氦鐣欒█" /></td>
	</tr>

</table>
</form>

<!-- begin footer -->
<div id="botton">&nbsp;<?php echo $this->_vars['copyright_info']; ?>

<a href="mailto:<?php echo $this->_vars['admin_email']; ?>
">绔欓暱淇＄</a> <a
	href="./adm/index.php">绠＄悊</a><br />
Powered by <a href="http://maple.dreamneverfall.cn" target="_blank"
	title="Find More">MapleLeaf 1.5</a></div>
</div>
<!-- end foot -->
</body>
</html>
