<?php 
require_once ('config.php');
$title = 'Photo Pairs';
$app_name = 'pairs';
$lang = "en";
$description = 'Play pairs with beautiful photos. Select your personal photo theme to get individual variants of card sets. Play an easy game with 8 pairs or play it difficult with 20 pairs. Challenge yourself or play with up to four players. Pairs is also known as Memory, Pelmanism, Shinkei-suijaku, Pexeso or simply Concentration';
$author = 'Marco Egli';
$pairs_theme = 'Steam Engine';
if (isset($_GET['theme'])){
    $pairs_theme = $_GET['theme'];
};
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
                <h1 id="applicationTitle">Photo Pairs </h1>
                <div id="divGameInfo"><h2></h2><span class="button blue">Statistics</span></div>
            </header>

            <div id="tabview">
                <ul>
                    <li><a href="#tabSettings">Settings</a></li>
                    <li><a href="#tabTable">Play Pairs</a></li>
                    <li><a href="#tabPhotos">Photos</a></li>
                </ul>
                <div>
                    <div id="tabSettings">

                        <div id="divAboutWidget">
                            <div class="yui3-widget-hd"><h3>About Photo Pairs</h3></div>
                            <div class="yui3-widget-bd">
                                <img src="http://www.w3.org/html/logo/badge/html5-badge-v-css3-performance-semantics.png" width="38" height="170" alt="HTML5 Powered with CSS3 / Styling, Performance &amp; Integration, and Semantics" title="HTML5 Powered with CSS3 / Styling, Performance &amp; Integration, and Semantics">
                                <ul>
                                    <li>Pairs is also known as Memory, Pelmanism, Shinkei-suijaku, Pexeso or simply Concentration.</li>
                                    <li>Play an easy game with 8 pairs or play it difficult with 20 pairs. Challenge yourself or play with up to four players.</li>
                                    <li>All photos are loaded from <a href="http://www.flickr.com/" target="_blank">Flickr</a> with <a href="http://developer.yahoo.com/yql/" target="_blank">YQL</a>. Change the photo theme to get infinite variants of card sets.</li>                        
                                    <li>The game uses latest web technology like HTML5 and CSS3.<span id="spanBrowserSupport"> Your browser does <a href="http://caniuse.com/#agents=desktop&eras=farpast,past,now,near&cats=CSS,HTML5&nodetails=1" target="_blank">not support</a> the following enrichments: <span id="spanEnrichments"></span>.</span></li>
                                    <li>It is implemented with <a href="http://yuilibrary.com/" target="_blank">YUI3</a>.</li>
                                    <li>Thanks for your feedback <a href="http://twitter.com/marcoegli/" target="_blank">@marcoegli</a> on Twitter</li>
                                </ul>
                            </div>
                            <div class="yui3-widget-ft">Engineered by <a href="http://eglinetwork.ch/" target="_blank">Marco Egli</a></div>
                        </div>

                        <form>
                            <fieldset>
                                <label for="inputTheme">Photo Theme</label>
                                <input id="inputTheme" type="text" placeholder="<?php echo $pairs_theme; ?>" required />
                            </fieldset>

                            <fieldset>
                                <label for="inputPairsLength">Pairs (8 - 20)</label>
                                <input id="inputPairsLength" type="number" min="8" max="20" step="1" value="12" required />
                            </fieldset>

                            <fieldset id="fieldsetPlayersNames">
                                <label for="inputPlayerName1">Players Names</label>
                                <input id="inputPlayerName1" type="text" placeholder="Player 1" />
                                <input type="text" />
                                <input type="text" />
                                <input type="text" />
                            </fieldset>

                            <div>
                                <span id="buttonPlayNow" class="button blue">Play now!</span>
                            </div>
                        </form>

                    </div>
                    <div id="tabTable">
                        <div id="cardTable">
                        </div>
                    </div>
                    <div id="tabPhotos">
                        <ul>
                            <li>No photos loaded. Check your settings and start playing to load photos.</li>
                        </ul>
                    </div>
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