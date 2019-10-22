<?php

/**
* 
*/
class Hotels extends Curl
{
	
	function __construct()
	{
		# code...
	}

	public function bookHotel()
	{
		$curl = new curl();

		$response = 
		$curl->sendRequest(
			['url'=>,'paramaters'=>,'auth'=>]
		);

		return $response;
	}

	public function getAllExternalMarkets(){}

	public function getALLHotelIds(){}

	public function getAllHotelImages(){}

	public function getHotelProfileById(){}

	public function getHotelProfileByLocation(){}

	public function getRates(){}

	public function searchHotels(){}
}
?>