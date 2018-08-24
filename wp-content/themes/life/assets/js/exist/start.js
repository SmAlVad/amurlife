jQuery.extend(verge);
var desktop = true,
    tablet = false,
    tabletPortrait = false,
    mobile = false;

$(window).resize(function () {
    if ($.viewportW() > 1266) {
        desktop = true;
        tablet = false;
        tabletPortrait = false;
        mobile = false;
    }
    if ($.viewportW() >= 768 && $.viewportW() <= 1266) {
        desktop = false;
        tablet = true;
        tabletPortrait = false;
        mobile = false;
    }
    if ($.viewportW() <= 767) {
        desktop = false;
        tablet = false;
        tabletPortrait = false;
        mobile = true;
    }

}).resize();
function setEqualHeight(columns) {
    var tallestcolumn = 0;
    columns.each(
        function () {
            currentHeight = $(this).height();
            if (currentHeight > tallestcolumn) {
                tallestcolumn = currentHeight;
            }
        }
    );
    columns.height(tallestcolumn);
}

$(function () {




    $('#par').on('click', function (e) {
        e.preventDefault();
        $('.menu-f-popup_par').addClass('active');
    });
    $('#cont').on('click', function (e) {
        e.preventDefault();
        $('.menu-f-popup_cont').addClass('active');
    });
    $('.menu-f-popup .prev').on('click', function (e) {
        e.preventDefault();
        $('.menu-f-popup').removeClass('active');
    });

    $('.mob-button').on('click', function () {
        $('body').toggleClass('open-mob-menu');
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('.up-footer').fadeIn();
        }
    });

    $('.up-footer').on('click', function () {
        $('body').toggleClass('open-footer');
        $('footer .wrap-center').slideToggle();
    });

    if (!mobile) {
        $('.new-links .col').css("height", "auto");
        setEqualHeight($('.new-links .col'));
        $(window).resize(function () {
            $('.new-links .col').css("height", "auto");
            setEqualHeight($('.new-links .col'));
        });
    }


    $(".up-footer").click(function () {
        $("html, body").animate({scrollTop: $(document).height()}, 400);

    });

    var proSlider = $('.img-slide .row');
    if (proSlider.children().length > 1) {
        proSlider.on('initialized.owl.carousel', function () {
            proSlider.css("opacity", 1);
        });

        proSlider.owlCarousel({
            margin: 7,
            loop: true,
            nav: true,
            items: 4,
            responsiveClass: true,
            onInitialized: function () {
                $('.info-slide').removeClass('title-slide_v');
            },
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                768: {
                    items: 4,
                    nav: true
                }
            }
        });

    } else {
        proSlider.css("opacity", 1);
    }

    if (mobile) {
        $('.footer-center .wrap-col_1 .line-title').on('click', function () {
            $(this).closest('.col').find('.drop').slideToggle();
            $(this).closest('.col').toggleClass('active');
        });
        $('.footer-center .line-title_i').on('click', function () {
            $(this).closest('.wrap-col').find('.drop').slideToggle();
            $(this).toggleClass('active');
        });
    }
    $('.burger').on('click', function () {
        $('body, html').toggleClass('open-menu');
        $('.menu-f-popup').removeClass('active');
    });

//    $('.js-search-button, .js-search-close').on('click', function () {
//        $('body').toggleClass('open-search');
//    });

    $('.img-slide .col').on('click', function () {

        var $this = $(this),
            $attr = $this.attr('data-img');
        $this.closest('.img-slide').find('.col').removeClass('open');
        $this.addClass('open');
        $this.closest('.wrap-slide').find('.big-img img').attr('src', $attr);
    });

    if (desktop) {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop(),
                // $comment = $('.comment').offset().top,
                $header = $('.header-top'),
                $link = $('.link-page').height(),
                $scrollBottom = $(window).scrollTop() + $(window).height();

            if (scroll > 70) {
                $header.addClass('hover');
            } else if (scroll < 70) {
                $header.removeClass('hover');
            }

            //if ($('.link-page').offset().top) {
            //    $('.link-page').css({
            //        position: 'absolute',
            //        top: ($link) + 'px'
            //    });
            //}
            //if ($scrollBottom) {
            //    $('.link-page').css({
            //        position: 'fixed',
            //        top: '433px'
            //    })
            //}
        });

    }

    if ($('#swipe-mobile').length) {
        if (mobile) {

            var pageSwipe = document.getElementById("swipe-mobile");
            var slider = document.querySelector('.img-slide');
            Hammer(pageSwipe).on("swipeleft swiperight", function (e) {
                if (!$(e.target).closest(".img-slide").length) {


                    setTimeout(function () {
                        Hammer(pageSwipe).on("swipeleft", function () {
                            var href = $('.link-page-left').attr('href');
                            window.location.href = href;
                        });

                        Hammer(pageSwipe).on("swiperight", function () {
                            var href = $('.link-page-right').attr('href');
                            window.location.href = href;
                        });
                    }, 500);
                }
            });

        }
    }


});



$(function () {

    if (!mobile) {
        var $nav = $('.greedy');
        var $btn = $('.greedy .button');
        var $vlinks = $('.greedy .link-menu');
        var $hlinks = $('.menu-f .step');

        var numOfItems = 0;
        var totalSpace = 0;
        var breakWidths = [];

        // Get initial state
        $vlinks.children().outerWidth(function (i, w) {
            totalSpace += w;
            numOfItems += 1;
            breakWidths.push(totalSpace);
        });

        var availableSpace, numOfVisibleItems, requiredSpace;

        function check() {

            // Get instant state
            availableSpace = $vlinks.width() - 1;
            numOfVisibleItems = $vlinks.children().length;
            requiredSpace = breakWidths[numOfVisibleItems - 1];

            // There is not enought space
            if (requiredSpace > availableSpace) {
                $vlinks.children().last().prependTo($hlinks);
                numOfVisibleItems -= 1;
                check();
                // There is more than enough space
            } else if (availableSpace > breakWidths[numOfVisibleItems]) {
                $hlinks.children().first().appendTo($vlinks);
                numOfVisibleItems += 1;
            }
            // Update the button accordingly
            //$btn.attr("count", numOfItems - numOfVisibleItems);
            //if (numOfVisibleItems === numOfItems) {
            //    $btn.addClass('hidden');
            //} else $btn.removeClass('hidden');
        }

        // Window listeners
        $(window).resize(function () {
            check();
        });

        $btn.on('click', function () {
            $hlinks.toggleClass('hidden');
            $(this).toggleClass('active');
        });

        check();
    }


    $('.dver_e').mouseover(function () {
        $(this).find('.drop').stop().slideDown('slow');
    });
    $('.dver_e').mouseout(function () {
        $(this).find('.drop').stop().slideUp('slow');
    });

    $('.inf-check').click(function () {
        if ($(this).find('.inp').length) {
            $(this).find('.inp').fadeIn();
        } else {
            $('.inf-check').find('.inp').fadeOut();
        }
    });

    $('.info-line-tab li').on('click', function () {
        var $this = $(this),
            $index = $this.index();
        $('.info-line-tab li').removeClass('active');
        $this.addClass('active');
        $('.info-line .row-wrap').removeClass('active').eq($index).addClass('active');
    });
    $('#container-infinite').infinitescroll({

        navSelector: "div.pagination",
        // selector for the paged navigation (it will be hidden)
        nextSelector: "div.pagination a:first",
        // selector for the NEXT link (to page 2)
        itemSelector: ".news-life__holder",
        debug: false,
        // dataType: 'html',
        maxPage: 16,
        path: function (index) {
//            alert(index-1);
            return '/infinite?offset='+(index-1);
//            return "ajax/ajax-new" + index + ".html";

        }
    },function(arrayOfNewElems){
        if(desktop) {
            $(".tablet-append-left .aside-l").remove();
            $(".tablet-append-right .aside-r").remove();
        }
        if (tablet) {
            $(".post-new:not(.post-new_first) .aside-l").clone().appendTo(".tablet-append-left");
            $(".post-new:not(.post-new_first) .aside-r").clone().appendTo(".tablet-append-right");
        }

    });

    $(window).resize(function () {
        if(desktop) {
            $(".tablet-append-left .aside-l").remove();
            $(".tablet-append-right .aside-r").remove();
        }
        //if (tablet) {
        //    $(".post-new:not(.post-new_first) .aside-l").clone().appendTo(".tablet-append-left");
        //    $(".post-new:not(.post-new_first) .aside-r").clone().appendTo(".tablet-append-right");
        //}
    });
    $(window).load(function () {
        if(desktop) {
            $(".tablet-append-left .aside-l").remove();
            $(".tablet-append-right .aside-r").remove();
        }
        if (tablet) {
            $(".post-new:not(.post-new_first) .aside-l").clone().appendTo(".tablet-append-left");
            $(".post-new:not(.post-new_first) .aside-r").clone().appendTo(".tablet-append-right");
        }
    });
});
