<h2>Step 2: Device Data Collection Iframe</h2>
<hr/>
<?php

$payerAuththSetupReply_deviceDataCollectionURL = 'https://centinelapistag.cardinalcommerce.com/V1/Cruise/Collect';
$payerAuthSetupReply_accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJlNTFlODZkYS02YWM5LTQ3NzktOGZlNS02Yjk0YTQxMWY5NWYiLCJpYXQiOjE2NjIzMDk3NDcsImlzcyI6IjVkZDgzYmYwMGU0MjNkMTQ5OGRjYmFjYSIsImV4cCI6MTY2MjMxMzM0NywiT3JnVW5pdElkIjoiNTVlZjNmMGNmNzIzYWE0MzFjOTliNDE1IiwiUmVmZXJlbmNlSWQiOiI2OWM3ZDljNC1iYmFkLTRiZTctOTBhNS0yYmI5YTgwY2E1NTAifQ.v34B7aRzeAXbF_twgzXhsh3nbF81nlj9-A2t2tut8iQ';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<iframe id="cardinal_collection_iframe" name="collectionIframe" height="10" width="10" style="display: none;"></iframe>

<form id="cardinal_collection_form" method="POST" target="collectionIframe" action="<?= $payerAuththSetupReply_deviceDataCollectionURL; ?>">
    <input id="cardinal_collection_form_input" type="hidden" name="JWT" value="<?= $payerAuthSetupReply_accessToken; ?>">
</form>

event.data: <code id="event_data"></code>

</body>
<script>
    window.onload = function() {
        var cardinalCollectionForm = document.querySelector('#cardinal_collection_form');
        if (cardinalCollectionForm) cardinalCollectionForm.submit();
    }

    window.addEventListener('message', function(event) {
        if (event.origin === 'https://centinelapistag.cardinalcommerce.com') {
            console.log(event.data);
            // alert(event.data);
            let event_data = document.querySelector('#event_data');
            event_data.innerHTML = event.data;
        }
    }, false);

    document.querySelector('#event_data').innerHTML = "...";

</script>
</html>
