<?php /* Smarty version Smarty-3.1.19, created on 2016-07-02 11:56:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/LemondeaTable/adminDLI/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99216478057778fc5bb0871-48677790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2202db4f174acc6faebd2934454c8e6dc60f3bda' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/LemondeaTable/adminDLI/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1465995674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99216478057778fc5bb0871-48677790',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57778fc5bb30f0_72899065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57778fc5bb30f0_72899065')) {function content_57778fc5bb30f0_72899065($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
