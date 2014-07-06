<?php 
require_once ('config.php');
$title = '3. Nacht der Druiden';
$app_name = 'druidnight';
$lang = "de";
$description = 'Einladung zur dritten Nacht der Druiden';
$author = 'Marco Egli';
?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">

        <meta name="google-site-verification" content="iePOmkHL--ZFhJWuPL7bup6Nk4CbiOViNxhiz_D7yXI" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="author" content="<?php echo $author; ?>">

        <!--  Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/favicon.ico">
        <link rel="apple-touch-icon" href="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/apple-touch-icon.png">

        <!-- All JavaScript loaded asynchronous, except for Modernizr which enables HTML5 elements & feature detects -->
        <script src="jslib/modernizr/modernizr-<?php echo $jslib_modernizr_version; ?>.min.js"></script>

        <!-- Define the application name and version in a global APP object to access it for module paths -->
        <script type="text/javascript">
            var APP = {};
            APP.version = '<?php echo $app_version; ?>';
            APP.name = '<?php echo $app_name; ?>';
        </script>        

        <!-- Grab Yahoo CDN's YUI -->
        <script src="//yui.yahooapis.com/<?php echo $jslib_yui_version; ?>/build/yui/yui-min.js"></script>
        <!-- Loading the application bootstrap script -->
        <script src="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/<?php echo $app_name; ?>.js"></script>

        <!-- CSS Stylesheets -->
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?<?php echo $jslib_yui_version; ?>/cssbase/cssbase-min.css&<?php echo $jslib_yui_version; ?>/cssreset/cssreset-min.css&<?php echo $jslib_yui_version; ?>/cssnormalize/cssnormalize-min.css&<?php echo $jslib_yui_version; ?>/cssgrids/cssgrids-min.css&<?php echo $jslib_yui_version; ?>/cssfonts/cssfonts-min.css">
        <link rel="stylesheet" type="text/css" href="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/assets/<?php echo $app_name; ?>.css">

    </head>
    <body>

        <div id="container">

            <header>
                <div class="printonly"><img src="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/images/shamrock-print.jpg"></div> 
                <h1>3. Nacht der Druiden</h1>
                <p>31. August 2014</p>
            </header>

            <div id="content">
                <div class="textblock">
                    <p>Bei trockenem Wetter ab 15 Uhr bis Sonnenuntergang zwischen den Drumlins von Hinwil</p>
                </div>

                <div class="textblock screenonly">
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/11652978&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                </div>

                <div class="textblock">
                    <p>Für magische Stimmung an meinem Geburtstagsfest sorgen wir in diesem Jahr selbst. Nehmt eure Instrumente mit, um das Riet mit Musik zu füllen. Natürlich sind nicht nur keltische Instrumente willkommen und ihr könnt auch ganz unmusikalisch mitfeiern.</p>
                </div>  


                <div class="textblock">
                    <p>Eine kleine Feuerstelle, Wurst und Bier sind vorhanden. Grilladen, Beilagen und Nachtisch bitte selber mitbringen. Hilfreich ist auch eine Picknickdecke, da es wenig Sitzgelegenheiten hat.</p>
                </div>  
                
                <div class="textblock screenonly">  
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/140829226&color=ff5500"></iframe>
                </div>  

                <div class="textblock">        
                    <p>Anmeldung mit Anzahl der Personen <span class="screenonly">für eingeladene Gäste</span> per E-Mail an <a href="mailto:eglinetwork@gmail.com">eglinetwork@gmail.com</a> bis Mitte August 2014.</p>
                </div>    


                <div class="textblock">
                    <img src="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/images/lageplan.png" width="100%">
                    <p class="screenonly small"><a href="http://maps.google.ch/maps?f=d&source=s_d&saddr=&daddr=47.294733,8.822953&hl=de&geocode=&mra=mift&mrsp=1&sz=17&sll=47.29385,8.822891&sspn=0.006447,0.016512&ie=UTF8&t=h&z=17" target="_blank">Ort des Parkplatzes</a> für die Routenplanung mit dem Auto (Achtung: Fahrverbot auf dem Pilgerweg aus Bossikon. Über Gossauerstrasse anfahren.)</p>
                </div> 

                <div class="textblock screenonly">        
                    <p><br></p>
                </div>     
            </div>    

            <footer>
            </footer>



        </div> 
        <!--! end of #container -->

        <!-- asynchronous google analytics -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', '<?php echo $analyticssiteid; ?>']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>

    </body>
</html>