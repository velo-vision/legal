<div class="bg-legal">

<?php
  require("functions.php");
  get_header();
?>

<link type="text/css" rel="stylesheet" href="css/slick.css" />
<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="css/slick-style.css">

<div class="animsition"
  data-animsition-in-class="fade-in-up-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-up-sm">

<div class="row nomargin bg-quienes">

    <div class="col l12 s12 ">
      <div class="col l12 s12 porque">
        <p class="nomargin">
          ¿Por qué
        </p>
        <p class="nomargin">
          <strong>LegalNest?</strong>
        </p>
      </div>
      <div class="col s10 offset-l1 content-slide">
        <div class="slider center">
          <div>
            <h3>
              <img style="width:100px!important;margin:20px auto;" src="images/legal/6.png" alt="">
            </h3>
              <p class="nomargin top-30">
                Nuestros precios están al menos
              </p>
              <p class="nomargin">
                un 30% por debajo de los
              </p>
              <p class="nomargin">
                 precios del mercado.
              </p>
          </div>
          <div>
            <h3>
              <img style="width:100px!important;margin:20px auto;" src="images/legal/2.png" alt="">
            </h3>
              <p class="nomargin top-30">
                Te ofrecemos herramientas
              </p>
              <p class="nomargin">
                tecnológicas para un servicio más
              </p>
              <p class="nomargin">
                eficiente. y líneas de comunicación
              </p>
              <p class="nomargin">
                directa con nosotros
              </p>
          </div>
          <div>
            <h3>
              <img style="width:100px!important;margin:20px auto;" src="images/legal/3.png" alt="">
            </h3>
              <p class="nomargin top-30">
                Buscamos ser tu consejero,
              </p>
              <p class="nomargin">
                generando una relación
              </p>
              <p class="nomargin">
                 estable y de confianza.
              </p>
          </div>
          <!-- <div>
            <h3>
              <img style="width:100px!important;margin:20px auto;" src="images/legal/3.png" alt="">
            </h3>
              <p class="nomargin top-30">
                Costos Claros Para
              </p>
              <p class="nomargin">
                Una Relación Larga
              </p>
          </div> -->
          <!-- <div>
            <h3>
            <img style="width:100px!important;margin:20px auto;" src="images/legal/3.png" alt="">
            </h3>
              <p class="nomargin top-30">
                Cobramos por Ejecución,
              </p>
              <p class="nomargin">
                No por Hora
              </p>
          </div> -->
          <!-- <div>
            <h3>
              <img style="width:100px!important;margin:20px auto;" src="images/legal/4.png" alt="">
            </h3>
              <p class="nomargin top-30">
                Usamos herramientas y
              </p>
              <p class="nomargin">
                tecnología que nos permiten
              </p>
              <p class="nomargin">
                 mantener una línea de
              </p>
              <p class="nomargin">
                 comunicación directa y
              </p>
              <p class="nomargin">
                constante contigo.
              </p>
          </div> -->
          <div>
            <h3>
              <img style="width:100px!important;margin:20px auto;" src="images/legal/5.png" alt="">
            </h3>
              <p class="nomargin top-30">
                El 90% de las empresas nuevas
              </p>
              <p class="nomargin">
                deciden no contratar servicios
              </p>
              <p class="nomargin">
                 legales.
              </p>
          </div>
          <div>
            <h3>
              <img style="width:100px!important;margin:20px auto;" src="images/legal/1.png" alt="">
            </h3>
              <p class="nomargin top-30">
                El 75% de las empresas nuevas
              </p>
              <p class="nomargin">
                cierran al segundo año
              </p>
              <p class="nomargin">
                 de operación.
              </p>
          </div>
        </div>
      </div>
    </div>

</div>

</div>


<?php
  get_footer();
?>
<script type="text/javascript" src="js/slick.js"></script>
<!-- <script type="text/javascript" src="http://kenwheeler.github.io/slick/js/prism.js"></script> -->

</div>

  <script>

$('.center').slick({
centerMode: true,
autoplay:true,
autoplaySpeed:6000,
centerPadding: '50px',
slidesToShow: 3,
responsive: [
  {
    breakpoint: 1100,
    settings: {
      arrows: true,
      centerMode: true,
      centerPadding: '35px',
      slidesToShow: 3
    }
  },
  {
    breakpoint: 992,
    settings: {
      arrows: true,
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 1
    }
  },
  {
    breakpoint: 768,
    settings: {
      arrows: true,
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows: true,
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 1
    }
  }
]
});
  </script>

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
