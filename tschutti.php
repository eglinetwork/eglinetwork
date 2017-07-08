<?php 
require_once ('config.php');
$title = 'Tschutti';
$app_name = 'tschutti';
$lang = "de";
$description = 'Memory mit Tschuttibildli der EM 2016';
$author = 'Marco Egli';
?>
<!doctype html>
<html manifest="<?php echo $app_name; ?>.manifest" lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >

        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="author" content="<?php echo $author; ?>">

        <!--  Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-mobile-web-app-capable" content="yes">

        <!--  favicon -->
        <link rel="shortcut icon" href="app.<?php echo $app_version; ?>/<?php echo $app_name; ?>/favicon.png">

        <!-- Define the application name and version in a global APP object to access it for module paths -->
        <script type="text/javascript">
            var APP = {};
            APP.version = '<?php echo $app_version; ?>';
            APP.name = '<?php echo $app_name; ?>';
        </script>        

    </head>
    <body>
        <div id="content"></div>

        <script src="app.dev/tschutti/tschutti.main.116.js"></script>

        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '<?php echo $analyticssiteid; ?>', 'auto');  // Replace with your property ID.
            ga('send', 'pageview');
        </script>
        <!-- End Google Analytics -->

    </body>
</html>