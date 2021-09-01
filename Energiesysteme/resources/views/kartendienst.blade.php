<html>
  <head>
    <title>Markers</title>
    
  </head>
  <body>
    Längengrad<input type="text" id="lat">
    Breitengrad<input type="text" id="long">


   <!-- <a href="/kartendienst">
    
    </a> -->
<div id="map"></div>

    <script async defer
        src="http://maps.google.com/maps/api/js?sensor=false&callback=initMap">
    </script>


<style>
#map {
        height: 100%;
        margin-left: 1em;
        border: 2px solid black;
        margin-top: 1em;
        height: 650px;
        width: 1200px;
        
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #lat {
        margin-left: 1em;
        margin-top: 2em;
        height: 25px;
        width: 150px;
        font-size: 13px;
        padding: 0;
        padding-left: 0.5em;
        border: 3px solid #cccccc;
        border-radius: 5px;

      }

      #long {
        margin-top: 2em;
        height: 25px;
        width: 150px;
        font-size: 13px;
        padding: 0;
        padding-left: 0.5em;
        border: 3px solid #cccccc;
        border-radius: 5px;
      }
      
  
   
</style>



<script language="javascript" type="text/javascript">

// In the following example, markers appear when the user clicks on the map.
      // The markers are stored in an array.
      // The user can then click an option to hide, show or delete the markers.
      var map;
      var markers = [];

      function initMap() {
        var haightAshbury = {lat: 47.42977427972503, lng: 13.507509650892006};

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7.0,                        // Set the zoom level manually
          center: haightAshbury,
          mapTypeId: 'terrain'
        });

        // This event listener will call addMarker() when the map is clicked.
        map.addListener('click', function(event) {
          if (markers.length >= 1) {
              deleteMarkers();
          }

          addMarker(event.latLng);
          document.getElementById('lat').value = event.latLng.lat();
          document.getElementById('long').value =  event.latLng.lng();
        });
      }

      // Adds a marker to the map and push to the array.
      function addMarker(location) {
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
        markers.push(marker);
      }

      // Sets the map on all markers in the array.
      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }

      // Removes the markers from the map, but keeps them in the array.
      function clearMarkers() {
        setMapOnAll(null);
      }

      // Deletes all markers in the array by removing references to them.
      function deleteMarkers() {
        clearMarkers();
        markers = [];
      }

</script>



  </body>
</html>  

