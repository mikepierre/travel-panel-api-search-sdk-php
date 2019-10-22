<?php

/**
* This object send request to HTTP utlizing CURL.
*/
namespace TravelPanel\Helpers;

class CurlRequest
{
	protected function sendRequest($data)
	{
        try {
	        $ch = curl_init();
	        // Will return the response, if false it print the response
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        // Set the url
	        curl_setopt($ch, CURLOPT_URL,$transferUrl );
	        // Execute
	        $response=curl_exec($ch);
	        // Closing
	        curl_close($ch);
	        return json_decode($reponse,true);        	
        } catch (Exception $e) {
        	return $e;
        }
	}
}