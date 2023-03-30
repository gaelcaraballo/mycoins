function initMap() {
    // Initialize the map
    let map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14
    });

    // Try HTML5 geolocation to get the user's current location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            let pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            // Center the map on the user's location
            map.setCenter(pos);

            // Add a marker for the user's location
            let marker = new google.maps.Marker({
                map: map,
                position: pos,
            });

            // Update the latitude and longitude fields when the marker is moved
            google.maps.event.addListener(marker, 'dragend', function () {
                document.getElementById('latitude').value = marker.getPosition().lat();
                document.getElementById('longitude').value = marker.getPosition().lng();
            });

            // Move the marker when the map is moved
            google.maps.event.addListener(map, 'center_changed', function () {
                marker.setPosition(map.getCenter());
                document.getElementById('latitude').value = marker.getPosition().lat();
                document.getElementById('longitude').value = marker.getPosition().lng();
            });
        }, function () {
            // Handle geolocation errors
            handleLocationError(true, map.getCenter());
        });
    } else {
        // Browser doesn't support geolocation
        handleLocationError(false, map.getCenter());
    }

    function handleLocationError(browserHasGeolocation, pos) {
        let infoWindow = new google.maps.InfoWindow({
            map: map,
            position: pos,
            content: browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.'
        });
    }
}

// Load the API with a callback function
function loadScript() {
    let script = document.createElement('script');
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC9ejmUZ74ZX8eoeu2OIw20l6A-wW93fjI&callback=initMap';
    script.defer = true;
    script.async = true;
    document.head.appendChild(script);
}

// Call the loadScript function to load the API
loadScript();
