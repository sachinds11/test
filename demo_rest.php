<?php
session_start();
$access_token = $_SESSION['access_token'];
$instance_url = $_SESSION['instance_url'];

echo "access token ::". $access_token. "<br>";
echo "instance_url ::". $instance_url. "<br>";


