<?php

// https://thisinterestsme.com/php-curl-proxy/

//The IP address of the proxy you want to send your request through.
$proxyIP = '127.0.0.1';

//The port that the proxy is listening on.
$proxyPort = '3128';

//The username for authenticating with the proxy.
// $proxyUsername = 'myusername';

// //The password for authenticating with the proxy.
// $proxyPassword = 'mypassword';

// The URL you want to send a cURL proxy request to.
$url = 'https://httpbin.org/post';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);

//Set the proxy IP.
curl_setopt($ch, CURLOPT_PROXY, $proxyIP);

//Set the port.
curl_setopt($ch, CURLOPT_PROXYPORT, $proxyPort);

//Specify the username and password.
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$proxyUsername:$proxyPassword");

// Skip SSL Verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// POST
$payload = json_encode(array('name' => 'John Doe'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Date: ' . gmdate(DATE_RFC822)
));

//Execute the request.
$output = curl_exec($ch);

//Check for errors.
if (curl_errno($ch)) {
    throw new Exception(curl_error($ch));
}

//Print the output.
echo $output;

// EOF