<?php

// Автозагрузка классов

use Bitrix\Main\Loader;

$documentRoot = \Bitrix\Main\Application::getDocumentRoot();

Loader::registerAutoLoadClasses(
    null,
    [
        '\\Site\\Utils' => '/local/php_interface/classes/utils.php',
    ]
);