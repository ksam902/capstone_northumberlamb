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

    $('area').on('click', function(e) {
         e.preventDefault();
        //alert($(this).attr('alt') + ' clicked');
        var filter = $(this).attr('alt');

        var target = '.recipe';
        $(target).each(function() {
            $(this).hide();
        });
        if (filter === 'All') {
            //$(target).fadeIn(200).removeClass('_f');

        } else {
            //Lamb Cut Chart Filtering
            $(target).each(function() {
                var item = this;
                var lamb_cuts = $(item).attr('data-cuts').split(" ");

                $.each(lamb_cuts, function(k,v){
                    //if the category matches the filter then display that div
                    if ( v === filter ) {
                        console.log("match");
                        console.log(item);
                        $(item).show();
                    }
                });
            });
        }
    });

    // END RECIPE PAGE MODAL
    $('ul.nav-tabs li a').click(function(e){
    	e.preventDefault();
    });
});