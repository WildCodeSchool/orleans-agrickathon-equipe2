<?php
/*//Get lattitude and longitude for each plant
function getCoordinates($address){
$apiKey ='AIzaSyCN0IkM9PljUR6ftqU8-0Hn8WWbQ_N9wCE';
$query = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&key='.$apiKey;
$return = file_get_contents($query);
$result = json_decode($return, true);
return $result;
}
/*function dbConnect(){
// connection to db
$db = mysqli_connect('localhost', 'mleh', 'mleh');
if (!$db) {
die('Could not connect: ' . mysqli_error($db));
}
// Sélection BDD
mysqli_select_db($db,'agri');
return $db;
}
/*function generateCoord(){
$db = dbConnect();
//select datas
$sqlQuery = "SELECT id, voie, cp, ville FROM site ;";
$sqlSend = mysqli_query($db,$sqlQuery) or die('Erreur SQL !<br>'.$sqlQuery.'<br>'.mysqli_error($db));

while ($result = mysqli_fetch_assoc($sqlSend)){
$address = trim(str_replace(' ','+',$result['voie'].'+'.$result['cp'].'+'.$result['ville']));
$coord = getCoordinates($address);
$getLat = $coord['results'][0]['geometry']['location']['lat'];
$getLng = $coord['results'][0]['geometry']['location']['lng'];

$myFile = fopen('coordList.csv','a+');
fwrite($myFile,$getLat.','.$getLng.',');
}
fclose($myFile);

mysqli_close($db);
}
/*function writeGeoJson(){
$db = dbConnect();
//select datas
$sqlQuery = "SELECT * FROM site ;";
$sqlSend = mysqli_query($db,$sqlQuery) or die('Erreur SQL !<br>'.$sqlQuery.'<br>'.mysqli_error($db));

// write all in umap.json
$fp = fopen('geoUmap.json', 'w+');
$geojson = '';

while($result = mysqli_fetch_assoc($sqlSend)){
$data[] = $result;
}
$nbSite = count($data);
foreach ($data as $key=>$value){
$tab[] = $value;

//write geojson for each team
$geojson = $geojson .
'
{
"type": "Feature",
"properties": {
"country": "France",
"city": "' . trim($tab[$key]['ville']) . '",
"street": "' . trim($tab[$key]['voie']) . '",
"postcode": "' . trim($tab[$key]['cp']) . '",
"name": "' . trim($tab[$key]['entreprise']) . '",
"description": "' . trim($tab[$key]['description']) . '",
"_storage_options": {
"color": "Grey"
}
},
"geometry": {
"type": "Point",
"coordinates": [
' . $tab[$key]['longitude'] . ',
' . $tab[$key]['latitude'] . '
]
}
}';

if ($key < $nbSite - 1) {
$geojson = $geojson . ',';
}
fwrite($fp, '
{
"type": "FeatureCollection",
"features": ['
. $geojson . '
]
}');
}

fclose($fp);
$geojson= '';
mysqli_close($db);
}
writeGeoJson();*/