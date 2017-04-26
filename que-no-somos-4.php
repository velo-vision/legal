
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
  <div class="valign-wrapper content-pro">
    <div class="col l12 s12 valign">
      <div class="col l12 nomargin">
        <div class="col l9 m12 s12">
          <div class="col l12 m12 s12  nomargin">
            <div class="col l3 m5 s12 cuadro-1">
              <div class="col l10 offset-l1 m12 s12">
                <p>
                  Un despacho de abogados <strong>se enfoca en analizar la situación desde un punto de vista jurídico.</strong>
                </p>
              </div>
            </div>
            <div class="col l1 m2 nomargin ocultar-linea">
              <div class="col l12 nomargin">
                <img class="top-50" width="100%;" src="images/recursos/linea-1.png" alt="Legal Nest">
              </div>
            </div>
            <div class="col l3 m5 s12 cuadro-2">
              <div class="col l12 m12 s12">
                <p>
                  Los servicios exclusivamente jurídicos <strong>difícilmente atienden todas tus necesidades.</strong>
                </p>
              </div>
            </div>
            <div class="col l1 m3 nomargin ocultar-linea">
              <div class="col l12 line-legal nomargin">
                <img class="top-50" width="100%;" src="images/recursos/linea-1.png" alt="Legal Nest">
              </div>
            </div>
            <div class="col l3 m6 s12 center title-legal">
              <p class="nomargin top-10">¿LegalNest?</p>
            </div>
            <div class="col l1 ocultar-linea">
              <div class="col l12 nomargin">
                <img src="images/recursos/linea-2.png" alt="Legal Nest">
              </div>
            </div>
          </div>
          <div class="col l3 offset-l6 s12 quienes-1 center">
            <p style="text-transform:none"><strong>¿Por qué?</strong></p>
          </div>
        </div>
        <div class="col l3 m8 offset-m2 s12">
          <div class="col l12 m12 s12 que-es2">
            <p class="nomargin">
              En LegalNest buscamos estudiar tu negocio de tal manera que podamos proponerte soluciones,
              esquemas, análisis y capacitaciones enfocadas al <strong>crecimiento de tu negocio</strong> explicando de
              manera fácil los <strong>riesgos y beneficios</strong> de las situaciones que se te presenten.
            </p>
          </div>
          <div class="col l12 m12 s12 center mobile">
            <img src="images/recursos/que-no4.png" title="Que no somos 2" alt="Legal Nest">
          </div>
        </div>
      </div>
      <div class="col l10 offset-l1 m12 s8 offset-s2  no-somos center top-50">
        <div class="col l2 offset-l1 m3 offset-m1 s8 offset-s2 hvr-float-shadow one">
          <a href="que-no-somos.php" class="animsition-link">
            <img src="images/recursos/firma.png" title="Firma Tradicional" alt="Legla Nest">
          </a>
        </div>
        <div class="col l2 m4 s12 hvr-float-shadow top-small">
          <a href="que-no-somos-2.php" class="animsition-link">
            <img src="images/recursos/analisis.png" title="Análisis" alt="Legal Nest">
          <p class="nomargin">
            Análisis
          </p>
          <p class="nomargin">
            detallado de tu
          </p>
          <p class="nomargin">
            negocio
          </p></a>
        </div>
        <div class="col l2 m4 s12 hvr-float-shadow top-small">
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
        <div class="col l3 m4 offset-m2 s10 offset-s1 hvr-bob top-somos top-small">
          <a href="que-no-somos-4.php" class="animsition-link">
            <img width="180px;" src="images/recursos/servicios2.png" title="Servicio de consultoria integral" alt="Legla Nest">
          </a>
        </div>
        <div class="col l2 m4 s12 hvr-float-shadow top-somos top-small">
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
