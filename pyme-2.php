
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
  <div class="valign-wrapper">
    <div class="col l12 s12 valign">
      <div class="col l12 s12 nomargin">
        <div class="col l3 m4 s12 paquete-startup center">
          <p class="nomargin top-10"><strong>PAQUETE</strong> <span>2</span></p>
          <p class="nomargin top-10">pyme</p>
        </div>
        <div class="col l2 m2 s4 paquete-numero top-50 center">
          <a href="pyme-1.php">
            <p class="nomargin top-10">paquete</p>
            <p class="nomargin top-10">1</p>
          </a>
        </div>
        <div class="col l2 m2 s4 paquete-numero top-50 center">
          <a href="pyme-2.php">
            <p class="nomargin top-10">paquete</p>
            <p class="nomargin top-10"><span>2</span></p>
          </a>
        </div>
        <div class="col l2 m2 s4 paquete-numero top-50 center">
          <a href="pyme-3.php">
            <p class="nomargin top-10">paquete</p>
            <p class="nomargin top-10">3</p>
          </a>
        </div>
      </div>
      <div class="col l10 offset-l1 m12 s12 top-50">
        <div class="col l12 m12 s12 nomargin">
          <div class="col l4 m4 s12 startup-paquete">
            <div class="col l3 s12">
              <div class="col l12 s12 center startup-img">
                <img src="images/paquetes/Marca.png" title="Marca" alt="Legal Nest">
              </div>
            </div>
            <div class="col l9 s12">
              <div class="col l12 s12 center-middle">
                <p><strong>marca</strong></p>
                <p>Estudiamos las probabilidades
                  de éxito y las clases correspondientes
                  para después llevar a cabo el
                  registro de tu marca.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12">
            <div class="col l3 s12 startup-img center">
              <img src="images/paquetes/nda.png" title="NDA" alt="Legal Nest">
            </div>
            <div class="col l9 s12">
              <div class="col l12 s12 center-middle">
                <p><strong>NDA</strong></p>
                <p>
                  Formato de acuerdo de
                  confidencialidad para proteger
                  tu información.
                </p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12">
            <div class="col l3 s12 center startup-img">
              <img src="images/paquetes/contrato-a.png" title="NDA" alt="Legal Nest">
            </div>
            <div class="col l9 s12">
              <div class="col l12 s12 center-middle">
                <p><strong>CONTRATO A y B</strong></p>
                <p>
                  Dependiendo de tus necesidades
                  generamos contratos que puedas
                  usar en el día a día de tu empresa.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col l12 s12">
          <div class="col l4 m4 s12 startup-paquete">
            <div class="col l3 s12 center startup-img">
              <img src="images/paquetes/aviso.png" title="Aviso de privacidad" alt="Legal Nest">
            </div>
            <div class="col l9 s12">
              <div class="col l12 s12 center-middle">
                <p><strong>aviso de privacidad</strong></p>
                <p>Este documento sirve para documentar físicamente todas las acciones de una empresa.</p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 startup-paquete">
            <div class="col l3 s12 center startup-img">
              <img src="images/pyme/digital.png" title="Digitalización Documentos" alt="Legal Nest">
            </div>
            <div class="col l9 s12">
              <div class="col l12 s12 center-middle">
                <p><strong>digitalización documentos</strong></p>
                <p>Administración virtual y acceso de tus documentos.</p>
              </div>
            </div>
          </div>
          <div class="col l4 m4 s12 startup-paquete">
            <div class="col l3 s12 center startup-img">
              <img src="images/paquetes/legal.png" title="Asesoría Legal" alt="Legal Nest">
            </div>
            <div class="col l9 s12">
              <div class="col l12 s12 center-middle">
                <p><strong>asesoría legal</strong></p>
                <p>Siempre estamos disponibles para resolver cualquier duda que tengas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col l12 s12">
        <div class="col l2 offset-l5 m4 offset-m4 s10 offset-s1">
          <a href="contacto.php"><p class="contacto-paquete">Contacto</p></a>
        </div>
      </div>
      <div class="col l12 s12">
        <div class="boton-volver">
          <a href="pyme-1.php"><img src="images/paquetes/volver.png" title="Botón Volver" alt="Legal Nest"></a>
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
