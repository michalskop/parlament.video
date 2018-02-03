<!doctype html>
<html lang="cs">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Archiv video záznamů z jednání Poslanecké sněmovny Parlamentu ČR">
    <meta name="keywords" content="poslanecká sněmovna">
    <meta name="author" content="Michal Škop, KohoVolit.eu">

    <meta property="og:image" content="https://parlament.video/images/picture3.jpg"/>
    <meta property="og:title" content="Parlament.video - archiv záznamů jednání Sněmovny"/>
    <meta property="og:url" content="https://parlament.video/" />
    <meta property="og:site_name" content="Parlament.video - archiv záznamů jednání Sněmovny"/>
    <meta property="og:description" content="Parlament.video - archiv video záznamů z jednání Poslanecké sněmovny Parlamentu ČR"/>
    <meta property="og:type" content="website"/>
    <meta property="fb:app_id" content="382131198923863" />



    <link href="images/icon-inverse-light.svg" rel="icon"  type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script>

    <title>Parlament.video</title>

    <style>
        .video {
            max-width: 600px;
        }
        @media (max-width: 720px) {

        }
    </style>
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/icon-light.svg" width="30" height="30" alt="" class="m-2"> Parlament.video
            </a>
            <span class="my-2 my-lg-0 text-light">
                ALFA+
            </span>
        </div>
    </nav>
    <div class="container">
        <div class="mt-2">
            <h1><img src="images/icon.svg" width="64" height="64" alt="" class="m-2"><small class="text-muted">Video záznamy z Poslanecké sněmovny Parlamentu ČR</small></h1>
        </div>

        <div class="alert alert-dismissible alert-success">
            <!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
            Aby tento projekt mohl fungovat, <a href="https://www.darujme.cz/projekt/1200625" target="_blank"><strong>potřebujeme Vaši podporu!</strong></a>
        </div>

        <?php
            $format = "d. m. Y";
            $days = json_decode(file_get_contents("videos.json"));
            foreach($days as $day) {
        ?>
            <div class="day">
                <a name="<?php echo $day->day;?>"></a>
                <h3><?php echo date($format, strtotime($day->day));?></h3>
                <?php
                    if (isset($day->video)) {
                        $html = '<div class="pl-4">
                        <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe class="embed-responsive-item" src="';
                        $html .= $day->video;
                        $html .= '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>';
                        echo $html;
                    }
                 ?>
                <div class="pl-4 pb-2">
                    <i class="fas fa-info-circle"></i> Přepis schůzí:
                </div>
                <ul class="">
                    <?php
                        foreach($day->texts as $text) {
                            $html = '<li class="">
                                <a href="' . $text->url . '" target="_blank">' . $text->session . '. schůze</a>
                            </li>';
                            echo $html;
                        }
                     ?>
                </ul>
            </div>
        <?php
            }
        ?>

        <?php
            $settings = json_decode(file_get_contents("../settings.json"));
            $url = "https://www.darujme.cz/api/v1/organization/1200143/pledges-by-filter?apiId=" . $settings->apiId . "&apiSecret=" . $settings->apiSecret . "&projectId=1200625";
            $pledges = json_decode(file_get_contents($url));
            $success = ["success", "success_money_on_account", "sent_to_organization"];
            $supporters = [];
            foreach($pledges->pledges as $s) {
                $support = false;
                foreach($s->transactions as $t) {
                    if (in_array($t->state, $success)) {
                        $support = true;
                    }
                }
                if ($support) {
                    $supporters[] = $s->donor->firstName . "&nbsp;" . $s->donor->lastName;
                }
            }
         ?>
         <div class="col-lg-6 alert alert-info">
             <h4>
                 <i class="fas fa-heart text-danger"></i> Tento projekt podpořili:
             </h4>
             <ul>
                 <?php foreach($supporters as $s) {
                     echo "<li>" . $s . "</li>";
                 }
                 ?>
             </ul>
         </div>

    </div>


    <div id="darujme-container" class="p-2 float-sm-right">
        <div data-darujme-widget-token="xdr0zrhuv7a029gr" class="" id="darujme-widget">&nbsp;</div>
        <style>
            #darujme-container {
                padding-bottom: 60px;
            }
            #darujme-widget {
                margin-left: auto;
                margin-right: auto;
                display: block;
            }
            @media (min-width: 992px) {
                #darujme-container {
                    padding-bottom: 0;
                    position: sticky;
                    bottom: 0;
                }
                #darujme-widget {
                    margin-right: inherit;
                    margin-left: inherit;
                }
            }
        </style>
        <script type="text/javascript">
        	+function(w, d, s, u, a, b) {
        		w['DarujmeObject'] = u;
        		w[u] = w[u] || function () { (w[u].q = w[u].q || []).push(arguments) };
        		a = d.createElement(s); b = d.getElementsByTagName(s)[0];
        		a.async = 1; a.src = "https:\/\/www.darujme.cz\/assets\/scripts\/widget.js";
        		b.parentNode.insertBefore(a, b);
        	}(window, document, 'script', 'Darujme');
        	Darujme(1, "xdr0zrhuv7a029gr", 'render', "https:\/\/www.darujme.cz\/widget?token=xdr0zrhuv7a029gr", "270px");
        </script>
    </div>


    <footer class="navbar navbar-light bg-light">
        <div class="container d-flex justify-content-between">
            <span>Od autorů <a href="https://volebnikalkulacka.cz" class="m-1">Volební kalkulačky</a></span>
            <span><a href="https://projects.kohovolit.eu">Další projekty autorů</a> • Kontakt: <a href="http://kohovolit.eu/kontakt">KohoVolit.eu</a> • <a href="https://github.com/michalskop/parlament.video"><i class="fab fa-github"></i> Kód</a>
            </span>
        </div>
    </footer>




    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      // tracker methods like "setCustomDimension" should be called before "trackPageView"
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//piwik.kohovolit.eu/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '8']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//piwik.kohovolit.eu/piwik.php?idsite=8&rec=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->







    <?php
        // file_get_contents('https://parlament.video/log.php?' . $_SERVER['REQUEST_URI']);
    ?>
    <!-- <iframe src="https://volebnikalkulacka.cz/session/" width="0" height="0" frameborder="0"></iframe> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script> -->
</body>
</html>
