<section class="map container relative mx-auto">
  <h2 class="h2 h2--right m-8 sm:m-0 sm:my-8 mr-8 absolute pin-t float-right">On the map</h2>

  <div id="map"></div>
  @include('_partials/contact.map.popup')
  <style>
    /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
    #map {
      height: 640px;
    }
    #map .gmnoprint { display: none !important; }
    #map  button { display: none; }

    #map .gmnoprint button { display: block !important; }
  </style>
  <script>
    function initMap() {

      // var mapCenter = {lat: 50.937531, lng: 9.189981999999986}; 
      var mapCenter = new google.maps.LatLng(50.937531, 9.189981999999986)
      var mapZoom = 4;
      var zoomedInLevel = 8;

      var map = new google.maps.Map(document.getElementById('map'), {
          zoom: mapZoom,
          center: mapCenter,
          // draggable: false,
          styles: [
              {
                  "featureType": "all",
                  "elementType": "labels.text.fill",
                  "stylers": [
                      {
                          "saturation": 36
                      },
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 40
                      }
                  ]
              },
              {
                  "featureType": "all",
                  "elementType": "labels.text.stroke",
                  "stylers": [
                      {
                          "visibility": "off"
                      },
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 16
                      }
                  ]
              },
              {
                  "featureType": "all",
                  "elementType": "labels.icon",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "administrative",
                  "elementType": "geometry.fill",
                  "stylers": [
                      {
                          "color": "#000000"
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
                          "color": "#000000"
                      },
                      {
                          "lightness": 17
                      },
                      {
                          "weight": 1.2
                      },
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "landscape",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#17171b"
                      },
                      {
                          "lightness": "0"
                      }
                  ]
              },
              {
                  "featureType": "poi",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 21
                      },
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "road.highway",
                  "elementType": "geometry.fill",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 17
                      },
                      {
                          "gamma": "1"
                      }
                  ]
              },
              {
                  "featureType": "road.highway",
                  "elementType": "geometry.stroke",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 29
                      },
                      {
                          "weight": 0.2
                      },
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "road.arterial",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 18
                      },
                      {
                          "gamma": "1"
                      }
                  ]
              },
              {
                  "featureType": "road.local",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 16
                      },
                      {
                          "gamma": "1"
                      }
                  ]
              },
              {
                  "featureType": "transit",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 19
                      },
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "water",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 17
                      }
                  ]
              }
          ]
      });

      // the smooth zoom function
      function smoothZoom (map, zoomTo, step) {
        var zoomListener;
        var nextZoom;
        var currentZoom = map.getZoom();
        var step;        

        if (currentZoom > zoomTo) {
          step = currentZoom - 1;
        } else if (currentZoom < zoomTo) {
          step = currentZoom + 1;
        } else {
          return;
        }

        zoomListener = google.maps.event.addListener(map, 'zoom_changed', function() {
          google.maps.event.removeListener(zoomListener);
          smoothZoom(map, zoomTo, step);
        });

        setTimeout(function(){map.setZoom(step)}, 100);
      }  

      function zoomIn(map, marker) {
        setTimeout(function() {
          map.panTo(marker.getPosition());
        }, 80);
        smoothZoom(map, zoomedInLevel);

        var calcTimeout = 500 + (Math.abs(map.getZoom() - zoomedInLevel) * 200);

        var setMarkerTimeout = (map.getZoom() === zoomedInLevel) ? 500 : calcTimeout;

        setTimeout(function() {
          popup.setMarker(marker);
        }, setMarkerTimeout);
      }

      function zoomOut() {
        popup.setMarker(null);
        smoothZoom(map, mapZoom);

        setTimeout(function(){
          map.panTo(mapCenter);
        }, 500);
      }

      google.maps.event.addListener(map, 'drag', function() {
        popup.setMarker(null);
      });

      google.maps.event.addListener(map, 'zoom_changed', function() {
        popup.setMarker(null);
      });

      google.maps.event.addListener(map, 'dbclick', function() {
        popup.setMarker(null);
      });

      var Popup = definePopupClass();
      popup = new Popup();
      popup.onClickClose = function() {
        zoomOut();
      }
      popup.setMap(map);

      var image = 'https://i.imgur.com/HPFQcWL.png';
      
      var londonmarker = new google.maps.Marker({
        position: {lat: 51.5175706, lng: -0.1806992},
        map: map,
        icon: image,
        metadata: {
          name: 'London Headquarters',
          addressLine1: '2 Eastbourne Terrace',
          addressLine2: '',
          city: 'London',
          country: 'England',
          postcode: 'W2 6LG',
          phone: '',
        }
      });
      londonmarker.setDraggable(false);
      londonmarker.addListener('click', function() {
        zoomIn(map, londonmarker);
      });

      var manmarker = new google.maps.Marker({
        position: {lat: 53.4807593, lng: -2.2426305000000184},
        map: map,
        icon: image,
        metadata: {
          name: 'Manchester',
          addressLine1: 'No. 1 Spinning Fields',
          addressLine2: 'Quay St',
          city: 'London',
          country: 'England',
          postcode: 'M3 3JE',
          phone: ''
        }
      });
      manmarker.setDraggable(false);
      manmarker.addListener('click', function() {
        zoomIn(map, manmarker);
      });

      var malmarker = new google.maps.Marker({
        position: {lat: 35.937496, lng: 14.375415999999973},
        map: map,
        icon: image,
        metadata: {
          name: 'Malta',
          addressLine1: '119, Triq Tas-Sliema',
          addressLine2: '',
          city: 'Gzira, GZR1635',
          country: 'Malta',
          postcode: '',
          phone: ''
        }
      });
      malmarker.setDraggable(false);
      malmarker.addListener('click', function() {
        zoomIn(map, malmarker);
      });

      var oslomarker = new google.maps.Marker({
        position: {lat: 59.9138688, lng: 10.752245399999993},
        map: map,
        icon: image,
        metadata: {
          name: 'Oslo',
          addressLine1: 'Rådhusgata 23',
          addressLine2: '0158',
          city: 'Oslo',
          country: 'Norway',
          postcode: '',
          phone: '',
        }
      });
      oslomarker.setDraggable(false);
      oslomarker.addListener('click', function() {
        zoomIn(map, oslomarker);
      });

      var stockmarker = new google.maps.Marker({
        position: {lat: 59.32932349999999, lng: 18.068580800000063},
        map: map,
        icon: image,
        metadata: {
          name: 'Stockholm',
          addressLine1: 'Gustav III:s Boulevard 42',
          addressLine2: '',
          city: '169 73 Solna',
          country: 'Sweden',
          postcode: '',
          phone: '',
        }
      });
      stockmarker.setDraggable(false);
      stockmarker.addListener('click', function() {
        zoomIn(map, stockmarker);
      });
    }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiRIgKvw08LJKPbSCA5lveS1BoJjCWHU8&callback=initMap">
  </script>
</section>
