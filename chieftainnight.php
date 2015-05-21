<?php 
require_once ('config.php');
$title = '40. Nacht der Häuptlinge';
$app_name = 'chieftainnight';
$lang = "de";
$description = 'Einladung zur ersten Nacht der Häuptlinge';
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
        <!-- <script src="jslib/modernizr/modernizr-<?php echo $jslib_modernizr_version; ?>.min.js"></script> -->

        <!-- Define the application name and version in a global APP object to access it for module paths -->
        <script type="text/javascript">
            var APP = {};
            APP.version = '<?php echo $app_version; ?>';
            APP.name = '<?php echo $app_name; ?>';
        </script>        

        <!-- Grab Yahoo CDN's YUI -->
        <!-- <script src="//yui.yahooapis.com/<?php echo $jslib_yui_version; ?>/build/yui/yui-min.js"></script> -->
        <!-- Loading the application bootstrap script -->
        <!-- <script src="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/<?php echo $app_name; ?>.js"></script> -->

        <!-- CSS Stylesheets -->
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?<?php echo $jslib_yui_version; ?>/cssbase/cssbase-min.css&<?php echo $jslib_yui_version; ?>/cssreset/cssreset-min.css&<?php echo $jslib_yui_version; ?>/cssnormalize/cssnormalize-min.css&<?php echo $jslib_yui_version; ?>/cssgrids/cssgrids-min.css&<?php echo $jslib_yui_version; ?>/cssfonts/cssfonts-min.css">
        <link rel="stylesheet" type="text/css" href="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/assets/<?php echo $app_name; ?>.css">

    </head>
    <body>

        <div id="container">

            <header>
                <div class="printonly"><img src="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/images/shamrock-print.jpg"></div> 
                <h1>40. Nacht der Häuptlinge</h1>
                <p>29. August 2015</p>
            </header>

            <div id="content">
                <div class="textblock">
                    <p>Bei jedem Wetter ab 15 Uhr bis Sonnenuntergang hoch über den Drumlins im Schützenhaus Wernetshausen</p>
                </div>

                <div class="textblock screenonly">
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/197818784&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                </div>

                <div class="textblock">
                    <p><a href="http://bartwurst.ch/" target="_blank">B<span style="color:rgb(204, 68, 0);">art</span>wurst</a>, Bier und Brot sind für alle vorhanden. Danke im Voraus für das Mitbringen von Beilagen, Desserts oder weiteren Grilladen für ein üppiges Buffet (einfach mir melden, damit nicht alle einen feinen Tiramisu mitbringen ;).</p>
                </div>  
                
                <div class="textblock screenonly">  
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/109610933&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                </div>  

                <div class="textblock">        
                    <p>Anmeldung mit Anzahl der Personen per E-Mail an <a href="mailto:eglinetwork@gmail.com">eglinetwork@gmail.com</a> bis Mitte August.</p>
                </div>    


                <div class="textblock">
					<p class="small">Zu Fuss ab oder bis zum Bahnhof Hinwil oder ganz einfach mit dem Bus bis zur Haltestelle <a href="http://www.sbb.ch/fahrplan.html" target="_blank">Wernetshausen, Dorf</a></p>
                    <a href="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/images/lageplan.png"><img src="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/images/lageplan.png" width="100%"></a>
                    <p class="screenonly small">Für die <a href="https://www.google.ch/maps/dir/''/sch%C3%BCtzenhaus+wernetshausen/data=!4m5!4m4!1m0!1m2!1m1!1s0x479ab855a9e189bd:0x185939c9956e4926?sa=X&ei=QsBcVdK3AsmcsgHe1YDwBg&ved=0CHEQ9RcwDA" target="_blank">Routenplanung</a> mit dem Auto. Bitte beim Schulhaus parkieren.</p>					
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