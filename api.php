<?php
// Parse GET parameters
$slackName = isset($_GET['slack_name']) ? $_GET['slack_name'] : "";
$track = isset($_GET['track']) ? $_GET['track'] : "";

// Get the current day of the week
$currentDay = date("l");

// Get current UTC time
$utcTime = gmdate("Y-m-d\TH:i:s\Z");

// Create the response array
$response = [
    "slack_name" => $slackName,
    "current_day" => $currentDay,
    "utc_time" => $utcTime,
    "track" => $track,
    "github_file_url" => "https://github.com/Splendidabbey/backend-HNGX/blob/main/api.php",
    "github_repo_url" => "https://github.com/Splendidabbey/backend-HNGX",
    "status_code" => 200
];

// Encode the response as JSON
$jsonResponse = json_encode($response);

// Set the response content type to JSON
header("Content-Type: application/json");

// Return the JSON response
echo $jsonResponse;
?>
