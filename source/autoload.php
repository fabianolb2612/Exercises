<?php
spl_autoload_register(function ($class) {
    $prefix = "source\\";
    $baseDir = __DIR__ . "/"; // correto pois está dentro de /source

    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";

    if (file_exists($file)) {
        require $file;
    }
});