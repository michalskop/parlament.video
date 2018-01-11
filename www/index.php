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

    <meta property="og:image" content="images/picture3.jpg"/>
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
        footer {
            position:fixed !important;
            bottom:0;
            width: 100%;
            justify-content: flex-start;
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
                BETA
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

        <div class="day">
            <a name="2018-01-10"></a>
            <h3>10. 1. 2018</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLwwpkfhGl_D-eP0tXFI7_WgT9Fobl1jGX" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <div class="pb-2">
                <i class="fas fa-info-circle"></i> Přepis schůzí:
            </div>
            <ul class="">
                <li class="">
                    <a href="http://www.psp.cz/eknih/2017ps/stenprot/005schuz/5-1.html" target="_blank">5. schůze</a>
                </li>
            </ul>
        </div>
    </div>

    <footer class="navbar navbar-light bg-light">
        <div class="container d-flex justify-content-between">
            <span>Od autorů <a href="https://volebnikalkulacka.cz" class="m-1">Volební kalkulačky</a></span>
            <span><a href="https://projects.kohovolit.eu">Další projekty autorů</a> • Kontakt: <a href="http://kohovolit.eu/kontakt">KohoVolit.eu</a></span>
        </div>
    </footer>

    <div id="darujme-widget" class="p-2">
        <div data-darujme-widget-token="xdr0zrhuv7a029gr" class="mx-auto">&nbsp;</div>
        <style>
            #darujme-widget {
                padding-bottom: 60px;
            }
            @media (min-width: 992px) {
                #darujme-widget {
                    padding-bottom: 0;
                    margin: 0;
                    position: absolute;
                    bottom: 60px;
                    right: 0;
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

    <?php
        file_get_contents('https://parlament.video/log.php?' . $_SERVER['REQUEST_URI']);
    ?>
    <iframe src="https://volebnikalkulacka.cz/session/" width="0" height="0" frameborder="0"></iframe>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script> -->
</body>
</html>
