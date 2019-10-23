<?php

/**
* This controller represents a set of functions that interact with the Travel Panel API.
*/
namespace TravelPanel\Controller;
use Symfony\Component\Yaml\Yaml;
use TravelPanel\Helpers\CurlRequest;

class Cars extends CurlRequest
{
	/**
	 * Book a Car.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function book(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['cars_book'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1);
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
	 * Cancel Car.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function cancel(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['cars_cancel'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1);
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
	 * Get Car Rental Locations.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function locations(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['cars_locations'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1);
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
	 * Get Rates.
	 * @param @see api-docs
	 * @throws Exception...
	 * @return JSON Response
	 */
	public function rates(array $data)
	{
		$yaml = $this->getYaml("api");
		$response = [];
		$url = $yaml['cars_rates'];
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