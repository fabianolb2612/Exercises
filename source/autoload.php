<?php
spl_autoload_register(function ($class) {
    $prefix = "source\\";
<<<<<<< HEAD
    $baseDir = __DIR__ . "/"; // correto pois está dentro de /source

=======
    $baseDir = __DIR__ . "/";
>>>>>>> 348ded57c989eeedc3a03f9dcbe61f5c20836a27
    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";
<<<<<<< HEAD

=======
>>>>>>> 348ded57c989eeedc3a03f9dcbe61f5c20836a27
    if (file_exists($file)) {
        require $file;
    }
});