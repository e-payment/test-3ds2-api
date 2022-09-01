## Authorize with Cybersource Payer Authentication

__Request__

```json
{
	"clientReferenceInformation": {
		"code": "3DSHarness_PaValidateRestAPI"
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
			"expirationYear": 2023
		}
	},
	"buyerInformation": {
		"mobilePhone": "1245789632"
	},
	"consumerAuthenticationInformation": {
		"authenticationTransactionId": "2S0LWrD1ShR1KCO5U6C0"
	}
}
```

__Response__

```json
{
	"clientReferenceInformation": {
		"code": "3DSHarness_PaValidateRestAPI"
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
			"expirationYear": 2023
		}
	},
	"buyerInformation": {
		"mobilePhone": "1245789632"
	},
	"consumerAuthenticationInformation": {
		"authenticationTransactionId": "2S0LWrD1ShR1KCO5U6C0"
	}
}
```
