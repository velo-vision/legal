
<?php
  require("functions.php");
  get_header();
?>

<div class="animsition"
  data-animsition-in-class="fade-in-up-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-up-sm">

  <div class="row nomargin">
    <div class="valign-wrapper">
      <div class="col l12 s12 nomargin valign">
        <div class="col l6 m6 offset-m3 s12 center imagen-somos img-contacto">
          <img src="images/recursos/contacto.png" title="Quiénes Somos" alt="Legal Nest">
        </div>
        <div class="col l6 m10 offset-m1 s12 top-100">
        <form class="col s12">
          <div class="row nomargin">
            <div class="input-field col s12">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">NOMBRE</label>
            </div>
          </div>
          <div class="row nomargin">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row nomargin">
            <div class="col s12 input-field" style="background-color:#fbfbfa;">
              <textarea id="textarea1" class="materialize-textarea bg-mensaje nomargin"></textarea>
              <label for="textarea1">MENSAJE</label>
            </div>
          </div>
          <a class="btn-floating btn-large right boton-enviar" ><img src="images/recursos/avion-contacto.png" alt="Legal Nest"></a>
        </form>
        <div class="col l12 m12 s12 iconos-mapa">
          <ul>
            <li><a href="mailto:contacto@legalnest.mx"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
            <li><a target="_blank" jstcache="46" href="https://www.google.com.mx/maps/place/Bosque+de+Duraznos+61,+Bosque+de+las+Lomas,+11700+Ciudad+de+M%C3%A9xico,+CDMX/@19.4018887,-99.2457222,15z/data=!4m5!3m4!1s0x85d2017332e6f2e5:0x737ebf4034a7fd2b!8m2!3d19.4038418!4d-99.2416452?hl=es" jsaction="mouseup:placeCard.largerMap"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
            <li><a href="" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
            <li><a href="https://www.facebook.com/LegalNest/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/LegalNest" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/company-beta/16257210/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        </div>
        <div class="col l12 m12 s12 nomargin top-50" style="position:relative;">
          <div class="texto-mapa">
            <p>
              Bosque de Duraznos No. 61 Piso 3
              Bosques de las Lomas
              Miguel Hidalgo CP 11700
            </p>
            <p style="text-align:left !important; color:#33b498 !important; font-weight:bold !important;">
              Tel: 1234-5678
            </p>
            <p>
              <a target="_blank" jstcache="46" href="https://www.google.com.mx/maps/place/Bosque+de+Duraznos+61,+Bosque+de+las+Lomas,+11700+Ciudad+de+M%C3%A9xico,+CDMX/@19.4018887,-99.2457222,15z/data=!4m5!3m4!1s0x85d2017332e6f2e5:0x737ebf4034a7fd2b!8m2!3d19.4038418!4d-99.2416452?hl=es" jsaction="mouseup:placeCard.largerMap">Abrir Mapa Completo</a>
            </p>
          </div>
          <div class="mapa" id="mack-map"></div>
        </div>
      </div>
    </div>
  </div>



<?php
  get_footer();
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNTSMEOij97Zpc3vSSkP1pXOIWg8tH-gA&sensor=false"></script>
<script src="js/maps.js"></script>

</div>

<script>
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in-up-sm',
    outClass: 'fade-out-up-sm',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
</script>
