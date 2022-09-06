<h2>Step 4: Step-Up IFrame</h2>
<hr/>
<?php

$stepUpUrl = 'https://centinelapistag.cardinalcommerce.com/V2/Cruise/StepUp';
$jwt = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJiNzU1ZDkyYi1mZTIzLTQ0NjEtYTU4NS00NDk0MzI1NmUwMGMiLCJpYXQiOjE2NjI0MzY1MjIsImlzcyI6IjVkZDgzYmYwMGU0MjNkMTQ5OGRjYmFjYSIsImV4cCI6MTY2MjQ0MDEyMiwiT3JnVW5pdElkIjoiNTVlZjNmMGNmNzIzYWE0MzFjOTliNDE1IiwiUGF5bG9hZCI6eyJBQ1NVcmwiOiJodHRwczovLzBtZXJjaGFudGFjc3N0YWcuY2FyZGluYWxjb21tZXJjZS5jb20vTWVyY2hhbnRBQ1NXZWIvY3JlcS5qc3AiLCJQYXlsb2FkIjoiZXlKdFpYTnpZV2RsVkhsd1pTSTZJa05TWlhFaUxDSnRaWE56WVdkbFZtVnljMmx2YmlJNklqSXVNaTR3SWl3aWRHaHlaV1ZFVTFObGNuWmxjbFJ5WVc1elNVUWlPaUl6TW1SbU9URm1aaTFoWkRjMUxUUmxORFF0T1RWbVlTMDNNamczTVdJeU56TmhZakVpTENKaFkzTlVjbUZ1YzBsRUlqb2lNelZqT1RJME1EUXROalk0TVMwMFltVTJMVGd5WkRndE5EQmhPRGhqTWpVMk5qSmxJaXdpWTJoaGJHeGxibWRsVjJsdVpHOTNVMmw2WlNJNklqQXpJbjAiLCJUcmFuc2FjdGlvbklkIjoibkRrcllVRGpCdDJncXVyc2J2czAifSwiT2JqZWN0aWZ5UGF5bG9hZCI6dHJ1ZSwiUmV0dXJuVXJsIjoiaHR0cHM6Ly9iYXktM2RzMi5uZ3Jvay5pby9yZXNwb25zZS5waHAifQ.TPkEb5CZbkKutJr0asTxeqvq0bxK0QiSFqVxjAE_qZM';

?>
<div style="width: 100%; text-align: center">
<iframe name="step-up-iframe" width="500" height="600" frameBorder="1"></iframe>
<form id="step-up-form" target="step-up-iframe" method="post" action="<?= $stepUpUrl ?>">
    <input type="hidden" name="JWT" value="<?= $jwt ?>" />
    <input type="hidden" name="MD" value="optionally_include_custom_data_that_will_be_returned_as_is" />
</form>
</div>
<script>
    window.onload = function() {
        var stepUpForm = document.querySelector('#step-up-form');
        if (stepUpForm) stepUpForm.submit();
    }
</script>
