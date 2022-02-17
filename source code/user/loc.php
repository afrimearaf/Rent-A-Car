<script>
if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition((position) => {
        document.getElementById('data'). innerHTML="latitude: " + position. coords.latitude + "<br>longtitude: " + position.coords.longitude
    })
}

</script>

<h4>Here am I</h4>
<div id="data">
</div>

<script>

    
    let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}
    
</script>