<?php

echo "Werton says hello!";

echo "<br>";

$composer = json_decode(file_get_contents(__DIR__ . '/composer.json'));

echo "Version: " . $composer->version;