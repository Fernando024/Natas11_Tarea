<?php


$url = 'http://natas11.natas.labs.overthewire.org/';
$username = 'natas11';
$password = '1KFqoJXi6hRaPluAmk8ESDW4fSysRoIg';


$cookie = 'MGw7JCQ5OC04PT8jOSpqdmk3LT9pYmouLC0nICQ8anZpbS4qLSguKmkz';


$ch = curl_init();

// Configurar cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie: data=$cookie"));

// Configurar la autenticación básica
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");


$response = curl_exec($ch);

echo $response;

curl_close($ch);
?>
