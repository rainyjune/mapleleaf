<?php
class PluginController extends BaseController
{
    public function actionConfig(){
        is_admin();
        $all_plugin=ZFramework::get_all_plugins();
        if(isset ($_POST['plugin']) && in_array($_POST['plugin'], $all_plugin)){
            include_once PLUGINDIR.$_POST['plugin'].'.php';
            $funcName=$_POST['plugin'].'_config';
            $funcName(FALSE,$_POST);
        }
        header("Location:index.php?action=control_panel&subtab=plugin");exit;
    }
    public function actionDeactivate(){
        is_admin();
        $all_plugin=ZFramework::get_all_plugins();
        if(isset ($_GET['id']) && in_array($_GET['id'], $all_plugin)){
            $pluginConfFile=conf_path().'/.'.$_GET['id'].'.conf.php';
            @unlink($pluginConfFile);
        }
        header("Location:index.php?action=control_panel&subtab=plugin");
    }
}