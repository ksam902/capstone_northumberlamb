<?php /* Smarty version Smarty-3.1.18, created on 2015-04-06 14:31:10
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/recipes/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80731179154db75bb5d8d18-65229018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dce18736a4cbf313c512f8de91a117b16f13c318' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/recipes/content.tpl',
      1 => 1428330664,
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
    'posts' => 0,
    'recipe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54db75bb701b91_81159689')) {function content_54db75bb701b91_81159689($_smarty_tpl) {?><div class="container">
    <!-- MODAL BUTTONS -->
    <div class="row">
            <h2>
                <strong>Cooking Lamb</strong>
            </h2>
        <div class="btn-group" role="group">
            <button class="btn btn-default" type="submit" id="btnBroiling">Broiling</button>
            <button class="btn btn-default" type="submit" id="btnBraising">Braising</button>
            <button class="btn btn-default" type="submit" id="btnRoasting">Roasting</button>
        </div>
    </div>
<!-- ALL RECIPES -->
    <div class="row">
        <h2>
            <strong>Recipes</strong>
        </h2>
        <div class="box box-recipes">
            <div class="div-recipes">
            <?php  $_smarty_tpl->tpl_vars['recipe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recipe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value['recipes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recipe']->key => $_smarty_tpl->tpl_vars['recipe']->value) {
$_smarty_tpl->tpl_vars['recipe']->_loop = true;
?>
            <div class="col-lg-12 div-recipe">
                <a href="#" data-reveal-id="recipe-modal-ajax" class="open-modal recipe-modal-open" rel="<?php echo $_smarty_tpl->tpl_vars['recipe']->value['ID'];?>
"><img class="img-recipe" src="<?php echo $_smarty_tpl->tpl_vars['recipe']->value['image']['sizes']['recipe-list'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recipe']->value['image']['alt'];?>
"></a>
                <a href="#" data-reveal-id="recipe-modal-ajax" class="open-modal recipe-modal-open" rel="<?php echo $_smarty_tpl->tpl_vars['recipe']->value['ID'];?>
"><h4 class="open-modal"><?php echo $_smarty_tpl->tpl_vars['recipe']->value['post_title'];?>
</h4></a>
                <div class="text-center"><?php if ($_smarty_tpl->tpl_vars['recipe']->value['prep_time']) {?><strong>Prep Time:</strong> <?php echo $_smarty_tpl->tpl_vars['recipe']->value['prep_time'];?>
<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['recipe']->value['servings']) {?> <strong>| Servings:</strong> <?php echo $_smarty_tpl->tpl_vars['recipe']->value['servings'];?>
<?php }?>
                </div>
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['recipe']->value['post_content'];?>

                </div>
            </div>
            <?php } ?>
        </div>
        </div>
    </div>
</div><?php }} ?>
