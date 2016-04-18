function display_l() {
    $(window).scroll(function() {
        console.log($(window).width());
        var o = !0,
            n = !0;
        $("body").scrollTop() >= 800 && 1 == o && (console.log("Entrodisplayfull1"), $(".thum-burger-top-l").animate({
            left: "200",
            opacity: "1"
        }, 1300), $(".thum-burger-top-r").animate({
            right: "200",
            opacity: "1"
        }, 1500), o = !1), $("body").scrollTop() >= 1050 && 1 == n && (console.log("Entrodisplayfull2"), $(".thum-burger-d").animate({
            opacity: "1"
        }, 1300), n = !1)
    })
}

function display_s() {
    $(window).scroll(function() {
        var o = !0,
            n = !0,
            t = !0;
        $("body").scrollTop() >= 880 && 1 == o && ($(".thum-burger-top-l").animate({
            left: "200",
            opacity: "1"
        }, 1e3), console.log("Entro"), o = !1), $("body").scrollTop() >= 980 && 1 == n && (console.log("Entro2"), $(".thum-burger-top-r").animate({
            right: "200",
            opacity: "1"
        }, 1e3), n = !1), $("body").scrollTop() >= 1200 && 1 == t && ($(".thum-burger-d").animate({
            opacity: "1"
        }, 1300), console.log("Entro3"), t = !1)
    })
}
$(function() {
    $(".scroll[href*=#]:not([href=#])").click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var o = $(this.hash);
            if (o = o.length ? o : $("[name=" + this.hash.slice(1) + "]"), o.length) return $("html,body").animate({
                scrollTop: o.offset().top
            }, 1e3), !1
        }
    })
}), $(window).load(function() {
    $("#main-content").fadeIn(900), $("#main-content2").fadeIn(1e3), $("#main-content3").fadeIn(1e3)
}), $("#map").off("click").on("click", function() {
    $("#map").css({
        "z-index": "3"
    }), $(this).find("iframe").css({
        "pointer-events": "auto"
    }).mouseleave(function() {
        $("#map").css({
            "z-index": "0"
        }), $(this).css({
            "pointer-events": "none"
        }), console.log($(this).length)
    })
}), $("#map2").off("click").on("click", function() {
    $(this).find("iframe").css({
        "pointer-events": "auto"
    }).mouseleave(function() {
        $(this).css({
            "pointer-events": "none"
        }), console.log($(this).length)
    })
}), $(document).ready(function() {
    $(window).scroll(function() {
        var o = !0,
            n = !0;
        $("body").scrollTop() >= 150 && 1 == o && ($("#burger").animate({
            opacity: "1"
        }, 2e3), o = !1), $("body").scrollTop() >= 250 && 1 == n && ($("#burger-text").animate({
            opacity: "1"
        }, 2e3), $("#burger-text2").animate({
            opacity: "1"
        }, 2e3), n = !1)
    })
}), $(window).width(function() {
    $(window).width() > 976 && display_l(), $(window).width() < 976 && (display_s(), console.log("Entrofuncion"))
});