<?php 

$url = 'http://www.reka.ch/mvc/FeWo/Trefferliste';
$data = array(
	'startIndex' => '0', 
	'anzahl' => '10',
	'language' => 'de',
	'Ferienwelt' => 'feriendorf',
	'LandJa' => '79225',
	'RegionJa' => '79547',
	'OrteJa' => '79553',
	'AnreiseDatumVon' => '2016-02-24',
	'AnreiseDatumBis' => '2016-03-01',
	'DauerMin' => '6',
	'DauerMax' => '8',
	'PersonenUndKinder' => '6',
	'key2' => 'value2'
	);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

//var_dump($result);

if(strpos($result,' 4')){
	mail('eglinetwork@gmail.com', 'Reka-Watch', $result);
	mail('tmasambe@hotmail.com', 'Reka-Watch', $result);
}

$data['RegionJa'] = '79266';
$data['OrteJa'] = '79686';

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

//var_dump($result);

if(strpos($result,' 4')){
	mail('eglinetwork@gmail.com', 'Reka-Watch', $result);
	mail('tmasambe@hotmail.com', 'Reka-Watch', $result);
}

echo ok;

?>
