<?php

$config_env = 'test';

// ---------- //

// step 2
$config['test']['deviceDataCollectionURL']      = 'https://centinelapistag.cardinalcommerce.com/V1/Cruise/Collect';
$config['test']['cardinalCollectionFormOrigin'] = 'https://centinelapistag.cardinalcommerce.com';

// step 4
$config['test']['cardinalStepUpURL']            = 'https://centinelapistag.cardinalcommerce.com/V2/Cruise/StepUp';

// ---------- //

// step 2
$config['live']['deviceDataCollectionURL']      = 'https://centinelapi.cardinalcommerce.com/V1/Cruise/Collect';
$config['live']['cardinalCollectionFormOrigin'] = 'https://centinelapi.cardinalcommerce.com';

// step 4
$config['live']['cardinalStepUpURL']            = 'https://centinelapi.cardinalcommerce.com/V2/Cruise/StepUp';

// print_r($config_env . PHP_EOL);
// print_r($config[$config_env]);

// EOF