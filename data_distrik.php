<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=39&province=5",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: c1760ebca88ffd0dcac8faba5c7484ed"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // echo $response;
  $array_response = json_decode($response, true);
  $data_distrik = $array_response["rajaongkir"]["results"];

  // echo "<pre>";
  // print_r($data_distrik);
  // echo "</pre>";


  foreach ($data_distrik as $key => $value)
  {
    echo "<option>";
    echo $value["type"];
     echo $value["city_name"];
    echo "</option>";
  }
}