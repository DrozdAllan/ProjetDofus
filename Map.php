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
        center: [43.035, 101.02],
        zoom: 15,
        crs: L.CRS.Simple
    });

    var imageUrl = 'Templates/FirstLayer.png',
        imageBounds = [
            [40.0, -75.0],
            [40.773941, -74.12544]
        ];
    L.imageOverlay(imageUrl, imageBounds).addTo(map);

L.tileLayer('Templates/FirstLayer.png', {
        minZoom: 0,
        maxZoom: 20,
    }).addTo(map);
</script>

var mymap = L.map('map').setView([51.505, -0.09], 13); 



    
    
    
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy;',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZWZmbG8iLCJhIjoiY2tpNG84ajYzN205bDM1bDY0dWM4bXk5ciJ9.-h_yuKf-KoyyJy9yVDjeww'
    }).addTo(map);
    
    
    