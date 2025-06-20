<?php
$filename = 'pet-save.json';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if (file_exists($filename)) {
  echo file_get_contents($filename);
} else {
  echo json_encode([
    "coins" => [ "A" => 100, "B" => 100, "C" => 100, "D" => 100, "E" => 100 ],
    "level" => 0,
    "xp" => 0,
    "xpThreshold" => 100
  ]);
}
?>
