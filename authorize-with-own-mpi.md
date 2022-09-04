## Authorize with own MPI

### Visa

__Request__

```json
{
	"clientReferenceInformation": {
		"code": "3DSHarness_PaValidateRestAPI1242"
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
			"number": "4456530000001005",
			"expirationMonth": "01",
			"expirationYear": 2023
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
        "directoryServerTransactionId": "0b787aba-e4d8-4531-ade5-4340aba642b3",
        "paSpecificationVersion": "2.1.0"
	}
}
```

__Response__

```json
{
    "_links": {
        "authReversal": {
            "method": "POST",
            "href": "/pts/v2/payments/6620112348296695503954/reversals"
        },
        "self": {
            "method": "GET",
            "href": "/pts/v2/payments/6620112348296695503954"
        },
        "capture": {
            "method": "POST",
            "href": "/pts/v2/payments/6620112348296695503954/captures"
        }
    },
    "clientReferenceInformation": {
        "code": "3DSHarness_PaValidateRestAPI1242"
    },
    "consumerAuthenticationInformation": {
        "token": "Axj/7wSTZuCDserZl9xSAEEs2bMmDFiyZtHDJy2bOWrVgzctWift1Lg8XAKft1Lg8XaQOnECMOGTSTLF18C7qYIZNm4IOx6tmX3FIAAA5R4M"
    },
    "id": "6620112348296695503954",
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
        "card": {
            "type": "001"
        }
    },
    "processorInformation": {
        "systemTraceAuditNumber": "178180",
        "approvalCode": "831000",
        "merchantAdvice": {
            "code": "01",
            "codeRaw": "M001"
        },
        "responseDetails": "ABC",
        "networkTransactionId": "016153570198200",
        "retrievalReferenceNumber": "224305178180",
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
    "reconciliationId": "6620112348296695503954",
    "riskInformation": {
        "localTime": "22:47:14",
        "score": {
            "result": "7",
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
                "VELI-CC",
                "VELL-CC",
                "VELL-EM",
                "VELS-CC",
                "VELV-CC",
                "VELV-EM",
                "VELV-SA"
            ],
            "velocity": [
                "MVEL-R5007"
            ],
            "suspicious": [
                "MUL-EM",
                "UNV-BIN"
            ],
            "identityChange": [
                "MORPH-B",
                "MORPH-C",
                "MORPH-E",
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
    "submitTimeUtc": "2022-09-01T05:47:15Z"
}
```

---

### Mastercard

__Request__

```json
{
	"clientReferenceInformation": {
		"code": "{{$randomUUID}}"
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
			"type": "002",
            "number": "5200000000001005",
			"expirationMonth": "12",
			"expirationYear": "2025"
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
        "directoryServerTransactionId": "e704fb7c-4a57-41f8-80bb-6d83cecdec8b",
        "paSpecificationVersion": "2.1.0"
	}
}
```