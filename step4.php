<?php

include_once('./config.php');

$stepUpUrl = $config[$config_env]['cardinalStepUpURL'];

// accessToken
$jwt = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJmMWFmNTRmOC03ZWRlLTRmYjgtYmU4Mi1jZWUyMjQzMWE4MDciLCJpYXQiOjE2NjU2OTQwMTQsImlzcyI6IjVkZDgzYmYwMGU0MjNkMTQ5OGRjYmFjYSIsImV4cCI6MTY2NTY5NzYxNCwiT3JnVW5pdElkIjoiNTVlZjNmMGNmNzIzYWE0MzFjOTliNDE1IiwiUGF5bG9hZCI6eyJBQ1NVcmwiOiJodHRwczovLzBtZXJjaGFudGFjc3N0YWcuY2FyZGluYWxjb21tZXJjZS5jb20vTWVyY2hhbnRBQ1NXZWIvY3JlcS5qc3AiLCJQYXlsb2FkIjoiZXlKdFpYTnpZV2RsVkhsd1pTSTZJa05TWlhFaUxDSnRaWE56WVdkbFZtVnljMmx2YmlJNklqSXVNUzR3SWl3aWRHaHlaV1ZFVTFObGNuWmxjbFJ5WVc1elNVUWlPaUpoTURrMFpUZ3pZUzFqWmpsbUxUUXlOVEV0T0RJNVl5MWpOelF4TlRnMlkyRXpOallpTENKaFkzTlVjbUZ1YzBsRUlqb2lObUl6WXpsbE5tWXRaV00wTVMwMFlUWXpMVGs0TVRFdE5qYzNOalUxWldJM05HUTNJaXdpWTJoaGJHeGxibWRsVjJsdVpHOTNVMmw2WlNJNklqQXpJbjAiLCJUcmFuc2FjdGlvbklkIjoia1lHbjRreEFRY0JwbHdxdU9vWjAifSwiT2JqZWN0aWZ5UGF5bG9hZCI6dHJ1ZSwiUmV0dXJuVXJsIjoiaHR0cDovL2xvY2FsaG9zdDo5MDAwL3Jlc3BvbnNlLnBocCJ9.UT8mt76EUBBo3zvA2_6lnBLvpTVQlPRvq4RfjsrR1_Y';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 4</title>
</head>
<body>

<h2>Step 4: Step-Up IFrame</h2>
<hr/>

<div style="width: 100%; text-align: center">
<iframe name="step-up-iframe" width="500" height="600" frameBorder="1"></iframe>
<form id="step-up-form" target="step-up-iframe" method="post" action="<?= $stepUpUrl ?>">
    <input type="hidden" name="JWT" value="<?= $jwt ?>" />
    <input type="hidden" name="MD" value="optionally_include_custom_data_that_will_be_returned_as_is" />
</form>
</div>
</body>
<script>
    window.onload = function() {
        var stepUpForm = document.querySelector('#step-up-form');
        if (stepUpForm) stepUpForm.submit();
    }
</script>
</html>