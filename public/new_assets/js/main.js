/*global $, console*/
$(function () {
    "use strict";
    $('.scrolltop').click(function(){
        $('html, body').animate({
            scrollTop: 0
        },600);
    });
    // For POS    
    if($(".traf_id").prop('required')){
        $(".hidden_shown").removeClass("hidden-pos-form");
    }
    
    // Start Loading
    // var loading = document.getElementById("loader");
    // document.onreadystatechange = function() {
    //     if (document.readyState !== "complete") {
    //         loading.style.visibility = "visible";
    //     } else {
    //         loading.style.visibility = "hidden";
    //     }
    // };
    // // End Loading

    // Start Sidbar 
    $('.sidebar-btn').unbind().click(function () {
        if ($('.side-bar').hasClass('open')) {
            $('.side-bar').addClass('closeSidebar');
            $('.side-bar').removeClass('open');
        } else {
            $('.side-bar').addClass('open');
            $('.side-bar').removeClass('closeSidebar');
        }
    });
    $('.side-bar > ul > li.dropdown > a').click(function (e) {
        e.preventDefault();
        $(this).parent('li').siblings('li').children('a').removeClass('menu-opend');
        $(this).parent('li').siblings('li').children('ul').slideUp();
        if ($(this).hasClass('menu-opend')) {
            $(this).removeClass('menu-opend');
            $(this).siblings('ul').slideUp();
        } else {
            $(this).addClass('menu-opend');
            $(this).siblings('ul').slideDown();
        }
    });
    $(window).scroll(function () {
        $('.side-bar').css({
            "height": $(".main-sec").height(),
        });
    });
    // End Sidebar
    
    // Show & Hide Box
    $('.default-box-head-show-hide').click(function(){
        if($(this).siblings('.hidden-default-box-body').is(":visible")){
            $(this).siblings('.hidden-default-box-body').slideUp();
        }else{
            $(this).siblings('.hidden-default-box-body').slideDown();
        }
    });
    
    // Add Product Btns Fixed
    // Fixed Deal Sec
    var staticOffset = $('.add-product-btns').offset().top;
    $(window).scroll(function () {
        var fixed_sec = $('.add-product-btns');
        console.log(staticOffset);
        console.log($(window).scrollTop());
        if ($(window).scrollTop() >= staticOffset) {
            fixed_sec.addClass('sticky-top');
        } else {
            fixed_sec.removeClass('sticky-top');
        }
    })
})