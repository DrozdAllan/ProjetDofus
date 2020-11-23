<?php 


function RandomPseudo() {

$curl = curl_init('https://fakerapi.it/api/v1/users?_quantity=1');
curl_setopt_array($curl, [
CURLOPT_CAINFO          => __DIR__ . DIRECTORY_SEPARATOR . 'cert.cer',
CURLOPT_RETURNTRANSFER  => true,
CURLOPT_TIMEOUT         => 1
]);

$data = curl_exec($curl);
if ($data === false) {
var_dump(curl_error($curl));
} else {
// var_dump(curl_getinfo($curl, CURLINFO_HTTP_CODE));
$data = json_decode($data, true);

$Result = ($data['data'][0]['username']);

}
curl_close($curl);


return $Result;

};

print_r(RandomPseudo());

?>