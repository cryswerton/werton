<?php

echo "Werton says hello!";

echo "<br>";

$composerPath = realpath(__DIR__ . '/..') . '/composer.json';

echo $composerPath;

$composer = json_decode(file_get_contents($composerPath));

echo "Version: " . $composer->version;