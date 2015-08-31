<?php /* Smarty version Smarty-3.1.19, created on 2015-08-31 14:20:09
         compiled from "/Users/sunwei11/baidu/visualization/views/second/right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99241038355e3f219614193-91341859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0bde1ddbe989a43f8f1a14583589d3028863882' => 
    array (
      0 => '/Users/sunwei11/baidu/visualization/views/second/right.tpl',
      1 => 1441001440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99241038355e3f219614193-91341859',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55e3f219615075_49379047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3f219615075_49379047')) {function content_55e3f219615075_49379047($_smarty_tpl) {?><div class="wrap">
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
