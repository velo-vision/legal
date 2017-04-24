


<?php
  require("functions.php");
  get_header();
?>

<div class="animsition"
  data-animsition-in-class="fade-in-right-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-right-sm"
  data-animsition-out-duration="800">

<div class="row nomargin bg-quienes">
  <div class="valign-wrapper  content-pro">
    <div class="col l12 s12 valign">
      <div class="col l12 nomargin">
        <div class="col l9 m12 s12">
          <div class="col l12 m12 nomargin">
            <div class="col l3 m5 cuadro-1">
              <div class="col l10 offset-l1">
                <p>
                  Las firmas de abogados tradicionales <strong>estudian cada caso específicamente desde un punto de
                  vista jurídico.</strong>
                </p>
              </div>
            </div>
            <div class="col l1 m2 nomargin">
              <div class="col l12 nomargin ocultar-linea">
                <img class="top-50" width="100%;" src="images/recursos/linea-1.png" alt="Legal Nest">
              </div>
            </div>
            <div class="col l3 m5 cuadro-2">
              <div class="col l12">
                <p>
                  <strong>Al día de hoy la parte jurídica y comercial de los negocios van de la mano,</strong> por lo que es
                  imposible analizarlas por separado.
                </p>
              </div>
            </div>
            <div class="col l1 m3 nomargin">
              <div class="col l12 nomargin line-legal ocultar-linea">
                <img class="top-50" width="100%;" src="images/recursos/linea-1.png" alt="Legal Nest">
              </div>
            </div>
            <div class="col l3 m6 s12 center title-legal">
              <p class="nomargin top-10">¿Legal Nest?</p>
            </div>
            <div class="col l1">
              <div class="col l12 ocultar-linea nomargin">
                <img src="images/recursos/linea-2.png" alt="Legal Nest">
              </div>
            </div>
          </div>
          <!-- <div class="col l12 s12 quienes-1 center">
            <div class="col l8 line-none">
              <img src="images/recursos/linea-3.png" alt="Legal Nest">
            </div>
            <div class="col l2 top-100">
              <p style="text-transform:none"><strong>¿Por qué?</strong></p>
            </div>
          </div> -->
          <div class="col l3 offset-l6 m12 s12 quienes-1 center top-50">
            <p style="text-transform:none"><strong>¿Por qué?</strong></p>
          </div>
        </div>
        <div class="col l3 m8 offset-m2 s12">
          <div class="col l12 m12 que-es2">
            <p class="nomargin">
              En LegalNest buscamos siempre tener una <strong>imagen completa de tu negocio</strong> así como tus metas a corto,
              mediano y largo plazo para poder proponer estrategias y/o soluciones <strong>alineadas a tus intereses.</strong>
            </p>
          </div>
          <div class="col l12 m12 center mobile">
            <img src="images/recursos/que-no2.png" title="Que no somos 2" alt="Legal Nest">
          </div>
        </div>
      </div>
      <div class="col l10 offset-l1 m12 s12 no-somos center top-50">
        <div class="col l2 offset-l1 m3 offset-m1 s6 offset-s3 one top-small hvr-float-shadow">
          <a href="que-no-somos.php" class="animsition-link">
            <img src="images/recursos/firma.png" title="Firma Tradicional" alt="Legla Nest">
          </a>
        </div>
        <div class="col l3 m4 s12">
          <div class="col l12 m12 s8 offset-s2  top-small hvr-bob">
            <a href="que-no-somos-2.php" class="animsition-link">
              <img width="180px;" src="images/recursos/analisis2.png" title="Análisis" alt="Legal Nest">
            </a>
          </div>
        </div>
        <div class="col l2 m3 s8 offset-s2 top-small hvr-float-shadow">
          <a href="que-no-somos-3.php" class="animsition-link">
            <img src="images/recursos/aliado.png" title="Aliado Comercial" alt="Legal Nest">
            <p class="nomargin">
              Aliado
            </p>
            <p class="nomargin">
              comercial
            </p>
            <p class="nomargin" style="visibility:hidden;">
              comercial
            </p>
          </a>
        </div>
        <div class="col l2 m4 offset-m2 s8 offset-s2 top-small top-somos hvr-float-shadow">
          <a href="que-no-somos-4.php" class="animsition-link">
            <img src="images/recursos/servicios.png" title="Servicio de consultoria integral" alt="Legla Nest">
            <p class="nomargin">
              Servicios de
            </p>
            <p class="nomargin">
              consultoría
            </p>
            <p class="nomargin">
              integral
            </p>
          </a>
        </div>
        <div class="col l2 m4 s8 offset-s2 top-small top-somos hvr-float-shadow">
          <a href="que-no-somos-5.php" class="animsition-link">
            <img src="images/recursos/esquema.png" title="Esquema Piramidal" alt="Legal Nest">
            <p class="nomargin">
              Adiós al
            </p>
            <p class="nomargin">
              esquema
            </p>
            <p class="nomargin">
              Piramidal
            </p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
  get_footer();
?>

</div>

<script>
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in-right-sm',
    outClass: 'fade-out-right-sm',
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
