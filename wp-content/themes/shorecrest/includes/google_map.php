<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMjm_0er-ybuWcVoPXYLSr82mn6bvNqCY"></script> <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 15,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(43.64878, -79.37751), // Shorecrest Group

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [
                        {
                            "featureType": "all",
                            "stylers": [
                                {
                                    "saturation": 0
                                },
                                {
                                    "hue": "#e7ecf0"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "stylers": [
                                {
                                    "saturation": -70
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                },
                                {
                                    "saturation": -60
                                }
                            ]
                        }
                    ]
                };
                
                function pinSymbol(color) {
                    return {
                        path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z M -2,-30 a 2,2 0 1,1 4,0 2,2 0 1,1 -4,0',
                        fillColor: color,
                        fillOpacity: 1,
                        strokeColor: '#fff',
                        strokeWeight: 1,
                        scale: 1,
                   };
                }

                // Get the HTML DOM element that will contain your map
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(43.64878, -79.37751),
                    map: map,
                    icon: pinSymbol("#56c8e2"),
                });
            }
        </script>
<div id="map" style="width: 100%; height: 300px; margin-bottom: 50px;"></div>