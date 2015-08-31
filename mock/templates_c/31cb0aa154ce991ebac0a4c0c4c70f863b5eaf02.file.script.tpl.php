<?php /* Smarty version Smarty-3.1.19, created on 2015-08-31 19:20:37
         compiled from "/Users/sunwei11/baidu/visualization/views/common/script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21420001755e4388569c758-38959649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31cb0aa154ce991ebac0a4c0c4c70f863b5eaf02' => 
    array (
      0 => '/Users/sunwei11/baidu/visualization/views/common/script.tpl',
      1 => 1441001582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21420001755e4388569c758-38959649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55e438856a0d62_83871895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e438856a0d62_83871895')) {function content_55e438856a0d62_83871895($_smarty_tpl) {?><script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
<script src="http://s1.bdstatic.com/r/www/cache/ecom/esl/1-8-2/esl.js"></script>
<script src="/src/common/d3/d3.min.js" charset="utf-8"></script>

<script>
    require.config({
        baseUrl: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
',
        paths: {
            'd3': 'common/d3/d3.min',
            'd3-tip': 'common/d3/d3-tip'
        }
    });
</script>

<script>
    define('jquery', function (require) {
        return $;
    });
</script>
<?php }} ?>
