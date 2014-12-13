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

    $clientInstance = new VedicRishiClient($userId, $apiKey);

    Replace $userId and $apiKey with your id and keys respectively.
3. Call the api
    $response = $clientInstance->call(<apiName>, <date>, <month>...);

4. The $response will be a JSON encoded data returned as an API response.
