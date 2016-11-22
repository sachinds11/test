<?php
session_start();
$access_token = $_SESSION['access_token'];
$instance_url = $_SESSION['instance_url'];

echo "access token ::". $access_token. "<br>";
echo "instance_url ::". $instance_url. "<br>";

function show_accounts($instance_url, $access_token) {
    $query = "SELECT Name, Id from Account LIMIT 100";
    $url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Authorization: OAuth $access_token"));

    $json_response = curl_exec($curl);
    curl_close($curl);

    $response = json_decode($json_response, true);

    $total_size = $response['totalSize'];

    echo "$total_size record(s) returned<br/><br/>";
    foreach ((array) $response['records'] as $record) {
        echo $record['Id'] . ", " . $record['Name'] . "<br/>";
    }
    echo "<br/>";
}


show_accounts($instance_url, $access_token);



