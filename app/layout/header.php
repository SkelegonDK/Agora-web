<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?=TITLE?>
        </title>
        <meta name="description" content="<?=DESC?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="copyright" content="Agora - Tech events">
        <meta name="designer" content="Mikkel Madsen, Manuel Sotomayor Thomsen and Henrik Herland Boelsmand">

        <!-- Website creators -->
        <link href="humans.txt" rel="author">

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Preload -->
      	<link rel="preload" href="fonts/MaterialIcons-Regular.woff2" as="font" type="font/woff2" crossorigin>

        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

        <script src="js/assets/picturefill.js" async></script>
    </head>

    <body id="bd" class="body-preloader-active">
      <div id="preloader">
        <span class="preload-agora">Agora</span>
        <span class="preload-phrase">Find a tech event near you</span>
        <svg class="preload-logo" id="preload-logo" version="1.1" viewbox="0 0 320 320" fill="none" stroke="#222" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
            <path id="r1">
              <animate id="p1" attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="2s" repeatcount="indefinite"/>
              <animate attributename="stroke-width" values="0;4;4;4;0" dur="2s" repeatcount="indefinite" begin="p1.begin"/>
              <animate attributename="stroke" values="#1C6379;#00A47E" dur="2s" repeatcount="indefinite" begin="p1.begin"/>
            </path>
            <path id="r2">
              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="2s" repeatcount="indefinite" begin="p1.begin+0.5s"/>
              <animate attributename="stroke-width" values="0;4;4;4;0" dur="2s" repeatcount="indefinite" begin="p1.begin+0.5s"/>
              <animate attributename="stroke" values="#414352;#1C6379" dur="2s" repeatcount="indefinite" begin="p1.begin+0.5s"/>
            </path>
            <path id="r3">
              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="2s" repeatcount="indefinite" begin="p1.begin+2s"/>
              <animate attributename="stroke-width" values="0;4;4;4;0" dur="2s" repeatcount="indefinite" begin="p1.begin+2s"/>
              <animate attributename="stroke" values="#246F65;#00A47E" dur="2s" repeatcount="indefinite" begin="p1.begin+2s"/>
            </path>
            <path id="r4">
              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="2s" repeatcount="indefinite" begin="p1.begin+3s"/>
              <animate attributename="stroke-width" values="0;4;4;4;0" dur="2s" repeatcount="indefinite" begin="p1.begin+3s"/>
              <animate attributename="stroke" values="#00A47E;#eeeeee" dur="2s" repeatcount="indefinite" begin="p1.begin+3s"/>
            </path>
            <path id="r5">
              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="2s" repeatcount="indefinite" begin="p1.begin+4s"/>
              <animate attributename="stroke-width" values="0;4;4;4;0" dur="2s" repeatcount="indefinite" begin="p1.begin+4s"/>
              <animate attributename="stroke" values="#1C6379;#414352" dur="2s" repeatcount="indefinite" begin="p1.begin+4s"/>
            </path>
            <path id="r6">
              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="2s" repeatcount="indefinite" begin="p1.begin+5s"/>
              <animate attributename="stroke-width" values="0;4;4;4;0" dur="2s" repeatcount="indefinite" begin="p1.begin+5s"/>
              <animate attributename="stroke" values="#00A47E;#eeeeee" dur="2s" repeatcount="indefinite" begin="p1.begin+5s"/>
            </path>
            <path id="r7">
              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="2s" repeatcount="indefinite" begin="p1.begin+5s"/>
              <animate attributename="stroke-width" values="0;4;4;4;0" dur="2s" repeatcount="indefinite" begin="p1.begin+6s"/>
              <animate attributename="stroke" values="#246F65;#00A47E" dur="2s" repeatcount="indefinite" begin="p1.begin+6s"/>
            </path>
          </defs>
          <use xlink:href="#r1"/>
          <use xlink:href="#r1" transform="rotate(60 160 160)"/>
          <use xlink:href="#r1" transform="rotate(120 160 160)"/>
          <use xlink:href="#r1" transform="rotate(180 160 160)"/>
          <use xlink:href="#r1" transform="rotate(240 160 160)"/>
          <use xlink:href="#r1" transform="rotate(300 160 160)"/>

          <use xlink:href="#r2" transform="rotate(30 160 160)"/>
          <use xlink:href="#r2" transform="rotate(90 160 160)"/>
          <use xlink:href="#r2" transform="rotate(150 160 160)"/>
          <use xlink:href="#r2" transform="rotate(210 160 160)"/>
          <use xlink:href="#r2" transform="rotate(270 160 160)"/>
          <use xlink:href="#r2" transform="rotate(330 160 160)"/>

          <use xlink:href="#r3"/>
          <use xlink:href="#r3" transform="rotate(60 160 160)"/>
          <use xlink:href="#r3" transform="rotate(120 160 160)"/>
          <use xlink:href="#r3" transform="rotate(180 160 160)"/>
          <use xlink:href="#r3" transform="rotate(240 160 160)"/>
          <use xlink:href="#r3" transform="rotate(300 160 160)"/>

          <use xlink:href="#r4" transform="rotate(30 160 160)"/>
          <use xlink:href="#r4" transform="rotate(90 160 160)"/>
          <use xlink:href="#r4" transform="rotate(150 160 160)"/>
          <use xlink:href="#r4" transform="rotate(210 160 160)"/>
          <use xlink:href="#r4" transform="rotate(270 160 160)"/>
          <use xlink:href="#r4" transform="rotate(330 160 160)"/>

          <use xlink:href="#r5"/>
          <use xlink:href="#r5" transform="rotate(60 160 160)"/>
          <use xlink:href="#r5" transform="rotate(120 160 160)"/>
          <use xlink:href="#r5" transform="rotate(180 160 160)"/>
          <use xlink:href="#r5" transform="rotate(240 160 160)"/>
          <use xlink:href="#r5" transform="rotate(300 160 160)"/>

          <use xlink:href="#r6" transform="rotate(30 160 160)"/>
          <use xlink:href="#r6" transform="rotate(90 160 160)"/>
          <use xlink:href="#r6" transform="rotate(150 160 160)"/>
          <use xlink:href="#r6" transform="rotate(210 160 160)"/>
          <use xlink:href="#r6" transform="rotate(270 160 160)"/>
          <use xlink:href="#r6" transform="rotate(330 160 160)"/>

          <use xlink:href="#r7"/>
          <use xlink:href="#r7" transform="rotate(60 160 160)"/>
          <use xlink:href="#r7" transform="rotate(120 160 160)"/>
          <use xlink:href="#r7" transform="rotate(180 160 160)"/>
          <use xlink:href="#r7" transform="rotate(240 160 160)"/>
          <use xlink:href="#r7" transform="rotate(300 160 160)"/>
        </svg>
      </div>
        <header id="stHdr">
            <nav>
                <div class="nav-wrapper">
                    <a href="/" class="page-shift brand-logo">
                        <svg class="logo" id="logo" version="1.1" viewbox="0 0 320 320" fill="none" stroke="#222" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <defs>
                            <path id="r1">
                              <animate id="p1" attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatcount="indefinite"/>
                              <animate attributename="stroke-width" values="0;4;4;4;0" dur="6s" repeatcount="indefinite" begin="p1.begin"/>
                              <animate attributename="stroke" values="#1C6379;#00A47E" dur="6s" repeatcount="indefinite" begin="p1.begin"/>
                            </path>
                            <path id="r2">
                              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatcount="indefinite" begin="p1.begin+0.5s"/>
                              <animate attributename="stroke-width" values="0;4;4;4;0" dur="6s" repeatcount="indefinite" begin="p1.begin+0.5s"/>
                              <animate attributename="stroke" values="#414352;#1C6379" dur="6s" repeatcount="indefinite" begin="p1.begin+0.5s"/>
                            </path>
                            <path id="r3">
                              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatcount="indefinite" begin="p1.begin+2s"/>
                              <animate attributename="stroke-width" values="0;4;4;4;0" dur="6s" repeatcount="indefinite" begin="p1.begin+2s"/>
                              <animate attributename="stroke" values="#246F65;#00A47E" dur="6s" repeatcount="indefinite" begin="p1.begin+2s"/>
                            </path>
                            <path id="r4">
                              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatcount="indefinite" begin="p1.begin+3s"/>
                              <animate attributename="stroke-width" values="0;4;4;4;0" dur="6s" repeatcount="indefinite" begin="p1.begin+3s"/>
                              <animate attributename="stroke" values="#00A47E;#eeeeee" dur="6s" repeatcount="indefinite" begin="p1.begin+3s"/>
                            </path>
                            <path id="r5">
                              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatcount="indefinite" begin="p1.begin+4s"/>
                              <animate attributename="stroke-width" values="0;4;4;4;0" dur="6s" repeatcount="indefinite" begin="p1.begin+4s"/>
                        			<animate attributename="stroke" values="#1C6379;#414352" dur="6s" repeatcount="indefinite" begin="p1.begin+4s"/>
                            </path>
                            <path id="r6">
                              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatcount="indefinite" begin="p1.begin+5s"/>
                              <animate attributename="stroke-width" values="0;4;4;4;0" dur="6s" repeatcount="indefinite" begin="p1.begin+5s"/>
                        			<animate attributename="stroke" values="#00A47E;#eeeeee" dur="6s" repeatcount="indefinite" begin="p1.begin+5s"/>
                            </path>
                            <path id="r7">
                              <animate attributename="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatcount="indefinite" begin="p1.begin+5s"/>
                              <animate attributename="stroke-width" values="0;4;4;4;0" dur="6s" repeatcount="indefinite" begin="p1.begin+6s"/>
                        			<animate attributename="stroke" values="#246F65;#00A47E" dur="6s" repeatcount="indefinite" begin="p1.begin+6s"/>
                            </path>
                          </defs>
                          <use xlink:href="#r1"/>
                          <use xlink:href="#r1" transform="rotate(60 160 160)"/>
                          <use xlink:href="#r1" transform="rotate(120 160 160)"/>
                          <use xlink:href="#r1" transform="rotate(180 160 160)"/>
                          <use xlink:href="#r1" transform="rotate(240 160 160)"/>
                          <use xlink:href="#r1" transform="rotate(300 160 160)"/>

                        	<use xlink:href="#r2" transform="rotate(30 160 160)"/>
                          <use xlink:href="#r2" transform="rotate(90 160 160)"/>
                          <use xlink:href="#r2" transform="rotate(150 160 160)"/>
                          <use xlink:href="#r2" transform="rotate(210 160 160)"/>
                          <use xlink:href="#r2" transform="rotate(270 160 160)"/>
                          <use xlink:href="#r2" transform="rotate(330 160 160)"/>

                        	<use xlink:href="#r3"/>
                          <use xlink:href="#r3" transform="rotate(60 160 160)"/>
                          <use xlink:href="#r3" transform="rotate(120 160 160)"/>
                          <use xlink:href="#r3" transform="rotate(180 160 160)"/>
                          <use xlink:href="#r3" transform="rotate(240 160 160)"/>
                          <use xlink:href="#r3" transform="rotate(300 160 160)"/>

                        	<use xlink:href="#r4" transform="rotate(30 160 160)"/>
                          <use xlink:href="#r4" transform="rotate(90 160 160)"/>
                          <use xlink:href="#r4" transform="rotate(150 160 160)"/>
                          <use xlink:href="#r4" transform="rotate(210 160 160)"/>
                          <use xlink:href="#r4" transform="rotate(270 160 160)"/>
                          <use xlink:href="#r4" transform="rotate(330 160 160)"/>

                        	<use xlink:href="#r5"/>
                          <use xlink:href="#r5" transform="rotate(60 160 160)"/>
                          <use xlink:href="#r5" transform="rotate(120 160 160)"/>
                          <use xlink:href="#r5" transform="rotate(180 160 160)"/>
                          <use xlink:href="#r5" transform="rotate(240 160 160)"/>
                          <use xlink:href="#r5" transform="rotate(300 160 160)"/>

                          <use xlink:href="#r6" transform="rotate(30 160 160)"/>
                          <use xlink:href="#r6" transform="rotate(90 160 160)"/>
                          <use xlink:href="#r6" transform="rotate(150 160 160)"/>
                          <use xlink:href="#r6" transform="rotate(210 160 160)"/>
                          <use xlink:href="#r6" transform="rotate(270 160 160)"/>
                          <use xlink:href="#r6" transform="rotate(330 160 160)"/>

                        	<use xlink:href="#r7"/>
                          <use xlink:href="#r7" transform="rotate(60 160 160)"/>
                          <use xlink:href="#r7" transform="rotate(120 160 160)"/>
                          <use xlink:href="#r7" transform="rotate(180 160 160)"/>
                          <use xlink:href="#r7" transform="rotate(240 160 160)"/>
                          <use xlink:href="#r7" transform="rotate(300 160 160)"/>
                        </svg>
                        <span>AGORA</span>
                    </a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
                    <ul class="hide-on-med-and-down header-menu">
                        <li><a class="" href="#"><i class="material-icons">search</i></a></li>
                        <li><a class="page-shift waves-effect waves-light btn" href="events">Events</a></li>
                        <li><a class="page-shift" href="contact">Contact</a></li>
                        <li><a class="page-shift" href="about">About</a></li>
                        <li><a class="page-shift" href="partners">Partners</a></li>
                        <li>
                            <a class="dropdown-button login" href="#!" data-activates="dropdown1">
                                Login
                                <i class="material-icons">account_circle</i>
                            </a>
                            <ul id="dropdown1" class="dropdown-content login-dropdown">
                                <li class="signed-out"><a href="#login">Login</a></li>
                                <li class="signed-in"><a id="logout" href="#!">Logout</a></li>
                                <li class="divider"></li>
                                <li class="signed-in"><a href="admin">Go to admin</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a class="page-shift waves-effect waves-light btn" href="events">Events</a></li>
                        <li><a class="page-shift" href="contact">Contact</a></li>
                        <li><a class="page-shift" href="about">About</a></li>
                        <li><a class="page-shift" href="partners">Partners</a></li>
                        <li>
                            <a class="dropdown-button" href="#!" data-activates="dropdown2">
                                Login
                                <i class="material-icons">account_circle</i>
                            </a>
                            <ul id="dropdown2" class="dropdown-content login-dropdown">
                                <li class="signed-out"><a href="#login">Login</a></li>
                                <li class="signed-in"><a id="logout" href="#!">Logout</a></li>
                                <li class="divider"></li>
                                <li class="signed-in"><a href="admin">Go to admin</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-menu-line"></div>
        </header>
        <main class="page-content">
