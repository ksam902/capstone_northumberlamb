$(function() {
	$('.menu-header-menu-container ul').addClass('nav navbar-nav navbar-right');
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    $('.overlay').click(function(){
    	$(this).css('pointer-events', 'none');
    });
    $('a.open-modal').click(function(e){
    	e.preventDefault();
    	$('#recipe-modal').modal('show');
    });
    $('#btnShipperApplication').click(function(e){
        e.preventDefault();
        $('#shipper-applicaton-modal').modal('show');
    });
    $('#btnMemberApplication').click(function(e){
        e.preventDefault();
        $('#member-application-modal').modal('show');
    });
    $('ul.nav-tabs li a').click(function(e){
    	e.preventDefault();
    });
});