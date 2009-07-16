<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2009-07-15 23:07:06 CST */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="./themes/<?php echo $this->_vars['theme']; ?>
/login.css"  />
<script type="text/javascript" src="./includes/login.js"></script>
</head>
<body>

        <div class="main">
        
                <div class="title">
                        登陆
                </div>

                <div class="login">
                <form action="index.php?action=login" method="post" onsubmit="return login_check()">
            <div class="inputbox">
                                <dl>
                                        <dt>用户名</dt>
                                        <dd><input type="text" name="user" id="user" size="20" onfocus="this.style.borderColor='#F93'" onblur="this.style.borderColor='#888'" />
                                        </dd>
                                </dl>
                                <dl>
                                        <dt>密码</dt>
                                        <dd><input type="password" id="password" name="password" size="20" onfocus="this.style.borderColor='#F93'" onblur="this.style.borderColor='#888'" />
                                        </dd>
                                </dl>
                                            </div>
            <div class="butbox">
            <dl>
                                        <dt><input name="submit" type="submit" value="" /></dt>
                        
                                </dl>
                        </div>
                </form>
                </div>  
                
        </div>
        
        <div class="copyright">
                Powered by MapleLeaf<?php echo $this->_vars['mp_version']; ?>
  Copyright &copy;2009
        </div>

</body>
</html>
