<?php

namespace App\Facades;

class TrimFacade
{
    public static function cleanText(string $text): string
    {
        $characters = ['.', ',', '?', '{', '}', '%', '$', '^', "'", '"', '<', '>', '!', '`', ';', "\n", '|', '½', '+', '-', '*', ':', 'æ', 'ß', '@', 'é'];

        return str_replace($characters, '', $text);
    }
}
