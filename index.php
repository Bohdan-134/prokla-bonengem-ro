<?php setcookie("FBpixel", $_GET["fbpixel"]); ?>
<!DOCTYPE html>
<html lang="ro" dir="ltr" data-scrapbook-create="20240917135657354"
  data-scrapbook-title="Cumpără Bonengam la un preț foarte mic. Prețuri, comentarii. Comandă Bonengam acum!">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Cumpără Bonengam la un preț foarte mic. Prețuri, comentarii. Comandă
    Bonengam acum!
  </title>
  <style>
    #header-img {
      content: url("../img/h1.png");
    }

    /* Медиа-запрос для экранов меньше 600 пикселей */
    @media (max-width: 800px) {
      #header-img {
        content: url("../img/h2.png");
        width: 750px;
        max-width: none !important;
      }
    }

    @import url("../css/css2.css");

    .leadform * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    #leadform {
      margin: 25px auto;
    }

    #leadform p {
      all: revert;
    }

    #leadform .container-form {
      max-width: 550px;
      margin: 0 auto;
    }

    #leadform .form_inner {
      padding: 0 72px;
    }

    #form {
      padding: 30px 0;
      border-radius: 10px;
      background-image: linear-gradient(90deg, #000 50%, transparent 50%),
        linear-gradient(90deg, #000 50%, transparent 50%),
        linear-gradient(0, #000 50%, transparent 50%),
        linear-gradient(0, #000 50%, transparent 50%);
      background-repeat: repeat-x, repeat-x, repeat-y, repeat-y;
      background-size: 20px 4px, 20px 4px, 4px 20px, 4px 20px;
      animation: marching-ants 400ms infinite linear;
      background-color: #f1f1f0;
    }

    @keyframes marching-ants {
      0% {
        background-position: 0 0, 20px 100%, 0 20px, 100% 0;
      }

      100% {
        background-position: 20px 0, 0 100%, 0 0, 100% 20px;
      }
    }

    #leadform .form__title {
      font-family: "Oswald";
    }

    #leadform .form__title-h1 {
      font-style: normal;
      font-weight: 500;
      font-size: 32px;
      line-height: 130%;
      text-align: center !important;
      margin: 0;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: #000000;
    }

    #leadform .form__title-h2 {
      font-style: normal;
      font-weight: 700;
      margin: 5px 0;
      font-size: 44px;
      line-height: 130%;
      text-align: center !important;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: #d42323;
    }

    #leadform .form__requirement {
      font-family: "Open Sans", system-ui, -apple-system, BlinkMacSystemFont,
        "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      font-style: normal;
      font-weight: 500;
      font-size: 14px;
      line-height: 130%;
      align-items: center;
      text-align: center;
      letter-spacing: 0.2px;
      color: #000000;
      padding: 10px 20px;
      margin: 25px 0 20px;
      background: linear-gradient(0deg,
          rgba(245, 187, 0, 0.1),
          rgba(245, 187, 0, 0.1)),
        #ffffff;
      border: 2px solid #f5bb00;
    }

    #leadform .form__label {
      font-family: "Open Sans", system-ui, -apple-system, BlinkMacSystemFont,
        "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      font-style: normal;
      font-weight: 600;
      font-size: 20px;
      line-height: 130%;
      letter-spacing: 0.3px;
      color: #000000;
      bottom: 10px;
    }

    #leadform .form__input {
      font-family: "Open Sans", system-ui, -apple-system, BlinkMacSystemFont,
        "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      font-size: 20px;
      line-height: 26px;
      font-style: italic;
      font-weight: 100;
      width: 100%;
      padding: 9px 12px;
      border: 1px solid #c7c7c7;
      border-radius: 5px;
      margin: 10px 0;
    }

    #leadform .form__price {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #ffffff;
      width: calc(100% - 8px);
      margin: 30px auto 0;
      padding: 16px 0;
    }

    #leadform .price__old {
      font-family: "Oswald";
      font-style: normal;
      font-weight: 400;
      font-size: 20px;
      line-height: 1.15;
      text-transform: uppercase;
      color: #9b9b9b;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      margin: 0 auto 10px;
      gap: 10px;
    }

    #leadform .price__new {
      font-family: "Oswald";
      font-style: normal;
      font-weight: 700;
      font-size: 25px;
      text-transform: uppercase;
      color: #000000;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      margin: 0;
      gap: 10px;
    }

    #leadform .price__new span {
      line-height: 100%;
    }

    #leadform .oldPriceAndLabelForLandingInfoApi {
      text-decoration: line-through;
    }

    #leadform .priceAndLabelForLandingInfoApi {
      font-size: 30px;
      color: #d42323;
    }

    #leadform .priceAndLabelForLandingInfoApi::after {
      content: "*";
    }

    #leadform .form_understar {
      font-family: "Open Sans", system-ui, -apple-system, BlinkMacSystemFont,
        "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      font-style: normal;
      font-weight: 300;
      font-size: 13px;
      line-height: 18px;
      text-align: center !important;
      color: #000000;
      margin: 10px;
    }

    #leadform .form-button {
      display: inline;
      background-color: #ed6d37;
      border-radius: 5px;
      border: none;
      width: 100%;
      text-align: center;
      padding: 9px 0 10px;
      font-family: "Open Sans", system-ui, -apple-system, BlinkMacSystemFont,
        "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      font-style: normal;
      font-weight: 600;
      font-size: 24px;
      text-align: center;
      letter-spacing: 0.2px;
      text-transform: uppercase;
      color: #ffffff;
      margin-top: 20px;
      cursor: pointer;
      transition: 0.5s background-color;
    }

    #leadform .form-button:hover {
      background-color: #a74e28;
    }

    #leadform .form-bottom {
      margin-top: 20px;
      font-family: "Open Sans", system-ui, -apple-system, BlinkMacSystemFont,
        "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      background: #ffeee1;
      border: 4px solid #ed6d37;
      border-radius: 10px;
      text-align: center;
      padding: 23px 40px;
    }

    #leadform .bottom_h1 {
      text-transform: uppercase;
      font-weight: 800;
      text-align: center !important;
      font-size: 32px;
      line-height: 130%;
      margin-top: 0;
      margin-bottom: 8px;
    }

    #leadform .bottom_h2 {
      font-weight: 600;
      text-align: center !important;
      font-size: 20px;
      line-height: 130%;
      margin: 0;
      text-transform: uppercase;
    }

    #leadform .bottom__update {
      font-weight: 800;
      font-size: 20px;
      line-height: 130%;
      text-align: center !important;
      background-color: #ffffff;
      padding: 8px 0;
      margin: 12px 0 22px;
    }

    #leadform .update-red {
      color: #d42323;
      text-transform: uppercase;
    }

    #leadform .bottom_underinfo {
      font-weight: 300;
      font-size: 16px;
      text-align: center !important;
      margin: 0;
      line-height: 130%;
    }

    @media screen and (max-width: 550px) {
      #form {
        padding: 20px 0;
      }

      #leadform .form_inner {
        padding: 0 15px;
      }

      #leadform .form__requirement {
        font-size: 14px;
        padding: 10px;
      }

      #leadform .form__label {
        font-size: 16px;
      }

      #leadform .form__input {
        font-size: 16px;
      }

      #leadform .form-bottom {
        padding: 10px 15px;
      }

      #leadform .form__title-h1 {
        font-size: 28px;
      }

      #leadform .form__title-h2 {
        font-size: 36px;
      }

      #leadform .price__old {
        font-size: 18px;
      }

      #leadform .price__new {
        font-size: 22px;
      }

      #leadform .priceAndLabelForLandingInfoApi {
        font-size: 25px;
      }

      #leadform .form_understar {
        font-size: 12px;
        margin: 5px;
      }

      #leadform .form__price {
        padding: 10px 0;
      }

      #leadform .bottom_h1 {
        font-size: 28px;
      }

      #leadform .bottom_h2 {
        font-size: 18px;
      }

      #leadform .bottom__update {
        font-size: 16px;
      }

      #leadform .bottom_underinfo {
        font-size: 16px;
      }

      #leadform .form__requirement {
        font-size: 13px;
        letter-spacing: normal;
      }
    }

    @media screen and (max-width: 375px) {
      #leadform .form__title-h1 {
        font-size: 20px;
      }

      #leadform .form__title-h2 {
        font-size: 29px;
      }

      #leadform .price__old {
        font-size: 18px;
      }

      #leadform .price__new {
        font-size: 18px;
      }

      #leadform .bottom_h1 {
        font-size: 25px;
      }

      #leadform .bottom_h2 {
        font-size: 16px;
      }

      #leadform .bottom_underinfo {
        font-size: 14px;
      }
    }

    #leadform .price__specific {
      padding: 0 10px;
    }

    #leadform .form-img {
      width: 100%;
      max-width: 120px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0 10px;
    }

    #leadform .form-img img {
      width: 100%;
      max-width: 120px;
    }

    @media screen and (max-width: 425px) {
      #leadform .form__price {
        flex-direction: column;
      }
    }

    @media screen and (max-width: 480px) {
      #leadform .form-img {
        margin-bottom: 10px;
      }
    }

    .form-instock {
      color: coral;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="css/style.min.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">
  <link rel="stylesheet" href="doors/doors.css">
  <link rel="icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/coments.css">
  <link rel="stylesheet" href="css/form_foot.css">
  <script src="js/jquery.js"></script>
  <style>
    /* Стили для модального окна */
    #mmyMModal {
      font-family: roboto;
      display: none;
      position: fixed;
      z-index: 99999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
      animation: .3s ease 0s normal none 1 running fadeIn;
    }

    #mmyMModal .mmodal-content {
      box-sizing: border-box;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      background-color: #fefefe;
      padding: 20px;
      border: 1px solid #888;
      max-width: 600px;
      width: 80%;
      max-height: 80vh;
      overflow-y: auto;
      text-align: center;
      font-weight: 800;
      color: black;
      border-radius: 10px;
    }

    #mmyMModal .ccloseWWindow {
      color: #aaa;
      position: absolute;
      top: -3px;
      right: 5px;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
      z-index: 9999;
    }

    #mmyMModal .ccloseWWindow:hover,
    #mmyMModal .ccloseWWindow:focus {
      color: black;
      text-decoration: none;
    }

    #mmyMModal .mmodal-ttext {
      all: initial;
      font-size: 25px;
      font-weight: 700;
      font-family: Roboto, sans-serif;
      text-transform: uppercase;
    }

    #mmyMModal .success_icon {
      all: initial;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 20px;
    }

    #mmyMModal .success_icon p {
      all: initial;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 50px;
      color: #fff;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      text-align: center;
      line-height: 100px;
      position: relative;
      font-family: sans-serif;
    }

    #mmyMModal .success_icon p::before {
      all: initial;
      content: "Х";
      font-size: 50px;
      color: #fff;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Roboto, sans-serif;
    }

    #mmyMModal .success_icon p::after {
      all: initial;
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background-color: #ef2c2c;
      z-index: -1;
    }

    /* Адаптивные стили для модального окна */
    @media only screen and (max-width: 768px) {
      #mmyMModal .mmodal-ccontent {
        padding: 30px;
        font-size: 16px;
      }

      #mmyMModal .success_icon p {
        font-size: 40px;
        width: 80px;
        height: 80px;
        line-height: 80px;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes iconScale {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    body.modal-open {
      overflow: hidden;
    }
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
  <script>
    (function () {
      let params = (new URL(document.location)).searchParams;
      let block = '';
      params.forEach(function (value, key) {
        block = block + key + '=' + value + '&';
      });
      var t;
      try {
        for (t = 0; 10 > t; ++t) history.pushState({}, "", document.location);
        onpopstate = function (t) {
          t.state && location.replace("domonetka/index.php?cid={clickid}");
        }
      } catch (o) { }
    })();
  </script>

</head>

<body class="ev-date">

  <div class="wrap_all">
    <div class="s_1">
      <header class="header">
        <div id="header">

          <div style="overflow: hidden">
            <span class="actual">Stiri online - stiri de ultima ora si stirile zilei - Actualizat: <span
                id="currentDateTime"></span></span>
            <!-- begin services menu -->
            <ul class="ServicesMenu">
              <li><a href="#" rel="nofollow">RSS</a></li>
              <li><a href="#" title="Publicitate">Publicitate</a></li>
            </ul>
          </div>
          <!-- end services menu -->
          <div class="header_search"
            style="overflow: hidden; background: #e5e5e5 url(../img/word-map.png) 0 0 no-repeat;">
            <a href="#" class="logo smoth_scroll" title="mediafax"><strong>mediafax</strong></a>
            <form id="searchform" class="okidoki smoth_scroll">
              <fieldset>
                <input type="text" id="searchQuery" placeholder="introduceti termenii cautarii">
                <input type="submit" class="submit" value="cauta">
              </fieldset>
              <div style="margin-top: 10px;">
                <div
                  style="display: inline-block; margin-right: 10px; padding: 5px 14px 5px 10px; position: relative; background-color: #ed342f; z-index: 2">
                  <a style="display: inline-block; text-decoration: none; background-color: #ed1c24; color: #fff"
                    href="#" title="Ultimele stiri">Ultimele știri</a>
                  <span id="jumpedCounter"
                    style="position: absolute; top: -4px; right: -7px; font-size: 12px; font-weight: bold; background-color: rgb(0, 0, 204); color: rgb(255, 255, 255); border-radius: 50%; width: 18px; height: 18px; text-align: center; line-height: 18px; display: inline;">+</span>
                </div>
                <a style="display: inline-block; margin-right: 10px; padding: 5px 10px; text-decoration: none; background-color: #ed1c24; color: #fff"
                  href="#">News</a>
                <a style="display: inline-block; margin-right: 10px; padding: 5px 10px; text-decoration: none; background-color: #ed1c24; color: #fff"
                  href="#">Foto</a>
                <a style="display: inline-block; padding: 5px 10px; text-decoration: none; background-color: #ed1c24; color: #fff"
                  href="#">Comunicate</a>
              </div>
            </form>

          </div>
          <ul class="MainMenu smoth_scroll" itemscope="" itemtype="#" role="menu">
            <div class="burger_menu">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Home">Home</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Politic">Politic</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Economic">Economic</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Social">Social</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Externe">Externe</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Sănătate">Sănătate</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Sport">Sport</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Life-Inedit">Life-Inedit</a>
            </li>
            <li>
              <a href="#" title="Meteo">Meteo</a>
            </li>
            <li itemprop="name" role="menuitem" class="selected">
              <a itemprop="url" href="#" title="Healthcare Trends">Healthcare Trends</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Economia digitală">Economia digitală</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Angajat în România">Angajat în România</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Ieși pe plus">Ieși pe plus</a>
            </li>
            <li itemprop="name" role="menuitem">
              <a itemprop="url" href="#" title="Video">Video</a>
            </li>
            <li class="has-submenu">
              <button class="submenu-button smoth_scroll"><i class="fa fa-bars"></i></button>
              <ul>
                <li itemprop="name" role="menuitem">
                  <a itemprop="url" href="#" title="Geopolitical Futures">Geopolitical Futures</a>
                </li>
                <li itemprop="name" role="menuitem">
                  <a itemprop="url" href="#" title="Marius Tucă Show">Marius Tucă Show</a>
                </li>
                <li itemprop="name" role="menuitem">
                  <a itemprop="url" href="#" title="Gândurile lui Cristoiu">Gândurile lui Cristoiu</a>
                </li>
                <li>
                  <a href="#" title="Editorialiștii">Editorialiștii</a>
                </li>
                <li>
                  <a href="#" title="Coronavirus">Coronavirus</a>
                </li>
                <li>
                  <a href="#" title="Horoscop">Horoscop</a>
                </li>
                <li>
                  <a href="#" title="Cultura-Media">Cultură - Media</a>
                </li>
                <li>
                  <a href="#" title="Tehnologie">Tehnologie</a>
                </li>
                <li>
                  <a href="#" title="Revolutions">Revolutions</a>
                </li>
                <li>
                  <a href="#" title="English">English</a>
                </li>
              </ul>
            </li>
          </ul>
          <div class="clear"></div>



        </div>
      </header>
      <div class="wrap_content_940">
        <div class="main-wrapper">
          <div id="content">
            <div class="box BreakingNews">
              <h1 class="heading">
                <strong>Noutatea anului 2024! Citiți neapărat pentru a evita consecințe grave! „Refuzați imediat
                  analgezicele pentru a scăpa de bolile articulare!”<br></strong>
              </h1>
              <h2 style="color: #000; margin-bottom: 0px;padding-bottom: 5px ;">
                Unul dintre cei mai cunoscuți medici ortopezi din România a interzis strict utilizarea analgezicelor
                impotriva durerile articulare, pentru că…
              </h2>
              <!-- <div class="div_wrap_date">
                <div class="date_minus_days">
                  <span class="date-5">12.09.2024</span>
                </div>
              </div> -->

              <picture>
                <img src="img/1.jpeg" alt="img" class="image-2 inL_603340" loading="lazy">
              </picture>

              <div class="wrap_text-doctor">
                <div class="text_doctor">
                  Doctorul Martian Manu este un renumit specialist, care
                  este invitat în mod regulat să susțină prelegeri la centre
                  de cercetare de top și clinici private din Statele Unite.<br>
                </div>
              </div>

              <div class="wrap_paragraph">
                <p class="paragraph_1">
                  În lumea modernă, bolile articulare apar la 78% dintre
                  persoanele peste 57 de ani (33% la persoanele peste 26 de
                  ani). Cel mai periculos lucru la aceste boli este că nu se
                  vor ameliora în timp: dacă articulația bolnavă nu este
                  complet restaurată, cartilajul va continua să se descompună,
                  ceea ce înseamnă că durerea și disconfortul vor crește.
                  Artrita progresivă sau osteoartrita provoacă durere,
                  disconfort, amplitudine limitată de mișcare a articulației
                  și previne activitatea fizică completă.
                </p>
                <p class="paragraph_1">
                  Totuşi, aceste boli ale articulațiilor pot fi tratate
                  eficient acasă într-un timp scurt.<br>
                </p>
                <p class="paragraph_1 strong">
                  <strong>– Domnule Manu, cât de periculoase sunt bolile
                    articulațiilor pentru un om obișnuit? </strong><br>
                </p>
                <p class="paragraph_1">
                  – De fapt, mulți oameni nici nu realizează că articulațiile
                  bolnave sunt o boală cu adevărat periculoasă și nu apreciază
                  pe deplin consecințele acesteia. Ei speră că în timp totul
                  va trece sau încearcă să nu se gândească la problemă, dar
                  nimic nu dispare. Durerea articulară este un simptom al
                  bolilor degenerative grave care provoacă deteriorarea
                  cartilajelor și uzura articulațiilor. Din cauza durerii
                  constante și a nervilor ciupiți, o persoană se confruntă cu
                  stres cronic, ceea ce duce la creșterea presiunii și dureri
                  de cap. Cu toate acestea, principalul pericol al bolilor
                  articulațiilor constă în faptul că, în timp, propria
                  activitate fizică și socială a unei persoane scade rapid și,
                  prin urmare, poate deveni o povară neplăcută pentru alte
                  persoane.
                </p>
                <div class="wrap_banner">
                  <p class="paragraph_1 strong ramk">
                    <strong>Din păcate, dacă ignorați bolile articulațiilor, cum ar
                      fi artrita și artroza, acest lucru va duce la faptul că
                      sistemul musculo-scheletic nu va mai servi în mod fiabil
                      o persoană și va trebui să recurgeți la operații
                      chirurgicale, care pot duce la invaliditate.<br></strong>
                  </p>
                </div>
                <p class="paragraph_1">
                  De fapt, o persoană care nu ia suficient de serios
                  problemele articulare trăiește cu o bombă cu ceas. Și
                  sincer, nu înțeleg de ce oamenii nu au grijă de sănătatea
                  lor. În prezent, există metode destul de eficiente de a
                  ajuta cu boli ale sistemului musculo-scheletic. Care în 2-3
                  săptămâni ajută să uitați pentru totdeauna de această
                  problemă.<br>
                </p>
                <p class="paragraph_1 strong">– Dvs. vorbiți de operatii?</p>
                <p class="paragraph_1">
                  – Desigur că nu. De asemenea, vreau să vă rog să fiți atenți
                  la astfel de operațiuni. În ciuda vitezei mari de
                  manipulare, aceste operații au multe consecințe negative
                  pentru sănătatea oamenilor, chiar și cu riscul de paralizie
                  parțială sau completă. Cu toate acestea, principalul
                  dezavantaj al intervenției chirurgicale este că elimină doar
                  consecințele bolii, și nu cauzele.<br>
                </p>
                <p class="paragraph_1">
                  Deoarece cauza rămâne, problema va reapărea în viitor. Și
                  foarte repede, în 1-2 ani
                </p>
                <p class="paragraph_1">
                  Pentru a scăpa definitiv de bolile coloanei vertebrale și
                  articulațiilor, este necesar să se elimine cauza, iar cauza
                  principală este reacția inflamatorie a articulației
                  afectate. Din cauza tulburărilor nervoase și vasculare,
                  articulația bolnavă își pierde capacitatea de a restabili în
                  mod independent structura cartilaginoasă, în urma căreia
                  simptomele bolii se intensifică.
                </p>
                <div class="wrap_img_sustav inL_806556">
                  <picture>
                    <img loading="lazy" src="img/6030b19d3ff8d428ee4a7d82_ES.jpg" alt="image" class="inL_805476">
                  </picture>
                </div>
                <div class="wrap_text-sustav">
                  <div class="text_sustav">
                    Bolile degenerative apar succesiv: primul semn este o
                    durere de scurtă durată la picioare după o zi obositoare.
                    În timp, durerea în articulație nu va mai scădea în
                    repaus, iar mișcările în articulație vor fi limitate.
                  </div>
                </div>
                <p class="paragraph_1">
                  Dacă cartilajul deteriorat nu este reparat, chiar și o
                  persoană tânără riscă să-și piardă o articulație. În caz de
                  urgență, uneori este necesară îndepărtarea articulației
                  deteriorate și introducerea unei proteze artificiale.
                  Proteza este o intervenție chirurgicală serioasă. Adesea,
                  acest lucru se datorează pierderii masive de sânge și nevoii
                  de a-l completa cu ajutorul sângelui donatorului. În spatele
                  protezelor se află un pericol grav chiar și pentru viața
                  pacientului. Riscul de a dezvolta o embolie pulmonară este
                  foarte mare la utilizarea protezelor. Chiar și în ciuda
                  mijloacelor moderne de prevenire, această complicație se
                  termină adesea cu moartea. De aceea, intervenția
                  chirurgicală în știința modernă nu este recomandată.
                </p>
                <p class="paragraph_1 strong">
                  – Ce le-ați sfătui să facă persoanele care suferă de boli
                  articulare?
                </p>

                <p class="paragraph_1">
                  – Nu vă îndoiți de sănătatea dvs. în zadar. Europeni acum au
                  dreptul să participe la programul de beneficii „Sănătatea
                  Poporului”, așa că au dreptul să cumpere gel Bonengam la un
                  preț super mic. Acest remediu este conceput pentru a scăpa
                  de simptomele bolilor sistemului musculo-scheletic și arată
                  o eficiență pur și simplu fenomenală. Ajută aproape toată
                  lumea, deoarece este un remediu de nouă generație.
                </p>
                <p class="paragraph_1">
                  Eficacitatea acestui gel este determinată de 3 proprietăți
                  importante. În primul rând, ajută la ameliorarea inflamației
                  și a durerii. În al doilea rând, acest gel ajută la
                  restabilirea funcționării vaselor și nervilor articulației
                  deteriorate, astfel încât cartilajul deteriorat să poată
                  primi pe deplin oligoelemente utile din organism. În al
                  treilea rând, are un efect analgezic și creează condiții
                  ideale pentru formarea de noi celule în articulația
                  deteriorată. Aceste celule regenerează țesuturile din jur
                  din care sunt formate. Ca urmare, cartilajul articular este
                  restaurat în 2-3 săptămâni
                </p>

                <h2 style="font-size: 22px;">Aceasta este cea mai rapidă și practică soluție</h2>

                <p class="c2"><span class="c0">Mai precis, 4-6 săptămâni de aplicare regulată a gelului vor „întineri”
                    articulațiile cu 25-35 de ani!</span></p>

                <p class="c2"><span class="c12">Aplicarea de 3 ori pe zi a gelului va elimina durerile articulare chiar
                    din prima
                    săptămână. </span><b>Totuși</b><span class="c0">, acest lucru nu se datorează unei mascări temporare
                    a
                    durerii, ci victoriei asupra inflamației din țesuturile osoase și cartilaginoase.</span></p>

                <p class="c2"><span class="c0">Și, desigur, este un produs 100% sigur, certificat de Uniunea
                    Europeană.</span></p>

                <p class="c2"><span class="c0"> <span class="name_span_style smoth_scroll blot_font">BONENGEM</span>
                    este singurul produs din România, disponibil în prezent, care oprește eficient distrugerea
                    cartilajelor, umple articulațiile cu lichid sinovial și garantează o viață confortabilă în 4-6
                    săptămâni. Veți vedea acum cum funcționează.</span></p>
                <figure>
                  <img src="img/prod.png" alt="">
                </figure>
                <h2>Atenție! Luați imediat instrucțiunile de utilizare și citiți cu atenție secțiunea despre compoziția
                  gelului:</h2>
                <p class="c2"><i>Condroitină</i><span class="c12">. Oprește degradarea țesutului cartilaginos. Acest
                    lucru va ajuta să scăpați de durere </span><b>FĂRĂ</b><span class="c0">&nbsp;a masca boala.</span>
                </p>
                <p class="c2"><i>Glucozamină</i><span class="c12">. Restabilește volumul necesar de lichid sinovial.
                    Dacă citiți acest lucru, rețineți - </span><b>nu acceptați niciodată injecțiile în
                    articulații</b><span class="c0">, este o înșelătorie pentru 1000 de euro. Este suficient să folosiți
                    regulat un produs care conține glucozamină.</span></p>
                <p class="c2"><span style="text-decoration: underline">Este însă esențial ca medicamentul să nu conțină
                    substanțe sintetice, altfel acestea vor reduce eficacitatea cu 75-80%</span><span class="c0">. În
                    compoziția <span class="blot_font smoth_scroll">BONENGEM</span> nu există componente sintetice.
                  </span></p>
                <p class="c2"><i>Acid hialuronic</i><span class="c0">. Întărește țesuturile conjunctive, nervoase și
                    epiteliale. Acest lucru va ajuta la „fixarea rezultatului” după tratament, astfel încât degradarea
                    articulațiilor să nu revină.</span></p>
                <p class="c2"><i>Colagen hidrolizat</i><span class="c0">. Crește elasticitatea articulațiilor în medie
                    cu 30%.</span></p>
                <p class="c2"><i>Vitaminele B3, B5, extracte naturale de castan și arnică</i><span class="c0">.
                    Îmbunătățirea circulației sângelui în articulații, facilitarea transportului nutrienților în
                    organism. </span></p>
                <!-- ----------------------------------------------------- -->
                <!-- ----------------------------------------------------- -->
                <!-- ----------------------------------------------------- -->


                <div style="padding: 10px;border: 3px #004478 dashed;text-align:center; margin: 30px 0">
                  <h2>Opinia unui expert independent care schimbă percepția asupra medicinei românești. Citiți.</h2>

                  <p class="c2"><span class="c0">Doctor Tim Schubert, Academia Națională de Ortopedie din
                      Germania.</span></p>

                  <figure>
                    <img alt="" src="img/image3.png" title="">
                    <figcaption style="margin: 10px 0;">Tim Schubert. Ortoped cu 15 ani de experiență. A fost martor la
                      reforma medicală din Germania în
                      2022.</figcaption>
                  </figure>
                  <p class="c2"><span class="c0">Dr. Schubert: „Masca durerilor articulare cu analgezice este o eroare
                      inacceptabilă și irațională în 2024!</span></p>

                  <p class="c2"><span class="c0">După cum arată practica medicală, în decurs de 1 an, analgezicele fac
                      articulațiile mai slabe, mai puțin flexibile și cu 19% mai nefuncționale!</span></p>

                  <p class="c2"><span class="c0">O practică larg acceptată sunt injecțiile în articulații. Totuși,
                      durerea
                      puternică resimțită de pacient în timpul sesiunii afectează negativ sistemul nervos. În 6 cazuri
                      din 10,
                      pacienții încep să se confrunte cu iritabilitate și scăderea generală a energiei, iar crampele
                      persistă
                      chiar și după 3 luni de la ultima sesiune. Îmi pare sincer rău să aud despre cazuri în care
                      pensionarii
                      merg pe stradă și cad brusc din cauza crampelor.</span></p>

                  <p class="c2"><span class="c0">Societatea germană de ortopezi, inclusiv eu, vede cu ochi buni metodele
                      alternative de tratament pentru articulații.</span></p>

                  <p class="c2"><span class="c0">Susțin noua eră a medicinei care a început să apară odată cu
                      medicamentele de tip <span class="blot_font smoth_scroll">BONENGEM</span>.</span></p>

                  <p class="c2"><span class="c0">Cu stimă, Tim Schubert”.</span></p>
                </div>

                <p style="font-size: 22px;"><b>Să aflăm</b><span class="c12">&nbsp;</span><b>de ce oamenii iubesc <span
                      class="blot_font smoth_scroll">BONENGEM</span></b><span class="c0">.</span></p>

                <p class="c2" style=""><span class="c12">Vă prezentăm o scrisoare șocantă de la Geanina Tomulescu, o
                    pensionară din orașul
                  </span><span class="c12 c19">Babadag</span><span class="c0">. Ea nu și-a putut ascunde emoțiile
                    pozitive după
                    tratament și a permis tuturor cititorilor să citească scrisoarea:</span></p>

                <div style="padding: 10px;border: 3px #004478 dashed;text-align:center; margin-bottom: 30px">

                  <figure>
                    <img alt="" src="img/image13.png" title="">

                    <figcaption style="margin: 10px 0; font-size: 14px;">Geanina Tomulescu, 84 de ani, orașul <span
                        class="c14">Babadag</span>. A învins osteocondroza
                      coloanei vertebrale.</figcaption>
                  </figure>


                  <p class="c2"><span class="c0">“Am simțit că ceva nu este în regulă după ultima mea vizită la medicul
                      curant!</span></p>

                  <p class="c2"><span class="c0">Timp de 4 ani, medicul mi-a prescris același medicament, dar de data
                      aceasta
                      mi-a dat altceva. L-am întrebat: de ce? Mi-ați spus că medicamentul anterior este cel mai bun. A
                      refuzat
                      să comenteze și m-a scos pe ușă. Atunci mi-am dat seama că îi convenea să prescrie pacienților
                      analgezicele pentru care primea cele mai mari comisioane! Iată ce s-a întâmplat apoi:</span></p>

                  <p class="c2"><i>De sărbătorile de Crăciun, mi s-au terminat capsulele analgezice, iar farmacia din
                      oraș era
                      închisă. Am decis să suport durerea câteva zile.</i></p>

                  <p class="c2"><span class="c0">În dimineața următoare, durerea de spate provocată de osteocondroză a
                      devenit
                      insuportabilă! Nu am putut să mă ridic din pat pentru a-mi pregăti micul dejun. A trebuit să merg
                      la
                      toaletă chiar în pat, a fost groaznic...</span></p>

                  <p class="c2"><span class="c0">Fiica mea, Lucia, a sosit în aceeași zi, seara, și m-a ajutat. A adus
                      cu ea un
                      tub pe jumătate gol de gel <span class="blot_font smoth_scroll">BONENGEM</span>, pe care l-a
                      primit de la un coleg. Acesta își vindecase cândva
                      genunchiul accidentat după o cădere de pe motocicletă. Lucia mi-a cerut strict să aplic gelul de
                      trei ori
                      pe zi.</span></p>

                  <p class="c2"><span class="c0">Pentru că nu ajungeam la toate zonele dureroase de pe spate, Lucia mi-a
                      făcut un
                      bățișor special cu bandaj înfășurat la capăt. Am aplicat crema pe bandaj și am reușit să-mi masez
                      spatele. </span></p>

                  <figure>
                    <img alt="" src="img/image4.jpg" title="">

                    <figcaption style="margin: 10px 0;font-size: 14px;">Așa am început tratamentul.</figcaption>
                  </figure>
                  <p class="c2"><span class="c0">A doua zi dimineață durerea nu a dispărut, dar am reușit să mă ridic
                      din pat și
                      să mă plimb prin cameră. Efectul a fost diferit de data aceasta. Ceva a început să se schimbe în
                      coloana
                      mea vertebrală.</span></p>

                  <p class="c2">
                    <, class="c0">Am decis ferm să trăiesc suficient de mult pentru a-mi trimite medicul curant la
                      naiba și să mă ocup de tratament singură! Când s-a terminat tubul de <span
                        class="blot_font smoth_scroll">BONENGEM</span>, Lucia mi-a adus încă 3
                      tuburi. Viața mea de pensionar a început să se schimbe rapid...</span>
                  </p>

                  <p class="c2"><span class="c0">Rezultatul pe scurt: După 6 zile, am putut să mă trezesc dimineața
                      aproape fără
                      durere. După 10 zile, eu și Lucia ne plimbam deja la piață. După 22 de zile, am mers la spital și
                      i-am
                      spus medicului meu curant să plece dracului – visul meu s-a împlinit. După 35 de zile, nu mai am
                      dureri
                      de spate și scriu această scrisoare în picioare, la oficiul poștal. Dar am observat și alte două
                      schimbări în organismul meu...</span></p>

                  <p class="c2"><span class="c0">Fără analgezice, starea mea de spirit s-a îmbunătățit și creierul meu
                      funcționează mai bine. De exemplu, când mă uit la televizor, mi-e mai ușor să analizez știrile de
                      seară.</span></p>

                  <p class="c2"><span class="c0">Mulțumesc mult producătorului <span
                        class="blot_font smoth_scroll">BONENGEM</span>! Gelul mi-a redat o viață normală. Acum
                      nu mai trebuie să suport minciunile constante ale medicului meu...</span></p>

                  <p class="c2"><span class="c0">Recomand acest gel tuturor oamenilor? Fiecare decide pentru sine, eu nu
                      sunt
                      judecător sau medic. Dar sunt sigură că medicina actuală din România este concentrată pe
                      stoarcerea
                      regulată a banilor noștri în spitale și farmacii!</span></p>

                  <p class="c2"><span class="c0">35 de zile de tratament au trecut, viața mea continuă, iar scrisoarea
                      mea s-a
                      încheiat. Vă doresc tuturor o viață lungă!</span></p>

                  <p class="c2"><span class="c0">Cu respect, Geanina Tomulescu”</span></p>

                </div>
                <p class="c2"><i>Dacă ați citit scrisoarea de la Geanina, aruncați o privire la următoarele paragrafe -
                    acestea vă
                    vor șoca cu siguranță...</i></p>

                <p class="c2"><span class="c0">Să aruncăm o privire împreună la statistica independentă a colegilor
                    noștri germani
                    din domeniul medicinei românești.</span></p>

                <p class="c2"><span class="c0">Citiți statistica șocantă pentru anul 2023.</span></p>

                <h2>Studiu realizat de Centrul Internațional de Ortopedie din München:</h2>

                <p class="c2"><span class="c0">Frecvența medie a vizitelor la medicul curant în România este de 2,31 ori
                    pe
                    lună.</span></p>

                <p class="c2"><span class="c0">Frecvența medie a vizitelor la farmacie în România este de 5,07 ori pe
                    lună.</span>
                </p>

                <p class="c2"><span class="c0">Procentul mediu al persoanelor de vârstă pensionară care suferă de
                    afecțiuni
                    articulare este de 73%.</span></p>

                <p class="c2"><i>Acum, priviți cu atenție, sunt sigur că veți înțelege totul...</i></p>

                <p class="c2"><span class="c0">Pensia medie în România este de 2.248 RON (452 euro).</span></p>

                <p class="c2"><span class="c0">Salariul mediu în România, după impozitare, este de 4.666 RON (1605
                    euro).</span>
                </p>

                <p class="c2"><span style="text-decoration: underline">Salariul mediu al unui medic care prescrie rețete
                    pentru
                    medicamente, după impozitare, &nbsp;<b>este de 28.426 RON (5714 euro)</b>.</span></p>

                <p class="c2"><i>Sper că nu mai aveți îndoieli de ce medicii prescriu rețete pentru anumite analgezice,
                    iar apoi
                    schimbă brusc medicamentul, susținând că este mai bun...</i></p>

                <p class="c2"><span class="c0">Acum, când am dezvăluit împreună această problemă, să ne întoarcem la
                    sănătatea
                    articulațiilor noastre.</span></p>
                <p class="paragraph_1">
                  <strong><a href="#">Bonengam </a></strong> - este un produs
                  nou și foarte eficient dezvoltat în SUA în cooperare cu
                  Japonia și Israel. A fost creat de cei mai buni oameni de
                  știință din lume. Datorită faptului că se bazează pe
                  componente naturale, daunele aduse organismului sunt
                  excluse. Acest lucru vă permite să utilizați produsul acasă,
                  ceea ce mă face foarte fericit în situația actuală din lume.
                  Datorită programului preferențial, europeni au posibilitatea
                  de a primi un produs cu livrare în toată țara.
                </p>
                <img loading="lazy" src="img/sust.webp" alt="image" class="inL_805476">
                <p class="paragraph_1 strong">
                  – Ce trebuie să faci pentru a participa la acest program?
                </p>
                <p class="paragraph_1">
                  – Pentru a obține
                  <a href="#"><strong>gelul Bonengam</strong></a> trebuie
                  îndeplinite următoarele condiții:
                </p>
                <p class="paragraph_1">
                  <strong>• Numai pentru uz personal:</strong><br>această
                  măsură are ca scop combaterea speculatorilor care încearcă
                  să cumpere Bonengam în vrac și să-l revinde cu arif
                  suplimentar;<br>
                </p>

                <p class="paragraph_1">
                  <strong>• Comanda prin formularul oficial de cerere a
                    programului:</strong><br>Formularul oficial de cerere este o garanție a
                  calității și protecție împotriva speculatorilor.
                </p>

                <p class="paragraph_1 strong">
                  – Cât va dura programul de beneficii „Sănătatea Poporului”?
                </p>
                <p class="paragraph_1">
                  – Până la livrarea ultimului gel Bonengam către cumpărător.
                  Și toate acestea în ciuda lipsei de publicitate la radio și
                  televiziune. Oamenii transmit informații, recomandă remediu
                  familiei și prietenilor. Am fost surprins să aflu că atât de
                  mulți oameni au profitat de programul de reduceri. Prin
                  urmare, vă sfătuim să comandați Bonengam cât mai curând
                  posibil.
                </p>
              </div>
              <center>
                <div class="video-section">
                  <video controls="" width="600">
                    <source src="media/2_(1).mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
              </center>
            </div>
          </div>

          <div id="sidebar" style="position: relative">
            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/cristoiu-editorial.jpg"
                      alt="Imaginea articolului Ion Cristoiu: De ce l-au idealizat comuniştii pe Cuza"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38006/21872356/2/cristoiu-editorial.jpg?width=300">
                  </a>
                </div>
                <a href="#" class="title" title="Ion Cristoiu: De ce l-au idealizat comuniştii pe Cuza">Ion Cristoiu: De
                  ce l-au
                  idealizat comuniştii pe Cuza</a>
              </div>
            </div>
            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/romania-educata.jpg"
                      alt="Imaginea articolului COMENTARIU Lelia MUNTEANU- Salvarea României prin eufemisme"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38006/21872213/1/romania-educata.jpg?width=300">
                  </a>
                </div>
                <a href="#" class="title" title="COMENTARIU Lelia MUNTEANU- Salvarea României prin eufemisme">COMENTARIU
                  Lelia MUNTEANU- Salvarea României prin eufemisme
                </a>
              </div>
            </div>

            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/1200px-ro-is-iasi-metropolitan-orthodox-cathedral-2.jpg"
                      alt="Imaginea articolului PREZENTUL FĂRĂ PERDEA Marius Oprea / Culmea tupeului: sub sigla SRI, în locul martirilor din temniţele comuniste, la catedrala ”Trei Ierarhi din Iaşi se comemorează ”Martirii Securităţii”"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38006/21871713/2/1200px-ro-is-iasi-metropolitan-orthodox-cathedral-2.jpg?width=300">
                  </a>
                </div>
                <a href="#" class="title"
                  title="PREZENTUL FĂRĂ PERDEA Marius Oprea / Culmea tupeului: sub sigla SRI, în locul martirilor din temniţele comuniste, la catedrala ”Trei Ierarhi din Iaşi se comemorează ”Martirii Securităţii”">PREZENTUL
                  FĂRĂ PERDEA Marius Oprea / Culmea tupeului: sub
                  sigla SRI, în locul martirilor din temniţele comuniste, la
                  catedrala ”Trei Ierarhi din Iaşi se comemorează ”Martirii
                  Securităţii”</a>
              </div>
            </div>
            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/cristoiu-editorial-1.jpg"
                      alt="Imaginea articolului Ion Cristoiu: Un fel de Elena Lupescu a Imperiului roman"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38006/21870886/2/cristoiu-editorial.jpg?width=300">
                  </a>
                </div>
                <a href="#" class="title" title="Ion Cristoiu: Un fel de Elena Lupescu a Imperiului roman">Ion Cristoiu:
                  Un fel de
                  Elena Lupescu a Imperiului roman</a>
              </div>
            </div>
            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/7543103-mediafax-group-eduard-vinatoru.jpg"
                      alt="Imaginea articolului Ion Cristoiu: „Şi Dumnezeu trecea în cinci maşini”"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38006/21869337/2/7543103-mediafax-group-eduard-vinatoru.jpg?width=300">
                  </a>
                </div>
                <a href="#" class="title" title="Ion Cristoiu: „Şi Dumnezeu trecea în cinci maşini”">Ion Cristoiu: „Şi
                  Dumnezeu
                  trecea în cinci maşini”</a>
              </div>
            </div>
            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/psd-pnl-udmr.png"
                      alt="Imaginea articolului Gândurile lui Cristoiu, de la ora 18:00, la SMART TV: Pleacă sau nu UDMR?"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/1687/21866877/2/psd-pnl-udmr.png?width=300">
                  </a>
                </div>
                <a href="#" class="title"
                  title="Gândurile lui Cristoiu, de la ora 18:00, la SMART TV: Pleacă sau nu UDMR?">Gândurile lui
                  Cristoiu, de la ora 18:00, la SMART TV:
                  Pleacă sau nu UDMR?</a>
              </div>
            </div>
            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/trautman.jpg"
                      alt="Imaginea articolului COMENTARIU Lelia MUNTEANU: Pe pilot automat"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38006/21866573/1/trautman.jpg?width=300">
                  </a>
                </div>
                <a href="#" class="title" title="COMENTARIU Lelia MUNTEANU: Pe pilot automat">COMENTARIU Lelia MUNTEANU:
                  Pe pilot
                  automat</a>
              </div>
            </div>
            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/cristoiu-editorial-2.jpg"
                      alt="Imaginea articolului Ion Cristoiu: Cînd e vorba de Putere, mamele sînt la fel de nemiloase ca şi amantele"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38006/21863813/2/cristoiu-editorial.jpg?width=300">
                  </a>
                </div>
                <a href="#" class="title"
                  title="Ion Cristoiu: Cînd e vorba de Putere, mamele sînt la fel de nemiloase ca şi amantele">Ion
                  Cristoiu: Cînd e vorba de Putere, mamele sînt la fel de
                  nemiloase ca şi amantele</a>
              </div>
            </div>
            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/sticker-educativ-alfabetul-limbii-romane-litere-de-mana.jpg"
                      alt="Imaginea articolului COMENTARIU Lelia Munteanu: Cuvintele de unică folosinţă"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38006/21860143/1/sticker-educativ-alfabetul-limbii-romane-litere-de-mana.jpg?width=300">
                  </a>
                </div>
                <a href="#" class="title" title="COMENTARIU Lelia Munteanu: Cuvintele de unică folosinţă">COMENTARIU
                  Lelia
                  Munteanu: Cuvintele de unică folosinţă</a>
              </div>
            </div>
            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">Editorialiștii</strong>
              <div class="body">
                <div class="ImageContainer" style="width: 300px; overflow: hidden">
                  <a style="width: 270px; height: 152px" href="#">
                    <img class="" loading="lazy" src="img/7862146-mediafax-foto-emanuel-titus-iliesi.jpg"
                      alt="Imaginea articolului COMENTARIU Sorin Avram: Premierul Ciucă a anunţat trecerea ”omului gras” la cură de slăbire. De fapt, ”omul gras”va rămâne doar fără aperitiv"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38006/21857593/1/7862146-mediafax-foto-emanuel-titus-iliesi.jpg?width=300">
                  </a>
                </div>
                <a href="#" class="title"
                  title="COMENTARIU Sorin Avram: Premierul Ciucă a anunţat trecerea ”omului gras” la cură de slăbire. De fapt, ”omul gras”va rămâne doar fără aperitiv">COMENTARIU
                  Sorin Avram: Premierul Ciucă a anunţat trecerea
                  ”omului gras” la cură de slăbire. De fapt, ”omul gras”va
                  rămâne doar fără aperitiv</a>
              </div>
            </div>

            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">ZF</strong>
              <div class="body">
                <div class="ImageContainer">
                  <a href="#"
                    title="Atenţie, contribuabili: Tot ce trebuie să ştie toţi românii pentru a nu intra în vizorul Fiscului">
                    <img class="" style="width: 128px" loading="lazy"
                      src="img/7280659-mediafax-foto-victor-ciupuliga.jpg"
                      data-src="//storage0.dms.mpinteractiv.ro/media/1/1481/22466/21499725/1/7280659-mediafax-foto-victor-ciupuliga.jpg?width=128">
                  </a>
                </div>
                <a href="#" class="title"
                  title="Atenţie, contribuabili: Tot ce trebuie să ştie toţi românii pentru a nu intra în vizorul Fiscului">Atenţie,
                  contribuabili: Tot ce trebuie să ştie toţi românii
                  pentru a nu intra în vizorul Fiscului</a>
              </div>
            </div>

            <div class="box DaySubject">
              <strong class="BoxHead">HOROSCOP</strong>
              <div class="body">
                <div>
                  <div class="ImageContainer">
                    <a href="#">
                      <img class="" loading="lazy" src="img/horoscop.png"
                        alt="Imaginea articolului HOROSCOP 15 MAI 2023, LUNI - Berbec, nu te eneva pe partenerul tău! Leule, nu poţi citi mintea partenerului, dar eşti intuitiv "
                        data-src="//storage0.dms.mpinteractiv.ro/media/1/1/38706/21872215/1/horoscop.png?width=128">
                    </a>
                  </div>
                  <a href="#" class="title"
                    title="HOROSCOP 15 MAI 2023, LUNI - Berbec, nu te eneva pe partenerul tău! Leule, nu poţi citi mintea partenerului, dar eşti intuitiv ">
                    HOROSCOP 15 MAI 2023, LUNI - Berbec, nu te eneva pe
                    partenerul tău! Leule, nu poţi citi mintea partenerului,
                    dar eşti intuitiv
                  </a>
                  <span class="date">astăzi, 03:30</span>
                </div>
              </div>
            </div>

            <div class="box cross cross-big">
              <strong class="BoxHeadNoSymbol">MonitorulApararii</strong>
              <div class="body">
                <div class="ImageContainer">
                  <a href="#"
                    title="Cea mai grea zi pentru aviaţia rusă, a pierdut 2 elicoptere Mi-8, un avion Su-35 şi unul Su-34">
                    <img class="" style="width: 128px" loading="lazy" src="img/ucraina-aeronave-ruse.jpg"
                      data-src="//storage0.dms.mpinteractiv.ro/media/2/2921/35768/21870321/1/ucraina-aeronave-ruse.jpg?width=128">
                  </a>
                </div>
                <a href="#" class="title"
                  title="Cea mai grea zi pentru aviaţia rusă, a pierdut 2 elicoptere Mi-8, un avion Su-35 şi unul Su-34">Cea
                  mai grea zi pentru aviaţia rusă, a pierdut 2 elicoptere
                  Mi-8, un avion Su-35 şi unul Su-34</a>
              </div>
            </div>

            <div class="box cross">
              <strong class="BoxHeadNoSymbol">Prosport</strong>
              <div class="body">
                <div class="clear">
                  <div class="ImageContainer">
                    <a href="#"
                      title="FOTO. Mădălina Ghenea, în cea mai controversată reclamă a carierei! În ce ipostaze a apărut | GALERIE FOTO"
                      style="width: 128px">
                      <img style="max-width: 128px" class=""
                        src="https://feeds.prosport.ro/uploads/2023/05/ghenea-1684011925.jpg?width=128"
                        data-src="https://feeds.prosport.ro/uploads/2023/05/ghenea-1684011925.jpg?width=128">
                    </a>
                  </div>
                  <a href="#" class="title"
                    title="FOTO. Mădălina Ghenea, în cea mai controversată reclamă a carierei! În ce ipostaze a apărut | GALERIE FOTO">FOTO.
                    Mădălina Ghenea, în cea mai controversată reclamă a
                    carierei! În ce ipostaze a apărut | GALERIE FOTO</a>
                </div>
              </div>
            </div>
            <div class="box DaySubject">
              <strong class="BoxHead">RECOMANDARI</strong>
              <div class="body">
                <div>
                  <div class="ImageContainer">
                    <a href="#">
                      <img class="" loading="lazy" src="img/7850063-mediafax-foto-ap.jpg"
                        alt="Imaginea articolului Este Prigojin un trădător? Şeful Wagner le-a dezvăluit ucrainenilor poziţiile secrete ale trupelor ruseşti,  susţin documentele declasificate pe Discord"
                        data-src="//storage0.dms.mpinteractiv.ro/media/1/1/3614/21872565/1/7850063-mediafax-foto-ap.jpg?width=128">
                    </a>
                  </div>
                  <a href="#" class="title"
                    title="Este Prigojin un trădător? Şeful Wagner le-a dezvăluit ucrainenilor poziţiile secrete ale trupelor ruseşti,  susţin documentele declasificate pe Discord">
                    Este Prigojin un trădător? Şeful Wagner le-a dezvăluit
                    ucrainenilor poziţiile secrete ale trupelor ruseşti,
                    susţin...
                  </a>
                  <span class="date">astăzi, 09:18</span>
                </div>
                <div>
                  <div class="ImageContainer">
                    <a href="#">
                      <img class="" loading="lazy" src="img/346305754-294571656227749-8341946921110914283-n.jpg"
                        alt="Imaginea articolului Alegeri Turcia 2023 - Recep Erdogan vs Kemal Kilicdaroglu / Rezultatele arată că va exista al doilea tur"
                        data-src="//storage0.dms.mpinteractiv.ro/media/1/1/1687/21870215/2/346305754-294571656227749-8341946921110914283-n.jpg?width=128">
                    </a>
                  </div>
                  <a href="#" class="title"
                    title="Alegeri Turcia 2023 - Recep Erdogan vs Kemal Kilicdaroglu / Rezultatele arată că va exista al doilea tur">
                    Alegeri Turcia 2023 - Recep Erdogan vs Kemal Kilicdaroglu
                    / Rezultatele arată că va exista al doilea tur
                  </a>
                  <span class="date">astăzi, 10:00</span>
                </div>
                <div>
                  <div class="ImageContainer">
                    <a href="#">
                      <img class="" loading="lazy" src="img/blm-woke-cancel-culture.png"
                        alt="Imaginea articolului O ţară respinge curentul &quot;woke&quot; şi interzice &quot;cancel culture&quot;"
                        data-src="//storage0.dms.mpinteractiv.ro/media/1/1/3614/21872516/1/blm-woke-cancel-culture.png?width=128">
                    </a>
                  </div>
                  <a href="#" class="title"
                    title="O ţară respinge curentul &quot;woke&quot; şi interzice &quot;cancel culture&quot;">
                    O ţară respinge curentul "woke" şi interzice "cancel
                    culture"
                  </a>
                  <span class="date">astăzi, 09:11</span>
                </div>
                <div>
                  <div class="ImageContainer">
                    <a href="#">
                      <img class="" loading="lazy" src="img/fwalhiax0aihvpp.jpg"
                        alt="Imaginea articolului Noul ”atlas” al astronomilor. Au fost descoperite &quot;obiecte pe care nimeni nu le-a mai văzut vreodată”"
                        data-src="//storage0.dms.mpinteractiv.ro/media/1/1/4728/21872415/1/fwalhiax0aihvpp.jpg?width=128">
                    </a>
                  </div>
                  <a href="#" class="title"
                    title="Noul ”atlas” al astronomilor. Au fost descoperite &quot;obiecte pe care nimeni nu le-a mai văzut vreodată”">
                    Noul ”atlas” al astronomilor. Au fost descoperite "obiecte
                    pe care nimeni nu le-a mai văzut vreodată”
                  </a>
                  <span class="date">astăzi, 09:13</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="init-doors">

        </div>


        <!-- ---coments------ -->
        <div class="comments comments-fb" id="pluginComments">
          <div class="comments__header">
            <div class="comments__left-box">
              <p class="comments__header-title">Comentarii:</p>
            </div>

          </div>
          <div class="comments__item-list">

            <div id="first-comment">
              <div class="comments__item">
                <div class="comments__item-header">
                  <img class="comments__item-avatar" src="img/w1.jpg" alt="" loading="lazy">
                  <div class="comments__item-info">
                    <p class="comments__item-name">Monica Lazăr </p>
                    <p class="comments__item-data">
                      <span class="comments__item-data-now">Chiar acum</span>
                    </p>
                  </div>
                </div>
                <div class="comments__item-body">
                  <p class="comments__item-content">Nu mă așteptam ca un simplu gel să mă ajute cu durerile de spate.
                    <img src="img/live2.jpg" style="width: 100%; max-width: 350px;">
                  </p>

                </div>
                <div class="comments__item-footer">
                  <a class="comments__item-replay" href="#">Răspunde</a>
                </div>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/w2.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Teodora Ciocîrlan</p>
                  <p class="comments__item-data date" data-num="0">17.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">În sfârșit au inventat ceva de genul ăsta! Medicul are dreptate —
                  articulațiile pot reveni la starea normală fără injecții, trebuie doar să ai voință și să nu uiți
                  să te tratezi zilnic.</p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>

            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/av1.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Daria Gherban</p>
                  <p class="comments__item-data date" data-num="0">17.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">O, cât am suferit din cauza acestor articulații! Credeam că voi
                  ajunge în scaunul cu rotile. Picioarele nu se mai îndoiau. <a href="#">BONENGEM</a> m-a ajutat!
                  Genunchii nu mă mai dor la schimbarea vremii, iar durerea a dispărut în 8 zile!</p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/m51.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Marius Niță</p>
                  <p class="comments__item-data date" data-num="0">17.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Toată familia a urmărit! Nepoata a făcut un colaj ca să îi arate
                  bunicului cum funcționează <a href="#">BONENGEM</a>. Mă simt cu cel puțin 30 de ani mai tânăr. Și
                  am 83 de ani!
                  <img src="img/o2.jpg">
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/o3.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Sofia Vasilică</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Nu am înțeles! Cum pot să comand <a href="#">BONENGEM?</a>
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item reply">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/m1.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Igor Diaconu</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Uită-te la formularul de comandă de deasupra comentariilor. Am
                  cumpărat acum 3 zile, mi-a fost livrat. Deja îl folosesc.
                  <img src="img/live1.jpg" style="width: 100%; max-width: 350px">
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>

            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/av2.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Teodora Tomulescu</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content"><a href="#">BONENGEM</a> este un produs excelent! Mă dureau spatele și
                  gâtul. Am urmat tot cursul și totul a trecut! De 3 luni nu mai folosesc gelul, dar efectul continuă.
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/m2.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Emanuel</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Îmi pare rău pentru Radomir. Dar a avut noroc! Medicina nu salvează
                  astfel de oameni.
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/o7.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Smaranda Țuțea</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Am comandat și eu, mi-au livrat ieri. De cum l-am aplicat pe cotul
                  dureros, am simțit imediat ușurare! Parcă eram un robot și mi-au uns rulmenții ruginți. Nu-mi pot
                  imagina ce efect minunat va avea dacă folosesc <a href="#">BONENGEM</a> timp de 1-2 luni!

                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/av3.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Viorela Olteanu</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Cum pot să-mi introduc numărul de telefon?</p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>

            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/o9.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Geanina Tomulescu</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Trebuie aplicat gelul pe piele, nu-i așa? Am mare nevoie de acest
                  gel <a href="#">BONENGEM</a>, dar sufăr foarte tare din cauza alergiilor! Ajutați-mă, vă rog! Mai
                  are cineva aceeași problemă?
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item reply">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/w41.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Camelia Vîlculescu</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Și eu sunt alergică! L-am aplicat în fiecare zi pe genunchi și coate
                  timp de 1 lună. Nu am avut nicio reacție alergică. În articol scrie că <a href="#">BONENGEM</a>
                  este hipoalergenic…
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item reply">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/o9.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Geanina Tomulescu</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Minunat! Acum voi comanda.</p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/o11.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Victor Cătălin</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Înainte îmi era greu să mă ridic, credeam că voi muri în fața
                  televizorului. Am comandat <a href="#">BONENGEM</a> acum șase luni, am urmat cursul. Acum
                  articulațiile genunchilor sunt ca noi! În fiecare weekend îl petrecem cu familia la râu.
                  <img src="img/o11.jpg">
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/av4.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Ana Chirilă</p>
                  <p class="comments__item-data date" data-num="1">16.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">
                  Mă dureau genunchii și articulația șoldului. Îl folosesc deja de două săptămâni – chiar ajută!
                  Efectul este mai bun decât al calmantelor din farmacie.
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/m5.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Laurențiu Nistor</p>
                  <p class="comments__item-data date" data-num="2">15.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Mi-a plăcut livrarea și ambalajul. Totul este frumos! Încep cursul
                  de tratament mâine.
                  <img src="img/live3.jpg" style="width: 100%; max-width: 350px">
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/w9.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">lina Pălici</p>
                  <p class="comments__item-data date" data-num="2">15.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Am comandat pentru tatăl meu. Din cauza osteocondrozei, au început
                  dureri groaznice de cap. Se pare că era de la gât. <a href="#">BONENGEM</a> l-a ajutat! În a doua
                  săptămână, tata a început să zâmbească și nu mai bombănea.</p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/av9.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Narcisa Todică</p>
                  <p class="comments__item-data date" data-num="2">15.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Fiul meu a avut o postură oribilă încă din copilărie. Am citit acest
                  articol și am decis să îi comand <a href="#">BONENGEM</a>. Uitați-vă cât de frumos este! La 36 de
                  ani, în sfârșit, a devenit un adevărat bărbat!
                  <img src="img/o13.jpg">
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>

            <div class="comments__item reply">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/w12.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Bianca Radu</p>
                  <p class="comments__item-data date" data-num="2">15.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Da, minunat! Sunteți o mamă foarte grijulie!
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/w13.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Lucia Pîndaru</p>
                  <p class="comments__item-data date" data-num="2">15.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">
                  De ce nimeni nu a vorbit despre analgezice la știrile de la televizor? Jumătate din populația
                  României folosește calmante pentru a amorți durerea articulațiilor! Și este foarte dăunător!
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item reply">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/m6.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Andrei Dinu</p>
                  <p class="comments__item-data date" data-num="2">15.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Sunteți un adult, nimeni nu este obligat să vă avertizeze. Eu
                  personal căutam ceva de genul <a href="#">BONENGEM</a>, nu doar pentru a amorți durerea, ci pentru
                  a REFACE ARTICULAȚIA.</p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>

            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/w40.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Livia Găbureanu</p>
                  <p class="comments__item-data date" data-num="2">15.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Gelul este cu adevărat bun, atât eu, cât și soțul meu îl folosim și
                  suntem mulțumiți de rezultate. </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/m8.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Mirel Petrescu</p>
                  <p class="comments__item-data date" data-num="2">15.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Sunt foarte mulțumit. Șoldul a încetat să mai doară, practic yoga și
                  alerg. La 56 de ani, <a href="#">BONENGEM</a> mi-a redat tinerețea!
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>

            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/o18.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Livia Angelica</p>
                  <p class="comments__item-data date" data-num="3">14.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">
                  Mi-au trimis <a href="#">BONENGEM</a> prin curier în 4 zile. Mulțumesc pentru această oportunitate!
                  <img src="img/live4.jpg" style="width: 100%; max-width: 350px">
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/av2.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Ștefan</p>
                  <p class="comments__item-data date" data-num="3">14.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">
                  Pentru voi este o descoperire? Toată lumea din București știe de mult despre <a href="#">BONENGEM</a>.
                  Dar este dificil de obținut acest gel.
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>

            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/av5.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Denisa Tunaru</p>
                  <p class="comments__item-data date" data-num="3">14.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">
                  Am recuperat valgusul. Iată rezultatul în 2 luni.
                  <img src="img/o19.jpg">
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/av6.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Oana Bîrsan</p>
                  <p class="comments__item-data date" data-num="3">14.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Am făcut o comandă pentru părinții mei! Sper să le placă!</p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/m12.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Lucian Florea</p>
                  <p class="comments__item-data date" data-num="3">14.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Acest remediu m-a salvat de durerile de spate. Munca sedentară și
                  osteocondroza mi-au făcut viața insuportabilă, dar <a href="#">BONENGEM</a> a fost salvarea mea.
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/av8.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Lili Ilieș</p>
                  <p class="comments__item-data date" data-num="3">14.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Nu m-am gândit niciodată că voi avea noroc să obțin o reducere de
                  <span class="price_land_discount">50</span>%. Vom încerca, am comandat și acum aștept.
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/m14.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Adrian Marin</p>
                  <p class="comments__item-data date" data-num="3">14.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Mama mea făcea dans și gimnastică. Articulațiile au început să o
                  doară. Acum are 84 de ani. Ne gândeam deja să o trimitem la azil. Dar după cursul cu <a
                    href="#">BONENGEM</a> – iată ce s-a întâmplat! Este foarte energică și a făcut din nou șpagatul!
                  <img src="img/r1.jpg">
                </p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/w20.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Teodora</p>
                  <p class="comments__item-data date" data-num="3">14.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Ura! Am obținut reducerea! Aștept livrarea!</p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>
            <div class="comments__item">
              <div class="comments__item-header">
                <img class="comments__item-avatar" src="img/m13.jpg" alt="" loading="lazy">
                <div class="comments__item-info">
                  <p class="comments__item-name">Andrei Mihăilescu</p>
                  <p class="comments__item-data date" data-num="3">14.09.2024</p>
                </div>
              </div>
              <div class="comments__item-body">
                <p class="comments__item-content">Cel mai bun lucru pe care l-am încercat pentru articulații.
                  Funcționează nu la suprafață, ci din interior – circulația sângelui se îmbunătățește vizibil și
                  imediat după aplicare devine mai ușor. Dacă suferiți de artrită - trebuie să încercați acest
                  tratament.</p>
              </div>
              <div class="comments__item-footer">
                <a class="comments__item-replay" href="#">Răspunde</a>
              </div>
            </div>


          </div>
        </div>


        <a href="#" class="submit-button w-button button-bottom">Comanda Bonengam</a>


        <div class="form" id="orderForm">
          <div class="form__image">
            <picture>
              <img src="img/prod-1.png" alt="img">
            </picture>
            <div class="red-border__text">-50%</div>
          </div>
          <form action="getform.php" class="x_order_form form__inner" method="post">
            <input type="hidden" name="utm_source" value="{clickid}">
            <input type="hidden" name="utm_campaign" value="{t2}">
            <div class="form__title">Comanda cu reducere</div>
            <div class="form__price">
              <div>
                <div class="form__price-title">Pret original:</div> <span class="form__price-lines"> <span
                    class="x_price_previous form__price-value">298</span> <span
                    class="x_currency form__price-value">ron</span> </span>
              </div>
              <div>
                <div class="form__price-title">Pret nou:</div> <span
                  class="x_price_current mod-red form__price-value">149</span> <span
                  class="x_currency mod-red form__price-value">ron</span>
              </div>
            </div> <input class="form__input" type="text" name="name" placeholder="Nume" required="" autocomplete="name"
              pattern=".{2,25}" data-scrapbook-input-value="">
            <input class="form__input" type="tel" name="phone" placeholder="Număr de telefon" required=""
              autocomplete="tel" pattern="[0-9+].{6,18}" data-scrapbook-input-value="">
            <button class="form__btn">Ordin</button>
          </form>
        </div>
        <div id="footer">
          <div>
            <style>
              #ot-sdk-btn {
                position: fixed;
                color: #e00;
                border: 2px solid #e00;
                background: #fff;
                border-radius: 6px;
                height: auto;
                white-space: normal;
                padding: 5px 10px;
                font-size: 12px;
                line-height: 1.2;
                cursor: pointer;
                bottom: 10px;
                right: auto;
                left: 10px;
                z-index: 999999;
                opacity: 0.5;
              }

              #ot-sdk-btn:hover {
                opacity: 1;
              }
            </style>
            <form class="okidoki smoth_scroll" id="SearchOkidokiFooter">
              <fieldset>
                <input type="text" name="q" value="" placeholder="Caută">
                <input type="submit" value="cauta" class="submit">
              </fieldset>
            </form>
            <ul class="FooterCategory">
              <li class="selected">
                <a href="#" title="Home"> Home </a>
              </li>
              <li class=" ">
                <a href="#" title="Video"> Video </a>
              </li>
              <li class=" ">
                <a href="#" title="Politic"> Politic </a>
              </li>
              <li class=" ">
                <a href="#" title="Editorialiştii">
                  Editorialiştii
                </a>
              </li>
              <li class=" ">
                <a href="#" title="Economic"> Economic </a>
              </li>
              <li class=" ">
                <a href="#" title="Social"> Social </a>
              </li>
              <li class=" ">
                <a href="#" title="Sport"> Sport </a>
              </li>
              <li class=" ">
                <a href="#" title="Externe"> Externe </a>
              </li>
              <li class=" ">
                <a href="#" title="Life"> Life </a>
              </li>
              <li class=" ">
                <a href="#" title="Sănătate"> Sănătate </a>
              </li>
              <li class=" ">
                <a href="#" title="Revoluţie 30">
                  Revoluţie 30
                </a>
              </li>
              <li class=" ">
                <a href="#" title="Site Map">
                  Site Map
                </a>
              </li>
              <li class="last">
                <a href="#" title="Versiune mobil">
                  Versiune mobil
                </a>
              </li>
            </ul>
            <div class="internetics">Cel mai bun site de stiri</div>
            <ul class="AboutUs">
              <li class=" ">
                <a href="#" title="Despre noi">
                  Despre noi
                </a>
              </li>
              <li class=" ">
                <a href="#" title="Istoric">
                  Istoric
                </a>
              </li>
              <li class=" ">
                <a href="#" title="Echipǎ"> Echipǎ </a>
              </li>
              <li class=" ">
                <a href="#" title="Contact"> Contact </a>
              </li>
              <li class=" ">
                <a href="#" title="Carierǎ">
                  Carierǎ
                </a>
              </li>
              <li class=" ">
                <a href="#" title="Comunicate"> Comunicate </a>
              </li>
              <li class=" ">
                <a href="#" title="Termeni şi condiţii">
                  Termeni şi condiţii
                </a>
              </li>
              <li class=" ">
                <a href="#" title="Politica de confidenţialitate">
                  Politica de confidenţialitate
                </a>
              </li>
              <li class="last">
                <a href="#" title="Politica de cookies">
                  Politica de cookies
                </a>
              </li>
            </ul>

            <style>
              .bottomSticky {
                position: fixed;
                text-align: center;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                padding: 10px;
                width: 100vw;
                background-color: #3c5b97;
                box-shadow: 0px 0px 4px #c5c5c5;
                /*border-top: 5px solid #ee0000;*/
                z-index: 10000;
                animation-name: bgColor;
                animation-duration: 2s;
                animation-iteration-count: infinite;
              }

              .bottomSticky a {
                color: #fff;
                font-size: 15px;
                text-decoration: none;
              }

              @keyframes bgColor {
                0% {
                  background-color: #3c5b97;
                }

                50% {
                  background-color: #ee0000;
                }

                100% {
                  background-color: #3c5b97;
                }
              }
            </style>

            <style>
              .playBtnInPage {
                position: absolute;
                /*display: inline-block;*/
                top: 50%;
                right: 50px;
                transform: translateY(-50%);
                border-radius: 50%;
                width: 35px;
                height: 35px;
                background-color: #00c9c9;
                cursor: pointer;
                outline: none;
                -webkit-appearance: none;
                border: 2px solid #fff;
                vertical-align: middle;
                z-index: 1;
                transition: transform 0.5s, left 0.5s;
              }

              .playBtnInPage::after {
                content: "\f04b";
                position: absolute;
                top: 50%;
                left: 50%;
                font-family: "FontAwesome";
                font-size: 14px;
                color: #fff;
                transform: translate(-50%, -50%);
              }

              .playBtnInPage.on::after {
                content: "\f04c";
              }

              .radioContainer {
                display: block;
                position: fixed;
                bottom: 12px;
                left: 12px;
                margin: 0 0 6px;
                padding: 25px;
                width: 300px;
                opacity: 0.8;
                background-color: #ffffff;
                -moz-border-radius: 3px 3px 3px 3px;
                -webkit-border-radius: 3px 3px 3px 3px;
                border-radius: 3px 3px 3px 3px;
                -moz-box-shadow: 0 0 12px #999999;
                -webkit-box-shadow: 0 0 12px #999999;
                box-shadow: 0 0 12px #999999;
                box-sizing: border-box;
                z-index: 10000;
              }

              .radio-close-button {
                position: relative;
                right: -17px;
                top: -17px;
                float: right;
                font-size: 20px;
                font-weight: bold;
                color: #000000;
                -webkit-text-shadow: 0 1px 0 #ffffff;
                text-shadow: 0 1px 0 #ffffff;
                opacity: 0.8;
                -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
                filter: alpha(opacity=80);
                line-height: 1;

                padding: 0;
                cursor: pointer;
                background: transparent;
                border: 0;
                -webkit-appearance: none;
              }

              .radio-close-button:hover,
              .radio-close-button:focus {
                color: #000000;
                text-decoration: none;
                cursor: pointer;
                opacity: 0.4;
                -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
                filter: alpha(opacity=40);
              }

              .radioMask {
                font-family: Arial, sans-serif;
                position: relative;
                height: 42px;
                overflow: hidden;
              }

              .radioLogo .img {
                width: 77%;
                height: 15px;
                vertical-align: middle;
                display: inline-block;
                margin-right: -2px;
                background-image: -webkit-image-set(url("") 1x,
                    url("") 2x);
                background-repeat: no-repeat;
                background-position: center center;
                background-size: 100%;
              }

              .radioLogo span {
                font-size: 18px;
                vertical-align: middle;
                padding-top: 2px;
                display: inline-block;
              }

              .radioLogo {
                position: absolute;
                top: 50%;
                left: 0;
                transform: translateY(-50%);
                animation-name: fadein;
                animation-duration: 10s;
                animation-iteration-count: infinite;
                overflow: hidden;
                display: inline-block;
                padding: 10px 0;
                width: 195px;
                vertical-align: middle;
                box-sizing: border-box;
                text-decoration: none;
              }

              .second-message {
                position: absolute;
                top: 50%;
                left: 0;
                transform: translateY(-50%);
                animation-name: fadein;
                animation-duration: 10s;
                animation-iteration-count: infinite;
                animation-delay: 5s;
                font-size: 16px;
                opacity: 0;
              }

              @keyframes fadein {
                0% {
                  opacity: 0;
                }

                10% {
                  opacity: 1;
                }

                50% {
                  opacity: 1;
                }

                60% {
                  opacity: 0;
                }

                90% {
                  opacity: 0;
                }

                100% {
                  opacity: 0;
                }
              }
            </style>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="wrap_content_940">
      <div class="wrap_comentarios_all">
        <p>
          Consumatorul are dreptul sa notifice in scris comerciantului ca
          renunta la cumparare, fara penalitati si fara invocarea unui motiv,
          in termen de 10 zile lucratoare de la primirea produsului sau, in
          cazul prestarilor de servicii, de la incheierea contractului.
        </p>
        <p>*Nu este un medicament</p>
        <p>
          *Efectele depind de caracteristicile individuale ale organismului
        </p>
        <p>
          *Este posibilă intoleranța individuală la componentele produsulu
        </p>

        <div class="create_rom_footer" data-color_text="#000" data-color_link="#000" data-color_logo="#fff"></div>
      </div>
    </div>
  </footer>

  <script defer="" src="js/index.js"></script>

  <script defer="" src="js/antiDoublePhoneMask.js"></script>



  <!-- Модальное окно -->
  <div id="mmyMModal" class="mmodalWWindow">
    <div class="mmodal-content">
      <div class="modal-inner">
        <p id="eerror-ttitle" class="mmodal-ttext"></p>
        <div class="success_icon">
          <p class="closeIcon">X</p>
        </div>
        <span class="ccloseWWindow">×</span>
        <p id="mmodalTText" class="mmodal-ttext"></p>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const now = new Date();

      const timeOptions = {
        hour: '2-digit',
        minute: '2-digit'
      };

      const dateOptions = {
        day: 'numeric',
        month: 'long',
        year: 'numeric'
      };

      const time = now.toLocaleTimeString('ro-RO', timeOptions);
      const date = now.toLocaleDateString('ro-RO', dateOptions);

      document.getElementById("currentDateTime").textContent = `${time}, ${date}`;
    });
  </script>

  <script src="js/doors.js"></script>
  <script>
    var sabss = '{clickid}';
    var usr = '{t2}';
    initDoors({
      lang: 'ro',
      product: 'Bonengem',
      img: 'img/prod.png',
      discount: '50',
      priceMain: '149',
      priceOld: '',
      currencyMain: 'ron',
    });
  </script>

  <script>
    document.querySelectorAll('.smoth_scroll').forEach(function (scrollButton) {
      scrollButton.addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('form-block').scrollIntoView({ behavior: 'smooth' });
      });
    });
  </script>

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