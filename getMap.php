<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoogleMapAPI</title>
</head>
<body>

<script src="http://maps.google.com/maps/api/js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

<script type="text/javascript">

    /* GoogleMap */
    var lat = '<?= $lat ?>';
    var lng = '<?= $lng ?>';
    var map_canvas = new GMaps({

        el: '#map_canvas',
        lat: lat,
        lng: lng,
        zoom:16

    });

    map_canvas.addMarker({
        lat: lat,
        lng: lng,
        title: 'Map',
        click: function(ev) {
            console.log(ev)
            console.log(lat)
            console.log(lng)
        }

    });
</script>

    <a href="<?= getGoogleMap($lat, $lng) ?>"
       target="_blank">
    </a>

    <div id="map_canvas" style="width: 100%; height: 300px;"></div>

</body>
</html>