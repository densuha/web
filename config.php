<?php 

//ini_set('display_errors','1');
//ini_set('display_startup_errors','1');
//error_reporting(E_ALL);
//$base_url_admin = "http://localhost/web/";

$databaseHost='localhost';
$databaseName='pabw_latihan';
$databaseUsername='root';
$databasePassword= '';


$mysqli = mysqli_connect($databaseHost , $databaseName , $databaseUsername , $databasePassword);
if($mysqli){
  die("<script>alert('Gagal Tersambung ke Database.')</script>");

}else{
  //die("<script>alert('tersambung dengan database.')</script>");

}
?> 