<?php /* Smarty version Smarty-3.1.19, created on 2015-08-21 00:29:07
         compiled from "/Users/baidu/Desktop/visualization/views/common/conf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212366771455d60053704257-50099379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29fa56a91d8e0153be85aaf2d3267d8b0a9bbdc6' => 
    array (
      0 => '/Users/baidu/Desktop/visualization/views/common/conf.tpl',
      1 => 1438051671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212366771455d60053704257-50099379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
    'ASSET' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d60053726828_38497825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d60053726828_38497825')) {function content_55d60053726828_38497825($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["ASSET"] = new Smarty_variable($_smarty_tpl->tpl_vars['root']->value, null, 0);?><?php $_smarty_tpl->tpl_vars["module_host"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['ASSET']->value)."/".((string)$_smarty_tpl->tpl_vars['module']->value), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["module_host"] = clone $_smarty_tpl->tpl_vars["module_host"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["module_host"] = clone $_smarty_tpl->tpl_vars["module_host"];?><?php $_smarty_tpl->tpl_vars["base_url"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['ASSET']->value), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["base_url"] = clone $_smarty_tpl->tpl_vars["base_url"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["base_url"] = clone $_smarty_tpl->tpl_vars["base_url"];?>
<?php }} ?>