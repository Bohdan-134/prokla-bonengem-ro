<?php setcookie("FBpixel", $_GET["fbpixel"]); ?>
<!DOCTYPE html>
<html  data-scrapbook-create="20240918093223893" data-scrapbook-title="Bonengam">

<head>
    <script async="" src="js/watch.js"></script>
    <script src="js/jquery.min.js"></script>
    <style>
        .ac_footer {
            position: relative;
            top: 10px;
            height: 0;
            text-align: center;
            margin-bottom: 70px;
            color: #a12000
        }

        .ac_footer a {
            color: #a12000
        }

        .ac_footer p {
            text-align: center
        }

        img[height="1"],
        img[width="1"] {
            display: none !important
        }
    </style>

    <meta content="Bonengam" name="product">
    <meta charset="UTF-8">
    <title>Bonengam</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <script data-pagespeed-no-defer="">(function () {
            function d(b) { var a = window; if (a.addEventListener) a.addEventListener("load", b, !1); else if (a.attachEvent) a.attachEvent("onload", b); else { var c = a.onload; a.onload = function () { b.call(this); c && c.call(this) } } } var p = Date.now || function () { return +new Date }; window.pagespeed = window.pagespeed || {}; var q = window.pagespeed; function r() { this.a = !0 } r.prototype.c = function (b) { b = parseInt(b.substring(0, b.indexOf(" ")), 10); return !isNaN(b) && b <= p() }; r.prototype.hasExpired = r.prototype.c; r.prototype.b = function (b) { return b.substring(b.indexOf(" ", b.indexOf(" ") + 1) + 1) }; r.prototype.getData = r.prototype.b; r.prototype.f = function (b) { var a = document.getElementsByTagName("script"), a = a[a.length - 1]; a.parentNode.replaceChild(b, a) }; r.prototype.replaceLastScript = r.prototype.f;
            r.prototype.g = function (b) { var a = window.localStorage.getItem("pagespeed_lsc_url:" + b), c = document.createElement(a ? "style" : "link"); a && !this.c(a) ? (c.type = "text/css", c.appendChild(document.createTextNode(this.b(a)))) : (c.rel = "stylesheet", c.href = b, this.a = !0); this.f(c) }; r.prototype.inlineCss = r.prototype.g;
            r.prototype.h = function (b, a) { var c = window.localStorage.getItem("pagespeed_lsc_url:" + b + " pagespeed_lsc_hash:" + a), f = document.createElement("img"); c && !this.c(c) ? f.src = this.b(c) : (f.src = b, this.a = !0); for (var c = 2, k = arguments.length; c < k; ++c) { var g = arguments[c].indexOf("="); f.setAttribute(arguments[c].substring(0, g), arguments[c].substring(g + 1)) } this.f(f) }; r.prototype.inlineImg = r.prototype.h;
            function t(b, a, c, f) { a = document.getElementsByTagName(a); for (var k = 0, g = a.length; k < g; ++k) { var e = a[k], m = e.getAttribute("data-pagespeed-lsc-hash"), h = e.getAttribute("data-pagespeed-lsc-url"); if (m && h) { h = "pagespeed_lsc_url:" + h; c && (h += " pagespeed_lsc_hash:" + m); var l = e.getAttribute("data-pagespeed-lsc-expiry"), l = l ? (new Date(l)).getTime() : "", e = f(e); if (!e) { var n = window.localStorage.getItem(h); n && (e = b.b(n)) } e && (window.localStorage.setItem(h, l + " " + m + " " + e), b.a = !0) } } }
            function u(b) { t(b, "img", !0, function (a) { return a.src }); t(b, "style", !1, function (a) { return a.firstChild ? a.firstChild.nodeValue : null }) }
            q.i = function () {
                if (window.localStorage) {
                    var b = new r; q.localStorageCache = b; d(function () { u(b) }); d(function () {
                        if (b.a) {
                            for (var a = [], c = [], f = 0, k = p(), g = 0, e = window.localStorage.length; g < e; ++g) { var m = window.localStorage.key(g); if (!m.indexOf("pagespeed_lsc_url:")) { var h = window.localStorage.getItem(m), l = h.indexOf(" "), n = parseInt(h.substring(0, l), 10); if (!isNaN(n)) if (n <= k) { a.push(m); continue } else if (n < f || 0 == f) f = n; c.push(h.substring(l + 1, h.indexOf(" ", l + 1))) } } k = ""; f && (k = "; expires=" + (new Date(f)).toUTCString());
                            document.cookie = "_GPSLSC=" + c.join("!") + k; g = 0; for (e = a.length; g < e; ++g)window.localStorage.removeItem(a[g]); b.a = !1
                        }
                    })
                }
            }; q.localStorageCacheInit = q.i;
        })();
        pagespeed.localStorageCacheInit();</script>
    <!-- <link href="img/xicon.png.pagespeed.ic.xQQW9OpIIK.webp" rel="shortcut icon" type="image/x-icon"> -->
    <link href="css/css.css" rel="stylesheet">
    <style>
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-text-size-adjust: 100%
        }

        html {
            height: 100%
        }

        body {
            min-height: 100%;
            margin: 0;
            line-height: 1
        }

        h1,
        h2,
        h3,
        h4 {
            margin: 0
        }

        :focus {
            outline: none
        }

        p {
            margin: 0
        }

        ul,
        ol {
            padding: 0;
            margin: 0;
            list-style-type: none
        }

        img {
            max-width: 100%;
            vertical-align: middle;
            border: none
        }

        svg {
            display: block;
            width: 100%;
            height: 100%
        }

        a {
            color: inherit;
            text-decoration: none;
            background-color: transparent
        }

        button,
        input,
        select {
            padding: 0;
            margin: 0;
            font: inherit;
            color: inherit;
            letter-spacing: inherit;
            background-color: transparent;
            border: none;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        input {
            width: 100%
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-align: left;
            text-transform: none
        }

        button,
        [type="submit"] {
            cursor: pointer;
            -webkit-appearance: none
        }

        select {
            -moz-appearance: none;
            -webkit-appearance: none;
            width: 100%
        }

        select::-ms-expand {
            display: none
        }

        .wrapper {
            overflow: hidden
        }

        .problem__title,
        .composition__title,
        .research__title,
        .benefit__title,
        .changes__title,
        .advantages__title,
        .order__title,
        .instruction__title,
        .result__title,
        .reviews__title {
            margin-bottom: 20px;
            font-family: "Merriweather", serif;
            font-size: 22px;
            font-weight: 900;
            line-height: 1.3;
            text-align: center
        }

        .problem__title span,
        .composition__title span,
        .research__title span,
        .benefit__title span,
        .changes__title span,
        .advantages__title span,
        .order__title span,
        .instruction__title span,
        .result__title span,
        .reviews__title span {
            font-style: italic;
            color: #6f9528;
            font-size: 22px
        }

        .benefit__subtitle,
        .result__subtitle {
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.2;
            color: #6c757d;
            text-align: center
        }

        .form__content,
        .changes__content,
        .result__list,
        .reviews__content {
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px
        }

        .form__content--wrapper,
        .changes__content--wrapper,
        .result__list--wrapper,
        .reviews__content--wrapper {
            padding: 5px;
            background: #fff;
            border-radius: 5px
        }

        body {
            font-family: "Rubik", sans-serif;
            font-size: 16px;
            font-weight: 400;
            background: #ecf6ff
        }

        .container {
            max-width: 320px;
            padding: 0 10px;
            display: block;
            margin-right: auto;
            margin-left: auto
        }

        .img {
            text-align: center
        }

        .btn {
            position: relative;
            display: inline-block;
            width: 100%;
            max-width: 290px;
            padding: 25px 25px 30px 25px;
            font-size: 20px;
            font-weight: 900;
            color: #886c24;
            text-align: center;
            text-transform: uppercase;
            background: #d3a83c;
            border-radius: 50px;
            z-index: 5
        }

        .btn:after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: '';
            background: -webkit-gradient(linear, left bottom, left top, from(#fcc94a), to(#ffecaa));
            background: -o-linear-gradient(bottom, #fcc94a 0%, #ffecaa 100%);
            background: linear-gradient(to top, #fcc94a 0%, #ffecaa 100%);
            border-radius: 50px;
            -webkit-box-shadow: inset 0 -30px 30px -30px #fff, 0 10px 30px 0 rgba(147, 117, 41, .3);
            box-shadow: inset 0 -30px 30px -30px #fff, 0 10px 30px 0 rgba(147, 117, 41, .3);
            -webkit-transition: -webkit-transform .3s;
            transition: -webkit-transform .3s;
            -o-transition: transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s;
            -webkit-transform: translateY(-5px);
            -ms-transform: translateY(-5px);
            transform: translateY(-5px)
        }

        .btn span {
            position: relative;
            z-index: 20;
            display: block;
            -webkit-transition: -webkit-transform .3s;
            transition: -webkit-transform .3s;
            -o-transition: transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0)
        }

        .btn:hover:after {
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0)
        }

        .btn:hover span {
            -webkit-transform: translateY(5px);
            -ms-transform: translateY(5px);
            transform: translateY(5px)
        }

        .form {
            position: relative;
            z-index: 40;
            display: inline-block;
            max-width: 360px;
            text-align: center
        }

        .form__title {
            margin-bottom: 20px;
            font-family: "Merriweather", serif;
            font-weight: 900;
            line-height: 1.3;
            text-align: center;
            font-size: 24px;
            font-style: italic
        }

        .form__title span {
            color: #6f9528;
            font-size: 24px
        }

        .form__discount {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            margin-bottom: 25px;
            overflow: hidden;
            font-family: "Fira Sans", sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #fff;
            background: #ff2b2a
        }

        .form__discount::before,
        .form__discount:after {
            width: 0;
            height: 0;
            position: absolute;
            top: 50%;
            content: '';
            border: 22px solid transparent;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .form__discount::before {
            left: 0;
            border-left-color: #fff
        }

        .form__discount:after {
            right: 0;
            border-right-color: #fff
        }

        .form__discount span {
            position: relative;
            padding: 0 15px
        }

        .form__discount span::before {
            left: 0
        }

        .form__discount span:after {
            right: 0
        }

        .form__inp {
            margin-bottom: 20px;
            font-size: 16px;
            background: #f8f9fa;
            -webkit-box-shadow: inset -2px 0 3px 0 rgba(0, 0, 0, .1);
            box-shadow: inset -2px 0 3px 0 rgba(0, 0, 0, .1);
            border-radius: 5px
        }

        .form__inp input,
        select {
            padding: 0 20px;
            line-height: 50px;
            background: transparent;
            height: 50px
        }

        .form__price {
            margin-bottom: 20px
        }

        .price {
            font-size: 0;
            text-align: center
        }

        .price__new {
            display: inline-block;
            margin-right: 20px;
            font-size: 32px;
            font-weight: 700;
            color: #6f9528;
            vertical-align: middle
        }

        .price__old {
            position: relative;
            display: inline-block;
            font-size: 24px;
            color: #6c757d;
            vertical-align: middle
        }

        .price__old:after {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 0;
            content: "";
            border-bottom: 2px solid #6c757d;
            -webkit-transform: rotate(-1deg);
            -ms-transform: rotate(-1deg);
            transform: rotate(-1deg)
        }

        .header__section {
            position: relative;
            padding: 20px 0
        }

        .header__section:after {
            position: absolute;
            top: 150px;
            left: 30px;
            width: 497px;
            height: 296px;
            content: '';
            background: url("../img/xheader-bg__sm.png.pagespeed.ic.lLedA-T51J.webp");
            background-size: cover
        }

        .header__title,
        .footer__title {
            position: relative;
            z-index: 2;
            margin-bottom: 30px;
            font-size: 54px;
            font-weight: 700;
            background: -webkit-gradient(linear, left bottom, left top, from(#fca041), to(#eb005e));
            background: -o-linear-gradient(bottom, #fca041 0%, #eb005e 100%);
            background: linear-gradient(to top, #fca041 0%, #eb005e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            line-height: 1.1
        }

        .header__mark {
            display: none
        }

        .header__subtitle,
        .footer__subtitle {
            position: relative;
            z-index: 2;
            margin-bottom: 15px;
            font-family: "Merriweather", serif;
            font-size: 26px;
            font-style: italic;
            font-weight: 900;
            line-height: 1.2;
            color: #6f9528
        }

        .header__list,
        .footer__list {
            position: relative;
            z-index: 2;
            padding-right: 60%;
            margin-bottom: 20px
        }

        .header__list:after,
        .footer__list:after {
            position: absolute;
            bottom: 50px;
            left: 40%;
            width: 120px;
            height: 176px;
            content: '';
            background: url("../img/xprod-1__sm.png,qv1.pagespeed.ic.kkAF_S6U5f.webp") no-repeat;
            background-size: 100%
        }

        .header__item,
        .footer__item {
            margin-bottom: 15px;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.25
        }

        .header__item:last-child,
        .footer__item:last-child {
            margin-bottom: 0
        }

        .header__btn {
            text-align: center
        }

        .problem__section {
            padding: 20px 0
        }

        .problem__item {
            margin-bottom: 25px;
            text-align: center
        }

        .problem__item:last-child {
            margin-bottom: 0
        }

        .problem__icon {
            width: 45px;
            height: 45px;
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
            background: #fff url("../img/image.png");
            background-size: cover;
            border-radius: 10px;
            -webkit-box-shadow: 6px 4px 21px 0 rgba(0, 0, 0, .1);
            box-shadow: 6px 4px 21px 0 rgba(0, 0, 0, .1)
        }

        .problem__icon svg {
            width: 30px;
            height: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            fill: url("../css/main.css");
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .problem__name {
            margin-bottom: 10px;
            font-family: "Merriweather", serif;
            font-size: 20px;
            font-style: italic;
            font-weight: 900
        }

        .problem__text {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.25
        }

        .composition__section {
            position: relative;
            padding: 20px 0
        }

        .composition__title {
            position: relative;
            z-index: 20;
            margin-bottom: 50px
        }

        .composition__list {
            position: relative;
            z-index: 20;
            font-size: 0;
            text-align: center
        }

        .composition__list--wrapper {
            position: relative;
            display: block;
            padding-top: 420px;
            margin-top: -30px
        }

        .composition__list--wrapper::before {
            position: absolute;
            top: 0;
            left: 50%;
            z-index: 20;
            content: '';
            background: url("../img/xprod.png,qv1.pagespeed.ic.P6x1W5nnbe.webp") center no-repeat;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            width: 400px;
            height: 400px
        }

        .composition__list--wrapper:after {
            width: 400px;
            height: 400px;
            position: absolute;
            top: 0;
            left: 50%;
            content: '';
            background: -o-radial-gradient(center, circle, #fff 0%, #fff 40%, rgba(255, 255, 255, .5) 40%, rgba(255, 255, 255, .5) 60%, transparent 60%, transparent 100%) no-repeat;
            background: radial-gradient(circle at center, #fff 0%, #fff 40%, rgba(255, 255, 255, .5) 40%, rgba(255, 255, 255, .5) 60%, transparent 60%, transparent 100%) no-repeat;
            border: 2px dashed #8fa5ba;
            border-radius: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .composition__img {
            margin-bottom: 10px
        }

        .composition__name {
            font-family: "Merriweather", serif;
            font-size: 20px;
            font-style: italic;
            font-weight: 900;
            line-height: 1.2
        }

        .steps__section {
            position: relative;
            padding: 20px 0
        }

        .steps__list {
            position: relative;
            z-index: 20;
            padding: 20px 0;
            text-align: center
        }

        .steps__list:after {
            position: absolute;
            top: 0;
            left: 50%;
            height: 100%;
            content: '';
            border-right: 1px dashed #8fa5ba;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .steps__item {
            position: relative;
            padding: 40px 15px 10px;
            margin-bottom: 15px
        }

        .steps__item::before,
        .steps__item:after {
            width: 20px;
            height: 20px;
            position: absolute;
            top: 0;
            left: 50%;
            content: '';
            border-radius: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .steps__item::before {
            z-index: 10;
            background: #8fa5ba;
            border: 4px solid #fff
        }

        .steps__item:after {
            z-index: 20;
            background: transparent;
            border: 1px solid #8fa5ba
        }

        .steps__item:last-child {
            margin-bottom: 0
        }

        .steps__name {
            margin-bottom: 10px;
            font-family: "Merriweather", serif;
            font-size: 20px;
            font-style: italic;
            font-weight: 900;
            color: #6f9528
        }

        .steps__text {
            line-height: 1.25
        }

        .steps__text span {
            color: #ff2b2a
        }

        .research {
            background: url("../img/xresearch-bg.jpg.pagespeed.ic.iRG7RmNBYf.webp") center no-repeat;
            background-size: cover
        }

        .research__section {
            padding: 40px 0 50px
        }

        .research__content {
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px
        }

        .research__content--wrapper {
            max-width: 360px;
            padding: 5px;
            margin-right: auto;
            margin-left: auto;
            background: #fff;
            border-radius: 5px
        }

        .research__text {
            font-size: 16px;
            line-height: 1.5
        }

        .research__text span {
            font-size: 20px;
            font-weight: 700
        }

        .research__decor {
            display: none
        }

        .benefit {
            background: url("../img/benefit-bg_lg.png") center no-repeat
        }

        .benefit__section {
            position: relative;
            padding: 20px 0
        }

        .benefit__section>* {
            position: relative;
            z-index: 10
        }

        .benefit__title {
            margin-bottom: 40px
        }

        .benefit__subtitle {
            margin-bottom: 60px
        }

        .benefit__content {
            padding: 40px 40px 40px 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px
        }

        .benefit__content--wrapper {
            max-width: 360px;
            padding: 5px;
            margin-right: auto;
            margin-left: auto;
            background: #fff;
            border-radius: 5px
        }

        .benefit__item {
            position: relative;
            padding-left: 20px;
            margin-bottom: 25px;
            line-height: 1.25
        }

        .benefit__item:after {
            width: 12px;
            height: 12px;
            position: absolute;
            top: 6px;
            left: 0;
            content: '';
            background: -webkit-gradient(linear, left bottom, left top, from(#86bb2c), to(#6c9027));
            background: -o-linear-gradient(bottom, #86bb2c 0%, #6c9027 100%);
            background: linear-gradient(to top, #86bb2c 0%, #6c9027 100%);
            border-radius: 50%;
            -webkit-box-shadow: 0 2px 3px 0 rgba(76, 103, 27, .3);
            box-shadow: 0 2px 3px 0 rgba(76, 103, 27, .3)
        }

        .benefit__item:last-child {
            margin-bottom: 0
        }

        .benefit__item span {
            font-size: 20px;
            font-weight: 700
        }

        .changes__section {
            padding: 20px 0
        }

        .changes__item {
            text-align: left
        }

        .changes__content {
            padding-bottom: 50px
        }

        .changes__img {
            margin-bottom: 30px
        }

        .changes__table {
            display: table
        }

        .changes__cell {
            display: table-cell;
            vertical-align: middle
        }

        .changes__cell:last-child {
            padding-left: 15px
        }

        .changes__info {
            margin-bottom: 15px
        }

        .changes__ava {
            width: 60px;
            height: 60px;
            display: inline-block;
            overflow: hidden;
            border-radius: 50%
        }

        .changes__name {
            margin-bottom: 5px;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.2;
            text-transform: uppercase
        }

        .changes__age {
            font-size: 16px;
            font-weight: 500;
            color: #adb5bd
        }

        .changes__text {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.3
        }

        .advantages {
            text-align: center
        }

        .advantages__section {
            padding: 20px 0
        }

        .advantages__list {
            margin-bottom: 40px
        }

        .advantages__item {
            margin-bottom: 40px
        }

        .advantages__item:last-child {
            margin-bottom: 0
        }

        .advantages__icon {
            display: inline-block;
            margin-bottom: 15px
        }

        .advantages__name {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: 900
        }

        .advantages__text {
            font-size: 16px;
            line-height: 1.5;
            color: #6c757d
        }

        .advantages__decor {
            display: none
        }

        .order {
            text-align: center
        }

        .order__section {
            position: relative;
            padding: 20px 0
        }

        .order__section:after {
            position: absolute;
            top: -60px;
            left: -200px;
            width: 424px;
            height: 415px;
            margin-left: -130px;
            content: '';
            background: url("../img/xorder_decor-sm.png.pagespeed.ic.pG9KifrVjP.webp")
        }

        .order__title {
            position: relative;
            z-index: 10
        }

        .order__list {
            position: relative;
            z-index: 10;
            text-align: justify
        }

        .order__list:after {
            display: inline-block;
            width: 100%;
            content: ''
        }

        .order__item {
            position: relative;
            padding: 0 10px;
            margin-bottom: 40px;
            text-align: center
        }

        .order__item:first-child:after {
            position: absolute;
            bottom: -140px;
            left: 0;
            width: 41px;
            height: 153px;
            content: '';
            background: url("../img/xarrow-.png.pagespeed.ic.26DZ1kHeSF.webp");
            -webkit-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
            transform: scale(-1, 1)
        }

        .order__item:nth-child(2):after {
            position: absolute;
            right: 0;
            bottom: -170px;
            width: 41px;
            height: 153px;
            content: '';
            background: url("../img/xarrow-.png.pagespeed.ic.26DZ1kHeSF.webp")
        }

        .order__item:last-child {
            margin-bottom: 0
        }

        .order__icon {
            position: relative;
            z-index: 5;
            display: inline-block;
            width: 90px;
            height: 90px;
            margin-bottom: 10px
        }

        .order__icon span {
            position: relative;
            z-index: 1;
            display: inline-block
        }

        .order__icon--1 span {
            top: 5px;
            left: -33px;
            width: 119px;
            height: 74px;
            background: url("../img/xorder_1.png.pagespeed.ic.M49YhTFGMx.webp")
        }

        .order__icon--2 span {
            top: -10px;
            left: 10px;
            width: 62px;
            height: 83px;
            background: url("../img/xorder_2.png.pagespeed.ic.cArCuNia3g.webp")
        }

        .order__icon--3 span {
            top: 10px;
            left: 10px;
            width: 86px;
            height: 75px;
            background: url("../img/xorder_3.png.pagespeed.ic.UMGRvo0cwv.webp")
        }

        .order__icon:after {
            position: absolute;
            top: 4px;
            right: 4px;
            bottom: 4px;
            left: 4px;
            z-index: 0;
            content: '';
            background: #8fa5ba;
            border-radius: 50%
        }

        .order__icon::before {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 0;
            content: '';
            border: 1px solid #8fa5ba;
            border-radius: 50%
        }

        .order__name {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: 700;
            line-height: 1.3
        }

        .order__text {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.25;
            color: #7d7d7d
        }

        .order__decor--cloud-1 {
            position: absolute;
            top: -20px;
            left: -40px;
            z-index: 5;
            width: 324px;
            height: 140px
        }

        .order__decor--cloud-2 {
            position: absolute;
            top: 300px;
            left: -10px;
            z-index: 5;
            width: 321px;
            height: 244px
        }

        .order__decor--cloud-3 {
            position: absolute;
            bottom: -30px;
            left: 50px;
            z-index: 5;
            width: 324px;
            height: 140px
        }

        .instruction__section {
            padding: 20px 0
        }

        .instruction__list {
            margin-bottom: 20px;
            text-align: center
        }

        .instruction__list:after {
            display: inline-block;
            width: 100%;
            content: ''
        }

        .instruction__item {
            display: inline-block;
            max-width: 360px;
            margin-bottom: 15px
        }

        .instruction__item:last-child {
            margin-bottom: 0
        }

        .instruction__content {
            position: relative;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px
        }

        .instruction__content--wrapper {
            padding: 5px;
            background: #fff;
            border-radius: 5px
        }

        .instruction__table {
            display: table
        }

        .instruction__cell {
            display: table-cell;
            vertical-align: top
        }

        .instruction__cell:last-child {
            padding-left: 15px
        }

        .instruction__img {
            display: block;
            width: 90px
        }

        .instruction__text {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.25;
            text-align: left
        }

        .instruction__text span {
            font-size: 20px;
            font-weight: 700
        }

        .instruction__note {
            font-weight: 500;
            line-height: 1.25
        }

        .instruction__note::before {
            content: '* '
        }

        .result__section {
            position: relative;
            padding: 20px 0;
            text-align: justify
        }

        .result__section:after {
            display: inline-block;
            width: 100%;
            content: ''
        }

        .result__section>* {
            position: relative;
            z-index: 2
        }

        .result__list {
            text-align: center
        }

        .result__list--wrapper {
            max-width: 360px;
            margin-right: auto;
            margin-bottom: 45px;
            margin-left: auto
        }

        .result__item {
            padding-bottom: 20px;
            margin-bottom: 15px;
            border-bottom: 1px dashed #ced4da
        }

        .result__item:last-child {
            margin-bottom: 0;
            border-bottom: 0
        }

        .result__icon {
            display: none
        }

        .result__name {
            margin-bottom: 15px;
            font-size: 20px;
            font-weight: 700
        }

        .result__value {
            margin-bottom: 10px;
            font-size: 40px;
            font-weight: 700;
            color: #ff2b2a
        }

        .result__value i {
            font-style: normal
        }

        .result__value span {
            font-size: 20px
        }

        .result__text {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.25;
            color: #7d7d7d
        }

        .result__diagram {
            text-align: left
        }

        .result__diagram--text {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.25;
            text-align: left
        }

        .result__diagram--text span {
            font-size: 18px;
            font-weight: 700
        }

        .result__diagram--img {
            position: relative;
            margin: 50px 0;
            text-align: center
        }

        .result__diagram--img-caption-1,
        .result__diagram--img-caption-2 {
            position: absolute;
            display: block;
            font-size: 20px;
            font-weight: 900
        }

        .result__diagram--img-caption-1 {
            top: 40px;
            right: 80px
        }

        .result__diagram--img-caption-2 {
            bottom: 60px;
            left: 50%;
            margin-left: -100px
        }

        .result__diagram--img::before,
        .result__diagram--img:after {
            position: absolute;
            width: 25px;
            height: 60px;
            content: '';
            border: solid #000;
            -webkit-transform: skew(-40deg);
            -ms-transform: skew(-40deg);
            transform: skew(-40deg)
        }

        .result__diagram--img::before {
            top: -30px;
            right: 80px;
            border-width: 3px 0 0 3px
        }

        .result__diagram--img:after {
            bottom: -30px;
            left: 45px;
            border-width: 0 3px 3px 0
        }

        .expert {
            background: url("../img/xexpert-bg.jpg,qv2.pagespeed.ic.n-ZSzC8D_2.webp") center no-repeat;
            background-size: cover
        }

        .expert__section {
            position: relative;
            padding: 40px 0
        }

        .expert__section:after {
            position: absolute;
            top: 20px;
            right: -40px;
            width: 215px;
            height: 308px;
            content: '';
            background: url("../img/xexpert.png,qv2.pagespeed.ic.hAaYHaFUlt.webp")
        }

        .expert__text {
            position: relative;
            z-index: 20;
            margin-bottom: 20px;
            line-height: 1.25
        }

        .expert__text:first-child {
            position: relative;
            padding-right: 40%
        }

        .expert__desc {
            margin-bottom: 20px;
            font-family: "Merriweather", serif;
            font-size: 18px;
            font-style: italic;
            font-weight: 900;
            line-height: 1.25
        }

        .expert__name {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: 700
        }

        .expert__position {
            font-weight: 500;
            line-height: 1.25;
            color: #adb5bd
        }

        .reviews__section {
            padding: 20px 0
        }

        .reviews__item {
            display: inline-block;
            vertical-align: top
        }

        .reviews__info {
            margin-bottom: 15px
        }

        .reviews__table {
            display: table
        }

        .reviews__cell {
            display: table-cell;
            vertical-align: middle
        }

        .reviews__cell:last-child {
            padding-left: 15px
        }

        .reviews__ava {
            display: inline-block;
            width: 60px;
            height: 60px;
            overflow: hidden;
            border-radius: 50%
        }

        .reviews__name {
            margin-bottom: 5px;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.2
        }

        .reviews__position {
            font-size: 16px;
            font-weight: 500;
            color: #7d7d7d;
            text-align: left;
            line-height: 1.4
        }

        .reviews__text {
            position: relative;
            padding-top: 25px;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.3;
            text-align: left
        }

        .reviews__text--quotes {
            position: absolute;
            top: 0;
            left: 0
        }

        .reviews__text--quotes svg {
            fill: #6f9528;
            width: 20px;
            height: 20px
        }

        .footer__section {
            position: relative;
            padding: 20px 0;
            font-size: 0
        }

        .footer__section:after {
            position: absolute;
            top: 180px;
            left: 50%;
            width: 498px;
            height: 444px;
            margin-left: -130px;
            content: '';
            background: url("../img/xfooter.png.pagespeed.ic.DdwTr7NtTF.webp")
        }

        .footer__title {
            position: relative;
            z-index: 2
        }

        .footer__list {
            padding-right: 43%
        }

        .footer__list:after {
            right: 0;
            left: inherit
        }

        .footer__form {
            text-align: center
        }

        @-webkit-keyframes pulse {
            0% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(2);
                transform: scale(2);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }
        }

        @keyframes pulse {
            0% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(2);
                transform: scale(2);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }
        }

        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: translate(-50%, -50%) rotateZ(0deg);
                transform: translate(-50%, -50%) rotateZ(0deg);
            }

            100% {
                -webkit-transform: translate(-50%, -50%) rotateZ(360deg);
                transform: translate(-50%, -50%) rotateZ(360deg);
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: translate(-50%, -50%) rotateZ(0deg);
                transform: translate(-50%, -50%) rotateZ(0deg);
            }

            100% {
                -webkit-transform: translate(-50%, -50%) rotateZ(360deg);
                transform: translate(-50%, -50%) rotateZ(360deg);
            }
        }

        @media (min-width:768px) {

            .problem__title,
            .composition__title,
            .research__title,
            .benefit__title,
            .changes__title,
            .advantages__title,
            .order__title,
            .instruction__title,
            .result__title,
            .reviews__title {
                font-size: 32px
            }

            .problem__title span,
            .composition__title span,
            .research__title span,
            .benefit__title span,
            .changes__title span,
            .advantages__title span,
            .order__title span,
            .instruction__title span,
            .result__title span,
            .reviews__title span {
                font-size: 36px
            }

            .benefit__subtitle,
            .result__subtitle {
                font-size: 24px
            }

            body {
                font-size: 18px
            }

            .container {
                max-width: 768px;
                padding: 0 15px
            }

            .header__section:after {
                left: 200px;
                width: 900px;
                height: 535px;
                background: url("../img/xheader-bg__md.png.pagespeed.ic.Akjw3Ip-E8.webp");
                background-size: cover
            }

            .header__section {
                padding: 40px 0 80px
            }

            .header__title,
            .footer__title {
                margin-bottom: 50px;
                font-size: 120px;
                max-width: 680px;
                padding-bottom: 10px;
                line-height: 1
            }

            .header__subtitle,
            .footer__subtitle {
                padding-right: 40%;
                margin-bottom: 50px;
                font-size: 36px
            }

            .header__list,
            .footer__list {
                margin-bottom: 80px
            }

            .header__list:after,
            .footer__list:after {
                bottom: -200px;
                width: 210px;
                height: 364px;
                background: url("../img/xprod-1__md.png,qv1.pagespeed.ic.3M_9RRYO_9.webp") no-repeat
            }

            .header__item,
            .footer__item {
                position: relative;
                min-height: 30px;
                padding-left: 50px;
                margin-bottom: 20px;
                font-size: 18px
            }

            .header__item::before,
            .footer__item::before {
                width: 30px;
                height: 30px;
                position: absolute;
                top: 50%;
                left: 0;
                content: '';
                background: #6f9528 url("../img/xcheck.png.pagespeed.ic.GZW3uUDm2R.webp") center no-repeat;
                border-radius: 50%;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            .header__btn {
                text-align: left
            }

            .problem__section {
                position: relative;
                text-align: justify
            }

            .problem__section:after {
                display: inline-block;
                width: 100%;
                content: ''
            }

            .problem__title {
                position: relative;
                z-index: 2;
                display: inline-block;
                width: calc((100% - 50px) / 2);
                text-align: left;
                vertical-align: top
            }

            .problem__list {
                position: relative;
                z-index: 2;
                display: inline
            }

            .problem__item {
                display: inline-block;
                width: calc((100% - 50px) / 2);
                text-align: left;
                vertical-align: top
            }

            .problem__icon {
                width: 85px;
                height: 85px;
                border-radius: 20px
            }

            .problem__icon svg {
                width: 40px;
                height: 40px
            }

            .problem__name {
                font-size: 22px
            }

            .composition__img {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .steps__list:after {
                top: 30px;
                width: 100%;
                border-top: 2px dashed #8fa5ba;
                border-right: none
            }

            .steps__item {
                display: inline-block;
                width: calc((100% - 50px) / 4);
                vertical-align: top
            }

            .research {
                background: url("../img/xresearch-bg_lg.jpg.pagespeed.ic.l2_n6zTq9W.webp") center no-repeat;
                background-size: cover
            }

            .research__section {
                position: relative;
                padding: 60px 0 90px
            }

            .research__title {
                margin-bottom: 80px
            }

            .research__text {
                font-size: 18px
            }

            .research__text span {
                font-size: 24px
            }

            .benefit__section {
                position: relative;
                padding: 90px 0
            }

            .benefit__section:after {
                position: absolute;
                bottom: -150px;
                left: -350px;
                width: 1055px;
                height: 690px;
                content: '';
                background: url("../img/xdoctor.png.pagespeed.ic.VS0tTWXEo4.webp")
            }

            .benefit__content--wrapper {
                margin-right: inherit;
                margin-left: 50%
            }

            .benefit__item {
                padding-left: 30px
            }

            .benefit__subtitle {
                margin-bottom: 120px
            }

            .benefit__item:after {
                width: 14px;
                height: 14px
            }

            .benefit__item span {
                font-size: 22px
            }

            .changes__section {
                padding: 80px 0 20px
            }

            .changes__list {
                text-align: justify
            }

            .changes__list:after {
                display: inline-block;
                width: 100%;
                content: ''
            }

            .changes__item {
                display: inline-block;
                width: 350px;
                vertical-align: top
            }

            .changes__content {
                padding: 60px
            }

            .advantages {
                font-size: 0;
                text-align: left
            }

            .advantages__list {
                text-align: justify
            }

            .advantages__list:after {
                display: inline-block;
                width: 100%;
                content: ''
            }

            .advantages__item {
                display: inline-block;
                width: calc((100% - 50px) / 2);
                text-align: center;
                vertical-align: top
            }

            .advantages__form {
                text-align: center
            }

            .advantages__icon--2 img {
                position: relative;
                bottom: -18px
            }

            .advantages__icon--3 img {
                position: relative;
                bottom: -25px
            }

            .order__title {
                margin-bottom: 70px
            }

            .order__item:first-child:after {
                display: none
            }

            .order__item:nth-child(2):after {
                display: none
            }

            .order__item {
                display: inline-block;
                width: 200px;
                padding: 0;
                margin-bottom: 0;
                vertical-align: top
            }

            .order__decor--cloud-1 {
                top: -20px;
                left: 170px
            }

            .order__decor--cloud-2 {
                top: 125px;
                left: 230px
            }

            .order__decor--cloud-3 {
                bottom: -60px;
                left: 470px
            }

            .instruction__title {
                margin-bottom: 70px
            }

            .instruction__list {
                text-align: justify
            }

            .instruction__item {
                display: inline-block;
                width: 220px;
                vertical-align: top
            }

            .instruction__content--wrapper {
                position: relative;
                overflow: hidden
            }

            .instruction__content--wrapper:after {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 20;
                width: 100%;
                height: 100%;
                content: '';
                background: -webkit-gradient(linear, left bottom, left top, from(#fff), color-stop(20%, #fff), to(transparent));
                background: -o-linear-gradient(bottom, #fff 0%, #fff 20%, transparent 100%);
                background: linear-gradient(to top, #fff 0%, #fff 20%, transparent 100%)
            }

            .instruction__table {
                display: block
            }

            .instruction__cell {
                display: block
            }

            .instruction__img {
                position: relative;
                z-index: 20;
                width: auto;
                margin: -30px
            }

            .instruction__img:after {
                position: absolute;
                top: 10px;
                right: 10px;
                bottom: 0;
                left: 10px;
                content: '';
                border: solid #fff;
                border-width: 1px 1px 0;
                border-radius: 5px
            }

            .instruction__img img {
                width: 100%
            }

            .instruction__text {
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: 40;
                width: 100%;
                padding: 20px;
                text-align: center;
                border: solid #dee2e6;
                border-width: 0 1px 1px;
                border-radius: 5px
            }

            .instruction__note {
                padding: 0 10%;
                text-align: center
            }

            .result__icon {
                display: inline-block;
                margin-bottom: 10px
            }

            .result__icon--1 {
                width: 77px;
                height: 65px;
                background: url("../img/xresult-1.png.pagespeed.ic.ZpRR1zgYPO.webp")
            }

            .result__icon--2 {
                width: 65px;
                height: 65px;
                background: url("../img/xresult-2.png.pagespeed.ic.8aQIJH0itT.webp")
            }

            .result__icon--3 {
                width: 107px;
                height: 57px;
                background: url("../img/result-3.png")
            }

            .result__diagram--text {
                font-size: 20px
            }

            .result__diagram--text:first-child {
                width: 400px;
                margin-left: auto
            }

            .result__diagram--text:last-child {
                width: 400px
            }

            .result__diagram--text span {
                font-size: 24px
            }

            .result__diagram--img-caption-1,
            .result__diagram--img-caption-2 {
                font-size: 34px
            }

            .result__diagram--img-caption-1 {
                right: 230px
            }

            .result__diagram--img-caption-2 {
                bottom: 72px;
                margin-left: -135px
            }

            .result__diagram--img {
                margin: 70px 0 40px
            }

            .result__diagram--img::before {
                top: -40px;
                right: 300px
            }

            .result__diagram--img:after {
                bottom: -25px;
                left: 210px
            }

            .expert__section {
                padding: 60px 50% 75px 0
            }

            .expert__section:after {
                top: inherit;
                right: -100px;
                bottom: 0;
                width: 500px;
                height: 714px;
                background: url("../img/xexpert_lg.png,qv1.pagespeed.ic.q--i_ug8rg.webp")
            }

            .expert__text {
                line-height: 1.5
            }

            .expert__text:first-child {
                padding-right: 0
            }

            .expert__desc {
                line-height: 1.5;
                font-size: 22px
            }

            .expert__info {
                width: 360px;
                padding: 40px;
                border: 1px solid #dee2e6;
                border-radius: 5px
            }

            .expert__info--wrapper {
                position: absolute;
                right: 0;
                bottom: 40px;
                z-index: 20;
                padding: 5px;
                background: #fff;
                background: #fff;
                border-radius: 5px
            }

            .reviews__item {
                width: 360px
            }

            .reviews__ava {
                width: 80px;
                height: 80px
            }

            .reviews__text {
                padding-top: 35px;
                font-size: 18px;
                line-height: 1.5
            }

            .reviews__text--quotes svg {
                width: 30px;
                height: 30px
            }

            .footer__section:after {
                top: 50px;
                left: 500px
            }

            .footer__list:after {
                bottom: -50px;
                left: 60%
            }

            [data-unshow] {
                opacity: 0;
                -webkit-transition: opacity .5s, -webkit-transform .5s;
                transition: opacity .5s, -webkit-transform .5s;
                -o-transition: transform .5s, opacity .5s;
                transition: transform .5s, opacity .5s;
                transition: transform .5s, opacity .5s, -webkit-transform .5s;
                -webkit-transform: translate(0, -50px);
                -ms-transform: translate(0, -50px);
                transform: translate(0, -50px);
                will-change: transform, opacity
            }

            [data-horizontal="1"] {
                -webkit-transform: translate(-50px, 0);
                -ms-transform: translate(-50px, 0);
                transform: translate(-50px, 0)
            }

            [data-horizontal="2"] {
                -webkit-transform: translate(50px, 0);
                -ms-transform: translate(50px, 0);
                transform: translate(50px, 0)
            }

            [data-unshow="1"] {
                -webkit-transition-delay: .1s;
                -o-transition-delay: .1s;
                transition-delay: .1s
            }

            [data-unshow="2"] {
                -webkit-transition-delay: .3s;
                -o-transition-delay: .3s;
                transition-delay: .3s
            }

            [data-unshow="3"] {
                -webkit-transition-delay: .5s;
                -o-transition-delay: .5s;
                transition-delay: .5s
            }

            [data-unshow="4"] {
                -webkit-transition-delay: .7s;
                -o-transition-delay: .7s;
                transition-delay: .7s
            }
        }

        @media (min-width:768px) and (min-width:768px) {
            .problem__section::before {
                position: absolute;
                top: -60px;
                left: -200px;
                width: 576px;
                height: 486px;
                content: '';
                background: url("../img/xproblem_decor.png.pagespeed.ic.h5u07arMCn.webp")
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 992px
            }

            .header__section:after {
                left: 350px
            }

            .problem__title {
                width: calc((100% - 100px) / 3)
            }

            .problem__item {
                width: calc((100% - 100px) / 3)
            }

            .composition__title {
                width: 400px;
                display: block;
                margin-right: auto;
                margin-left: auto
            }

            .composition__list--wrapper {
                padding-top: 0;
                margin-top: 0
            }

            .composition__list--wrapper::before {
                top: 76%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%)
            }

            .composition__list--wrapper:after {
                width: 400px;
                height: 400px;
                top: 77.3%;
                -webkit-transform: translate(-50%, -50%) rotateZ(0deg);
                -ms-transform: translate(-50%, -50%) rotate(0deg);
                transform: translate(-50%, -50%) rotateZ(0deg);
                -webkit-animation: rotate 240s infinite linear;
                animation: rotate 240s infinite linear
            }

            .composition__item {
                position: relative;
                display: inline-block;
                width: 50%;
                margin-bottom: 10px;
                text-align: left
            }

            .composition__item::before,
            .composition__item:after {
                width: 20px;
                height: 20px;
                position: absolute;
                content: '';
                border-radius: 50%
            }

            .composition__item::before {
                z-index: 10;
                background: #8fa5ba;
                border: 4px solid #fff
            }

            .composition__item:after {
                z-index: 20;
                background: transparent;
                border: 1px solid #8fa5ba
            }

            .composition__item--1 {
                width: 100%;
                padding-left: 325px;
                margin-bottom: 20px
            }

            .composition__item--1::before,
            .composition__item--1:after {
                bottom: 10px;
                left: 50%;
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                transform: translateX(-50%)
            }

            .composition__item--2 {
                padding-left: 75px;
                margin: -20px 0 20px
            }

            .composition__item--2::before,
            .composition__item--2:after {
                top: 50%;
                right: 143px;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            .composition__item--3 {
                padding-left: 170px;
                margin: -20px 0 20px
            }

            .composition__item--3::before,
            .composition__item--3:after {
                top: 50%;
                left: 143px;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            .composition__item--4::before,
            .composition__item--4:after {
                top: 50%;
                right: 190px;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            .composition__item--5 {
                padding-left: 200px
            }

            .composition__item--5::before,
            .composition__item--5:after {
                top: 50%;
                left: 190px;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            .composition__img {
                width: 100px
            }

            .composition__name {
                position: relative;
                display: inline-block;
                width: 140px;
                font-size: 16px;
                vertical-align: middle
            }

            .composition__name--1 {
                top: -30px
            }

            .research__title {
                padding-right: 10%;
                padding-left: 10%
            }

            .research__content--wrapper {
                margin-right: inherit;
                margin-left: inherit
            }

            .research__decor {
                display: block
            }

            .research__decor-man {
                position: absolute;
                right: 0;
                bottom: 100px;
                width: 600px;
                height: 385px
            }

            .research__decor-target {
                width: 20px;
                height: 20px;
                position: absolute;
                top: 0;
                left: 0;
                background: #ff2b2a;
                border-radius: 50%
            }

            .research__decor-target span {
                display: block;
                width: 100%;
                height: 100%
            }

            .research__decor-target:before,
            .research__decor-target:after,
            .research__decor-target span:before,
            .research__decor-target span:after {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                content: '';
                border: 1px solid #ff2b2a;
                border-radius: 50%;
                -webkit-animation: pulse 4s linear infinite;
                animation: pulse 4s linear infinite
            }

            .research__decor-target:after {
                -webkit-animation-delay: 1s;
                animation-delay: 1s
            }

            .research__decor-target span:before {
                -webkit-animation-delay: 2s;
                animation-delay: 2s
            }

            .research__decor-target span:after {
                -webkit-animation-delay: 3s;
                animation-delay: 3s
            }

            .research__decor-target--1 {
                top: 45px;
                left: 220px
            }

            .research__decor-target--2 {
                top: 80px;
                left: 310px
            }

            .research__decor-target--3 {
                top: 215px;
                left: 110px
            }

            .research__decor-target--4 {
                top: 215px;
                left: 330px
            }

            .research__decor-target--5 {
                top: 215px;
                left: 410px
            }

            .benefit__section:after {
                left: -200px
            }

            .changes__item {
                width: 450px
            }

            .advantages__list {
                display: inline-block;
                width: 50%;
                vertical-align: top
            }

            .advantages__item {
                text-align: left
            }

            .advantages__form {
                position: relative;
                z-index: 20;
                display: inline-block;
                width: 50%;
                text-align: right
            }

            .order__item {
                width: 250px
            }

            .order__icon {
                width: 150px;
                height: 150px
            }

            .order__icon--1 span {
                top: 12px;
                left: -50px;
                width: 194px;
                height: 120px;
                background: url("../img/xorder_1_lg.png.pagespeed.ic._Ir4qYuHfZ.webp")
            }

            .order__icon--2 span {
                top: -20px;
                left: 20px;
                width: 102px;
                height: 136px;
                background: url("../img/xorder_2_lg.png.pagespeed.ic.AggZ4orRHD.webp")
            }

            .order__icon--3 span {
                top: 20px;
                left: 10px;
                width: 141px;
                height: 122px;
                background: url("../img/order_3_lg.png")
            }

            .order__decor--cloud-1 {
                left: 290px
            }

            .order__decor--cloud-2 {
                left: 340px
            }

            .order__decor--cloud-3 {
                left: 660px
            }

            .instruction__item {
                width: 300px
            }

            .instruction__text {
                padding: 40px
            }

            .result__list--wrapper {
                display: inline-block;
                margin-bottom: 0
            }

            .result__diagram {
                display: inline-block;
                width: 560px;
                padding: 60px 0;
                vertical-align: top
            }

            .expert {
                margin-top: -100px
            }

            .expert__section {
                padding: 150px 50% 75px 0
            }

            .expert__section:after {
                right: 0
            }

            .reviews__list {
                text-align: justify
            }

            .reviews__list:after {
                display: inline-block;
                width: 100%;
                content: ''
            }

            .reviews__item {
                width: 300px
            }

            .footer__section {
                padding-top: 60px
            }

            .footer__section:after {
                top: 100px;
                left: 550px
            }

            .footer__content {
                display: inline-block;
                width: 60%;
                vertical-align: middle
            }

            .footer__subtitle {
                padding-right: 0
            }

            .footer__form {
                display: inline-block;
                width: 40%;
                text-align: right;
                vertical-align: middle
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1200px
            }

            .header__section:after {
                top: 50px;
                left: 420px;
                width: 1329px;
                height: 790px;
                background: url("../img/xheader-bg__xl.png.pagespeed.ic.c91DnXaLwr.webp")
            }

            .header__section::before {
                position: absolute;
                right: 100%;
                width: 1290px;
                height: 766px;
                margin-right: -150px;
                content: '';
                background: url("../img/xheader-bg-2__xl.png.pagespeed.ic.lyK2zJYwQg.webp")
            }

            .header__mark {
                position: absolute;
                display: block;
                top: 0;
                left: 100%;
                width: 70px;
                height: 70px;
                content: ''
            }

            .header__mark--1 {
                margin-left: 20px
            }

            .header__mark--2 {
                margin-left: 65px
            }

            .header__mark--3 {
                margin-left: 110px
            }

            .header__subtitle,
            .footer__subtitle {
                padding-right: 60%
            }

            .header__list:after {
                bottom: -200px;
                width: 210px;
                height: 364px;
                background: url("../img/xprod-1__md.png,qv1.pagespeed.ic.3M_9RRYO_9.webp") no-repeat
            }

            .footer__list:after {
                bottom: -60px;
                left: 70%
            }

            .header .btn::before {
                position: absolute;
                top: -30px;
                right: -30px;
                z-index: 20;
                width: 101px;
                height: 116px;
                content: '';
                background: url("../img/xbtn_decor.png.pagespeed.ic.T4vN6gp1_B.webp");
                -webkit-transition: top .3s;
                -o-transition: top .3s;
                transition: top .3s
            }

            .header .btn:hover::before {
                top: -25px
            }

            .composition__section {
                padding-top: 30px
            }

            .composition__section:after {
                position: absolute;
                top: -90px;
                left: 300px;
                width: 600px;
                height: 452px;
                content: '';
                background: url("../img/composition__decor.png")
            }

            .composition__list--wrapper::before {
                width: 600px;
                height: 600px;
                top: 70%
            }

            .composition__list--wrapper:after {
                width: 600px;
                height: 600px;
                top: 73%
            }

            .composition__item {
                margin-bottom: 30px
            }

            .composition__item--1 {
                padding-left: 380px
            }

            .composition__item--1::before,
            .composition__item--1:after {
                bottom: 20px
            }

            .composition__item--2 {
                padding-left: 50px;
                margin: -40px 0 40px
            }

            .composition__item--2::before,
            .composition__item--2:after {
                right: 207px
            }

            .composition__item--3 {
                padding-left: 230px;
                margin: -40px 0 40px
            }

            .composition__item--3::before,
            .composition__item--3:after {
                left: 207px
            }

            .composition__item--4::before,
            .composition__item--4:after {
                right: 290px
            }

            .composition__item--5 {
                padding-left: 280px
            }

            .composition__item--5::before,
            .composition__item--5:after {
                left: 290px
            }

            .composition__img {
                width: 150px
            }

            .composition__name {
                width: 132px;
                font-size: 18px;
                top: 0;
                padding-left: 10px
            }

            .composition__name--3 {
                top: 4px;
                left: 3px
            }

            .composition__name--4 {
                top: 2px;
                left: -9px
            }

            .composition__name--5 {
                width: 150px
            }

            .steps__section:after {
                position: absolute;
                top: -90px;
                right: 0;
                width: 601px;
                height: 260px;
                content: '';
                background: url("../img/steps_decor.png")
            }

            .research__title {
                padding-right: 20%;
                padding-left: 20%
            }

            .research__decor-man {
                bottom: 40px;
                width: 804px;
                height: 516px
            }

            .research__decor-target--1 {
                top: 60px;
                left: 295px
            }

            .research__decor-target--2 {
                top: 110px;
                left: 420px
            }

            .research__decor-target--3 {
                top: 275px;
                left: 150px
            }

            .research__decor-target--4 {
                top: 300px;
                left: 450px
            }

            .research__decor-target--5 {
                top: 300px;
                left: 550px
            }

            .benefit__title {
                padding-right: 10%;
                padding-left: 10%
            }

            .changes {
                margin-bottom: 60px
            }

            .changes__title {
                margin-bottom: 60px
            }

            .changes__item {
                width: 540px
            }

            .advantages {
                margin-bottom: 60px
            }

            .advantages__decor {
                display: block
            }

            .advantages__decor-man {
                position: absolute;
                top: 0;
                left: -140px;
                z-index: 10
            }

            .order {
                margin-bottom: 60px
            }

            .order__section:after {
                top: -200px;
                right: 100%;
                left: inherit;
                width: 802px;
                height: 880px;
                margin-right: -200px;
                background: url("../img/xorder_decor-xl.png.pagespeed.ic.u40usmOSOq.webp")
            }

            .order__section::before {
                position: absolute;
                top: 150px;
                left: 160px;
                width: 929px;
                height: 284px;
                content: '';
                background: url("../img/xleaves1.png.pagespeed.ic.bZT31wdUz9.webp")
            }

            .order__item:first-child:after {
                right: -120px;
                bottom: 60px;
                left: inherit;
                display: block;
                -webkit-transform: rotate(-90deg) scale(-1, 1);
                -ms-transform: rotate(-90deg) scale(-1, 1);
                transform: rotate(-90deg) scale(-1, 1)
            }

            .order__item:nth-child(2):after {
                right: -120px;
                bottom: 60px;
                left: inherit;
                display: block;
                -webkit-transform: rotate(-90deg) scale(-1, 1);
                -ms-transform: rotate(-90deg) scale(-1, 1);
                transform: rotate(-90deg) scale(-1, 1)
            }

            .order__decor--cloud-2 {
                left: 440px
            }

            .order__decor--cloud-3 {
                left: 760px
            }

            .instruction {
                margin-bottom: 60px
            }

            .instruction__item {
                width: 360px
            }

            .result__section::before {
                position: absolute;
                top: -50px;
                right: -300px;
                width: 894px;
                height: 867px;
                content: '';
                background: url("../img/xresult.png.pagespeed.ic.u_6JjSB3eJ.webp")
            }

            .result__diagram {
                width: 760px
            }

            .expert__section:after {
                right: 90px
            }

            .reviews {
                margin-bottom: 60px
            }

            .reviews__section {
                padding-top: 90px
            }

            .reviews__title {
                margin-bottom: 60px
            }

            .reviews__item {
                width: 360px
            }

            .footer__section:after {
                top: 0;
                left: -90px;
                width: 1375px;
                height: 771px;
                background: url("../img/xfooter__lg.png.pagespeed.ic.-HbvALXkpJ.webp")
            }

            .footer__subtitle {
                padding-right: 40%
            }
        }

        .b-note {
            font-size: 13px;
            text-align: center;
            padding: 0 15px;
            margin-top: 15px;
            color: #888
        }
    </style>
    <script
        src="js/jquery.bxslider.min.js+spincrement.min.js+jquery.matchHeight-min.js.pagespeed.jc.D8ClGCWUqd.js"></script>
    <script>eval(mod_pagespeed_Z7M_rn6v8i);</script>
    <script>eval(mod_pagespeed_0PglQi6VRk);</script>
    <script>eval(mod_pagespeed_CuZZynTcKB);</script>
    <script src="js/main.js.pagespeed.jm.uks9dLgU1Q.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><\/script>'); }</script>
    <script>var country = 'RO', user_country = 'UA', lang = 'ro',  tmp_data_to_server = '/', tmp_data_request_id = '2bf2bc7cf03e6afe88eb7c24f7536728', country_list = { "BG": { "s1": 75, "s2": 0, "s3": 75, "s4": 150, "discount": "50", "curr": "BGN", "specialfields": [], "campaign": "7222", "company": "43" }, "CY": { "s1": 39, "s2": 0, "s3": 39, "s4": 78, "discount": "50", "curr": "Euro", "specialfields": [], "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E", "campaign": "7222", "company": "43" }, "ES": { "s1": 39, "s2": 0, "s3": 39, "s4": 78, "discount": "50", "curr": "Euro", "specialfields": [], "rekv": "Ruscrea, S.L. Calle.\u003Cbr\u003ERonda de la química 23, planta 2, despacho 2a 46980 paterna Valencia (España)\u003Cbr\u003E", "campaign": "7222", "company": "43" }, "GR": { "s1": 39, "s2": 0, "s3": 39, "s4": 78, "discount": "50", "curr": "Euro", "specialfields": [], "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E", "campaign": "7222", "company": "43" }, "HU": { "s1": 12900, "s2": 0, "s3": 12900, "s4": 25800, "discount": "50", "curr": "HUF", "specialfields": [], "rekv": "© All rights reserved\u003Cbr\u003E2024.\u003Cbr\u003E", "campaign": "7222", "company": "43" }, "IT": { "s1": 39, "s2": 0, "s3": 39, "s4": 78, "discount": "50", "curr": "Euro", "specialfields": [], "rekv": "BioPro s.n.s.\u003Cbr\u003EVia Michelangelo Buonarroti, 9, ufficio 12, 20149 Milano MI, Italia\u003Cbr\u003E", "campaign": "7222", "company": "43" }, "PT": { "s1": 39, "s2": 0, "s3": 39, "s4": 78, "discount": "50", "curr": "Euro", "specialfields": [], "rekv": "Ruscrea, S.L. Calle.\u003Cbr\u003ERonda de la química 23, planta 2, despacho 2a 46980 paterna Valencia (España)\u003Cbr\u003E", "campaign": "7222", "company": "43" }, "RO": { "s1": 149, "s2": 0, "s3": 149, "s4": 298, "discount": "50", "curr": "RON", "specialfields": [], "campaign": "7222", "company": "43" } }; var list_of_parameters = { "language": "ro", "offer_id": "8289", "landing": "23242", "campaign": "7222", "order_source": "1", "request_id": "2bf2bc7cf03e6afe88eb7c24f7536728" }; var action_url = 'https://trackerlead.biz/'; var source_popup_operator = '13'; var source_popup_out = '12'; var isJsonEnable = false; var text_item_is_free = 'gratuit'; var KMAText = { 'validation_name': 'Se specifică numele corect.', 'validation_phone1': 'Numărul de telefon pe poate conține doar cifre, \"+\", \"-\", \"(\", \")\" și spații.', 'validation_phone2': 'Telefonul dvs. este un număr prea mic.', 'validation_phone3': 'Telefonul tău prea multe cifre.', 'comebacker_text': 'ATENȚIE' };</script>
    <script src="js/custom-functions2.min.js" defer=""></script>
    <script>$(function () { KMA.initCallback(30000); KMA.initComebacker(0); KMA.checkAndSetCountryField(country); KMA.changeDataCountry(country); KMA.changeDataNotCountry(country); KMA.validateAndSendForm(isJsonEnable, KMAText); });</script>
    <script data-pagespeed-no-defer="">(function () {
            function f(a, b, d) { if (a.addEventListener) a.addEventListener(b, d, !1); else if (a.attachEvent) a.attachEvent("on" + b, d); else { var c = a["on" + b]; a["on" + b] = function () { d.call(this); c && c.call(this) } } }; window.pagespeed = window.pagespeed || {}; var g = window.pagespeed; function k(a) { this.g = []; this.f = 0; this.h = !1; this.j = a; this.i = null; this.l = 0; this.b = !1; this.a = 0 } function l(a, b) { var d = b.getAttribute("data-pagespeed-lazy-position"); if (d) return parseInt(d, 0); var d = b.offsetTop, c = b.offsetParent; c && (d += l(a, c)); d = Math.max(d, 0); b.setAttribute("data-pagespeed-lazy-position", d); return d }
            function m(a, b) {
                var d, c, e; if (!a.b && (0 == b.offsetHeight || 0 == b.offsetWidth)) return !1; a: if (b.currentStyle) c = b.currentStyle.position; else { if (document.defaultView && document.defaultView.getComputedStyle && (c = document.defaultView.getComputedStyle(b, null))) { c = c.getPropertyValue("position"); break a } c = b.style && b.style.position ? b.style.position : "" } if ("relative" == c) return !0; e = 0; "number" == typeof window.pageYOffset ? e = window.pageYOffset : document.body && document.body.scrollTop ? e = document.body.scrollTop : document.documentElement &&
                    document.documentElement.scrollTop && (e = document.documentElement.scrollTop); d = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight; c = e; e = e + d; var h = b.getBoundingClientRect(); h ? (e = h.top - d, c = h.bottom) : (h = l(a, b), d = h + b.offsetHeight, e = h - e, c = d - c); return e <= a.f && 0 <= c + a.f
            }
            k.prototype.m = function (a) {
                p(a); var b = this; window.setTimeout(function () {
                    var d = a.getAttribute("data-pagespeed-lazy-src"); if (d) if ((b.h || m(b, a)) && -1 != a.src.indexOf(b.j)) {
                        var c = a.parentNode, e = a.nextSibling; c && c.removeChild(a); a.c && (a.getAttribute = a.c); a.removeAttribute("onload"); a.tagName && "IMG" == a.tagName && g.CriticalImages && f(a, "load", function () { g.CriticalImages.checkImageForCriticality(this); b.b && (b.a--, 0 == b.a && g.CriticalImages.checkCriticalImages()) }); a.removeAttribute("data-pagespeed-lazy-src"); a.removeAttribute("data-pagespeed-lazy-replaced-functions");
                        c && c.insertBefore(a, e); if (c = a.getAttribute("data-pagespeed-lazy-srcset")) a.srcset = c, a.removeAttribute("data-pagespeed-lazy-srcset"); a.src = d
                    } else b.g.push(a)
                }, 0)
            }; k.prototype.loadIfVisibleAndMaybeBeacon = k.prototype.m; k.prototype.s = function () { this.h = !0; q(this) }; k.prototype.loadAllImages = k.prototype.s; function q(a) { var b = a.g, d = b.length; a.g = []; for (var c = 0; c < d; ++c)a.m(b[c]) } function t(a, b) { return a.a ? null != a.a(b) : null != a.getAttribute(b) }
            k.prototype.u = function () { for (var a = document.getElementsByTagName("img"), b = 0, d; d = a[b]; b++)t(d, "data-pagespeed-lazy-src") && p(d) }; k.prototype.overrideAttributeFunctions = k.prototype.u; function p(a) { t(a, "data-pagespeed-lazy-replaced-functions") || (a.c = a.getAttribute, a.getAttribute = function (a) { "src" == a.toLowerCase() && t(this, "data-pagespeed-lazy-src") && (a = "data-pagespeed-lazy-src"); return this.c(a) }, a.setAttribute("data-pagespeed-lazy-replaced-functions", "1")) }
            g.o = function (a, b) {
                function d() { if (!(c.b && a || c.i)) { var b = 200; 200 < (new Date).getTime() - c.l && (b = 0); c.i = window.setTimeout(function () { c.l = (new Date).getTime(); q(c); c.i = null }, b) } } var c = new k(b); g.lazyLoadImages = c; f(window, "load", function () { c.b = !0; c.h = a; c.f = 200; if (g.CriticalImages) { for (var b = 0, d = document.getElementsByTagName("img"), r = 0, n; n = d[r]; r++)-1 != n.src.indexOf(c.j) && t(n, "data-pagespeed-lazy-src") && b++; c.a = b; 0 == c.a && g.CriticalImages.checkCriticalImages() } q(c) }); 0 != b.indexOf("data") && ((new Image).src =
                    b); f(window, "scroll", d); f(window, "resize", d)
            }; g.lazyLoadInit = g.o;
        })();


    </script>
</head>

<body data-lang="RO">
    <div class="wrapper s__main">
        <header class="header">
            <div class="container">
                <div class="header__section">
                    <h1 class="header__title"> Bonengam <span class="header__mark header__mark--1">
                            <script
                                data-pagespeed-no-defer="">(function () { var g = this; function h(b, d) { var a = b.split("."), c = g; a[0] in c || !c.execScript || c.execScript("var " + a[0]); for (var e; a.length && (e = a.shift());)a.length || void 0 === d ? c[e] ? c = c[e] : c = c[e] = {} : c[e] = d }; function l(b) { var d = b.length; if (0 < d) { for (var a = Array(d), c = 0; c < d; c++)a[c] = b[c]; return a } return [] }; function m(b) { var d = window; if (d.addEventListener) d.addEventListener("load", b, !1); else if (d.attachEvent) d.attachEvent("onload", b); else { var a = d.onload; d.onload = function () { b.call(this); a && a.call(this) } } }; var n; function p(b, d, a, c, e) { this.h = b; this.j = d; this.l = a; this.f = e; this.g = { height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight, width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth }; this.i = c; this.b = {}; this.a = []; this.c = {} } function q(b, d) { var a, c, e = d.getAttribute("data-pagespeed-url-hash"); if (a = e && !(e in b.c)) if (0 >= d.offsetWidth && 0 >= d.offsetHeight) a = !1; else { c = d.getBoundingClientRect(); var f = document.body; a = c.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop); c = c.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft); f = a.toString() + "," + c; b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && c <= b.g.width) } a && (b.a.push(e), b.c[e] = !0) } p.prototype.checkImageForCriticality = function (b) { b.getBoundingClientRect && q(this, b) }; h("pagespeed.CriticalImages.checkImageForCriticality", function (b) { n.checkImageForCriticality(b) }); h("pagespeed.CriticalImages.checkCriticalImages", function () { r(n) }); function r(b) { b.b = {}; for (var d = ["IMG", "INPUT"], a = [], c = 0; c < d.length; ++c)a = a.concat(l(document.getElementsByTagName(d[c]))); if (0 != a.length && a[0].getBoundingClientRect) { for (c = 0; d = a[c]; ++c)q(b, d); a = "oh=" + b.l; b.f && (a += "&n=" + b.f); if (d = 0 != b.a.length) for (a += "&ci=" + encodeURIComponent(b.a[0]), c = 1; c < b.a.length; ++c) { var e = "," + encodeURIComponent(b.a[c]); 131072 >= a.length + e.length && (a += e) } b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(t())), 131072 >= a.length + e.length && (a += e), d = !0); u = a; if (d) { c = b.h; b = b.j; var f; if (window.XMLHttpRequest) f = new XMLHttpRequest; else if (window.ActiveXObject) try { f = new ActiveXObject("Msxml2.XMLHTTP") } catch (k) { try { f = new ActiveXObject("Microsoft.XMLHTTP") } catch (v) { } } f && (f.open("POST", c + (-1 == c.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a)) } } } function t() { var b = {}, d = document.getElementsByTagName("IMG"); if (0 == d.length) return {}; var a = d[0]; if (!("naturalWidth" in a && "naturalHeight" in a)) return {}; for (var c = 0; a = d[c]; ++c) { var e = a.getAttribute("data-pagespeed-url-hash"); e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = { rw: a.width, rh: a.height, ow: a.naturalWidth, oh: a.naturalHeight }) } return b } var u = ""; h("pagespeed.CriticalImages.getBeaconData", function () { return u }); h("pagespeed.CriticalImages.Run", function (b, d, a, c, e, f) { var k = new p(b, d, a, e, f); n = k; c && m(function () { window.setTimeout(function () { r(k) }, 0) }) }); })(); pagespeed.CriticalImages.Run('/ngx_pagespeed_beacon',  'Fnob2lbho2', false, false, 'KjXp1xZy32s');</script>
                            <script
                                data-pagespeed-no-defer="">window['pagespeed'] = window['pagespeed'] || {}; var pagespeed = window['pagespeed']; pagespeed.switchToHighResAndMaybeBeacon = function (elem) { setTimeout(function () { elem.onload = null; var srcset = elem.getAttribute('data-pagespeed-high-res-srcset'); if (srcset) { elem.srcset = srcset; } elem.src = elem.getAttribute('data-pagespeed-high-res-src'); if (pagespeed.CriticalImages) { elem.onload = pagespeed.CriticalImages.checkImageForCriticality(elem); } }, 0); };</script>
                            <img data-pagespeed-high-res-src="img/xmark_3.png.pagespeed.ic.sf841gE4Q2.webp"
                                data-pagespeed-url-hash="1454394739" src="img/xmark_3.png.pagespeed.ic.sf841gE4Q2.webp"
                                onload="pagespeed.switchToHighResAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);">
                        </span><span class="header__mark header__mark--2"><img
                                data-pagespeed-high-res-src="img/xmark_2.png.pagespeed.ic.nDpIRAyynJ.webp"
                                data-pagespeed-url-hash="1159894818" src="img/xmark_2.png.pagespeed.ic.nDpIRAyynJ.webp"
                                onload="pagespeed.switchToHighResAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);"></span><span
                            class="header__mark header__mark--3"><img
                                data-pagespeed-high-res-src="img/xmark_1.png.pagespeed.ic.Zd5k4eMgJx.webp"
                                data-pagespeed-url-hash="865394897" src="img/xmark_1.png.pagespeed.ic.Zd5k4eMgJx.webp"
                                onload="pagespeed.switchToHighResAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);"></span></h1>
                    <h2 class="header__subtitle"> Produs cu efect demonstrat pentru noile victorii </h2>
                    <ul class="header__list">
                        <li class="header__item"> Ajutor eficient în caz de suprasolicitare a mușchilor și
                            articulațiilor </li>
                        <li class="header__item"> Elimină disconfortul și îmbunătățește mobilitatea </li>
                        <li class="header__item"> Formulă fortificată pentru sportivi </li>
                    </ul>
                    <div class="header__btn"><a class="btn pre_toform" href="#"><span> plasează o comandă </span></a>
                    </div>
                </div>
            </div>
        </header>
        <section class="problem">
            <div class="container">
                <div class="problem__section">
                    <h3 class="problem__title" data-horizontal="1" data-unshow=""><span> Durerea stă în </span><br>
                        drumul tău
                        spre perfecțiune? </h3>
                    <ul class="problem__list">
                        <li class="problem__item" data-unshow="">
                            <div class="problem__icon">
                                <svg>
                                    <use href="#arrow"></use>
                                </svg>
                            </div>
                            <div class="problem__name"> Tensiunile </div>
                            <div class="problem__text"> apar atunci când solicitările sunt prea mari sau când
                                exercițiile sunt
                                executate greșit </div>
                        </li>
                        <li class="problem__item" data-unshow="">
                            <div class="problem__icon">
                                <svg>
                                    <use href="#target"></use>
                                </svg>
                            </div>
                            <div class="problem__name"> Artroză articulară </div>
                            <div class="problem__text"> când apare artroza articulară, articulația se deformează și
                                mișcările
                                obișnuite devin dureroase </div>
                        </li>
                        <li class="problem__item" data-unshow="">
                            <div class="problem__icon">
                                <svg>
                                    <use href="#lightning"></use>
                                </svg>
                            </div>
                            <div class="problem__name"> Umflături, vânătăi, hematoame </div>
                            <div class="problem__text"> aceste tipuri de leziuni nu îți împiedică mișcările, dar îți dau
                                dureri și te
                                fac să te simți inconfortabil </div>
                        </li>
                        <li class="problem__item" data-unshow="">
                            <div class="problem__icon">
                                <svg>
                                    <use href="#sun"></use>
                                </svg>
                            </div>
                            <div class="problem__name"> Dureri musculare după antrenament </div>
                            <div class="problem__text"> senzația de disconfort după ce faci sport poate fi normală, dar
                                uneori durerea
                                devine mai intensă, deoarece neglijezi încălzirea </div>
                        </li>
                        <li class="problem__item" data-unshow="">
                            <div class="problem__icon">
                                <svg>
                                    <use href="#pulse"></use>
                                </svg>
                            </div>
                            <div class="problem__name"> Recuperare pe termen lung după o accidentare </div>
                            <div class="problem__text"> oamenii subestimează adesea gravitatea accidentărilor pe care le
                                suferă și le
                                neglijează, ceea ce face ca procesul de recuperare să dureze mai mult </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="composition">
            <div class="container">
                <div class="composition__section">
                    <h3 class="composition__title" data-horizontal="1" data-unshow=""><span> Eficientă </span><br>
                        compoziție de
                        combatere a durerii </h3>
                    <div class="composition__list--wrapper">
                        <ul class="composition__list">
                            <li class="composition__item composition__item--1" data-unshow="">
                                <div class="composition__img"><img data-pagespeed-url-hash="3008162903"
                                        src="img/xcomposition_33.png.pagespeed.ic.tbyD6c1PHy.webp"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                </div>
                                <div class="composition__name composition__name--1"> Ulei de eucalipt </div>
                            </li>
                            <li class="composition__item composition__item--2" data-unshow="">
                                <div class="composition__img"><img data-pagespeed-url-hash="3446730719"
                                        src="img/xcomposition_55.png.pagespeed.ic.bwKJ9fNRUC.webp"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                </div>
                                <div class="composition__name composition__name--2"> Ulei de rozmarin </div>
                            </li>
                            <li class="composition__item composition__item--3" data-unshow="">
                                <div class="composition__img"><img data-pagespeed-url-hash="2788878995"
                                        src="img/xcomposition_22.png.pagespeed.ic.4FFkz38cdh.webp"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                </div>
                                <div class="composition__name composition__name--3"> Ulei de mentă </div>
                            </li>
                            <li class="composition__item composition__item--4" data-unshow="">
                                <div class="composition__img"><img data-pagespeed-url-hash="2569595087"
                                        src="img/xcomposition_11.png.pagespeed.ic.ns0hYBwj_f.webp"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                </div>
                                <div class="composition__name composition__name--4"> Extract de propolis </div>
                            </li>
                            <li class="composition__item composition__item--5" data-unshow="">
                                <div class="composition__img"><img data-pagespeed-url-hash="3227446811"
                                        src="img/xcomposition_44.png.pagespeed.ic.H7Vpm8vF3q.webp"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                </div>
                                <div class="composition__name composition__name--5"> Extract de fructe de capsicum
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="steps">
            <div class="container">
                <div class="steps__section">
                    <ul class="steps__list">
                        <li class="steps__item" data-unshow="1">
                            <div class="steps__name"> Primul pas </div>
                            <div class="steps__text"><span> Calmarea </span> tensiunilor </div>
                        </li>
                        <li class="steps__item" data-unshow="2">
                            <div class="steps__name"> Al doilea pas </div>
                            <div class="steps__text"> Efect puternic <span> de ameliorare a </span> durerii </div>
                        </li>
                        <li class="steps__item" data-unshow="3">
                            <div class="steps__name"> Al treilea pas </div>
                            <div class="steps__text"> Refacerea <span> rapidă </span> a structurii articulare
                                deteriorate </div>
                        </li>
                        <li class="steps__item" data-unshow="4">
                            <div class="steps__name"> Al patrulea pas </div>
                            <div class="steps__text"> Prevenirea <span> eficientă a </span> noilor accidentări </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="research">
            <div class="container">
                <div class="research__section">
                    <h3 class="research__title" data-horizontal="1" data-unshow=""> Când se examinează articulațiile
                        sportivilor
                        profesioniști, se dovedește că <span> acestea arată cu 10-20 de ani mai uzate </span> decât
                        vârsta biologică
                    </h3>
                    <div class="research__content--wrapper" data-unshow="">
                        <div class="research__content">
                            <div class="research__text"> Antrenamentele intense <span> uzează rapid
                                    articulațiile</span>. Stratul de
                                protecție se erodează, iar suprasolicitarea excesivă, loviturile și accidentările <span>
                                    cauzează
                                    artroză</span>. </div>
                            <div class="img research__img"><img data-pagespeed-url-hash="122226617" src="img/research.png"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </div>
                        </div>
                    </div>
                    <div class="research__decor">
                        <div class="research__decor-man"><img data-pagespeed-url-hash="1002804070"
                                src="img/xman.png.pagespeed.ic.Lw2xkUY4Jo.webp"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"><span
                                class="research__decor-target research__decor-target--1"><span></span></span><span
                                class="research__decor-target research__decor-target--2"><span></span></span><span
                                class="research__decor-target research__decor-target--3"><span></span></span><span
                                class="research__decor-target research__decor-target--4"><span></span></span><span
                                class="research__decor-target research__decor-target--5"><span></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefit">
            <div class="container">
                <div class="benefit__section">
                    <h3 class="benefit__title" data-horizontal="1" data-unshow=""> Oamenii de știință au petrecut 10 ani
                        lucrând
                        la <span> un remediu eficient pentru refacerea articulațiilor</span>, care să fie potrivit
                        pentru o
                        regenerare intensă </h3>
                    <h4 class="benefit__subtitle" data-horizontal="2" data-unshow=""> Datorită formulei sale unice,
                        Bonengam
                    </h4>
                    <div class="benefit__content--wrapper" data-unshow="">
                        <div class="benefit__content">
                            <ul class="benefit__list">
                                <li class="benefit__item"><span> Echilibrează </span> secreția de lichid la nivelul
                                    articulației </li>
                                <li class="benefit__item"><span> Reface </span> țesutul cartilaginos deteriorat </li>
                                <li class="benefit__item"><span> Tratează </span> articulațiile uzate și are efect
                                    preventiv </li>
                                <li class="benefit__item"><span> Împiedică </span> leziunile viitoare și erodarea </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="changes">
            <div class="container">
                <div class="changes__section">
                    <h3 class="changes__title" data-horizontal="1" data-unshow=""> Iată cum arată articulațiile
                        <br><span> înainte
                            și după utilizarea Bonengam </span></h3>
                    <ul class="changes__list slider">
                        <li class="changes__item" data-unshow="">
                            <div class="changes__content--wrapper">
                                <div class="changes__content" style="height: 568px;">
                                    <div class="changes__img"><img src="img/xchanges_1.jpg.pagespeed.ic.Qd_Q4U16yl.webp"
                                            data-pagespeed-url-hash="708741933"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></div>
                                    <div class="changes__info">
                                        <div class="changes__table">
                                            <div class="changes__cell">
                                                <div class="changes__ava"><img
                                                        src="img/xchanges-ava_1.jpg.pagespeed.ic.HhHfssovor.webp"
                                                        data-pagespeed-url-hash="2781187616"
                                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </div>
                                            </div>
                                            <div class="changes__cell">
                                                <div class="changes__name"> Alexandru Ioniță </div>
                                                <div class="changes__age"> Vârstă: 25 de ani </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="changes__text"> Atlet, campion la alergare pe distanțe lungi </div>
                                </div>
                            </div>
                        </li>
                        <li class="changes__item" data-unshow="">
                            <div class="changes__content--wrapper">
                                <div class="changes__content" style="height: 568px;">
                                    <div class="changes__img"><img src="img/xchanges_2.jpg.pagespeed.ic.Cp_cFvcCn1.webp"
                                            data-pagespeed-url-hash="1003241854"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></div>
                                    <div class="changes__info">
                                        <div class="changes__table">
                                            <div class="changes__cell">
                                                <div class="changes__ava"><img
                                                        src="img/xchanges-ava_2.jpg.pagespeed.ic.iMMaamateO.webp"
                                                        data-pagespeed-url-hash="3075687537"
                                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                </div>
                                            </div>
                                            <div class="changes__cell">
                                                <div class="changes__name"> MIHAI Andreescu </div>
                                                <div class="changes__age"> Vârstă: 47 de ani </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="changes__text"> Vânzător de pantofi </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="advantages">
            <div class="container">
                <div class="advantages__section">
                    <h3 class="advantages__title" data-horizontal="1" data-unshow=""><span> Caracteristici <br>
                            Bonengam </span>
                    </h3>
                    <ul class="advantages__list">
                        <li class="advantages__item" data-unshow="1">
                            <div class="advantages__icon advantages__icon--1" style="height: 103px;"><img
                                    data-pagespeed-url-hash="1395402596"
                                    src="img/xadvantages_1.png.pagespeed.ic.vh3pffEk93.webp"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </div>
                            <div class="advantages__name"> Rapid </div>
                            <div class="advantages__text"> Ameliorează durerea rapid, accelerează procesul de regenerare
                                a țesuturilor
                            </div>
                        </li>
                        <li class="advantages__item" data-unshow="2">
                            <div class="advantages__icon advantages__icon--2" style="height: 103px;"><img
                                    data-pagespeed-url-hash="1689902517"
                                    src="img/xadvantages_2.png.pagespeed.ic.6RZgttqM2Y.webp"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </div>
                            <div class="advantages__name"> Puternic </div>
                            <div class="advantages__text"> Ameliorează durerea localizată în orice parte a corpului
                            </div>
                        </li>
                        <li class="advantages__item" data-unshow="3">
                            <div class="advantages__icon advantages__icon--3" style="height: 78px;"><img
                                    data-pagespeed-url-hash="1984402438"
                                    src="img/xadvantages_3.png.pagespeed.ic.xnnIcyu1Zz.webp"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </div>
                            <div class="advantages__name"> Unic </div>
                            <div class="advantages__text"> Combinație de componente active fără egal </div>
                        </li>
                        <li class="advantages__item" data-unshow="4">
                            <div class="advantages__icon advantages__icon--4" style="height: 78px;"><img
                                    data-pagespeed-url-hash="2278902359"
                                    src="img/xadvantages_4.png.pagespeed.ic.xhndRjp1h2.webp"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </div>
                            <div class="advantages__name"> Protecție </div>
                            <div class="advantages__text"> Ajută la încălzirea dinaintea antrenamentului, previne
                                durerea și
                                accidentările viitoare </div>
                        </li>
                    </ul>
                    <div class="advantages__form">
                        <div class="form">
                            <div class="form__content--wrapper">
                                <div class="form__content">
                                    <h3 class="form__title"> Plasează o comandă <span> și primește&nbsp;o </span></h3>
                                    <div class="form__discount"><span> <span style="padding: 0;"
                                                class="price_land_discount">50</span>% </span></div>
                                    <div class="price form__price">
                                        <div class="price__new"><span class="js_new_price">
                                                <x-newprice><span class="price_land_s1">149</span></x-newprice>
                                            </span>
                                            <x-currency><span class="price_land_curr">RON</span></x-currency>
                                        </div>
                                        <div class="price__old"><span class="js_old_price">
                                                <x-oldprice><span class="price_land_s4">298</span></x-oldprice>
                                            </span>
                                            <x-currency><span class="price_land_curr">RON</span></x-currency>
                                        </div>
                                    </div>
                                    <form action="getform.php" id="order_form" method="POST">
                                        <input type="hidden" name="utm_source" value="<?=$_GET['cid']?>">
<input type="hidden" name="utm_campaign" value="{domonetka}">

                                        <div class="form__inp">
                                            <select name="country" class="country_select"
                                                style="display: none !important">
                                                <option value="BG">Bulgaria</option>
                                                <option value="CY">Cipru</option>
                                                <option value="ES">Spania</option>
                                                <option value="GR">Grecia</option>
                                                <option value="HU">Ungaria</option>
                                                <option value="IT">Italia</option>
                                                <option value="PT">Portugalia</option>
                                                <option value="RO" selected="">România</option>
                                            </select>
                                        </div>
                                        <div class="form__inp">
                                            <input name="name" placeholder="Nume" type="text" oldvalue=""
                                                data-scrapbook-input-value="">
                                        </div>
                                        <div class="form__inp">
                                            <input class="only_number" name="phone" placeholder="+40 000 00 00 00"
                                                type="tel" autocomplete="new-password" required="required"
                                                onclick="(function(event){if (!event.target.value.length){event.target.value='+40';}})(event)"
                                                oninput="(function(event){if (event.target.value.length < 3){event.target.value='+40';}})(event)"
                                                onkeypress="if (event.keyCode < 48 || event.keyCode > 57) {event.returnValue=false;}"
                                                value="+40" pattern="^\+?\d{11,12}$" maxlength="13"
                                                style="background-image: url(../img/ro.png);" oldvalue="+40">
                                        </div>
                                        <button class="btn " type="submit"><span class="button__text"> Plasează o
                                                comandă </span></button>
                                        <div class="b-note"> * Atrageti atentia, taxa TVA se poate schimba in functie de
                                            tara, in care
                                            faceti comanda pentru produsele noastre. </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="advantages__decor">
                            <div class="advantages__decor-man"><img data-pagespeed-url-hash="2868205373"
                                    src="img/xman_2.png.pagespeed.ic.oHUTPHFYKk.webp"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="order">
            <div class="container">
                <div class="order__section">
                    <h3 class="order__title" data-horizontal="1" data-unshow=""><span> Pași spre <br> succes </span>
                    </h3>
                    <ul class="order__list">
                        <li class="order__item" data-unshow="1">
                            <div class="order__icon order__icon--1"><span></span></div>
                            <div class="order__name"> Plasează o comandă </div>
                            <div class="order__text"> completând formularul din partea de jos a paginii </div>
                        </li>
                        <li class="order__item" data-unshow="2">
                            <div class="order__icon order__icon--2"><span></span></div>
                            <div class="order__name"> Așteaptă până te sună un operator </div>
                            <div class="order__text"> pentru a stabili detaliile </div>
                        </li>
                        <li class="order__item" data-unshow="3">
                            <div class="order__icon order__icon--3"><span></span></div>
                            <div class="order__name"> Primești coletul </div>
                            <div class="order__text"> la adresa indicată </div>
                        </li>
                    </ul>
                    <div class="order__decor">
                        <div class="order__decor--cloud-1"><img data-pagespeed-url-hash="3026097964"
                                src="img/order_decor-1.png"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                        </div>
                        <div class="order__decor--cloud-2"><img data-pagespeed-url-hash="3320597885"
                                src="img/order_decor-2.png"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                        </div>
                        <div class="order__decor--cloud-3"><img data-pagespeed-url-hash="3026097964"
                                src="img/order_decor-1.png"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="instruction">
            <div class="container">
                <div class="instruction__section">
                    <h3 class="instruction__title" data-horizontal="1" data-unshow=""><span> Cum se utilizează <br>
                            Bonengam
                        </span></h3>
                    <ul class="instruction__list">
                        <li class="instruction__item" data-unshow="1">
                            <div class="instruction__content--wrapper">
                                <div class="instruction__content">
                                    <div class="instruction__table">
                                        <div class="instruction__cell">
                                            <picture class="img instruction__img">
                                                <img data-pagespeed-url-hash="803083990"
                                                    src="img/xinstruction-1.jpg.pagespeed.ic.V9mCFpnCSy.webp"
                                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                            </picture>
                                        </div>
                                        <div class="instruction__cell">
                                            <p class="instruction__text"><span> Aplică </span> o cantitate mică de cremă
                                                pe zona afectată </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="instruction__item" data-unshow="2">
                            <div class="instruction__content--wrapper">
                                <div class="instruction__content">
                                    <div class="insruction__table">
                                        <div class="instruction__cell">
                                            <picture class="img instruction__img">
                                                <img data-pagespeed-url-hash="1097583911"
                                                    src="img/xinstruction-2.jpg.pagespeed.ic.YNb3BNrkkt.webp"
                                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                            </picture>
                                        </div>
                                        <div class="instruction__cell">
                                            <p class="instruction__text"> Masează <span> până când crema </span> este
                                                absorbit în piele </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="instruction__item" data-unshow="3">
                            <div class="instruction__content--wrapper">
                                <div class="instruction__content">
                                    <div class="insruction__table">
                                        <div class="instruction__cell">
                                            <picture class="img instruction__img">
                                                <img data-pagespeed-url-hash="1392083832"
                                                    src="img/xinstruction-3.jpg.pagespeed.ic.ZIqolWIcAV.webp"
                                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                            </picture>
                                        </div>
                                        <div class="instruction__cell">
                                            <div class="instruction__text"><span> Dacă este necesar</span>, aplică din
                                                nou </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="instruction__note" data-horizontal="2" data-unshow=""> Frecvența aplicării depinde de
                        scopul
                        utilizării: ameliorarea durerii, prevenirea afecțiunilor, încălzirea mușchilor înainte de
                        antrenament </div>
                </div>
            </div>
        </section>
        <section class="result">
            <div class="container">
                <div class="result__section">
                    <h3 class="result__title" data-horizontal="1" data-unshow=""> Cele mai bune rezultate <br><span> ale
                            studiilor
                            clinice </span></h3>
                    <h4 class="result__subtitle" data-horizontal="2" data-unshow=""> La studiu au participat 2 cluburi
                        de fotbal,
                        4 săli de sport și 2 clinici de îngrijire ambulatorie</h4>
                    <div class="result__list--wrapper" data-unshow="">
                        <ul class="result__list">
                            <li class="result__item">
                                <div class="result__icon result__icon--1"></div>
                                <div class="result__name"> Durata studiului </div>
                                <div class="result__value"><i> 6 </i><span> luni </span></div>
                            </li>
                            <li class="result__item">
                                <div class="result__icon result__icon--2"></div>
                                <div class="result__name"> Numărul de participanți </div>
                                <div class="result__value"><i> 4572 </i></div>
                                <div class="result__text"> sportivi, instructori și pacienți care sunt în perioada de
                                    recuperare după ce
                                    au suferit accidentări </div>
                            </li>
                            <li class="result__item">
                                <div class="result__icon result__icon--3"></div>
                                <div class="result__name"> Vârsta participanților </div>
                                <div class="result__value"><i> 30 </i> – <i> 70 </i><span> ani </span></div>
                                <div class="result__text"> 4160 dintre ei au sau au avut probleme articulare și
                                    musculare </div>
                            </li>
                        </ul>
                    </div>
                    <div class="result__diagram">
                        <div class="result__diagram--text"><span> pacienți </span> s-au recuperat complet sau starea lor
                            s-a
                            îmbunătățit semnificativ </div>
                        <div class="result__diagram--img"><span class="result__diagram--img-caption-1"> 90.78%
                            </span><img data-pagespeed-url-hash="3116781551"
                                src="img/xdiagram.png.pagespeed.ic.f1yGZE8Rvu.webp"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"><span
                                class="result__diagram--img-caption-2"> 9.22% </span></div>
                        <div class="result__diagram--text"><span> pacienți </span> au simțit o îmbunătățire
                            nesemnificativă a
                            stării lor sau nu au observat nicio schimbare </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="expert">
            <div class="container">
                <div class="expert__section">
                    <p class="expert__text" data-unshow=""> Sportivii sunt cei mai frecvenți clienți ai sălilor de
                        recuperare
                        fizică terapeutică și de fizioterapie. Ei prezintă leziuni cu diferite grade de severitate care
                        pot fi
                        împărțite în două grupuri: leziuni musculare și leziuni articulare. Rupturi, întinderi, artroză
                        cronică. Nu
                        poți evita riscurile dacă nu te protejezi la timp. </p>
                    <div class="expert__desc" data-unshow=""> Bonengam este un produs unic, care ameliorează rapid
                        durerea,
                        funcționează ca un anestezic și are efect terapeutic pe termen lung, ajutând la restabilirea
                        țesutului
                        cartilaginos. </div>
                    <p class="expert__text" data-unshow=""> Chiar dacă crema a fost inițial conceput pentru sportivii de
                        performanță, îl recomand pacienților mei care nu au nicio legătură cu sportul. Toate
                        ingredientele din
                        formula Bonengam sunt sigure și naturale. </p>
                    <p class="expert__text" data-unshow=""> Folosesc cu succes acest cremă în practică. </p>
                    <p class="expert__text" data-unshow=""> Mențineți-vă sănătatea! </p>
                    <div class="expert__info--wrapper" data-horizontal="2" data-unshow="">
                        <div class="expert__info">
                            <div class="expert__name"> Vlad Ionescu </div>
                            <div class="expert__position"> Directorul grupului de recuperare fizică </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <div class="reviews__section">
                    <h3 class="reviews__title" data-horizontal="2" data-unshow=""> Nimic nu i-a oprit din drumul spre
                        victorie
                        <br><span> cu Bonengam </span>
                    </h3>
                    <ul class="reviews__list">
                        <li class="reviews__item" data-unshow="1">
                            <div class="reviews__content--wrapper">
                                <div class="reviews__content" style="height: 445px;">
                                    <div class="reviews__info">
                                        <div class="reviews__table">
                                            <div class="reviews__cell">
                                                <div class="reviews__ava"><img data-pagespeed-url-hash="2560697196"
                                                        src="img/xreview_1.jpg.pagespeed.ic.ZDrA7wKe9B.webp"
                                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                                </div>
                                            </div>
                                            <div class="reviews__cell">
                                                <div class="reviews__name"> Adrian </div>
                                                <div class="reviews__position"> jucător profesionist de fotbal, 35 de
                                                    ani </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews__text">
                                        <div class="reviews__text--quotes">
                                            <svg>
                                                <use href="#quotes"></use>
                                            </svg>
                                        </div>
                                        <p> Fotbalul este un sport cu risc mare de accidentare. Genunchii, tibiile și
                                            picioarele sunt expuse
                                            riscului. Multe lucruri mi s-au întâmplat în timpul carierei mele de jucător
                                            de fotbal: de la
                                            întinderi musculare până la leziuni ale cartilajului. Nu te poți proteja de
                                            toate, dar Bonengam
                                            este întotdeauna la îndemână atunci când trebuie să mă recuperez. </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="reviews__item" data-unshow="2">
                            <div class="reviews__content--wrapper">
                                <div class="reviews__content" style="height: 445px;">
                                    <div class="reviews__info">
                                        <div class="reviews__table">
                                            <div class="reviews__cell">
                                                <div class="reviews__ava"><img data-pagespeed-url-hash="2855197117"
                                                        src="img/xreview_2.jpg.pagespeed.ic.Oz2UwXmExt.webp"
                                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                                </div>
                                            </div>
                                            <div class="reviews__cell">
                                                <div class="reviews__name"> Natalia </div>
                                                <div class="reviews__position"> profesor de școală primară, 53 de ani
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews__text">
                                        <div class="reviews__text--quotes">
                                            <svg>
                                                <use href="#quotes"></use>
                                            </svg>
                                        </div>
                                        <p> Exercițiile de întindere și gimnastica te ajută să te menții în formă. Dar
                                            unele probleme fizice
                                            nu pot fi vindecate cu ajutorul mișcării. Cu anii, oricum articulațiile
                                            încep să se deterioreze.
                                            Acesta este motivul pentru care folosesc Bonengam. Îl port mereu în geantă
                                            pentru a-l avea la
                                            îndemână. </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="reviews__item" data-unshow="3">
                            <div class="reviews__content--wrapper">
                                <div class="reviews__content" style="height: 445px;">
                                    <div class="reviews__info">
                                        <div class="reviews__table">
                                            <div class="reviews__cell">
                                                <div class="reviews__ava"><img data-pagespeed-url-hash="3149697038"
                                                        src="img/xreview_3.jpg.pagespeed.ic.hdHR4LQr3v.webp"
                                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                                </div>
                                            </div>
                                            <div class="reviews__cell">
                                                <div class="reviews__name"> Max </div>
                                                <div class="reviews__position"> blogger, boxer amator, 42 de ani </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews__text">
                                        <div class="reviews__text--quotes">
                                            <svg>
                                                <use href="#quotes"></use>
                                            </svg>
                                        </div>
                                        <p> Bonengam m-a pus pe picioare în două săptămâni după ce am suferit leziuni
                                            la nivelul gleznei,
                                            deși medicii au spus că va dura chiar și mai mult de o lună pentru a mă
                                            recupera. De atunci, îl
                                            aplic întotdeauna înainte de antrenament - așa mă încălzesc și mă protejez
                                            de alte accidentări.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="footer__section">
                    <h1 class="footer__title" data-horizontal="1" data-unshow=""> Bonengam </h1>
                    <div class="footer__content">
                        <h2 class="footer__subtitle" data-horizontal="2" data-unshow=""> Produs cu efect demonstrat
                            pentru <br> noi
                            victorii </h2>
                        <div class="footer__list">
                            <p class="footer__item" data-unshow="1"> Formula fortificată pentru sportivi </p>
                            <p class="footer__item" data-unshow="2"> Ameliorează durerea localizată în orice parte a
                                corpului </p>
                            <p class="footer__item" data-unshow="3"> Combinație unică de ingrediente naturale de înaltă
                                calitate </p>
                            <p class="footer__item" data-unshow="4"> Accelerează procesul de regenerare a țesuturilor
                            </p>
                        </div>
                    </div>
                    <div class="footer__form">
                        <div class="form" id="form">
                            <div class="form__content--wrapper">
                                <div class="form__content">
                                    <h3 class="form__title"> Plasează acum o comandă <span> și primește&nbsp;o </span>
                                    </h3>
                                    <div class="form__discount"><span> <span style="padding: 0;"
                                                class="price_land_discount">50</span>% </span></div>
                                    <div class="price form__price">
                                        <div class="price__new"><span class="js_new_price">
                                                <x-newprice><span class="price_land_s1">149</span></x-newprice>
                                            </span>
                                            <x-currency><span class="price_land_curr">RON</span></x-currency>
                                        </div>
                                        <div class="price__old"><span class="js_old_price">
                                                <x-oldprice><span class="price_land_s4">298</span></x-oldprice>
                                            </span>
                                            <x-currency><span class="price_land_curr">RON</span></x-currency>
                                        </div>
                                    </div>
                                    <form action="getform.php" id="order_form" method="POST">
                                        <input type="hidden" name="utm_source" value="<?=$_GET['cid']?>">
<input type="hidden" name="utm_campaign" value="{domonetka}">

                                        <div class="form__inp">
                                            <select name="country" class="country_select"
                                                style="display: none !important">
                                                <option value="BG">Bulgaria</option>
                                                <option value="CY">Cipru</option>
                                                <option value="ES">Spania</option>
                                                <option value="GR">Grecia</option>
                                                <option value="HU">Ungaria</option>
                                                <option value="IT">Italia</option>
                                                <option value="PT">Portugalia</option>
                                                <option value="RO" selected="">România</option>
                                            </select>
                                        </div>
                                        <div class="form__inp">
                                            <input name="name" placeholder="Nume" type="text" oldvalue=""
                                                data-scrapbook-input-value="">
                                        </div>
                                        <div class="form__inp">
                                            <input class="only_number" name="phone" placeholder="+40 000 00 00 00"
                                                type="tel" autocomplete="new-password" required="required"
                                                onclick="(function(event){if (!event.target.value.length){event.target.value='+40';}})(event)"
                                                oninput="(function(event){if (event.target.value.length < 3){event.target.value='+40';}})(event)"
                                                onkeypress="if (event.keyCode < 48 || event.keyCode > 57) {event.returnValue=false;}"
                                                value="+40" pattern="^\+?\d{11,12}$" maxlength="13"
                                                style="background-image: url(../img/ro.png);" oldvalue="+40">
                                        </div>
                                        <button class="btn " type="submit"><span class="button__text"> Plasează o
                                                comandă </span></button>
                                        <div class="b-note"> * Atrageti atentia, taxa TVA se poate schimba in functie de
                                            tara, in care
                                            faceti comanda pentru produsele noastre. </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <svg class="sprite" style="position: absolute; top: -10px; left: -10px; width: 1px; height: 1px; opacity: 0;"
            xmlns="http://www.w3.org/2000/svg">
            <linearGradient id="gradient" x1="0%" x2="0%" y1="0%" y2="100%">
                <stop offset="0%" stop-color="#EB005E"></stop>
                <stop offset="50%" stop-color="#F45050"></stop>
                <stop offset="100%" stop-color="#FCA041"></stop>
            </linearGradient>
            <symbol id="arrow" viewBox="0 0 28 28">
                <path
                    d="M-0.000,9.332 L3.111,9.332 L3.111,5.310 L22.689,24.888 L18.667,24.888 L18.667,27.999 L28.000,27.999 L28.000,18.666 L24.889,18.666 L24.889,22.688 L5.311,3.110 L9.333,3.110 L9.333,-0.001 L-0.000,-0.001 L-0.000,9.332 Z"
                    fill-rule="evenodd"></path>
            </symbol>
            <symbol id="target" viewBox="0 0 34 34">
                <path
                    d="M17.000,33.999 C7.611,33.999 -0.000,26.388 -0.000,16.999 C-0.000,7.611 7.611,-0.001 17.000,-0.001 C26.389,-0.001 34.000,7.611 34.000,16.999 C34.000,26.388 26.389,33.999 17.000,33.999 ZM17.000,2.832 C9.176,2.832 2.833,9.175 2.833,16.999 C2.833,24.823 9.176,31.166 17.000,31.166 C24.824,31.166 31.166,24.823 31.166,16.999 C31.166,9.175 24.824,2.832 17.000,2.832 ZM26.917,18.416 L25.382,18.416 C24.784,21.974 21.975,24.783 18.417,25.381 L18.417,26.916 C18.417,27.698 17.782,28.332 17.000,28.332 C16.218,28.332 15.583,27.698 15.583,26.916 L15.583,25.381 C12.025,24.783 9.216,21.974 8.618,18.416 L7.083,18.416 C6.301,18.416 5.667,17.782 5.667,16.999 C5.667,16.217 6.301,15.583 7.083,15.583 L8.618,15.583 C9.216,12.024 12.025,9.214 15.583,8.618 L15.583,7.082 C15.583,6.300 16.218,5.666 17.000,5.666 C17.782,5.666 18.417,6.300 18.417,7.082 L18.417,8.618 C21.975,9.214 24.784,12.024 25.382,15.583 L26.917,15.583 C27.699,15.583 28.333,16.217 28.333,16.999 C28.333,17.782 27.699,18.416 26.917,18.416 ZM21.250,15.583 L22.488,15.583 C21.975,13.592 20.407,12.024 18.417,11.511 L18.417,12.749 C18.417,13.531 17.782,14.166 17.000,14.166 C16.218,14.166 15.583,13.531 15.583,12.749 L15.583,11.511 C13.592,12.024 12.025,13.592 11.512,15.583 L12.750,15.583 C13.532,15.583 14.167,16.217 14.167,16.999 C14.167,17.782 13.532,18.416 12.750,18.416 L11.512,18.416 C12.025,20.406 13.592,21.974 15.583,22.487 L15.583,21.249 C15.583,20.467 16.218,19.833 17.000,19.833 C17.782,19.833 18.417,20.467 18.417,21.249 L18.417,22.487 C20.407,21.974 21.975,20.406 22.488,18.416 L21.250,18.416 C20.467,18.416 19.833,17.782 19.833,16.999 C19.833,16.217 20.467,15.583 21.250,15.583 ZM17.000,18.416 C16.218,18.416 15.583,17.782 15.583,16.999 C15.583,16.217 16.218,15.583 17.000,15.583 C17.782,15.583 18.417,16.217 18.417,16.999 C18.417,17.782 17.782,18.416 17.000,18.416 Z"
                    fill-rule="evenodd"></path>
            </symbol>
            <symbol id="lightning" viewBox="0 0 46 40">
                <path
                    d="M44.652,21.339 L39.803,21.339 C39.059,21.339 38.455,20.739 38.455,20.000 C38.455,19.259 39.059,18.660 39.803,18.660 L44.652,18.660 C45.397,18.660 46.000,19.259 46.000,20.000 C46.000,20.739 45.397,21.339 44.652,21.339 ZM34.499,39.819 C33.854,40.189 33.030,39.969 32.659,39.328 L30.234,35.150 C29.862,34.509 30.084,33.689 30.728,33.320 C31.373,32.951 32.197,33.170 32.569,33.811 L34.994,37.990 C35.365,38.631 35.144,39.450 34.499,39.819 ZM32.569,6.187 C32.197,6.828 31.373,7.048 30.728,6.678 C30.084,6.309 29.862,5.490 30.234,4.849 L32.659,0.670 C33.031,0.029 33.855,-0.191 34.499,0.179 C35.144,0.548 35.365,1.367 34.994,2.008 L32.569,6.187 ZM30.246,16.524 C30.330,16.672 30.328,16.853 30.240,16.999 L22.818,30.136 C22.724,30.284 22.555,30.368 22.380,30.354 C22.117,30.335 21.921,30.107 21.941,29.846 L22.765,21.935 L16.652,21.935 C16.565,21.935 16.479,21.911 16.404,21.866 C16.182,21.729 16.112,21.439 16.249,21.218 L23.795,8.079 C23.893,7.930 24.066,7.848 24.244,7.866 C24.506,7.894 24.696,8.126 24.669,8.387 L23.628,16.286 L29.834,16.286 C30.004,16.286 30.162,16.377 30.246,16.524 ZM13.341,39.328 C12.969,39.969 12.145,40.189 11.501,39.819 C10.856,39.450 10.634,38.631 11.006,37.990 L13.431,33.811 C13.803,33.170 14.627,32.951 15.271,33.320 C15.916,33.689 16.138,34.509 15.766,35.150 L13.341,39.328 ZM15.271,6.678 C14.627,7.048 13.803,6.828 13.431,6.187 L11.006,2.008 C10.634,1.367 10.856,0.548 11.501,0.179 C12.145,-0.191 12.970,0.029 13.341,0.670 L15.766,4.849 C16.138,5.490 15.916,6.309 15.271,6.678 ZM6.197,21.339 L1.348,21.339 C0.603,21.339 -0.000,20.739 -0.000,20.000 C-0.000,19.259 0.603,18.660 1.348,18.660 L6.197,18.660 C6.941,18.660 7.544,19.259 7.544,20.000 C7.544,20.739 6.941,21.339 6.197,21.339 Z"
                    fill-rule="evenodd"></path>
            </symbol>
            <symbol id="sun" viewBox="0 0 36 35">
                <path
                    d="M35.614,15.319 L31.858,19.398 C31.158,20.158 31.348,21.164 32.280,21.633 L34.495,22.747 C35.427,23.216 35.374,23.860 34.376,24.176 L29.023,25.879 C28.026,26.196 27.674,27.159 28.241,28.018 L29.589,30.062 C30.156,30.921 29.779,31.453 28.752,31.243 L23.241,30.119 C22.214,29.909 21.414,30.572 21.462,31.592 L21.576,34.011 C21.624,35.031 21.024,35.309 20.242,34.627 L16.048,30.975 C15.266,30.294 14.231,30.478 13.749,31.385 L12.603,33.539 C12.121,34.446 11.459,34.394 11.133,33.423 L9.382,28.220 C9.056,27.249 8.066,26.906 7.183,27.457 L5.080,28.769 C4.197,29.320 3.651,28.953 3.866,27.955 L5.023,22.597 C5.238,21.598 4.557,20.819 3.509,20.866 L1.019,20.977 C-0.029,21.023 -0.314,20.439 0.386,19.680 L4.142,15.600 C4.842,14.840 4.652,13.834 3.720,13.365 L1.505,12.251 C0.573,11.781 0.626,11.139 1.623,10.822 L6.976,9.119 C7.973,8.801 8.325,7.840 7.759,6.980 L6.410,4.936 C5.844,4.077 6.220,3.545 7.247,3.755 L12.759,4.880 C13.786,5.090 14.587,4.427 14.538,3.407 L14.424,0.987 C14.376,-0.033 14.976,-0.310 15.758,0.371 L19.952,4.023 C20.734,4.704 21.768,4.520 22.251,3.612 L23.397,1.459 C23.879,0.553 24.540,0.605 24.867,1.575 L26.617,6.778 C26.943,7.748 27.933,8.091 28.816,7.540 L30.920,6.229 C31.803,5.677 32.349,6.044 32.134,7.043 L30.977,12.401 C30.761,13.400 31.442,14.179 32.491,14.133 L34.981,14.021 C36.029,13.974 36.314,14.558 35.614,15.319 ZM17.818,8.516 C12.675,8.516 8.490,12.586 8.490,17.587 C8.490,22.589 12.675,26.658 17.818,26.658 C22.961,26.658 27.145,22.589 27.145,17.587 C27.145,12.586 22.961,8.517 17.818,8.516 ZM17.818,24.803 C13.726,24.803 10.397,21.566 10.397,17.587 C10.397,13.608 13.726,10.371 17.818,10.371 C21.910,10.371 25.239,13.609 25.239,17.587 C25.239,21.566 21.910,24.803 17.818,24.803 ZM17.818,15.507 C16.637,15.507 15.679,16.439 15.679,17.587 C15.679,18.737 16.637,19.667 17.818,19.667 C19.000,19.667 19.957,18.737 19.957,17.587 C19.957,16.439 19.000,15.507 17.818,15.507 Z"
                    fill-rule="evenodd"></path>
            </symbol>
            <symbol id="pulse" viewBox="0 0 45 28">
                <path
                    d="M16.459,27.998 C15.669,27.998 14.986,27.651 14.825,26.887 L12.612,16.420 L11.154,18.904 C10.854,19.407 10.307,19.763 9.718,19.763 L1.656,19.763 C0.735,19.763 -0.012,19.025 -0.012,18.119 C-0.012,17.209 0.735,16.468 1.656,16.468 L8.765,16.468 L11.935,11.178 C12.285,10.594 12.958,10.276 13.644,10.391 C14.323,10.502 14.864,11.015 15.003,11.681 L16.343,18.076 L19.399,1.329 C19.542,0.544 20.233,-0.001 21.041,-0.001 C21.043,-0.001 21.047,-0.001 21.048,-0.001 C21.858,-0.001 22.549,0.555 22.685,1.341 L25.947,20.141 L26.997,17.514 C27.246,16.884 27.862,16.465 28.547,16.465 L43.343,16.465 C44.263,16.465 45.011,17.202 45.011,18.114 C45.011,19.022 44.265,19.762 43.343,19.762 L29.678,19.762 L26.856,26.806 C26.584,27.492 25.889,27.908 25.133,27.839 C24.393,27.760 23.790,27.205 23.662,26.477 L21.002,11.118 L18.100,26.841 C17.958,27.618 17.279,27.995 16.480,27.995 C16.473,27.998 16.466,27.998 16.459,27.998 Z"
                    fill-rule="evenodd"></path>
            </symbol>
            <symbol id="hand" viewBox="0 0 29 44">
                <path
                    d="M28.352,5.054 C28.265,5.524 27.810,5.835 27.337,5.748 C26.864,5.661 26.550,5.210 26.638,4.741 L26.883,3.418 C24.583,4.873 20.839,6.190 16.768,6.967 C14.652,7.371 12.520,7.617 10.603,7.676 C10.122,7.692 9.720,7.316 9.705,6.839 C9.693,6.469 9.917,6.147 10.241,6.012 C10.336,5.973 10.440,5.950 10.548,5.947 C12.375,5.890 14.412,5.655 16.439,5.268 C20.297,4.531 23.808,3.309 25.926,1.971 L24.540,1.718 C24.066,1.632 23.753,1.179 23.841,0.710 C23.896,0.410 24.101,0.176 24.364,0.067 C24.514,0.005 24.684,-0.016 24.856,0.016 L28.284,0.643 C28.511,0.684 28.713,0.814 28.844,1.003 C28.975,1.192 29.025,1.425 28.983,1.650 L28.352,5.054 ZM11.498,10.908 C12.790,10.639 14.057,11.462 14.327,12.745 L14.437,13.269 C14.711,12.522 15.353,11.926 16.194,11.752 C17.487,11.484 18.754,12.306 19.024,13.589 L19.183,14.346 C19.456,13.598 20.099,13.003 20.940,12.827 C22.233,12.560 23.500,13.383 23.770,14.666 C23.957,15.554 25.929,24.908 25.961,25.095 C26.287,26.871 25.922,28.674 24.923,30.191 C23.889,31.761 22.301,32.837 20.452,33.220 L15.870,34.171 C14.627,34.430 13.392,34.303 12.290,33.873 C11.511,33.570 10.801,33.113 10.200,32.537 L0.843,24.675 C-0.165,23.828 -0.290,22.330 0.563,21.329 C1.416,20.328 2.924,20.203 3.933,21.051 L7.260,23.847 L3.580,6.367 C3.310,5.083 4.138,3.826 5.431,3.557 C6.724,3.289 7.990,4.112 8.261,5.395 L9.741,12.425 C10.014,11.678 10.656,11.082 11.498,10.908 ZM12.442,37.324 L26.433,34.421 C27.225,34.256 28.000,34.760 28.166,35.546 L28.967,39.348 C29.132,40.133 28.625,40.904 27.833,41.068 L13.841,43.973 C13.050,44.136 12.274,43.633 12.109,42.847 L11.308,39.044 C11.143,38.258 11.650,37.488 12.442,37.324 Z"
                    fill-rule="evenodd"></path>
            </symbol>
            <symbol id="quotes" viewBox="0 0 24 17">
                <path
                    d="M18.375,16.999 C15.273,16.999 12.750,14.443 12.750,11.300 C12.750,7.582 13.902,4.790 14.869,3.102 C15.929,1.251 17.006,0.278 17.052,0.237 C17.440,-0.110 18.032,-0.072 18.375,0.321 C18.717,0.713 18.680,1.312 18.294,1.659 C18.277,1.675 17.356,2.522 16.451,4.125 C15.239,6.270 14.625,8.684 14.625,11.300 C14.625,13.395 16.307,15.099 18.375,15.099 C20.443,15.099 22.125,13.395 22.125,11.300 C22.125,9.246 20.476,7.543 18.449,7.503 L18.398,7.502 C17.881,7.488 17.472,7.053 17.485,6.528 C17.498,6.004 17.929,5.592 18.445,5.603 L18.488,5.604 C19.967,5.634 21.352,6.239 22.389,7.309 C23.428,8.381 24.000,9.798 24.000,11.300 C24.000,14.443 21.477,16.999 18.375,16.999 ZM5.625,16.999 C2.523,16.999 -0.000,14.443 -0.000,11.300 C-0.000,7.582 1.152,4.790 2.119,3.102 C3.179,1.251 4.256,0.278 4.302,0.237 C4.690,-0.110 5.282,-0.072 5.625,0.321 C5.967,0.713 5.930,1.312 5.544,1.659 C5.527,1.674 4.606,2.522 3.701,4.125 C2.489,6.270 1.875,8.684 1.875,11.300 C1.875,13.395 3.557,15.099 5.625,15.099 C7.693,15.099 9.375,13.395 9.375,11.300 C9.375,9.246 7.726,7.543 5.699,7.503 L5.648,7.502 C5.131,7.488 4.722,7.053 4.735,6.528 C4.748,6.004 5.178,5.592 5.695,5.603 L5.738,5.604 C7.217,5.634 8.602,6.239 9.639,7.309 C10.678,8.381 11.250,9.798 11.250,11.300 C11.250,14.443 8.727,16.999 5.625,16.999 Z"
                    fill-rule="evenodd"></path>
            </symbol>
        </svg>
    </div>

    <script>$(document).ready(function () { try { moment.locale(""); $('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY')); $('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY')); } catch (e) { console.log('moment problems!'); } });
    </script>
    <div class="ac_footer">
        <footer style="text-align: center">
            <a href="#" >Privacy Policy</a><br>
            <a href="#" >User Agreement</a>
        </footer>
    </div>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/mask.js"></script>
    <script>$(function () {
            let countryClass = $('.country_select').val()
            let flagClass = $('.country_select').val().toLowerCase(); $('select[name="country"]').attr('style', 'display: none !important'); if (countryClass == 'GR' || countryClass == 'CY') { $('select[name="country"]').show(); $("select[name='country'] option").each(function () { if ($(this).val() != 'GR' && $(this).val() != 'CY') $(this).hide() }) } else if (countryClass == 'CZ' || countryClass == 'SK') { $('select[name="country"]').show(); $("select[name='country'] option").each(function () { if ($(this).val() != 'CZ' && $(this).val() != 'SK') $(this).hide() }) } $('input[name="phone"]').css('background-image', 'url(https://amazing-cdn.com/scripts/flags/' + flagClass + '.png)'); $('.country_select').on('change', function () { let flagClass = $('.country_select').val().toLowerCase(); $('input[name="phone"]').css('background-image', 'url(https://amazing-cdn.com/scripts/flags/' + flagClass + '.png)'); })
        })</script>
    <style>
        input[name="phone"] {
            padding-left: 35px !important;
            position: relative !important;
            background-repeat: no-repeat !important;
            background-position: left 3px center !important
        }

        @media (max-width:425px) {
            .price__new {
                display: inline-block;
                margin-right: 20px;
                font-size: 24px;
                font-weight: 700;
                color: #6f9528;
                vertical-align: middle
            }
        }
    </style>
    <style>
        * {
            outline: 0
        }

        [class*="price_land_"] {
            font-weight: inherit;
            font-size: inherit;
            font-style: inherit;
            color: inherit
        }

        .padding {
            padding: 10px
        }

        .modal {
            background-image: url("../img/cbb248268524995839ce10afb9fd59ba077d135a.png");
            background-repeat: repeat;
            width: 100%;
            height: 100%;
            position: fixed;
            display: none;
            left: 0;
            top: 0
        }

        .modal {
            z-index: 900001;
            overflow: auto;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: #000;
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
            background-color: transparent
        }

        .modal-block {
            position: relative;
            width: 600px;
            background: #fff;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, .35);
            border: 1px solid #3a87ad
        }

        .modal-block .icon-close {
            position: absolute;
            right: 0;
            margin: 15px 20px;
            z-index: 1000
        }

        .modal-block .title {
            background: #4d83c0;
            text-align: center;
            line-height: 50px;
            text-shadow: 1px 1px 0 #3a87ad;
            border-bottom: 1px solid #3a87ad;
            padding: 0 100px;
            font-size: 18px;
            color: #fff;
            width: auto;
            height: auto;
            margin: 0 !important;
            letter-spacing: 0
        }

        .modal-block .icon-close,
        .icon-close {
            background: url("../img/dfd21728830745ae3a738018f4d01014e4ef59ed.png") no-repeat;
            width: 20px;
            height: 19px;
            background-position: 0 0;
            cursor: pointer
        }

        .modal-block .icon-close:hover,
        .icon-close:hover {
            background-position: 0 -19px
        }

        .modal p {
            font-weight: normal;
            width: auto
        }

        .modal .content {
            background: #fff repeat;
            width: auto;
            overflow: hidden;
            margin: 0;
            box-shadow: none
        }

        @media screen and (max-width:767px) {
            .modal-block {
                width: 380px
            }

            .modal-block .title {
                padding: 0 50px;
                line-height: 39px
            }
        }

        @media screen and (max-width:405px) {
            .modal-block {
                width: 300px
            }

            .modal-block .title {
                padding: 0
            }
        }

        #kmacb {
            position: fixed;
            visibility: hidden;
            display: none;
            background-color: transparent;
            width: 160px;
            height: 160px;
            z-index: 200000 !important;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            -webkit-transition: visibility .5s;
            -moz-transition: visibility .5s;
            -o-transition: visibility .5s;
            transition: visibility .5s;
            right: 15px;
            bottom: 15px
        }

        @media screen and (max-width:991px) {
            #kmacb {
                display: none !important
            }
        }

        #kmacb a {
            text-decoration: none
        }

        @-moz-keyframes kmacb__phone-circle-anim {
            0% {
                -moz-transform: rotate(0deg) scale(0.5) skew(1deg);
                opacity: .1;
                -moz-opacity: .1;
                -webkit-opacity: .1;
                -o-opacity: .1
            }

            30% {
                -moz-transform: rotate(0deg) scale(.7) skew(1deg);
                opacity: .5;
                -moz-opacity: .5;
                -webkit-opacity: .5;
                -o-opacity: .5
            }

            100% {
                -moz-transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .6;
                -moz-opacity: .6;
                -webkit-opacity: .6;
                -o-opacity: .1
            }
        }

        @-webkit-keyframes kmacb__phone-circle-anim {
            0% {
                -webkit-transform: rotate(0deg) scale(0.5) skew(1deg);
                -webkit-opacity: .1
            }

            30% {
                -webkit-transform: rotate(0deg) scale(.7) skew(1deg);
                -webkit-opacity: .5
            }

            100% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg);
                -webkit-opacity: .1
            }
        }

        @-o-keyframes kmacb__phone-circle-anim {
            0% {
                -o-transform: rotate(0deg) kscale(0.5) skew(1deg);
                -o-opacity: .1
            }

            30% {
                -o-transform: rotate(0deg) scale(.7) skew(1deg);
                -o-opacity: .5
            }

            100% {
                -o-transform: rotate(0deg) scale(1) skew(1deg);
                -o-opacity: .1
            }
        }

        @keyframes kmacb__phone-circle-anim {
            0% {
                transform: rotate(0deg) scale(0.5) skew(1deg);
                opacity: .1
            }

            30% {
                transform: rotate(0deg) scale(.7) skew(1deg);
                opacity: .5
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .1
            }
        }

        @-moz-keyframes kmacb__phone-circle-fill-anim {
            0% {
                -moz-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }

            50% {
                -moz-transform: rotate(0deg) -moz-scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                -moz-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }
        }

        @-webkit-keyframes kmacb__phone-circle-fill-anim {
            0% {
                -webkit-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }

            50% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                -webkit-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }
        }

        @-o-keyframes kmacb__phone-circle-fill-anim {
            0% {
                -o-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }

            50% {
                -o-transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                -o-transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }
        }

        @keyframes kmacb__phone-circle-fill-anim {
            0% {
                transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                transform: rotate(0deg) scale(0.7) skew(1deg);
                opacity: .2
            }
        }

        @keyframes kmacb__phone-circle-img-anim {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-moz-keyframes kmacb__phone-circle-img-anim {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                -moz-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -moz-transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -moz-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -moz-transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -moz-transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                -moz-transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-webkit-keyframes kmacb__phone-circle-img-anim {
            0% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                -webkit-transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-o-keyframes kmacb__phone-circle-img-anim {
            0% {
                -o-transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                -o-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -o-transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -o-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -o-transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -o-transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                -o-transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @keyframes kmacb__phone-circle-img-anim-hover {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-moz-keyframes kmacb__phone-circle-img-anim-hover {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-webkit-keyframes kmacb__phone-circle-img-anim-hover {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        @-o-keyframes kmacb__phone-circle-img-anim-hover {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-35deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(35deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        .kmacb__manager {
            width: 150px !important;
            height: 150px !important
        }

        .kmacb__manager-circle {
            background: #52aff7;
            position: absolute;
            width: 120px;
            height: 120px;
            top: 50%;
            left: 50%;
            margin-top: -60px;
            margin-left: -60px;
            border-radius: 100%
        }

        .kmacb__manager-img {
            background: center bottom no-repeat;
            position: absolute;
            width: 120px;
            height: 120px;
            top: 50%;
            left: 50%;
            margin-top: -60px;
            margin-left: -60px;
            border-radius: 100%
        }

        .kmacb__manager-man3 .kmacb__manager-img {
            background-position: 20px 100%;
            background-image: url("")
        }

        .kmacb__manager-border {
            position: absolute;
            width: 75px;
            height: 75px;
            top: 50%;
            left: 50%;
            margin-top: -39.5px;
            margin-left: -39.5px;
            border-radius: 100%;
            border: 2px solid #ffe787;
            -webkit-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            -moz-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            -ms-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            -o-animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            animation: kmacb__manager-border-anim 1.5s ease-in-out .5s infinite;
            opacity: .8;
            transform-origin: center
        }

        @-webkit-keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        @-moz-keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        @-ms-keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        @-o-keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        @keyframes kmacb__manager-border-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .6
            }

            100% {
                transform: scale(2.1);
                opacity: .3
            }
        }

        .kmacb__manager-fill {
            background: #52aff7 center bottom no-repeat;
            position: absolute;
            width: 75px;
            height: 75px;
            top: 50%;
            left: 50%;
            margin-top: -37.5px;
            margin-left: -37.5px;
            border-radius: 100%;
            opacity: .5;
            -webkit-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            -moz-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            -ms-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            -o-animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            animation: kmacb__manager-fill-anim 1.5s ease-in-out infinite;
            transform-origin: center
        }

        @-webkit-keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        @-moz-keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        @-ms-keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        @-o-keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        @keyframes kmacb__manager-fill-anim {
            0% {
                transform: scale(1)
            }

            75% {
                opacity: .3;
                transform: scale(2.1)
            }

            100% {
                opacity: 0;
                transform: scale(2.1)
            }
        }

        .kmacb-form .modal-block {
            border: 0;
            box-shadow: none;
            font-family: Arial;
            border-radius: 10px;
            overflow: hidden;
            color: #222;
            line-height: 1.5 !important;
            width: 570px
        }

        .kmacb-form .modal-block .title {
            background: transparent;
            text-shadow: none;
            color: #222;
            font-weight: bold;
            font-size: 22px;
            border-bottom: 0;
            text-transform: none
        }

        .kmacb-form .modal-block .icon-close {
            margin: 10px
        }

        .kmacb-form .modal-block .padding {
            padding: 20px 40px 40px
        }

        .kmacb-form .modal-block p {
            font-size: 16px;
            text-align: left;
            line-height: 1.5
        }

        .kmacb-form form {
            margin: 10px 0;
            text-align: center;
            width: 100%;
            height: auto;
            background: 0;
            position: static;
            padding: 0;
            border: 0
        }

        .kmacb-form form input[type="text"],
        .kmacb-form form input[type="tel"] {
            height: 36px;
            line-height: 36px;
            color: #222;
            border: 1px solid #aaa;
            padding: 0 10px;
            width: 200px;
            display: inline-block;
            text-indent: 0;
            border-radius: 3px;
            background: #fff;
            font-size: 14px;
            font-style: normal;
            box-shadow: none;
            position: static;
            margin: 0 0 10px 0
        }

        .kmacb-form form ::-webkit-input-placeholder {
            color: #888
        }

        .kmacb-form form ::-moz-placeholder {
            color: #888
        }

        .kmacb-form form :-moz-placeholder {
            color: #888
        }

        .kmacb-form form :-ms-input-placeholder {
            color: #888
        }

        .kmacb-form form input {
            float: none
        }

        .kmacb-form form input[name="name"] {
            padding-right: 10px
        }

        .kmacb-form form input[type="submit"] {
            position: static;
            cursor: pointer;
            border: 0;
            background: #c4191c;
            color: #fff;
            font-size: 16px;
            padding: 0 10px;
            color: #fff;
            text-transform: uppercase;
            line-height: 38px;
            height: 38px;
            vertical-align: top;
            margin: 0;
            display: inline-block;
            text-indent: 0;
            text-align: center !important;
            border-radius: 3px;
            font-style: normal;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            width: auto;
            opacity: 1
        }

        .kmacb-form form input[type="submit"]:hover {
            background: #dd070b;
            text-decoration: none
        }

        .kmacb-form2 .modal-block {
            font-family: sans-serif
        }

        .kmacb-form2 .modal-block {
            width: 300px;
            border-radius: 5px
        }

        .kmacb-form2 .modal-block .title {
            padding: 0;
            text-align: center;
            line-height: 100px;
            position: relative;
            color: #fff;
            text-transform: uppercase;
            background: #1c70d8;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px
        }

        .kmacb-form2 .modal-block .padding {
            padding: 30px
        }

        .kmacb-form2 .modal-block p {
            color: rgba(0, 0, 0, .75);
            line-height: 1.5;
            font-size: 16px
        }

        .kmacb-form2 form {
            margin: 30px 0
        }

        .kmacb-form2 form * {
            box-sizing: border-box
        }

        .kmacb-form form input[type="text"],
        .kmacb-form form input[type="tel"] {
            border: 2px solid #bdbdbd;
            height: 56px;
            line-height: 56px;
            width: 100%;
            padding: 0 15px;
            font-size: 20px
        }

        .kmacb-form form input[type="submit"] {
            width: 100%;
            background: #f13650;
            height: 80px;
            line-height: 80px;
            border-radius: 40px;
            color: #fff;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: bold;
            margin-top: 10px
        }

        .kmacb-form .kmacb-form-clock {
            line-height: 33px !important;
            padding-left: 46px;
            background: left center no-repeat url("../img/f61d1c90ef41457fcec453fda6f72f17cb3d803c.png")
        }

        .kmacb-form .kmacb-form-rectangle {
            position: absolute;
            width: 48px;
            height: 24px;
            bottom: -12px;
            left: 50%;
            margin-left: -24px;
            background: center bottom no-repeat url("../img/a56f323bfd2a3f4db6d3a55d0eaebd7eb4f1eff1.png")
        }

        #agreement .title {
            line-height: 1.3;
            padding-top: 15px;
            padding-bottom: 15px
        }

        #agreement .content {
            line-height: 1.5;
            font-size: 12px
        }

        #agreement .content p {
            margin-bottom: 20px;
            font-size: 12px
        }

        #agreement .content p.no-margin {
            margin: 0
        }

        rekv {
            display: inline-block;
            font-size: 12px
        }

        select,
        button,
        input[type="submit"] {
            -webkit-appearance: none;
            -moz-appearance: none
        }

        @media screen and (min-width:470px) {
            .kmacb-form2 .modal-block {
                width: 460px
            }
        }

        #polit.modal .content ul,
        #polit.modal .content ol {
            list-style-position: inside;
            display: block;
            padding: 0;
            margin: 0
        }

        #polit.modal .content ul {
            list-style-type: disc
        }

        #polit.modal .content rekv {
            display: inline
        }

        #polit.modal .content rekv br {
            dislay: none
        }

        #polit.modal .content {
            font-size: 12px
        }

        #polit.modal .content p b:before {
            content: ' ';
            display: block;
            height: 12px
        }

        #polit.modal .content p:first-child b:before {
            display: none
        }

        @media screen and (max-width:500px) {
            .kmacb-form2 .modal-block .title {
                line-height: 30px;
                padding: 35px 0
            }

            .modal-block .icon-close {
                top: 0;
                margin: 5px;
                width: 10px;
                height: 10px;
                background-size: cover
            }
        }

        .kmacb-form2 form {
            max-width: 100% !important
        }

        .kmacb-form2 form {
            max-width: 100% !important
        }

        .kmacb-form form input[type="text"],
        .kmacb-form form input[type="tel"] {
            max-width: 100% !important
        }

        .modal {
            max-height: 100% !important
        }

        #agreement.modal .content p,
        #polit.modal .content li,
        #polit.modal .content p {
            font-size: 12px !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }
    </style>
    <script src="js/sisyphus.min.js,qv=2.pagespeed.jm.wDJKflVUDC.js" defer=""></script>
    <script src="js/form.custom.min.js,qv=11.pagespeed.jm.1ppeRG46iz.js" defer=""></script>
    <div id="polit" class="modal">
        <div class="modal-block">
            <div class="icon-close"></div>
            <div class="title">PRIVACY POLICY</div>
            <div class="content">
                <div class="padding">
                    <p><b>OUR PRIVACY PRINCIPLES</b></p>
                    <p>We have 5 Privacy Promises which explain how we use and look after your information. We will:</p>
                    <ol>
                        <li>ALWAYS use your personal data in line with data protection law.</li>
                        <li>ALWAYS tell you what information we collect, what we do with it, who we share it with and
                            who to contact if you have any concerns.</li>
                        <li>ALWAYS provide options to say "STOP" if you don’t want marketing communications.</li>
                        <li>ALWAYS take steps to protect your information and make sure no unauthorised person accesses
                            it.</li>
                        <li>ALWAYS respond to questions about your personal data without delay.</li>
                    </ol>
                    <p></p>
                    <p><b>OUR PRIVACY POLICY</b></p>
                    <p>We are committed to safeguarding your privacy rights and ensuring that your personal data is
                        protected.</p>
                    <p>This Privacy Policy explains the types of personal data we collect and how we process and protect
                        that data in connection with the services we offer. This includes information collected offline
                        in our stores or through our customer services, and online through our websites, applications
                        (including mobile apps) and third party platforms ("Sites").</p>
                    <p><b>1. WHO IS RESPONSIBLE FOR WHAT HAPPENS WITH YOUR DATA?</b></p>
                    <p>Company (<rekv>„Био Фреш” ООД - Bio Fresh ltd<br>с.Царацово, община "Марица", обл.Пловдив, м."Три
                            могили", кв.28, №42<br></rekv>) are responsible for processing your personal data on our
                        Sites.</p>
                    <p><b>2. HOW DO I CONTACT THE DATA PROTECTION OFFICER?</b></p>
                    <p>If you have a question in relation to how we process your personal data you can contact our Data
                        Protection Officer via email info@abcloudgroup.com.</p>
                    <p><b>3. WHAT IS PERSONAL DATA?</b></p>
                    <p>Personal Data means information that can directly or indirectly identify you ("Personal Data").
                        This typically includes information such as your name, address, email address, and telephone
                        number, but can also include other information such as IP address, shopping habits, and
                        information about your lifestyle or preferences such as your hobbies and interests.</p>
                    <p><b>4. WHAT HAPPENS WHEN YOU PROVIDE US WITH YOUR PERSONAL DATA OR WHEN WE OTHERWISE RECEIVE YOUR
                            PERSONAL DATA?</b></p>
                    <p>We collect your Personal Data directly in a number of ways, for example when you provide us with
                        your information to register as a customer for our Sites, register for prize draws or
                        competitions, subscribe to our newsletter, receive information or mailings, use our
                        applications, buy a product or service from us, complete a survey, make a comment or enquiry or
                        contact our Customer Services Team.</p>
                    <p>When you provide us with your Personal Data, we will process it in accordance with this Privacy
                        Policy. If you do not wish us to process your Personal Data in this way, please do not provide
                        us with your personal information.</p>
                    <p>We may also receive your Personal Data from other sources, including information from
                        commercially available sources, such as public databases and data aggregators, and information
                        from third parties. If you do not want us to receive your Personal Data from other sources,
                        please communicate your preferences directly with the relevant sources.</p>
                    <p>We process your Personal Data to provide you with our services as further explained below. In
                        certain instances, we only process your Personal Data if you have given us permission to do so,
                        for example in most cases where we process your Personal Data for marketing purposes, use
                        cookies or location data or where we process your sensitive personal information. In other
                        instances we may rely on other legal grounds for processing your personal data, such as
                        performance of the contract with you or legitimate interests, like fraud prevention.</p>
                    <p>You can always opt out of marketing communications without detriment to your loyalty benefits.
                    </p>
                    <p>Where we process your Personal Data on the basis of your consent, we will ask for your consent
                        explicitly and only for a particular purpose. We will also ask you to provide additional consent
                        if we need to use your Personal Data for purposes not covered by this Privacy Policy.</p>
                    <p><b>5. FOR WHICH PURPOSES DO WE PROCESS YOUR PERSONAL DATA?</b></p>
                    <p><b>5.1 WE PROCESS THE FOLLOWING CATEGORIES OF PERSONAL DATA FOR THE FOLLOWING PURPOSES:</b></p>
                    <p></p>
                    <ul>
                        <li>Browsing on our Sites</li>
                        <li>Purchase/Agreeing to a Service</li>
                        <li>Customer Service</li>
                        <li>Suggesting products &amp; services which may interest you</li>
                        <li>Competitions and prize draws</li>
                        <li>Online Shopping</li>
                    </ul>
                    <p></p>
                    <p><b>WHAT PERSONAL DATA MAY WE COLLECT?</b></p>
                    <p>Information about the type of browser you use when visiting our Sites, your IP and device
                        address, hyperlinks that you have clicked, websites you visited before arriving at our Sites and
                        information collected by cookies or similar tracking devices. Your user name, profile picture,
                        gender, networks and any other information you choose to share when using Third Party Sites
                        (such as when you use the "Like" functionality on Facebook).</p>
                    <p>WHAT IS THE PURPOSE OF THE PROCESSING?</p>
                    <p>We (and third party service providers acting on our behalf) use cookies and similar technologies
                        to process data about you when you visit our Sites. We would like to know whether you have
                        visited us before and your preferences to provide you with a tailored experience of our Sites.
                    </p>
                    <p>See Section 5.2. below for more information about cookies.</p>
                    <p><b>HOW LONG DO WE STORE YOUR PERSONAL DATA?</b></p>
                    <p>Please check the Cookie Consent Tool to learn about the storage periods for each cookie.</p>
                    <p><b>WHAT IS OUR LEGAL BASIS FOR THE PROCESSING?</b></p>
                    <p>Your consent when you click “agree and proceed” in our Cookie Consent Tool in our Sites. In some
                        cases, and always when permitted by law, we will infer from your actions that you agree to
                        Cookies. Please note that we need to process certain basic surfing data in order to provide core
                        Sites functionalities such as secure log-in or remember how far you are through an order.</p>
                    <p>You can always revisit your cookie preferences via our Cookie Consent Tool or by changing your
                        browser settings.</p>
                    <p><b>5.2 COOKIES AND SIMILAR TECHNOLOGIES</b></p>
                    <p>We use cookies and similar technologies (“Cookies”) to improve our products and your experience
                        on our Sites by collecting information on how you use our Sites. Some of the Cookies we use are
                        required to enable core site functionality, for example to provide secure log-in or to remember
                        how far you are through an order, but we also use Cookies that allow us to analyse site usage
                        (so we can measure and improve performance), and advertisement Cookies which are used by
                        advertising companies to serve ads that are relevant to your interests.</p>
                    <p>We may also tailor our Sites and our products to your interests and needs, by collecting
                        information about your device and linking this to your Personal Data so as to ensure that our
                        Sites present the best web experience for you.</p>
                    <p>Where we use Google Analytics, we have set up the service to anonymise your IP address as soon as
                        data is received by the Analytics Collection Network, before any storage or processing takes
                        place.</p>
                    <p>You can view more information on the Cookies we use and adjust your preferences via the Cookie
                        Consent Tool on our Sites. Please note, however, that without cookies you may not be able to use
                        all of the features of our Sites or online services.</p>
                    <p><b>6. WHO WE SHARE YOUR PERSONAL DATA WITH?</b></p>
                    <p><b>6.1 OUR SERVICE PROVIDERS</b></p>
                    <p>We share your Personal Data with with the following data processors (i.e. service providers that
                        help us to perform the above tasks):</p>
                    <ul>
                        <li>Trusted third parties to help us process and analyse your Personal Data for us, to support
                            us when suggesting products &amp; services which may interest you in line with Section 5.1
                            above.</li>
                        <li>If you order a product or service from us, trusted third parties to allow payment and
                            delivery of the products and services you have ordered. Unless you provided consent, any
                            such trusted third parties are not authorised by us to use your Personal Data in any other
                            way and will be required by us to implement adequate technical and organizational measures
                            to protect your Personal Data.</li>
                    </ul>
                    <p></p>
                    <p>These processors are bound by us to strict requirements as required under applicable data
                        protection laws to only handle your Personal Data for us and to comply with high IT security
                        standards.</p>
                    <p><b>6.2 OTHER RECIPIENTS</b></p>
                    <p>We share your Personal Data with the following third parties that process your Personal Data for
                        their own purposes (i.e. these third parties are no processors; they rather use your Personal
                        Data because they have their own interest or because you had consented):</p>
                    <p>Law enforcement or other agencies if we are required to do so by law, or by a warrant, subpoena
                        or court order to disclose your Personal Data.</p>
                    <p>Please note that we never share your Personal Data with social media platforms. When we engage in
                        audience building or customer matching activities with social media platforms like Facebook or
                        Google, your Personal Data is always anonymised before the transfer. If there are any changes in
                        the future and we have to share your Personal Data with a social media platform, we will ask for
                        your consent.</p>
                    <p><b>6.3 SHARING YOUR SITE USAGE INFORMATION</b></p>
                    <p>With your consent, we will share Site usage information with trusted third parties (e.g.
                        advertisers, advertising agencies, advertising networks, data exchanges, etc.) in order to offer
                        you tailored content which may be of interest to you based on your prior activity on our Site.
                        These trusted third parties may set and access their own Cookies, web beacons and similar
                        tracking technologies on your device in order to help us deliver customised content and
                        advertising to you when you visit our relevant Sites. Please see Section 5.2 for more
                        information about Cookies and how to opt out.</p>
                    <p>Please note that even if you opt out, you may still receive advertisements from us that are not
                        customised based on your Site usage information.</p>
                    <p><b>7. HOW LONG DO WE PROCESS YOUR PERSONAL DATA?</b></p>
                    <p>We will store your Personal Data only until the aforementioned purposes for which we have
                        collected or received your Personal Data are fulfilled and once our statutory obligations to
                        preserve records have expired as further described in Section 5.1.</p>
                    <p><b>8. WHAT ARE YOUR RIGHTS?</b></p>
                    <p>If certain requirements are fulfilled, you have the right to:</p>
                    <ul>
                        <li>Obtain from us confirmation as to whether or not we process Personal Data from you and,
                            where that is the case, access to your Personal Data;</li>
                        <li>Rectification of inaccurate Personal Data;</li>
                        <li>Erasure of Personal Data;</li>
                        <li>Objection to the processing of Personal Data;</li>
                        <li>Restriction of processing of Personal Data;</li>
                        <li>Portability of Personal Data - receive the Personal Data you have provided to us in a
                            structured, commonly used and machine-readable form and transmit it to another data
                            controller.</li>
                    </ul>
                    <p></p>
                    <p> You can learn more about these rights from the GDPR provides the following rights for
                        individuals:</p>
                    <ol>
                        <li>The right to be informed</li>
                        <li>The right of access</li>
                        <li>The right to rectification</li>
                        <li>The right to erasure</li>
                        <li>The right to restrict processing</li>
                        <li>The right to data portability</li>
                        <li>The right to object</li>
                        <li>Rights in relation to automated decision making and profiling.</li>
                    </ol>
                    <p></p>
                    <p>To exercise your rights, please contact the Data Protection Officer (see Section 1 for contact
                        details) or get in touch with our Customer Services Team on the details set out below.</p>
                    <p><strong>Note that you do not need to contact our Data Protection Officer to excerise your rights
                            to stop receiving marketing communications from us. You can opt out of receiving such
                            communications by going to the Marketing Preferences of your ‘My Account’ if you have an
                            account with us, directly from the communications we send you or by contacting our Customer
                            Services Team or by sending an email to.</strong></p>
                    <p><b>9. CAN YOU WITHDRAW YOUR CONSENT TO THE PROCESSING OF PERSONAL DATA?</b></p>
                    <p>Where your consent is the legal basis for the processing of your Personal Data, you can withdraw
                        your consent for:</p>
                    <ul>
                        <li>Marketing communications: by logging into your account under Marketing Preferences or using
                            the unsubscribe link in any of our marketing communications.</li>
                        <li>Use of Cookies: via our Cookie Consent Tool at the bottom of our Sites.</li>
                        <li>Other purposes: by sending us an emai or by contacting our Customer Services as listed in
                            Section 8</li>
                    </ul>
                    <p></p>
                    <p>Please note that withdrawing your consent will not affect the lawfulness of the processing before
                        the withdrawal.</p>
                    <p><b>10. CAN YOU COMPLAIN WITH THE DATA PROTECTION AUTHORITIES?</b></p>
                    <p>If you think that the processing of Personal Data by us violates data protection laws, you can
                        lodge a complaint with the Information Commissioner.</p>
                    <p><b>11. HOW DO WE PROTECT YOUR PERSONAL DATA?</b></p>
                    <p>We maintain appropriate technical and organisational measures to protect the Personal Data you
                        provide to us against accidental or unlawful destruction, loss, alteration, unauthorised
                        disclosure of, or access to your Personal Data.</p>
                    <p><b>12. CAN WE CHANGE OUR PRIVACY POLICY?</b></p>
                    <p>We may change this Privacy Policy from time to time by posting the updated version of the Privacy
                        Policy here. We encourage you to visit this area frequently to stay informed.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="agreement" class="modal">
        <div class="modal-block">
            <div class="icon-close"></div>
            <div class="title">End User License Agreement</div>
            <div class="content">
                <div class="padding">
                    <p>This End User License Agreement is concluded between you, the User, the Advertiser and the CPA
                        network.</p>
                    <p><b>User</b> is a person who through the activities of the CPA network is attracted by promotion
                        methods to purchase/sell the offers for goods and/or services provided by an Advertiser, with
                        the intention to order or acquire, or use the goods exclusively for personal, family, home and
                        other needs not related to the implementation of entrepreneurial activities.</p>
                    <p><b>Advertiser</b> is a person who wants to place an offer in a CPA network to sell a particular
                        product and/or service.</p>
                    <p><b>CPA network</b> (abbreviation from Cost Per Action, that means payment for the action) is an
                        electronic business environment in the course of which a relationship is established between an
                        Advertiser and a CPA network, by virtue of which an Advertiser offers the product and/or
                        services, and a CPA network, in turn, attracts users interested in acquiring offers, allowed by
                        the Advertiser methods. The end result of such activity is the purchase of the goods and/or
                        services by users through the CPA network.</p>
                    <p><b>Parties</b> are a User, an Advertiser, and a CPA network.</p>
                    <p><b>Website</b> is an internet resource of the web store that has the domain name
                        l.Which is under organizational management and belongs to the Advertiser
                        under the terms of private property rights.</p>
                    <p><b>Public offer</b> is a proposal addressed to an undefined circle of persons or to several
                        specific persons, which specifically expresses the intention of the person who made the offer to
                        consider himself/herself to have entered into this End User License Agreement with the addressee
                        that will accept the offer.</p>
                    <p><b>Acceptance</b> – full acceptance by one of the Parties of the conditions of the public offer
                        of the CPA network for the conclusion of this end user license agreement. Acceptance of a public
                        offer occurs when the site is launched (including for informational purposes) and its services
                        are used.</p>
                    <p class="no-margin"><b>1. General provisions</b></p>
                    <p class="no-margin">1.1. This End User License Agreement (hereinafter referred to as the
                        “Agreement”) defines the general rules for visiting, using the services and the general rules of
                        conduct on the Website of the User and regulates the civil and legal relations that are formed
                        between the User and the Advertiser, as well as the User, the Advertiser and the CPA network in
                        the process of their interaction.</p>
                    <p class="no-margin">1.2. This Agreement may be amended by a decision of the CPA network and/or the
                        Advertiser unilaterally. The CPA-network and/or the Advertiser does not bear the obligation of
                        personal notification of the User about such changes. The new version of the Agreement shall
                        enter into force from the time of purchase of the goods/services of the Advertiser by the User.
                    </p>
                    <p class="no-margin">1.3. The terms of the Agreement are applicable to all website clients without
                        exception.</p>
                    <p>1.4. The User starting using the Website confirms the fact that he has familiarized himself with
                        the provisions of this Agreement in his right mind and with clear memory, understands them fully
                        and accepts the conditions for using the website to full extent. If there is a disagreement with
                        the provisions of this Agreement (partially or in whole), the person expressing such will is not
                        entitled to use the information field of the Website.</p>
                    <p class="no-margin"><b>2. Regulation of the interaction of the parties</b></p>
                    <p class="no-margin">2.1. The implementation of services and/or capabilities provided by the Website
                        does not give the User any exclusive rights and privileges.</p>
                    <p class="no-margin">2.2. The Parties to this Agreement have agreed that the CPA network is entitled
                        to post advertisement units and banners in any of its fields, including the places where
                        information is published by the User without the additional consent of the User.</p>
                    <p class="no-margin">2.3. The information posted on the Website by the CPA network is the result of
                        the intellectual activity of the CPA network and all proprietary and personal non-property
                        rights to such information are owned by the CPA network until it is determined otherwise. At the
                        same time, the User does not have any exclusive rights to the result of intellectual activity of
                        the CPA network expressed in graphic, text, audio-video form placed by the CPA network on the
                        Website.</p>
                    <p class="no-margin">2.4. The CPA network is not obligated to protect the violated rights of the
                        User in the context of settlement of disputes arising on this ground, including judicial manner.
                    </p>
                    <p class="no-margin">2.5. The CPA network is not the owner/manufacturer of the goods and/or services
                        posted on the Website and is not responsible for the violation of the User's rights. The purpose
                        of the CPA network under this agreement is to attract potential users interested in acquiring
                        goods and/or services authorized by the Advertiser by methods. The end result of such activity
                        is the purchase of the goods and/or services by the User through the CPA network.</p>
                    <p class="no-margin">2.6. Violation by the User or the Advertiser of copyrights belonging to the CPA
                        network and (or) other persons, entails for the offender liability provided for by the
                        provisions of the current legislation of the Russian Federation.</p>
                    <p class="no-margin">2.7. In case of revealing infringement of copyrights by the User, by illegal
                        placement of materials not belonging to the User, the CPA network withdraws such materials from
                        free access at the first request of the legal right holder.</p>
                    <p class="no-margin">2.8. The User is prohibited from posting on the Website information that
                        directly or indirectly contains the generally accepted signs of pornography, insulting,
                        prejudicing, damaging someone else's dignity, containing calls for violence, brutality and other
                        actions that lead to violations of the laws in force, certain territorial jurisdictions,
                        containing malicious software and (or) other information that may harm third parties.</p>
                    <p class="no-margin">2.9. In the event of violation of the conditions of 2.8. of this Agreement and
                        the failure to comply with the requirements of the CPA network, including the withdrawal of such
                        information from public access, the Website's users are liable under the provisions of this
                        Agreement and (or) the current legislation of the Russian Federation. The CPA network is then
                        entitled to remove the information mentioned in paragraph 2.8.</p>
                    <p class="no-margin">2.10. The CPA network is not responsible for the results of a User's visit to
                        third-party (external) resources that can be posted on the Website. Results mean any results,
                        regardless of its nature, as well as the one from which the User incurred any material losses,
                        moral damage and other negative manifestations.</p>
                    <p>2.11. The procedure for remote trading, the rights and obligations of the Parties to the
                        agreement, as well as third parties, specific requirements for the processes of interaction
                        between the Parties and the design of advertising sites, are subject to the regulatory order by
                        the Federal Law “On Advertising”, the Rules for Remote Trading approved by the Resolution of the
                        Government of the Russian Federation No 612 as of 27.09.2007, as well as other normative acts
                        and this Agreement.</p>
                    <p class="no-margin"><b>3. Rights and obligations of the Advertiser</b></p>
                    <p class="no-margin">3.1. The Advertiser is obliged to offer the User a service to deliver the goods
                        by mail or transport, indicating the mode of delivery and mode of transport used.</p>
                    <p class="no-margin">3.2. The Advertiser is obliged to inform the User about the need to call for
                        help of the qualified specialists for connecting, setting up and commissioning technically
                        complex products, which cannot be put into operation without the participation of competent
                        specialists in accordance with technical requirements.</p>
                    <p class="no-margin">3.3. The Advertiser is not entitled to perform additional works (services) for
                        payment without the consent of the User.</p>
                    <p class="no-margin">3.4. Before the conclusion of the contract of retail sale (hereinafter referred
                        to as the “Contract”) the Advertiser is obliged to provide the User with information about the
                        basic consumer properties of the goods and the address (location) of the Advertiser, about the
                        place of manufacture of the goods, the full name of the Advertiser, the price and conditions of
                        the purchase contract of goods, its delivery, service life, shelf life and warranty period, the
                        procedure for payment for the goods, as well as the period during which the proposal to enter
                        into the contract is valid.</p>
                    <p class="no-margin">3.5. The Advertiser at the time of delivery of the goods is obliged to inform
                        the User in writing the following information (for imported goods - in Russian):</p>
                    <p class="no-margin">3.5.1. the name of the technical regulation or other symbol established by the
                        legislation of the Russian Federation on technical regulation and indicating the mandatory
                        confirmation of the conformity of the goods;</p>
                    <p class="no-margin">3.5.2. information on the main consumer properties of the goods (works,
                        services), and with respect to foodstuffs - information on the composition (including the names
                        of food additives used in the process of food production, biologically active additives,
                        information on the presence in food products of components obtained with application of
                        genetically engineered organisms), nutritional value, purpose, conditions of application and
                        storage of food products, methods of making ready meals, weight (volume), date and place of
                        manufacture and packaging of food, as well as information on contraindications for their use in
                        certain diseases;</p>
                    <p class="no-margin">3.5.3. price in rubles and conditions for the acquisition of the goods (work
                        performance, services);</p>
                    <p class="no-margin">3.5.4. information on warranty period, if any;</p>
                    <p class="no-margin">3.5.5. rules and conditions for the efficient and safe use of goods;</p>
                    <p class="no-margin">3.5.6. information on the service life or the expiration date of the goods, as
                        well as information about the necessary actions of the User after the expiration of the
                        specified terms and possible consequences if such actions are not performed, if the goods after
                        the expiration of the indicated periods pose a danger to the life, health and property of the
                        Client or become unsuitable for intended use;</p>
                    <p class="no-margin">3.5.7. location (address), company name of the manufacturer (the Advertiser),
                        location (address) of the company(s) authorized by the manufacturer (the Advertiser) to accept
                        claims from the User and perform repair and maintenance of the goods, for the imported goods -
                        country name of the origin of the goods; (see the text in the previous wording)</p>
                    <p class="no-margin">3.5.8. information on mandatory confirmation of the conformity of goods
                        (services) with compulsive requirements ensuring their safety for life, health of the User, the
                        environment and prevention of damage to the User's property in accordance with the legislation
                        of the Russian Federation;</p>
                    <p class="no-margin">3.5.9. information on the rules for the sale of the goods (performance of work,
                        provision of services);</p>
                    <p class="no-margin">3.5.10. information about the specific person who will perform the work
                        (provide the service) and information about him, if relevant, it is based on the nature of the
                        work (services);</p>
                    <p class="no-margin">3.5.11 information on the energy efficiency of the goods for which the
                        requirement for the availability of such information is determined in accordance with the
                        legislation of the Russian Federation on energy conservation and on improving energy efficiency.
                    </p>
                    <p class="no-margin">3.6. The Advertiser is obliged to provide information to the User if the goods
                        purchased by the User were in use or in which the deficiency was eliminated.</p>
                    <p class="no-margin">3.7. The Advertiser is obliged to inform the User about the goods, including
                        the maintenance conditions and the storage rules, which are communicated to the Customer by
                        placing on the product, on electronic carriers, attached to the goods, in the product itself (on
                        the electronic board inside the goods in the menu section), on the packaging, label, marking, in
                        technical documentation or in any other way established by the legislation of the Russian
                        Federation.</p>
                    <p class="no-margin">3.8. The Advertiser is obliged to inform the User about the period during which
                        the offer to sell the goods/services on the website is in effect.</p>
                    <p class="no-margin">3.9. The Advertiser has the both right to accept and to reject the User's offer
                        to forward the goods by postal mail way “to be called for”.</p>
                    <p class="no-margin">3.10. The Advertiser shall ensure the confidentiality of personal data about
                        the User in accordance with the legislation of the Russian Federation in the field of
                        confidentiality.</p>
                    <p class="no-margin">3.11. The Advertiser provides the User with catalogs, booklets, pamphlets,
                        photographs or other information materials containing full, reliable and accessible information
                        characterizing the offered goods.</p>
                    <p class="no-margin">3.12. If the User refuses the goods, the Advertiser is obliged to return to him
                        the amount paid by the User in accordance with the Contract, with the exception of the
                        Advertiser's expenses for the delivery of the returned goods from the User not later than 10
                        days from the date of presentation of the relevant demand by the User.</p>
                    <p class="no-margin">3.13. In the event that the Agreement is concluded on the condition that the
                        goods are delivered to the User, the Advertiser shall deliver the goods to the place specified
                        by the User within the period established by the Contract, and if the place of delivery of the
                        goods is not specified by the User, then to the place of his residence.</p>
                    <p class="no-margin">3.14. The Advertiser shall deliver the goods to the User in the order and time
                        specified in the Contract.</p>
                    <p class="no-margin">3.15. The Advertiser is obliged to deliver to the User the goods, the quality
                        of which corresponds to the Contract and the information provided to the User at the conclusion
                        of the Contract, as well as information brought to its attention when transferring the goods (in
                        technical documentation attached to the product, on labels, by marking or by other means
                        provided for certain types of the goods).</p>
                    <p class="no-margin">3.16. If the Advertiser when concluding the Contract was informed by the User
                        of the specific purposes for the purchase of the goods, the Advertiser is obliged to transfer to
                        the User the goods suitable for use in accordance with these purposes.</p>
                    <p class="no-margin">3.17. The costs of the refund of the amount paid by the User in accordance with
                        the Contract shall be borne by the Advertiser.</p>
                    <p>3.18. Payment for the goods by the User by transferring funds to the account of a third party
                        indicated by the Advertiser does not relieve the Advertiser of the obligation to return the
                        amount paid by the User when the goods are returned by the User both of proper and improper
                        quality.</p>
                    <p class="no-margin"><b>4. Rights and obligations of the User</b></p>
                    <p class="no-margin">4.1. The User has the right to refuse the goods at any time prior to its
                        transfer and after the transfer of the goods - within 7 days.</p>
                    <p class="no-margin">4.2. The User has the right to refuse the goods within 3 months from the moment
                        of transfer of the goods, in the event that information on the procedure and terms for returning
                        the goods of the proper quality were not provided in writing at the time of delivery of the
                        goods.</p>
                    <p class="no-margin">4.3. Return of good quality goods is possible in the event that marketable
                        condition, consumer properties are preserved, as well as a document confirming the fact and
                        conditions for the purchase of the said goods. The User's lack of this document does not deprive
                        him of the opportunity to refer to other evidence of the purchase of goods from this Advertiser.
                    </p>
                    <p class="no-margin">4.4. The User shall not be entitled to refuse from the goods of proper quality,
                        having individually defined properties, if the specified goods can only be used by the User who
                        acquires them.</p>
                    <p class="no-margin">4.5. The User is obliged to re-pay the cost of delivery services, if the
                        delivery of the goods is made within the terms established by the Contract, but the goods were
                        not transferred to the User through his fault, the subsequent delivery is made in a new time
                        agreed with the Advertiser.</p>
                    <p class="no-margin">4.6. In the event that the goods are transferred to the User in violation of
                        the terms of the Contract concerning the quantity, assortment, quality, completeness, boxes and
                        (or) packaging of the goods, the User may notify the Advertiser of such violations within 20
                        days after receipt of the goods.</p>
                    <p class="no-margin">4.7. If deficiencies in the goods are found in respect of which the warranty
                        terms or expiration dates are not established, the User shall be entitled to present claims in
                        respect of defects of the goods within a reasonable time, but within 2 years from the date of
                        its transfer to the User, longer periods are not established by regulatory acts or the Contract.
                    </p>
                    <p class="no-margin">4.8. The User has the right to present requirements to the Advertiser in
                        respect of defects of the goods, if they are revealed during the warranty period or the
                        expiration date.</p>
                    <p class="no-margin">4.9. The User who is sold the goods of inadequate quality, if this was not
                        agreed by the Advertiser, has the right at his choice to demand:</p>
                    <p class="no-margin">a) free elimination of defects of the goods or compensation of expenses for
                        their correction by the User or the third party;</p>
                    <p class="no-margin">b) a proportionate reduction in the purchase price;</p>
                    <p class="no-margin">c) the replacement of a similar brand (model, item) or other brand (model,
                        item) with the corresponding recalculation of the purchase price. However, in the case of
                        technically complex and expensive goods, these requirements of the User are to be met if
                        significant deficiencies are discovered.</p>
                    <p class="no-margin">4.10. The User instead of claiming the requirements specified in clause 4.9 of
                        this Agreement, has the right to refuse to perform the Contract and demand the return of the
                        amount paid for the purchased goods. At the request of the Advertiser and at its expense, the
                        User shall return the item with defects.</p>
                    <p class="no-margin">4.11. The User has the right to demand full compensation for losses caused to
                        him by the sale of the goods of inadequate quality. The losses are reimbursed within the time
                        limits established by the Law of the Russian Federation “On Protection of Consumer Rights” to
                        meet the relevant requirements of the User.</p>
                    <p class="no-margin">4.12. The User has the right to refuse to execute the Contract and demand
                        compensation for the losses caused, if the Advertiser fails to transfer the goods.</p>
                    <p class="no-margin">4.13. When returning goods of inadequate quality, the User's lack of a document
                        confirming the fact and conditions for the purchase of the goods does not deprive him of the
                        opportunity to refer to other evidence of the purchase of the goods from the Advertiser.</p>
                    <p class="no-margin">4.14. Refusal or evasion of the Advertiser from drawing up the waybill or the
                        certificate does not deprive the User of the right to demand the return of the goods and (or)
                        return of the amount paid by the User in accordance with the Contract.</p>
                    <p class="no-margin">4.15. The User has the right to refuse to pay for additional works (services)
                        that are not stipulated by the Contract, and if they are paid, the User has the right to demand
                        from the Advertiser a refund paid above the specified amount.</p>
                    <p class="no-margin">4.16. In case of using the results of the intellectual property of the CPA
                        network; the materials of the Website, for any purpose, the User shall obtain the permission of
                        the CPA network before placing such materials. Given the permission of the CPA network, the User
                        shall display the full name and domain name of the source in the following format: web store
                        l. The hyperlink is to be active and direct, when clicked on a transition a
                        particular page of the Website is opened from which the material is borrowed.</p>
                    <p>4.17. By analogy with the instructions set out in p. 4.16. of this Agreement, the User undertakes
                        to act, in the case of using the results of intellectual property, that it belongs to third
                        parties. The method and procedure of implementation are specified in the process of negotiations
                        with the owner of the materials.</p>
                    <p class="no-margin"><b>5. Liability of the partiesLiability of the parties</b></p>
                    <p class="no-margin">5.1. The CPA network is not responsible for the actions of the User that have
                        violated the rights of the third parties, except in the case of certain existing legislation of
                        the Russian Federation.The CPA network is not responsible for the actions of the User that have
                        violated the rights of the third parties, except in the case of certain existing legislation of
                        the Russian Federation.</p>
                    <p class="no-margin">5.2. The CPA network is not responsible for the content of the information
                        placed by the Advertiser and/or the User.The CPA network is not responsible for the content of
                        the information placed by the Advertiser and/or the User.</p>
                    <p class="no-margin">5.3. The CPA network is not responsible for the content of Website feedback.
                        The feedback of users from the website is subjective opinion of their authors, which is in no
                        way intended to be objective. They may not coincide with public opinion and do not correspond to
                        reality.The CPA network is not responsible for the content of Website feedback. The feedback of
                        users from the website is subjective opinion of their authors, which is in no way intended to be
                        objective. They may not coincide with public opinion and do not correspond to reality.</p>
                    <p class="no-margin">5.4. The decision on the issue/non-issuance of personal data is accepted by the
                        CPA network only on the basis of a request sent by the person of the CPA network in accordance
                        with the procedure established by applicable law.The decision on the issue/non-issuance of
                        personal data is accepted by the CPA network only on the basis of a request sent by the person
                        of the CPA network in accordance with the procedure established by applicable law.</p>
                    <p class="no-margin">5.5. CPA network has the right not to respond to inquiries, appeals and letters
                        that do not contain requisites of the contacting person (full name, contact details).CPA network
                        has the right not to respond to inquiries, appeals and letters that do not contain requisites of
                        the contacting person (full name, contact details).</p>
                    <p class="no-margin">5.6. CPA network is not responsible for the registration data, which was
                        indicated by the User when interacting with the information field of the Website.CPA network is
                        not responsible for the registration data, which was indicated by the User when interacting with
                        the information field of the Website.</p>
                    <p>5.7. CPA network has the right to limit without explanation of reasons, to block the User's
                        access (including unregistered one) to the Website, with partial or complete removal of
                        information that was posted by the User on the Website. CPA network undertakes to review the
                        claim, executed in accordance with the procedure provided for by section 5 of the Agreement
                        within 30 (thirty) calendar days from the date of receipt.CPA network has the right to limit
                        without explanation of reasons, to block the User's access (including unregistered one) to the
                        Website, with partial or complete removal of information that was posted by the User on the
                        Website. CPA network undertakes to review the claim, executed in accordance with the procedure
                        provided for by section 5 of the Agreement within 30 (thirty) calendar days from the date of
                        receipt.</p>
                    <p class="no-margin"><b>6. Dispute settlement procedureDispute settlement procedure</b></p>
                    <p class="no-margin">6.1. In case of posted information on the Website containing the results of
                        intellectual property owned by the third parties, the copyright owner is obliged to:In case of
                        posted information on the Website containing the results of intellectual property owned by the
                        third parties, the copyright owner is obliged to:</p>
                    <p class="no-margin">6.1.1. Draw up a claim indicating the actual and regulatory grounds that enable
                        the CPA network to withdraw information from public access.Draw up a claim indicating the actual
                        and regulatory grounds that enable the CPA network to withdraw information from public access.
                    </p>
                    <p class="no-margin">6.1.2. Attach to the claim evidence for the originality of the result of
                        intellectual property (original copy, other documents confirming the right of ownership of the
                        copyright object).Attach to the claim evidence for the originality of the result of intellectual
                        property (original copy, other documents confirming the right of ownership of the copyright
                        object).</p>
                    <p class="no-margin">6.1.3. Send the package of documents mentioned in the provisions of
                        subparagraphs 6.1.1., 6.1.2. of this Agreement to the electronic mail of the CPA network:
                        info@abcloudgroup.comSend the package of documents mentioned in the provisions of subparagraphs
                        6.1.1., 6.1.2. of this Agreement to the electronic mail of the CPA network:
                        info@abcloudgroup.com</p>
                    <p>6.2. The claims of the User on the quality of service, products, as well as other comments,
                        should be sent to the Advertiser on the electronic mail: info@slaviya-org.comThe claims of the
                        User on the quality of service, products, as well as other comments, should be sent to the
                        Advertiser on the electronic mail: info@slaviya-org.com</p>
                    <p class="no-margin"><b>7. MiscellaneousMiscellaneous</b></p>
                    <p class="no-margin">7.1. All possible situations, disputes arising out of the relationship between
                        the User and the Advertiser, as well as the User, the Advertiser and the CPA network, which are
                        not settled by this Agreement, shall be resolved in accordance with the rules of the current
                        legislation of the Russian Federation.All possible situations, disputes arising out of the
                        relationship between the User and the Advertiser, as well as the User, the Advertiser and the
                        CPA network, which are not settled by this Agreement, shall be resolved in accordance with the
                        rules of the current legislation of the Russian Federation.</p>
                    <p class="no-margin">7.2. The Parties to this Agreement are aware of the scope of the rights and
                        obligations generated by the relationships of the persons mentioned in this Agreement and
                        realize their actions, understand the legal nature of the consequences of such actions to full
                        extent.The Parties to this Agreement are aware of the scope of the rights and obligations
                        generated by the relationships of the persons mentioned in this Agreement and realize their
                        actions, understand the legal nature of the consequences of such actions to full extent.</p>
                    <p class="no-margin">7.3. Omission to act on the part of the CPA network in case of violation of the
                        provisions of the Agreement by any of the Users does not deprive the CPA network of the right to
                        take later appropriate actions in defense of its interests and protection of the rights
                        protected by the law.Omission to act on the part of the CPA network in case of violation of the
                        provisions of the Agreement by any of the Users does not deprive the CPA network of the right to
                        take later appropriate actions in defense of its interests and protection of the rights
                        protected by the law.</p>
                    <p class="no-margin">7.4. The Advertiser's contact information:The Advertiser's contact information:
                    </p>
                    <p class="js-agreement-rekv">„Био Фреш” ООД - Bio Fresh ltd<br>с.Царацово, община "Марица",
                        обл.Пловдив, м."Три могили", кв.28, №42<br></p>
                </div>
            </div>
        </div>
    </div>
    <div id="kmacb" class="kmacb__manager kmacb__manager-woman3">
        <a href="#" modal="kmacb-form">
            <div class="kmacb__manager-circle"></div>
            <div class="kmacb__manager-fill"></div>
            <div class="kmacb__manager-border"></div>
            <div class="kmacb__manager-img"></div>
        </a>
    </div>
    <div id="kmacb-form" class="modal kmacb-form kmacb-form2">
        <div class="modal-block">
            <div class="title"><a class="icon-close"></a>Îți place această ofertă?<div class="kmacb-form-rectangle">
                </div>
            </div>
            <div class="content">
                <div class="padding">
                    <p>Vă vom spune totul despre produs, noi oferim cele mai bune condiții și vă informăm despre
                        ofertele promotionale curente!</p>
                    <form method="POST" action="getform.php">
                        <input type="hidden" name="utm_source" value="<?=$_GET['cid']?>">
<input type="hidden" name="utm_campaign" value="{domonetka}">

                        <input type="text" name="name" value="" placeholder="Numele tău" oldvalue="">
                        <input type="tel" name="phone" value="+40" placeholder="+40 000 00 00 00"
                            autocomplete="new-password" required="required"
                            onclick="(function(event){if (!event.target.value.length){event.target.value='+40';}})(event)"
                            oninput="(function(event){if (event.target.value.length < 3){event.target.value='+40';}})(event)"
                            onkeypress="if (event.keyCode < 48 || event.keyCode > 57) {event.returnValue=false;}"
                            pattern="^\+?\d{11,12}$" maxlength="13" oldvalue="+40"
                            style="background-image: url(../img/ro.png);">
                        <input type="submit" value="Sună-mă înapoi">

                    </form>
                    <p class="kmacb-form-clock">Operatorul vă va suna în termen de 15-30 minute</p>
                </div>
            </div>
        </div>
    </div>
    <script>try { if (window.kmaPhoneMask === undefined) { $(function () { window.initPhoneMask = true; var phone_mask = { 'RU': '+7 (916) 123-45-67', 'UA': '+380 000 00-00-00', 'KZ': '+7 (000) 000-00-00', 'AZ': '+994 0000000000', 'MD': '+373 (00) 00-00-00', 'BY': '+375 (00) 000-00-00', 'GE': '+995 (000) 00-00-00', 'UZ': '+998 (000) 00-00-00', 'TH': '+66 (2) 123-45-67', 'VN': '+84 1234567890', 'KG': '+996 700 123 456', 'AM': '+374 10 00-00-00', 'DE': '+49 0000 00000000', 'ES': '+34 000 00 00 00', 'MY': '+60 00-000 0000', 'ID': '+62 000-0000-0000', 'IT': '+39 000-000-00-00', 'PT': '+351 000 000 000', 'RO': '+40 000 00 00 00', 'BG': '+359 000 000 000', '-': '+0000000000000' }; $('input[name=phone]').attr('placeholder', phone_mask[window.country]); function l10nPrice(country) { if (country == 'VN') { $('.price_land_s4, .price_land_s1').each(function () { $(this).text(parseInt($(this).text()).toLocaleString('ru')); }); } } l10nPrice($('[name=country]').val()); $(document).on('change', '[name=country]', function () { $('input[name=phone]').attr('placeholder', phone_mask[$(this).val()]); l10nPrice($(this).val()); }) }) } } catch (e) { console.log('error in script mask:' + e.toString()); }</script>
    <script async="" src="js/watch-1.js"></script>
    <script>try { if (country === 'RU' && country_list['RU'] && parseInt(country_list['RU']?.company) === 43) { let agreementText = [...document.querySelector('#agreement.modal .content .padding').children], removedText = agreementText.slice(89, 95); removedText.forEach(item => item.remove()) } } catch (e) { console.log("can't delete paragraph: " + e.toString()); }</script>
    <script></script>
    <script>!function (e, t, a, n, c) { e.ym = e.ym || function () { (e.ym.a = e.ym.a || []).push(arguments) }, e.ym.l = +new Date, n = t.createElement(a), c = t.getElementsByTagName(a)[0], n.async = 1, n.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js", c.parentNode.insertBefore(n, c) }(window, document, "script"), ym(93522193, "init", { clickmap: !0, trackLinks: !0, accurateTrackBounce: !0, webvisor: false });</script>
    <noscript>
        <div><img src="img/93522193.gif" style="position:absolute; left:-9999px;" alt=""
                data-pagespeed-url-hash="3096568532"></div>
    </noscript>
    <script>
        function sendMetrics(id, mark) {
            if (typeof ym == 'function') {
                ym(id, 'reachGoal', mark)
            }
        }
        document.addEventListener('DOMContentLoaded', () => {
            try {
                let targetMarkYM = 'closes-win-tab';

                window.addEventListener('beforeunload', (event) => {
                    targetMarkYM = 'closes-win-tab';
                });
                window.addEventListener('popstate', (event) => {
                    targetMarkYM = 'bb-click';
                });
                window.addEventListener('unload', (event) => {
                    sendMetrics(93522193, targetMarkYM);
                });
            }
            catch (e) {
                console.log(e.toString())
            }
        })
    </script>
    <script async="" src="js/custom.min.js"></script>

    <noscript class="psa_add_styles">
        <style>
            .ac_footer {
                position: relative;
                top: 10px;
                height: 0;
                text-align: center;
                margin-bottom: 70px;
                color: #a12000
            }

            .ac_footer a {
                color: #a12000
            }

            .ac_footer p {
                text-align: center
            }

            img[height="1"],
            img[width="1"] {
                display: none !important
            }
        </style>
        <link href="css/css.css" rel="stylesheet">
        <link href="css/A.main.css,qv2.pagespeed.cf.4wHFVV0bzU.css" rel="stylesheet"
            data-pagespeed-lsc-url="https://l.hondrodoc-new.com/css/main.css?v2">
        <style>
            input[name="phone"] {
                padding-left: 35px !important;
                position: relative !important;
                background-repeat: no-repeat !important;
                background-position: left 3px center !important
            }

            @media (max-width:425px) {
                .price__new {
                    display: inline-block;
                    margin-right: 20px;
                    font-size: 24px;
                    font-weight: 700;
                    color: #6f9528;
                    vertical-align: middle
                }
            }
        </style>
        <link href="css/A.custom-styles2.min.css,q9.pagespeed.cf.ZPHLtDtC_9.css" type="text/css" rel="stylesheet"
            data-pagespeed-lsc-url="https://l.hondrodoc-new.com/shared_files/css/custom-styles2.min.css?9">
    </noscript>
    <script data-pagespeed-no-defer="">(function () {
            function b() { var a = window, c = e; if (a.addEventListener) a.addEventListener("load", c, !1); else if (a.attachEvent) a.attachEvent("onload", c); else { var d = a.onload; a.onload = function () { c.call(this); d && d.call(this) } } }; var f = !1; function e() { if (!f) { f = !0; for (var a = document.getElementsByClassName("psa_add_styles"), c = 0, d; d = a[c]; ++c)if ("NOSCRIPT" == d.nodeName) { var k = document.createElement("div"); k.innerHTML = d.textContent; document.body.appendChild(k) } } } function g() { var a = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || null; a ? a(function () { window.setTimeout(e, 0) }) : b() }
            var h = ["pagespeed", "CriticalCssLoader", "Run"], l = this; h[0] in l || !l.execScript || l.execScript("var " + h[0]); for (var m; h.length && (m = h.shift());)h.length || void 0 === g ? l[m] ? l = l[m] : l = l[m] = {} : l[m] = g;
        })();
        pagespeed.CriticalCssLoader.Run();</script>
    <div>
        <style>
            .ac_footer {
                position: relative;
                top: 10px;
                height: 0;
                text-align: center;
                margin-bottom: 70px;
                color: #a12000
            }

            .ac_footer a {
                color: #a12000
            }

            .ac_footer p {
                text-align: center
            }

            img[height="1"],
            img[width="1"] {
                display: none !important
            }
        </style>
        <link href="css/css.css" rel="stylesheet">
        <link href="css/A.main.css,qv2.pagespeed.cf.4wHFVV0bzU.css" rel="stylesheet"
            data-pagespeed-lsc-url="https://l.hondrodoc-new.com/css/main.css?v2">
        <style>
            input[name="phone"] {
                padding-left: 35px !important;
                position: relative !important;
                background-repeat: no-repeat !important;
                background-position: left 3px center !important;
            }

            @media (max-width:425px) {
                .price__new {
                    display: inline-block;
                    margin-right: 20px;
                    font-size: 24px;
                    font-weight: 700;
                    color: #6f9528;
                    vertical-align: middle;
                }
            }
        </style>
        <link href="css/A.custom-styles2.min.css,q9.pagespeed.cf.ZPHLtDtC_9.css" type="text/css" rel="stylesheet"
            data-pagespeed-lsc-url="https://l.hondrodoc-new.com/shared_files/css/custom-styles2.min.css?9">
    </div>
    <script>
   $('[name="name"]').on('input change', function () {
       var val = $(this).val();
       $(this).val(val.replace(/[0-9+]/g, ''));
   });
   $('[name="name"]').attr('autocomplete', 'name');
   $('[name="name"]').attr('pattern', '.{2,25}');
   $('[name="phone"]').on('input change', function (e) {
       var val = $(this).val();
       $(this).val(val.replace(/[A-zА-яіїЁё ]/g, ''));
   });
   $('[name="phone"]').get(0).type = 'tel';
   $('[name="phone"]').attr('autocomplete', 'tel');
   $('[name="phone"]').attr('pattern', '.{6,18}');
</script>

</body>

</html>