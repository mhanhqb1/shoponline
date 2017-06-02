$(document).ready(function (e) {
    if ($('.number').length > 0) {
        $('.number').each(function () {
            if ($(this).attr('max').length > 0) {
                if (parseFloat($(this).attr('title')) > 0) {
                    $(this).spinner({min: 1, max: parseInt($(this).attr('max')), step: 1});
                } else {
                    $(this).spinner({min: 1, step: 1});
                }
            } else {
                $(this).spinner({min: 1, step: 1});
            }
        });
    }

    $('.ui-spinner-button').click(function () {
        $(this).siblings('input').change();
    });
});
$('#box_thanhtien').html();
$(document).ready(function () {

    $('#zoomContainer').remove().appendTo("body");
    $('.overlay').each(function () {
        if (!$(this).is(':visible')) {
            $('html').css('overflow', 'hidden');
        }
    });

    $('#button').click(function (e) { // Button which will activate our modal
        $('.flexslider').hide();
        $('#box_send_mail').reveal({// The item which will be opened with reveal
            animation: 'fade', // fade, fadeAndPop, none
            animationspeed: 300, // how fast animtions are
            closeonbackgroundclick: true, // if you click background will modal close?
            dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
        });
        return false;
    });
    $('.close-lb').click(function () {
        $('.flexslider').show();
    });

    //When we move mouse on div
});
function open_window_share(url) {
    window.open(url, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=200, left=300, width=600, height=200");
}

function deleteProduct(keyword) {
    location.href = "index.php?ac=delete_cart&keyword=" + keyword;
}

$(".view-more").toggle(function () {
    $(this).text("[-]");
    $(this).siblings(".complete").show();
    $(this).siblings(".brief").hide();
}, function () {
    $(this).text("[+]");
    $(this).siblings(".complete").hide();
    $(this).siblings(".brief").show();
});
$('#comment').click(function (e) {
    $('.flexslider').hide();
    $('#box_comment').reveal({
        animation: 'fade',
        animationspeed: 300,
        closeonbackgroundclick: true,
        dismissmodalclass: 'close'
    });
    return false;
});

//Scroll the menu and header horizontally when window is scrolled
$(document).mouseup(function (e)
{
    //When we clicked on div
    var container = $("#zoomContainer");
    var image = $('#imageContainer').find('img');
    if ((container.is(':visible') && container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
            || (container.is(':visible') && image.is(e.target)
                    && image.has(e.target).length === 0))
    {
        container.fadeOut(500);
        $('html').css('overflow', 'auto');
    }
});
$('#scroll_top').hide();
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('#scroll_top').fadeIn();
        } else {
            $('#scroll_top').fadeOut();
        }
    });
    $('#scroll_top').click(function () {
        $('body,html').animate({scrollTop: 0}, 800);
        return false;
    });
    $('#zoomContainer').mousemove(function (e) {
        var h = $(this).find('img').height();
        var vptHeight = $(window).height();
        var y = -((h - vptHeight) / vptHeight) * e.pageY;
        $('#zoomContainer img').css('top', y + "px");
    });
});
//Zoom on image
//$(function() {
//Clicked on small image
var size = 5;
var cur_id = 0;
var prev_id = 0;
var next_id = 0;
//Zoom on image
$(function () {
    //Clicked on small image
    $('#img_product img').click(function () {
        viewImage($(this).attr('id'));
    });
});
function viewImage(id) {
    cur_id = parseInt(id);
    prev_id = cur_id - 1;
    next_id = cur_id + 1;
    if (prev_id >= 1) {
        $('.flex-prev').show();
    } else {
        $('.flex-prev').hide();
    }

    if (next_id <= size) {
        $('.flex-next').show();
    } else {
        $('.flex-next').hide();
    }

    $('#imageContainer').find('img').attr('src', $('#' + id).attr('src')).load(function () {
        $('#imageContainer').width($('#imageContainer').find('img').width());
        $('#imageContainer').height($(window).height());
    });
    $('body,html').animate({scrollTop: 0}, 100);
    $('html').css('overflow', 'hidden');
    $('#zoomContainer').fadeIn(500);
    return false;
}
$(function () {

    $('#viewNext').click(function () {
        viewImage(next_id);
    });
    $('#viewPrev').click(function () {
        viewImage(prev_id);
    });
});
$(window).scroll(function () {
    if ($('#header').css('position') == 'fixed') {
        $('#header').css('left', '-' + $(window).scrollLeft() + 'px');
    }
    if ($('#navMenu').css('position') == 'fixed') {
        $('#navMenu').css('left', '-' + $(window).scrollLeft() + 'px');
    }

    if ($('#bottom_bar').length && $('#bottom_bar').css('position') == 'fixed') {
        $('#scroll_top').css('left', '-' + $(window).scrollLeft() + 'px');
    }
});
$(document).ready(function (e) {
    $('#changeLanguage').click(function () {
        if (!$('.list-language').is(':visible')) {
            $('.list-language').show();
        }
    });
    $('#box_filter').hide();
    $('#filter').click(function () {
        $('#box_filter').show();
    });
    $('.arrow.down').mouseenter(function () {
        $('#box_nav').css("overflow", "auto");
        $('#box_nav').animate({scrollTop: $('#box_nav').height()}, 'slow');
    });
    $('.arrow.up').mouseenter(function () {
        $('#box_nav').css("overflow", "auto");
        $('#box_nav').animate({scrollTop: 0}, 'slow');
    });
    $('.arrow.down').mouseleave(function () {
        $('#box_nav').css("overflow", "auto");
    });
    $('.arrow.up').mouseleave(function () {
        $('#box_nav').css("overflow", "auto");
    });
    $('#btnFilterReset').click(function () {
        $(this).closest('form')[0].reset();
        $('.lbl-color').removeClass('selected');
        $('.lbl-size').removeClass('selected');
        $('.lbl-price').removeClass('selected');
    });
});
$(document).mouseup(function (e)
{
    var container = $("#box_filter");
    if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
    }

    container = $("#changeLanguage");
    if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $('.list-language').hide();
    }

});
function changeLang(lang) {
    $('#lang').val(lang);
    $('#changeLang')[0].submit();
}

function select(name, id, obj) {
    $('.' + name).removeClass('selected');
    if (!$('#' + id).is(':checked')) {
        $(obj).addClass('selected');
    }
}

function changeViewOption(count) {
    $('#viewOption').val(count);
    $('#changeViewOption').submit();
}
