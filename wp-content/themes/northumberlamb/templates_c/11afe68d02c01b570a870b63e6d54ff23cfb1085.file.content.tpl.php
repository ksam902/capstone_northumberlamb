<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-17 14:19:23
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/media/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182181235254db7961ba9611-69538817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11afe68d02c01b570a870b63e6d54ff23cfb1085' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/media/content.tpl',
      1 => 1429280349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182181235254db7961ba9611-69538817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54db7961bcd603_28536328',
  'variables' => 
  array (
    'content' => 0,
    'pdf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54db7961bcd603_28536328')) {function content_54db7961bcd603_28536328($_smarty_tpl) {?><div class="container">
    <div class="row">
        <h2>
            <strong>Media</strong>
        </h2>

        <div class="box">
            <div style="text-align: center; padding-bottom: 30px;">
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['content']->value['page']['post_content'];?>

                </div>
                <a class="btn btn-primary" style="background-color: #405FA2;" role="button" href="http://northumberlamb.verygooddevelopment.ca/wp-content/uploads/2015/04/NLMC_Flyer.pdf" target="_blank">View Our Brochure</a>
            </div>
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation" class="active"><a href="#" id="tab-photos" data-toggle="tab"
                                                              data-target="#photos">Photos</a></li>
                    <li role="presentation"><a href="#" id="tab-videos" data-toggle="tab"
                                               data-target="#videos">Videos</a></li>
                    <li role="presentation"><a href="#" id="tab-articles" data-toggle="tab" data-target="#articles">Articles</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="photos" class="tab-pane fade active in" style="padding: 30px;">
                        <?php echo do_shortcode($_smarty_tpl->tpl_vars['content']->value['page']['photos']);?>

                    </div>
                    <div id="videos" class="tab-pane fade" style="text-align:center; padding: 30px;">
                        <?php echo $_smarty_tpl->tpl_vars['content']->value['page']['videos'];?>

                    </div>
                    <div id="articles" class="tab-pane fade" style="padding: 30px;">
                        <?php echo do_shortcode($_smarty_tpl->tpl_vars['content']->value['page']['articles']);?>

                        <div id="media-pdf" style="text-align: center;">
                            <?php  $_smarty_tpl->tpl_vars['pdf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pdf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['page']['articles_pdf']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pdf']->key => $_smarty_tpl->tpl_vars['pdf']->value) {
$_smarty_tpl->tpl_vars['pdf']->_loop = true;
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['pdf']->value['pdf']['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['pdf']->value['pdf']['title'];?>
</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
