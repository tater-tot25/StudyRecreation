<?php
// html/ajax/save_code.php
// Appends only random completion codes to results/codes.csv

header('Content-Type: application/json');

$filename = "../../results/codes.csv";

// Create file if missing
if (!file_exists($filename)) {
    $file = fopen($filename, "w");
    fwrite($file, "completion_code\n");
    fclose($file);
}

// Generate 8-character random code
$completion_code = substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ23456789'), 0, 8);

// Append to CSV
$file = fopen($filename, "a");
fwrite($file, $completion_code . "\n");
fclose($file);

// Return JSON
echo json_encode(["code" => $completion_code]);
?>
