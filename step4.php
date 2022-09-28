<h2>Step 4: Step-Up IFrame</h2>
<hr/>
<?php

// TODO: PROD
$stepUpUrl = 'https://centinelapistag.cardinalcommerce.com/V2/Cruise/StepUp';

// accessToken
$jwt = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJhYjQyMGU0MC0wODFhLTQ3ZWYtYTVhMC05N2ZhNWRlNGE0YTQiLCJpYXQiOjE2NjQzMzkxNjMsImlzcyI6IjVkZDgzYmYwMGU0MjNkMTQ5OGRjYmFjYSIsImV4cCI6MTY2NDM0Mjc2MywiT3JnVW5pdElkIjoiNTVlZjNmMGNmNzIzYWE0MzFjOTliNDE1IiwiUGF5bG9hZCI6eyJBQ1NVcmwiOiJodHRwczovLzBtZXJjaGFudGFjc3N0YWcuY2FyZGluYWxjb21tZXJjZS5jb20vTWVyY2hhbnRBQ1NXZWIvY3JlcS5qc3AiLCJQYXlsb2FkIjoiZXlKdFpYTnpZV2RsVkhsd1pTSTZJa05TWlhFaUxDSnRaWE56WVdkbFZtVnljMmx2YmlJNklqSXVNUzR3SWl3aWRHaHlaV1ZFVTFObGNuWmxjbFJ5WVc1elNVUWlPaUl3TVRZMFpqaGlNQzB5WldWa0xUUTBaak10WWpVMlpTMWhabU01TnpSaU16VTRNR0lpTENKaFkzTlVjbUZ1YzBsRUlqb2lZalZpTkRrMU9UZ3RPVFZtT0MwMFpETm1MV0UyT0RVdE5XWXhOall5Tm1FeE5tSXdJaXdpWTJoaGJHeGxibWRsVjJsdVpHOTNVMmw2WlNJNklqQXpJbjAiLCJUcmFuc2FjdGlvbklkIjoicGpnbk9ZTkYwb1l0c2Q0VGxpcDAifSwiT2JqZWN0aWZ5UGF5bG9hZCI6dHJ1ZSwiUmV0dXJuVXJsIjoiaHR0cHM6Ly9jeWJzLWFwaS5uZ3Jvay5pby9yZXNwb25zZS5waHAifQ.4oMumd5UzF6uV9xtbzYhXSk55tMRjcYhDqO3fBFOaos';

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
