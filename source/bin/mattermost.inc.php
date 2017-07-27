<?php
function mattermost($body, $room = "engineering", $icon = ":longbox:") {
  $target = 'https://mattermost.jirachi.tyneo.net/hooks/1bg1zgizkib9mnpsp3tqzyymxy';

  $payload = 'payload={"text": "';
  $payload .= str_replace('"', '\"', $body);
  $payload .= '"}';

  $ch = curl_init();
  // set cURL options
  curl_setopt($ch, CURLOPT_URL, $target);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

  // enable return and execute
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $server_output = curl_exec ($ch);

  curl_close($ch);

  if($server_output === false) {
    file_put_contents('../../mattermost.db', $payload."\n", FILE_APPEND);
  }

  return $server_output;
}
