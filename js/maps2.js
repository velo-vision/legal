<?php
// [map]
function shortcode_map($atts, $content=null, $code) {
  global $flatsome_opt;

  $mapsrandomid = rand();
	extract(shortcode_atts(array(
		'lat'  => '',
    'long' => '',
    'height' => '400px',
		'color' => '#58728a',
    'zoom' => '17',
    'controls' => 'false',
    'pan' => 'false',
    'api' => 'AIzaSyAbzW78bsnZt4VCyJlrr7xr_5TqFe4vd7E'
	), $atts));

  if($api) $api = '&key='.$api;

	ob_start();
	?>

  <script type="text/javascript">
  var map;
  var styles = [
  {
    "stylers": [
    { "hue": "#33b498" },
    { "saturation": -20 }
    ]},
    {
      "featureType": "landscape",
      "stylers": [
      {
        "saturation": -10
      },
      {
        "lightness": 65
      },
      {
        "visibility": "on"
      }
      ]
    },
    {
      "featureType": "poi",
      "stylers": [
      {
        "saturation": -100
      },
      {
        "lightness": 51
      },
      {
        "visibility": "simplified"
      }
      ]
    },
    {
      "featureType": "road.highway",
      "stylers": [

      {
        "saturation": 10
      },
      {
        "visibility": "simplified"
      }
      ]
    },
    {
      "featureType": "road.arterial",
      "stylers": [
      {
        "saturation": -1
      },
      {
        "lightness": 30
      },
      {
        "visibility": "on"
      }
      ]
    },
    {
      "featureType": "road.local",
      "stylers": [
      {
        "saturation": 10
      },
      {
        "lightness": 40
      },
      {
        "visibility": "on"
      }
      ]
    },
    {
      "featureType": "transit",
      "stylers": [
      {
        "saturation": -100
      },
      {
        "visibility": "simplified"
      }
      ]
    },
    {
      "featureType": "administrative.province",
      "stylers": [
      {
        "visibility": "off"
      }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels",
      "stylers": [
      {
        "visibility": "on"
      },
      {
        "lightness": -25
      },
      {
        "saturation": -100
      }
      ]
    },

    ];

  function cambiaCentro(num){
    //Verificar las coordenadas de los centros
    switch (num){
      case 1:
        cambiar(19.635916, -99.114013);
        break;
      case 2:
        cambiar(19.407972, -99.172533);
        break
      case 3:
        cambiar(19.344268, -99.159847);
        break;
      case 4:
        cambiar(19.400834, -98.986824);
        break;
      case 5:
        cambiar(19.497831, -99.238007)
        break;
      default:
        cambiar(19.635916, -99.114013);
        break;
    }
  }

  function initMap() {
    // Create a map object and specify the DOM element for display.
    var styledMap = new google.maps.StyledMapType(styles,{name: "Elemental"});
    map = new google.maps.Map(document.getElementById('map-canvas'), {
      center: {lat: 19.635916, lng: -99.114013},
      scrollwheel: false,
      zoom: 17,
      mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
      }
    });

    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');

    var image = 'http://localhost/elemental/wp-content/themes/elemental-child/img/mapa.png';

    var beachMarker = new google.maps.Marker({
      position: {lat: 19.635916, lng: -99.114013},
      map: map,
      icon: image
    });

    var contentString = '<div class="centros">'+
    '<p class="titulo">Coacalco</p>'+
    '<p class="textoDescrip">'+
    'Direcci&oacute;n:<br>'+
    'Local 17 Mega Comercial Coacalco,<br>'+
    'Vía José López Portillo, No. 37, <br>'+
    'Coacalco, Edo. Méx.<br>'+
    '<span style="color:#33b498; font-weight:bold;">Tel. 5295-4030</span>'+
    '</p>'+
    '<p><a target="_blank" jstcache="46" href="https://maps.google.com/maps?ll=19.635916,-99.114013&amp;z=16&amp;t=m&amp;hl=en&amp;gl=ES&amp;mapclient=embed&amp;cid=249835110570114282&amp;q=https://waze.to/lr/h9g3qmykk5" jsaction="mouseup:placeCard.largerMap">Abrir Mapa Completo</a></p>'+
    '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var beachMarker1 = new google.maps.Marker({
      position: {lat: 19.407972, lng: -99.172533},
      map: map,
      icon: image
    });

    var contentString1 = '<div class="centros">'+
    '<p class="titulo">Condesa</p>'+
    '<p class="textoDescrip">'+
    'Direcci&oacute;n:<br>'+
    'Av. Nuevo León No. 163, <br>'+
    'Col. Condesa, CDMX.<br>'+
    '<span style="color:#33b498; font-weight:bold;">Tel. 4333-8074</span>'+
    '</p>'+
    '<p><a target="_blank" jstcache="46" href="https://maps.google.com/maps?ll=19.407972,-99.172533&amp;z=16&amp;t=m&amp;hl=en&amp;gl=ES&amp;mapclient=embed&amp;cid=4872431518902337269" jsaction="mouseup:placeCard.largerMap">Abrir Mapa Completo</a></p>'+
    '</div>';

    var infowindow1 = new google.maps.InfoWindow({
      content: contentString1
    });

    var beachMarker2 = new google.maps.Marker({
      position: {lat: 19.344268,  lng: -99.159847},
      map: map,
      icon: image
    });

    var contentString2 = '<div class="centros">'+
    '<p class="titulo">Coyoacán</p>'+
    '<p class="textoDescrip">'+
    'Direcci&oacute;n:<br>'+
    'División del Norte No. 3651,<br>'+
    'Coyoacán, CDMX.<br>'+
    '<span style="color:#33b498; font-weight:bold;">Tel. 9627-8900</span>'+
    '</p>'+
    '<p><a target="_blank" jstcache="46" href="https://maps.google.com/maps?ll=19.344268,-99.159847&amp;z=16&amp;t=m&amp;hl=en&amp;gl=ES&amp;mapclient=embed&amp;cid=3266973025893887968" jsaction="mouseup:placeCard.largerMap">Abrir Mapa Completo</a></p>'+
    '</div>';

    var infowindow2 = new google.maps.InfoWindow({
      content: contentString2
    });


    var beachMarker3 = new google.maps.Marker({
      position: {lat: 19.400834, lng: -98.986824},
      map: map,
      icon: image
    });

    var contentString3 = '<div class="centros">'+
    '<p class="titulo">Neza</p>'+
    '<p class="textoDescrip">'+
    'Direcci&oacute;n:<br>'+
    'Local B-3 Plaza'+
    'Circuito Rey Neza No.1<br>'+
    'Col. Benito Juárez'+
    'Nezahualcóyotl, Edo. Méx.<br>'+
    '<span style="color:#33b498; font-weight:bold;">Tel. 6394-0424</span>'+
    '</p>'+
    '<p><a target="_blank" jstcache="46" href="https://maps.google.com/maps?ll=19.400834,-98.986824&amp;z=16&amp;t=m&amp;hl=en&amp;gl=ES&amp;mapclient=embed&amp;cid=3266973025893887968" jsaction="mouseup:placeCard.largerMap">Abrir Mapa Completo</a></p>'+
    '</div>';

    var infowindow3 = new google.maps.InfoWindow({
      content: contentString3
    });

    var beachMarker4 = new google.maps.Marker({
      position: {lat: 19.497831, lng: -99.238007},
      map: map,
      icon: image
    });

    var contentString4 = '<div class="centros">'+
    '<p class="titulo">Satélite</p>'+
    '<p class="textoDescrip">'+
    'Direcci&oacute;n:<br>'+
    'Local 15 Mega Comercial Las Torres,<br>'+
    'Manuel Ávila Camacho, No. 3228,<br>'+
    'Col. Boulevares, Naucalpan de Juárez, Edo. Méx.<br>'+
    '<span style="color:#33b498; font-weight:bold;">Tel. 4168-1913</span>'+
    '</p>'+
    '<p><a target="_blank" jstcache="46" href="https://maps.google.com/maps?ll=19.497831,-99.238007&amp;z=16&amp;t=m&amp;hl=en&amp;gl=ES&amp;mapclient=embed&amp;cid=14728639265138416772" jsaction="mouseup:placeCard.largerMap">Abrir Mapa Completo</a></p>'+
    '</div>';

    var infowindow4 = new google.maps.InfoWindow({
      content: contentString4
    });

    infowindow1.open(map,beachMarker1);
    infowindow2.open(map,beachMarker2);
    infowindow3.open(map,beachMarker3);
    infowindow4.open(map,beachMarker4);
    infowindow.open(map,beachMarker);
    window.onload = function() {
      cambiaCentro(1);
    };
}



  function cambiar(newLat,newLng) {
    map.setCenter({
      lat : newLat,
      lng : newLng
    });
    map.panBy(0, -130);
  }
</script>

<script async defer type="text/javascript" src="http://maps.googleapis.com/maps/api/js?<?php echo $api;?>&amp;v=3&callback=initMap"></script>


	<?php
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}

add_shortcode('map', 'shortcode_map');
