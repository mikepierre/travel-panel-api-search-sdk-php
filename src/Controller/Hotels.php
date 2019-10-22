<?php

/**
* 
*/
use TravelPanel\Controller;
use Symfony\Component\Yaml\Yaml;


class Hotels extends Curl
{
	
	function __construct()
	{
		# code...
	}

	public function book(array $data)
	{
		$curl = new curl();

		$response = 
		$curl->sendRequest(
			['url'=>,'paramaters'=>,'auth'=>]
		);

		return $response;
	}

	public function getExternalMarkets(){}

	public function getlIds(){}

	public function getImages(){}

	public function getProfileById(){}

	public function getLocations(){}

	public function getRatesByIds(){}

	public function getRates(){}
}
?>