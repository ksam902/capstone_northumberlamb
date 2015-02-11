<?php /* Smarty version Smarty-3.1.18, created on 2015-02-11 16:40:48
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/home/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151822962954d90fb16e47f8-88336190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b599bda3b3a40bf0b9a1efe8e3123e1357ac2712' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/home/content.tpl',
      1 => 1423672846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151822962954d90fb16e47f8-88336190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d90fb1747816_72965240',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d90fb1747816_72965240')) {function content_54d90fb1747816_72965240($_smarty_tpl) {?><div>HOME PAGEEEEEEEEEEE</div>
<br/>
<div>THIS SHOULD BE THE ABOUT/HISTORY SECTION CONTENT : <br/><br/>
	<?php echo $_smarty_tpl->tpl_vars['content']->value['page']['about_history_content'];?>

</div>
<br/>
<div>THIS SHOULD BE THE FEDERAL INSPECTION INITIATIVE SECTION CONTENT : <br/><br/>
	<?php echo $_smarty_tpl->tpl_vars['content']->value['page']['federal_inspection_initative_content'];?>

</div>
<br/>
<div>THIS SHOULD BE THE BOARD OF DIRECTORS SECTION CONTENT : <br/><br/>
	<?php echo $_smarty_tpl->tpl_vars['content']->value['page']['board_of_directors_caption'];?>

</div><?php }} ?>
