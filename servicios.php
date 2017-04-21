



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
        <a href="servicios-3.php"><img src="images/servicios/prev.png" title="Prev" alt="Legal Nest"></a>
      </div>
      <div class="col l1 m1 s2 center prev hide-on-large-only">
        <a href="servicios-1.php"><img src="images/servicios/next.png" title="Prev" alt="Legal Nest"></a>
      </div>
      <div class="col l10 m12 s12 top-50">
        <div class="col l12 m12 s12 nomargin">
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>constitutiva</strong></p>
                <img src="images/servicios/constitutiva.png" title="Constitutiva" alt="Legal Nest">
                <p>La base para empezar tu negocio.  Aquí están las reglas que administran tu empresa.</p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>contratos</strong></p>
                <img src="images/servicios/contratos.png" title="Contratos" alt="Legal Nest">
                <p>
                  Dependiendo de tus necesidades
                  generamos contratos que puedas
                  usar en el día a día de tu empresa.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>marca</strong></p>
                <img src="images/servicios/marca.png" title="Marca" alt="Legal Nest">
                <p>Estudiamos las probabilidades de éxito y las clases correspondientes para después llevar a cabo el registro de tu marca.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col l12 m12 s12 top-30">
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>NDA</strong></p>
                <img src="images/servicios/nda.png" title="NDA" alt="Legal Nest">
                <p>
                  Formato de acuerdo de
                  confidencialidad para proteger
                  tu información.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>digitalización documentos</strong></p>
                <img src="images/servicios/digital.png" title="Digitalización Documentos" alt="Legal Nest">
                <p>
                  Administración virtual y
                  acceso de tus documentos.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>in-house counsel</strong></p>
                <img src="images/servicios/in-house.png" title="In-House Counsel" alt="Legal Nest">
                <p>Siempre estamos disponibles para resolver cualquier duda que tengas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col l1 prev center hide-on-med-only hide-on-small-only">
        <a href="servicios-1.php"><img src="images/servicios/next.png" title="Next" alt="Legal Nest"></a>
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
