<?php

/** @var array $arResult */

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

$MAX_STRING_LENGTH = 150;

foreach ($arResult['ITEMS'] as &$item)
{
    $item['DETAIL_TEXT'] = strip_tags($item['DETAIL_TEXT']);
    $item['DETAIL_TEXT'] = \Site\Utils::trimByWord($item['DETAIL_TEXT'], $MAX_STRING_LENGTH);

    $item['PHOTO'] = [];
    if ($item['PREVIEW_PICTURE'])
    {
        $item['PHOTO']['ALT'] = $item['PREVIEW_PICTURE']['ALT'];
        $item['PHOTO']['SRC'] = \CFile::ResizeImageGet(
            $item['PREVIEW_PICTURE'],
            [
                'width' => 64,
                'height' => 64,
            ]
        )['src'];
    }
}

unset($item);