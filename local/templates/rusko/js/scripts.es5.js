"use strict";

$(document).ready(function () {
  var e;
  (e = window).URLSearchParams = e.URLSearchParams || function (e) {
    var a = this;
    a.searchString = e, a.get = function (e) {
      var t = new RegExp("[?&]" + e + "=([^&#]*)").exec(a.searchString);
      return null == t ? null : decodeURI(t[1]) || 0;
    };
  }, $(".menubtn").on("click", function () {
    $(".navblock").toggleClass("vis");
  }), scrollStatus(), $(window).on("scroll", function () {
    scrollStatus();
  }), /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? $("#wehelp .service").addClass("touch") : $("#wehelp .service").addClass("notouch"), $(".navblock .backbtn, .headoverlay").on("click", function () {
    $(".navblock").removeClass("vis");
  }), $("[data-call]").on("click", function (e) {
    $("html, body").addClass("fix");
    var a = $(e.currentTarget).data("call");
    $("#overlay, [data-pp=\"".concat(a, "\"]")).fadeIn();
  }), $("[data-service]").on("click", function (e) {
    var a = $(e.currentTarget).parents(".service").find(".caption").text().toLowerCase();
    $('[data-pp="order"] [data-servicename]').val("Ведение " + a);
  }), $(".modal .close, .modal [data-close], #overlay").on("click", function () {
    $('[data-pp="order"] [data-servicename]').val(""), $("#overlay, [data-pp]").fadeOut(), $("html, body").removeClass("fix");
  }), $("a.toankor").click(function (e) {
    var a = $(e.currentTarget).attr("href"),
        t = $(a).offset();
    $(".navblock").removeClass("vis"), $("html, body").animate({
      scrollTop: t.top - 100
    }, 700);
  }), whyTab(".whytabs .tabitem:first-of-type"), $(".whytabs .tabitem").on("click", function (e) {
    whyTab(e.currentTarget);
  }), $(".tarifftabs .tabitem").on("click", function (e) {
    $(e.currentTarget).hasClass("active") || ($(".tarifftabs .tabitem").toggleClass("active"), $(".tarifftabs .tabcontentitem").toggle(0));
  }), $("[data-phone]").mask("+7 (999) 999-99-99", {
    translation: {
      Z: {
        pattern: /[0-9]/,
        optional: !0
      }
    }
  }).on("focus", function (e) {
    $(this).data("orig-placeholder", $(this).attr("placeholder")), $(this).attr("placeholder", $(this).data("placeholder"));
  }).on("blur", function (e) {
    $(this).attr("placeholder", $(this).data("orig-placeholder"));
  });
  var a = new URLSearchParams(window.location.search).get("slide"),
      t = Array.from(document.querySelectorAll("#first .swiper-slide"));
  a = a ? t.indexOf(document.querySelector("#" + a)) : 0, setTimeout(function () {
    new Swiper("#first .swiper-container", {
      slidesPerView: 1,
      initialSlide: a,
      autoplay: {
        delay: 1e4
      },
      centeredSlides: !0,
      autoHeight: !0,
      loop: !0,
      pagination: {
        el: "#first .swiper-pagination",
        type: "bullets",
        clickable: !0
      }
    });
  }, 10);
  new Swiper("#reviews .swiper-container", {
    slidesPerView: 1,
    loop: !1,
    spaceBetween: 40,
    navigation: {
      nextEl: "#reviews .swiper-button-next",
      prevEl: "#reviews .swiper-button-prev"
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    }
  }), new Swiper("#partners .swiper-container", {
    slidesPerView: 1,
    loop: !1,
    spaceBetween: 40,
    navigation: {
      nextEl: "#partners .swiper-button-next",
      prevEl: "#partners .swiper-button-prev"
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  });
}), 0 == /MSIE \d|Trident.*rv:/.test(navigator.userAgent) && $(".lightyellow, .headline h2, .headline .h2").addClass("normal");

var thanks = function thanks() {
  $("[data-pp]").is(":visible") && $("[data-pp]").hide(), $('#overlay, [data-pp="thanks"]').fadeIn();
},
    scrollStatus = function scrollStatus() {
  $(window).scrollTop() > 10 ? $("header .navblock, header .topline").addClass("scrolled") : $("header .navblock, header .topline").removeClass("scrolled");
},
    whyTab = function whyTab(e) {
  var a = $(e);
  $(e).siblings(".tabitem").removeClass("active"), $(e).addClass("active");
  var t = a.next(".tabdesc").html();
  a.parents(".tabholder").siblings(".tabcontent").find(".text").html(t);
};

$("#map").length && ymaps.ready(function () {
  var e = [55.809166, 37.611976];
  e = $(window).width() > 991 ? [55.809166, 37.601976] : [55.809166, 37.611976];
  var a = new ymaps.Map("map", {
    center: e,
    zoom: 15,
    controls: []
  }),
      t = new ymaps.Placemark([55.809166, 37.611976], {
    iconCaption: "РусКо",
    balloonContent: "12751, г. Москва, 17-ый проезд Марьиной рощи, д. 4, корп. 1"
  }, {
    preset: "islands#blackPocketIcon"
  });
  a.controls.add("zoomControl"), a.geoObjects.add(t), /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && a.behaviors.disable(["scrollZoom", "drag"]);
});