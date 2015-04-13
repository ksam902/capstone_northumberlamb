var count = 0;

$(function() {
    $('.menu-header-menu-container ul').addClass('nav navbar-nav navbar-right');
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    $('div#client_navigation h5 a').click(function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#"+$(this).attr("id") +"_section").offset().top
        }, 2000);
    });
    $('.overlay').click(function(){
    	$(this).css('pointer-events', 'none');
    });
    $('a.recipe-modal-open').click(function(e){
    	e.preventDefault();

        var url = '/ajax/?recipe_id='+ $(this).attr('rel');

        $.ajax( url ).done(function(response, status) {
            $('#recipe-popup .popup-content').html(response);
            $('#recipe-modal-ajax').modal('show');
        });
    });
    $('button#next_recipe').click(function() {
        e.preventDefault();
        alert("next clicked");

    });
    function increaseCount(){
        return count += 1;
    }
    $('#btnShipperApplication').click(function(e){
        e.preventDefault();
        $('#shipper-application-modal').modal('show');
    });
    $('#btnMemberApplication').click(function(e){
        e.preventDefault();
        $('#member-application-modal').modal('show');
    });
    // RECIPE PAGE MODALS
    $('#btnBroiling').click(function(e){
        e.preventDefault();
        $('#broiling-modal').modal('show');
    });
    $('#btnBraising').click(function(e){
        e.preventDefault();
        $('#braising-modal').modal('show');
    });
    $('#btnRoasting').click(function(e){
        e.preventDefault();
        $('#roasting-modal').modal('show');
    });
    // --- LAMB CUT CHART
    $('img[usemap]').rwdImageMaps();

    $('#btnAllRecipes').on('click', function(){
        $('small.filtering').show();
        $('small.filtering span').html("All Recipes");
            var target = '.recipe';
            $(target).each(function() {
                $(this).fadeIn( 200);
            });
            $('div.no-recipes').hide();
            $('html, body').animate({
                scrollTop: $(".div-recipes").offset().top
            }, 1000);
    });

    $('area').on('click', function(e) {
             e.preventDefault();
            var filter = $(this).attr('alt');
            $('small.filtering span').html(filter);
            var matched = 0;

            var target = '.recipe';
            $(target).each(function() {
                $(this).hide();
            });
            //Lamb Cut Chart Filtering
            $(target).each(function() {
                var item = this;
                var lamb_cuts = $(item).attr('data-cuts').split(" ");

                $.each(lamb_cuts, function(k,v){
                    //if the category matches the filter then display that div
                    if ( v === filter ) {
                        matched ++;
                        $(item).fadeIn( 200);
                    }
                });
            });
            if(matched === 0){
                $('div.no-recipes').fadeIn( 200);;
                $('small.filtering').hide();
            }else{
                $('div.no-recipes').hide();
                $('small.filtering').show();
            }
            $('html, body').animate({
                scrollTop: $(".div-recipes").offset().top
            }, 1000);
    });

    // END RECIPE PAGE MODAL
    $('ul.nav-tabs li a').click(function(e){
    	e.preventDefault();
    });
});