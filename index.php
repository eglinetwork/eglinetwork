<?php 
require_once ('config.php');
$title = 'eglinetwork | Marco Egli';
$app_name = 'index';
$lang = "en";
$description = 'This is my personal website. Here can you find a few things about me and some of my projects.';
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
                <h1 id="applicationTitle">eglinetwork</h1>
            </header>

            <div id="tabview">
                <ul>
                    <li><a href="#tabHome">Home</a></li>
                    <li><a href="#tabAbout">About me</a></li>
                </ul>
                <div>
                    <div id="tabHome">
                        <article>
                            <h1>Personal Projects</h1>
                            <div class="banner blue">Play <a href="pairs">Photo Pairs</a> with beautiful pictures from Flickr</div>      
							<div class="banner blue">What time do you need to solve the <a href="https://egli.io/tschutti">tschutti tschallenge</a>?</div>             							
                            <div class="banner blue">Visit the most entertaining <a href="http://www.turnshow.ch/" target="_blank">Turnshow</a> in Switzerland</div>
                            <div class="banner blue">Learn more about activities for <a href="http://familienvereine-bezirk-hinwil.ch/" target="_blank">families</a> around Zürich</div>
                        </article>
                    </div>
                    <div id="tabAbout">
                        <article class="vcard" itemscope itemtype="http://schema.org/Person">
                            <h1>About me</h1>
                            <p>My name is <span class="fn" itemprop="name">Marco Egli</span> and this is my personal website <a href="http://eglinetwork.ch" class="url" itemprop="url">eglinetwork.ch</a>. A few things about me:</p>
                            <ul>
                                <li>I am a <span itemprop="jobTitle">senior consultant</span> at <a href="http://www.intelliact.ch/" target="_blank" class="org" itemprop="worksFor">Intelliact AG</a> - the major market independent PLM consultancy in Switzerland</li>
                                <li>I am the co-founder and lead developer of <a href="http://www.elstr.com/" target="_blank">Elstr</a>, a methodology and framework to build fast and scalable enterprise mashup web applications</li>
                                <li>You can find me on <a href="http://ch.linkedin.com/pub/marco-egli/51/192/a65" target="_blank">Linkedin</a>, <a href="http://www.xing.com/profile/Marco_Egli" target="_blank">Xing</a> or follow <a href="http://twitter.com/marcoegli" target="_blank"><span class="nickname">@marcoegli</span></a> on Twitter or write an email to <a href="mailto:marco@eglinetwork.ch" class="email" itemprop="email">marco@eglinetwork.ch</a></li>
                                <li>I live in the greater area of <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Zurich,+Switzerland&sll=37.0625,-95.677068&sspn=40.86791,107.138672&ie=UTF8&hq=&hnear=Z%C3%BCrich+District,+Z%C3%BCrich,+Canton+of+Z%C3%BCrich,+Switzerland&z=12" target="_blank"><span class="locality">Zürich</span>, <span class="country-name">Switzerland</span></a></li>
                                <li>I like programming. You can check out some of my <a href="https://github.com/eglinetwork/" target="_blank">code and projects</a>.</li>
                                <li>And sometimes I create <a href="http://www.slideshare.net/marcouser" target="_blank">slides</a></li>
                            </ul>                
                        </article>
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