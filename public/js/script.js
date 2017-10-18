$(document).ready(function () {
    $slider = $('#slider');
    $slider.addClass('owl-carousel owl-theme');
    $slider.owlCarousel({
        items: 1,
        dots: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        loop: true,
        navText: ["<i class=\"fa fa-angle-left fa-lg\"></i>", "<i class=\"fa fa-angle-right fa-lg\"></i>"]
    });

    $commentSlider = $('#comment-slider');
    $commentSlider.addClass('owl-carousel owl-theme');
    $commentSlider.owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class=\"fa fa-angle-left fa-lg\"></i>", "<i class=\"fa fa-angle-right fa-lg\"></i>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            }
        }
    });
    $studentImageSlider = $('#student-image-slider');
    $studentImageSlider.addClass('owl-carousel owl-theme');
    $studentImageSlider.owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class=\"fa fa-angle-left fa-lg\"></i>", "<i class=\"fa fa-angle-right fa-lg\"></i>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});
$(document).ready(function () {
    $slider = $('#slider');
    $slider.addClass('owl-carousel owl-theme');
    $slider.owlCarousel({
        items: 1,
        dots: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        loop: true,
        navText: ["<i class=\"fa fa-angle-left fa-lg\"></i>", "<i class=\"fa fa-angle-right fa-lg\"></i>"]
    });

    $sliderCource = $('#slider-cource');
    $sliderCource.addClass('owl-carousel owl-theme');
    $sliderCource.owlCarousel({
        items: 1,
        loop: false,
        center: true,
        margin: 10,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash'
    });
});
// Script for top Navigation Menu
// pct add code
$(window).resize(function(){
    if(window.innerWidth <= 768){
        jQuery('#header-1').removeClass('hidden');
        jQuery('#header-1 li').removeClass('open')
        jQuery('#header-2').addClass('hidden');
        jQuery('#header-2').removeClass('navbar-fixed-top').addClass('topnavbar');
        jQuery('body').removeClass('bodytopmargin').addClass('bodynomargin');
    }
});
// end pct add code
jQuery(window).bind('scroll', function () {
    if (window.innerWidth > 768) {
        if (jQuery(window).scrollTop() > 50) {
            jQuery('#header-2').removeClass('hidden');
            jQuery('#header-2 li').removeClass('open');
            jQuery('#header-1').addClass('hidden');
            jQuery('#header-2').addClass('navbar-fixed-top').removeClass('topnavbar');
            jQuery('body').addClass('bodytopmargin').removeClass('bodynomargin');
        } else {
            jQuery('#header-1').removeClass('hidden');
            jQuery('#header-1 li').removeClass('open')
            jQuery('#header-2').addClass('hidden');
            jQuery('#header-2').removeClass('navbar-fixed-top').addClass('topnavbar');
            jQuery('body').removeClass('bodytopmargin').addClass('bodynomargin');
        }
    }
    if (jQuery(window).scrollTop() > 600 && jQuery(window).scrollTop() < 800) {
        jQuery('.register img').animateCss('tada');
    }
});
$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function () {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
    }
});

$(function(){
    $("#ehouse_course_tab .dropdown-menu li a").click(function(){
        $("#ehouse_course_id").val($(this).text());
    });
});

function sendInfo(base_url){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var student_name        = $('#student_name').val().trim();
    var student_phone       = $('#student_phone').val().trim();
    var student_email       = $('#student_email').val().trim();
    var course              = $('#ehouse_course_id').val().trim();
    var student_message     = $('#student_message').val().trim();

    if(student_name == "" || student_phone == "" || student_email == ""){
        BootstrapDialog.alert('Vui lòng nhập đầy đủ thông tin !');
    }else if(course == ""){
        BootstrapDialog.alert('Vui lòng chọn khóa học !');
    }else if(!re.test(student_email)){
        BootstrapDialog.alert('Email không đúng định dạng !');
    }else{
        var dataString = {name: student_name , phone: student_phone, email: student_email, course: course, message: student_message};
        $.ajax({
            url: base_url+'Send_mail',
            type: 'POST',
            data: dataString,
            timeout: 1000,
            dataType: "json",
            async: false,
            success: function(msg){
                if(msg.sent){
                    BootstrapDialog.alert('Gửi thông tin thành công');
                    $('#student_name').val('');
                    $('#student_phone').val('');
                    $('#student_email').val('');
                    $('#ehouse_course_id').val('');
                    $('#student_message').val('');
                }
                else{
                    BootstrapDialog.alert('Gửi thông tin thất bại !');
                }
            },
            error: function (e){
                BootstrapDialog.alert('Có lỗi xảy ra '+e);               
            }
        });
    }
}

function receiveEmail(base_url){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var customer_email = $('#customer_email').val().trim();

    if(customer_email == ""){
        BootstrapDialog.alert('Vui lòng nhập email !');
    }else if(!re.test(customer_email)){
        BootstrapDialog.alert('Email không đúng định dạng !');
    }else{
        var dataString = {email: customer_email};
        $.ajax({
            url: base_url+'Send_mail/customerInfo',
            type: 'POST',
            data: dataString,
            timeout: 1000,
            dataType: "json",
            async: false,
            success: function(msg){
                if(msg.sent){
                    BootstrapDialog.alert('Đăng ký thành công');
                    $('#customer_email').val('');
                }
                else{
                    BootstrapDialog.alert('Đăng ký thất bại !');
                }
            },
            error: function (e){
                BootstrapDialog.alert('Có lỗi xảy ra '+e);               
            }
        });
    }
}



