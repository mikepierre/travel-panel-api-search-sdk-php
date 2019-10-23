<?php
/**
* 
*/

namespace TravelPanel\Controller;
use Symfony\Component\Yaml\Yaml;
use TravelPanel\Helpers\CurlRequest;

class Transfers extends CurlRequest
{
	public function book(array $data)
	{
		$yaml = $this->getYaml('api');
		$response = [];
		$url = $yaml['transfer_book'];
		$auth = $yaml['auth'];

		$paramaters = (
			!empty($data['params']) ? http_build_query($data['params']) : 
			throw new Exception("Error Processing Request", 1)
		);

		$CurelRequest = new CurelRequest();

		try{
			$CurelRequest->sendRequest(
				[
					'url'=>$url,
					'paramaters'=>$paramaters,
					'auth'=>$auth
				]
			);
		} catch(Exception $e) {
			return $e;
		}
		return $response;
	}

	public function getRates(array $data)
	{
		$yaml = $this->getYaml('api');
		$response = [];
		$url = $yaml['transer_search'];
		$auth = $yaml['auth'];
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