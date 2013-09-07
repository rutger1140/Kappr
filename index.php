<?php
/**
 * kappr - single page website with parallax effects
 * @author: Rutger Laurman (lekkerduideljk.nl)
 *
 */

// Set default timezone (OSX Lion patch)
date_default_timezone_set('Europe/Amsterdam');

// Toggle dev-mode (combined scripts)
$devmode = false;

?>
<!doctype html>
<?php /* We do not need this, for now
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="nl"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="nl"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="nl"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="nl"> <!--<![endif]--> */ ?>
<html class="no-js" lang="nl">
<head>
  <meta charset="utf-8">
  <title>kappr ~ er goed uitzien! De nieuwe kapper in Nieuwegein en IJsselstein</title>
  <meta name="description" content="kappr is de nieuwe kapper in Nieuwegein en IJsselstein">
  <link type="text/plain" rel="author" href="humans.txt">
  <meta name="author" content="lekkerduidelijk.nl">
  <meta name="viewport" content="width=900,maximum-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/style.css">
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
  <script type="text/javascript" src="http://use.typekit.com/rcy7zcg.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <script type="text/javascript">//<![CDATA[
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30123690-1']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
  //]]></script>

</head>
<body>
  <!--[if lt IE 7]><iframe src="http://fronteers.nl/_tmp/ie6-upgrade/" frameborder="no" style="height: 81px; width: 100%; border: none;"></iframe><![endif]-->
  <div id="wrap">
    <header id="top">
      <figure id="logo"><img src="img/logo.png" alt="kappr - er goed uitzien"></figure>
    </header>
    <nav role="navigation" id="access">
      <ul>
        <li><a href="#top" title="De nieuwe kapper">Over ons</a></li>
        <li><a href="#prijzen" title="Bij kappr weet je waar je aan toe bent">Prijzen</a></li>
        <li><a href="#producten" title="Bij kappr werken we met Wella Professionals">Producten</a></li>
        <li><a href="#locatie" title="kappr vind je in de wijk Galecop in Nieuwegein en in IJsselstein">Locatie</a></li>
        <li><a href="#contact" title="Stuur ons een e-mail of bel">Contact</a></li>
      </ul>
    </nav>
    <div id="main" role="main">
      <section id="overons" class="chapter">
        <section class="content">
          <header class="wrap">
            <h1>De <em>nieuwe</em> kapper bij jou in de buurt</h1>
            <h2>
              Bij kappr houden we niet van fratsen. Gewoon er goed uitzien voor een redelijke prijs.
              Je bent bij ons <em>altijd</em> welkom met en zonder afspraak!
            </h2>
          </header>
        </section>
        <div id="fill1" class="fill"><div class="fillmask"></div><div id="fill1-scissor"></div><div id="fill1-dashedline"></div><div id="fill1-shapes2"></div><div id="fill1-shapes1"></div></div>
      </section>
      <section id="prijzen" class="chapter">
        <section class="content">
          <div class="wrap">
            <h1>Prijzen</h1>
            <p>
              Bij kappr weet je altijd waar je aan toe bent, voor dat we je
              haarbehandeling starten laten we je weten wat het gaat kosten. We
              houden niet van verrassingen, wat je ziet is wat je krijgt. <br>
              Simpel, eerlijk en duidelijk.
            </p>

            <ul class="tabs">
              <li><a href="#prijzen-nieuwegein">Nieuwegein</a></li>
              <li><a href="#prijzen-ijsselstein">IJsselstein</a></li>
            </ul>

            <section class="pricedata">
              <div id="prijzen-nieuwegein" class="pricedata-content">
                <ul class="column first">
                  <li class="product">
                    <div class="product-title">
                      <h2>Knippen</h2>
                      <h3>&euro; 19,50</h3>
                    </div>
                    <em class="product-description">Wassen &amp; knippen</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Kind knippen t/m 10 jaar</h2>
                      <h3>&euro; 14,50</h3>
                    </div>
                    <em class="product-description">Excl. wassen: knippen op schoon gewassen haar</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Kind knippen t/m 16 jaar</h2>
                      <h3>&euro; 17,50</h3>
                    </div>
                    <em class="product-description">Wassen &amp; knippen</em>
                  </li>

                  <li class="product">
                    <div class="product-title">
                      <h2>Kleurspoeling</h2>
                      <h3>&euro; 22,50</h3>
                    </div>
                    <em class="product-description">Tijdelijke kleuring / opfrissen van uw kleur max. 12 keer wassen</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Kleuren vanaf</h2>
                      <h3>&euro; 25,50</h3>
                    </div>
                    <em class="product-description">Uitgroei kleuren met een permanente haarkleuring (Wella Professionals producten)</em>
                  </li>
                </ul>
                <ul class="column">

                  <li class="product">
                    <div class="product-title">
                      <h2>High / low lights vanaf</h2>
                      <h3>&euro; 32,50</h3>
                    </div>
                    <em class="product-description">High of low lights met de spatel, kam of painting (Wella Professionals producten)</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Kleuren compleet vanaf</h2>
                      <h3>&euro; 56,00</h3>
                    </div>
                    <em class="product-description">Wassen, knippen, kleuren, masker &amp; afwerken (Wella Professionals producten)</em>
                  </li>

                  <li class="product">
                    <div class="product-title">
                      <h2>Permanenten vanaf</h2>
                      <h3>&euro; 32,50</h3>
                    </div>
                    <em class="product-description">Permanenten van uw haar met Wella Professionals producten</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Permanenten compl. vanaf</h2>
                      <h3>&euro; 62,50</h3>
                    </div>
                    <em class="product-description">Knippen, permanenten &amp; masker afwerken</em>
                  </li>
                </ul>
                <em class="note">
                  Alle behandelingen zijn inclusief wassen van het haar met
                  producten van Wella Professionals.
                </em>
              </div>

              <div id="prijzen-ijsselstein" class="pricedata-content">
                <ul class="column first">
                  <li class="product">
                    <div class="product-title">
                      <h2>Knippen</h2>
                      <h3>&euro; 22,50</h3>
                    </div>
                    <em class="product-description">Wassen &amp; knippen</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Kind knippen t/m 12 jaar</h2>
                      <h3>&euro; 15,00</h3>
                    </div>
                    <em class="product-description">Excl. wassen, knippen op schoon gewassen haar</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Knippen t/m 16 jaar</h2>
                      <h3>&euro; 17,50</h3>
                    </div>
                    <em class="product-description">Wassen &amp; knippen</em>
                  </li>

                  <li class="product">
                    <div class="product-title">
                      <h2>Kleurspoeling</h2>
                      <h3>&euro; 22,50</h3>
                    </div>
                    <em class="product-description">Tijdelijke kleuring / opfrissen van uw kleur max. 12 keer wassen</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Kleuren vanaf</h2>
                      <h3>&euro; 27,50</h3>
                    </div>
                    <em class="product-description">Uitgroei kleuren met een permanente haarkleuring (Wella Professionals producten)</em>
                  </li>
                </ul>
                <ul class="column">
                  <li class="product">
                    <div class="product-title">
                      <h2>High / low lights vanaf</h2>
                      <h3>&euro; 32,50</h3>
                    </div>
                    <em class="product-description">High of low lights met de spatel, kam of painting  (Wella Professionals producten)</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Kleuren compleet vanaf</h2>
                      <h3>&euro; 61,00</h3>
                    </div>
                    <em class="product-description">Wassen, knippen, kleuren, masker &amp; afwerken  (Wella Professionals producten)</em>
                  </li>

                  <li class="product">
                    <div class="product-title">
                      <h2>Permanenten vanaf</h2>
                      <h3>&euro; 32,50</h3>
                    </div>
                    <em class="product-description">Permanenten van uw haar met Wella Professionals producten</em>
                  </li>
                  <li class="product">
                    <div class="product-title">
                      <h2>Permanenten compl. vanaf</h2>
                      <h3>&euro; 71,00</h3>
                    </div>
                    <em class="product-description">Knippen, permanenten &amp; masker afwerken</em>
                  </li>
                </ul>

                <em class="note">
                  Alle behandelingen zijn inclusief wassen van het haar met
                  producten van Wella Professionals.
                </em>
              </div>
            </section>

          </div>
        </section>
        <div id="fill2" class="fill"><div class="fillmask"></div><div id="fill2-comb"></div><div id="fill2-lines"></div></div>
      </section>
      <section id="producten" class="chapter">
        <section class="content">
          <div class="wrap">
            <h1>Producten</h1>
            <p>
              Bij kappr werken we met producten van Wella Professionals. Wij verkopen Wella Professionals producten voor de verzorging (care) en styling van uw haar (styling).
              Ook de prijzen zijn duidelijk bij kappr. Wij hanteren 3 prijzen voor onze producten: €10,50 €13,50 en €16,50.
            </p>
            <div id="products" class="clearfix">
              <figure id="pricetags">
                <div id="fill3-care" title="Care producten 9,95 euro"></div>
                <div id="fill3-styling" title="Styling producten 11,95 euro"></div>
                <div id="fill3-circles"></div>
              </figure>
              <figure id="hairproducts">
                <img src="img/hairproducts.gif">
              </figure>
            </div>
          </div>
        </section>
        <div id="fill3" class="fill"></div>
      </section>
      <section id="locatie" class="chapter">
        <section class="content">
          <div class="wrap">
            <h1>Locatie</h1>
            <p>
              Kappr Nieuwegein vind je in de wijk Galecop in Nieuwegein, net achter het
              wijkwinkelcentrum.
              In de directe omgeving van de salons is gratis parkeergelegenheid.
            </p>
            <p>
              Kappr IJsselstein vindt u Voorstraat 12a in het centrum van het stadje.
              Parkeren kan je het best in de parkeer garage Eiteren.
            <p>
            <div id="map">
              <aside>
                <h2 id="logosmall" class="ir" title="kappr">kappr</h2>
                <address id="location1">
                  Abraham Kuyperpark 172<br>
                  3437 JD Nieuwegein<br>
                  <span title="Telefoon nummer">T: 030 6021675</span>
                </address>
                <address id="location2">
                  Voorstraat 12a<br>
                  3401 Dc IJsselstein<br>
                  <span title="Telefoon nummer">T: 030 6888471</span><br>
                </address>
                <br>
                <div id="opening">
                  <h2>Openingstijden</h2>
                  <p>
                    maandag gesloten<br>
                    di t/m do 9.00-17.30<br>
                    vrijdag 9.00-20.00<br>
                    zaterdag 9.00-16.30<br>
                  </p>
                </div>
              </aside>
              <div id="mapcanvas"></div>
            </div>
          </div>
        </section>
        <div id="fill4" class="fill"><div class="fillmask"></div><div id="fill4-circle1"></div><div id="fill4-circle2"></div><div id="fill4-circlesharp"></div><div id="fill4-circleblur"></div></div>
      </section>
      <section id="contact" class="chapter">
        <section class="content">
          <div class="wrap">
            <h1>Contact</h1>
            <p>
              <strong>Vragen?</strong> Stuur ons een e-mail op
              <a href="mailto:mail@kappr.nl" title="Neem contact op via e-mail">mail@kappr.nl</a>
              of bel direct naar <em title="Telefoon nummer Nieuwegein">030 6021675</em> of <em title="Telefoon nummer IJsselstein">030 6888471</em><br>
            </p>
          </div>
        </section>
      </section>
    </div>
    <footer>
      <p><?php echo date("Y") ?> Copyright kappr. Alle rechten voorbehouden | Design door <a href="http://monk-design.nl" title="Monk Design is een creatieve designstudio in midden Nederland">Monk Design</a> | Code door <a href="http://lekkerduidelijk.nl" title="Lekkerduidelijk ~ gebruiksvriendelijke websites">Lekkerduidelijk</a></p>
    </footer>
  </div>
  <div id="loader"><span id="loading"><img src="img/loaderlogo.gif" alt="kappr"><img src="img/loader.gif" alt="Laden..."></span></div>
  <script src="js/all.js"></script>

  <script type="text/javascript">
    var _gauges = _gauges || [];
    (function() {
      var t   = document.createElement('script');
      t.type  = 'text/javascript';
      t.async = true;
      t.id    = 'gauges-tracker';
      t.setAttribute('data-site-id', '5175ac08108d7b14de0000b8');
      t.src = '//secure.gaug.es/track.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(t, s);
    })();
  </script>
</body>
</html>
