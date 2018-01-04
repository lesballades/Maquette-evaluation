<?php

	try{
		$bdd = new PDO('mysql:host=localhost;dbname=sarl_gaumart', 'root', 'phoenixwillneverdie21');
}

	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
}

?>


<?php

if (isset ($_POST['valider'])) {
	$nom=$_POST['nom'];
	$societe=$_POST['societe'];
	$mail=$_POST['mail'];
	$tel=$_POST['tel'];
	$msg=$_POST['msg'];

	$bdd->exec('INSERT INTO contact VALUES(NULL, "'.$nom.'", "'.$societe.'", "'.$mail.'", "'.$tel.'", "'.$msg.'")');
}

?>