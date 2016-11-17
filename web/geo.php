<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <title>Agrenter - Géolocalisation</title>
</head>
<body>
    <p id="msg"></p>
    <iframe id="map" src="http://umap.openstreetmap.fr/en/map/dis-moi-ou_112092#4/" frameborder="0" width="800px" height="800px"></iframe>
    <?php
        //Show map and localisate you to your coordinates
        if (!empty($_POST['lat'])) {
            $lat = $_POST['lat'];
            $lon = $_POST['lon'];
            echo $lat.' '.$lon;

        }

    ?>
    <script>
       $(function () {
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    $('#msg').text('Désolé mais, la géolocalisation n\'est pas supportée par votre navigateur');
                }
            }
            function showPosition(position) {
                var lat = position.coords.latitude;
                var lon =position.coords.longitude;
                console.log(lat+' '+lon);
                var element=document.getElementById('map');
                element.setAttribute('src','http://umap.openstreetmap.fr/en/map/dis-moi-ou_112092#8/'+lat+'/'+lon);
                /*$.ajax({
                    method: "post",
                    url: "geo.php",
                    data:{lat: lat,lon: lon},
                    success:
                });*/
            }
            getLocation();
            
        });
    </script>
</body>
</html>
