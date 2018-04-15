<?php

// Intrinio api authentication
$username = 'b7aac9b614877ef4b070cf462756d8bb';
$password = 'ebdf24e3287a1962c941ae9076a3127c';

$context = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("$username:$password")
    )
));

/*
 * Function to retrieve Intrinio data as array
 * API call returns only page 1 by default with 100 records
 */
function intDataToArray($code) {
    global $context;
    $url = "https://api.intrinio.com/prices?identifier=" . $code;
    $json = file_get_contents($url, false, $context);
    $array = json_decode($json, JSON_PRETTY_PRINT);
    $array_reverse = array_reverse($array['data']);
    return $array_reverse;
}

// Tickers to get
$tickers = ['ASMB', 'TSRO', 'BPMC'];

// Return data as Json for highchart
$series = [];
foreach ($tickers as $idx => $ticker) {
    $intData = intDataToArray($ticker);
    $data = [];
    foreach ($intData as $key => $val) {
        $data[] = [strtotime($val['date']) * 1000, $val['close']];
    }
    $series[] = ['name' => $ticker, 'data' => $data];
}

echo json_encode(['data' => $series]);