<?php
$to = 'skauffmann@tyneo.net';
$from = 'contact@tyneo.net';
//$cc = '';
//$bcc = '';

$subject = 'Demande de contact tyneo.net';
$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
$headers .= 'Reply-To: '.$from."\n";
$headers .= 'From: "'.$from.'"<'.$from.'>'."\n";
$headers .= 'Delivered-to: '.$to."\n";
//$headers .= 'Cc: '.$cc."\n";
//$headers .= 'Bcc: '.$bcc."\n\n";

$lang = htmlspecialchars($_POST['lang'], ENT_QUOTES);
$lastname = htmlspecialchars($_POST['Last_Name'], ENT_QUOTES);
$company = htmlspecialchars($_POST['Company'], ENT_QUOTES);
$mail = htmlspecialchars($_POST['Email'], ENT_QUOTES);
$phone = htmlspecialchars($_POST['Phone'], ENT_QUOTES);
$body = htmlspecialchars($_POST['LEADCF1'], ENT_QUOTES);
$body = str_replace("\r\n", " ", $body);
$body = preg_replace('/[^A-Za-z0-9\-\?!\*\+ ]/', '#', $body);

$message  = '<div style="">';
$message .= 'Bonjour,<br><br>';
$message .= 'Le message suivant vient d\'être envoyé depuis le site tyneo.net :<br/>';
$message .= '- Nom: '.$lastname.'<br/>';
$message .= '- Société: '.$company.'<br/>';
$message .= '- Adresse e-mail: '.$mail.'<br/>';
$message .= '- Téléphone: '.$phone.'<br/><br/>';
$message .= '- Message:<br/>'.$body;
$message .= '</div>';

require('./mattermost.inc.php');
$mattermost = "Nouveau contact depuis le site Internet (".$lang."):\n\n";
$mattermost .= "| Nom | Société | Mail | Téléphone |\n";
$mattermost .= "|:--|:--|:--|:--|\n";
$mattermost .= "| ".$lastname." | ".$company." | ".$mail." | ".$phone." |\n";
$mattermost .= "\n";
$mattermost .= $body;
$mattermost .= "\n";
mattermost($mattermost);

if (mail($to, $subject, $message, $headers)) {
    $redirect='https://tyneo.net/fr/about/contact_send.html';
} else {
    $redirect='https://tyneo.net/fr/about/contact_send_ko.html';
}

?>
<html>
<head>
<title>Redirect..</title>
<meta http-equiv="refresh" content="0; URL=<?php echo $redirect; ?>">
</head>
<body>
</body>
</html>
