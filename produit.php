<html>
<head>
<title>Page produit</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>ROPP Jean-Baptiste RT1 GB2</h1>

<?php
$idget = ($_GET["id"]);
echo "<br><br><h2>Affichage produit</h2><br>";
echo "Vous êtes actuellement sur le produit n°".$idget;
echo "<br>";
echo "<a href=main.php>Retourner au menu principal...</a>";
echo "<br><br><br>";
    $servername = "localhost";
    $username = "jbropp";
    $password = "dddddddd";
    $db = "jbropp_01";
    $conn = mysqli_connect($servername, $username, $password,$db);
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }
?>

<?php
$connectaumax = $conn->query("SELECT * FROM product WHERE id = ".$idget);
while ($row = $connectaumax->fetch_assoc()) {
    echo (empty($row['image'])) ? 'NA' : '<img class="fit-picture"'."src=".$row['image'].">";
	echo "<br>";
	echo "catégorie: ";
	echo $row['catégorie'];
	echo "<br>";
	echo "libellé: ";
	echo $row['libellé'];
	echo "<br>";
	echo "description: ";
	echo $row['description'];
	echo "<br>";
	echo "poids: ";
	echo (empty($row['poids'])) ? 'NA' : $row['poids'];
	echo "<br>";
	echo "couleur: ";
	echo (empty($row['couleur'])) ? 'NA' : $row['couleur'];
	echo "<br>";
	echo "dimensions(cm): ";
	echo (empty($row['dimensions'])) ? 'NA' : $row['dimensions'];
	echo "<br>";
	echo "diamètre du filament: ";
	echo (empty($row['diamètre_filament'])) ? 'NA' : $row['diamètre_filament'];
	echo "<br>";
	echo "prix TTC: ";
	echo (empty($row['prix'])) ? 'NA' : $row['prix'];
	echo "<br>";
	echo "prix HT: ";
	echo (empty($row['prix_HT'])) ? 'NA' : $row['prix_HT'];
	echo "<br>";
	echo "précision(+-): ";
	echo (empty($row['précision'])) ? 'NA' : $row['précision'];
	echo "<br>";
	echo "temperature transi vitreuse: ";
	echo (empty($row['temperature_transi_vitreuse'])) ? 'NA' : $row['temperature_transi_vitreuse'];
	echo "<br>";
	echo "temperature point de fusion: ";
	echo (empty($row['temperature_point_de_fusion'])) ? 'NA' : $row['temperature_point_de_fusion'];
	echo "<br>";
}
?>


</body>
</html>
