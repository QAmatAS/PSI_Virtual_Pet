<?php
$filename = 'pet-save.json';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $json = file_get_contents("php://input");
  $data = json_decode($json, true);

  if (isset($data['reset']) && $data['reset'] === true) {
    // Save only the reset flag
    file_put_contents($filename, json_encode(["reset" => true]));
  } else {
    // Remove reset flag before saving actual state
    unset($data['reset']);
    file_put_contents($filename, json_encode($data));
  }

  echo json_encode(["status" => "saved"]);
}
?>
