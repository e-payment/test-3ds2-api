<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://apitest.cybersource.com/pts/v2/payments',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"clientReferenceInformation": {
		"code": "authz_visa"
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
			"number": "4456530000001005",
			"type": "001",
			"expirationMonth": "01",
			"expirationYear": "2023"
		}
	},
	"buyerInformation": {
		"mobilePhone": "1245789632"
	},
    "processingInformation": {
		"ecommerceIndicator": "vbv"
    },
	"consumerAuthenticationInformation": {
        "cavv": "Y2FyZGluYWxjb21tZXJjZWF1dGg=",
        "xid": "Y2FyZGluYWxjb21tZXJjZWF1dGg=",
        "directoryServerTransactionId": "ced3e30c-8088-4c6a-a6b3-264c377bf9ff",
        "paSpecificationVersion": "2.2.0"
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

// EOF
