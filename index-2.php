<html lang="en"><head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<style>
	body {
		background:#2e3341;
		background-size:cover;
	}
  #particles-js {
  background: #2e3341;
  height: 100vh;
  position: absolute;
  width: 99%;
  z-index: 1000;
  }
  .center-div {
  position: absolute;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  z-index: 10;
  height: 100vh;
  width: 100%;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  }

  .texto {
  font-family: 'poppins';
  font-size: 34px;
  font-weight: 100;
  color: #fff;
  text-align: center;
  }
  .texto span {
  font-weight: 400;
  }

  .small {
  margin-top: 20px;
  font-size: 20px;
  }

  a {
  text-decoration: none;
  }
  .inovacion{
    color: white;
    font-family: 'Montserrat', sans-serif;
    font-size: 2em;
    margin-top: 50px;
  }
  .boton-futuro{
    border:1px solid #a8a89f;
    border-radius: 50px;
    color: #a8a89f;
    font-family: 'Roboto', sans-serif;
    font-size: .65em;
    font-weight: 500;
    margin-top: 100px;
    padding: 10px 0 !important;
  }
</style></head>

<body>
  <div id="particles-js" cz-shortcut-listen="true" class="">
    <div class="center-div">
        <!-- texto central -->
        <div class="texto">
            <!-- logo -->
            <div class="logo">
                <a href="#!" title="Legal Nest">
                    <img src="images/recursos/legal-nest.png" style="width:400px;margin-bottom: 20px;">
                </a>
            </div>
            <!-- fim logo -->
            <p class="inovacion">
              INOVACIÓN
            </p>
            <a href="quienes-somos.php"><p class="boton-futuro">
              Descubre el futuro de <br>
              los servicios legales
            </p></a>
        </div>
        <!-- fim texto central -->
    </div>
  </div>

	<script src="http://falconmasters.com/demos/particulas/particles.min.js"></script>
	<!-- <script src="http://falconmasters.com/demos/particulas/particulas.js"></script> -->
  <script>
  particlesJS('particles-js', {
   particles: {
     color: '#a8a89f',
     shape: 'circle', // "circle", "edge" or "triangle"
     opacity: .9,
     size: 4,
     size_random: true,
     nb: 250,
     line_linked: {
       enable_auto: true,
       distance: 120,
       color: '#a8a89f',
       opacity: 1,
       width: 1,
       condensed_mode: {
         enable: false,
         rotateX: 600,
         rotateY: 600
       }
     },
     anim: {
       enable: true,
       speed: 5
     }
   },
   interactivity: {
     enable: true,
     mouse: {
       distance: 50
     },
     detect_on: 'canvas', // "canvas" or "window"
     mode: 'grab',
     line_linked: {
       opacity: .5
     },
     events: {
       onclick: {
         enable: true,
         mode: 'push', // "push" or "remove"
         nb: 50
       }
     }
   },
   /* Retina Display Support */
   retina_detect: true
 });
  </script>

</body></html>
