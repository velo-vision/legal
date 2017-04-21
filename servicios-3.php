

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
        <a href="servicios-2.php"><img src="images/servicios/prev.png" title="Prev" alt="Legal Nest"></a>
      </div>
      <div class="col l1 m1 s2 center prev hide-on-large-only">
        <a href="servicios.php"><img src="images/servicios/next.png" title="Prev" alt="Legal Nest"></a>
      </div>
      <div class="col l10 m12 s12 top-50">
        <div class="col l12 m12 s12 nomargin">
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>control corporativo</strong></p>
                <img src="images/servicios/control.png" title="Control Corporativo" alt="Legal Nest">
                <p>
                  Actualización y administración anual
                  de tus libros corporativos
                  y tus asambleas.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
                <p><strong>análisis de optimización corporativa</strong></p>
                <div class="col l12 m12 s12">
                <img src="images/servicios/optimizacion.png" title="Análisis de optimización corporativa" alt="Legal Nest">
                <p>
                  Te presentamos un cuadro corporativo
                  del estatus de tu empresa y las
                  maneras en las que creemos que
                  puedes optimizar tus gastos.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>análisis fiscal</strong></p>
                <img src="images/servicios/fiscal.png" title="Análisis Fiscal" alt="Legal Nest">
                <p>
                  Siempre hay formas y beneficios
                  por estar mejor administrados
                  fiscalmente.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col l12 m12 s12 top-30">
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>formalizar obligaciones pendientes</strong></p>
                <img src="images/servicios/obligaciones.png" title="Formalizar obligaciones pendientes" alt="Legal Nest">
                <p>
                  Te ayudamos a documentar todos
                  esos derechos y obligaciones que
                  estén pendientes de formalizarse.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>laboral</strong></p>
                <img src="images/servicios/laboral.png" title="Laboral" alt="Legal Nest">
                <p>
                  Te apoyamos a resolver conflictos
                  laborales/demandas de tus empleados.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 servicios center">
            <div class="col l10 offset-l1 m12 s12">
              <div class="col l12 m12 s12">
                <p><strong>asesoría legal</strong></p>
                <img src="images/servicios/legal.png" title="Asesoría Legal" alt="Legal Nest">
                <p>
                  Siempre estamos disponibles para
                  resolver cualquier duda que tengas.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col l1 prev center hide-on-med-only hide-on-small-only">
        <a href="servicios.php"><img src="images/servicios/next.png" title="Next" alt="Legal Nest"></a>
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
