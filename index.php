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
  <title>kappr ~ de nieuwe en betaalbare kapper in Nieuwegein en Werkendam</title>
  <meta name="description" content="kappr is de nieuwe en betaalbare kapper in de wijk Galecop in Nieuwegein">
  <link type="text/plain" rel="author" href="humans.txt">
  <meta name="author" content="lekkerduidelijk.nl">
  <meta name="viewport" content="width=900,maximum-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <?php if ($devmode) : ?><link rel="stylesheet" href="css/style.css">
  <?php else : ?><link rel="stylesheet" href="css/style.min.css"><?php endif; ?>
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><iframe src="http://fronteers.nl/_tmp/ie6-upgrade/" frameborder="no" style="height: 81px; width: 100%; border: none;"></iframe><![endif]-->
  <div id="wrap">
    <header id="top">
      <figure id="logo"><img src="img/logo.png" alt="kappr - de betaalbare kapper!"></figure>
    </header>
    <nav role="navigation" id="access">
      <ul>
        <li><a href="#top" title="De nieuwe en betaalbare kapper">Over ons</a></li>
        <li><a href="#prijzen" title="Bij kappr weet je waar je aan toe bent">Prijzen</a></li>
        <li><a href="#producten" title="Bij kappr werken we met Wella Professionals">Producten</a></li>
        <li><a href="#locatie" title="kappr vind je in de wijk Galecop in Nieuwegein">Locaties</a></li>
        <li><a href="#contact" title="Stuur ons een e-mail of bel 030 6021675">Contact</a></li>
      </ul>
    </nav>
    <div id="main" role="main">
      <section id="overons" class="chapter">
        <section class="content">
          <hgroup class="wrap">
            <h1>De nieuwe en <em>betaalbare</em> kapper!</h1>
            <h2>
              Bij kappr houden we niet van fratsen. Gewoon een mooi kapsel 
              voor een betaalbare prijs.
              Je bent <em>altijd</em> welkom, met en zonder afspraak.              
            </h2>
          </hgroup>
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
            <section id="pricedata">
              <ul class="column first">
                <li class="product">
                  <hgroup>
                    <h2>Knippen</h2>
                    <h3>&euro; 19,50</h3>
                  </hgroup>
                  <em>Wassen en knippen</em>
                </li>
                <li class="product">
                  <hgroup>
                    <h2>Kind knippen t/m 8 jaar</h2>
                    <h3>&euro; 14,50</h3>
                  </hgroup>
                  <em>Excl. wassen: Knippen op schoon gewassen haar.</em>
                </li>
                <li class="product">
                  <hgroup>
                    <h2>Kind knippen t/m 12 jaar</h2>
                    <h3>&euro; 16,50</h3>
                  </hgroup>
                  <em>Excl. wassen: Knippen op schoon gewassen haar.</em>
                </li>
                <li class="product">
                  <hgroup>
                    <h2>Permanenten vanaf</h2>
                    <h3>&euro; 29,50</h3>
                  </hgroup>
                  <em>Permanenten van uw haar.</em>
                </li>
                <li class="product">
                  <hgroup>
                    <h2>Permanenten compl. vanaf</h2>
                    <h3>&euro; 59,50</h3>
                  </hgroup>
                  <em>Wassen, knippen, permanenten, masker &amp; afwerken.</em>
                </li>
              </ul>
              <ul class="column">
                <li class="product">
                  <hgroup>
                    <h2>Kleurspoeling</h2>
                    <h3>&euro; 19,50</h3>
                  </hgroup>
                  <em>Tijdelijke kleuring/opfrissen van uw kleur max 12 keer wassen.</em>
                </li>
                <li class="product">
                  <hgroup>
                    <h2>Kleuren vanaf</h2>
                    <h3>&euro; 24,50</h3>
                  </hgroup>
                  <em>Uitgroei kleuren met een permanente haarkleuring.</em>
                </li>
                <li class="product">
                  <hgroup>
                    <h2>High / low lights vanaf</h2>
                    <h3>&euro; 29,50</h3>
                  </hgroup>
                  <em>High of low lights met de spatel, kam of painting.</em>
                </li>
                <li class="product">
                  <hgroup>
                    <h2>Kleuren compleet vanaf</h2>
                    <h3>&euro; 52,50</h3>
                  </hgroup>
                  <em>Wassen, knippen, kleuren, masker &amp; afwerken.</em>
                </li>
              </ul>
              <em class="note">
                Alle behandelingen zijn inclusief wassen van het haar met 
                verzorgende shampoo, lak en versteviging. Wij gebruiken 
                uitsluitend producten van Wella Professionals.
              </em>
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
              Bij kappr werken wij met producten van Wella Professionals. Wij verkopen Wella Professionals producten voor de verzorging (care) en styling van uw haar (styling).
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
            <h1>Locaties</h1>
            <p>
              kappr vind je in de wijk Galecop in Nieuwegein, net achter het
            wijkwinkelcentrum en in het centrum van Werkendam. In de directe omgeving van de salons is gratis parkeergelegenheid. </p>
            <div id="map">
              <aside>
                <h2 id="logosmall" class="ir" title="kappr">kappr</h2>
                <address>
                  Abraham Kuyperpark 172<br>
                  3437 JD Nieuwegein
                </address>
                <span title="Telefoon nummer">T: 030 6021675</span><br>
                <br>
                <address>
                  Hoogstraat 107<br>
                  4251 CK Werkendam
                </address>
                <span title="Telefoon nummer">T: 0183 503927</span><br>
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
              of bel direct naar <em title="Telefoon nummer">030 6021675</em> (Nieuwegein)<em title="Telefoon nummer"><br>0183 503927</em> (Werkendam)</em>
            </p>
          </div>
        </section>
      </section>
    </div>
    <footer>
      <p><?php echo date("Y") ?> Copyright kappr. Alle rechten voorbehouden | Design door <a href="http://monk-design.nl" title="Monk Design is een creatieve designstudio in midden Nederland">Monk Design</a> | Code door <a href="http://lekkerduidelijk.nl" title="lekkerduidelijk ~ toegankelijke en gebruiksvriendelijke websites">lekkerduidelijk</a></p>
    </footer>
  </div>
  <div id="loader"><span id="loading"><img src="img/loaderlogo.gif" alt="kappr"><img src="img/loader.gif" alt="Laden..."></span></div>
<?php if($devmode): ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
<?php else : ?>
  <script src="js/all.min.js"></script>
<?php endif; ?>
  <script type="text/javascript" src="http://use.typekit.com/rcy7zcg.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script>
    var _gaq=[['_setAccount','UA-30123690-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>