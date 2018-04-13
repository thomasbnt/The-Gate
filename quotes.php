<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Toutes les citations | The Gate</title>
        <meta name="description" content="Une simple page qui donne accès plus rapidement à des contenus pour développer & rechercher sans perte de temps.">
        <meta name="Keywords" content="thomasbnt,outil,developper,dev,french,francais,gate,portail">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex, nofollow">
        <link rel="icon" type="image/png" href="assets/img/favicon.png"/>
        <!-- OG -->
        <meta property="og:title" content="The Gate"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="https://gate.thomasbnt.fr/assets/img/favicon.png"/>
        <meta property="og:description" content="Une simple page qui donne accès plus rapidement à des contenus pour développer & rechercher sans perte de temps."/>
        <!-- Twitter Card -->
        <meta name="twitter:url" content="https://gate.thomasbnt.fr/">
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@hyprimort" />
        <meta name="twitter:title" content="The Gate" />
        <meta name="twitter:description" content="Une simple page qui donne accès plus rapidement à des contenus pour développer & rechercher sans perte de temps." />
        <meta name="twitter:image" content="https://gate.thomasbnt.fr/assets/img/favicon.png" />
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="assets/img/favicon.png">
        <meta name="theme-color" content="#0b716b">
        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="green">
        <meta name="apple-mobile-web-app-title" content="The Gate">
        <link rel="apple-touch-icon-precomposed" href="assets/img/favicon.png">
        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="assets/img/favicon.png">
        <meta name="msapplication-TileColor" content="#0b716b">
        <!-- End colors and to homescreen -->

        <!-- Bootstrap Core-->
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"  media="screen,projection"/>
        <!-- Font Awesome V5 -->
        <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
        <!-- Custom CSS Card -->
        <style>
        .card {
            margin: 7px !important;
        }
        </style>
    </head>
    <body onLoad="Enter()">
        <!-- Random Quotes -->
        <?php

        $json = file_get_contents('quotes.json'); // Récupère les informations du JSON
        $quotes = json_decode($json,true); // Le décode


        foreach ($quotes as $la_quote => $valeur) {
            ?>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <?php echo $la_quote . '<br>';?>
                    </div>
                </div>
            </div>


            <?php
        };
        ?>
        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script defer src="assets/js/popper.min.js"></script>
        <script defer src="assets/js/bootstrap.min.js"></script>
        <!-- Init -->
        <script type="text/javascript" src="assets/js/init.js"></script>
        <!-- L'heure tourne .. -->
        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
        <!-- Matomo -->
        <script type="text/javascript">
            var _paq = _paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="//analytics.thomasbnt.fr/";
                _paq.push(['setTrackerUrl', u+'piwik.php']);
                _paq.push(['setSiteId', '3']);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
            })();
        </script>
        <noscript><p><img src="//analytics.thomasbnt.fr/piwik.php?idsite=3&rec=1" style="border:0;" alt="" /></p></noscript>
        <!-- End Matomo Code -->
    </body>
</html>
