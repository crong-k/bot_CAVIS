<?php

$method * $_SERVER['REQUEST_METHOD'];

//Process only when method is POST
if($method == "POST"){
  $requestBody = file_get_contents('php://input');
  $json = json_decode($requestBody);
  $text = $json->result->parameter->text;
  switch($text){
    case 'cavis':
      $speech = 'Hi, i am cavis';
      break;
    case 'C3DB' :
      $speech = 'Ok lalalalala'
      $ch = curl_init('http://www.naver.com');
      curl_exec($ch);
      break;
    default:
      $speech = 'Sorry?'
      break;
  }

  $response = new \stdClass();
  $response->speech = "";
  $response->displayText="";
  $response->source="webhook";
  echo json_encode($response);
  
}
else {
  echo "Method not allowed"
}
 ?>
