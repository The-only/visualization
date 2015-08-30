<?php /* Smarty version Smarty-3.1.19, created on 2015-08-23 22:03:31
         compiled from "../../views/first/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180556143855d60102a0e3d1-70968916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed37316bb0994f24e3912b900cca7b526ebbdf40' => 
    array (
      0 => '../../views/first/index.tpl',
      1 => 1440338252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180556143855d60102a0e3d1-70968916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d60102a43a86_59305428',
  'variables' => 
  array (
    'module_host' => 0,
    'tplData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d60102a43a86_59305428')) {function content_55d60102a43a86_59305428($_smarty_tpl) {?><!DOCTYPE html><html><head><meta charset="utf-8" /><title>D3可视化</title><?php echo $_smarty_tpl->getSubTemplate ("../common/conf.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>"first"), 0);?>
<link href="<?php echo $_smarty_tpl->tpl_vars['module_host']->value;?>
/css/index.less" rel="stylesheet" /><link href="http://www.baidu.com/favicon.ico" rel="shortcut icon" /></head><body><div class="wrapper"><!-- header --><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><div class="content-top"><!-- 地图＋日历图 --><?php echo $_smarty_tpl->getSubTemplate ("./top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><div class="content-bottom"><!-- 南丁格尔图 --><div class="content-left"><?php echo $_smarty_tpl->getSubTemplate ("./left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><!-- 堆叠柱状图 --><div class="content-right"><?php echo $_smarty_tpl->getSubTemplate ("./right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></div></div><!-- footer --><?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php echo $_smarty_tpl->getSubTemplate ("../common/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<!--  <script>define('global/chinamapdata', "<?php echo $_smarty_tpl->tpl_vars['tplData']->value['chinamapdata'];?>
");</script> --><script>require(['first/index'], function (page) {page.init();});</script></body></html>
<?php }} ?>
