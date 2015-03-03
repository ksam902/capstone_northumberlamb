<?php /* Smarty version Smarty-3.1.18, created on 2015-03-03 14:03:33
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/consumers/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33396914054db75c432ed81-13430795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02c97a2dc7980d75fd734a2a9cadf52ac08ab9e0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/consumers/content.tpl',
      1 => 1425391412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33396914054db75c432ed81-13430795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54db75c4377062_88835870',
  'variables' => 
  array (
    'content' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54db75c4377062_88835870')) {function content_54db75c4377062_88835870($_smarty_tpl) {?>
<div class="container">
    <div class="row">
        <h2>
            <strong>Ask For NorthumberLamb</strong>
        </h2>
        <div class="box">
            <div class="col-lg-12">
                <p><?php echo $_smarty_tpl->tpl_vars['content']->value['page']['post_content'];?>
</p>
                <br/><hr><br/>
                <h5><strong>Clients</strong></h5>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['posts']['clients']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                        <li><a href='<?php echo $_smarty_tpl->tpl_vars['client']->value['link'];?>
' target="_blank"><?php echo $_smarty_tpl->tpl_vars['client']->value['post_title'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.container --><?php }} ?>
