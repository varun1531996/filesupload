$(window).on('load', function () {





    // Loader



    $("#edutech-loader").fadeOut(500);


    // End






    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);

    // if (isChrome) alert("You are using Chrome!");
    if (isSafari) {



        $("#foooter").addClass('saf-wraper');





    }


});



$(document).ready(function () {
    //    $("#search_click").click(function () {
    //        $(".search_block").toggleClass("hidden");
    //    });
    $(".search_btn").click(function () {
        $(".search_block").toggleClass("hidden");
    });
    $("#close_i").click(function () {
        $(".search_block").addClass("hidden");
    });
    $(".search_click_mobi").click(function () {
        $(".search_block").toggleClass("hidden");
    });
    $(".close_search a").click(function () {
        $(".search_block").addClass("hidden");
    });

    $(".scroll-top").click(function () {

        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });

    $("#myCarousel1-mob").swiperight(function () {
        $(this).carousel('prev');
    });
    $("#myCarousel1-mob").swipeleft(function () {
        $(this).carousel('next');
    });

    /* navbar */
    //    $('.sub_menu').hide();
    //    $(".aa").hover(function () {
    //        var getAttr = $(this).attr('data-id');
    //
    //        $('.sub_menu').hide();
    //        $('#' + getAttr).show();
    //
    //    });

    $('.m_sub_menu').hide();
    $(".aa").click(function () {
        var getAttr = $(this).attr('data-id');
        $('.m_sub_menu').hide();
        $('#' + getAttr).show();
        $(this).addClass('active');
    });

    $(".mega_menu_1").hover(function () {
        $(".mega_menu_drop_down_1").toggleClass("mega_menu_block");
    });

    $(".mega_menu_2").hover(function () {
        $(".mega_menu_drop_down_2").toggleClass("mega_menu_block");
    });

    $(".mega_menu_3").hover(function () {
        $(".mega_menu_drop_down_3").toggleClass("mega_menu_block");
    });

    $(".mega_menu_4").hover(function () {
        $(".mega_menu_drop_down_4").toggleClass("mega_menu_block");
    });

    $(".mega_menu_4").hover(function () {
        $(this).toggleClass("open");
        $(".sidenav").toggleClass("sidenav_show");
    });

    $(".icon").click(function () {
        $(this).toggleClass("open");
        $(".sidenav").toggleClass("sidenav_show");
    });


    $(".mega_menu_drop_down_ul .sub_menu a").hover(function () {
        var getID = $(this).parents('.sub_menu').attr('id');
        $('.mega_menu_drop_down_ul .ul_section p').removeClass('hover');
        $('.mega_menu_drop_down_ul .ul_section p[data-id=' + getID + ']').addClass('hover');
    });

    $(".mega_menu_drop_down .ul_section p").hover(function () {
        $('.mega_menu_drop_down_ul .ul_section p').removeClass('hover');
        $(this).addClass('hover');

    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('#clickable').length) {
            $('#clickable').removeClass('open_cl');
            $('.con').removeClass('active');

        }
    });
    $('#clickable').click(function () {
        $(this).toggleClass('open_cl');
        $(this).find('.con').toggleClass('active');
    })
    //    $("#accordion .panel .panel-heading a").each(function () {
    //        $(this).on('click', function () {
    //            var att = $(this).attr('aria-expanded');
    //            console.log(att, "click glyphicon");
    //
    //            if (att == "false") {
    //                $(".panel-title .glyphicon").removeClass('glyphicon-plus');
    //                $(".panel-title .glyphicon").addClass('glyphicon-minus');
    //
    //            } else {
    //                $(".panel-title .glyphicon").addClass('glyphicon-minus');
    //                $(".panel-title .glyphicon").removeClass('glyphicon-plus');
    //            }
    //
    //        })
    //    })


});

// form
$("#contact-form").validate({
    rules: {
        Email: {
            required: true,
            email: true
        },
        Mobile: {
            required: true,
            number: true,
            minlength: 10,
		  maxlength: 10
        }

    },
    errorElement: 'span'
});

$("#mform-a").validate({
    //    rules: {
    //        email: {
    //            required: true,
    //            email: true
    //        },
    //        phone: {
    //            required: true,
    //            number: true
    //        }
    //
    //    },
    errorElement: 'span'
});

// form

// Contact

// Contact
// Contact


$('.owl-contact').owlCarousel({
    loop: true,
    // margin:10,
    autoWidth: false,
    autoplay: true,
    nav: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    // animateOut: 'slideOutLeft',
    // animateIn: 'slideInRight',
    dots: false,
    slideBy: 1,
    responsive: {
        0: {
            items: 1,
            autoWidth: true
        },
        600: {
            items: 1,
            autoWidth: true
        },
        1200: {
            items: 1,
            nav: true,
            autoWidth: true
        },
        1300: {
            items: 1,
            nav: true
        }
    }
});

$('.img_sld').owlCarousel({
    loop: true,
    // margin:10,
    autoWidth: false,
    autoplay: true,
    nav: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    // animateOut: 'slideOutLeft',
    // animateIn: 'slideInRight',
    dots: false,
    slideBy: 1,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1,
            autoWidth: true
        },
        1200: {
            items: 1,
            nav: true,
            autoWidth: true
        },
        1300: {
            items: 1,
            nav: true
        }
    }
})



$('.owl-contact').owlCarousel({
    animation: "slide",
});

var fixOwl = function () {
    var $stage = $('.owl-contact'),
        stageW = $stage.width(),
        $el = $('.owl-item'),
        elW = 0;
    $el.each(function () {
        elW += $(this).width() + +($(this).css("margin-right").slice(0, -2))
    });
    if (elW > stageW) {
        $stage.width(elW);
    };
}



// Contact
var mndFileds = new Array('Last Name');
var fldLangVal = new Array('Name');
var name = '';
var email = '';


window.onload = function () {
    var tlid = new Date().getTime();
    $("#ting_lead_id").val(tlid);
    $('#returnURL').val($('#returnURL').val() + '&TingLeadID=' + tlid);
    /*$("form").on("submit", function (event) {
        event.preventDefault();
        console.log(JSON.stringify($('form').serializeArray()));
    });*/

}

/* Do not remove this code. */
function reloadImg() {
    if (document.getElementById('imgid').src.indexOf('&d') !== -1) {
        document.getElementById('imgid').src = document.getElementById('imgid').src.substring(0, document.getElementById('imgid').src.indexOf('&d')) + '&d' + new Date().getTime();
    } else {
        document.getElementById('imgid').src = document.getElementById('imgid').src + '&d' + new Date().getTime();
    }
}

//function checkMandatory() {
//    for (i = 0; i < mndFileds.length; i++) {
//        var fieldObj = document.forms['WebToLeads1709276000002605005'][mndFileds[i]];
//        if (fieldObj) {
//            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
//                if (fieldObj.type == 'file') {
//                    alert('Please select a file to upload.');
//                    fieldObj.focus();
//                    return false;
//                }
//                alert(fldLangVal[i] + ' cannot be empty.');
//                fieldObj.focus();
//                return false;
//            } else if (fieldObj.nodeName == 'SELECT') {
//                if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
//                    alert(fldLangVal[i] + ' cannot be none.');
//                    fieldObj.focus();
//                    return false;
//                }
//            } else if (fieldObj.type == 'checkbox') {
//                if (fieldObj.checked == false) {
//                    alert('Please accept  ' + fldLangVal[i]);
//                    fieldObj.focus();
//                    return false;
//                }
//            }
//            try {
//                if (fieldObj.name == 'Last Name') {
//                    name = fieldObj.value;
//                }
//            } catch (e) {}
//        }
//    }
//}
// Careers

$(document).ready(function () {
    $("ul.osx-dock li").each(function (type) {
        $(this).hover(function () {
                $(this).prev("li").addClass("nearby");
                $(this).next("li").addClass("nearby");
            },
            function () {
                $(this).prev("li").removeClass("nearby");
                $(this).next("li").removeClass("nearby");
            });
    });


});

//  jQuery(window).on("load resize",function(e){
//     // jQuery('body, html, .wrapper').css('height', jQuery(window).height());
//     jQuery('body').css('background-color', '#000');

//     jQuery('footer').css('position', 'fixed');
//     jQuery('footer').css('bottom', 0);
//     jQuery('.wrapper').css('margin-bottom', jQuery('footer').height());
// });


$('.owl-career').owlCarousel({
    loop: false,
    autoplay: true,
    margin: 10,
    nav: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    dots: false,
    slideBy: 3,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: true
        },
        600: {
            items: 1,
            nav: false,
            dots: true
        },
        1000: {
            items: 2,
            nav: false,
            dots: true
        },
        1200: {
            items: 3,
            nav: true,
        },
    }
})

// jQuery(window).on("load resize",function(e){
//       // jQuery('body, html, .wrapper').css('height', jQuery(window).height());
//       jQuery('body').css('background-color', '#000');

//       jQuery('footer').css('position', 'fixed');
//       jQuery('footer').css('bottom', 0);
//       jQuery('.wrapper').css('margin-bottom', jQuery('footer').height());
//   });

window.pressed = function () {
    var a = document.getElementById('upload');
    if (a.value == "") {
        fileLabel.innerHTML = "Upload";
    } else {
        var theSplit = a.value.split('\\');
        fileLabel.innerHTML = theSplit[theSplit.length - 1];
    }
};

// Careers

// Index

$('.owl-banner').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    dots: false,
    slideBy: 1,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: true
        },
        600: {
            items: 1,
            nav: false,
            dots: true
        },
        1000: {
            items: 1,
            nav: true
        },
        1300: {
            items: 1,
            nav: true
        }
    }
})

$('.owl-one').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: false,
    nav: false,
    responsiveClass: true,
    dots: true,
    //    slideBy: 3,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3,
            dots: true,
            nav: false
        },
        1000: {
            items: 3
        },
        1300: {
            items: 5
        }
    }
})


$('.owl-two').owlCarousel({
    loop: false,
    margin: 10,
    autoplay: true,
    nav: true,
    center: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    dots: true,
    slideBy: 5,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 3,
            dots: true,
            nav: false
        },
        1000: {
            items: 3,
            dots: false,
            nav: true
        },
        1300: {
            items: 5,
            dots: false,
            nav: true
        }
    }
})

$('.owl-three').owlCarousel({
    loop: false,
    margin: 10,
    autoplay: true,
    nav: true,
    navText: ["<img class='nextprevprev' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAxAQMAAABJUtNfAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgwEAAAGIAAHvCeInAAAAAElFTkSuQmCC'>", "<img class='nextprevnext' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAxAQMAAABJUtNfAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgwEAAAGIAAHvCeInAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    dots: true,
    slideBy: 3,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 1,
            nav: true
        },
        1000: {
            items: 3,
            dots: false,
            nav: true
        }
    }
})

$('.owl-four').owlCarousel({
    loop: false,
    margin: 10,
    autoplay: true,
    nav: false,
    responsiveClass: true,
    dots: true,
    slideBy: 2,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 2,
            nav: false,
            loop: false
        }
    }
})

// Index

// K-12

$('.owl-k-12').owlCarousel({
    loop: true,
    // margin:4,
    autoplay: true,
    nav: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    dots: false,
    slideBy: 3,
    responsive: {
        0: {
            items: 1,
            nav: true,
            slideBy: 3,
            dots: false
        },
        600: {
            items: 2,
            nav: true,
            slideBy: 2,
            dots: false
        },
        1000: {
            items: 3,
            nav: true,
            loop: false
        }
    }
})

// K-12

// about

$('.owl-solution').owlCarousel({
    loop: false,
    margin: 10,
    autoplay: true,
    nav: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    dots: false,
    //    maxwidth: 230,
    slideBy: 2,
    center: true,
    responsive: {
        0: {
            items: 2,
            dots: true,
            nav: false
        },
        600: {
            items: 3,
            dots: true,
            nav: false
        },
        1000: {
            items: 2,
            dots: true,
            nav: false
        },
        1300: {
            items: 2,
            dots: false,
            nav: true
        }
    }
});

$('.banner_slider').owlCarousel({
    loop: false,
    margin: 10,
    autoplay: true,
    nav: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    dots: false,
    //    maxwidth: 230,
    slideBy: 2,
    center: true,
    responsive: {
        0: {
            items: 1,
            dots: true,
            nav: false
        },
        1000: {
            items: 1,
            dots: false,
            nav: true
        }
    }
})


$('.owl-five').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    dots: false,
    slideBy: 1,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: true
        },
        1000: {
            items: 4,
            nav: true,
            loop: false
        }
    }
})

$('.owl-six').owlCarousel({
    loop: true,
    // margin:10,
    autoplay: false,
    nav: true,
    navText: ["<img class='nextprevban-left' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>", "<img class='nextprevban-right' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC'>"],
    responsiveClass: true,
    dots: true,
    slideBy: 5,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 3,
            dots: true,
            nav: false
        },
        1000: {
            items: 3,
            dots: true,
            nav: false
        },
        1300: {
            items: 5,
            dots: false,
            nav: true
        }
    }
})

// about

// Footer

//jQuery(window).on("load resize", function (e) {
//    // jQuery('body, html, .wrapper').css('height', jQuery(window).height());
//    jQuery('body').css('background-color', '#000');
//
//    jQuery('footer').css('position', 'fixed');
//    jQuery('footer').css('bottom', 0);
//    jQuery('.wrapper').css('margin-bottom', jQuery('footer').height());
//});

// Footer


$(window).scroll(function () {

    if ($(window).scrollTop() <= 40) {
        $(".new_haed").removeClass("head_scroll");
        $(".logo_section img.toplogo2").addClass("hidden")
        $(".logo_section img.toplogo1").removeClass("hidden")

    } else {
        $(".new_haed").addClass("head_scroll");
        $(".logo_section img.toplogo2").removeClass("hidden")
        $(".logo_section img.toplogo1").addClass("hidden")
    }
    var navb = $('#cst-nav');
    //        if ($(window).width() > 480) {
    //            if ($(".navbar").offset().top > 50) {
    //
    //                $(".navbar-fixed-top").addClass("top-nav-collapse");
    //                $("#toplogo").hide();
    //                $("#toplogo1").show();
    //
    //
    //            } else {
    //
    //                $(".navbar-fixed-top").removeClass("top-nav-collapse");
    //                $("#toplogo").show();
    //                $("#toplogo1").hide();
    //
    //            }
    //
    //        }
    if ($(window).scrollTop() <= 40) {
        console.log("yes its works");
        navb.removeClass('head-cst');
        $(".section_1 img.toplogo2").addClass("hidden")
        $(".section_1 img.toplogo1").removeClass("hidden")

    } else {
        navb.addClass('head-cst');
        $(".section_1 img.toplogo2").removeClass("hidden")
        $(".section_1 img.toplogo1").addClass("hidden")
    }

});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});



// teaching-solution

$(document).ready(function () {

    $('div.expandDiv').expander({
        slicePoint: 550, //It is the number of characters at which the contents will be sliced into two parts.
        widow: 2,
        expandSpeed: 0, // It is the time in second to show and hide the content.
        userCollapseText: '<span class="plus-minus">-</span> Read Less' // Specify your desired word default is Less.
    });

    $('div.expandDiv').expander();
});

$('.owl-tab').owlCarousel({
    loop: false,
    margin: 10,
    autoWidth: false,
    items: 2,
    autoplay: false,
    nav: true,
    navText: ["<img src='../../../tools/img/k-12/tabs-Arrow-left.png'>", "<img src='../../../tools/img/k-12/tabs-Arrow-right.png'>"],
    responsiveClass: true,
    dots: false,
    slideBy: 2,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: true
        },
        1000: {
            items: 2,
            nav: true,
        },
        1300: {
            items: 2,
            nav: true,
        },
        1400: {
            items: 2,
            nav: true,
        },
        1440: {
            items: 2,
            nav: true,
        }
    }
})





// teaching-solution
