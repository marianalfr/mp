<?php 
if(isset($_POST['submit'])){
    $to = "marianalfr@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['nombre'];
    $last_name = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $alergia = $_POST['alergia'];
    $siono = $_POST['confirmacion'];
    $cuantos = $_POST['cuantos'];
    $nombres = $_POST['nombresdemas'];
    $bus = $_POST['bus'];
    $musica = $_POST['cancion'];

    $subject = "CONFIRMACIÓN DE ASISTENCIA";
    //$subject2 = "Copy of your form submission";
    $message = "NOMBRE........................................ ". $first_name . "\n\n";
    $message .= "APELLIDOS................................... ". $last_name . "\n\n";
    $message .= "EMAIL............................................ ". $from . "\n\n";
    $message .= "TELÉFONO................................... ". $telefono . "\n\n";
    $message .= "ASISTENCIA.................................. ". $siono . "\n\n";
    $message .= "Nº DE COMENSALES.................... ". $cuantos . "\n\n";
    $message .= "NOMBRES:\n\n". $nombres . "\n\n";
    $message .= "AUTOBUS...............................". $bus . "\n\n";
    $message .= "ALERGIAS O DIETA ESPECIAL.... ". $alergia . "\n\n";
    $message .= "RECOMENDACIONES MUSICALES.... ". $musica . "\n\n";

    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

	$headers = "From:" . $from;
	//$headers2 = "From:" . $to;
  	mail($to,$subject,$message);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: confirmacion.php');//"Muchas gracias por tu confirmación, " . $first_name . ". Recuerda que puedes volver a usar este formulario si tus circunstancias cambian.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>



