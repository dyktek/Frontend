<!doctype html>
<html lang="pl">
    <head>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-84651817-1', 'auto');
          ga('send', 'pageview');

        </script>
    
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="index, follow, noodp, noarchive">
        <title>Szkolenia programistyczne PHP, Krzysztof Stanio, Boot Camp 2016 - zostań z nami webdeveloperem</title>
        <meta name="description" content="Od zera do Webdeva. Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania. Zapraszamy!" >
        <meta name="keywords" content="szkolenie php, Boot Camp, javascript, html, css, symfony, angular 2, webdeveloper, od zera do webdeva, krzysztof stanio" >
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,latin-ext"  />
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu:500&subset=latin,latin-ext" />
        <?php

        include ('../library/Merge.php');
        
        $_hash = 'zq1a4a54daaa13';
        
        $css = array(
            'css/normalize.css',
            'css/animate.css',
            'css/foundation.min.css',
            'css/style.css',
            'css/lazyYT.css',
            'css/dialog.css'
        );

        echo '<link rel="stylesheet" href="/' . Merge::CSS($css, $_hash) . '" />' . "\n";
        
        $js = array(
            'js/vendor/jquery-2.1.4.min.js',
            'js/vendor/device.min.js',
            'js/vendor/parallax.min.js',
            'js/vendor/wow.min.js',
            'js/vendor/lazyYT.js',
            'js/script.js',
            'js/formDialog.js'
        );
        
        echo '<script src="/' . Merge::JS($js, $_hash) . '"></script>' . "\n";
				
        ?>

        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content=""> 
        <meta property="og:title" content="">
        <meta property="og:type" content="article">
        <meta property="og:image" content="">
        <meta property="og:description" content="" /> 
    </head>
    <body>

        <div id="menuBox" class="menuBox">
            <div class="row">
                <nav class="small-12 medium-12 large-12 columns wrap">
                    <ul class="menu">
                        <li><a href="#start" class="menuItem" data-box="start"><img src="/images/home.png" alt="" class="home"></a></li>
                        <li><a href="#skills" class="menuItem" data-box="skills">Co poznasz</a></li>
                        <li><a href="#abouttraining" class="menuItem" data-box="aboutTraining">O szkoleniu</a></li>
                        <li><a href="#trainer" class="menuItem" data-box="trainer">Prowadzący</a></li>
                        <li><a href="#contact" class="menuItem" data-box="contact">Kontakt i zapisy</a></li>
    
                    </ul>
                </nav>
            </div>
        </div>

        <section id="startBox" class="startBox">
            <a name="start"></a>
            <div class="displayTable">
                <div class="displayCell">
                    <div class="row info">
                        <div class="small-11 small-centered medium-11 medium-centered columns border">
                            <h1 class="name">Chcesz zostać WebDeveloperem?</h1>
                            <div class="state">Skorzystaj z naszego szkolenia i zdobądź umiejetności w dziedzinie programowania!</div>
                            <div class="edition">edycja weekendowo wieczorowa październik - listopad 2016</div>
                            <div class="arrow"><a href="#skills" class="menuItem arrowLink" data-box="skills"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            initStartPage();
        </script>

        <section id="skillsBox" class="skillsBox">
            <a name="skills"></a>
            <div class="row">
                <div class="small-12 columns">
                    <h2>Co poznasz?</h2>
                    <ul class="small-block-grid-2 medium-block-grid-4">
                        <li class="wow fadeIn" data-wow-delay="0.1s">
                            <div class="ico-1 icons"></div>
                            <h3 class="name">HTML 5</h3>
                            <div class="text">Język znaczników wykorzystywany do tworzenia stron WWW</div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.2s">
                            <div class="ico-2 icons"></div>
                            <h3 class="name">CSS 3</h3>
                            <div class="text">Język służący do opisu wyglądu stron WWW</div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.3s">
                            <div class="ico-8 icons"></div>
                            <h3 class="name">JavaScript</h3>
                            <div class="text">Język skryptowy działający po stronie przeglądarki WWW</div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.4s">
                            <div class="ico-3 icons"></div>
                            <h3 class="name">PHP</h3>
                            <div class="text">Język skryptowy działający po stronie serwera WWW</div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.5s">
                            <div class="ico-6 icons"></div>
                            <h3 class="name">MySQL</h3>
                            <div class="text">System do zarządzania relacyjnymi bazami danych</div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.6s">
                            <div class="ico-4 icons"></div>
                            <h3 class="name">Symfony</h3>
                            <div class="text">Popularny framework dla stron WWW napisany w PHP</div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.7s">
                            <div class="ico-5 icons"></div>
                            <h3 class="name">Angular</h3>
                            <div class="text">Framework dla języka JavaScript firmowany przez Google</div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.8s">
                            <div class="ico-7 icons"></div>
                            <h3 class="name">jQuery</h3>
                            <div class="text">Lekka biblioteka ułatwiająca korzystanie z języka JavaScript</div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="aboutTrainingBox" class="aboutTrainingBox">
            <a name="abouttraining"></a>
            <div class="row">
                <h2>O szkoleniu</h2>
                <div class="medium-6 columns small-text-center medium-text-justify">
                    <p class="bold">Prowadzimy praktyczne szkolenia, dla osób które chcą nauczyć się programowania. Naukę zaczynamy od podstaw, dlatego każdy, kto chce zdobyć nową wiedzę może zapisać się na nasze szkolenie.</p>
                    <p>Zajęcia prowadzone są w formie warsztatów przez doświadczonych trenerów i programistów - m.in. Krzysztofa Stanio, który prowadzi kanał na Youtube "Od Zera do Webdeva". Stawiamy na praktykę, dlatego każdy z uczestników kursu, będzie samodzielnie pisać podstawowe skrypty, aby stopniowo rozwijać swoje umiejętności i tworzyć coraz bardziej skomplikowane programy.</p>
                </div>
                <div class="medium-6 columns small-text-center medium-text-justify">
                    <p>Zajęcia prowadzone są w kilkuosobowej grupie, dzięki czemu, każdy uczestnik może liczyć na indywidualne porady i ćwiczenia. Szkolenia dopasowane są do potrzeb rynku, na którym wciąż brakuje programistów. Sami od lat zajmujemy się programowaniem, dlatego najlepiej znamy wymagania pracodawców i możemy odpowiednio ukierunkować uczestników szkolenia.</p>
                </div>

           <div class="medium-6 columns small-text-center medium-text-justify">
                    <p><b>Aby uczestniczyć w zajęciach należy posiadać własny laptop. Podczas startu szkolenia pomagamy w konfiguracji środowiska programistycznego.</b></p>
                </div>
            </div>
            <div class="params">
                <div class="row">
                    <div class="small-6 columns">
                        <div class="cleft">Start najbliższej edycji:</div>
                    </div>
                    <div class="small-6 columns">
                        <div class="cright">21 października 2016 (są jeszcze wolne miejsca)</div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 columns">
                        <div class="cleft">Czas trwania:</div>
                    </div>
                    <div class="small-6 columns">
                        <div class="cright">6 tygodni (edycja weekendowo-wieczorowa)</div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 columns">
                        <div class="cleft">Liczba godzin:</div>
                    </div>
                    <div class="small-6 columns">
                        <div class="cright">157</div>
                    </div>
                </div>
           
                <div class="row">
                    <div class="small-12">
                        <div class="promo">
                        <?php
                        if(Date('Y-m-d') <= '2016-09-23') {
                        ?>
                            <span style="font-size:24px;font-weight:bold;"> Cena promocyjna do 23 września - 2000 zł!</span><br />cena regularna 2500 zł

                        <?php } else { ?>
                            <span style="font-size:24px;font-weight:bold;"> Cena 2500 zł!</span>
                        <?php } ?>
                        </div>
                    </div>
                </div>
								<div class="row">
                    <div class="small-12">
                        <div class="promo">
                            Harmonogram szkolenia <a href="http://szkolenia.quatronet.pl/harmonogram.pdf?v=1"><img src="/images/ikona.png" alt="Harmonogram szkolenia" /></a>
                        </div>
                    </div>
                </div>
            </div>
			

			
        </section>


        <section id="trainerBox" class="trainerBox">
            <a name="trainer"></a>
            <div class="row">
                <div class="small-12 columns">
                    <div class="logo wow bounceIn" data-wow-delay="0.4s"><img src="/images/odz.png"  alt="Od zera do webdeva"></div>
                    <p class="ks wow fadeIn" data-wow-delay="0.2s">Szkolenie poprowadzi Krzysztof Stanio<span>prowadzący kanał na YouTube <a class="link" href="https://www.youtube.com/channel/UCrSxel4Mheo6XA8IPMA-3ZQ">Od zera do WebDeva</a></span><p>
                    
					<!--<div class="js-lazyYT" data-youtube-id="MbFhsq5fcRg" data-ratio="16:9"></div>-->
					
					<ul class="small-block-grid-2 medium-block-grid-3">

                        <li class="wow fadeIn" data-wow-delay="0.1s">      
                             <div class="js-lazyYT" data-youtube-id="1jA3t1N_bQ8" data-ratio="16:9"></div>
                        </li>

						<li class="wow fadeIn" data-wow-delay="0.1s">      
                             <div class="js-lazyYT" data-youtube-id="5RxzMimMlDg" data-ratio="16:9"></div>
                        </li>
												 <li class="wow fadeIn" data-wow-delay="0.2s">      
                             <div class="js-lazyYT" data-youtube-id="CyAGlHo2GL4" data-ratio="16:9"></div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.3s">      
                             <div class="js-lazyYT" data-youtube-id="K3-t_EHRL5w" data-ratio="16:9"></div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.4s">          
                            <div class="js-lazyYT" data-youtube-id="ld19dDKL2s4" data-ratio="16:9"></div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.5s">      
                             <div class="js-lazyYT" data-youtube-id="wY29-Pcd8Zs" data-ratio="16:9"></div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.6s">       
                             <div class="js-lazyYT" data-youtube-id="asYqGTYG1Y8" data-ratio="16:9"></div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.7s">        
                            <div class="js-lazyYT" data-youtube-id="8uhHL0C9sas" data-ratio="16:9"></div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.8s">         
                             <div class="js-lazyYT" data-youtube-id="rXke9ngSUAc" data-ratio="16:9"></div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="0.9s">           
                            <div class="js-lazyYT" data-youtube-id="sv9UKagsfBw" data-ratio="16:9"></div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="1.0s">
                            <div class="js-lazyYT" data-youtube-id="36IL9cKkOxQ" data-ratio="16:9"></div>
                        </li>
                        <li class="wow fadeIn" data-wow-delay="1.1s">
                            <div class="js-lazyYT" data-youtube-id="e5JmlfpyufY" data-ratio="16:9"></div>
                        </li>
                    </ul>
                    <p class="ks wow fadeIn" data-wow-delay="0.2s">Zapraszamy do oglądania i subskrypcji kanału <a class="link" href="https://www.youtube.com/channel/UCrSxel4Mheo6XA8IPMA-3ZQ">Od zera do WebDeva</a></p>
                    <p class="icoWrap">
                        <a href="https://www.youtube.com/channel/UCrSxel4Mheo6XA8IPMA-3ZQ"><img src="/images/yt.png" class="ico" alt=""></a>
                        <a href="https://www.facebook.com/odzeradowebdeva"><img src="/images/fb.png" class="ico" alt=""></a>
                    </p>
                </div>
            </div>
        </section>

        <section id="contactBox" class="contactBox">
            <a name="contact"></a>
            <div class="row">
                <div class="small-12 columns">
                    <h2>Kontakt i zapisy</h2>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-10 large-8 small-centered columns text-center wow bounceIn" data-wow-delay="0.2s">
                    <p>Na szkolenie można się zapisać telefonicznie lub mailowo:</p>
                    <p class="em"><span id="em">szkolenia@quatronet.pl</span></p>
                    <p class="tp"><span id="tp">535 001 087</span></p>
                    <p class="tp"><span id="tp">603 405 043</span></p>
                    <p>Organizatorem szkolenia jest:<br> QuatroNET Sp. z o.o. ul. Bronowicka 90, 30-091 Kraków</p>
                </div>
            </div>
        </section>

        <section id="mapBox" class="mapBox"></section>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-mRsRGlBrVuMhWel_1f7_YnRzqw6i96c"></script>
        <script>
            google.maps.event.addDomListener(window, 'load', function () {
                var map = new google.maps.Map(document.getElementById('mapBox'), {
                    center:  new google.maps.LatLng(50.080109,19.894014999999968),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: device.desktop() ? true : false
                });
                new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(50.080109, 19.894014999999968),
                    title: 'Kraków, ul. Bronowicka 90',
                });
            });
        </script>
    </body>
</html>