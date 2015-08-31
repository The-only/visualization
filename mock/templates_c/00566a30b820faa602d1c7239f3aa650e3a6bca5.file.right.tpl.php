<?php /* Smarty version Smarty-3.1.19, created on 2015-08-25 10:50:53
         compiled from "/Users/zhangxuanjian/Documents/visualization/visualization/views/second/right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187749000755da7dde2b5297-48593103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00566a30b820faa602d1c7239f3aa650e3a6bca5' => 
    array (
      0 => '/Users/zhangxuanjian/Documents/visualization/visualization/views/second/right.tpl',
      1 => 1440471052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187749000755da7dde2b5297-48593103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55da7dde2b6c10_51361772',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55da7dde2b6c10_51361772')) {function content_55da7dde2b6c10_51361772($_smarty_tpl) {?><div class="wrap">
    <div class="pie-tabs">
        <ul id="cmd">
            <li class="cmd-1 active" data-id="0"><p data-id="0">北京</p></li>
            <li class="cmd-2" data-id="1"><p data-id="1">上海</p></li>
            <li class="cmd-3" data-id="2"><p data-id="2">广州</p></li>
        </ul>
        <div class="pie-tab-1" style="display: block;">
            <canvas id="canvas-1" width=399 height=249></canvas>
            <ul id="legend-1" class="legend"></ul>
        </div>
        <div class="pie-tab-2">
            <canvas id="canvas-2" width=399 height=249></canvas>
            <ul id="legend-2" class="legend"></ul>
        </div>
        <div class="pie-tab-3">
            <canvas id="canvas-3" width=399 height=249></canvas>
            <ul id="legend-3" class="legend"></ul>
        </div>
    </div>
</div>
<?php }} ?>
