<?php

if (empty($_POST))
{
	header("location:formulaire.php?erreur=form");
}

else
{
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	$q4 = $_POST["q4"];
	$q5 = $_POST["q5"];
	
	}

echo ("Merci d'avoir répondu à nos questions, en espérant vous revoir très bientôt !");
	

?>