Vedic-Rishi-Astro-API-PHP-Client
================================

This is PHP client to consume Vedic Rishi Astro APIs

Where to get API Key
====================

You can visit https://www.vedicrishiastro.com/astro-api/ to get the astrology API key to be used for your websites or
mobile applications.

How to Use
==========

1. Copy VedicRishiClient.php class file to your local or server system
2. Instantiate as follows -
    ```php
    $clientInstance = new VedicRishiClient($userId, $apiKey);
    ```
    Replace ```php $userId ``` and ```php $apiKey``` with your id and keys respectively.
3. Call the api
    ```php
    $response = $clientInstance->call($apiName, $date, $month, $year, $hour, $min, $lat, $lon, $tzone);
    ```
    View test.php for more details about calling APIs.
    
4. The ```php $response ``` will be a JSON encoded data returned as an API response. Eg. for ```php /planets/ ``` api - 
    ```js
    [
        {
            "id":0,
            "name":"SUN",
            "fullDegree":95.83230788313479,
            "normDegree":5.8323078831347885,"speed":0.9547191489638442,
            "isRetro":"false",
            "sign":"CANCER",
            "signLord":"MOON",
            "nakshatra":"PUSHYA",
            "nakshatraLord":7,
            "house":11
        }
        ...
    ]
    ```
