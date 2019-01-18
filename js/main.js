$(document).ready(function() {

    //$('body').on('touchstart', '.touch', function(e){
       // $(this).trigger('click');
      //  e.preventDefault();
    //})

    //~~~~~~~~~~~ Main Nav off canvas ~~~~~
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $('#show-main-nav').on('click.phonetablet', function(e) {
        phoneTabletnavToggle();
        return false;
    });

    //~~~~~~~~~~~ Replace no js links ~~~~~
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $('.no-js-link').each(function(){
        var $link = $(this);
        var href = $link.attr('href');
        $link.attr('href', href.replace('_no_js', ''));
    });

    //~~~~~~~~~~~ Back to top ~~~~~~~~~~~~~
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $(window).scroll(function() {
        if ($(this).scrollTop()>550) {
            $('#back-to-top').addClass('open').css('top', ($(window).scrollTop()) + $(window ).height() - 290);
        } else {
            $('#back-to-top').removeClass('open');
        }
    });

    //~~~~~~~~~~~ Bulletins ~~~~~~~~~~~~~~~
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    (function Bulletins() {

        function initiate() {
            first = $('#bulletins .bulletin').first();
            last = $('#bulletins .bulletin').last();
            last.insertBefore(first);
            first = $('#bulletins .bulletin').first();
            last = $('#bulletins .bulletin').last();
            last.insertBefore(first);
            setTimeout(function(){
                $('#bulletins').addClass('loaded'); 
            }, 1);
        }

        $( document ).ready(function() {
            initiate();
        });

        var timer = setInterval(moveRight, 6000);

        $('#bulletins').mouseenter(function(){
            var $this = $(this);
            var currentMousePosx = 1;
            clearInterval(timer);
            $this.mousemove(function(event) {
                currentMousePosx = event.pageX;

                if (currentMousePosx - $this.offset().left > $this.width() / 2) {
                    $('.arrow.left').removeClass('hover');
                    $('.arrow.right').addClass('hover');
                } else {
                    $('.arrow.right').removeClass('hover');
                    $('.arrow.left').addClass('hover');
                } 
            });

        }).mouseleave(function(){ 
            $('.hover').removeClass('hover');
            timer = setInterval(moveRight, 5000);
        });

        $('.arrow.right').click( function(e) {
            moveRight();
            e.stopPropagation();
        });

        $('.arrow.left').click( function(e) {
            moveLeft();
            e.stopPropagation();
        });

        function moveRight() {
            first = $('#bulletins .bulletin').first();
            last = $('#bulletins .bulletin').last();
            first.insertAfter(last);
        }

        function moveLeft() {
            first = $('#bulletins .bulletin').first();
            last = $('#bulletins .bulletin').last();
            last.insertBefore(first);
        }

        





    })();

    //~~~~~~~~~~~ build mobile nav ~~~~~~~~
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    (function() {
        var sibarString = '',
            sideBar = $('#side-bar > ul > li > a'),
            count = $('#side-bar-select option').length;

        if (count < 2) {
            sideBar.each(function() {
                var link = $(this).attr('href'),
                    name = $(this).text();
                    sibarString += '<option value="' + link + '">' + name + '</option>'
            });
            $('#side-bar select').append(sibarString);
        }
    })();

    $("#side-bar-select").change(function(){
        if ($(this).val()!='') {
            window.location.href=$(this).val();
        }
    });

    //~~~~~~~~~~~ destroy sidebar arrows ~~
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    $('#side-bar > ul > li> a').each(function() {
        if ($(this).siblings().size('ul') == 0) {
            $(this).css('background-image', 'none')
        };
    })

    //~~~~~~~~~~~ Search options ~~~~~~~~~~
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    $('#search .search-field').on('click', function(){
        $('#search').addClass('open');
        $('#search').on('click', function(e) {
            e.stopPropagation();
        })
        $('#search').on('touchend', function(e) {
            e.stopPropagation();
        })
        $('body').on('click.closeSearch', closeMoreSearch);
        $('body').on('touchend.closeSearch', closeMoreSearch);
    });

    $('#search .search-field').on('touchend', function(){
        $('#search').addClass('open');
        $('#search').on('click', function(e) {
            e.stopPropagation();
        })
        $('#search').on('touchend', function(e) {
            e.stopPropagation();
        })
        $('body').on('click.closeSearch', closeMoreSearch);
        $('body').on('touchend.closeSearch', closeMoreSearch);
    });

    function closeMoreSearch() {
        $('body').off('click.closeSearch');
        $('body').off('touchend.closeSearch');
        $('#search').removeClass('open');
        document.activeElement.blur();
    }

    $('input[name=search-type]').click(function(){
        var type = $('input[name=search-type]:checked').attr('id');
        changeSearchType(type);
    });

    changeSearchType($('input[name=search-type]:checked').attr('id'));

    function changeSearchType(type) {
        switch (type) {
            case 'st1':
                $('#search form').attr('action','https://olivet.summon.serialssolutions.com/search');
                $('#search .search-field').attr('name', 's.q');
                $('#search .hidden1').attr('name', 'hidden');
                $('#search .hidden1').attr('value', '1');
                break;
            case 'st2':
                $('#search form').attr('action','http://vufind.carli.illinois.edu/vf-onu/Search/Home');
                $('#search .search-field').attr('name', 'lookfor');
                $('#search .hidden1').attr('name', 'start_over');
                $('#search .hidden1').attr('value', '1');
                break;
            case 'st3':
                $('#search form').attr('action','http://www.google.com/cse');
                $('#search .search-field').attr('name', 'q');
                $('#search .hidden1').attr('name', 'cx');
                $('#search .hidden1').attr('value', '000448314409238573384:xwocr5ucary');
                break;
            case 'st4':
                $('#search form').attr('action','https://i-share.carli.illinois.edu/onu/cgi-bin/Pwebrecon.cgi');
                $('#search .search-field').attr('name', 'Search_Arg');
                $('#search .hidden1').attr('name', 'DB');
                $('#search .hidden1').attr('value', 'local');
                $('#search .hidden2').attr('name', 'CNT');
                $('#search .hidden2').attr('value', '20');
                $('#search .hidden3').attr('name', 'Search_Code');
                $('#search .hidden3').attr('value', 'FT*');
                break;
        }
    }

    //~~~~~~~~~~~ Link list more info ~~~~~
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    $('.more-info').on('click', function (e) {
        accordion(e);
        e.preventDefault();
        e.stopPropagation();
    });

    $('.more-info-link').on('click', function (e) {
        accordionLink(e);
        e.preventDefault();
        e.stopPropagation();
    });

    // ( function(event){
    //     //accordion(event);
    //     event.preventDefault();
    //     event.stopPropagation();
    //     
    // });




    //~~~~~~~~~~~ svg fallback ~~~~~~~~~~~~
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    //This replaces any image with the class of svg with the svg alternative to the image. svg�s are vector based and render much better on devices with a high dpi.

    if(Modernizr.svg) {
        $('img[src*="png"].svg').attr('src', function() {
            return $(this).attr('src').replace('.png', '.svg');
        });
    }

});

//~~~~~~~~~~~ sidebar phone ~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    $("#side-bar-select").change(function(){
        if ($(this).val()!='') {
            window.location.href=$(this).val();
        }
    });

//~~~~~~~~~~~ accordion ~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
function accordion(event) {
    $(event.target).closest('li').siblings().removeClass('open');
    $(event.target).closest('li').toggleClass('open');
}

function accordionLink(event) {
    $(event.target).closest('li').find("li").removeClass('open');
    $(event.target).closest('li').toggleClass('open');
}

//~~~~~~~~~~~ home hero~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
function homeHero(event) {
    $(event.target).parent('li').siblings().removeClass('open');
    $(event.target).parent('li').toggleClass('open');
    $('#home-hero:has(li.open)').addClass('open');
    $('#home-hero:not(:has(li.open))').removeClass('open');
}

//~~~~~~~~~~~ main nav phone tablet ~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
var phoneTabletNavOpen = false;

function phoneTabletnavToggle() {
    if (phoneTabletNavOpen == false) {
        phoneTabletNavOpen = true;
        $('html').addClass('main-nav-open');
        $('#inner-container').on('click.innerContainerNav', phoneTabletnavToggle);
    }
    else {
        phoneTabletNavOpen = false;
        $('html').removeClass('main-nav-open');
        $('#inner-container').off('click.innerContainerNav');
    }
}

//~~~~~~~~~~~ main nav desktop ~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

function desktopNavMouseenter() {
    $(this).addClass("hover");
    $('#inner-container').on('touchstart.closehover', function(){
        $('#main-nav li').trigger('mouseleave');
        $('#inner-container').off('touchstart.closehover');
    });
}

function desktopNavMouseleave() {
    $(this).removeClass("hover");
    $('#inner-container').off('touchstart.closehover');
}


//~~~~~~~~~~~~ Media Controllers ~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

function registerMedia() {
	//This is where enquire.js is used to control what javascrip is active for each view.
	enquire
		.register("(max-width: 719px)", { //Phone
    		match : function() {
                //buildSelect();
    		},      
   			unmatch : function() {
   			}
		})
        .register("(max-width: 979px)", { //Phone-Tablet
            match : function() {
                //~~~~~~~~~~~ accordion ~~~~~~~~~~~~~~~
                $('#main-nav > ul > li> a').on('click.accordion', function(e){
                    e.preventDefault();
                    accordion(e);
                });
            },      
            unmatch : function() {
                //~~~~~~~~~~~ accordion ~~~~~~~~~~~~~~~
                $('#main-nav > ul > li> a').off('click.accordion');
            }
        })
        .register("(min-width: 720px) and (max-width: 979px)", { //Tablet
            match : function() {
            },      
            unmatch : function() {
            }
        })
        .register("(min-width: 720px)", { //Tablet-desktop
            match : function() {
                //~~~~~~~~~~~ homeHero ~~~~~~~~~~~~~~~
                 $('#home-hero > ul > li> a').on('click.homeHero', function(e){
                    e.preventDefault();
                    homeHero(e);
                });
            },      
            unmatch : function() {
                //~~~~~~~~~~~ homeHero ~~~~~~~~~~~~~~~
                $('#home-hero > ul > li> a').off('click.homeHero');
            }
        })
		.register("(min-width: 980px)", { //Desktop
    		match : function() {
                //~~~~~~~~~~~ accordion ~~~~~~~~~~~~~~~
                $('#side-bar > ul > li> a').on('click.accordion', function(e){
                    if ($(e.target).siblings().size('ul') > 0) {
                        e.preventDefault();
                        accordion(e);
                    };
                });
                //~~~~~~~~~~~ main nav desktop ~~~~~~~~
                $('#main-nav').on('mouseenter.desktop', 'li', desktopNavMouseenter);
                $('#main-nav').on('mouseleave.desktop', 'li', desktopNavMouseleave);
            },      
            unmatch : function() {
                //~~~~~~~~~~~ accordion ~~~~~~~~~~~~~~~
                $('#side-bar > ul > li> a').off('click.accordion');
                //~~~~~~~~~~~ main nav desktop ~~~~~~~~
                $('#main-nav').off('mouseleave.desktop mouseenter.desktop')
   			}
		})
}