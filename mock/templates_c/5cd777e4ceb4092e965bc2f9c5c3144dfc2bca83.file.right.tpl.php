<?php /* Smarty version Smarty-3.1.19, created on 2015-08-31 14:47:48
         compiled from "/Users/baidu/Desktop/visualization/views/second/right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152855737355e3f894d3fd23-83395347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cd777e4ceb4092e965bc2f9c5c3144dfc2bca83' => 
    array (
      0 => '/Users/baidu/Desktop/visualization/views/second/right.tpl',
      1 => 1440918545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152855737355e3f894d3fd23-83395347',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55e3f894d46776_69625381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3f894d46776_69625381')) {function content_55e3f894d46776_69625381($_smarty_tpl) {?><div class="wrap">
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
