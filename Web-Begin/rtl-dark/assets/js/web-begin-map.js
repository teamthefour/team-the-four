/*==============================================================*/
// Addax Map  JS
/*==============================================================*/
(function($) {
    "use strict"; // Start of use strict
    var marker;

    window.initMap = function() {
        var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 24.633012771606445, lng: 46.615604400634766}
        });
//lat: 59.325, lng: 18.070
        marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: {lat: 24.633012771606445, lng: 46.615604400634766}
        });
		//lat: 59.327, lng: 18.067
        marker.addListener('click', toggleBounce);
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
        } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
}(jQuery)); // End of use strict