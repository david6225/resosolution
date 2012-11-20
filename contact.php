<?php
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING );
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING );
$from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL );
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING );
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING );


$result = "NOM: $firstname $name"."\n";
$result .= "TELEPHONE: $phone"."\n";
$result .= "EMAIL: $from"."\n";
$result .= "MESSAGE: ".$message."\n";

mail('contact@reso-solution.fr','Message depuis Reso Solution.FR',$result);

echo "Votre message a bien &eacute;t&eacute; envoy&eacute;";
echo "<br/><a href='/'>Retour au site</a>";
?>
