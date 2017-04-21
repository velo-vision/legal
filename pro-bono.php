

<div class="bg-probono">

  <?php
  	include("head-2.php");
  ?>

<div class="animsition"
  data-animsition-in-class="fade-in-up-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-up-sm">

<div class="row nomargin">
  <div class="valign-wrapper content-pro">
    <div class="col l12 s12 nomargin valign">
      <div class="col l12 s12 nomargin center">
        <a href="#!"><img class="logo-net" src="images/recursos/logo-pro.png" title="Logo header" alt="Legal Nest"></a>
      </div>
      <div class="col l8 offset-l2 m12 s12 top-50 center pro-bono">
        <p>
          Nuestra misión es mover a México; <strong>impulsar a los pequeños, medianos y grandes emprendedores,
          también incluye asociaciones civiles. Si tienes una asociación civil y buscas servicios legales
          contáctanos,</strong> <span>queremos ser parte de un mejor país y te ofrecemos nuestros servicios sin costo.</span>
        </p>
        <p><b>¡Llámanos y te ayudamos!</b></p>
      </div>
      <div class="col l12 s12  mano-pro-bono nomargin">
        <img src="images/recursos/mano.png" title="Pro bono" alt="Legal Nest">
      </div>
      <div class="col l12 s12 iconos-bono center" style="display: none;">
        <div class="col l2 offset-l1 s2 offset-s1 bimbo">
          <img src="images/recursos/velo.png" title="Velosoft" alt="Legal Nest">
        </div>
        <div class="col l2 s2 bimbo">
          <img src="images/recursos/bimbo.png" title="Bimbo" alt="Legal Nest">
        </div>
        <div class="col l2 s2 unam">
          <img src="images/recursos/dif.png" title="DIF" alt="Legal Nest">
        </div>
        <div class="col l2 s2 unam">
          <img src="images/recursos/unam.png" title="UNAM" alt="Legal Nest">
        </div>
        <div class="col l2 s2 bimbo">
          <img src="images/recursos/bancomer.png" title="BANCOMER" alt="Legal Nest">
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<?php
  include("footer-2.php");
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
});</script>
