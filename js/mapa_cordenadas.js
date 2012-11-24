
      var geocoder = new google.maps.Geocoder();
      var map;
      var marker = new google.maps.Marker();
      var markersArray = [];

      $(document).ready(function(){
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(6.42375, -66.5897);
        var mapOptions = {
          zoom: 5,
          center: latlng ,
          draggable: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        var infowindow = new google.maps.InfoWindow();
        marker = new google.maps.Marker({
          map: map
        });

        google.maps.event.addListener(autocomplete, 'place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          input.className = '';
          var place = autocomplete.getPlace();
          $('#latitud').val(place.geometry.location.lat());
          $('#longitud').val(place.geometry.location.lng());

          if (!place.geometry) {
            // Inform the user that the place was not found and return.
            input.className = 'notfound';
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          var image = new google.maps.MarkerImage(
            place.icon,
            new google.maps.Size(71, 71),
            new google.maps.Point(0, 0),
            new google.maps.Point(17, 34),
            new google.maps.Size(35, 35));

          marker.setIcon(image);
          marker.setPosition(place.geometry.location);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }
          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
        });




        google.maps.event.addListener(map, 'click', function(event) {
          removeMarker();
          $('#latitud').val(event.latLng.lat());
          $('#longitud').val(event.latLng.lng());
          addMarker(event.latLng);


        });
      });

        function addMarker(location) {
          marker = new google.maps.Marker({
            position: location,
            map: map
          });
          markersArray.push(marker);
        }

        function removeMarker() {
          if (markersArray) {
              for (i=0; i < markersArray.length; i++) {
                  markersArray[i].setMap(null);
              }
          markersArray.length = 0;
          }
        }


       /* function copia_portapapeles(id){
          if (id.value != ""){

            window.clipboardData.setData("Text", id.value);

        } */


        $('#inputs_copiar').on('click','.copiar', function(){
          id = document.getElementById($(this).val());
          if (id.value != ""){
            window.clipboardData.setData("Text", id.value);
          }
        });

          function addIndexCopyButton(){
              var b={
                  pathToSwf:"ccb.swf?v=3.0",
                  imageUrl:"button1.jpg",
                  height:"24",
                  textValue:"Copiar",
                  width:"56",
                  top:"10"
               };
               $("#index_copy_button").html("");
               CopyClipboardButton.appendButton("index_copy_button","latitud",b);
          }
          addLoadEvent(function(){
                addIndexCopyButton();
          });



        $('form').on('click','#buscar', function(){

          var address = document.getElementById("searchTextField").value;
          geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
              removeMarker();
              $('#latitud').val(results[0].geometry.location.lat());
              $('#longitud').val(results[0].geometry.location.lng());

              addMarker(results[0].geometry.location);
              if (results[0].geometry.viewport) {
                map.fitBounds(results[0].geometry.viewport);
              } else {
                map.setCenter(results[0].geometry.location);
                map.setZoom(12);
              }
            } else {
              alert("Geocode was not successful for the following reason: " + status);
            }
          });
          return false;
        })
          /*var address = document.getElementById("searchTextField").value;
          geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
              removeMarker();
              $('#latitud').val(results[0].geometry.location.lat());
              $('#longitud').val(results[0].geometry.location.lng());

              addMarker(results[0].geometry.location);
              if (results[0].geometry.viewport) {
                map.fitBounds(results[0].geometry.viewport);
              } else {
                map.setCenter(results[0].geometry.location);
                map.setZoom(12);
              }
            } else {
              alert("Geocode was not successful for the following reason: " + status);
            }
          });*/



      /*google.maps.event.addDomListener(window, 'load', initialize);*/



