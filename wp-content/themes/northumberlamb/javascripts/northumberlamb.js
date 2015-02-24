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
    // $('img.img-recipe').click(function(){
    // 	$('#modalOverlay').stop().fadeTo(500,1);
    // });
    $('.modalClose').click(function(){
    	$('#modalOverlay').hide();
    });
});