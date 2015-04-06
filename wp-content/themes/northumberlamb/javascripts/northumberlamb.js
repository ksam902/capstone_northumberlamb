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
    // END RECIPE PAGE MODAL
    $('ul.nav-tabs li a').click(function(e){
    	e.preventDefault();
    });
});