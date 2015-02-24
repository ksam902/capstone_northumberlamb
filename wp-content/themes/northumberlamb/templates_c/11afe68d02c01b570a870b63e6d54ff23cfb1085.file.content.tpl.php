<?php /* Smarty version Smarty-3.1.18, created on 2015-02-24 21:23:44
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/media/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182181235254db7961ba9611-69538817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11afe68d02c01b570a870b63e6d54ff23cfb1085' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/media/content.tpl',
      1 => 1424813023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182181235254db7961ba9611-69538817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54db7961bcd603_28536328',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54db7961bcd603_28536328')) {function content_54db7961bcd603_28536328($_smarty_tpl) {?><div class="container">
    <div class="row">
        <h2>
            <strong>Media</strong>
        </h2>
        <div class="box">
            <div class="col-lg-12">
                <!-- <p><?php echo $_smarty_tpl->tpl_vars['content']->value['page']['post_content'];?>
</p> -->
                <ul class="nav nav-tabs nav-justified">
                  <li role="presentation" class="active"><a href="#" data-toggle="collapse" data-target="#photos">Photos</a></li>
                  <li role="presentation"><a href="#" data-toggle="collapse" data-target="#videos">Videos</a></li>
                  <li role="presentation"><a href="#" data-toggle="collapse" data-target="#articles">Articles</a></li>
                </ul>
                <div id="photos" class="collapse in">
                    PHOTOS : Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div id="videos" class="collapse">
                    VIDEOS : Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div id="articles" class="collapse">
                    ARTICLES : Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>                                
            </div>
        </div>
    </div>
</div><?php }} ?>
