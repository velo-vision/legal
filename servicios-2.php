
<?php
  require("functions.php");
  get_header();
?>

<div class="animsition"
  data-animsition-in-class="fade-in-right-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-right-sm"
  data-animsition-out-duration="800">

<div class="row nomargin">
  <div class="valign-wrapper">
    <div class="col l12 m12 s12 valign">
      <div class="col l12 m12 s12 titulo-servicios center">
        <p>Servicios</p>
      </div>
      <div class="col l1 m1 offset-m5 s2 offset-s4 center prev">
        <a href="servicios-1.php"><img src="images/servicios/prev.png" title="Prev" alt="Legal Nest"></a>
      </div>
      <div class="col l1 m1 s2 center prev hide-on-large-only">
        <a href="servicios-3.php"><img src="images/servicios/next.png" title="Prev" alt="Legal Nest"></a>
      </div>
      <div class="col l10 m12 s12 top-50">
        <div class="col l12 m12 s12 nomargin">
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>pagarés</strong></p>
                <img src="images/servicios/pagares.png" title="Pagarés" alt="Legal Nest">
                <p>
                  Creamos un documento que te
                  ayude a hacer efectivas
                  obligaciones de pago.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>reglamento interno de trabajo</strong></p>
                <img src="images/servicios/reglamento.png" title="Reglamento interno de trabajo" alt="Legal Nest">
                <p>
                  Te ayudamos a crear las normas
                  que regirán a los empleados
                  de tu empresa.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p class="nomargin"><strong>memorándum de entendimiento</strong></p>
                <img src="images/servicios/memorandum.png" title="Memorándum de  entendimiento" alt="Legal Nest">
                <p>
                  Documento que establece acuerdos
                  previos a una futura relación de
                  negocio entre dos partes.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col l12 m12 s12 top-30">
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>aviso comercial</strong></p>
                <img src="images/servicios/comercial.png" title="Aviso Comercial" alt="Legal Nest">
                <p>
                  Estudiamos y llevamos a cabo el registro de tu “slogan”.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>derechos de autor</strong></p>
                <img src="images/servicios/derechos.png" title="Derechos de autor" alt="Legal Nest">
                <p>
                  Registramos tus obras.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>rfc/fiel/ciec</strong></p>
                <img src="images/servicios/rfc.png" title="RFC" alt="Legal Nest">
                <p>
                  Indispensables para el
                  cumplimiento de obligaciones
                  ante el SAT.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col l1 prev center hide-on-med-only hide-on-small-only">
        <a href="servicios-3.php"><img src="images/servicios/next.png" title="Next" alt="Legal Nest"></a>
      </div>
      <div class="col l12 m12 s12">
        <div class="col l2 offset-l5 m2 offset-m5 s4 offset-s4 bottom-50">
          <a href="contacto.php"><p class="contacto-paquete">Contratar</p></a>
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
