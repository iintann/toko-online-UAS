<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
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
  $data_provinsi = $array_response["rajaongkir"]["results"];

  // echo "<pre>";
  // print_r($data_provinsi);
  // echo "</pre>";


  echo "<option>Pilih Provinsi</option>";

  foreach ($data_provinsi as $key => $value)
  {
    echo "<option value='".$value["province_id"]."' id_provinsi='".$value["province_id"]."'> ";
    echo $value["province"];
    echo "</option>";
  }
}