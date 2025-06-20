<?php
$defaultData = [
    'coins' => ['A' => 100, 'B' => 100, 'C' => 100, 'D' => 100, 'E' => 100],
    'level' => 0,
    'xp' => 0,
    'xpThreshold' => 100
];

file_put_contents('pet-save.json', json_encode($defaultData));
echo json_encode(['status' => 'reset_success']);
?>
