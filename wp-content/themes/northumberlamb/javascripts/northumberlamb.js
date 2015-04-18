var count = 0;
$(function () {
    // var btnPrint = $('#btnPrintRecipe');
    var btnPrint = document.getElementById("btnPrintRecipe");

    $('.menu-header-menu-container ul').addClass('nav navbar-nav navbar-right');
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    $('div#client_navigation h5 a').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#" + $(this).attr("id") + "_section").offset().top
        }, 2000);
    });
    $('.overlay').click(function () {
        $(this).css('pointer-events', 'none');
    });
    // ----------------- SHIPPER PAGE
    $('#btnShipperApplication').click(function (e) {
        e.preventDefault();
        $('#shipper-application-modal').modal('show');
    });
    $('#btnMemberApplication').click(function (e) {
        e.preventDefault();
        $('#member-application-modal').modal('show');
    });
    $('table#lamb-grading-chart-table tr').on('click', function(e) {
        //exclude table header row
        if(!$(this).is(':first-child')){
            if(!$(this).hasClass('highlight-table-row')){
                $(this).addClass('highlight-table-row').siblings().removeClass('highlight-table-row');
            }else{
                 $(this).removeClass('highlight-table-row').siblings().removeClass('highlight-table-row');
            }
        }
    });
    $('table#lamb-grading-chart-table tr').on('mouseover', function(e) {
        //exclude table header row
        if(!$(this).is(':first-child')){
            $(this).addClass('hover-table-row');
        }
    });
    $('table#lamb-grading-chart-table tr').on('mouseout', function(e) {
        $(this).removeClass('hover-table-row');
    });
    // ----------------- END SHIPPER PAGE
    // -----------------    RECIPE PAGE
    $('#btnCookingLamb').click(function (e) {
        e.preventDefault();
        $('#cooking-lamb-modal').modal('show');
    });
    $('#btnBroiling').click(function (e) {
        e.preventDefault();
        $('#broiling-modal').modal('show');
    });
    $('#btnBraising').click(function (e) {
        e.preventDefault();
        $('#braising-modal').modal('show');
    });
    $('#btnRoasting').click(function (e) {
        e.preventDefault();
        $('#roasting-modal').modal('show');
    });
    $('#btnNutritionalInfo').click(function (e) {
        e.preventDefault();
        $('#nutritional-info-modal').modal('show');
    });
    $('a.recipe-modal-open').click(function (e) {
        e.preventDefault();

        var url = '/ajax/?recipe_id=' + $(this).attr('rel');
        count = (parseInt($(this).parent().attr('data-position')));
        $.ajax(url).done(function (response, status) {
            $('#recipe-popup .popup-content').html(response);
            $('#recipe-modal-ajax').modal('show');
            $("#recipe-modal-ajax").on('shown.bs.modal', function (e) {
                $('#btnPrintRecipe').on('click', function () {
                    printRecipe(document.getElementById("print-title"), false);
                    printRecipe(document.getElementById("print-content"), true);
                    window.print();
                });
                    //disable buttons if first or last recipe is clicked
                    if (count === 0) {
                        $('button#previous_recipe').prop('disabled', true);
                    } else if (count === recipeData.length - 1) {
                        $('button#next_recipe').prop('disabled', true);
                    }
                    $('button#next_recipe').on('click', function () {
                        e.preventDefault();
                        increaseCount();
                        populateModal(count);

                        if (count === recipeData.length - 1) {
                            $('button#next_recipe').prop('disabled', true);
                        } else if (count != 0) {
                            $('button#previous_recipe').prop('disabled', false);
                        }

                    });
                    $('button#previous_recipe').on('click', function () {
                        e.preventDefault();
                        decreaseCount();
                        populateModal(count);
                        if (count === 0) {
                            $('button#previous_recipe').prop('disabled', true);
                        } else if (count != recipeData.length - 1) {
                            $('button#next_recipe').prop('disabled', false);
                        }
                    });
            });
        });

    });
    function populateModal(count) {
        //loop through cuts of lamb and append to string
        var cuts = "";
        for (var i = 0; i <= recipeData[count].lamb_cut.length - 1; i++) {
            cuts += recipeData[count].lamb_cut[i];
            if (i != recipeData[count].lamb_cut.length - 1) {
                cuts += ", ";
            }
        }
        //loop through ingredients of recipe and append to string
        $('ol#ul-recipe-ingredients').empty();
        var ingredients;
        for (var i = 0; i <= recipeData[count].ingredients.length - 1; i++) {
            $('ol#ul-recipe-ingredients').append('<li>' + recipeData[count].ingredients[i].ingredient + '</li>');
        }

        $('div#imgModalRecipe img').attr('src', recipeData[count].image.sizes['recipe-modal']);
        $('h2.recipe-title').html(recipeData[count].post_title);
        $('div#print-content h6').find('span:nth-of-type(1)').fadeIn(600).html(recipeData[count].prep_time);
        $('div#print-content h6').find('span:nth-of-type(2)').fadeIn(600).html(recipeData[count].servings);
        $('div#print-content h6').find('span:nth-of-type(3)').fadeIn(600).html(cuts);
        $('div#print-content').find('p:nth-of-type(2)').fadeIn(600).html(recipeData[count].post_content);
        $('div#print-content').find('p:nth-of-type(5)').fadeIn(600).html(recipeData[count].instructions);
    }

    function increaseCount() {
        return count += 1;
    }

    function decreaseCount() {
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
        } else if (append === true) {
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

    $('#btnAllRecipes').on('click', function () {
        $('small.filtering').show();
        $('small.filtering span').html("All Recipes");
        var target = '.recipe';
        $(target).each(function () {
            $(this).fadeIn(200);
        });
        $('div.no-recipes').hide();
        $('html, body').animate({
            scrollTop: $(".div-recipes").offset().top
        }, 1000);
    });

    $('area').on('click', function (e) {
        e.preventDefault();
        filter = $(this).attr('alt');
        $('small.filtering span').html(filter);
        var matched = 0;

        var target = '.recipe';
        $(target).each(function () {
            $(this).hide();
        });
        //Lamb Cut Chart Filtering
        $(target).each(function () {
            var item = this;
            var lamb_cuts = $(item).attr('data-cuts').split(" ");

            $.each(lamb_cuts, function (k, v) {
                //if the category matches the filter then display that div
                if (v === filter) {
                    matched++;
                    $(item).fadeIn(200);
                }
            });
        });
        if (matched === 0) {
            $('div.no-recipes').fadeIn(200);
            $('small.filtering').hide();
        } else {
            $('div.no-recipes').hide();
            $('small.filtering').show();
        }
        $('html, body').animate({
            scrollTop: $(".div-recipes").offset().top
        }, 1000);
    });
    // END RECIPE PAGE MODAL

    //----------- CONSUMERS PAGE
        $('#btnPurchasingStoring').click(function (e) {
            e.preventDefault();
            $('#purchasing-storing-modal').modal('show');
        });
    //----------- END CONSUMERS PAGE
    $('ul.nav-tabs li a').click(function (e) {
        e.preventDefault();
    });
// -------------------------------------------------------------------------- dropdown menu for important links
    var importantLinks = $('li > a:contains("Important Links")');
    importantLinks.addClass("dropdown-toggle");
    importantLinks.attr('data-toggle', 'dropdown');
    importantLinks.next().addClass("dropdown-menu");
    importantLinks.next().attr('role', 'menu');
    importantLinks.next().find('a').attr('target', '_blank');
    $('.dropdown-toggle').dropdown();

    //----------------------------------------------------------------------- form validation
    jQuery.validator.addMethod("cdnPostal", function (postal, element) {
        return this.optional(element) ||
            postal.match(/[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/);
    }, "Please specify a valid postal code.");
    $("#shipperForm").validate({
        rules: {
            txtHomePhoneSF: {
                phoneUS: true
            },
            txtCellPhoneSF: {
                phoneUS: true
            },
            txtPostalCodeSF: {
                cdnPostal: true
            }
        }
    });
    $("#memberForm").validate({
        rules: {
            txtPhoneMF: {
                phoneUS: true
            },
            txtPostalCodeMF: {
                cdnPostal: true
            }
        }
    });
    $("#contactForm").validate({
        rules: {
            contactPhone: {
                phoneUS: true
            },
            contactEmail: {
                email: true
            }
        }
    });

});