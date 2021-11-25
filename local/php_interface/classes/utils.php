<?php

namespace Site;

/**
 * Вспомогательные функции для сайта
 */
class SiteUtils
{
    /**
     * @param int $from Начало интервала (Unix timestamp)
     * @param int $to Конец интервала (Unix timestamp)
     * 
     * @return bool
     * 
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function currentTimeInRange(int $from, int $to)
    {
        if ($to < $from)
        {
            throw new \Bitrix\Main\ArgumentException('$to < $from');
        }

        if ($to < 0 || $from < 0)
        {
            throw new \Bitrix\Main\ArgumentException('negative time stamp');
        }

        $now = time();

        if ($from <= $now && $now <= $to)
        {
            return true;
        }

        return false;
    }
}