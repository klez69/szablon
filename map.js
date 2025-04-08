function initMap() {
    const czakramLocation = { lat: 50.02756897941761, lng: 20.957448715717012 };
    const map = new google.maps.Map(document.querySelector('.map-container'), {
        center: czakramLocation,
        zoom: 15
    });

    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer({
        map: map,
        suppressMarkers: false
    });

    new google.maps.Marker({
        position: czakramLocation,
        map: map,
        title: 'CZAKRAM Sp. z o.o.'
    });
}