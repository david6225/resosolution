<?php
require_once __DIR__.'/vendor/autoload.php';
include_once __DIR__.'controller.php';
/* Quick and Dirty */

if( !$_POST['name'] || !$_POST['firstname'] || !$_POST['email'] )
	die('No POST'); 

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING );
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING );
$from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL );
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING );
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING );



/*mail('contact@reso-solution.fr','Message depuis Reso Solution.FR',$result);

echo "Votre message a bien &eacute;t&eacute; envoy&eacute;";
echo "<br/><a href='/'>Retour au site</a>";
*/

// Create the Transport
$transport = Swift_SendmailTransport::newInstance();

/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
*/

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);
$result = "NOM: $firstname $name"."\n";
$result .= "TELEPHONE: $phone"."\n";
$result .= "EMAIL: $from"."\n";
$result .= "MESSAGE: ".$message."\n";
$result .= "\n";
$result .= "REFERER: ".$_SERVER['HTTP_REFERER']."\n";
$result .= "INFO TECH: ".$_SERVER['REMOTE_ADDR']." ".$_SERVER['HTTP_USER_AGENT']."\n";


// Create a message
$message = Swift_Message::newInstance('Mesage depuis le site réso-solution.fr')
  ->setFrom(array('kalooni@gmail.com' => 'Réso Solution'))
  ->setTo(array('nicolas@agence-differente.fr'))
  ->setBody($result);

// Send the message
$result = $mailer->send($message);
?>
