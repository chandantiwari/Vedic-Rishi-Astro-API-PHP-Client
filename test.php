<?php
/**
 * A php file to test the Vedic Rishi Client class
 * Author: Chandan Tiwari
 * Date: 06/12/14
 * Time: 5:42 PM
 */

require_once 'src/VedicRishiClient.php';


$userId = "<YourUserIdhere>";
$apiKey = "<YourApiKeyHere>";

// make some dummy data in order to call vedic rishi api
$data = array(

    'date' => 25,
    'month' => 12,
    'year' => 1988,
    'hour' => 4,
    'minute' => 0,
    'latitude' => 25.123,
    'longitude' => 82.34,
    'timezone' => 5.5
);

// api name which is to be called
$resourceName = "astro_details";

// instantiate VedicRishiClient class
$vedicRishi = new VedicRishiClient($userId, $apiKey);

// call horoscope apis
$responseData = $vedicRishi->call($resourceName, $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']);

// print response data
print_r($responseData);

// match making api to be called
$matchMakingReourceName = "match_ashtakoot_points";

// create female data and will treat above $data as male data to be sent to matchmaking api
$femaleData = array(

    'date' => 9,
    'month' => 12,
    'year' => 1990,
    'hour' => 12,
    'minute' => 56,
    'latitude' => 25.123,
    'longitude' => 82.34,
    'timezone' => 5.5
);

// call matchMakingCall method of vedicrishiclient for matching apis
$ashtakootaPoints = $vedicRishi->matchMakingCall($matchMakingReourceName, $data, $femaleData);

// print ashtakoota response data recieved from api
print_r($ashtakootaPoints);