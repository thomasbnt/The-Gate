<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>The Gate</title>
    <meta name="description" content="Une simple page qui donne accès plus rapidement à des contenus pour développer & rechercher sans perte de temps.">
    <meta name="Keywords" content="thomasbnt,outil,developper,dev,french,francais,gate,portail">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
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
    <!-- Fork Awesome V1 -->
    <link href="assets/css/fork-awesome.min.css" rel="stylesheet">
    <!-- Stylesheep custom -->
    <link async type="text/css" rel="stylesheet" href="assets/css/custom.css">
</head>
<!-- Random Quotes -->
<?php
$json = file_get_contents('quotes.json'); // Récupère les informations du JSON
$quotes = json_decode($json,true); // Le décode
console.log($quotes[quotes]);
?>
<body onLoad="Enter()">
    <div class="background d-block d-sm-none">
        <div class="container">
            <div class="row">
                <div class="col-md-8 aligned-to-quotes">
                    <form action="https://duckduckgo.com/?q=" method="GET">
                        <input type="search" class="form-control card-shadow" placeholder="Rechercher avec DuckDuckGo" name="q" autofocus autocomplete="off">
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-0">
                    <div class="card">
                        <span class="color-gate-text blockquote-guillemet"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                        <div class="card-body card-shadow">
                            <blockquote class="blockquote mb-0">
                                <p><?php echo array_rand( $quotes )?></p>
                                <footer class="blockquote-footer">Tim Berners-Lee</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gate-footer">
                <p>Background depuis <a target="_blank" href="https://unsplash.com/collections/520359/paysages-background">Unsplash</a>
                    - <a class="pointer" data-toggle="modal" data-target="#Info">Infos.</a>
                </p>
            </div>
        </div>
    </div>
    <div class="background d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 aligned-to-quotes">
                    <form action="https://duckduckgo.com/?q=" method="GET">
                        <input type="search" class="form-control card-shadow" id="BarreDeRecherche" placeholder="Rechercher avec DuckDuckGo ou les réseaux ci dessous" name="q" autofocus autocomplete="off">
                    </form>
                    <div class="row">
                        <div class="col-md-12 aligned-to-quotes text-center text-shadow">
                            <a class="btn btn-lg reddit-color margin-to-2 card-shadow pointer" onclick="boutonReddit()"><i class="fa fa-reddit"></i></a>
                            <a class="btn btn-lg twitter-color margin-to-2 card-shadow pointer" onclick="boutonTwitter()" ><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-lg youtube-color margin-to-2 card-shadow pointer" onclick="boutonYoutube()"><i class="fa fa-youtube-play"></i></a>
                            <a class="btn btn-lg unsplash-color margin-to-2 card-shadow pointer" onclick="boutonUnsplash()"><i class="fa fa-camera"></i></a>
                            <a class="btn btn-lg wikipedia-color margin-to-2 card-shadow pointer"onclick="boutonWikipedia()"><i class="fa fa-wikipedia-w"></i></a>
                        
                            <a class="btn btn-lg soundcloud-color margin-to-2 card-shadow pointer" onclick="boutonSoundcloud()"><i class="fa fa-soundcloud"></i></a>
                            <a class="btn btn-lg lastfm-color margin-to-2 card-shadow pointer" onclick="boutonLastfm()"><i class="fa fa-lastfm"></i></a>
                            <a class="btn btn-lg spotify-color margin-to-2 card-shadow pointer" onclick="boutonSpotify()"><i class="fa fa-spotify"></i></a>

                            <a class="btn btn-lg devdocs-color margin-to-2 card-shadow pointer"onclick="boutonDevdocs()"><i class="fa fa-code"></i></a>
                            <a class="btn btn-lg stackoverflow-color margin-to-2 card-shadow pointer"onclick="boutonStackoverflow()"><i class="fa fa-stack-overflow"></i></a>
                            <a class="btn btn-lg github-color margin-to-2 card-shadow pointer" onclick="boutonGithub()"><i class="fa fa-github"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-0">
                    <div class="card d-none d-md-block">
                        <div class="card-body card-shadow horloge">
                            <span id="date_heure"></span>
                            <noscript>L'horloge a cessé de fonctionner.</noscript>
                        </div>
                    </div>
                    <div class="card">
                        <span class="color-gate-text blockquote-guillemet"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                        <div class="card-body card-shadow">
                            <blockquote class="blockquote mb-0">
                                <p><?php echo array_rand( $quotes )?></p>
                                <footer class="blockquote-footer">Tim Berners-Lee</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gate-footer">
                <p>Background depuis <a target="_blank" href="https://unsplash.com/collections/520359/paysages-background">Unsplash</a>
                    - <a class="pointer" data-toggle="modal" data-target="#Info">Infos.</a>
                </p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Info" tabindex="-1" role="dialog" aria-labelledby="ModalInfo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalInfo">Informations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>Développé par <a class="color-gate-text" href="https://thomasbnt.fr/" target="_blank">Thomas Bnt</a></li>
                        <li>Background récupéré aléatoirement depuis <a class="color-gate-text" href="https://unsplash.com/collections/520359/paysages-background" target="_blank">Unsplash</a></li>
                        <li>Version <span class="color-gate-text">0.33</span></li>
                        <li>Voir toutes les citations <a class="color-gate-text" href="quotes.php">ici</a>.</li>
                        <li>Merci à :
                            <ul>
                                <li>
                                    <a class="color-gate-text" href="https://twitter.com/TomGouville" target="_blank">Anyone22</a> pour l'aide de la partie JS des recherches.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a class="btn mail-color margin-to-2" href="mailto:thomasbnt@protonmail.com" target="_blank"><i class="fa fa-envelope-o"></i> Mail</a>
                    <button type="button" class="btn color-gate pointer" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script defer src="assets/js/popper.min.js"></script>
    <script defer src="assets/js/bootstrap.min.js"></script>
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
    <!-- Init -->
    <script type="text/javascript" src="assets/js/init.js"></script>
    <!-- L'heure tourne .. -->
    <script type="text/javascript">window.onload = date_heure('date_heure');</script>
</body>
</html>
