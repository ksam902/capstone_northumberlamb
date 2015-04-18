<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 20:09:47
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133008654454d90fb15c84b2-13633154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39ed5750c6c83f7d279824bab2c3b61a23e41456' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/layout/header.tpl',
      1 => 1429387783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133008654454d90fb15c84b2-13633154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d90fb16ade51_38160939',
  'variables' => 
  array (
    'menu' => 0,
    'options' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d90fb16ade51_38160939')) {function content_54d90fb16ade51_38160939($_smarty_tpl) {?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div id="nav-container" class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"> <img src="/images/NorthumberLamb_White.png" alt="logo" width="230" height="58"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="myCarousel" class="carousel slide">
                    <!-- Header Carousel -->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value['banner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
?>
                            <?php if ($_smarty_tpl->tpl_vars['image']->iteration==1) {?>
                               <div class="item active">
                            <?php } else { ?>
                                <div class="item">
                            <?php }?>
                                <img class="img-responsive img-full" src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image']['sizes']['banner'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['image']['alt'];?>
">
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Controls - Only display if there is more than one banner image uploaded-->

                    <?php if (count($_smarty_tpl->tpl_vars['options']->value['banner'])>1) {?>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    <?php }?>
                    <!--</header>-->
                </div>
            </div>
        </div>
    </div>
</div>

<?php }} ?>
