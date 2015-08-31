<?php /* Smarty version Smarty-3.1.19, created on 2015-08-21 00:01:32
         compiled from "/Users/baidu/Desktop/web-visualization/views/common/script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152834652155d5f9dc5bd718-95455933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ebd1538fb369083118c79f2bc644aa68f3535ac' => 
    array (
      0 => '/Users/baidu/Desktop/web-visualization/views/common/script.tpl',
      1 => 1440083859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152834652155d5f9dc5bd718-95455933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d5f9dc5c5330_15834756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5f9dc5c5330_15834756')) {function content_55d5f9dc5c5330_15834756($_smarty_tpl) {?><script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
<script src="http://s1.bdstatic.com/r/www/cache/ecom/esl/1-8-2/esl.js"></script>
<script src="../../src/common/d3/d3.min.js"></script>
<!-- edp:
{
    "preserveBaseUrl": true
}
-->
<script>
    require.config({
        'baseUrl': '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
'
    });
</script>

<script>
    define('jquery', function (require) {
        return $;
    });
    define('d3', function (require) {
        return d3;
    });
</script><?php }} ?>
