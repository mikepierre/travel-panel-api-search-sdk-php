<?php

/**
* This controller represents a set of functions that interact with the Travel Pane API.
*/
namespace TravelPanel\Controller;
use Symfony\Component\Yaml\Yaml;
use TravelPanel\Helpers\Curl;

class Hotels extends Curl
{
	
	function __construct(){}
	
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
			throw new Exception("Error Processing Request", 1);
		);

		$curl = new Curl();

		try {
			$response = 
			$curl->sendRequest(
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

	public function getExternalMarkets(){}

	public function getlIds(){}

	public function getImages(){}

	public function getProfileById(){}

	public function getLocations(){}

	public function getRatesByIds(){}

	public function getRates(){}

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