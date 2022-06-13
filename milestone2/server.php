<?php 
include __DIR__ . "/database.php";
// var_dump($database);
function filterAlbums($element){
  $filterKey = $_GET['query'];
  if($filterKey == ''){
    return true; //inserire tutti gli album se la chiave è vuota
  }else{
    return strtolower($element['genre']) == $filterKey; //filtrare usando la chiave
  }
};

$filterdArray = array_filter($database, 'filterAlbums');

$database_json = json_encode($filterdArray);
header('Content-Type: application/json');
echo $database_json;
?>