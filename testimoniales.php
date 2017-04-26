

<div class="bg-testimoniales">

<?php
  require("functions.php");
  get_header();
?>
<link type="text/css" rel="stylesheet" href="css/slick.css" />
<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="css/slick-style.css">

<style>
@media (max-width: 992px){
  .center {
    margin-right: 0% !important;
    margin-left: 0% !important;
  }
  .slick-next {
    right: -15px;
  }
  .slick-prev {
    left: 0px;
  }
}
@media only screen and (min-width:992px) and (max-width:1200px){
  .valign-wrapper {
    height: auto;
  }
}

</style>


<div class="animsition"
  data-animsition-in-class="fade-in-up-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-up-sm">

<div class="row nomargin bg-quienes4">
  <div class="valign-wrapper">
    <div class="col l12 m12 s12 valign">
      <div class="col l10 offset-l1 m12 s12">
        <div class="slider center">
          <div>
            <div class="col l6 m6 s12">
              <div class="col l12 s12 testimoniales">
                <p class="nomargin">
                  Testimoniales
                </p>
              </div>
              <div class="col l12 s12 offset top-50 img-testimonial">
                <img src="images/recursos/velosoft.png" title="Velosoft" alt="Legal Nest">
              </div>
            </div>
            <div class="col l6 m6 s12 testimonio">
              <p>
                <strong>Velosoft S.A. de C.V.</strong>
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.
              </p>
            </div>
          </div>
          <div>
            <div class="col l6 m6 s12">
              <div class="col l12 s12 testimoniales">
                <p class="nomargin">
                  Testimoniales
                </p>
              </div>
              <div class="col l12 s12 offset top-50 img-testimonial">
                <img src="images/recursos/velosoft.png" title="Velosoft" alt="Legal Nest">
              </div>
            </div>
            <div class="col l6 m6 s12 testimonio">
              <p>
                <strong>Velosoft S.A. de C.V.</strong>
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.
              </p>
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

<script type="text/javascript" src="js/slick.js"></script>

</div>

<script>

$('.center').slick({
centerMode: true,
autoplay:true,
centerPadding: '0px',
slidesToShow: 1,
responsive: [
{
  breakpoint: 992,
  settings: {
    arrows: true,
    centerMode: true,
    centerPadding: '0px',
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
