<?php

$payerAuththSetupReply_deviceDataCollectionURL = 'https://centinelapistag.cardinalcommerce.com/V1/Cruise/Collect';
$payerAuthSetupReply_accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiIyNTk3ODE1Yi01MmIwLTQyYWYtOWU5MS0yMGYyZDAwMGVhMWMiLCJpYXQiOjE2NjIwMTAzNDUsImlzcyI6IjVkZDgzYmYwMGU0MjNkMTQ5OGRjYmFjYSIsImV4cCI6MTY2MjAxMzk0NSwiT3JnVW5pdElkIjoiNTVlZjNmMGNmNzIzYWE0MzFjOTliNDE1IiwiUmVmZXJlbmNlSWQiOiJlNmU2ZWZiNS02OWRkLTQxOTQtYTAzMy1lOWRmYWY3M2Y4OGYifQ.EZiyUIvM97yqGVW77ZffdifiTxBPjFD3EzI0gE4xC5o';

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

</body>
<script>
    window.onload = function() {
        var cardinalCollectionForm = document.querySelector('#cardinal_collection_form');
        if (cardinalCollectionForm) cardinalCollectionForm.submit();
    }

    window.addEventListener('message', function(event) {
        if (event.origin === 'https://centinelapistag.cardinalcommerce.com') {
            console.log(event.data);
            alert(event.data);
        }
    }, false);
</script>
</html>
