## Authorize with own MPI

### Visa

__Request__

```json
{
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
}
```

__Response__

```json
{
	"_links": {
		"authReversal": {
			"method": "POST",
			"href": "/pts/v2/payments/6624466763366056003954/reversals"
		},
		"self": {
			"method": "GET",
			"href": "/pts/v2/payments/6624466763366056003954"
		},
		"capture": {
			"method": "POST",
			"href": "/pts/v2/payments/6624466763366056003954/captures"
		}
	},
	"clientReferenceInformation": {
		"code": "authz_visa"
	},
	"consumerAuthenticationInformation": {
		"token": "Axj/7wSTZxzxr1ovbwlyAEEs2bMmjRs2btmbNs2YNWzBgzctWift1R3rMAKft1R3rMaQOnECMiGTSTLF18C7qYIZNnHPGvWi9vCXIAAA6xDZ"
	},
	"id": "6624466763366056003954",
	"orderInformation": {
		"amountDetails": {
			"authorizedAmount": "100.00",
			"currency": "USD"
		}
	},
	"paymentAccountInformation": {
		"card": {
			"type": "001"
		}
	},
	"paymentInformation": {
		"tokenizedCard": {
			"type": "001"
		},
		"scheme": "VISA DEBIT",
		"bin": "445653",
		"issuer": "Test Issuer Name 3",
		"card": {
			"type": "001"
		},
		"binCountry": "US"
	},
	"processorInformation": {
		"systemTraceAuditNumber": "176526",
		"approvalCode": "831000",
		"merchantAdvice": {
			"code": "01",
			"codeRaw": "M001"
		},
		"responseDetails": "ABC",
		"networkTransactionId": "016153570198200",
		"retrievalReferenceNumber": "224806176526",
		"consumerAuthenticationResponse": {
			"code": "2",
			"codeRaw": "2"
		},
		"transactionId": "016153570198200",
		"responseCode": "00",
		"avs": {
			"code": "Y",
			"codeRaw": "Y"
		}
	},
	"reconciliationId": "6624466763366056003954",
	"riskInformation": {
		"localTime": "23:44:36",
		"score": {
			"result": "38",
			"factorCodes": [
				"H"
			],
			"modelUsed": "default"
		},
		"infoCodes": {
			"address": [
				"COR-BA"
			],
			"phone": [
				"RISK-PH",
				"TF-AC"
			],
			"globalVelocity": [
				"VEL-ADDR",
				"VEL-NAME",
				"VELI-CC",
				"VELL-CC",
				"VELL-EM",
				"VELL-SA",
				"VELS-CC",
				"VELV-CC",
				"VELV-EM",
				"VELV-SA"
			],
			"velocity": [
				"MVEL-R5007",
				"MVEL-R5011"
			],
			"suspicious": [
				"MUL-EM"
			],
			"identityChange": [
				"MORPH-B",
				"MORPH-C",
				"MORPH-S"
			],
			"internet": [
				"FREE-EM",
				"RISK-EM"
			]
		},
		"profile": {
			"earlyDecision": "ACCEPT"
		},
		"casePriority": "3"
	},
	"status": "AUTHORIZED",
	"submitTimeUtc": "2022-09-06T06:44:37Z"
}
```

---

### Mastercard

__Request__

```json
{
	"clientReferenceInformation": {
		"code": "authz_mc"
	},
	"orderInformation": {
		"amountDetails": {
			"currency": "USD",
			"totalAmount": "300"
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
			"type": "002",
			"number": "5200000000002235",
			"expirationMonth": "01",
			"expirationYear": 2023
		}
	},
	"buyerInformation": {
		"mobilePhone": "1245789632"
	},
	"processingInformation": {
		"ecommerceIndicator": "spa"
	},
	"consumerAuthenticationInformation": {
		"ucafCollectionIndicator": "2",
		"ucafAuthenticationData": "Y2FyZGluYWxjb21tZXJjZWF1dGg=",
		"directoryServerTransactionId": "855b04fe-7656-416a-89ef-b4647f85e606",
		"paSpecificationVersion": "2.2.0"
	}
}
```

__Response__

```json
{
	"_links": {
		"authReversal": {
			"method": "POST",
			"href": "/pts/v2/payments/6624465502616886903954/reversals"
		},
		"self": {
			"method": "GET",
			"href": "/pts/v2/payments/6624465502616886903954"
		},
		"capture": {
			"method": "POST",
			"href": "/pts/v2/payments/6624465502616886903954/captures"
		}
	},
	"clientReferenceInformation": {
		"code": "authz_mc"
	},
	"consumerAuthenticationInformation": {
		"token": "Axj/7wSTZxztNLUlDwSSAEEs2bMmjRs1asGTZi2cOGzlgzctWift1R3koASft1R3koaQP6mBGRDJpJli6+Bd1MCcmzjnaaWpKHgkkAAAGgQO"
	},
	"id": "6624465502616886903954",
	"orderInformation": {
		"amountDetails": {
			"authorizedAmount": "300.00",
			"currency": "USD"
		}
	},
	"paymentAccountInformation": {
		"card": {
			"type": "002"
		}
	},
	"paymentInformation": {
		"tokenizedCard": {
			"type": "002"
		},
		"scheme": "MASTERCARD CREDIT",
		"bin": "520000",
		"accountType": "CLASSIC",
		"issuer": "Test Issuer",
		"card": {
			"type": "002"
		},
		"binCountry": "US"
	},
	"processorInformation": {
		"systemTraceAuditNumber": "172228",
		"approvalCode": "831000",
		"merchantAdvice": {
			"code": "01",
			"codeRaw": "M001"
		},
		"responseDetails": "ABC",
		"networkTransactionId": "MCC4456290906",
		"retrievalReferenceNumber": "224806172228",
		"consumerAuthenticationResponse": {
			"code": "2",
			"codeRaw": "2"
		},
		"transactionId": "MCC4456290906",
		"responseCode": "00",
		"avs": {
			"code": "Y",
			"codeRaw": "Y"
		}
	},
	"reconciliationId": "6624465502616886903954",
	"riskInformation": {
		"localTime": "23:42:30",
		"score": {
			"result": "23",
			"factorCodes": [
				"H",
				"P"
			],
			"modelUsed": "default"
		},
		"infoCodes": {
			"address": [
				"COR-BA"
			],
			"phone": [
				"RISK-PH",
				"TF-AC"
			],
			"globalVelocity": [
				"VEL-ADDR",
				"VEL-NAME",
				"VELL-CC",
				"VELL-EM",
				"VELL-SA",
				"VELV-CC",
				"VELV-EM",
				"VELV-SA"
			],
			"velocity": [
				"MVEL-R5007",
				"MVEL-R5011"
			],
			"suspicious": [
				"MUL-EM"
			],
			"identityChange": [
				"MORPH-B",
				"MORPH-C",
				"MORPH-S"
			],
			"internet": [
				"FREE-EM",
				"RISK-EM"
			]
		},
		"profile": {
			"earlyDecision": "ACCEPT"
		},
		"casePriority": "3"
	},
	"status": "AUTHORIZED",
	"submitTimeUtc": "2022-09-06T06:42:31Z"
}
```
