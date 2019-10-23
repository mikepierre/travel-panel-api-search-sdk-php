<?php

/**
* This object send request to HTTP utlizing CURL.
*/
namespace TravelPanel\Helpers;

class CurlRequest
{
	/**
	* Send Request to HTTP.
	* @param array of data to build response
	* @return connection response & its data
	**/
	protected function sendRequest($data)
	{
		// Build the endpoint
		$endpoint = $data['url'].$data['params'].'&'.$data['auth'];

        try {
	        $ch = curl_init();
	        // Will return the response, if false it print the response
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        // Set the url
	        curl_setopt($ch, CURLOPT_URL,$endpoint );
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