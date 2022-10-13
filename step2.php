<?php

include_once('./config.php');

$payerAuththSetupReply_deviceDataCollectionURL = $config[$config_env]['deviceDataCollectionURL'];
$payerAuthSetupReply_accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiI2ZjRhYzMyNS03ODViLTQwNGYtODgyNS01YjI0YjRlNjJhNWUiLCJpYXQiOjE2NjU2OTM5MDcsImlzcyI6IjVkZDgzYmYwMGU0MjNkMTQ5OGRjYmFjYSIsImV4cCI6MTY2NTY5NzUwNywiT3JnVW5pdElkIjoiNTVlZjNmMGNmNzIzYWE0MzFjOTliNDE1IiwiUmVmZXJlbmNlSWQiOiJhMjc1YjZlZS1mOTk4LTQzYjQtYmMxMi05OTA0NGNjZDVmNjUifQ.MxlTtz5ZuwBR6yslhvWx-QKRxTEvKb8ECE8QSRfIsuU';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 2</title>
</head>
<body>

<h2>Step 2: Device Data Collection Iframe</h2>
<hr/>

<iframe id="cardinal_collection_iframe" name="collectionIframe" height="10" width="10" style="display: none;"></iframe>

<form id="cardinal_collection_form" method="POST" target="collectionIframe" action="<?= $payerAuththSetupReply_deviceDataCollectionURL; ?>">
    <input id="cardinal_collection_form_input" type="hidden" name="JWT" value="<?= $payerAuthSetupReply_accessToken; ?>">
</form>

event.data: <pre id="event_data"></pre>

</body>
<script>
    window.onload = function() {
        var cardinalCollectionForm = document.querySelector('#cardinal_collection_form');
        if (cardinalCollectionForm) cardinalCollectionForm.submit();
    }

    window.addEventListener('message', function(event) {
        if (event.origin === '<?php echo $config[$config_env]['cardinalCollectionFormOrigin'] ?>') {
            console.log(event.data);
            // alert(event.data);
            let event_data = document.querySelector('#event_data');
            event_data.innerHTML = JSON.stringify(event.data, null, 2);
        }
    }, false);

    document.querySelector('#event_data').innerHTML = "...";

</script>
</html>
