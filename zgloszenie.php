<?php
$NrZespolu = $_POST["NRRatowniczy"];
$NrDyspozytora = $_POST["NRDyspozytora"];
$Adres = $_POST["Adres"];

$con = new mysqli("localhost","root","","ratownictwo");

$date = date("h:i:s");
$query = "INSERT INTO zgloszenia (ratownicy_id,dyspozytorzy_id,adres,pilne,czas_zgloszenia) VALUES ($NrZespolu,$NrDyspozytora,'$Adres',0,'$date'); ";


$con->query($query);

$con->close();

include("pogotowie.html");

?>
