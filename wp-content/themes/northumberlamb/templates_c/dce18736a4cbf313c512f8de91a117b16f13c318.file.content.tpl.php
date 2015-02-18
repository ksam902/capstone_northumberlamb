<?php /* Smarty version Smarty-3.1.18, created on 2015-02-18 15:29:40
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/recipes/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80731179154db75bb5d8d18-65229018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dce18736a4cbf313c512f8de91a117b16f13c318' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/recipes/content.tpl',
      1 => 1424273372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80731179154db75bb5d8d18-65229018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54db75bb701b91_81159689',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54db75bb701b91_81159689')) {function content_54db75bb701b91_81159689($_smarty_tpl) {?><div class="container">
    <div class="row">
        <h2>
            <strong>Recipes</strong>
        </h2>
        <div class="box">
            <div class="col-lg-12">
                <p><?php echo $_smarty_tpl->tpl_vars['content']->value['page']['post_content'];?>
</p>
            </div>
        </div>
    </div>
</div><?php }} ?>
