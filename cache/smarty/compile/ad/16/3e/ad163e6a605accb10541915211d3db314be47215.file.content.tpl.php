<?php /* Smarty version Smarty-3.1.19, created on 2016-07-02 11:57:00
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/LemondeaTable/adminDLI/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138051391357778fec0ddc99-41069188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad163e6a605accb10541915211d3db314be47215' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/LemondeaTable/adminDLI/themes/default/template/content.tpl',
      1 => 1465995674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138051391357778fec0ddc99-41069188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57778fec0e7443_42530001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57778fec0e7443_42530001')) {function content_57778fec0e7443_42530001($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
