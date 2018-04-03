/* global google */

var dest;
var directionsDisplay;

// memanggil service Google Maps Direction
var directionsService = new google.maps.DirectionsService();
directionsDisplay = new google.maps.DirectionsRenderer();

$(document).ready(function () {
    var myOptions = {
        zoom: 13,
        center: new google.maps.LatLng(-7.7065127,108.997478),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // posisi awal ketika halaman pertama kali dimuat
    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

    // memanggil fungsi geocoder autocomplete
    var autocomplete = new google.maps.places.Autocomplete((document.getElementById('dest')), {types: ['geocode']});

    /*	
     fungsi geolocation pada geocoder ini sangat penting
     agar pencarian daerah tujuan pada textbox ga ngaco 
     */
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            autocomplete.setBounds(new google.maps.LatLngBounds(geolocation, geolocation));
        });
    }

});

$(document).ready(function () {
    // ketika tombol cari di klik, maka proses pencarian rute dimulai
    $("#cari").click(function () {


        var dest = $("#dest").val(); // tadi gak ada var nya
        alert('Anda akan mencari lokasi ' + dest + '\n Tunggu ya.. dicari dulu... ^_^');
        var defaultLatLng = new google.maps.LatLng(-7.7065127,108.997478);
        alert(defaultLatLng);
        /*	
         nah, pada fungsi geolocation disini adalah
         ketika koordinat user berhasil didapat maka peta koordinat yang digunakan
         adalah koordinat user, namun jika tidak berhasil maka koordinat yang digunakan
         adalah koordinat default (pada variable defaultLatLng)
         */
        if (navigator.geolocation) {
            function success(pos) {
                drawMap(pos.coords.latitude, pos.coords.longitude);
            }

            function fail(error) {
                drawMap(defaultLatLng);
            }

            navigator.geolocation.getCurrentPosition(success, fail, {maximumAge: 500000, enableHighAccuracy: true, timeout: 6000});

        } else {
            drawMap(defaultLatLng);
        }

        function drawMap(lat, lng) {

            var myOptions = {
                zoom: 15,
                center: new google.maps.LatLng(lat, lng),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

            // kita bikin marker untuk asal dengan koordinat user hasil dari geolocation
            var markerorigin = new google.maps.Marker({
                position: new google.maps.LatLng(parseFloat(lat), parseFloat(lng)),
                map: map,
                title: "Origin",
                visible: false // kita ga perlu menampilkan markernya, jadi visibilitasnya kita set false
            });

            // membuat request ke Direction Service
            var request = {
                origin: markerorigin.getPosition(), // untuk daerah asal, kita ambil posisi user
                destination: dest, // untuk daerah tujuan, kita ambil value dari textbox tujuan
                provideRouteAlternatives: true, // set true, karena kita ingin menampilkan rute alternatif

                /**
                 * kamu bisa tambahkan opsi yang lain seperti
                 * avoidHighways:true (set true untuk menghindari jalan raya, set false untuk menonantifkan opsi ini)
                 * atau kamu bisa juga menambahkan opsi seperti
                 * avoidTolls:true (set true untuk menghindari jalan tol, set false untuk menonantifkan opsi ini)
                 */
                travelMode: google.maps.TravelMode.DRIVING // set mode DRIVING (mode berkendara / kendaraan pribadi)
                        /**
                         * kamu bisa ganti dengan 
                         * google.maps.TravelMode.BICYCLING (mode bersepeda)
                         * google.maps.TravelMode.WALKING (mode berjalan)
                         * google.maps.TravelMode.TRANSIT (mode kendaraan / transportasi umum)
                         */
            };


            directionsService.route(request, function (response, status) {
                if (status === google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });
            // menampiklkan rute pada peta dan juga direction panel sebagai petunjuk text
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('directions-panel'));

            // menampilkan layer traffic atau lalu-lintas pada peta
            var trafficLayer = new google.maps.TrafficLayer();
            trafficLayer.setMap(map);

        }
    });
});