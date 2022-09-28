<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://apitest.cybersource.com/risk/v1/authentications/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"clientReferenceInformation": {
		"code": "cybs_visa_3"
	},
	"orderInformation": {
		"amountDetails": {
			"currency": "USD",
			"totalAmount": "100"
		},
		"billTo": {
			"address1": "901 metro center blvd",
			"address2": "metro 3",
			"administrativeArea": "CA",
			"country": "US",
			"locality": "san francisco",
			"firstName": "John",
			"lastName": "Doe",
			"phoneNumber": "18007097779",
			"postalCode": "94404",
			"email": "email@email.com"
		}
	},
	"paymentInformation": {
		"card": {
			"type": "001",
			"expirationMonth": "12",
			"expirationYear": "2027",
			"number": "4456530000001096"
		}
	},
	"buyerInformation": {
		"mobilePhone": "1245789632"
	},
	"consumerAuthenticationInformation": {
		"referenceId": "222132d0-f2d1-4971-ba2f-6b444d9ee438",
		"transactionMode": "S",
		"returnUrl": "https://cybs-api.ngrok.io/response.php"
	}
}',
  CURLOPT_HTTPHEADER => array(
    'v-c-merchant-id: kr950210047',
    'Date: Wed, 28 Sep 2022 04:36:05 GMT',
    'Host: apitest.cybersource.com',
    'Digest: SHA-256=JJ2EiIvDnAZKnQcgKivhmI4B0r71xo67bimnUpG+IOM=',
    'Signature: keyid="f9a2e793-d5f4-450a-bc51-e3053e0f08e8", algorithm="HmacSHA256", headers="host date (request-target) digest v-c-merchant-id", signature="DzHMpVbVte01t9pdEl7BqKAe5GOybxaW4SmuueorNM4="',
    'Content-Type: application/json',
    'User-Agent: Mozilla/5.0'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

