<?php
namespace nvan\CliPlus;

enum Colors {
    case Black;
    case Red;
    case Green;
    case Yellow;
    case Blue;
    case Magenta;
    case Cyan;
    case LightGray;
    case DarkGray;
    case LightRed;
    case LightGreen;
    case LightYellow;
    case LightBlue;
    case LightMagenta;
    case LightCyan;
    case White;

    public function getForegroundCode(): int {
        return match($this) {
            self::Black => 30,
            self::Red => 31,
            self::Green => 32,
            self::Yellow => 33,
            self::Blue => 34,
            self::Magenta => 35,
            self::Cyan => 36,
            self::LightGray => 37,
            self::DarkGray => 90,
            self::LightRed => 91,
            self::LightGreen => 92,
            self::LightYellow => 93,
            self::LightBlue => 94,
            self::LightMagenta => 95,
            self::LightCyan => 96,
            self::White => 97
        };
    }

    public function getBackgroundCode(): int {
        return match($this) {
            self::Black => 40,
            self::Red => 41,
            self::Green => 42,
            self::Yellow => 43,
            self::Blue => 44,
            self::Magenta => 45,
            self::Cyan => 46,
            self::LightGray => 47,
            self::DarkGray => 100,
            self::LightRed => 101,
            self::LightGreen => 102,
            self::LightYellow => 103,
            self::LightBlue => 104,
            self::LightMagenta => 105,
            self::LightCyan => 106,
            self::White => 107
        };
    }
}
