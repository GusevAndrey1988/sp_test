<?php

namespace Site;

/**
 * Вспомогательные функции для сайта
 */
class Utils
{
    /**
     * @param int $from Начало интервала (Unix timestamp)
     * @param int $to Конец интервала (Unix timestamp)
     * 
     * @return bool
     * 
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function currentTimeInRange(int $from, int $to): bool
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

    /**
     * Обрезает текст по слову
     * 
     * @param string $text Текст
     * @param int $length Жедаемая длинна текста (в символах)
     * @param string $ending Окончание текста
     * 
     * @return string Обрезанный текст
     */
    public static function trimByWord(string $text, int $length, string $ending = ' &#8230;'): string
    {
        if (mb_strlen($text) > $length)
        {
            if (($realPos = mb_strpos($text, ' ', $length)) !== false)
            {
                $text = mb_substr($text, 0, $realPos);
            }
            $text .= $ending;
        }

        return $text;
    }
}