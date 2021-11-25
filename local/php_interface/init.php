<?php

// Автозагрузка классов

use Bitrix\Main\Loader;

$documentRoot = \Bitrix\Main\Application::getDocumentRoot();

Loader::registerAutoLoadClasses(
    null,
    [
        '\\Site\\SiteUtils' => '/local/php_interface/classes/utils.php',
    ]
);