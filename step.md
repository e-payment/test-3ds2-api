
## Preparation

### [Getting Started](https://developer.cybersource.com/docs/cybs/en-us/payments/developer/all/rest/payments/GettingStarted.html)

### [Authentication](https://developer.cybersource.com/docs/cybs/en-us/payments/developer/all/rest/payments/authentication.html)

The REST API supports two types of security key:

- [Shared secret key](https://developer.cybersource.com/docs/cybs/en-us/payments/developer/all/rest/payments/authentication/createSharedKey.html) for using HTTP Signature authentication
- [P12 certificate](https://developer.cybersource.com/docs/cybs/en-us/payments/developer/all/rest/payments/authentication/createCert.html) for using JSON Web Token authentication

---

### Create a Shared Secret Key for HTTP Signature Authentication

Before you can send requests for Cybersource REST API services that are authenticated using HTTP Signature, you must create a shared secret key for your Cybersource merchant account in the Business Center


HTTP Signature authentication is provided by a Base-64 encoded transaction key, represented in a string format.
To create a shared secret key certificate:


1. Log in to the Business Center

   - Test Environment: https://businesscentertest.cybersource.com
   - Production Environment: https://businesscenter.cybersource.com

2. On the left navigation panel, click the __Payment Configuration__ icon.
3. Click __Key Management__ The Key Management page appears.
4. Click __Generate Key__ The Create Key page appears.
5. Select __REST Shared Secret__
6. Copy the generated key to your clipboard by clicking the clipboard icon, or click __Download key__ to download the shared secret.

Now you are ready to [Generate the Header](https://developer.cybersource.com/docs/cybs/en-us/payments/developer/all/rest/payments/GenerateHeader.html).

---

- [CyberSource/cybersource-rest-samples-php](https://github.com/CyberSource/cybersource-rest-samples-php)

---

Prepare API KEY

- https://developer.cybersource.com/api-reference-assets/index.html#static-api-endpoints-section

---



Step 4. 
After finish confirm OTP, will redirect to 

consumerAuthenticationInformation.returnUrl: "https://cybs-api.ngrok.io/response.php"

```
[Wed Sep 28 11:33:19 2022] TransactionId=pjgnOYNF0oYtsd4Tlip0&Response=&MD=optionally_include_custom_data_that_will_be_returned_as_isArray
(
    [TransactionId] => pjgnOYNF0oYtsd4Tlip0
    [Response] =>
    [MD] => optionally_include_custom_data_that_will_be_returned_as_is
)
Array
(
)

[Wed Sep 28 11:33:19 2022] 127.0.0.1:59914 [200]: /response.php
```

Step 5.

```
consumerAuthenticationInformation.authenticationTransactionId: "pjgnOYNF0oYtsd4Tlip0"
