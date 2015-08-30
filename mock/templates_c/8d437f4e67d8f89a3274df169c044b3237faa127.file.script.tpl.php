<?php /* Smarty version Smarty-3.1.19, created on 2015-08-24 10:13:27
         compiled from "/Users/zhangxuanjian/Documents/visualization/visualization/views/common/script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196643648855da7dc791cd32-50701507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d437f4e67d8f89a3274df169c044b3237faa127' => 
    array (
      0 => '/Users/zhangxuanjian/Documents/visualization/visualization/views/common/script.tpl',
      1 => 1440157165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196643648855da7dc791cd32-50701507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55da7dc7923d58_04503952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55da7dc7923d58_04503952')) {function content_55da7dc7923d58_04503952($_smarty_tpl) {?><script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
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
