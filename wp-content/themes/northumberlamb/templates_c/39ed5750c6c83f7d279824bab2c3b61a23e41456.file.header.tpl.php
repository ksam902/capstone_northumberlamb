<?php /* Smarty version Smarty-3.1.18, created on 2015-02-18 15:11:57
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133008654454d90fb15c84b2-13633154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39ed5750c6c83f7d279824bab2c3b61a23e41456' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/layout/header.tpl',
      1 => 1424272309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133008654454d90fb15c84b2-13633154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d90fb16ade51_38160939',
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d90fb16ade51_38160939')) {function content_54d90fb16ade51_38160939($_smarty_tpl) {?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">NorthumberLamb</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <li class="nav navbar-nav navbar-right">
				<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

            </li>
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
                    <!--<header id="myCarousel" class="carousel slide">-->
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="http://placehold.it/840x400&text=Slide One" alt="">
                        </div>

                        <div class="item">
                            <img class="img-responsive img-full" src="http://placehold.it/840x400&text=Slide Two" alt="">
                        </div>

                        <div class="item">
                            <img class="img-responsive img-full" src="http://placehold.it/840x400&text=Slide Three" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                    <!--</header>-->
                </div>
            </div>
        </div>
    </div>
</div>

<?php }} ?>
