<div>
  <script>
    function createContent(metadata, context) {

      function addAddressLine2(addressLine2) {
        if (addressLine2) {
          return '<p>' + metadata.addressLine2 + '</p>'
        }
        return ''
      }

      return '<div">' +
        '<h4>' + metadata.name + '</h4>' +
        '<br>' +
        '<p>' + metadata.addressLine1 + '</p>' +
        addAddressLine2(metadata.addressLine2) +
        '<p>' + metadata.city + '</p>' +
        '<p>' + metadata.country + '</p>' +
        '<p>' + metadata.postcode + '</p>' +
        '<br>' +
        '<p><a href="tel:' + metadata.phone + '">' + metadata.phone + '</a></p>' +
      '</div>';
    } 

    function definePopupClass() {
      // Extract has been adapted from 'https://developers.google.com/maps/documentation/javascript/examples/overlay-popup'
      var Popup;

      Popup = function() {
        var container = document.createElement('div');
        container.classList.add('popup__container');
        
        var button = document.createElement('button');
        button.classList.add('popup__close-button');
        button.innerHTML = '&#x2715;';
        var self = this;
        button.onclick = function() {
          self.selectedMarker = null;
          self.popup.classList.add('popup--hidden');
          self.onClickClose();
        };
        container.appendChild(button);

        this.content = document.createElement('div');
        this.content.classList.add('popup__content');
        container.appendChild(this.content);

        this.anchor = document.createElement('div');
        this.anchor.classList.add('popup__anchor');
        this.anchor.appendChild(container);
        
        this.popup = document.createElement('div');
        this.popup.classList.add('popup');
        this.popup.appendChild(this.anchor)

        // Optionally stop clicks, etc., from bubbling up to the map.
        this.stopEventPropagation();
      }

      // NOTE: google.maps.OverlayView is only defined once the Maps API has
      // loaded. That is why Popup is defined inside initMap().
      Popup.prototype = Object.create(google.maps.OverlayView.prototype);

      /** Called when the popup is added to the map. */
      Popup.prototype.onAdd = function() {
        this.getPanes().floatPane.appendChild(this.popup);
      };

      Popup.prototype.setMarker = function(marker) {
        this.selectedMarker = marker;
        if (this.selectedMarker) {
          this.content.innerHTML = createContent(this.selectedMarker.metadata);
          // this.anchor.style.display = 'block';
          this.popup.classList.remove('popup--hidden');
          this.draw()
        }
      };

      Popup.prototype.onClickClose = function() {};

      /** Called when the popup needs to draw itself. */
      Popup.prototype.draw = function() {
        this.popup.classList.add('popup--hidden');
        if (this.selectedMarker) {
          var divPosition = this.getProjection().fromLatLngToDivPixel(this.selectedMarker.position);
          // Hide the popup when it is far out of view.
          var display =
              Math.abs(divPosition.x) < 2000 && Math.abs(divPosition.y) < 2000 ?
              'block' :
              'none';

          if (display === 'block') {
            this.anchor.style.left = divPosition.x + 'px';
            this.anchor.style.top = divPosition.y + 'px';
            this.popup.classList.remove('popup--hidden');
          }
        }
      };

      /** Stops clicks/drags from bubbling up to the map. */
      Popup.prototype.stopEventPropagation = function() {
        var anchor = this.anchor;
        anchor.style.cursor = 'auto';

        ['click', 'dblclick', 'contextmenu', 'wheel', 'mousedown', 'touchstart', 'pointerdown']
          .forEach(function(event) {
            anchor.addEventListener(event, function(e) {
              e.stopPropagation();
            });
          });
      };

      return Popup;
    }
  </script>
</div>