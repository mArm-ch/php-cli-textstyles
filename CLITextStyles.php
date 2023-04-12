<?php

/**
 * PHP CLI TextStyles
 * 
 * @version 1.0.0
 * @author David 'mArm' Ansermot
 * 
 * @url https://github.com/mArm-ch/php-cli-textstyles
 * @twitter david_ansermot
 * @github https://github.com/mArm-ch
 * 
 * @license MIT
 */

// MIT License
//
// Copyright (c) 2023 David Ansermot
//
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
//
// The above copyright notice and this permission notice shall be included in all
// copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
// SOFTWARE.


/**
 * General informations 
 */
final class CLITS {
	public const author = 'David Ansermot';
	public const version = '1.0.0';
	public const url = 'https://github.com/mArm-ch/php-cli-textstyles';
}

/**
 *  Font styles
 */
final class CLITSFontStyles {
	public const Bold = "\033".'[1m'."\n";
	public const Dim = "\033".'[2m'."\n";
	public const Underline = "\033".'[4m'."\n";
	public const Blink = "\033".'[5m'."\n";
	public const Inverted = "\033".'[7m'."\n";
}

/**
 *  Styles resets
 */
final class CLITSResets {
	public const All = "\033".'[0m'."\n";
	public const Bold = "\033".'[21m'."\n";
	public const Dim = "\033".'[22m'."\n";
	public const Underline = "\033".'[24m'."\n";
	public const Blink = "\033".'[25m'."\n";
	public const Inverted = "\033".'[27m'."\n";
}

/**
 *  Foreground colors
 */
final class CLITS16ForeColors {
	public const System = "\033".'[39m'."\n";
	public const Black = "\033".'[30m'."\n";
	public const Red = "\033".'[31m'."\n";
	public const Green = "\033".'[32m'."\n";
	public const Yellow = "\033".'[33m'."\n";
	public const Blue = "\033".'[34m'."\n";
	public const Magenta = "\033".'[35m'."\n";
	public const Cyan = "\033".'[36m'."\n";
	public const LightGray = "\033".'[37m'."\n";
	public const DarkGray = "\033".'[90m'."\n";
	public const LightRed = "\033".'[91m'."\n";
	public const LightGreen = "\033".'[92m'."\n";
	public const LightYellow = "\033".'[93m'."\n";
	public const LightBlue = "\033".'[94m'."\n";
	public const LightMagenta = "\033".'[95m'."\n";
	public const LightCyan = "\033".'[96m'."\n";
	public const White = "\033".'[97m'."\n";
}

/**
 *  Background colors
 */
final class CLITS16BackColors {
	public const System = "\033".'[49m'."\n";
	public const Black = "\033".'[40m'."\n";
	public const Red = "\033".'[41m'."\n";
	public const Green = "\033".'[42m'."\n";
	public const Yellow = "\033".'[43m'."\n";
	public const Blue = "\033".'[44m'."\n";
	public const Magenta = "\033".'[45m'."\n";
	public const Cyan = "\033".'[46m'."\n";
	public const LightGray = "\033".'[47m'."\n";
	public const DarkGray = "\033".'[100m'."\n";
	public const LightRed = "\033".'[101m'."\n";
	public const LightGreen = "\033".'[102m'."\n";
	public const LightYellow = "\033".'[103m'."\n";
	public const LightBlue = "\033".'[104m'."\n";
	public const LightMagenta = "\033".'[105m'."\n";
	public const LightCyan = "\033".'[106m'."\n";
	public const White = "\033".'[107m'."\n";
}

?>