<?php

	if(isset($_POST['submit']))
	{
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$men = $_POST['men'];

		$mailDest = "francoacipolla@gmail.com";
		$subj = "Nuevo mensaje Transportes X";
		$txt = "Nombre: ".$nombre."\nTeléfono: ".$tel."\n\nMenaje:\n".$men;
		

		$header = "De: ".$email;
		
		mail($mailDest, $subj, $txt, $header);

		echo "FUNCIONO!!!!";
	}

?>