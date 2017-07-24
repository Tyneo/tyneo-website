<?php
$ref = htmlspecialchars($_POST['ref'], ENT_QUOTES);
$ts = htmlspecialchars($_POST['ts'], ENT_QUOTES);
$mail = htmlspecialchars($_POST['Email'], ENT_QUOTES);

$to = 'skauffmann@tyneo.net';
$from = 'contact@tyneo.net';

$subject = 'Inscription au quiz '.$ref;
$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
$headers .= 'Reply-To: '.$from."\n";
$headers .= 'From: "'.$from.'"<'.$from.'>'."\n";
$headers .= 'Delivered-to: '.$to."\n";


$message  = '<div style="">';
$message .= 'Bonjour,<br><br>';
$message .= 'Nouveau contact : '.$mail.'<br/>';
$message .= '</div>';

require('./mattermost.inc.php');
$mattermost = "Quiz: Nouveau contact\n\n";
$mattermost .= "| Mail |\n";
$mattermost .= "|:--|\n";
$mattermost .= "| ".$mail." |\n";
$mattermost .= "\n";
mattermost($mattermost);


if (mail($to, $subject, $message, $headers)) {
    $redirect='https://tyneo.net/fr/quiz/'.$ref.'.html?ts='.$ts;
} else {
    $redirect='https://tyneo.net/fr/quiz/'.$ref.'.html?ts='.$ts;
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
