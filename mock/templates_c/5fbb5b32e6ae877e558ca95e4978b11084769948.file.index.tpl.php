<?php /* Smarty version Smarty-3.1.19, created on 2015-08-21 00:01:32
         compiled from "../../views/first/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82730728555d5f9dc4eda19-89397145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbb5b32e6ae877e558ca95e4978b11084769948' => 
    array (
      0 => '../../views/first/index.tpl',
      1 => 1440084904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82730728555d5f9dc4eda19-89397145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d5f9dc5525d0_31032354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5f9dc5525d0_31032354')) {function content_55d5f9dc5525d0_31032354($_smarty_tpl) {?><!DOCTYPE html><html><head><meta charset="utf-8" /><title>D3可视化</title><?php echo $_smarty_tpl->getSubTemplate ("../common/conf.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>"home"), 0);?>
<link href="<?php echo $_smarty_tpl->tpl_vars['module_host']->value;?>
/css/index.less" rel="stylesheet" /><link href="http://www.baidu.com/favicon.ico" rel="shortcut icon" /></head><body><div class="wrapper"><!-- header --><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><div class="content-top"><!-- 地图＋日历图 --><?php echo $_smarty_tpl->getSubTemplate ("./top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><div class="content-bottom"><!-- 南丁格尔图 --><div class="content-left"><?php echo $_smarty_tpl->getSubTemplate ("./left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><!-- 堆叠柱状图 --><div class="content-right"><?php echo $_smarty_tpl->getSubTemplate ("./right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></div></div><!-- footer --><?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php echo $_smarty_tpl->getSubTemplate ("../common/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<script>require(['first/index'], function(page) {page.init();});</script></body></html>
<?php }} ?>
