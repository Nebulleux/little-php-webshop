<?php
    $servername = "localhost";
    $username = "jbropp";
    $password = "dddddddd";
    $db = "jbropp_01";
    $conn = mysqli_connect($servername, $username, $password,$db);
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }
error_reporting(0);
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertion d'un produit</title>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
	<h2>📥 Ajouter un nouvel article 📥</h2>

    <form action="insert_product.php" class="centre" method="POST">
        Catégorie : <br>
        <input type="text" name="category"> <br>
        
        Libellé : <br>
        <input type="text" name="label"> <br>
        
        Description : <br>
        <textarea name="description"></textarea> <br><br>

        Poids : <br>
        <input type="text" name="poids"> <br>

        Couleur : <br>
        <input type="text" name="couleur"> <br>

        Dimensions : <br>
        <input type="text" name="dimensions"> <br>

        Diamètre du filament : <br>
        <input type="text" name="diamètre_filament"> <br>

        Prix HT : <br>
        <input type="text" name="prix_HT"> <br>

        Précision : <br>
        <input type="text" name="précision"> <br>

        Température de transition vitreuse : <br>
        <input type="text" name="temperature_transi_vitreuse"> <br>

        Température de point de fusion : <br>
        <input type="text" name="temperature_point_de_fusion"> <br>
        
        Image : <br>
        <input type="text" name="image"> <br>

        <input type="submit" value="Insérer">

	<input type="button" onclick="location.href='./main.php';" value="Retour liste" />
    </form>

<?php
if (!empty($_POST['category']) && (!empty($_POST['label'])) && !empty($_POST['description']) && !empty($_POST['poids']) && !empty($_POST['couleur']) && !empty($_POST['dimensions']) && !empty($_POST['diamètre_filament']) && !empty($_POST['prix_HT']) && !empty($_POST['précision']) && !empty($_POST['temperature_transi_vitreuse']) && !empty($_POST['temperature_point_de_fusion'])) {
	$sql = "INSERT INTO product (catégorie, libellé, description, poids, couleur, dimensions, diamètre_filament, précision, temperature_transi_vitreuse, temperature_point_de_fusion, prix_HT, image) VALUES ('".$_POST['category']."', '".$_POST['label']."', '".$_POST['description']."' , '".$_POST['poids']."' , '".$_POST['couleur']."' , '".$_POST['dimensions']."' , '".$_POST['diamètre_filament']."' , '".$_POST['précision']."' , '".$_POST['temperature_transi_vitreuse']."' , '".$_POST['temperature_point_de_fusion']."', '".$_POST['prix_HT']."' , '".$_POST['image']."')";
	if (mysqli_query($conn, $sql)) {
      		echo "Produit ajouté avec succès";
	} else {
      		echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
	}
}

if (empty($_POST['category'])) {
	echo "Catégorie manquante ! <br>";	
	}
if (empty($_POST['label'])) {
	echo "Label manquant ! <br>";	
	}
if (empty($_POST['description'])) {
	echo "Description manquante ! <br>";	
	}
if (empty($_POST['poids'])) {
	echo "Poids manquant ! <br>";	
	}
if (empty($_POST['couleur'])) {
	echo "Couleur manquante ! <br>";	
	}
if (empty($_POST['dimensions'])) {
	echo "Dimensions manquantes ! <br>";	
	}
if (empty($_POST['diamètre_filament'])) {
	echo "Diamètre manquant ! <br>";	
	}
if (empty($_POST['prix_HT'])) {
	echo "Prix hors taxe manquant ! <br>";	
	}
if (empty($_POST['précision'])) {
	echo "Précision manquante ! <br>";	
	}
if (empty($_POST['temperature_transi_vitreuse'])) {
	echo "Temp transi vitreuse manquante ! <br>";	
	}
if (empty($_POST['temperature_point_de_fusion'])) {
	echo "Temp au point de fusion manquante ! <br>";	
	}
if (empty($_POST['image'])) {
	echo "image manquante ! <br>";	
	}


?>




  </body>
</html>
