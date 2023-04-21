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
	public const Bold = "\033".'[1m';
	public const Dim = "\033".'[2m';
	public const Underline = "\033".'[4m';
	public const Blink = "\033".'[5m';
	public const Inverted = "\033".'[7m';
}

/**
 *  Styles resets
 */
final class CLITSResets {
	public const All = "\033".'[0m';
	public const Bold = "\033".'[21m';
	public const Dim = "\033".'[22m';
	public const Underline = "\033".'[24m';
	public const Blink = "\033".'[25m';
	public const Inverted = "\033".'[27m';
}

/**
 *  Foreground colors
 */
final class CLITS16ForeColors {
	public const System = "\033".'[39m';
	public const Black = "\033".'[30m';
	public const Red = "\033".'[31m';
	public const Green = "\033".'[32m';
	public const Yellow = "\033".'[33m';
	public const Blue = "\033".'[34m';
	public const Magenta = "\033".'[35m';
	public const Cyan = "\033".'[36m';
	public const LightGray = "\033".'[37m';
	public const DarkGray = "\033".'[90m';
	public const LightRed = "\033".'[91m';
	public const LightGreen = "\033".'[92m';
	public const LightYellow = "\033".'[93m';
	public const LightBlue = "\033".'[94m';
	public const LightMagenta = "\033".'[95m';
	public const LightCyan = "\033".'[96m';
	public const White = "\033".'[97m';
}

/**
 *  Background colors
 */
final class CLITS16BackColors {
	public const System = "\033".'[49m';
	public const Black = "\033".'[40m';
	public const Red = "\033".'[41m';
	public const Green = "\033".'[42m';
	public const Yellow = "\033".'[43m';
	public const Blue = "\033".'[44m';
	public const Magenta = "\033".'[45m';
	public const Cyan = "\033".'[46m';
	public const LightGray = "\033".'[47m';
	public const DarkGray = "\033".'[100m';
	public const LightRed = "\033".'[101m';
	public const LightGreen = "\033".'[102m';
	public const LightYellow = "\033".'[103m';
	public const LightBlue = "\033".'[104m';
	public const LightMagenta = "\033".'[105m';
	public const LightCyan = "\033".'[106m';
	public const White = "\033".'[107m';
}

?>