var count = 0;

$(function() {
    // var btnPrint = $('#btnPrintRecipe');
    var btnPrint = document.getElementById("btnPrintRecipe");

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
    $('#btnShipperApplication').click(function(e){
        e.preventDefault();
        $('#shipper-application-modal').modal('show');
    });
    $('#btnMemberApplication').click(function(e){
        e.preventDefault();
        $('#member-application-modal').modal('show');
    });
    // -----------------    RECIPE PAGE
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
    $('a.recipe-modal-open').click(function(e){
        e.preventDefault();

        var url = '/ajax/?recipe_id='+ $(this).attr('rel');
        count = (parseInt($(this).parent().attr('data-position')));
        $.ajax( url ).done(function(response, status) {
            $('#recipe-popup .popup-content').html(response);
            $('#recipe-modal-ajax').modal('show');
                $( "#recipe-modal-ajax" ).on('shown.bs.modal', function(e){
                    $('#btnPrintRecipe').on('click', function(){
                        printRecipe(document.getElementById("print-title"), false);
                        printRecipe(document.getElementById("print-content"), true);
                        window.print();
                    });
                    //disable buttons if first or last recipe is clicked
                    if(count === 0){
                        $('button#previous_recipe').prop('disabled', true);
                    }else if(count === recipeData.length - 1){
                        $('button#next_recipe').prop('disabled', true);
                    }
                    $('button#next_recipe').on('click', function() {
                        e.preventDefault();
                        increaseCount();
                        //populateModal(count);
                        $('h2.recipe-title').html(recipeData[count].post_title);
                        $('div#print-content').find('p:nth-of-type(2)').html(recipeData[count].post_content);
                        $('div#print-content').find('p:nth-of-type(5)').html(recipeData[count].instructions);
                        if(count === recipeData.length - 1){
                            $('button#next_recipe').prop('disabled', true);
                        }else if(count != 0){
                            $('button#previous_recipe').prop('disabled', false);
                        }

                    });
                    $('button#previous_recipe').on('click', function() {
                        e.preventDefault();
                        decreaseCount();
                        $('h2.recipe-title').html(recipeData[count].post_title);
                        if(count === 0){
                            $('button#previous_recipe').prop('disabled', true);
                        }else if(count != recipeData.length - 1){
                            $('button#next_recipe').prop('disabled', false);
                        }
                    });
                });
        });

    });
    function increaseCount(){
        return count += 1;
    }
    function decreaseCount(){
        return count -= 1;
    }
        // ---- PRINTING MODAL
    function printRecipe(elem, append, delimiter) {
        var domClone = elem.cloneNode(true);
        var $printSection = document.getElementById("print-section");

        if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "print-section";
            document.body.appendChild($printSection);
        }
        if (append !== true) {
            $printSection.innerHTML = "";
        }else if (append === true) {
            if (typeof(delimiter) === "string") {
                $printSection.innerHTML += delimiter;
            }
            else if (typeof(delimiter) === "object") {
                $printSection.appendChlid(delimiter);
            }
        }

        $printSection.appendChild(domClone);
    }
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