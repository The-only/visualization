<?php /* Smarty version Smarty-3.1.19, created on 2015-08-23 15:54:44
         compiled from "/Users/baidu/Desktop/visualization/views/common/script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118949632055d60053753b23-00158210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff1cbdea23a0dd3cab86d76977dabd5def292cd' => 
    array (
      0 => '/Users/baidu/Desktop/visualization/views/common/script.tpl',
      1 => 1440316443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118949632055d60053753b23-00158210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d60053758d55_67763861',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d60053758d55_67763861')) {function content_55d60053758d55_67763861($_smarty_tpl) {?><script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
<script src="http://s1.bdstatic.com/r/www/cache/ecom/esl/1-8-2/esl.js"></script>
<script src="/src/common/d3/d3.min.js" charset="utf-8"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script> -->
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
