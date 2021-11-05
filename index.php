<?php
\header('Content-Type: text/html; charset=utf-8');
\error_reporting(E_ALL);
\ini_set('display_startup_errors', 1);
\ini_set('display_errors', 1);

require 'vendor/autoload.php';

use Curl\Curl;

$curl = new Curl();

$end_point_google_maps = 'https://maps.googleapis.com/maps/api/geocode/json';
$api_key_google_maps   = 'preencher a api key aqu :)';
$enderecos_formatados  = [];

$enderecos = [
	"ALAMEDA JAUAPERI, 45",
	"AVENIDA DO ESTADO, 1036",
	"AVENIDA ONZE DE JUNHO, 1519",
	"AVENIDA AFONSO SAMPAIO E SOUSA, 1428",
	"AVENIDA RAGUEB CHOHFI, 4285",
	"AVENIDA VICENTE RAO, 1001",
	"AVENIDA BERNARDINO DE CAMPOS, 307",
	"AVENIDA DR. GUILHERME DUMONT VILARES, 1151",
];


foreach ($enderecos as $indice => $endereco){
	$curl->get($end_point_google_maps, ['address' => $endereco, 'key' => $api_key_google_maps]);

	if(!empty($curl->response->results)){
		$enderecos_formatados[] = [
			'endereco'  => $endereco,
			'latitude'  => $curl->response->results[0]->geometry->location->lat,
			'longitude' => $curl->response->results[0]->geometry->location->lng,
		];
	}else{
		$enderecos_formatados[] = [
			'endereco'  => $endereco,
			'latitude'  => '',
			'longitude' => '',
		];
	}
}

debug2($enderecos_formatados);
exit;
