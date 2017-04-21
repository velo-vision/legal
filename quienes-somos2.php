
<?php
  require("functions.php");
  get_header();
?>
<div class="animsition"
  data-animsition-in-class="fade-in-left-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-left-sm"
  data-animsition-out-duration="800">

<div class="row nomargin bg-quienes">
  <div class="valign-wrapper">
    <div class="col l12 s12 valign">
      <div class="col l6 m6 offset-m3 s12 center imagen-somos">
        <img src="images/recursos/quienes-somos2.png" title="Quiénes Somos" alt="Legal Nest">
      </div>
      <div class="col l6 m10 offset-m1 s12 top-100">
        <div class="col l2 m4 s3 top-50 imagen-somos">
          <div class="col l12 m6 offset-m3 s12">
            <img src="images/recursos/2.png" title="Quiénos Somos uno" alt="Legal Nest">
          </div>
        </div>
        <div class="col l10 m8 s9">
          <div class="col l12 s12 quienes-3">
            <p class="nomargin"><strong>la conultoría</strong></p>
            <p class="nomargin"><strong>legal</strong> debería</p>
          </div>
          <div class="col l12 s12 quienes-4">
            <p class="nomargin">de ser una</p>
            <p class="nomargin"><strong>solución</strong>,</p>
          </div>
          <div class="col l12 s12 quienes-5">
            <p class="nomargin"><strong>no</strong> un problema</p>
          </div>
        </div>
      </div>
      <div class="col l12 s12 top-30">
        <div class="col l4 offset-l4 s12 center">
          <a href="quienes-somos.php" class="animsition-link">
            <img style="margin:0 10px" width="50px" src="images/recursos/prev.png" alt="Legal Nest">
          </a>
          <a href="quienes-somos3.php" class="animsition-link">
            <img style="margin:0 10px" width="50px" src="images/recursos/next.png" alt="Legal Nest">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<?php
  get_footer();
?>

<script>
  window.onload=function(){
    setTimeout(function() {
      console.log("lupita")
      location.href="quienes-somos3.php";
    },7000);
  }
</script>

<script>
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in-left-sm',
    outClass: 'fade-out-left-sm',
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
