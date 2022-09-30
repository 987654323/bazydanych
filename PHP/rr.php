<html>

<head>
<link rel="Stylesheet" type="text/css" href="jd.css"/>
</head>
<?php
$Lp=$_GET["Lp"];
$Imie=$_GET["Imie"];
$Plec=$_GET["Plec"];
$R_Buta=$_GET["Rozmiar_Buta"];
$Waga=$_GET["Waga"];

$con = new mysqli("127.0.0.1","root","","dane");
 
$q="INSERT INTO jd (Lp, Imie, Plec, Rozmiar_Buta, Waga) VALUES ('".$Lp"', '".$Imie."' , '".$Plec."', '".$R_Buta."', '".$Waga."'); ";
 
$qq="SELECT * FROM jd";
if($wynik2=$con->query($qq)){
echo "<table>";
while($row=$wynik2->fetch_array()){
echo "<tr>";
echo "<td>" .$row[0].  "</td>";
echo "<td>" .$row[1].  "</td>";
echo "<td>" .$row[2].  "</td>";
echo "<td>" .$row[3].  "</td>";
echo "<td>" .$row[4]. "</td>";
echo "</tr>";
}
echo "<table>";
}
else{
echo $con->errno . " " . $con->error;}

$wynik=$con->query($q)
?>

</html>