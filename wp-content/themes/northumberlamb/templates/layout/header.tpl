
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
				{$menu}
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
                        {foreach $options.banner as $image}
                            {if $image@iteration == 1}
                               <div class="item active">
                            {else}
                                <div class="item">
                            {/if}
                                <img class="img-responsive img-full" src="{$image.image.sizes['banner']}" alt="{$image.image.alt}">
                            </div>
                        {/foreach}
                    </div>

                    <!-- Controls - Only display if there is more than one banner image uploaded-->

                    {if $options.banner|@count gt 1}
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    {/if}
                    <!--</header>-->
                </div>
            </div>
        </div>
    </div>
</div>

