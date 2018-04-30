<?php
namespace Meteorologia; 

class Previsao
{
	private $weatherUrl;

	private $appId;

	public function __construct()
	{
		$this->weatherUrl = "http://api.openweathermap.org/data/2.5/weather";
		$this->appId      = "1073c253a0f5dfe954702b19462aeef3";
	}

	public function getPrevisao($data)
	{	
		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET', $this->weatherUrl, [
			'query' => [
				'appid' => $this->appId,
				'id'	=> '3465059'
			]
		]);
		//$res->getStatusCode();
		return $res->getBody();
	}
}