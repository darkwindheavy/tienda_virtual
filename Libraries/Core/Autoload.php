<?php

spl_autoload_register(function ($class) {
    $filePath = "Libraries/Core/{$class}.php";
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

