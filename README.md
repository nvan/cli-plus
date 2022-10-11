CLI Plus
--------
CLI Plus is a little PHP library that allows you to set colors and format to the
text that's being output to the Terminal / Command Line.

This is useful if you make apps that run on Command Line and you want to make
them look nicer.

It's based on the idea of how the console is used in C# or other languages.

## How to use
First of all import the library via composer:
```bash
composer require nvan/cli-plus
```

Once you have installed the library:
```php
use nvan\CliPlus\Console;
Console::writeLine('Hello world!');
Console::write('This is on the next line!');
Console::write('But this is not!');
```

You can apply foreground (text) color, and background color doing:
```php
use nvan\CliPlus\Colors;
Console::setForegroundColor(Colors::White);
Console::setBackgroundColor(Colors::Red);
Console::write('This text is white with red background!');
```

And to apply styles do:
```php
use nvan\CliPlus\Formats;
Console::setFormat(Formats::Bold);
Console::write('This text is bold!');
```

Formats and colors lists with examples are available at:
https://misc.flogisoft.com/bash/tip_colors_and_formatting

## Future updates
I'm planning to add some kind of user input processing, kind of nextInt,
nextX(type) from Java.

Also, I want to implement some features like reading passwords while the text is
hidden (a little linux-style), even tough this can be done, but not as simple as
it'll be with next updates, by doing something like:
```php
Console::write('Enter your password: ');
Console::addFormat(Formats::Hidden);
Console::write();
$pass = readline();
Console::removeFormat(Formats::Hidden);

if($pass === '12345') {
    Console::setForegroundColor(Colors::LightGreen);
    Console::writeLine('Password is correct! Welcome!');
}
```

## Donations
If you use and like this library, consider buying me a 🍺 beer.

You can donate via **PayPal**:

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://paypal.me/maduranma)

## License
MIT
