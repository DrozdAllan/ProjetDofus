<?php // include_once("PageBanner.php"); 
?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<link rel="stylesheet" href="MapCSS.css">


<html>

<head>


    <title> MAP DOFUS </title>
</head>

<body>

    <div id="map"></div>




</body>

</html>


<script>
    var map = L.map('map', {
        crs: L.CRS.Simple
    });

    var sol = L.latLng([145, 175.2]);
    L.marker(sol).addTo(map);
    map.setView([70, 120], 1);

    var bounds = [
        [0, 0],
        [1000, 1000]
    ];
    var image = L.imageOverlay('Templates/FirstLayer.png', bounds).addTo(map);
    map.fitBounds(bounds);
</script>





L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
attribution: 'Map data &copy;',
maxZoom: 18,
id: 'mapbox/streets-v11',
tileSize: 512,
zoomOffset: -1,
accessToken: 'pk.eyJ1IjoiZWZmbG8iLCJhIjoiY2tpNG84ajYzN205bDM1bDY0dWM4bXk5ciJ9.-h_yuKf-KoyyJy9yVDjeww'
}).addTo(map);