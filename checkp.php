<?php

$jsonData = file_get_contents('balochxd72.json');
$data = json_decode($jsonData, true);

$key = $_GET['key'];
$device_id = $_GET['device'];

if (isset($data[$key])) {
  $expirationDate = strtotime($data[$key]['expirationDate']);
  $currentDate = strtotime(date('Y-m-d'));

  if ($expirationDate > $currentDate) {
    http_response_code(200);
    echo json_encode(array(
    'user' => $key,
    'name' => $data[$key]['name'],
    'joined' => $data[$key]['joined'],
    'expired' => $data[$key]['expirationDate'])); 
    if (count($data[$key]) < 4 || in_array($device_id, $data[$key])) {
        if (!in_array($device_id, $data[$key])) {
            $data[$key][] = $device_id;
        }
        file_put_contents('balochxd72.json', json_encode($data));

        // Return success response
        
    } else {
        // Return error response
        echo json_encode(['status' => 'error', 'message' => 'Device limit exceeded']);
    }


  } else {
    http_response_code(401);
    echo json_encode(array('error' => 'Key has expired'));
  }
} else {
  http_response_code(401);
  echo json_encode(array('error' => 'Invalid key'));
}