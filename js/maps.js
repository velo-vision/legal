var styles = [
  {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#e9e9e9"
          },
          {
              "lightness": 17
          }
      ]
  },
  {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#f5f5f5"
          },
          {
              "lightness": 20
          }
      ]
  },
  {
      "featureType": "road.highway",
      "elementType": "geometry.fill",
      "stylers": [
          {
              "color": "#ffffff"
          },
          {
              "lightness": 17
          }
      ]
  },
  {
      "featureType": "road.highway",
      "elementType": "geometry.stroke",
      "stylers": [
          {
              "color": "#ffffff"
          },
          {
              "lightness": 29
          },
          {
              "weight": 0.2
          }
      ]
  },
  {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#ffffff"
          },
          {
              "lightness": 18
          }
      ]
  },
  {
      "featureType": "road.local",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#ffffff"
          },
          {
              "lightness": 16
          }
      ]
  },
  {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#f5f5f5"
          },
          {
              "lightness": 21
          }
      ]
  },
  {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#dedede"
          },
          {
              "lightness": 21
          }
      ]
  },
  {
      "elementType": "labels.text.stroke",
      "stylers": [
          {
              "visibility": "on"
          },
          {
              "color": "#f2e3341"
          },
          {
              "lightness": 16
          }
      ]
  },
  {
      "elementType": "labels.text.fill",
      "stylers": [
          {
              "saturation": 36
          },
          {
              "color": "#2e3341"
          },
          {
              "lightness": 40
          }
      ]
  },
  {
      "elementType": "labels.icon",
      "stylers": [
          {
              "visibility": "off"
          }
      ]
  },
  {
      "featureType": "transit",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#f2f2f2"
          },
          {
              "lightness": 19
          }
      ]
  },
  {
      "featureType": "administrative",
      "elementType": "geometry.fill",
      "stylers": [
          {
              "color": "#2e3341"
          },
          {
              "lightness": 20
          }
      ]
  },
  {
      "featureType": "administrative",
      "elementType": "geometry.stroke",
      "stylers": [
          {
              "color": "#2e3341"
          },
          {
              "lightness": 17
          },
          {
              "weight": 1.2
          }
      ]
  }
]
$(document).ready(function() {

  function initialize() {


    var gmarkers = [];
    var map = null;
    var infowindow = null;


      var mapOptions = {
        center: new google.maps.LatLng(19.403840, -99.241644),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        zoomControl: true,
        scaleControl: false,
        styles: styles,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        draggable: false
      };


      map = new google.maps.Map(document.getElementById("mack-map"), mapOptions);

      google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
      });

      var locations = [
        ['Legal Nest', 19.403840, -99.241644]
       ];

      // infowindow = new google.maps.InfoWindow({
      //   size: new google.maps.Size(150,50)
      // });

      function setMarkers(locations) {
        for (var i = 0; i < locations.length; i++) {
          var location = locations[i];
          var myLatLng = new google.maps.LatLng(location[1], location[2]);
          var marker = new google.maps.Marker({
              position: myLatLng,
              animation: google.maps.Animation.DROP,
              map: map,
              title: location[0],
              icon: "images/recursos/map-pin.png",
              title: 'Legal Nest'
          });

          // Standard markers - if not using infobox
          google.maps.event.addListener(marker, "click", function () {
          map.setCenter(marker.getPosition());
          infowindow.setContent(this.html);
          infowindow.open(map, this);
          infoWindow.setContent('Aqui va la calle.');
          });
          gmarkers.push(marker);
        }
      }


      // Add the markers
      setMarkers(locations);

  }

  // add window listener for GMaps
  google.maps.event.addDomListener(window, 'load', initialize);

});
