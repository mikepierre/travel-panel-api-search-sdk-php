<?php

/**
* This controller represents a set of functions that interact with the Travel Pane API.
*/
namespace TravelPanel\Controller;
use Symfony\Component\Yaml\Yaml;
use TravelPanel\Helpers\CurlRequest;

class Hotels extends CurlRequest
{	
	/**
	 * Book Hotel.
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function book(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['hotels_book'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1)
		);

		$CurlRequest = new CurlRequest();

		try {
			$response = 
			$CurlRequest->sendRequest(
				[
				    'url'=>$url,
				    'paramaters'=>$paramaters,
				    'auth'=>$auth
			    ]
			);
		} catch (Exception $e) {
		    return $e;	
		}

		return $response;
	}

	/**
	 * Get External Hotel Market Data.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function getExternalMarkets(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['hotels_get_external_markets'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1)
		);

		$CurlRequest = new CurlRequest();

		try {
			$response = 
			$CurlRequest->sendRequest(
				[
				    'url'=>$url,
				    'paramaters'=>$paramaters,
				    'auth'=>$auth
			    ]
			);
		} catch (Exception $e) {
		    return $e;	
		}

		return $response;
	}
	/**
	 * Get list of hotel Ids.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function getlIds(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['hotels_get_ids'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1)
		);

		$CurlRequest = new CurlRequest();

		try {
			$response = 
			$CurlRequest->sendRequest(
				[
				    'url'=>$url,
				    'paramaters'=>$paramaters,
				    'auth'=>$auth
			    ]
			);
		} catch (Exception $e) {
		    return $e;	
		}

		return $response;
	}
	/**
	 * Get Hotel Images.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function getImages(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['hotels_get_images'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1)
		);

		$CurlRequest = new CurlRequest();

		try {
			$response = 
			$CurlRequest->sendRequest(
				[
				    'url'=>$url,
				    'paramaters'=>$paramaters,
				    'auth'=>$auth
			    ]
			);
		} catch (Exception $e) {
		    return $e;	
		}

		return $response;
	}
	/**
	 * Get Hotel Profiles by ID.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function getProfileById(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['hotels_get_profile_by_id'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1)
		);

		$CurlRequest = new CurlRequest();

		try {
			$response = 
			$CurlRequest->sendRequest(
				[
				    'url'=>$url,
				    'paramaters'=>$paramaters,
				    'auth'=>$auth
			    ]
			);
		} catch (Exception $e) {
		    return $e;	
		}

		return $response;
	}

	/**
	 * Get Locations.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function getLocations(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['hotels_get_locations'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1)
		);

		$CurlRequest = new CurlRequest();

		try {
			$response = 
			$CurlRequest->sendRequest(
				[
				    'url'=>$url,
				    'paramaters'=>$paramaters,
				    'auth'=>$auth
			    ]
			);
		} catch (Exception $e) {
		    return $e;	
		}

		return $response;
	}
	/**
	 * Get list of Hotel rates.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function getRates(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['hotels_get_rates'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1)
		);

		$CurlRequest = new CurlRequest();

		try {
			$response = 
			$CurlRequest->sendRequest(
				[
				    'url'=>$url,
				    'paramaters'=>$paramaters,
				    'auth'=>$auth
			    ]
			);
		} catch (Exception $e) {
		    return $e;	
		}

		return $response;
	}
	/**
	 * Search list of hotels.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function searchHotels(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['hotel_search'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1)
		);

		$CurlRequest = new CurlRequest();

		try {
			$response = 
			$CurlRequest->sendRequest(
				[
				    'url'=>$url,
				    'paramaters'=>$paramaters,
				    'auth'=>$auth
			    ]
			);
		} catch (Exception $e) {
		    return $e;	
		}

		return $response;
	}
	/**
	 * Get Yaml File.
	 * @param service - get the yaml service file you are trying to call.
	 * @return JSON Response
	 */
    private function getYaml($service)
    {
        $dir    = __DIR__.'/../../config';

        $d = ($dir.'/'.$service.'.yml');
        $yaml = Yaml::parse(file_get_contents($d));
        $yamlString = Yaml::dump($yaml);
        $data_yaml = \Symfony\Component\Yaml\Yaml::parse($yamlString);

        return $data_yaml;
    }
}
?>