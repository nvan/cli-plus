<?php

namespace nvan\CliPlus;

enum Formats
{
    case Bold;
    case Dim;
    case Underline;
    case Blink;
    case Reverse;
    case Hidden;

    public function getFormat(): int
    {
        return match($this) {
            self::Bold => 1,
            self::Dim => 2,
            self::Underline => 4,
            self::Blink => 5, // Blinking is unsupported by most terminals
            self::Reverse => 7,
            self::Hidden => 8
        };
    }
}
