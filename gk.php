<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Muki Grundkurs, Leiter 1 im Elki-, Vaki- und Muki-Turnen</title>
    <meta name="description"
          content="Grundkurs, Leiter 1 im Elki-, Vaki- und Muki-Turnen. Theorie- und Praxis-Ausbildung gemäss dem offiziellen Lehrgang des STV für Muki-Turnen. Organisiert durch den ZTV.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ZTV, SHTV, SGTV, TGTV, GRTV, STV, Kurs, Grundkurs, GK, Muki, Elki, Vaki, Muki-Turnen, Vaki-Turnen, Elki-Turnen, Turnen, Leiter 1, Mutter und Kind, Vater und Kind, Ausbildung"/>

    <script>
        var _rollbarConfig = {
            accessToken: "3f00523e377543e8b43a31490b467c54",
            captureUncaught: true,
            payload: {
                environment: "production"
            }
        };
        !function(r){function o(n){if(e[n])return e[n].exports;var t=e[n]={exports:{},id:n,loaded:!1};return r[n].call(t.exports,t,t.exports,o),t.loaded=!0,t.exports}var e={};return o.m=r,o.c=e,o.p="",o(0)}([function(r,o,e){"use strict";var n=e(1),t=e(4);_rollbarConfig=_rollbarConfig||{},_rollbarConfig.rollbarJsUrl=_rollbarConfig.rollbarJsUrl||"https://cdnjs.cloudflare.com/ajax/libs/rollbar.js/2.2.7/rollbar.min.js",_rollbarConfig.async=void 0===_rollbarConfig.async||_rollbarConfig.async;var a=n.setupShim(window,_rollbarConfig),l=t(_rollbarConfig);window.rollbar=n.Rollbar,a.loadFull(window,document,!_rollbarConfig.async,_rollbarConfig,l)},function(r,o,e){"use strict";function n(r){return function(){try{return r.apply(this,arguments)}catch(r){try{console.error("[Rollbar]: Internal error",r)}catch(r){}}}}function t(r,o){this.options=r,this._rollbarOldOnError=null;var e=s++;this.shimId=function(){return e},window&&window._rollbarShims&&(window._rollbarShims[e]={handler:o,messages:[]})}function a(r,o){var e=o.globalAlias||"Rollbar";if("object"==typeof r[e])return r[e];r._rollbarShims={},r._rollbarWrappedError=null;var t=new p(o);return n(function(){o.captureUncaught&&(t._rollbarOldOnError=r.onerror,i.captureUncaughtExceptions(r,t,!0),i.wrapGlobals(r,t,!0)),o.captureUnhandledRejections&&i.captureUnhandledRejections(r,t,!0);var n=o.autoInstrument;return(void 0===n||n===!0||"object"==typeof n&&n.network)&&r.addEventListener&&(r.addEventListener("load",t.captureLoad.bind(t)),r.addEventListener("DOMContentLoaded",t.captureDomContentLoaded.bind(t))),r[e]=t,t})()}function l(r){return n(function(){var o=this,e=Array.prototype.slice.call(arguments,0),n={shim:o,method:r,args:e,ts:new Date};window._rollbarShims[this.shimId()].messages.push(n)})}var i=e(2),s=0,d=e(3),c=function(r,o){return new t(r,o)},p=d.bind(null,c);t.prototype.loadFull=function(r,o,e,t,a){var l=function(){var o;if(void 0===r._rollbarDidLoad){o=new Error("rollbar.js did not load");for(var e,n,t,l,i=0;e=r._rollbarShims[i++];)for(e=e.messages||[];n=e.shift();)for(t=n.args||[],i=0;i<t.length;++i)if(l=t[i],"function"==typeof l){l(o);break}}"function"==typeof a&&a(o)},i=!1,s=o.createElement("script"),d=o.getElementsByTagName("script")[0],c=d.parentNode;s.crossOrigin="",s.src=t.rollbarJsUrl,e||(s.async=!0),s.onload=s.onreadystatechange=n(function(){if(!(i||this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState)){s.onload=s.onreadystatechange=null;try{c.removeChild(s)}catch(r){}i=!0,l()}}),c.insertBefore(s,d)},t.prototype.wrap=function(r,o,e){try{var n;if(n="function"==typeof o?o:function(){return o||{}},"function"!=typeof r)return r;if(r._isWrap)return r;if(!r._rollbar_wrapped&&(r._rollbar_wrapped=function(){e&&"function"==typeof e&&e.apply(this,arguments);try{return r.apply(this,arguments)}catch(e){var o=e;throw"string"==typeof o&&(o=new String(o)),o._rollbarContext=n()||{},o._rollbarContext._wrappedSource=r.toString(),window._rollbarWrappedError=o,o}},r._rollbar_wrapped._isWrap=!0,r.hasOwnProperty))for(var t in r)r.hasOwnProperty(t)&&(r._rollbar_wrapped[t]=r[t]);return r._rollbar_wrapped}catch(o){return r}};for(var u="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleUnhandledRejection,captureDomContentLoaded,captureLoad".split(","),f=0;f<u.length;++f)t.prototype[u[f]]=l(u[f]);r.exports={setupShim:a,Rollbar:p}},function(r,o){"use strict";function e(r,o,e){if(r){var t;"function"==typeof o._rollbarOldOnError?t=o._rollbarOldOnError:r.onerror&&!r.onerror.belongsToShim&&(t=r.onerror,o._rollbarOldOnError=t);var a=function(){var e=Array.prototype.slice.call(arguments,0);n(r,o,t,e)};a.belongsToShim=e,r.onerror=a}}function n(r,o,e,n){r._rollbarWrappedError&&(n[4]||(n[4]=r._rollbarWrappedError),n[5]||(n[5]=r._rollbarWrappedError._rollbarContext),r._rollbarWrappedError=null),o.handleUncaughtException.apply(o,n),e&&e.apply(r,n)}function t(r,o,e){if(r){"function"==typeof r._rollbarURH&&r._rollbarURH.belongsToShim&&r.removeEventListener("unhandledrejection",r._rollbarURH);var n=function(r){var e=r.reason,n=r.promise,t=r.detail;!e&&t&&(e=t.reason,n=t.promise),o&&o.handleUnhandledRejection&&o.handleUnhandledRejection(e,n)};n.belongsToShim=e,r._rollbarURH=n,r.addEventListener("unhandledrejection",n)}}function a(r,o,e){if(r){var n,t,a="EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(",");for(n=0;n<a.length;++n)t=a[n],r[t]&&r[t].prototype&&l(o,r[t].prototype,e)}}function l(r,o,e){if(o.hasOwnProperty&&o.hasOwnProperty("addEventListener")){for(var n=o.addEventListener;n._rollbarOldAdd&&n.belongsToShim;)n=n._rollbarOldAdd;var t=function(o,e,t){n.call(this,o,r.wrap(e),t)};t._rollbarOldAdd=n,t.belongsToShim=e,o.addEventListener=t;for(var a=o.removeEventListener;a._rollbarOldRemove&&a.belongsToShim;)a=a._rollbarOldRemove;var l=function(r,o,e){a.call(this,r,o&&o._rollbar_wrapped||o,e)};l._rollbarOldRemove=a,l.belongsToShim=e,o.removeEventListener=l}}r.exports={captureUncaughtExceptions:e,captureUnhandledRejections:t,wrapGlobals:a}},function(r,o){"use strict";function e(r,o){this.impl=r(o,this),this.options=o,n(e.prototype)}function n(r){for(var o=function(r){return function(){var o=Array.prototype.slice.call(arguments,0);if(this.impl[r])return this.impl[r].apply(this.impl,o)}},e="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleUnhandledRejection,_createItem,wrap,loadFull,shimId,captureDomContentLoaded,captureLoad".split(","),n=0;n<e.length;n++)r[e[n]]=o(e[n])}e.prototype._swapAndProcessMessages=function(r,o){this.impl=r(this.options);for(var e,n,t;e=o.shift();)n=e.method,t=e.args,this[n]&&"function"==typeof this[n]&&("captureDomContentLoaded"===n||"captureLoad"===n?this[n].apply(this,[t[0],e.ts]):this[n].apply(this,t));return this},r.exports=e},function(r,o){"use strict";r.exports=function(r){return function(o){if(!o&&!window._rollbarInitialized){r=r||{};for(var e,n,t=r.globalAlias||"Rollbar",a=window.rollbar,l=function(r){return new a(r)},i=0;e=window._rollbarShims[i++];)n||(n=e.handler),e.handler._swapAndProcessMessages(l,e.messages);window[t]=n,window._rollbarInitialized=!0}}}}]);
    </script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        body {
            padding: 30px 0px;
        }

        #lightbox .modal-content {
            display: inline-block;
            text-align: center;
        }

        #lightbox .close {
            opacity: 1;
            color: rgb(255, 255, 255);
            background-color: rgb(25, 25, 25);
            padding: 5px 8px;
            border-radius: 30px;
            border: 2px solid rgb(255, 255, 255);
            position: absolute;
            top: -15px;
            right: -55px;

            z-index: 1032;
        }
    </style>
</head>
<body>
<div class="container" itemscope itemtype="http://schema.org/Event">
    <div class="header clearfix">

        <h3 class="text-muted">Kursnummer 18235.40, Grundkurs Muki-Turnen</h3>
    </div>

    <div class="jumbotron">
        <h1 itemprop="name">Grundkurs, Leiter 1 im Elki-, Vaki- und Muki-Turnen</h1>
        <p class="lead">Theorie- und Praxis-Ausbildung gemäss dem offiziellen Lehrgang des STV für Muki-Turnen.</p>
        <p><img itemprop="image" src="gk-assets/GK-Kerenzerberg18_210x130-page-001.jpg" style="width:100%;"/></p>
        <p><a class="btn btn-lg btn-success"
              href="http://www.ztv.ch/site/index.php?option=com_chronoforms&chronoform=kurs_anmeldung_18235_40"
              role="button">Anmelden</a></p>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h3>Muki-Turnen</h3>
            <p>Die Leiterausbildung fürs <a
                    href="http://www.stv-fsg.ch/de/sportarten/turnen0/mukiturnen/">Muki-Turnen</a>, fürs Vaki-Turnen
                oder für Elki-Turnen ist dieselbe. Der
                Einfachheit halber wird daher oft nur die neutrale Abkürzung Elki oder die traditionelle Form Muki
                verwendet</p>

            <h3>Kursziel und -inhalt</h3>
            <div itemprop="description">
                <p>Die Teilnehmerinnen und Teilnehmer werden für die Leitertätigkeit ausgebildet und motiviert. Nach dem
                    Kurs sind sie fähig, selbständig eine eigene Gruppe zu leiten.</p>
                <p>Vermittelt werden insbesondere die Grundlagen zur Organisation einer Elki-Gruppe. Die Anwendung von
                    Unterlagen zur Lektionsvorbereitung wird geübt und methodische Kompetenzen mit vielen praktischen
                    Beispielen geschult. Informationen über den <a href="http://www.stv-fsg.ch/">Schweizerischen Turnverband (STV)</a>,
                    den <a href="http://www.ztv.ch/">Zürcher Turnverband (ZTV)</a>, die kooperierenden Turnverbände der Ostschweiz
                    und Spiel und Spass für die eigene Turnfertigkeit runden das
                    Programm ab.</p>
            </div>

            <h3>Zielgruppe</h3>
            <p itemprop="audience">Offen für alle ab 18 Jahren mit Freude im Umgang mit Eltern und kleinen Kindern. Keine Kenntnisse erforderlich.</p>

            <h3>Einige Inhalte aus dem Stundenplan</h3>
            <p>
            <ul>
                <li>Lektionsaufbau</li>
                <li>Handgeräte richtig einsetzen</li>
                <li>Grundtätigkeiten</li>
                <li>Organisationsformen</li>
                <li>Sicherheit im Unterricht</li>
                <li>Helfen und Sichern</li>
                <li>... und vieles mehr</li>
            </ul>
            </p>
        </div>

        <div class="col-lg-6">
            <h3>Datum</h3>
            <meta itemprop="startDate" content="2018-03-16T15:00">
            <p>
                Teil 1: 16.03.-18.03.2018 | Freitag 15:00 – Sonntag 17:00 Uhr<br/>
                Teil 2: 06.04.-08.04.2018 | Freitag 15:00 – Sonntag 16:00 Uhr
            </p>
            <p>Der Kurs dauert insgesamt 6 Tage (2 x 3 Tage) und muss für die Anerkennung zum Muki Leiter 1 als Ganzes absolviert werden.</p>

            <h3>Ort und Anreise</h3>
            <div itemprop="location" itemscope itemtype="http://schema.org/Place">
                <p><a href="http://www.szk.ch/" itemprop="url"><span itemprop="name">Sportzentrum Kerenzerberg</span></a>, <span itemprop="address">Panoramastrasse 8, 8757 Filzbach</span></p>
            </div>


            <h3>Kosten</h3>
            <p>Kursunterlagen inkl. Lehrmittel, Verpflegung und die Übernachtungen in den komfortablen Zimmern des
                Sportzentrums (keine Zivilschutzunterkunft, kein Schlafsack) sind in
                den Kurskosten inklusive. Einzelzimmer sind gegen einen kleinen Aufpreis erhältlich.
            </p>
            <ul>
                <li>CHF 350 für Mitglieder des Zürcher Turnverbands (ZTV)
                <li>CHF 350 für Mitglieder der kooperierenden Turnverbände: Appenzeller Turnverband, Glarner Turnverband, Graubündner Turnverband (GRTV),
                    Schaffhauser Turnverband (SHTV), Schwyzer Turnverband (KSTV), St. Galler Turnverband (SGTV), Thurgauer Turnverband (TGTV), Urner Turnverband, Zuger Turnverband</li>
                <li>CHF 475 für übrige STV-Mitglieder</li>
                <li>CHF 700.00 für Nichtmitglieder</li>
            </ul>

            <h3>Kursleitung und Organisation</h3>
            <p>Organisation, Administration und Leitung duch den ZTV in Zusammenarbeit mit den kooperierenden Turnverbänden.</p>
            <p>Anita Spengler (ZTV), Fabienne Reiser (SGTV), Marco Egli (ZTV), Marlen Stocker (KSTV), Nicole Schulz (GRTV), Priska Ochsner (SHTV)</p>

            <h3>Kontakt und Fragen</h3>
            <p>Marco Egli, <a href="mailto:eglinetwork@gmail.com">eglinetwork@gmail.com</a></p>

            <h3>Anmerkungen und Anmeldung</h3>
            <p><a href="http://www.ztv.ch/site/index.php?option=com_chronoforms&chronoform=kurs_anmeldung_18235_40">Anmelden auf der Website des ZTV</a></p>
            <p>Die Teilnehmer erhalten vor Kursbeginn weitere Informationen. Die Teilnehmerzahl ist beschränkt. Anmeldeschluss ist am 23.02.2018.</p>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="http://www.szk.ch/typo3temp/pics/5bc27e98ee.jpg" alt="Sportanlagen">
                <p>Sportanlagen</p>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Eingang zum Sportzentrum.jpg" alt="Sportzentrum">
                <p>Sportzentrum</p>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Turnhalleneingang.jpg" alt="Turnhalleneingang">
                <p>Eingang zur Turnhalle</p>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Turnhalle.jpg" alt="Turnhalle">
                <p>Turnhalle</p>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Theorielektion.jpg" alt="Theorielektion">
                <p>Theorielektion</p>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Knotenübungen.jpg" alt="Knotenübungen">
                <p>Knotenübungen</p>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Praxislektion.jpg" alt="Praxislektion">
                <p>Praxislektion</p>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Muki-Bären.jpg" alt="Muki- und Vaki-Bären">
                <p>Muki- und Vaki-Bären</p>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="http://www.szk.ch/typo3temp/pics/8ee55c8e7d.jpg" alt="Zimmer des Sportzentrums">
                <p>Zimmer des Sportzentrums</p>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Restaurant.jpg" alt="Restaurant">
                <p>Restaurant</p>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Sportlounge.jpg" alt="Sportlounge">
                <p>Sportlounge</p>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                <img src="gk-assets/Pause.jpg" alt="Pause">
                <p>Gemütliche Pause</p>
            </a>
        </div>
    </div>


    <footer class="footer">
    </footer>

    <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" alt=""/>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-10297507-1', 'auto');
        ga('send', 'pageview');

        $(document).ready(function () {
            var $lightbox = $('#lightbox');

            $('[data-target="#lightbox"]').on('click', function (event) {
                var $img = $(this).find('img'),
                    src = $img.attr('src'),
                    alt = $img.attr('alt'),
                    css = {
                        'maxWidth': $(window).width() - 100,
                        'maxHeight': $(window).height() - 100
                    };

                $lightbox.find('.close').addClass('hidden');
                $lightbox.find('img').attr('src', src);
                $lightbox.find('img').attr('alt', alt);
                $lightbox.find('img').css(css);
            });

            $lightbox.on('shown.bs.modal', function (e) {
                var $img = $lightbox.find('img');

                $lightbox.find('.modal-dialog').css({'width': $img.width()});
                $lightbox.find('.close').removeClass('hidden');
            });
        });
    </script>

</div> <!-- /container -->

</body>
</html>