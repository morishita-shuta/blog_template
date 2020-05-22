'use strict';

$(function(){
  $('.hamburger').on('click', function() {
    $('.sp-menu').toggleClass("sp-menu--open");
    $('.hamburger').toggleClass("hamburger--open")
    $('.full-overlay').toggleClass("full-overlay--open")
  });

  var hsize = $(window).height();
  $(".sp-menu").css("height",hsize + "px");
  $(".full-overlay").css("height",hsize + "px");
  $(window).resize(function(){
    hsize = $(window).height();
    $(".sp-menu").css("height",hsize + "px");
    $(".full-overlay").css("height",hsize + "px");
  });

});
