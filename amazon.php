<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Amazon Premium</title>
	<link rel="stylesheet" href="amazon.css">
</head>
<body>
	<header id="header">Veuillez faire votre séléction de bouquin</header>

	<?php 

		$book1 = array(
			'name' => "La communauté de l'anneau",
		 	"prix" => 10,
		 	"note" => 9,
		 	"prime" => "true"
		 	);

		$book2 = array(
			'name' => "Les 2 tours",
		 	"prix" => 10.5,
		 	"note" => 10,
		 	"prime" => "true"
		 	); 


		$book3 = array(
			'name' => "Le retour du roi",
		 	"prix" => 8,
		 	"note" => 7,
		 	"prime" => "true"
		 	); 


		$book4 = array(
			'name' => "50 shades of grey",
		 	"prix" => 1,
		 	"note" => 3,
		 	"prime" => "false"
		 	); 


		$book5 = array(
			'name' => "La toure sombre",
		 	"prix" => 7,
		 	"note" => 8,
		 	"prime" => "true"
		 	); 


		$book6 = array(
			'name' => "Charlie",
		 	"prix" => 25,
		 	"note" => 10,
		 	"prime" => "true"
		 	); 


		$book7 = array(
			'name' => "La roue du temps",
		 	"prix" => 6,
		 	"note" => 5,
		 	"prime" => "false"
		 	); 


		$book8 = array(
			'name' => "Le crime de l'orient-express",
		 	"prix" => 10,
		 	"note" => 7,
		 	"prime" => "false"
		 	); 


		$book9 = array(
			'name' => "Harry pot d\'fleur",
		 	"prix" => 8,
		 	"note" => 9,
		 	"prime" => "true"
		 	); 

		$book10 = array(
			'name' => "Coluche : Biographie",
		 	"prix" => 10,
		 	"note" => 9,
		 	"prime" => "true"
		 	); 

		$livres = array($book1, $book2, $book3, $book4, $book5, $book6, $book7, $book8, $book9, $book10);
		
		foreach ($livres as $livre) {
			echo "<div class='book' id='image'>";
			echo "<ul>";
			echo "<li>".'En vente: '.$livre['name']."</li>";
			echo "<li>"."Au prix de: ".$livre['prix']."<li>";
			echo "<li>"."Il est noté: ".$livre["note"]."/10"."<li>";
		if ($livre["prime"]=="true") {
			echo "<li>"."Vous pouvez le commander en Prime"."</li>";
		}
		else{
			echo "<li>"."Indisponible en prime"."</li>";
		}
		echo "</ul>";
		echo "</div>";

		}



		 	?>
<footer>Un bon livre par mois, c'est un minimum</footer></body>
</html>