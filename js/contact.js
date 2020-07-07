jQuery(function($){
    "use strict";

    var pasta = window.pasta || {};

    //  MAIN FUNCTION // -------------------

    pasta.mainFunction = function(){

        /*Google map*/
        var myLatLng = {lat: -37.8202335, lng: 144.9528021};
        var markerLatLng = {lat: -37.8202335, lng: 144.9528021};
        var customMapType = new google.maps.StyledMapType(
            [
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#c1d2ff"
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
                            "color": "#F2F2F2"
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
                            "color": "#E6E6E6"
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
                            "color": "#F2F2F2"
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
                            "color": "#ffffff"
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
                            "color": "#1b1b1b"
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
                            "color": "#fefefe"
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
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ],
            {
                name: 'Custom Style'
        });
        var customMapTypeId = 'custom_style';

        var mapProp = {
            center: myLatLng,
            zoom:14,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            draggable: false,
            disableDefaultUI: true,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
            }
        };
        function initialize() {
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            map.mapTypes.set(customMapTypeId, customMapType);
            map.setMapTypeId(customMapTypeId);
            var image = {
                url: 'images/icon-location.png',
                // size: new google.maps.Size(60, 60),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(50, 50)
              };
            var marker = new google.maps.Marker({
                position: markerLatLng,
                map: map,
                // animation:google.maps.Animation.BOUNCE,
                icon: image,
                title: 'Pasta Restaurant'
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);

    };

      // INIT FUNCTIONS //--------------------------

    $(document).ready(function(){
        pasta.mainFunction();
    });

    //   End of INIT FUNCTIONS  //
});
