<?php
function fetion_config($showConfig=FALSE,$config=NULL){
    $filename=PLUGINDIR.'.fetion.conf.php';
    if( isset($config) && $config['plugin'] =='fetion' ){
	$fetionID=$config['fetionID'];
	$fetionPWD=addslashes($_POST['fetionPASSWORD']);
	if(file_put_contents($filename,"<?php\n\$fetionID=$fetionID;\n\$fetionPWD='$fetionPWD';")){
	    return true;
	}
	return false;
    }
    if($showConfig){
	if(file_exists($filename)){
	    include $filename;
	}
    }
    echo '<form action="index.php?controller=plugin&amp;action=config" method="POST">';
    echo "<input type='hidden' name='plugin' value='fetion' />";
    echo '<p>FetionID<input type="text" name="fetionID" value="'.@$fetionID.'" /></p>';
    echo '<p>FetionPassword<input type="password" name="fetionPASSWORD" value="'.@$fetionPWD.'" /></p>';
    echo '<p><input type="submit" value="submit" /></p>';
    echo '</form>';
}
function fetion_send(){
    @include PLUGINDIR.'.fetion.conf.php';
    @$message=urlencode($_REQUEST['user'].' 留言：'.$_REQUEST['content']);
    @$result=file_get_contents('http://fetion.adwap.cn/restlet/fetion/'.$fetionID.'/'.$fetionPWD.'/'.$fetionID.'/'.$message);
    if($result=='OK'){	return TRUE; }
    return FALSE;
}
attachEvent('PostController/actionCreate','fetion_send');
?>