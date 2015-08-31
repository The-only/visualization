<?php /* Smarty version Smarty-3.1.19, created on 2015-08-31 14:47:48
         compiled from "/Users/baidu/Desktop/visualization/views/common/script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198800443855e3f894d59d39-75127191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff1cbdea23a0dd3cab86d76977dabd5def292cd' => 
    array (
      0 => '/Users/baidu/Desktop/visualization/views/common/script.tpl',
      1 => 1441003617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198800443855e3f894d59d39-75127191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55e3f894d5d578_73916308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3f894d5d578_73916308')) {function content_55e3f894d5d578_73916308($_smarty_tpl) {?><script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
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
