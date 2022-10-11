<?php

namespace nvan\CliPlus;

final class Console
{
    private static ?int $foregroundColor = null, $backgroundColor = null;
    private static array $format = [];

    public static function write(string ...$text): void {
        echo "\e[0",

            // Format
            implode(array_map(
                fn($format): string => ';' . $format,
                self::$format
            )),

            // Foreground and background colors
            self::$foregroundColor !== null ? ';' . self::$foregroundColor : '',
            self::$backgroundColor !== null ? ';' . self::$backgroundColor : '',
            'm';

        foreach($text as $part)
            echo $part;
    }

    public static function writeLine(string ...$text): void {
        $text[] = PHP_EOL;
        self::write(...$text);
    }

    public static function setForegroundColor(Colors $color): void
    {
        self::$foregroundColor = $color->getForegroundCode();
    }

    public static function setBackgroundColor(Colors $color): void
    {
        self::$backgroundColor = $color->getBackgroundCode();
    }

    public static function addFormat(Formats $format): void
    {
        if (in_array($format->getFormat(), self::$format))
            return;

        self::$format[] = $format->getFormat();
    }

    public static function removeFormat(Formats $format): void
    {
        $position = array_search($format->getFormat(), self::$format);

        if ($position === false)
            return;

        unset(self::$format[$position]);
    }

    public static function resetForegroundColor(): void
    {
        self::$foregroundColor = null;
    }

    public static function resetBackgroundColor(): void
    {
        self::$backgroundColor = null;
    }

    public static function resetColor(): void
    {
        self::resetForegroundColor();
        self::resetBackgroundColor();
    }

    public static function resetFormat(): void
    {
        self::$format = [];
    }

    public static function reset(): void
    {
        self::resetColor();
        self::resetFormat();
    }
}
