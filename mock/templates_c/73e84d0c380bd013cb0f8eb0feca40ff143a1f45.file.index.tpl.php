<?php /* Smarty version Smarty-3.1.19, created on 2015-08-31 14:20:09
         compiled from "../../views/second/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174634471555e3f2195d79d5-15748281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73e84d0c380bd013cb0f8eb0feca40ff143a1f45' => 
    array (
      0 => '../../views/second/index.tpl',
      1 => 1441001440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174634471555e3f2195d79d5-15748281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55e3f219607345_52259765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3f219607345_52259765')) {function content_55e3f219607345_52259765($_smarty_tpl) {?><!DOCTYPE html><html><head><meta charset="utf-8" /><title>D3可视化</title><?php echo $_smarty_tpl->getSubTemplate ("../common/conf.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('module'=>"second"), 0);?>
<link href="<?php echo $_smarty_tpl->tpl_vars['module_host']->value;?>
/css/index.less" rel="stylesheet" /><link href="http://www.baidu.com/favicon.ico" rel="shortcut icon" /></head><body><div class="wrapper"><!-- header --><?php echo $_smarty_tpl->getSubTemplate ("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="container"><div class="content-top"><!-- 气泡图 --><?php echo $_smarty_tpl->getSubTemplate ("./top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><div class="content-bottom"><!-- 平行坐标图 --><div class="content-left"><?php echo $_smarty_tpl->getSubTemplate ("./left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><!-- 饼图 --><div class="content-right"><?php echo $_smarty_tpl->getSubTemplate ("./right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></div></div><!-- footer --><?php echo $_smarty_tpl->getSubTemplate ("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php echo $_smarty_tpl->getSubTemplate ("../common/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<script type="text/javascript">var args = [];</script><script type="text/javascript" src="../../src/second/PieChart.js"></script><script>require(['second/index'], function(page) {page.init();});</script></body></html>
<?php }} ?>
