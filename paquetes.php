


<div class="bg-paquetes">

<?php
  require("functions.php");
  get_header();
?>

<div class="animsition"
  data-animsition-in-class="fade-in-up-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-up-sm">

<div class="row nomargin content-paquetes">
    <div class="col l12 m12 s12">
      <div class="col l3 m12 s12">
        <div class="col l10 offset-l1 m6 offset-m3 middle-paquetes center-middle">
          <div class="col l12 s12 nomargin startup">
            <p class="nomargin">paquetes</p>
            <p class="nomargin"><strong>startup</strong></p>
          </div>
          <div class="col l12 s12 nomargin avion-startup">
            <img class="top-50" src="images/recursos/startup.png" title="Startup" alt="Legal Nest">
            <a href="#"><p class="boton-startup">Conoce todos <br> nuestros servicios</p></a>
          </div>
        </div>
      </div>
      <div class="col l9 m12 s12">
        <div class="col l3 m6 paquetes">
          <div class="col l12 s12 nomargin">
            <div class="col l4 m3 s4 center">
              <p><strong>paquete</strong></p>
              <a href="paquete-1.php"><img width="100%" src="images/recursos/paquete-1.png" alt=""></a>
            </div>
            <div class="col l7 offset-l1 m8 offset-m1 s6 offset-s2 top-100">
              <div class="col l12 s12 nomargin">
                <p class="nomargin">Acta</p>
                <p class="nomargin">Constitutiva</p>
                <p>RFC/FIEL/CIEC</p>
                <p>Marca</p>
                <p>Asesoría Legal</p>
                <a href="paquete-1.php">
                  <p class="nomargin"><span>VER DETALLE</span></p>
                  <p class="nomargin"><span>DE PAQUETE</span></p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col l3 m6 paquetes">
          <div class="col l12 s12 nomargin">
            <div class="col l4 m3 s4 center">
              <p><strong>paquete</strong></p>
              <a href="paquete-2.php"><img width="100%" src="images/recursos/paquete-2.png" alt=""></a>
            </div>
            <div class="col l7 offset-l1 m8 offset-m1 s6 offset-s2 top-100">
              <div class="col l12 s12 nomargin">
                <p class="nomargin">Acta</p>
                <p class="nomargin">Constitutiva</p>
                <p>RFC/FIEL/CIEC</p>
                <p>Marca</p>
                <p>NDA</p>
                <p>Contrato A</p>
                <p>Asesoría Legal</p>
                <a href="paquete-2.php">
                  <p class="nomargin"><span>VER DETALLE</span></p>
                  <p class="nomargin"><span>DE PAQUETE</span></p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col l3 m6 paquetes">
          <div class="col l12 s12 nomargin">
            <div class="col l4 m3 s3 center">
              <p><strong>paquete</strong></p>
              <a href="paquete-3.php"><img width="100%" src="images/recursos/paquete-3.png" alt=""></a>
            </div>
            <div class="col l7 offset-l1 m8 offset-m1 s6 offset-s2 top-100">
              <div class="col l12 s12 nomargin">
                <p class="nomargin">Acta</p>
                <p class="nomargin">Constitutiva</p>
                <p>RFC/FIEL/CIEC</p>
                <p>NDA</p>
                <p>Marca</p>
                <p>Contrato A</p>
                <p>Contrato B</p>
                <p>Apertura Libros</p>
                <p>Títulos</p>
                <p>Digitalización Documentos</p>
                <p>Asesoría Legal</p>
                <a href="paquete-3.php">
                  <p class="nomargin"><span>VER DETALLE</span></p>
                  <p class="nomargin"><span>DE PAQUETE</span></p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col l3 m6 paquetes">
          <div class="col l12 s12 nomargin">
            <div class="col l4 m3 s3 center paquetes">
              <p><strong>paquetes</strong></p>
              <a href="paquete-4.php"><img width="100%" src="images/recursos/paquete-4.png" alt=""></a>
            </div>
            <div class="col l7 offset-l1 m8 offset-m1 s6 offset-s2 top-100">
              <div class="col l12 s12 nomargin">
                <p class="nomargin">Acta</p>
                <p class="nomargin">Constitutiva</p>
                <p>RFC/FIEL/CIEC</p>
                <p>Marca</p>
                <p>NDA</p>
                <p>Contrato A</p>
                <p>Contrato B</p>
                <p>Contrato C</p>
                <p>Apertura de Libros</p>
                <p>Títulos</p>
                <p>Aviso de Privacidad</p>
                <p>Digitalización Documentos</p>
                <p>Asesoría Legal</p>
                <a href="paquete-4.php">
                  <p class="nomargin"><span>VER DETALLE</span></p>
                  <p class="nomargin"><span>DE PAQUETE</span></p>
                </a>
              </div>
            </div>
          </div>
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
