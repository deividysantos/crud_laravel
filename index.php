<?php
$url = $_SERVER["REQUEST_URI"];
header("Location: $url/public ");
die();