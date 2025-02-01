<?php

echo "Werton says hello!";

echo "<br>";

$composerPath = realpath(__DIR__ . '/..') . '/composer.json';

$composer = json_decode(file_get_contents($composerPath));

echo "Version: " . $composer->version;